<?php
@define('BASE_DIR', dirname(__FILE__) . '/../..');
require_once(BASE_DIR . '/lib/PHPMailer.class.php');

class FakeMailer extends PHPMailer
{
	var $addresses = array();
	
	function FakeMailer() {
	
	}
	
	function AddAddress($address, $name) {
		$this->addresses[] = $address;
	}
}
?>