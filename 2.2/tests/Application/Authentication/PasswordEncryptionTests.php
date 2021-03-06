<?php
/**
Copyright 2011-2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');

class PasswordEncryptionTests extends PHPUnit_Framework_TestCase
{
	public function testGeneratesSaltAndHashesPassword()
	{
		$password = 'mypassword';
		
		$encryption = new PasswordEncryption();
		$salt = $encryption->Salt();
		$actualEncryptedPassword = $encryption->Encrypt($password, $salt);

		$expectedEncryptedPassword = sha1($password . $salt);
		
		$this->assertEquals($expectedEncryptedPassword, $actualEncryptedPassword, "Password was not encrypted correctly");
	}
}
?>