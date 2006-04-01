<?php
/**
* Time formatting and calculation functions
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-01-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

class Time
{
	/**
	* Convert minutes to hours and adjust for timezone
	* @param double $time time to convert in minutes
	* @return string time in 12 hour time
	*/
	function formatTime($time) {
		global $conf;
		
		$time = ($time + (60 * Time::getHourOffset() + 1440)) % 1440;
		
		// Set up time array with $timeArray[0]=hour, $timeArray[1]=minute
		// If time does not contain decimal point
		// then set time array manually
		// else explode on the decimal point
		$hour = intval($time / 60);
		$min = $time % 60;
		if ($conf['app']['timeFormat'] == 24) {			
			$a = '';									// AM/PM does not exist
			if ($hour < 10) $hour = '0' . $hour;
		}
		else {		
			$a = ($hour < 12 || $hour == 24) ? translate('am') : translate('pm');			// Set am/pm		
			if ($hour > 12) $hour = $hour - 12;			// Take out of 24hr clock
			if ($hour == 0) $hour = 12;					// Don't show 0hr, show 12 am	
		}
		// Set proper minutes (the same for 12/24 format)
		if ($min < 10) $min = 0 . $min;
		// Put into a string and return
		return $hour . ':' . $min . $a;
	}
	
	
	/**
	* Convert timestamp to date format and adjust for timezone
	* @param string $date timestamp
	* @param string $format format to put datestamp into
	* @return string date as $format or as default format
	*/
	function formatDate($date, $format = '') {
		global $dates;
		
		$date = Time::getAdjustedTime($date);
		
		if (empty($format)) $format = $dates['general_date'];
		return strftime($format, $date);
	}
	
	
	/**
	* Convert UNIX timestamp to datetime format and adjust for timezone
	* @param string $ts MySQL timestamp
	* @param string $format format to put datestamp into
	* @return string date/time as $format or as default format
	*/
	function formatDateTime($ts, $format = '') {
		global $conf;
		global $dates;
		
		$ts = Time::getAdjustedTime($ts);
		
		if (empty($format))
			$format = $dates['general_datetime'] . ' ' . (($conf['app']['timeFormat'] == 24) ? '%H' : '%I') . ':%M:%S' . (($conf['app']['timeFormat'] == 24) ? '' : ' %p');
		return strftime($format, $ts);
	}
	
	/**
	* Formats a timezone-adjusted timestamp for a reservation with this date and time
	* @param int $res_ts the reservation start_date or end_date timestamp
	* @param int $res_time the reservation starttime or endtime as minutes
	* @param string $format the PHP format string for the resulting date
	* @return the adjusted and formatted timestamp for the reservation
	*/
	function formatReservationDate($res_ts, $res_time, $format = '', $format_key = '') {
		global $conf;
		global $dates;
		
		$start_ts = $res_ts + (60 * $res_time);
		$res_ts = Time::getAdjustedTime($start_ts);
		
		if (empty($format)) {
			$key = empty($format_key) ? 'general_date' : $format_key;
			$format = $dates[$key];
		}
		
		return strftime($format, $res_ts);
	}
	
	/**
	* Gets the timezone adjusted timestamp for the current user
	* @param int $timestamp the timestamp to adjust
	* @param int $res_time the reservation starttime or endtime as minutes
	* @return the timezone adjusted timestamp for the current user, or the server timestamp if user is not logged in
	*/
	function getAdjustedTime($timestamp, $res_time = null) {
		if (Time::getHourOffset() == 0) {
			return $timestamp;
		}
		
		if (!empty($res_time)) {
			$timestamp += ($res_time + (60 * $res_time));
		}
		
		return $timestamp + 3600 * Time::getHourOffset();
	}
	
	/**
	* Gets the timezone adjusted datestamp for the current user with 0 hour/minute/second
	* @param int $timestamp the timestamp to adjust
	* @param int $res_time the reservation starttime or endtime as minutes
	* @return the timezone adjusted timestamp for the current user, or the server timestamp if user is not logged in
	*/
	function getAdjustedDate($timestamp, $res_time = null) {
		$tmp = getdate(Time::getAdjustedTime($timestamp, $res_time));
		return mktime(0,0,0, $tmp['mon'], $tmp['mday'], $tmp['year']);
	}
	
	/**
	* Gets the hourOffset for the currently logged in user or 0 if they are not logged in
	* @return the hour offset between user timezone and server timezone
	*/
	function getHourOffset() {
		if (isset($_SESSION['hourOffset'])) {
			return $_SESSION['hourOffset'];
		}
		return 0;
	}
	
	/**
	* Convert minutes to hours/minutes
	* @param int $minutes minutes to convert
	* @return string version of hours and minutes
	*/
	function minutes_to_hours($minutes) {
		if ($minutes == 0)
			return '0 ' . translate('hours');
			
		$hours = (intval($minutes / 60) != 0) ? intval($minutes / 60) . ' ' . translate('hours') : '';
		$min = (intval($minutes % 60) != 0) ? intval($minutes % 60) . ' ' . translate('minutes') : '';
		return ($hours . ' ' . $min);
	}
}
?>