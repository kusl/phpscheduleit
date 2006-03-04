<?php
/**
* Functionality to send email reminders to users
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-02-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');

include_once('db/ReminderDB.class.php');
include_once('PHPMailer.class.php');
include_once('Reservation.class.php');

class Reminder
{
	var $db = null;

	function Reminder($db = null) {
		$this->db = $db;
	}
	
	function getReminders($max_date) {
		$reminders = $this->db->getReminders($max_date);
		
	}
}
?>