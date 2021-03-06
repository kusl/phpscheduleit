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

class ResourceMinimumNoticeRule implements IReservationValidationRule
{
	/**
	 * @see IReservationValidationRule::Validate()
	 * 
	 * @param ReservationSeries $reservationSeries
	 * @return ReservationRuleResult
	 */
	public function Validate($reservationSeries)
	{
		$r = Resources::GetInstance();
		
		$resources = $reservationSeries->AllResources();
		
		foreach ($resources as $resource)
		{
			if ($resource->HasMinNotice())
			{
				$minStartDate = Date::Now()->ApplyDifference($resource->GetMinNotice()->Interval());
		
				/* @var $instance Reservation */
				foreach ($reservationSeries->Instances() as $instance)
				{
					if ($instance->StartDate()->LessThan($minStartDate))
					{
						return new ReservationRuleResult(false, 
							$r->GetString("MinNoticeError", $minStartDate->Format($r->GeneralDateTimeFormat())));
					}
				}
			}
		}
		
		return new ReservationRuleResult();
	}
}
?>