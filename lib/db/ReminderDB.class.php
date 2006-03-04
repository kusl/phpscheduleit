<?php
/**
* Handles all database functions for reminders
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-03-06
* @package DBEngine
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/../..');

include_once(BASE_DIR . '/lib/DBEngine.class.php');

/**
* Provide all access to database to manage reservations
*/
class ReminderDB extends DBEngine {
	
	/**
	* Gets all reminders to load the reminders at or before the given datetime
	* @param int $max_date a date
	* @return array of data to load reservation objects
	*/
	function getReminders($max_date) {
		$return = array();
		
		$query = 'SELECT
					rs.resid, rs.starttime, rs.endtime, rs.start_date, rs.end_date,
					r.name, r.location, r.machid
					l.email, l.memberid,
					rem.reminderid
				FROM ' . $this->get_table(TBL_REMINDERS) . ' rem INNER JOIN '
				. $this->get_table(TBL_RESERVATIONS) . ' rs ON rem.resid = rs.resid INNER JOIN '
				. $this->get_table(TBL_RESOURCES) . ' r ON rs.machid = r.machid INNER JOIN'
				. $this->get_table(TBL_LOGIN) . ' l ON rem.memberid = l.memberid'
				. ' WHERE reminder_date <= ?';
		
		$result = $this->db->query($query, array($max_date));
		$this->check_for_error($result);
		
		while ($rs = $result->fetchRow()) {
			$return[] = $this->cleanRow($rs);
		}
		
		$result->free();	
		return $return;
	}
	
	/**
	* 
	*/
	function deleteReminders($reminderids = array()) {
	
	}
}
?>