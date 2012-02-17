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

class ReservationListing implements IMutableReservationListing
{
	/**
	 * @var array|ReservationItemView[]
	 */
	private $_reservations = array();
	
	/**
	 * @var array|ReservationItemView[]
	 */
	private $_reservationByResource = array();

	/**
	 * @var array|ReservationItemView[]
	 */
	private $_reservationsByDate = array();

	public function Add($reservation)
	{
		$this->AddItem(new ReservationListItem($reservation));
	}

	public function AddBlackout($blackout)
	{
		$this->AddItem(new BlackoutListItem($blackout));
	}

	protected function AddItem(ReservationListItem $item)
	{
		$currentDate = $item->StartDate();
		$lastDate = $item->EndDate();

		$this->AddOnDate($item, $currentDate);
		$this->AddOnDate($item, $lastDate);

		while (!$currentDate->DateEquals($lastDate))
		{
			$this->AddOnDate($item, $currentDate);
			$currentDate = $currentDate->AddDays(1);
		}

		$this->_reservations[] = $item;
		$this->_reservationByResource[$item->ResourceId()][] = $item;
	}

	private function AddOnDate(ReservationListItem $item, Date $date)
	{
		Log::Debug('Adding %s on %s', $item->Id(), $date);
		$this->_reservationsByDate[$date->Format('Ymd')][] = $item;
	}
	
	public function Count()
	{
		return count($this->_reservations);
	}
	
	public function Reservations()
	{
		return $this->_reservations;
	}

	/**
	 * @param Date $date
	 * @return ReservationListing
	 */
	public function OnDate($date)
	{
		$reservationListing = new ReservationListing();
		Log::Debug('Found %s on %s', count($this->_reservationsByDate[$date->Format('Ymd')]), $date);
		$reservationListing->_reservations = $this->_reservationsByDate[$date->Format('Ymd')];
		Log::Debug('Meh %s', count($reservationListing->Reservations()));
//		/** @var ReservationListItem $reservation  */
//		foreach ($this->_reservations as $reservation)
//		{
////			$sw = new StopWatch();
////			$sw->Start();
//			if ($reservation->OccursOn($date))
//			{
//				$reservationListing->AddItem($reservation);
//			}
////			$sw->Stop();
////			Log::Debug('Occurs on %s took %s', $date, $sw->GetTotalSeconds());
//		}
		
		return $reservationListing;
	}
	
	public function ForResource($resourceId)
	{
		$reservationListing = new ReservationListing();
		
		if (array_key_exists($resourceId, $this->_reservationByResource))
		{
			$reservationListing->_reservations = $this->_reservationByResource[$resourceId];
		}
		
		return $reservationListing;
	}
}

?>