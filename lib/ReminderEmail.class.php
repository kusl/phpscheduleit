<?php
include_once('/interfaces/IEmail.php');
include_once('Reminder.class.php');

class ReminderEmail extends IEmail
{
	var $_mailer = null;
	
	/**
	* Builds a reminder email object from a Reminder
	* @param IMailer $mailer the IMailer object to use for sending the email
	*/
	function ReminderEmail($mailer) {
		$this->mailer = _mailer;
	}
	
	function send() {
		die('Not implemented');
	}
	
	function addAddress($address, $name = '') {
		die('Not implemented');
	}
	
	function addCC($address, $name = '') {
		die('Not implemented');
	}
	
	function addBCC($address, $name = '') {
		die('Not implemented');
	}
	
	function isHTML($isHtml = false) {
		die('Not implemented');
	}
	
	function setFrom($address, $name = '') {
		die('Not implemented');
	}
	
	function setSubject($subject) {
		die('Not implemented');
	}
}
?>