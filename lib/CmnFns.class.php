<?php
/**
* This functions common to most pages
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 01-28-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');

include_once(BASE_DIR . '/config/config.php');
include_once('Link.class.php');
include_once('Pager.class.php');
include_once('Timer.class.php');

/**
* Provides functions common to most pages
*/
class CmnFns {
	
	/**
	* Convert minutes to hours and adjust for timezone
	* @param double $time time to convert in minutes
	* @return string time in 12 hour time
	*/
	function formatTime($time) {
		global $conf;
		
		$time = ($time + (60 * CmnFns::getHourOffset() + 1440)) % 1440;
		
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
		
		$date = CmnFns::getAdjustedTime($date);
		
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
		
		$ts = CmnFns::getAdjustedTime($ts);
		
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
		$res_ts = CmnFns::getAdjustedTime($start_ts);
		
		if (empty($format)) {
			$key = empty($format_key) ? 'general_date' : $format_key;
			$format = $dates[$key];
		}
		
		return strftime($format, $res_ts);
	}
	
	/**
	* Gets the timezone adjusted timestamp for the current user
	* @param int $timestamp the timestamp to adjust
	* @return the timezone adjusted timestamp for the current user, or the server timestamp if user is not logged in
	*/
	function getAdjustedTime($timestamp) {
		if (CmnFns::getHourOffset() == 0) {
			return $timestamp;
		}
		return $timestamp + 3600 * CmnFns::getHourOffset();
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
	
	/**
	* Return the current script URL directory
	* @param none
	* @return url url of curent script directory
	*/
	function getScriptURL() {
		global $conf;
		$uri = $conf['app']['weburi'];
		return (strrpos($uri, '/') === false) ? $uri : substr($uri, 0, strlen($uri));
	}
	
	
	/**
	* Prints an error message box and kills the app
	* @param string $msg error message to print
	* @param string $style inline CSS style definition to apply to box
	* @param boolean $die whether to kill the app or not
	*/
	function do_error_box($msg, $style='', $die = true) {
		global $conf;
		
		echo '<table border="0" cellspacing="0" cellpadding="0" align="center" class="alert" style="' . $style . '"><tr><td>' . $msg . '</td></tr></table>';

		if ($die) {
			echo '</td></tr></table>';		// endMain() in Template
			echo '<p align="center"><a href="http://phpscheduleit.sourceforge.net">phpScheduleIt v' . $conf['app']['version'] . '</a></p></body></html>';	// printHTMLFooter() in Template
		 	die();
		}
	}
	
	/**
	* Prints out a box with notification message
	* @param string $msg message to print out
	* @param string $style inline CSS style definition to apply to box
	*/
	function do_message_box($msg, $style='') {
		echo '<table border="0" cellspacing="0" cellpadding="0" align="center" class="message" style="' . $style . '"><tr><td>' . $msg . '</td></tr></table>';
	}
	
	/**
	* Returns a reference to a new Link object
	* Used to make HTML links
	* @param none
	* @return Link object
	*/
	function getNewLink() {
		return new Link();
	}
	
	/**
	* Returns a reference to a new Pager object
	* Used to iterate over limited recordesets
	* @param none
	* @return Pager object
	*/
	function getNewPager() {
		return new Pager();
	}
	
	/**
	* Strip out slahses from POST values
	* @param none
	* @return array of cleaned up POST values
	*/
	function cleanPostVals() {
		$return = array();
		
		foreach ($_POST as $key => $val)
			$return[$key] = stripslashes(trim($val));
		
		return $return;
	}
	
	/**
	* Strip out slahses from an array of data
	* @param none
	* @return array of cleaned up data
	*/
	function cleanVals($data) {
		$return = array();
		
		foreach ($data as $key => $val)
			$return[$key] = stripslashes($val);
		
		return $return;
	}
	
	/**
	* Verifies vertical order and returns value
	* @param string $vert value of vertical order
	* @return string vertical order
	*/
	function get_vert_order($get_name = 'vert') {
		// If no vertical value is specified, use ASC
		$vert = isset($_GET[$get_name]) ? $_GET[$get_name] : 'ASC';
	    
		// Validate vert value, default to DESC if invalid
		switch($vert) {
			case 'DESC';
			case 'ASC';
			break;
			default :
				$vert = 'DESC';
			break;
		}
		
		return $vert;
	}
	
	/**
	* Verifies and returns the order to list recordset results by
	* If none of the values are valid, it will return the 1st element in the array
	* @param array $orders all valid order names
	* @return string order of recorset
	*/
	function get_value_order($orders = array(), $get_name = 'order') {
		if (empty($orders))		// Return null if the order array is empty
			return NULL;
			
		// Set default order value
		// If a value is specifed in GET, use that.  Else use the first element in the array
		$order = isset($_GET[$get_name]) ? $_GET[$get_name] : $orders[0];
		
		if (in_array($order, $orders))
			$order = $order;
		else
			$order = $orders[0];
	
		return $order;
	}
	
	
	/**
	* Opposite of php's nl2br function.
	* Subs in a newline for all brs
	* @param string $subject line to make subs on
	* @return reformatted line
	*/
	function br2nl($subject) {
		return str_replace('<br />', "\n", $subject);
	}
	
	/**
	* Writes a log string to the log file specified in config.php
	* @param string $string log entry to write to file
	* @param string $userid memeber id of user performing the action
	* @param string $ip ip address of user performing the action
	*/
	function write_log($string, $userid = NULL, $ip = NULL) {
		global $conf;
		$delim = "\t";
		$file = $conf['app']['logfile'];
		$values = '';

		if (!$conf['app']['use_log'])	// Return if we aren't going to log
			return;
		
		if (empty($ip))
			$ip = $_SERVER['REMOTE_ADDR'];
		
		clearstatcache();				// Clear cached results
		
		if (!is_dir(dirname($file)))
			mkdir(dirname($file), 0777);		// Create the directory
		
		if (!touch($file))
			return;					// Return if we cant touch the file
			
		if (!$fp = fopen($file, 'a'))
			return;					// Return if the fopen fails
		
		flock($fp, LOCK_EX);		// Lock file for writing
		if (!fwrite($fp, '[' . date('D, d M Y H:i:s') . ']' . $delim . $string . $delim . $userid . $delim . $ip . "\r\n"))	// Write log entry
        	return;					// Return if we cant write to the file
		flock($fp, LOCK_UN);		// Unlock file
		fclose($fp);
	}
	
	/**
	* Returns the day name
	* @param int $day_of_week day of the week
	* @param int $type how to return the day name (0 = full, 1 = one letter, 2 = two letter, 3 = three letter)
	*/
	function get_day_name($day_of_week, $type = 0) {
		global $days_full;
		global $days_abbr;
		global $days_letter;
		global $days_two;

		$names = array (
			$days_full, $days_letter, $days_two, $days_letter
			);
		
		return $names[$type][$day_of_week];
	}

	/**
	* Redirects a user to a new location
	* @param string $location new http location
	* @param int $time time in seconds to wait before redirect
	*/ 
	function redirect($location, $time = 0, $die = true) {
		header("Refresh: $time; URL=$location");
		if ($die) exit;
	}
	
	/**
	* Prints out the HTML to choose a language
	* @param none
	*/
	function print_language_pulldown() {
		global $conf;
		?>
		<select name="language" class="textbox" onchange="changeLanguage(this);">
		<?php
			$languages = get_language_list();
			foreach ($languages as $lang => $settings) {
				echo '<option value="' . $lang . '"'
					. ((determine_language() == $lang) ? ' selected="selected"' : '' )
					. '>' . $settings[3] . ($lang == $conf['app']['defaultLanguage'] ? ' ' . translate('(Default)') : '') . "</option>\n";
			}
		?>
		</select>
		<?php
	}
	
	/**
	* Searches the input string and creates links out of any properly formatted 'URL-like' text
	* Written by Fredrik Kristiansen (russlndr at online.no)
	* and Albrecht Guenther (ag at phprojekt.de).
	* @param string $str string to search for links to create
	* @return string with 'URL-like' text changed into clickable links
	*/
	function html_activate_links($str) {
		$str = eregi_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_+.~#?&//=]+)', '<a href="\1" target="_blank">\1</a>', $str);
		$str = eregi_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_+.~#?&//=]+)', '\1<a href="http://\2" target="_blank">\2</a>', $str);
		$str = eregi_replace('([_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3})','<a href="mailto:\1">\1</a>', $str);
		return $str;
	} 
	
	/**
	* Returns an array of all timestamps for repeat reservations
	* @param string $initial_ts timestamp of first reservation
	* @param string $interval interval of reservation recurrances
	* @param array $days days of week to repeat on
	* @param string $until final date of recurrance
	* @param int $frequency frequency of interval
	* @param string $week_number week of month number (for reserve by day of month)
	* @return array of all timestamps that the reservation is repeated on
	*/
	function get_repeat_dates($initial_ts, $interval, $days, $until, $frequency, $week_number) {
		$res_dates = array();
		$initial_date = getdate($initial_ts);
		
		list($last_m, $last_d, $last_y) = explode('/', $until);
		$last_ts = mktime(0,0,0,$last_m, $last_d, $last_y);
		$last_date = getdate($last_ts);
		
		$day_of_week = $initial_date['wday'];
		$day_of_month = $initial_date['mday'];
		
		$ts = $initial_ts;
		
		if ($initial_ts > $last_ts)		// Recurring date is in the past
			return array($ts);
		
		switch ($interval) {
			case 'day' :
				for ($i = $frequency; $ts <= $last_ts; $i += $frequency) {
					$res_dates[] = $ts;
					$ts = mktime(0,0,0, $initial_date['mon'], $i + $initial_date['mday'], $initial_date['year']);						
				}
			break;
			case 'week' :
				$additional_days = 0;
				$res_dates[] = $ts;		// Add initial reservation
				
				while ($ts <= $last_ts) {		
					for ($i = 0; $i < count($days); $i++) {					// Repeat for all days selected
						$days_between = ($days[$i] - $day_of_week) + $additional_days;
						// If the day of week is less than reservation day of week, move ahead one week
						if ($days[$i] <= $day_of_week) {
							$days_between += $frequency * 7;
						}
						$ts = mktime(0,0,0,$initial_date['mon'], $initial_date['mday'] + $days_between, $initial_date['year']);
						
						if ($ts <= $last_ts)
							$res_dates[] = $ts;
					}
					$additional_days += $frequency * 7;	// Move ahead week
				}
			break;
			case 'month_date' :
				$next_month = $initial_date['mon'];
				$res_dates[] = $ts;			// Add initial reservation
				
				while ($ts <= $last_ts) {			
					$next_month += $frequency;
					if (date('t',mktime(0,0,0, $next_month, 1, $initial_date['year'])) >= $initial_date['mday']) {		// Make sure month has enough days
						$ts = mktime(0,0,0,$next_month, $initial_date['mday'], $initial_date['year']);
						if ($ts <= $last_ts)
							$res_dates[] = $ts;
					}
				}
			break;
			case 'month_day' :
				$res_dates[] = $ts;		// Add initial reservation
			
				$days_in_month = date('t', mktime(0,0,0, $initial_date['mon'], $initial_date['mday'], $initial_date['year']));
				$next_month = $initial_date['mon'];
				
				// Fill in all months			
				while ($ts <= $last_ts) {
					
					$days_in_month = date('t', mktime(0,0,0, $next_month, 1, $initial_date['year']));
					$first_day_of_month = date('w', mktime(0,0,0, $next_month, 1, $initial_date['year']));
					$last_day_of_month = date('w', mktime(0,0,0, $next_month, $days_in_month, $initial_date['year']));	
				
					if ($week_number != 'last') {
						$offset_date = ($week_number - 1) * 7 + 1; 		// Starting date
						$day_of_week = $first_day_of_month;				// Day of week
					}
					else {
						$offset_date = $days_in_month - 6;
						$day_of_week = $last_day_of_month + 1;
					}
					
					// Repeat on chosen days for this week
					for ($i = 0; $i < count($days); $i++) {					// Repeat for all days selected
						$days_between = ($days[$i] - $day_of_week);
						
						// If the day of week is less than reservation day of week, move ahead one week
						if ($days[$i] < $day_of_week) {
							$days_between += 7;
						}
						
						$current_date = $offset_date + $days_between;
						
						$need_to_add = ( ($current_date <= $days_in_month) && ($next_month > $initial_date['mon'] || ($current_date >= $initial_date['mday'] && $next_month >= $initial_date['mon'])) );
						
						if ($need_to_add)
							$ts = mktime(0,0,0, $next_month, $current_date, $initial_date['year']);
						
						if ( $ts <= $last_ts && $need_to_add && $ts != $initial_ts)// && ($current_date <= $days_in_month) && ($current_date >= $initial_date['mday'] && $next_month >= $initial_date['mon']) )
							$res_dates[] = $ts;
					}
						
					$next_month += $frequency;
				}	
			break;
		}
		return $res_dates;
	}
}
?>
