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


require_once(ROOT_DIR . 'Domain/User.php');
require_once(ROOT_DIR . 'Domain/Values/AccountStatus.php');
require_once(ROOT_DIR . 'Domain/Values/FullName.php');

interface IUserRepository extends IUserViewRepository
{
	/**
	 * @param int $userId
	 * @return User
	 */
	function LoadById($userId);

	/**
	 * @param string $publicId
	 * @return User
	 */
	function LoadByPublicId($publicId);

	/**
	 * @param string $userName
	 * @return User
	 */
	function LoadByUsername($userName);

	/**
	 * @abstract
	 * @param User $user
	 * @return void
	 */
	function Update(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return int
	 */
	function Add(User $user);

	/**
	 * @abstract
	 * @param $userId int
	 * @return void
	 */
	function DeleteById($userId);
}

interface IUserViewRepository
{
	/**
	 * @param int $userId
	 * @return UserDto
	 */
	function GetById($userId);

	/**
	 * @return array[int]UserDto
	 */
	function GetAll();

	/**
	 * @param int $pageNumber
	 * @param int $pageSize
	 * @param null|string $sortField
	 * @param null|string $sortDirection
	 * @param null|ISqlFilter $filter
	 * @param AccountStatus|int $accountStatus
	 * @return PageableData|UserItemView[]
	 */
	public function GetList($pageNumber, $pageSize, $sortField = null, $sortDirection = null, $filter = null, $accountStatus = AccountStatus::ALL);

	/**
	 * @param int $resourceId
	 * @return array|UserDto[]
	 */
	function GetResourceAdmins($resourceId);

	/**
	 * @return array|UserDto[]
	 */
	function GetApplicationAdmins();

	/**
	 * @param int $userId
	 * @return array|UserDto[]
	 */
	function GetGroupAdmins($userId);

	/**
	 * @abstract
	 * @param $userId int
	 * @param $roleLevel int|null
	 * @return array|UserGroup[]
	 */
	function LoadGroups($userId, $roleLevel = null);
}

interface IAccountActivationRepository
{
	/**
	 * @abstract
	 * @param User $user
	 * @param string $activationCode
	 * @return void
	 */
	public function AddActivation(User $user, $activationCode);

	/**
	 * @abstract
	 * @param string $activationCode
	 * @return int|null
	 */
	public function FindUserIdByCode($activationCode);

	/**
	 * @abstract
	 * @param string $activationCode
	 * @return void
	 */
	public function DeleteActivation($activationCode);
}

class UserRepository implements IUserRepository, IAccountActivationRepository
{
	/**
	 * @var DomainCache
	 */
	private $_cache;

	public function __construct()
	{
		$this->_cache = new DomainCache();
	}

	public function GetAll()
	{
		$command = new GetAllUsersByStatusCommand(AccountStatus::ACTIVE);

		$reader = ServiceLocator::GetDatabase()->Query($command);
		$users = array();

		while ($row = $reader->GetRow())
		{
			$users[] = new UserDto($row[ColumnNames::USER_ID], $row[ColumnNames::FIRST_NAME], $row[ColumnNames::LAST_NAME], $row[ColumnNames::EMAIL], $row[ColumnNames::TIMEZONE_NAME], $row[ColumnNames::LANGUAGE_CODE]);
		}

		return $users;
	}

	/**
	 * @param $userId
	 * @return null|UserDto
	 */
	public function GetById($userId)
	{
		$command = new GetUserByIdCommand($userId);

		$reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow())
		{
			return new UserDto($row[ColumnNames::USER_ID], $row[ColumnNames::FIRST_NAME], $row[ColumnNames::LAST_NAME], $row[ColumnNames::EMAIL], $row[ColumnNames::TIMEZONE_NAME], $row[ColumnNames::LANGUAGE_CODE]);
		}

		return null;
	}

	public function GetList($pageNumber, $pageSize, $sortField = null, $sortDirection = null, $filter = null, $accountStatus = AccountStatus::ALL)
	{
		$command = new GetAllUsersByStatusCommand($accountStatus);

		if ($filter != null)
		{
			$command = new FilterCommand($command, $filter);
		}

		$builder = array('UserItemView', 'Create');
		return PageableDataStore::GetList($command, $builder, $pageNumber, $pageSize);
	}

	/**
	 * @param $command SqlCommand
	 * @return User
	 */
	private function Load($command)
	{
		$reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow())
		{
			$userId = $row[ColumnNames::USER_ID];
			$emailPreferences = $this->LoadEmailPreferences($userId);
			$permissions = $this->LoadPermissions($userId);
			$groups = $this->LoadGroups($userId);

			$user = User::FromRow($row);
			$user->WithEmailPreferences($emailPreferences);
			$user->WithPermissions($permissions);
			$user->WithGroups($groups);

			$this->LoadAttributes($userId, $user);

			$this->_cache->Add($userId, $user);

			return $user;
		} else
		{
			return User::Null();
		}
	}

	/**
	 * @param int $userId
	 * @return User
	 */
	public function LoadById($userId)
	{
		if (!$this->_cache->Exists($userId))
		{
			$command = new GetUserByIdCommand($userId);
			return $this->Load($command);
		} else
		{
			return $this->_cache->Get($userId);
		}
	}

	/**
	 * @param string $publicId
	 * @return User
	 */
	public function LoadByPublicId($publicId)
	{
		$command = new GetUserByPublicIdCommand($publicId);
		return $this->Load($command);
	}

	/**
	 * @param string $userName
	 * @return User
	 */
	public function LoadByUsername($userName)
	{
		$command = new LoginCommand(strtolower($userName));
		return $this->Load($command);
	}

	/**
	 * @param User $user
	 * @return int
	 */
	public function Add(User $user)
	{
		$db = ServiceLocator::GetDatabase();
		$id = $db->ExecuteInsert(new RegisterUserCommand($user->Username(), $user->EmailAddress(), $user->FirstName(),
			$user->LastName(), $user->encryptedPassword, $user->passwordSalt, $user->Timezone(), $user->Language(),
			$user->Homepage(), $user->GetAttribute(UserAttribute::Phone), $user->GetAttribute(UserAttribute::Organization),
			$user->GetAttribute(UserAttribute::Position), $user->StatusId()));

		$user->WithId($id);

		foreach ($user->GetAddedAttributes() as $added)
		{
			$db->Execute(new AddAttributeValueCommand($added->AttributeId, $added->Value, $user->Id(), CustomAttributeCategory::USER));
		}

		return $id;
	}

	/**
	 * @param User $user
	 * @return void
	 */
	public function Update(User $user)
	{
		$userId = $user->Id();

		$db = ServiceLocator::GetDatabase();
		$updateUserCommand = new UpdateUserCommand($user->Id(),
			$user->StatusId(),
			$user->encryptedPassword,
			$user->passwordSalt,
			$user->FirstName(),
			$user->LastName(),
			$user->EmailAddress(),
			$user->Username(),
			$user->Homepage(),
			$user->Timezone(),
			$user->LastLogin(),
			$user->GetIsCalendarSubscriptionAllowed(),
			$user->GetPublicId(),
			$user->Language());
		$db->Execute($updateUserCommand);

		$removedPermissions = $user->GetRemovedPermissions();
		foreach ($removedPermissions as $resourceId)
		{
			$db->Execute(new DeleteUserResourcePermission($userId, $resourceId));
		}

		$addedPermissions = $user->GetAddedPermissions();
		foreach ($addedPermissions as $resourceId)
		{
			$db->Execute(new AddUserResourcePermission($userId, $resourceId));
		}

		if ($user->HaveAttributesChanged())
		{
			$updateAttributesCommand = new UpdateUserAttributesCommand($userId, $user->GetAttribute(UserAttribute::Phone), $user->GetAttribute(UserAttribute::Organization), $user->GetAttribute(UserAttribute::Position));
			$db->Execute($updateAttributesCommand);
		}

		$removedPreferences = $user->GetRemovedEmailPreferences();
		foreach ($removedPreferences as $event)
		{
			$db->Execute(new DeleteEmailPreferenceCommand($userId, $event->EventCategory(), $event->EventType()));
		}

		$addedPreferences = $user->GetAddedEmailPreferences();
		foreach ($addedPreferences as $event)
		{
			$db->Execute(new AddEmailPreferenceCommand($userId, $event->EventCategory(), $event->EventType()));
		}

		foreach ($user->GetRemovedAttributes() as $removed)
		{
			$db->Execute(new RemoveAttributeValueCommand($removed->AttributeId, $user->Id()));
		}

		foreach ($user->GetAddedAttributes() as $added)
		{
			$db->Execute(new AddAttributeValueCommand($added->AttributeId, $added->Value, $user->Id(), CustomAttributeCategory::USER));
		}
	}

	public function DeleteById($userId)
	{
		$deleteUserCommand = new DeleteUserCommand($userId);
		ServiceLocator::GetDatabase()->Execute($deleteUserCommand);
	}

	public function LoadEmailPreferences($userId)
	{
		$emailPreferences = new EmailPreferences();

		$command = new GetUserEmailPreferencesCommand($userId);
		$reader = ServiceLocator::GetDatabase()->Query($command);

		while ($row = $reader->GetRow())
		{
			$emailPreferences->Add($row[ColumnNames::EVENT_CATEGORY], $row[ColumnNames::EVENT_TYPE]);
		}

		return $emailPreferences;
	}

	/**
	 * @param int $resourceId
	 * @return array|UserDto[]
	 */
	public function GetResourceAdmins($resourceId)
	{
		$command = new GetAllResourceAdminsCommand($resourceId);

		$reader = ServiceLocator::GetDatabase()->Query($command);
		$users = array();

		while ($row = $reader->GetRow())
		{
			$users[] = new UserDto($row[ColumnNames::USER_ID], $row[ColumnNames::FIRST_NAME], $row[ColumnNames::LAST_NAME], $row[ColumnNames::EMAIL], $row[ColumnNames::TIMEZONE_NAME], $row[ColumnNames::LANGUAGE_CODE]);
		}

		return $users;
	}

	/**
	 * @return array|UserDto[]
	 */
	public function GetApplicationAdmins()
	{
		$command = new GetAllApplicationAdminsCommand();
		$reader = ServiceLocator::GetDatabase()->Query($command);
		$users = array();

		while ($row = $reader->GetRow())
		{
			$users[] = new UserDto($row[ColumnNames::USER_ID], $row[ColumnNames::FIRST_NAME], $row[ColumnNames::LAST_NAME], $row[ColumnNames::EMAIL], $row[ColumnNames::TIMEZONE_NAME], $row[ColumnNames::LANGUAGE_CODE]);
		}

		return $users;
	}

	/**
	 * @param int $userId
	 * @return array|UserDto[]
	 */
	public function GetGroupAdmins($userId)
	{
		$command = new GetAllGroupAdminsCommand($userId);
		$reader = ServiceLocator::GetDatabase()->Query($command);
		$users = array();

		while ($row = $reader->GetRow())
		{
			$users[] = new UserDto($row[ColumnNames::USER_ID], $row[ColumnNames::FIRST_NAME], $row[ColumnNames::LAST_NAME], $row[ColumnNames::EMAIL], $row[ColumnNames::TIMEZONE_NAME], $row[ColumnNames::LANGUAGE_CODE]);
		}

		return $users;
	}

	private function LoadPermissions($userId)
	{
		$allowedResourceIds = array();

		$command = new GetUserPermissionsCommand($userId);
		$reader = ServiceLocator::GetDatabase()->Query($command);

		while ($row = $reader->GetRow())
		{
			$allowedResourceIds[] = $row[ColumnNames::RESOURCE_ID];
		}

		return $allowedResourceIds;
	}

	public function LoadGroups($userId, $roleLevel = null)
	{
		/**
		 * @var $groups array|UserGroup[]
		 */
		$groups = array();

		$command = new GetUserGroupsCommand($userId, $roleLevel);
		$reader = ServiceLocator::GetDatabase()->Query($command);

		while ($row = $reader->GetRow())
		{
			$groupId = $row[ColumnNames::GROUP_ID];
			if (!array_key_exists($groupId, $groups))
			{
				// a group can have many roles which are all returned at once
				$group = new UserGroup($groupId, $row[ColumnNames::GROUP_NAME], $row[ColumnNames::GROUP_ADMIN_GROUP_ID], $row[ColumnNames::ROLE_LEVEL]);
				$groups[$groupId] = $group;
			} else
			{
				$groups[$groupId]->AddRole($row[ColumnNames::ROLE_LEVEL]);
			}
		}

		return array_values($groups);
	}

	/**
	 * @param $emailAddress string
	 * @return User
	 */
	public function FindByEmail($emailAddress)
	{
		$command = new CheckEmailCommand($emailAddress);
		$reader = ServiceLocator::GetDatabase()->Query($command);

		if ($row = $reader->GetRow())
		{
			return $this->LoadById($row[ColumnNames::USER_ID]);
		}

		return null;
	}

	/**
	 * @param $userId int
	 * @param $user User
	 */
	private function LoadAttributes($userId, $user)
	{
		$getAttributes = new GetAttributeValuesCommand($userId, CustomAttributeCategory::USER);
		$attributeReader = ServiceLocator::GetDatabase()->Query($getAttributes);

		while ($attributeRow = $attributeReader->GetRow())
		{
			$user->WithAttribute(new AttributeValue($attributeRow[ColumnNames::ATTRIBUTE_ID], $attributeRow[ColumnNames::ATTRIBUTE_VALUE]));
		}

		$attributeReader->Free();
	}

	public function AddActivation(User $user, $activationCode)
	{
		ServiceLocator::GetDatabase()->ExecuteInsert(new AddAccountActivationCommand($user->Id(), $activationCode));
	}

	/**
	 * @param string $activationCode
	 * @return int|null
	 */
	public function FindUserIdByCode($activationCode)
	{
		$reader = ServiceLocator::GetDatabase()->Query(new GetUserIdByActivationCodeCommand($activationCode));
		if ($row = $reader->GetRow())
		{
			return $row[ColumnNames::USER_ID];
		}

		return null;
	}

	/**
	 * @param string $activationCode
	 * @return void
	 */
	public function DeleteActivation($activationCode)
	{
		ServiceLocator::GetDatabase()->Execute(new DeleteAccountActivationCommand($activationCode));
	}
}

class UserDto
{

	private $userId;
	private $firstName;
	private $lastName;
	private $emailAddress;
	private $timezone;
	private $languageCode;

	public function __construct($userId, $firstName, $lastName, $emailAddress, $timezone = null, $languageCode = null)
	{
		$this->userId = $userId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->emailAddress = $emailAddress;
		$this->timezone = $timezone;
		$this->languageCode = $languageCode;
	}

	public function Id()
	{
		return $this->userId;
	}

	public function FirstName()
	{
		return $this->firstName;
	}

	public function LastName()
	{
		return $this->lastName;
	}

	public function FullName()
	{
		$name = new FullName($this->FirstName(), $this->LastName());
		return $name->__toString();
	}

	public function EmailAddress()
	{
		return $this->emailAddress;
	}

	public function Timezone()
	{
		return $this->timezone;
	}

	public function Language()
	{
		return $this->languageCode;
	}

}

class NullUserDto extends UserDto
{

	public function __construct()
	{
		parent::__construct(0, null, null, null, null, null);
	}

	public function FullName()
	{
		return null;
	}

}

class UserItemView
{
	public $Id;
	public $Username;
	public $First;
	public $Last;
	public $Email;
	public $Phone;
	public $DateCreated;
	public $LastLogin;
	public $StatusId;
	public $Timezone;
	public $Organization;
	public $Position;
	public $Language;

	public function IsActive()
	{
		return $this->StatusId == AccountStatus::ACTIVE;
	}

	public static function Create($row)
	{
		$user = new UserItemView();

		$user->Id = $row[ColumnNames::USER_ID];
		$user->Username = $row[ColumnNames::USERNAME];
		$user->First = $row[ColumnNames::FIRST_NAME];
		$user->Last = $row[ColumnNames::LAST_NAME];
		$user->Email = $row[ColumnNames::EMAIL];
		$user->Phone = $row[ColumnNames::PHONE_NUMBER];
		$user->DateCreated = Date::FromDatabase($row[ColumnNames::USER_CREATED]);
		$user->LastLogin = Date::FromDatabase($row[ColumnNames::LAST_LOGIN]);
		$user->StatusId = $row[ColumnNames::USER_STATUS_ID];
		$user->Timezone = $row[ColumnNames::TIMEZONE_NAME];
		$user->Organization = $row[ColumnNames::ORGANIZATION];
		$user->Position = $row[ColumnNames::POSITION];
		$user->Language = $row[ColumnNames::LANGUAGE_CODE];

		return $user;
	}
}

?>