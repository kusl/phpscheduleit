<?php
/**
* Provides ability to generate an iCalendar export file for a reservation or reservations within a date range
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-22-06
* @package 
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

require_once('../lib/pagebase/download/StreamDownload.php');
require_once('../lib/icalendar/ICalExport.php');
require_once('../lib/icalendar/ICalReservationFormatter.php');
require_once('../lib/ReservationSearch.php');
require_once('../lib/Auth.class.php');

if (!Auth::is_logged_in()) {
	CmnFns::redirect('../ctrlpnl.php', 1, false);
}

$export = new ICalExport(getResults());

$page = new StreamDownload('phpScheduleIt.ics', $export->toString());
$page->download();


function getResults() {
	$search = new ReservationSearch(new ReservationSearchDB());
	
	$results = array();
	
	if (isset($_GET['resid'])) {
		$results = $search->getReservation(htmlspecialchars($_GET['resid']));
	}	
	else {
		$start = null;
		$end = null;
		
		$userid = Auth::getCurrentID();
		
		if ( isset($_GET['start_date']) && !empty($_GET['start_date']) ) {
			$start_date = htmlspecialchars($_GET['start_date']);
			$dates = explode(INTERNAL_DATE_SEPERATOR, $start_date);
			$start = mktime(0, 0, 0, $dates[0], $dates[1], $dates[2]);
		}
		 
		if ( isset($_GET['end_date']) && !empty($_GET['end_date']) ) {
			$end_date = htmlspecialchars($_GET['end_date']);
			$dates = explode(INTERNAL_DATE_SEPERATOR, $end_date);
			$end = mktime(0, 0, 0, $dates[0], $dates[1], $dates[2]);
		}
		
		$results = $search->getReservations($userid, $start, $end);
	}
	
	return $results;	
}
?>