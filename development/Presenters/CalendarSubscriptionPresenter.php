<?php
/**
Copyright 2012 Nick Korbel
Copyright 2012 Alois Schloegl

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

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Pages/Export/CalendarExportPage.php');
require_once(ROOT_DIR . 'lib/Application/Schedule/namespace.php');

class CalendarSubscriptionPresenter
{
	/**
	 * @var \ICalendarExportPage
	 */
	private $page;

	/**
	 * @var IReservationViewRepository
	 */
	private $reservationViewRepository;

	/**
	 * @var ICalendarExportValidator
	 */
	private $validator;

	/**
	 * @var ICalendarSubscriptionService
	 */
	private $subscriptionService;

	public function __construct(ICalendarSubscriptionPage $page,
								IReservationViewRepository $reservationViewRepository,
								ICalendarExportValidator $validator,
								ICalendarSubscriptionService $subscriptionService)
	{
		$this->page = $page;
		$this->reservationViewRepository = $reservationViewRepository;
		$this->validator = $validator;
		$this->subscriptionService = $subscriptionService;
	}

	public function PageLoad()
	{
		if (!$this->validator->IsValid())
		{
			return;
		}

		$userId = $this->page->GetUserId();
		$scheduleId = $this->page->GetScheduleId();
		$resourceId = $this->page->GetResourceId();
		$accessoryIds = $this->page->GetAccessoryIds();

		$weekAgo = Date::Now()->AddDays(-7);
		$nextYear = Date::Now()->AddDays(365);

		$sid = null;
		$rid = null;
		$uid = null;
		$aid = null;

		$reservations = array();
		$res = array();
		if (!empty($scheduleId))
		{
			$schedule = $this->subscriptionService->GetSchedule($scheduleId);
			$sid = $schedule->GetId();
		}
		if (!empty($resourceId))
		{
			$resource = $this->subscriptionService->GetResource($resourceId);
			$rid = $resource->GetId();
		}
		if (!empty($accessoryIds))
		{
			## No transformation is implemented. It is assumed the accessoryIds is provided as AccessoryName 
			## filter is defined by LIKE "PATTERN%"  
			$aid = $accessoryIds;
		}
		if (!empty($userId))
		{
			$user = $this->subscriptionService->GetUser($userId);
			$uid = $user->Id();
		}

		if (!empty($uid) || !empty($sid) || !empty($rid))
		{
			$res = $this->reservationViewRepository->GetReservationList($weekAgo, $nextYear, $uid, null, $sid, $rid);
		}
		elseif (!empty($aid))
		{
			throw new Exception('need to give an accessory a public id, allow subscriptions');
			$res = $this->reservationViewRepository->GetAccessoryReservationList($weekAgo, $nextYear, $accessoryIds);
		}

		Log::Debug('Loading calendar subscription for userId %s, scheduleId %s, resourceId %s. Found %s reservations.', $userId, $scheduleId, $resourceId, count($res));

/*
		### !!!  THIS DOES NOT WORK BECAUSE EXCEPTIONS TO RECURRENCE RULES ARE NOT PROPERLY HANDLED !!!
		### see bug report http://php.brickhost.com/forums/index.php?topic=11450.0
		
		$seriesIds = array();
		foreach ($res as $r)
		{
			$seriesId = $r->SeriesId;
			if (!array_key_exists($seriesId, $seriesIds))
			{
				$reservations[] = new iCalendarReservationView($r);
			}

			$seriesIds[$seriesId] = true;
		}
*/
		foreach ($res as $r)
		{
			$reservations[] = new iCalendarReservationView($r);
		}

		$this->page->SetReservations($reservations);
	}
}

?>