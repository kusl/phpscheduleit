<?php
/**
* Exports a list of Reservations formatted for iCalendar
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-13-06
* @package phpScheduleIt.iCalendar
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

$basedir = dirname(__FILE__) . '/../..';
require_once($basedir . '/interfaces/IReservationExport.php');
require_once($basedir . '/helpers/StringBuilder.class.php');

class ICalExport extends IReservationExport
{
	function ICalExport(&$reservations) {
		$this->_reservations = $reservations;
		$this->_formatter = new ICalReservationFormatter();
	}

	function _parse() {
		$builder = new StringBuilder();

		for ($i = 0; $i < count($this->_reservations); $i++) {
			$builder->append( $this->_formatter->format($this->_reservations[$i]) );
		}

		return $builder->toString();
	}

	function toString() {
		return $this->_parse();
	}
}
?>