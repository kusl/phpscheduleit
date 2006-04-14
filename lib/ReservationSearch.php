<?php
/**
* 
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-14-06
* @package 
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

class ReservationSearch
{
	function ReservationSearch(&$searchQuery) {
	
	}
	
	function getReservation($id) {
	
	}
	
	function getReservations($userid, $start_date = null, $end_date = null) {
		if ($start_date != null && $end_date == null)
		{
			$end_date = mktime(0,0,0);
		}
	}
}

class ISearchQuery
{
	var $query;
	var $parameters;
}
?>