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

require_once('../lib/pagebase/download/StreamDownload.php');
require_once('../lib/icalendar/ICalExport.php');
require_once('../lib/icalendar/ICalReservationFormatter.php');
require_once('../lib/ReservationSearch.php');

// validate login

$search = new ReservationSearch();
//$export = new ICalExport($search->getResults());

//$page = new StreamDownload('calendar.ics', $export->toString());
//$page->download();
?>