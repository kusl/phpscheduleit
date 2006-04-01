<?php
/**
* Update program for phpScheduleIt
*
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 05-14-05
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/../..');
/**
* DBEngine class
*/
include_once(BASE_DIR . '/lib/DBEngine.class.php');
/**
* Template class
*/
include_once(BASE_DIR . '/lib/Template.class.php');

@session_start();	// Start the session

$failed = false;

$t = new Template('phpScheduleIt ' . translate('Setup'), 2);
$t->printHTMLHeader();
doPrintHeader();

if (checkConfig()) {
	if (isset($_POST['login'])) {
		setVars();
		doLogin();
	}
	else if (isset($_POST['update'])) {
		$db = dbConnect();
		$version = determineVersion();
		if (version_compare($version, "1.0.0") == -1) {
			echo '<h5>' . translate('phpScheduleIt Update is only available for versions 1.0.0 or later') . '</h5>';
		}
		else if (version_compare($version, "1.2.0") == 0) {
			echo '<h5>' . translate('phpScheduleIt is already up to date') . '</h5>';
		}
		else {
			doUpdate($version);
		}
		doFinish();
	}
	else
		doPrintForm();
}

$t->printHTMLFooter();


/**
* Prints html header
* @param none
*/
function doPrintHeader() {
	global $conf;
?>
<p align="center">
<?php CmnFns::print_language_pulldown(); ?>
</p>
<h3 align="center">phpScheduleIt v<?php echo $conf['app']['version']?></h3>
<?php
}

/**
* Prints out login form
* @param none
*/
function doPrintForm() {
	global $conf;
?>
<h3 align="center"><?php echo translate('Please log into your database')?></h3>
<form name="login" id="login" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <table width="60%" border="0" cellspacing="3" cellpadding="0" align="center" style="border: solid 1px #333333; background-color: #fafafa;">
    <tr>
      <td><?php echo translate('Enter database root username')?></td>
      <td><input type="text" name="user" class="textbox" /></td>
    </tr>
    <tr>
      <td><?php echo translate('Enter database root password')?></td>
      <td><input type="password" name="password" class="textbox" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="login" value="<?php echo translate('Login to database')?>" class="button" /></td>
    </tr>
  </table>
  <br />
  <table width="80%" align="center" cellpadding="3" cellspacing="0" border="0" style="font-family: Verdana, Arial; font-size: 12px; background-color: #ffffff; border: solid 1px #DDDDDD">
    <tr>
      <td>
	  <ul>
	  <li><?php echo translate('Root user is not required. Any database user who has permission to create tables is acceptable.')?></li>
	  <li><?php echo translate('This will set up all the necessary databases and tables for phpScheduleIt.')?></li>
	  <li><?php echo translate('It also populates any required tables.')?></li>
	  </ul></td>
    </tr>
  </table>
</form>
<?php
}

/**
* Checks to make sure necessary fields are set in the config file
* @param none
* @return whether all necessary fields are set
*/
function checkConfig() {
	global $conf;
	switch ($conf['db']['dbType']) {	// Check database type
		case 'mysql' :;
		case 'pgsql' :;
		case 'ibase' :;
		case 'msql' :;
		case 'mssql' :;
		case 'oci8' :;
		case 'odbc' :;
		case 'sybase' :;
		case 'ifx' :;
		case 'fbsql' :;
			break;
		default :
			echo translate('Not a valid database type in the config.php file.');
			return false;
			//break;
	}

	if (empty($conf['db']['dbUser'])) {		// Check database user
		echo translate('Database user is not set in the config.php file.');
		return false;
	}

	if (empty($conf['db']['dbPass'])) {		// Check database password
		echo translate('Database user password is not set in the config.php file.');
		return false;
	}

	if (empty($conf['db']['dbName'])) {		// Check database name
		echo translate('Database name not set in the config.php file.');
		return false;
	}

	return true;
}

/**
* Verifies that the user entered information and sets up session variables
* @param none
*/
function setVars() {
	$_SESSION['user'] = stripslashes(trim($_POST['user']));
	$_SESSION['password'] = stripslashes(trim($_POST['password']));
}

/**
* Create a connection to the database using user supplied data
* @param none
*/
function doLogin() {
	global $conf;
    // Data Source Name: This is the universal connection string
    // See http://www.pear.php.net/manual/en/package.database.php#package.database.db
    // for more information on DSN
    $dsn = $conf['db']['dbType'] . '://'
			. $_SESSION['user']
			. ':' . $_SESSION['password']
			. '@' . $conf['db']['hostSpec'];

    // Make connection to database
    $db = DB::connect($dsn);

    // If there is an error, print to browser, print to logfile and kill app
    if (DB::isError($db)) {
        die ('Error connecting to database: ' . $db->getMessage() );
    }
	else {
		echo '<h4 align="center">' . translate('Successfully connected as') . ' ' . $_SESSION['user'] . "</h4>\n"
			. "<form name=\"create\" id=\"create\" method=\"post\" action=\"{$_SERVER['PHP_SELF']}\">\n"
			. "<p align=\"center\"><input type=\"submit\" name=\"update\" value=\"" . translate('Update') . "...\" class=\"button\" /></p>\n"
			. "</form>\n";
	}
}

/**
* Create and return a connection to the database
* Requires that setVars() has been called by the user
* loggin in
* @param none
*/
function dbConnect() {
	global $conf;
    // Data Source Name: This is the universal connection string
    // See http://www.pear.php.net/manual/en/package.database.php#package.database.db
    // for more information on DSN
    $dsn = $conf['db']['dbType'] . '://'
			. $_SESSION['user']
			. ':' . $_SESSION['password']
			. '@' . $conf['db']['hostSpec'];

    // Make persistant connection to database
    $db = DB::connect($dsn);

    // If there is an error, print to browser, print to logfile and kill app
    if (DB::isError($db)) {
        die ('Error connecting to database: ' . $db->getMessage() );
    }

    return $db;
}


/**
* Create the database and the tables in it
* @param string $version current version of phpScheduleIt that we are upgrading from
*/
function doUpdate($version) {
	global $db;
	global $conf;
	
	//# Since version 1.1.0
	$create_announcements = array("CREATE TABLE announcements (
									  announcementid CHAR(16) NOT NULL PRIMARY KEY,
									  announcement CHAR(255) NOT NULL DEFAULT '',
									  number SMALLINT(3) NOT NULL DEFAULT 0,
									  start_datetime INT,
  									  end_datetime INT
									  )", 'Creating announcements table');
	$create_announcements_sdt_index = array('create index announcements_startdatetime on announcements(start_datetime)', 'Create start_datetime index');
	$create_announcements_edt_index = array('create index announcements_enddatetime on announcements(end_datetime)', 'Create end_datetime index');
	
	$alter_reservations_add_ispending = array("ALTER TABLE reservations ADD COLUMN is_pending SMALLINT(1) NOT NULL DEFAULT 0 AFTER is_blackout", 'Add is_pending column');
	$create_reservations_ispending_index = array("CREATE INDEX reservations_ispending ON reservations (is_pending)", 'Add is_pending index');
	$alter_resources_add_approval = array("ALTER TABLE resources ADD COLUMN approval SMALLINT(1)", 'Add approval column');
	$alter_login_add_eapp = array("ALTER TABLE login ADD COLUMN e_app CHAR(1) NOT NULL DEFAULT 'y' AFTER e_del", 'Add e_app column');

	$alter_login_add_logonname = array("ALTER TABLE login ADD COLUMN logon_name CHAR(30)", 'Add logon_name column');
	$create_login_logonname_index = array("CREATE INDEX login_logonname ON login (logon_name)", 'Add logon_name index');
	
	$alter_reservations_add_startdate = array("ALTER TABLE reservations ADD COLUMN start_date int NOT NULL DEFAULT 0 AFTER date", 'Add start_date column');
	$alter_reservations_add_enddate = array("ALTER TABLE reservations ADD COLUMN end_date int NOT NULL DEFAULT 0 AFTER start_date", 'Add end_date column');
	$create_reservations_index_startdate = array("CREATE INDEX reservations_startdate ON reservations (start_date)", 'Add start_date index');
	$create_reservations_index_enddate = array("CREATE INDEX reservations_enddate ON reservations (end_date)", 'Add end_date index');
	$update_reservations_set_startdate = array("UPDATE reservations SET start_date = date", 'Set start_date = date');
	$update_reservations_set_enddate = array("UPDATE reservations SET end_date = date", 'Set end_date = date');
	$alter_reservations_drop_date = array("ALTER TABLE reservations DROP COLUMN date", 'Drop date column');
	$alter_resources_add_allowmulti = array("ALTER TABLE resources ADD COLUMN allow_multi SMALLINT(1)", 'Add allow_multi column');

	$create_reservation_users = array("create table reservation_users (
									  resid char(16) not null,
									  memberid char(16) not null,
									  owner smallint(1),
									  invited smallint(1),
									  perm_modify smallint(1),
									  perm_delete smallint(1),
									  accept_code char(16),
									  primary key(resid, memberid)
									  )", 'Create reservation_users table');
	$create_reservationusers_resid_index = array("create index resusers_resid on reservation_users (resid)", 'Create resusers_resid index');
	$create_reservationusers_memberid_index = array("create index resusers_memberid on reservation_users (memberid)", 'Create resusers_memberid index');
	$create_reservationusers_owner_index = array("create index resusers_owner on reservation_users (owner)", 'Create resusers_owner index');
	$migrate_users = array("insert into reservation_users select resid, memberid, 1, 0, 0, 0, null from reservations", 'Migrating users');
	$alter_reservations_drop_memberid = array("alter table reservations drop column memberid, drop index res_memberid", 'Drop memberid column');
	
	$alter_login_add_isadmin = array("alter table login add column is_admin smallint(1) default 0", 'Create is_admin on login');
	
	// Array of all SQL statements to run to upgrade to version 1.1.0
	$version110 = array($create_announcements, $create_announcements_sdt_index, $create_announcements_edt_index,
						$alter_reservations_add_ispending, $create_reservations_ispending_index,
						$alter_resources_add_approval, $alter_login_add_eapp, $alter_login_add_logonname, $create_login_logonname_index,
						$alter_reservations_add_startdate, $alter_reservations_add_enddate, $create_reservations_index_startdate,
						$create_reservations_index_enddate, $update_reservations_set_startdate, $update_reservations_set_enddate,
						$alter_reservations_drop_date, $alter_resources_add_allowmulti, $create_reservation_users, $create_reservationusers_resid_index, $create_reservationusers_memberid_index,
						$create_reservationusers_owner_index, $migrate_users, $alter_reservations_drop_memberid, $alter_login_add_isadmin);
	
	//!#----------------
	
	//# Since version 1.2.0
	$create_resources_max_participants = array('ALTER TABLE resources ADD COLUMN max_participants INTEGER', 'Create column max_participants');
	$create_reservations_allow_participation = array('ALTER TABLE reservations ADD COLUMN allow_participation smallint(1) not null default 0', 'Create column allow_participation');
	$create_reservations_allow_anon_participation = array('ALTER TABLE reservations ADD COLUMN allow_anon_participation smallint(1) not null default 0', 'Create column allow_anon_participation');
	$create_anonymous_users_table = array('CREATE TABLE anonymous_users (
											  memberid char(16) not null primary key,
											  email char(75) not null,
											  fname char(30) not null,
											  lname char(30) not null
											  )', 'Create anonymous_users table');
	$create_anonymous_users_memberid_index = array('CREATE INDEX anonymous_users_memberid ON anonymous_users (memberid)', 'Create anonymous_users index');
	$version120 = array($create_resources_max_participants, $create_reservations_allow_participation, $create_reservations_allow_anon_participation,
					$create_anonymous_users_table, $create_anonymous_users_memberid_index);
	//!#----------------
	
	//# Must run for all updates
	$select_db = array(array ("use {$conf['db']['dbName']}", 'Selecting database'));
	$to_run[] = $select_db;
	//#
	
	if ($version == "1.0.0") {		
		$to_run[] = $version110;
		$to_run[] = $version120;
	}
	else if ($version = "1.1.0") {
		$to_run[] = $version120;	
	}

	foreach ($to_run as $sqls) {
		foreach ($sqls as $sql) {
			echo $sql[1] . '...';
			$result = $db->query($sql[0]);
			check_result($result);
		}
	}
}

/**
* Examine result and print success or failure message to browswer
* @param PEAR::DB $result pear::db result object
*/
function check_result($result) {
	global $failed;
	if (DB::isError($result)) {
		echo '<span style=\"color: #FF0000; font-weight: bold;\">Failed: </span>' . $result->getMessage() . "</span><br/><br/>\n";
		$failed = true;	
	}
	else
		echo "<span style=\"color: #00CD00;\">Success</span><br/><br/>\n";
}

function doFinish() {
	global $failed;
	echo '<h5>';
	if ($failed) {
		echo translate('There were errors during the install.');
	}
	else {
		echo translate('You have successfully finished setting up phpScheduleIt and are ready to begin using it.');
	}
	?>
	<br /><br />
	<?php
echo translate('Thank you for using phpScheduleIt');
	echo '</h5>';
}

function determineVersion() {
	$db = new DBEngine();
	
	$version = "0.0.0";
	
	$result = $db->db->query('select * from ' . $db->get_table('reservations'));
	$num = $result->numCols();
	if ($num < 12) {
		$version = "0.0.0";
	}
	else if ($num == 12) {
		$version = "1.0.0";
	}
	else if ($num == 13) {
		$version = "1.1.0";
	}
	else if ($num == 14) {
		$version = "1.2.0";
	}
	return $version;
}
?>