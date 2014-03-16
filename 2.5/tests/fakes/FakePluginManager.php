<?php
/**
Copyright 2012-2014 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

class FakePluginManager extends PluginManager implements IPostRegistration//, IPreReservationFactory, IPostReservationFactory
{
    public function __construct()
    {

    }

    public $preResPlugin = null;
    public $postResPlugin = null;
	public $postRegistrationPlugin = null;
	public $_LoadedRegistration = false;
	public $_RegistrationUser = null;
	public $_RegistrationPage;

	public function LoadPreReservation()
    {
		return ($this->preResPlugin == null) ? $this : $this->preResPlugin;
    }

    public function LoadPostReservation()
    {
        return ($this->postResPlugin == null) ? $this : $this->postResPlugin;
    }

	public function LoadPostRegistration()
	{
		$this->_LoadedRegistration = true;
		return ($this->postRegistrationPlugin == null) ? $this : $this->postRegistrationPlugin;
	}

	public function HandleSelfRegistration(User $user, IRegistrationPage $page, ILoginContext $loginContext)
	{
		$this->_RegistrationUser = $user;
		$this->_RegistrationPage = $page;
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationNotificationService
	 */
	public function CreatePostAddService(UserSession $userSession)
	{
		// TODO: Implement CreatePostAddService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationNotificationService
	 */
	public function CreatePostDeleteService(UserSession $userSession)
	{
		// TODO: Implement CreatePostDeleteService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationNotificationService
	 */
	public function CreatePostApproveService(UserSession $userSession)
	{
		// TODO: Implement CreatePostApproveService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationValidationService
	 */
	public function CreatePreAddService(UserSession $userSession)
	{
		// TODO: Implement CreatePreAddService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationValidationService
	 */
	public function CreatePreDeleteService(UserSession $userSession)
	{
		// TODO: Implement CreatePreDeleteService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationNotificationService
	 */
	public function CreatePostUpdateService(UserSession $userSession)
	{
		// TODO: Implement CreatePostUpdateService() method.
	}

	/**
	 * @param UserSession $userSession
	 * @return IReservationValidationService
	 */
	public function CreatePreUpdateService(UserSession $userSession)
	{
		// TODO: Implement CreatePreUpdateService() method.
	}
}