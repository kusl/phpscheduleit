<?php
//@define('BASE_DIR', dirname(__FILE__) . '/..');
require_once(dirname(__FILE__) . '/../helpers/StringBuilder.class.php');

class IReservationExport
{
	var $_reservations;
	var $_formatter;

	function toString() {
		die ('Not implemented');
	}

	function htmlHeader() {
		die ('Not implemented');
	}

}

class ICalExport : IReservationExport
{
	function ICalExport(&$reservations, &$formatter) {
		$this->_reservations = $reservations;
		$this->_formatter = $formatter;
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

	function htmlHeader() {
		return 'Content-Type: text/calendar';


		/*
		http://www.zend.com/zend/trick/tricks-august-2001.php?article=tricks-august-2001&kind=tr&id=1524&open=1&anc=0&view=1


		  $string = "bla bla bla";  // this can be a variable string or a row from a sql query or something else...
		   $ext = "txt";   // file extension
		   $mime_type = (PMA_USR_BROWSER_AGENT == 'IE' || PMA_USR_BROWSER_AGENT == 'OPERA')
		   ? 'application/octetstream'
		   : 'application/octet-stream';
		   header('Content-Type: ' . $mime_type);
		   if (PMA_USR_BROWSER_AGENT == 'IE')
		   {
		      header('Content-Disposition: inline; filename="' . $filename . '.' . $ext . '"');
		      header("Content-Transfer-Encoding: binary");
		      header('Expires: 0');
		      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		      header('Pragma: public');
		      print $string;
		   } else {
		      header('Content-Disposition: attachment; filename="' . $filename . '.' . $ext . '"');
		      header("Content-Transfer-Encoding: binary");
		      header('Expires: 0');
		      header('Pragma: no-cache');
		      print $string;
   			}



   			function downloadStream(&$stream, $filename, $mimetype)
			{
			  $status = 0;
			  $size = strlen($stream);
			  if ($size > 0) {
			   if(isset($_SERVER['HTTP_USER_AGENT']) &&
			       preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT']))
			   {
			     // IE Bug in download name workaround
			     ini_set( 'zlib.output_compression','Off' );
			   }
			   // header ('Content-type: ' . mime_content_type($file)
			   header ('Content-type: ' . $mimetype);
			   header ('Content-Disposition: attachment; filename="' . $filename . '"');
			   header ('Expires: '.gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y"))).' GMT');
			   header ('Accept-Ranges: bytes');
			   // Use Cache-control: private not following:
			   // header ('Cache-control: no-cache, must-revalidate');
			   header("Cache-control: private");
			   header ('Pragma: private');

			   if(isset($_SERVER['HTTP_RANGE'])) {
			     list($a, $range) = explode("=",$_SERVER['HTTP_RANGE']);
			     //if yes, download missing part
			     str_replace($range, "-", $range);
			     $size2 = $size-1;
			     $new_length = $size2-$range;
			     header("HTTP/1.1 206 Partial Content");
			     header("Content-Length: $new_length");
			     header("Content-Range: bytes $range$size2/$size");
			   }
			   else
			   {
			     $size2=$size-1;
			     header("Content-Range: bytes 0-$size2/$size");
			     header("Content-Length: ".$size);
			   }

			   // Dump the content.
			   echo $stream;
			   $status = 1;
			  }
			  return($status);
			}
		*/
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

	function formatSettings() {
		die ('Not implemented');
	}

	function formatOwner() {
		die ('Not implemented');
	}

	function formatParticipants() {
		die ('Not implemented');
	}

	function formatSummary() {
		die ('Not implemented');
	}

	function formatReminder() {
		die ('Not implemented');
	}

	function formatResources() {
		die ('Not implemented');
	}
}

class ICalReservationFormatter extends IReservationFormatter
{
	var $_reservation;

	function ICalReservationFormatter(&$reservation) {
		$this->_reservation = $reservation;
	}

	function format() {
		$builder = new StringBuilder();

		$builder->append("BEGIN:VEVENT\n");
		$builder->append($this->formatSettings());
		$builder->append($this->formatOwner());
		$builder->append($this->formatParticipants());
		$builder->append($this->formatSummary());
		$builder->append($this->formatReminder());
		$builder->append($this->formatResources());
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