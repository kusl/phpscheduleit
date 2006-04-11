<?php

class IReservationExport
{
	var $_reservations;
	var $_formatter;

	function setReservations($reservations) {
		die ('Not implemented');
	}

	function print() {

	}

}

class IReservationFormatter
{
	// http://en.wikipedia.org/wiki/RFC2445_Syntax_Reference
	// http://www.imc.org/pdi/pdiproddev.html

	/**
	* Accepts a reservation object and returns it as a formatted string
	* @param Reservation $reservation the reservation object to format
	* @return the reservation as a formatted string
	*/
	function format(&$reservation) {
		die ('Not implemented');
	}
}

class ICalReservationFormatter
{
	var $_reservation;

	function format(&$reservation) {
		$res = <<<EOT
			BEGIN:VEVENT
			END:VEVENT
		EOT;
	}

	function _formatReservation(&$reservation) {

	}

	function _formatOwner(&$user) {

	}

	function _formatParticipants(&$participants) {

	}

	function _formatReminder(&$reminder) {

	}

	function _formatResources($resources) {

	}
}
?>