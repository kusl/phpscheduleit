<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');
require_once(ROOT_DIR . 'lib/Common/namespace.php');
require_once(ROOT_DIR . 'lib/Server/namespace.php');
require_once(ROOT_DIR . 'lib/Config/namespace.php');


class AuthenticationTests extends TestBase
{
	private $username;
	private $password;
	private $id;
	private $fname;
	private $lname;
	private $email;
	private $isAdmin;
	private $timezone;
	private $lastLogin;
	private $homepageId;
	private $languageCode;

	/**
	 * @var Authentication
	 */
	private $auth;

	/**
	 * @var FakePassword
	 */
	private $fakePassword;

	/**
	 * @var FakeMigration
	 */
	private $fakeMigration;

	/**
	 * @var IRoleService|PHPUnit_Framework_MockObject_MockObject
	 */
	private $authorization;

	/**
	 * @var WebLoginContext
	 */
	private $loginContext;

	/**
	 * @var FakeUser
	 */
	private $user;

	/**
	 * @var IUserRepository|PHPUnit_Framework_MockObject_MockObject
	 */
	private $userRepository;

	function setup()
	{
		parent::setup();

		$this->username = 'LoGInName';
		$this->password = 'password';
		$this->id = 191;
		$this->fname = 'Test';
		$this->lname = 'Name';
		$this->email = 'my@email.com';
		$this->isAdmin = true;
		$this->timezone = "US/Central";
		$this->lastLogin = time();
		$this->homepageId = 2;
		$this->languageCode = 'en_us';

		$this->user = new FakeUser();
		$this->user->WithId($this->id);
		$this->user->ChangeName($this->fname, $this->lname);
		$this->user->ChangeEmailAddress($this->email);
		$this->user->ChangeTimezone($this->timezone);
		$this->user->ChangeDefaultHomePage($this->homepageId);
		$this->user->SetLanguage($this->languageCode);
		$this->user->Activate();

		$this->fakePassword = new FakePassword();
		$this->fakeMigration = new FakeMigration();
		$this->fakeMigration->_Password = $this->fakePassword;

		$this->authorization = $this->getMock('IRoleService');
		$this->userRepository = $this->getMock('IUserRepository');

		$this->auth = new Authentication($this->authorization, $this->userRepository);
		$this->auth->SetMigration($this->fakeMigration);

		$this->loginContext = new WebLoginContext($this->fakeServer, new LoginData());
	}

	function testValidateChecksAgainstDB()
	{
		$id = 10;
		$oldPassword = 'oldpassword';

		$rows = array(array(ColumnNames::USER_ID => $id, ColumnNames::PASSWORD => null, ColumnNames::SALT => null, ColumnNames::OLD_PASSWORD => $oldPassword));
		$this->db->SetRows($rows);

		$this->auth->Validate($this->username, $this->password);

		$command = new AuthorizationCommand(strtolower($this->username), $this->password);

		$this->assertEquals($command, $this->db->_LastCommand);
	}

	function testLoginGetsUserDataFromDatabase()
	{
		$language = 'en_gb';

		$this->userRepository->expects($this->once())
				->method('LoadByUsername')
				->with($this->equalTo($this->username))
				->will($this->returnValue($this->user));

		LoginTime::$Now = time();

		$this->user->Login(LoginTime::Now(), $language);

		$this->userRepository->expects($this->once())
				->method('Update')
				->with($this->equalTo($this->user));

		$this->authorization->expects($this->once())
				->method('IsApplicationAdministrator')
				->with($this->equalTo($this->user))
				->will($this->returnValue(true));

		$this->authorization->expects($this->once())
				->method('IsGroupAdministrator')
				->with($this->equalTo($this->user))
				->will($this->returnValue(true));

		$this->authorization->expects($this->once())
				->method('IsResourceAdministrator')
				->with($this->equalTo($this->user))
				->will($this->returnValue(true));

		$this->authorization->expects($this->once())
				->method('IsScheduleAdministrator')
				->with($this->equalTo($this->user))
				->will($this->returnValue(true));

		$context = new WebLoginContext($this->fakeServer, new LoginData(false, $language));
		$this->auth->Login($this->username, $context);

		$user = new UserSession($this->id);
		$user->FirstName = $this->fname;
		$user->LastName = $this->lname;
		$user->Email = $this->email;
		$user->Timezone = $this->timezone;
		$user->HomepageId = $this->homepageId;
		$user->SessionToken = $this->fakeServer->GetUserSession()->SessionToken;
		$user->IsAdmin = true;
		$user->IsGroupAdmin = true;
		$user->IsResourceAdmin = true;
		$user->IsScheduleAdmin = true;
		$user->LanguageCode = $language;

		$this->assertEquals($user, $this->fakeServer->GetUserSession());
	}

	function testMigratesPasswordNewPasswordHasNotBeenSet()
	{
		$id = 1;
		$password = 'plaintext';
		$username = 'user';

		$oldPassword = md5($password);

		$rows = array(array(ColumnNames::USER_ID => $id, ColumnNames::PASSWORD => null, ColumnNames::SALT => null, ColumnNames::OLD_PASSWORD => $oldPassword));
		$this->db->SetRows($rows);

		$this->fakePassword->_ValidateResult = true;

		$this->auth->Validate($username, $password);

		$this->assertTrue($this->fakeMigration->_CreateCalled);
		$this->assertEquals($password, $this->fakeMigration->_LastPlainText);
		$this->assertEquals($oldPassword, $this->fakeMigration->_LastOldPassword);
		$this->assertEquals(null, $this->fakeMigration->_LastNewPassword);

		$this->assertTrue($this->fakePassword->_ValidateCalled);
		$this->assertTrue($this->fakePassword->_MigrateCalled);
		$this->assertEquals(null, $this->fakePassword->_LastSalt);
		$this->assertEquals($id, $this->fakePassword->_LastUserId);
	}

	function testCanPersistLoginWhenValidLogin()
	{
		$now = mktime(10, 11, 12, 1, 2, 2000);
		LoginTime::$Now = $now;

		$this->userRepository->expects($this->once())
				->method('LoadByUsername')
				->with($this->equalTo($this->username))
				->will($this->returnValue($this->user));

		$hashedValue = sprintf("%s|%s", $this->id, LoginTime::Now());

		$loginContext = new WebLoginContext($this->fakeServer, new LoginData(true));
		$this->auth->Login($this->username, $loginContext);

		$expectedCookie = new Cookie(CookieKeys::PERSIST_LOGIN, $hashedValue);
		$this->assertEquals($expectedCookie->Value, $this->fakeServer->GetCookie(CookieKeys::PERSIST_LOGIN));
	}

	function testCanAutoLoginWithCookie()
	{
		$userid = 'userid';
		$lastLogin = LoginTime::Now();
		$email = 'email@address.com';
		$cookie = new LoginCookie($userid, $lastLogin);

		$this->userRepository->expects($this->once())
				->method('LoadByUsername')
				->with($this->equalTo($email))
				->will($this->returnValue($this->user));

		$rows = array(array(
						  ColumnNames::USER_ID => $userid,
						  ColumnNames::LAST_LOGIN => $lastLogin,
						  ColumnNames::EMAIL => $email
					  ));
		$this->db->SetRow(0, $rows);

		$valid = $this->auth->CookieLogin($cookie->Value, $this->loginContext);

		$cookieValidateCommand = new CookieLoginCommand($userid);

		$this->assertTrue($valid, 'should be valid if cookie matches');
		$this->assertEquals($cookieValidateCommand, $this->db->_Commands[0]);
	}

	function testDoesNotAutoLoginIfCookieNotValid()
	{
		$userid = 'userid';
		$lastLogin = LoginTime::Now();
		$email = 'email@address.com';
		$cookie = new LoginCookie($userid, $lastLogin);

		$rows = array(array(
						  ColumnNames::USER_ID => $userid,
						  ColumnNames::LAST_LOGIN => 'not the same thing',
						  ColumnNames::EMAIL => $email
					  ));
		$this->db->SetRows($rows);

		$valid = $this->auth->CookieLogin($cookie->Value, $this->loginContext);

		$this->assertFalse($valid, 'should not be valid if cookie does not match');
		$this->assertEquals(1, count($this->db->_Commands));
	}
	
	public function testLogsUserOut()
	{
		$userId = 100;
		$userSession = new FakeUserSession();
		$userSession->UserId = $userId;

		$loginCookie = new LoginCookie($userId, null);

		$this->auth->Logout($userSession);

		$this->assertEquals($loginCookie, $this->fakeServer->_DeletedCookie);
		$this->assertEquals(SessionKeys::USER_SESSION, $this->fakeServer->_EndedSession);
	}
}

class FakeMigration extends PasswordMigration
{
	public $_Password;
	public $_CreateCalled = false;
	public $_LastOldPassword;
	public $_LastNewPassword;
	public $_LastPlainText;

	public function Create($plaintext, $old, $new)
	{
		$this->_CreateCalled = true;
		$this->_LastPlainText = $plaintext;
		$this->_LastOldPassword = $old;
		$this->_LastNewPassword = $new;

		return $this->_Password;
	}
}

class FakePassword implements IPassword
{
	public $_ValidateCalled = false;
	public $_MigrateCalled = false;
	public $_LastSalt;
	public $_LastUserId;
	public $_ValidateResult = false;

	public function Validate($salt)
	{
		$this->_ValidateCalled = true;
		$this->_LastSalt = $salt;

		return $this->_ValidateResult;
	}

	public function Migrate($userid)
	{
		$this->_MigrateCalled = true;
		$this->_LastUserId = $userid;
	}
}

?>