<?php
//@define('BASE_DIR', dirname(__FILE__) . '/..');
require_once(dirname(__FILE__) . '/../helpers/StringBuilder.class.php');

class IReservationExport
{
	var $_reservations;
	var $_formatter;

	function setReservations($reservations) {
		die ('Not implemented');
	}

	function toString() {

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


	function ICalReservationFormatter(&$reservation) {
		$this->_reservation = $reservation;
	}

	function format() {
		$builder = new StringBuilder();

		$builder->append("BEGIN:VEVENT\n");
		$builder->append("END:VEVENT\n");

		return $builder->toString();
	}

	function formatSettings() {
		$builder = new StringBuilder();

		$builder->append("UID:{$this->_reservation->id}\n");
		$builder->append(sprintf("DTSTART:%sT%s%s00Z\n", date('Ymd', $this->_reservation->start_date), Time::getHours($this->_reservation->start), Time::getMinutes($this->_reservation->start)) );
		$builder->append(sprintf("DTEND:%sT%s%s00Z\n", date('Ymd', $this->_reservation->end_date), Time::getHours($this->_reservation->end), Time::getMinutes($this->_reservation->end)) );
		$builder->append(sprintf("CREATED:%sT%sZ\n", date('Ymd', $this->_reservation->created), date('His', $this->_reservation->created)));
		$builder->append(sprintf("LAST-MODIFIED:%sT%sZ\n", date('Ymd', $this->_reservation->modified), date('His', $this->_reservation->modified)));

		return $builder->toString();
	}

	function formatOwner() {
		$builder = new StringBuilder();

		$builder->append("ORGANIZER:MAILTO:{$this->_reservation->user->email}\n");

		return $builder->toString();
	}

	function formatParticipants() {
		$builder = new StringBuilder();

		for ($i = 0; $i < count($this->_reservation->users); $i++) {
			$builder->append("ATTENDEE:MAILTO:{$this->_reservation->users[$i]['email']}\n");
		}

		return $builder->toString();
	}

	function formatSummary() {
		$builder = new StringBuilder();

		$builder->append("SUMMARY:{$this->_reservation->summary}\n");

		return $builder->toString();
	}

	function formatReminder() {
		$builder = new StringBuilder();

		$builder->append("BEGIN:VALARM\n");
		$builder->append("ACTION:EMAIL\n");
		$builder->append("TRIGGER:-P{$this->_reservation->reminder}M\n");
		$builder->append("END:VALARM\n");

		return $builder->toString();
	}

	function formatResources() {
		$builder = new StringBuilder();

		$builder->append("RESOURCES:{$this->_reservation->resource->name}");

		for ($i = 0; $i < count($this->_reservation->resources); $i++) {
			$builder->append(",$this->_reservation->resources[$i]['name']");
		}

		$builder->append("\nLOCATION:{$this->_reservation->resource->location}\n");

		return $builder->toString();
	}
}
?>