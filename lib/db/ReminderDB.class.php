<?php
/**
* Handles all database functions for reminders
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-16-06
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
					l.email, l.memberid, l.lang,
					rem.reminderid
				FROM ' . $this->get_table(TBL_REMINDERS) . ' rem INNER JOIN '
				. $this->get_table(TBL_RESERVATIONS) . ' rs ON rem.resid = rs.resid INNER JOIN '
				. $this->get_table(TBL_RESOURCES) . ' r ON rs.machid = r.machid INNER JOIN'
				. $this->get_table(TBL_LOGIN) . ' l ON rem.memberid = l.memberid'
				. ' WHERE rem.reminder_date <= ?';
		
		$result = $this->db->query($query, array($max_date));
		$this->check_for_error($result);
		
		while ($rs = $result->fetchRow()) {
			$return[] = $this->_buildReminder($this->cleanRow($rs));
		}
		
		$result->free();	
		return $return;
	}
	
	/**
	* Builds a Reminder object from the database row
	* @param array $row row of data to populate the object with
	* @return populated Reminder object
	*/
	function _buildReminder($row) {
		$reminder = new Reminder();
		$reminder->id = $row['reminderid'];
		$resid = $row['resid'];
		$start_time = intval($row['starttime']);
		$end_time = intval($row['endtime']);
		$start_date = intval($row['start_date']);
		$end_date = intval($row['end_date']);
		$resource_name = $row['name'];
		$location = $row['location'];
		$machid = $row['machid'];
		$email = $row['email'];
		$memberid = $row['memberid'];
		$lang = $row['lang'];
		
		return $reminder;
	}
}
?>