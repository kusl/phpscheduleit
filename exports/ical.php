<?php
/**
* 
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-15-06
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

print $export->toString();
//$page = new StreamDownload('calendar.ics', $export->toString());
//$page->download();


function getResults() {
	$search = new ReservationSearch(new ReservationSearchDB());
	
	$results = array();
	
	if (isset($_GET['resid'])) {
		$results = $search->getReservation($_GET['resid']);
	}	
	else {
		$start_date = null;
		$end_date = null;
		$userid = Auth::getCurrentID();
		
		if ( isset($_GET['start_date']) ) {
			$start_date = $_GET['start_date'];
		}
		 
		if ( isset($_GET['end_date']) ) {
			$end_date = $_GET['end_date'];
		}
		
		$results = $search->getReservations($userid, $start_date, $end_date);
	}
	
	return $results;	
}
?>