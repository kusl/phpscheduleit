<?php
/**
* ScheduleDB class
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author Richard Cantzler <rmcii@users.sourceforge.net>
* @version 11-05-05
* @package DBEngine
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/../..');
/**
* DBEngine class
*/
include_once(BASE_DIR . '/lib/DBEngine.class.php');

define('BLACKOUT_ONLY', 1);			// Define constants
define('RESERVATION_ONLY', 2);
define('ALL', 3);
define('READ_ONLY', 4);

/**
* Provide all database access/manipulation functionality
* @see DBEngine
*/
class ScheduleDB extends DBEngine {
	var $scheduleType;
	var $scheduleid;
	
	function ScheduleDB($scheduleid, $scheduleType) {
		$this->DBEngine();				// Call parent constructor
		$this->scheduleType = $scheduleType;
		$this->scheduleid = $scheduleid;
	}
	
	/**
	* Get all reservation data
	* This function gets all reservation data
	* between a given start and end date
	* @param int $firstDay beginning date to return reservations from
	* @param int $lastDay beginning date to return reservations from
	* @param int $s_time start time of this schedules day
	* @param int $e_time end time of this schedules day
	* @return array of reservation data formatted: $array[date|machid][#] = array of data
	*  or an empty array
	*/
	function get_all_res($start_date, $end_date, $machids) {
		$return = array();
		$mach_ids = $this->make_del_list($machids);
		
		// If it starts between the 2 dates, ends between the 2 dates, or surrounds the 2 dates, get it
		$sql = 'SELECT res.*, res_users.*, login.fname, login.lname '
				. ' FROM ' . $this->get_table('reservations') . ' as res'
				. ' INNER JOIN ' . $this->get_table('reservation_users') . ' as res_users ON res.resid=res_users.resid'
				. ' INNER JOIN ' . $this->get_table('login') . ' as login ON res_users.memberid = login.memberid'
			. ' WHERE ( '
						. '( '
							. '(start_date >= ? AND start_date <= ?)'
							. ' OR '
							. '(end_date >= ? AND end_date <= ?)'
						. ' )'
						. ' OR '
						. '(start_date <= ?  AND end_date >= ?)'
			.      ' )'
			. ' AND res_users.owner=1';
		
		if ($this->scheduleType == RESERVATION_ONLY)
			$sql .= ' AND res.is_blackout <> 1 ';
		//else if ($this->scheduleType == BLACKOUT_ONLY)
		//	$sql .= ' AND res.is_blackout = 1 ';
		
		$sql .= ' AND res.machid IN (' . $mach_ids . ')';
		
		$sql .= ' ORDER BY res.start_date, res.starttime, res.end_date, res.endtime';

		$values = array($start_date, $end_date, $start_date, $end_date, $start_date, $end_date);
		
		$p = $this->db->prepare($sql);
		$result = $this->db->execute($p, $values);
		
		$this->check_for_error($result);
		
		while ($rs = $result->fetchRow()) {
			$index = $rs['machid'];
			$return[$index][] = $rs;
		}
		
		$result->free();
		
		return $return;
	}
}
?>