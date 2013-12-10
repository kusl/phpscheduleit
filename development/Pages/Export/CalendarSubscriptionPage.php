<?php
/**
Copyright 2011-2013 Nick Korbel

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

require_once(ROOT_DIR . 'Presenters/CalendarSubscriptionPresenter.php');
require_once(ROOT_DIR . 'lib/Application/Schedule/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/namespace.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Pages/Export/ICalendarSubscriptionPage.php');

class CalendarSubscriptionPage extends Page implements ICalendarSubscriptionPage
{
	/**
	 * @var CalendarSubscriptionPresenter
	 */
	private $presenter;

	public function __construct()
	{
		$authorization = new ReservationAuthorization(PluginManager::Instance()->LoadAuthorization());
		$service = new CalendarSubscriptionService(new UserRepository(), new ResourceRepository(), new ScheduleRepository());
		$icalSubscriptionValidator = new CalendarSubscriptionValidator($this, $service);
		$this->presenter = new CalendarSubscriptionPresenter($this,
															 new ReservationViewRepository(),
															 $icalSubscriptionValidator,
															 $service,
															 new PrivacyFilter($authorization));
		parent::__construct('', 1);
	}

	public function GetSubscriptionKey()
	{
		return $this->GetQuerystring(QueryStringKeys::SUBSCRIPTION_KEY);
	}

	/**
	 * @return string
	 */
	public function GetUserId()
	{
		return $this->GetQuerystring(QueryStringKeys::USER_ID);
	}

	public function PageLoad()
	{
		$this->presenter->PageLoad();

		header("Content-Type: text/Calendar");
		header("Content-Disposition: inline; filename=calendar.ics");

		$config = Configuration::Instance();

		$this->Set('phpScheduleItVersion', $config->GetKey(ConfigKeys::VERSION));
		$this->Set('DateStamp', Date::Now());

		/*
				   ScriptUrl is used to generate iCal UID's. As a workaround to this bug
				   https://bugzilla.mozilla.org/show_bug.cgi?id=465853
				   we need to avoid using any slashes "/"
		 */
		$url = $config->GetScriptUrl();
		$this->Set('ScriptUrl', parse_url($url, PHP_URL_HOST));

		$this->Display('Export/ical.tpl');
	}

	/**
	 * @param array|iCalendarReservationView[] $reservations
	 */
	public function SetReservations($reservations)
	{
		$this->Set('Reservations', $reservations);
	}

	/**
	 * @return int
	 */
	public function GetScheduleId()
	{
		return $this->GetQuerystring(QueryStringKeys::SCHEDULE_ID);
	}

	/**
	 * @return int
	 */
	public function GetResourceId()
	{
		return $this->GetQuerystring(QueryStringKeys::RESOURCE_ID);
	}

	// Copyright 2012, Alois Schloegl, IST Austria
	/**
	 * @return int
	 */
	public function GetAccessoryIds()
	{
		return $this->GetQuerystring(QueryStringKeys::ACCESSORY_ID);
	}
}

?>