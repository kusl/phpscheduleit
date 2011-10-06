<?php
require_once(ROOT_DIR . 'Pages/Page.php');
require_once(ROOT_DIR . 'Presenters/RegistrationPresenter.php');
require_once(ROOT_DIR . 'config/timezones.php');
require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');

interface IRegistrationPage extends IPage
{
	public function RegisterClicked();
	
	public function SetTimezones($timezoneValues, $timezoneOutput);
	public function SetTimezone($timezone);
	public function SetHomepages($hompeageValues, $homepageOutput);
	public function SetHomepage($homepage);
	public function SetLoginName($loginName);	
	public function SetEmail($email);
	public function SetFirstName($firstName);
	public function SetLastName($lastName);
	public function SetPhone($phoneNumber);
	public function SetOrganization($organization);
	public function SetPosition($position);
	public function SetPassword($password);
	public function SetPasswordConfirm($passwordConfirm);
	
	public function GetTimezone();
	public function GetHomepage();
	public function GetLoginName();	
	public function GetEmail();
	public function GetFirstName();
	public function GetLastName();
	public function GetPhone();
	public function GetOrganization();
	public function GetPosition();
	public function GetPassword();
	public function GetPasswordConfirm();
}

class RegistrationPage extends Page implements IRegistrationPage
{
	public function __construct()
	{
		parent::__construct('Registration');
		
		$this->_presenter = new RegistrationPresenter($this);			
	}
	
	public function PageLoad()
	{
		$this->_presenter->PageLoad();
		
		$this->smarty->display('register.tpl');				
	}
	
	public function RegisterClicked()
	{
		return $this->GetForm(Actions::REGISTER);
	}
	
	public function SetTimezones($timezoneValues, $timezoneOutput)
	{
		$this->Set('TimezoneValues', $timezoneValues);
		$this->Set('TimezoneOutput', $timezoneOutput);
	}
	
	public function SetTimezone($timezone)
	{
		$this->Set('Timezone', $timezone);	
	}
	
	public function SetHomepages($homepageValues, $homepageOutput)
	{
		$this->Set('HomepageValues', $homepageValues);
		$this->Set('HomepageOutput', $homepageOutput);
	}
	
	public function SetHomepage($homepage)
	{
		$this->Set('Homepage', $homepage);
	}
	
	public function SetLoginName($loginName)
	{
		$this->Set('LoginName', $loginName);	
	}	
	
	public function SetEmail($email)
	{
		$this->Set('Email', $email);	
	}	
	
	public function SetFirstName($firstName)
	{
		$this->Set('FirstName', $firstName);	
	}
	
	public function SetLastName($lastName)
	{
		$this->Set('LastName', $lastName);	
	}	
	
	public function SetPhone($phoneNumber)
	{
		$this->Set('PhoneNumber', $phoneNumber);	
	}
	
	public function SetOrganization($organization)
	{
       	$this->Set('Organization', $organization);	
	}
	
	public function SetPosition($position)
	{
		$this->Set('Position', $position);	
	}
	
	public function SetPassword($password)
	{
		$this->Set('Password', $password);	
	}	
	
	public function SetPasswordConfirm($passwordConfirm)
	{
		$this->Set('PasswordConfirm', $passwordConfirm);	
	}
	
	public function GetTimezone()
	{
		return $this->GetForm(FormKeys::TIMEZONE);
	}
	
	public function GetHomepage()
	{
		return $this->GetForm(FormKeys::DEFAULT_HOMEPAGE);
	}
	
	public function GetLoginName()
	{
		return $this->GetForm(FormKeys::LOGIN);
	}
	
	public function GetEmail()
	{
		return $this->GetForm(FormKeys::EMAIL);
	}
	
	public function GetFirstName()
	{
		return $this->GetForm(FormKeys::FIRST_NAME);
	}
	
	public function GetLastName()
	{
		return $this->GetForm(FormKeys::LAST_NAME);
	}
	
	public function GetPhone()
	{
		return $this->GetForm(FormKeys::PHONE);
	}
	
	public function GetOrganization()
    {
	 	return $this->GetForm(FormKeys::ORGANIZATION);
    }
	
	public function GetPosition()
	{
		return $this->GetForm(FormKeys::POSITION);
	}
	
	public function GetPassword()
	{
		return $this->GetForm(FormKeys::PASSWORD);
	}
	
	public function GetPasswordConfirm()
	{
		return $this->GetForm(FormKeys::PASSWORD_CONFIRM);
	}
}
?>