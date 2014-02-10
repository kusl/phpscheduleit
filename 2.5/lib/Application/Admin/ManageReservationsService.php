<?php

/**
 * Copyright 2012-2014 Nick Korbel
 *
 * This file is part of Booked SchedulerBooked SchedulereIt is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later versBooked SchedulerduleIt is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * alBooked SchedulercheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */
interface IManageReservationsService
{
	/**
	 * @param $pageNumber int
	 * @param $pageSize int
	 * @param $filter ReservationFilter
	 * @param $user UserSession
	 * @return PageableData|ReservationItemView[]
	 */
	public function LoadFiltered($pageNumber, $pageSize, $filter, $user);

	/**
	 * @param  $referenceNumber string
	 * @param $user UserSession
	 * @return ReservationView|null
	 */
	public function LoadByReferenceNumber($referenceNumber, $user);
}

class ManageReservationsService implements IManageReservationsService
{
	/**
	 * @var IReservationViewRepository
	 */
	private $reservationViewRepository;

	/**
	 * @var IReservationAuthorization
	 */
	private $reservationAuthorization;

	public function __construct(IReservationViewRepository $reservationViewRepository, IReservationAuthorization $authorization)
	{
		$this->reservationViewRepository = $reservationViewRepository;
		$this->reservationAuthorization = $authorization;
	}

	public function LoadFiltered($pageNumber, $pageSize, $filter, $user)
	{
		return $this->reservationViewRepository->GetList($pageNumber, $pageSize, null, null, $filter->GetFilter());
	}

	public function LoadByReferenceNumber($referenceNumber, $user)
	{
		$reservation = $this->reservationViewRepository->GetReservationForEditing($referenceNumber);

		if ($this->reservationAuthorization->CanEdit($reservation, $user))
		{
			return $reservation;
		}

		return null;
	}
}
