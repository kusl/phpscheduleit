<?php
require_once('fakes/FakeReservation.php');
require_once('../lib/interfaces/IReservationExport.php');
require_once('PHPUnit.php');

class ICalFormatterTests extends PHPUnit_TestCase
{
	function ICalFormatterTests($name) {
		$this->PHPUnit_TestCase($name);
	}
	
	function testReservationIsFormattedToICalSpecs() {
		$fake = new FakeReservation();
		
		$formatter = new ICalReservationFormatter($fake);
		$settings = $formatter->formatSettings();
		
		$id = $fake->id;
		
		$dtstart = sprintf(
			'%sT%s%s00Z', 
			date('Ymd', $fake->start_date), 
			Time::getHours($fake->start),
			Time::getMinutes($fake->start)
		);
		
		$dtend = sprintf(
			'%sT%s%s00Z', 
			date('Ymd', $fake->end_date), 
			Time::getHours($fake->end),
			Time::getMinutes($fake->end)
		);
		
		$created = sprintf('%sT%sZ', date('Ymd', $fake->created), date('His', $fake->created));
		$modified = sprintf('%sT%sZ', date('Ymd', $fake->modified), date('His', $fake->modified));
		
		$this->assertEquals("UID:$id\nDTSTART:$dtstart\nDTEND:$dtend\nCREATED:$created\nLAST-MODIFIED:$modified\n", $settings);
	}
}
?>