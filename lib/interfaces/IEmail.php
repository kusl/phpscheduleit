<?php
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/../..');
require_once(BASE_DIR . '/lib/PHPMailer.class.php');

class IEmail 
{
	var $_mailer = null;
	
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
	
	function setBody($body) {
		die('Not implemented');
	}
	}
}
?>
