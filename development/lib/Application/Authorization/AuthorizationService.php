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

interface IRoleService
{
	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsApplicationAdministrator(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsResourceAdministrator(User $user);

	/**
	 * @abstract
	 * @param User $user
	 * @return bool
	 */
	public function IsGroupAdministrator(User $user);
}

interface IAuthorizationService extends IRoleService
{
	/**
	 * @abstract
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @return bool
	 */
	public function CanReserveForOthers(UserSession $reserver);

	/**
	 * @abstract
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @param int $reserveForId user to reserve for
	 * @return bool
	 */
	public function CanReserveFor(UserSession $reserver, $reserveForId);

	/**
	 * @abstract
	 * @param UserSession $approver user who is requesting access to perform action
	 * @param int $approveForId user to approve for
	 * @return bool
	 */
	public function CanApproveFor(UserSession $approver, $approveForId);

}

class AuthorizationService implements IAuthorizationService
{
	/**
	 * @var IUserRepository
	 */
	private $userRepository;

	public function __construct(IUserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	/**
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @return bool
	 */
	public function CanReserveForOthers(UserSession $reserver)
	{
		if ($reserver->IsAdmin)
		{
			return true;
		}

		$user = $this->userRepository->LoadById($reserver->UserId);

		return $user->IsGroupAdmin();
	}

	/**
	 * @param UserSession $reserver user who is requesting access to perform action
	 * @param int $reserveForId user to reserve for
	 * @return bool
	 */
	public function CanReserveFor(UserSession $reserver, $reserveForId)
	{
		return $this->IsAdminFor($reserver, $reserveForId);
	}

	/**
	 * @param UserSession $approver user who is requesting access to perform action
	 * @param int $approveForId user to approve for
	 * @return bool
	 */
	public function CanApproveFor(UserSession $approver, $approveForId)
	{
		return $this->IsAdminFor($approver, $approveForId);
	}

	/**
	 * @param UserSession $user
	 * @param int $otherUserId
	 * @return bool
	 */
	private function IsAdminFor(UserSession $user, $otherUserId)
	{
		if ($user->IsAdmin)
		{
			return true;
		}

		$user1 = $this->userRepository->LoadById($user->UserId);
		$user2 = $this->userRepository->LoadById($otherUserId);

		return $user1->IsAdminFor($user2);
	}

	/**
	 * @param User $user
	 * @return bool
	 */
	public function IsApplicationAdministrator(User $user)
	{
		if ($user->EmailAddress() == Configuration::Instance()->GetKey(ConfigKeys::ADMIN_EMAIL))
		{
			return true;
		}

		return $user->IsInRole(RoleLevel::APPLICATION_ADMIN);
	}

	/**
	 * @param User $user
	 * @return bool
	 */
	public function IsResourceAdministrator(User $user)
	{
		return $user->IsInRole(RoleLevel::RESOURCE_ADMIN);
	}

	/**
	 * @param User $user
	 * @return bool
	 */
	public function IsGroupAdministrator(User $user)
	{
		return $user->IsInRole(RoleLevel::GROUP_ADMIN);
	}
}

//class AuthorizationUser
//{
//    public function __construct($userId, $emailAddress)
//    {
//        $this->userId = $userId;
//        $this->emailAddress = $emailAddress;
//    }
//
//    public function EmailAddress()
//    {
//        return $this->emailAddress;
//    }
//
//    public function UserId()
//    {
//        return $this->userId;
//    }
//
//}