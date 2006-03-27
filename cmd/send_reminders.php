<?php
/**
* Sends all pending email reminders
* This file is meant to be run from the command line and has no HTML output
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-26-06
* @package phpScheduleIt Command Line
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

@define('BASE_DIR', dirname(__FILE__) . '/../');
include_once(BASE_DIR . 'lib/db/ReminderDB.class.php');
include_once(BASE_DIR . 'lib/Reminder.class.php');
include_once(BASE_DIR . 'lib/ReminderEmail.class.php');

$max_date = date(REMINDER_DATE_FORMAT);
$reminder = new Reminder();
$reminder->setDB(new ReminderDB());

$reminders = $reminder->getReminders($max_date);
$reminderids_sent = array();

for ($i = 0; $i < count($reminders); $i++) {
	$reminder =& $reminders[$i];
	if (is_lang_valid($reminder->lang)) {
		include(get_language_path($reminder->lang));		// Make sure email is in correct language
		$email = new ReminderEmail(new PHPMailer());
		$email->buildFromReminder($reminder);
		//$email->send();
		echo $email->_mailer->Subject;
		echo $email->_mailer->Body;
		echo $email->_mailer->to[0][0];
		$reminderids_sent[] = $reminder;
	}
}

//$reminder->deleteReminders($reminderids_sent);	// Delete reminder records that were sent
?>