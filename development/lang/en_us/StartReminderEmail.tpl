{*
Copyright 2013 Nick Korbel

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
*}
{include file='..\..\tpl\Email\emailheader.tpl'}
Your reservation is starting soon.<br/>
Reservation Details:
	<br/>
	<br/>
	Start: {formatdate date=$StartDate key=reservation_email}<br/>
	End: {formatdate date=$EndDate key=reservation_email}<br/>
	Resource: {$ResourceName}<br/>
	Title: {$Title}<br/>
	Description: {$Description|nl2br}<br/>
<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">View this reservation</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Add to Calendar</a> |
<a href="{$ScriptUrl}">Log in to phpScheduleIt</a>

{include file='..\..\tpl\Email\emailfooter.tpl'}