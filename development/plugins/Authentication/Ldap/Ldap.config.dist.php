<?php
/**
Copyright 2012 Nick Korbel

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

// see http://pear.php.net/manual/en/package.networking.net-ldap2.connecting.php

$conf['settings']['host'] = 'localhost'; // comma separated list of ldap servers such as mydomain1,localhost
$conf['settings']['port'] = '389';      // default ldap port 389 or 636 for ssl.
$conf['settings']['version'] = '3';		// LDAP protocol version
$conf['settings']['starttls'] = 'false';	// TLS is started after connecting
$conf['settings']['binddn'] = '';	// The distinguished name to bind as (username). If you don't supply this, an anonymous bind will be established.
$conf['settings']['bindpw'] = '';	// Password for the binddn. If the credentials are wrong, the bind will fail server-side and an anonymous bind will be established instead. An empty bindpw string requests an unauthenticated bind.
$conf['settings']['basedn'] = '';	// LDAP base name for searching and authenticating users. ie) ou=uidauthent,o=domain.com
$conf['settings']['filter'] = '';	// Default search filter
$conf['settings']['scope'] = '';	// Default search scope
$conf['settings']['database.auth.when.ldap.user.not.found'] = 'false';	// if ldap auth fails, authenticate against phpScheduleIt database
$conf['settings']['ldap.debug.enabled'] = 'false';	// if we should turn on ldap library debugging
?>