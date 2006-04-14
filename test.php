<?php
	require_once('lib/interfaces/IReservationExport.php');
	require_once('tests/fakes/FakeReservation.php');
	require_once('lib/pagebase/DownloadPage.php');
	
	$res = array(new FakeReservation());
	$export = new ICalExport($res);
	//$string = $export->toString();
	
	$page = new StreamDownload('calendar.ics', $export->toString());
	$page->download();

?>