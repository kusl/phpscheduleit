<?php
/**
* Functionality to send email reminders to users
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-16-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

@define('BASE_DIR', dirname(__FILE__) . '/..');

class Reminder
{
	var $db = null;
	
	var $id = '';
	var $resid = '';
	var $start_time = 0;
	var $end_time = 0;
	var $start_date = 0;
	var $end_date = 0;
	var $resource_name = '';
	var $location = '';
	var $machid = '';
	var $email = '';
	var $memberid = '';
	var $lang = '';

	function Reminder(&$db) {
		$this->db =& $db;
	}
	
	function getReminders($max_date) {
		return $this->db->getReminders($max_date);
	}
	
	function deleteReminders($reminder_ids = array()) {
		$this->db->deleteRecords(TBL_REMINDERS, 'reminderid', $reminder_ids);
	}
}
?>