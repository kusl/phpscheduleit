<?php
include_once('lib/Reminder.class.php');

$max_date = date('YmdHi');
$reminder = new Reminder(new ReminderDB());

$reminders = $reminder->getReminders($max_date);

$reminderids_sent = array();

for ($i = 0; $i < count($reminders); $i++) {
	$email = new ReminderEmail($reminders[$i]);
	$email->send();
	$reminderids_sent[$reminders[$i]->id];
}

$reminder->deleteReminders($reminderids_sent);	// Delete reminder records that were sent
?>