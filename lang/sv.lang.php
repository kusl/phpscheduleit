<?php
/**
* Swedish (se) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Johan Sundstr�m <johan.sundstrom@vasterbottensmuseum.se>
* @version 04-04-05
* @package Languages
*
* Copyright (C) 2003 - 2004 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all of the strings that are used throughout phpScheduleit.
// Please save the translated file as '2 letter language code'.lang.php.  For example, en.lang.php.
// 
// To make phpScheduleIt available in another language, simply translate each
//  of the following strings into the appropriate one for the language.  If there
//  is no direct translation, please provide the closest translation.  Please be sure
//  to make the proper additions the /config/langs.php file (instructions are in the file).
//  Also, please add a help translation for your language using en.help.php as a base.
//
// You will probably keep all sprintf (%s) tags in their current place.  These tags
//  are there as a substitution placeholder.  Please check the output after translating
//  to be sure that the sentences make sense.
//
// + Please use single quotes ' around all $strings.  If you need to use the ' character, please enter it as \'
// + Please use double quotes " around all $email.  If you need to use the " character, please enter it as \"
//
// + For all $dates please use the PHP strftime() syntax
//    http://us2.php.net/manual/en/function.strftime.php
//
// + Non-intuitive parts of this file will be explained with comments.  If you
//    have any questions, please email lqqkout13@users.sourceforge.net
//    or post questions in the Developers forum on SourceForge
//    http://sourceforge.net/forum/forum.php?forum_id=331297
///////////////////////////////////////////////////////////

////////////////////////////////
/* Do not modify this section */
////////////////////////////////
global $strings;			  //
global $email;				  //
global $dates;				  //
global $charset;			  //
global $letters;			  //
global $days_full;			  //
global $days_abbr;			  //
global $days_two;			  //
global $days_letter;		  //
global $months_full;		  //
global $months_abbr;		  //
global $days_letter;		  //
/******************************/

// Charset for this language
// 'iso-8859-1' will work for most languages
$charset = 'iso-8859-1';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('S�ndag', 'M�ndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'L�rdag');
// The three letter abbreviation
$days_abbr = array('S�n', 'M�n', 'Tis', 'Ons', 'Tor', 'Fre', 'L�r');
// The two letter abbreviation
$days_two  = array('S�', 'M�', 'Ti', 'On', 'To', 'Fr', 'L�');
// The one letter abbreviation
$days_letter = array('S', 'M', 'T', 'O', 'T', 'F', 'L');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'December');
// The three letter month name
$months_abbr = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime() syntax
  You can include any text/HTML formatting in the translation
***/
// General date formatting used for all date display unless otherwise noted
$dates['general_date'] = '%m/%d/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%m/%d/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %m/%d/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%m/%d/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box 
$dates['jumpbox'] = '%m %d %Y';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
***/
$strings['hours'] = 'timmar';
$strings['minutes'] = 'minuter';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrat�r';
$strings['Welcome Back'] = 'V�lkommen tillbaka, %s';
$strings['Log Out'] = 'Logga ut';
$strings['My Control Panel'] = 'Startsidan';
$strings['Help'] = 'Hj�lp';
$strings['Manage Schedules'] = 'Hantera Grupper';
$strings['Manage Users'] ='Hantera anv�ndare';
$strings['Manage Resources'] ='Hantera resurser';
$strings['Manage User Training'] ='Hantera anv�ndartr�ning';
$strings['Manage Reservations'] ='Hantera bokningar';
$strings['Email Users'] ='Epost till anv�ndare';
$strings['Export Database Data'] = 'Export Databas data';
$strings['Reset Password'] = '�terst�ll l�senord';
$strings['System Administration'] = 'System Administration';
$strings['Successful update'] = 'Updateringen lyckades';
$strings['Update failed!'] = 'Updateringen misslyckades!';
$strings['Manage Blackout Times'] = 'Hantera ej tillg�ngliga tider';
$strings['Forgot Password'] = 'Gl�mt l�senordet?';
$strings['Manage My Email Contacts'] = 'Hantera mina epost-kontakter';
$strings['Choose Date'] = 'V�lj datum';
$strings['Modify My Profile'] = '�ndra min profil';
$strings['Register'] = 'Registrera';
$strings['Processing Blackout'] = 'Behandlar st�ngning';
$strings['Processing Reservation'] = 'Behandlar bokning';
$strings['Online Scheduler [Read-only Mode]'] = 'Online bokning [endast l�s-l�ge]';
$strings['Online Scheduler'] = 'Online bokning';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Statistics';
$strings['User Info'] = 'Anv�ndarinformation:';

$strings['Could not determine tool'] = 'Could not determine tool. Please return to My Control Panel and try again later.';
$strings['This is only accessable to the administrator'] = 'Detta �r endast till f�r administrat�ren';
$strings['Back to My Control Panel'] = 'Tillbaka till startsidan';
$strings['That schedule is not available.'] = 'Den bokningen �r inte tillg�nglig.';
$strings['You did not select any schedules to delete.'] = 'Du valde ingen bokning att ta bort.';
$strings['You did not select any members to delete.'] = 'Du valde ingen medlem att ta bort.';
$strings['You did not select any resources to delete.'] = 'Du valde ingen resurs att ta bort.';
$strings['Schedule title is required.'] = 'Namn p� bokning kr�vs.';
$strings['Invalid start/end times'] = 'Ogiltig start/slut tid';
$strings['View days is required'] = 'Visa dagar kr�vs';
$strings['Day offset is required'] = 'Dag offset kr�vs';
$strings['Admin email is required'] = 'Administrat�rens epost kr�vs';
$strings['Resource name is required.'] = 'Resurs namn kr�vs.';
$strings['Valid schedule must be selected'] = 'En bokning m�ste v�ljas';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minimal reservationsl�ngd m�ste vara minde eller lika med den maximala reservationsl�ngden';
$strings['Your request was processed successfully.'] = 'Din f�rfr�gan behandlades.';
$strings['Go back to system administration'] = 'Tillbaka till administrationen';
$strings['Or wait to be automatically redirected there.'] = 'Eller v�nta och bli automatiskt vidarebefodrad.';
$strings['There were problems processing your request.'] = 'Det var problem med din beg�ran.';
$strings['Please go back and correct any errors.'] = 'G� tillbaka o r�tta till eventuella fel.';
$strings['Login to view details and place reservations'] = 'Logga in f�r att se detaljer och g�ra bokningar';
$strings['Memberid is not available.'] = 'Memberid: %s �r inte tillg�ngligt.';

$strings['Schedule Title'] = 'Namn p� grupp';
$strings['Start Time'] = 'Start tid';
$strings['End Time'] = 'Slut tid';
$strings['Time Span'] = 'Tidsintervall';
$strings['Weekday Start'] = 'Veckodag Start';
$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Default';
$strings['Reset'] = 'Reset';
$strings['Edit'] = '�ndra';
$strings['Delete'] = 'Ta bort';
$strings['Cancel'] = 'Avbryt';
$strings['View'] = 'Visa';
$strings['Modify'] = '�ndra';
$strings['Save'] = 'Spara';
$strings['Back'] = 'Tillbaka';
$strings['Next'] = 'N�sta';
$strings['Close Window'] = 'St�ng f�nster';
$strings['Search'] = 'S�k';
$strings['Clear'] = 'T�m';

$strings['Days to Show'] = 'Dagar att visa';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'G�md';
$strings['Show Summary'] = 'Visa sammanfattning';
$strings['Add Schedule'] = 'L�gg till grupp';
$strings['Edit Schedule'] = '�ndra bokning';
$strings['No'] = 'Nej';
$strings['Yes'] = 'Ja';
$strings['Name'] = 'Namn';
$strings['First Name'] = 'F�rnamn';
$strings['Last Name'] = 'Efternamn';
$strings['Resource Name'] = 'Namn p� resurs';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Avdelning';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'L�senord';
$strings['Permissions'] = 'Permissions';
$strings['View information about'] = 'Se information om %s %s';
$strings['Send email to'] = 'Skicka email till %s %s';
$strings['Reset password for'] = '�terst�ll l�senord �t %s %s';
$strings['Edit permissions for'] = '�ndra permissions for %s %s';
$strings['Position'] = 'Position';
$strings['Password (6 char min)'] = 'L�senord (%s tecken minst)';
$strings['Re-Enter Password'] = 'Upprepa l�senord';

$strings['Sort by descending last name'] = 'Sortera fallande, efternamn';
$strings['Sort by descending email address'] = 'Sortera fallande, email-address';
$strings['Sort by descending institution'] = 'Sortera fallande, avdelning';
$strings['Sort by ascending last name'] = 'Sortera stigande, efternamn';
$strings['Sort by ascending email address'] = 'Sortera stigande, email-address';
$strings['Sort by ascending institution'] = 'Sortera stigande, avdelning';
$strings['Sort by descending resource name'] = 'Sortera fallande, resurs';
$strings['Sort by descending location'] = 'Sortera fallande, plats';
$strings['Sort by descending schedule title'] = 'Sortera fallandeb, bokningsnamn';
$strings['Sort by ascending resource name'] = 'Sortera stigande, resurs';
$strings['Sort by ascending location'] = 'Sortera stigande, plats';
$strings['Sort by ascending schedule title'] = 'Sortera stigande, bokningsnamn';
$strings['Sort by descending date'] = 'Sortera fallande, datum';
$strings['Sort by descending user name'] = 'Sortera fallande, anv�ndare';
$strings['Sort by descending start time'] = 'Sortera fallande, start tid';
$strings['Sort by descending end time'] = 'Sortera fallande, slut tid';
$strings['Sort by ascending date'] = 'Sortera stigande, datum';
$strings['Sort by ascending user name'] = 'Sortera stigande, anv�ndare';
$strings['Sort by ascending start time'] = 'Sortera stigande, start tid';
$strings['Sort by ascending end time'] = 'Sortera stigande, slut tid';
$strings['Sort by descending created time'] = 'Sortera fallande, skapad';
$strings['Sort by ascending created time'] = 'Sortera stigande, skapad';
$strings['Sort by descending last modified time'] = 'Sortera fallande, senast �ndrad';
$strings['Sort by ascending last modified time'] = 'Sortera stigande, senast �ndrad';

$strings['Search Users'] = 'S�k anv�ndare';
$strings['Location'] = 'Plats';
$strings['Schedule'] = 'Bokning';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Kommentarer';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Alla bokningar';
$strings['All Resources'] = 'Alla resurser';
$strings['All Users'] = 'Alla anv�ndare';

$strings['Edit data for'] = '�ndra data f�r %s';
$strings['Active'] = 'Aktiv';
$strings['Inactive'] = 'Inaktiv';
$strings['Toggle this resource active/inactive'] = '�ndra denna resurs aktiv/inaktiv';
$strings['Minimum Reservation Time'] = 'Min Reservations Tid';
$strings['Maximum Reservation Time'] = 'Max Reservations Tid';
$strings['Auto-assign permission'] = 'Auto-assign permission';
$strings['Add Resource'] = 'L�gg till Resurs';
$strings['Edit Resource'] = '�ndra Resurs';
$strings['Allowed'] = 'Till�ten';
$strings['Notify user'] = 'Meddela anv�ndare';
$strings['User Reservations'] = 'Anv�ndarens bokningar';
$strings['Date'] = 'Datum';
$strings['User'] = 'Anv�ndare';
$strings['Email Users'] = 'Email Anv�ndare';
$strings['Subject'] = '�mne';
$strings['Message'] = 'Meddelande';
$strings['Please select users'] = 'V�lj anv�ndare';
$strings['Send Email'] = 'Skicka Email';
$strings['problem sending email'] = 'Det var ett problem n�r ditt brev skulle skickas, prova igen senare.';
$strings['The email sent successfully.'] = 'Brevet skickades.';
$strings['do not refresh page'] = 'Uppdatera<u>inte</u> denna sida. G�r du de s� skickas brevet igen.';
$strings['Return to email management'] = 'Tillbaka till eposthanteringen';
$strings['Please select which tables and fields to export'] = 'V�lj tabeller och f�lt att exportera:';
$strings['all fields'] = '- alla f�lt -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Ren text';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Exportera data';
$strings['Reset Password for'] = '�terst�ll l�senord f�r %s';
$strings['Please edit your profile'] = 'Please edit your profile';
$strings['Please register'] = 'Var god registrera';
$strings['Email address (this will be your login)'] = 'Email-address (detta blir ditt loginnamn)';
$strings['Keep me logged in'] = 'Kom ih�g min inloggning <br/>(kr�ver cookies)';
$strings['Edit Profile'] = '�ndra profil';
$strings['Register'] = 'Registrera';
$strings['Please Log In'] = 'Logga in';
$strings['Email address'] = 'Email-address';
$strings['Password'] = 'L�senord';
$strings['First time user'] = 'Ny anv�ndare?';
$strings['Click here to register'] = 'Klicka h�r f�r att registrera';
$strings['Register for phpScheduleIt'] = 'Register for phpScheduleIt';
$strings['Log In'] = 'Logga In';
$strings['View Schedule'] = 'Visa bokningar';
$strings['View a read-only version of the schedule'] = 'Visa en ej read-only version av bokningarna';
$strings['I Forgot My Password'] = 'jag har gl�mt mitt l�senord';
$strings['Retreive lost password'] = 'H�mta gl�mt l�senord';
$strings['Get online help'] = 'F� hj�lp';
$strings['Language'] = 'Spr�k';
$strings['(Default)'] = '(Default)';

$strings['My Announcements'] = 'Mina meddelanden';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Permissions'] = 'Mina R�ttigheter';
$strings['My Quick Links'] = 'Mina Snabbl�nkar';
$strings['Announcements as of'] = 'Meddelanden fr�n o med %s';
$strings['There are no announcements.'] = 'Det finns inga meddelanden';
$strings['Resource'] = 'Resurs';
$strings['Created'] = 'Skapad';
$strings['Last Modified'] = 'Senast �ndrad';
$strings['View this reservation'] = 'Visa denna bokning';
$strings['Modify this reservation'] = '�ndra denna bokning';
$strings['Delete this reservation'] = 'Ta bort denna bokning';
$strings['Bookings'] = 'Reservringen';
$strings['Change My Profile Information/Password'] = '�ndra min profil information/l�senord';
$strings['Manage My Email Preferences'] = '�ndra mina email-inst�llningar';
$strings['Mass Email Users'] = 'eposta flera anv�ndare';
$strings['Search Scheduled Resource Usage'] = 'S�k efter aktiva bokningar';
$strings['Export Database Content'] = 'Exportera databasdata';
$strings['View System Stats'] = 'Visa statistik';
$strings['Email Administrator'] = 'E-posta Administrat�r';

$strings['Email me when'] = 'Eposta mig n�r:';
$strings['I place a reservation'] = 'Jag skapar en bokning';
$strings['My reservation is modified'] = 'Min bokning �ndras';
$strings['My reservation is deleted'] = 'Min bokning tas bort';
$strings['I prefer'] = 'Jag f�redrar:';
$strings['Your email preferences were successfully saved'] = 'Dina epost-inst�llningar sparades!';
$strings['Return to My Control Panel'] = '�terg� till startsidan';

$strings['Please select the starting and ending times'] = 'V�lj start och slut tider:';
$strings['Please change the starting and ending times'] = '�ndra start och slut tider:';
$strings['Reserved time'] = 'Reserverade tider:';
$strings['Minimum Reservation Length'] = 'Min l�ngd p� reservation:';
$strings['Maximum Reservation Length'] = 'Max l�ngd p� reservation:';
$strings['Reserved for'] = 'reserverad �t:';
$strings['Will be reserved for'] = 'Kommer vara reserverad �t:';
$strings['N/A'] = 'Ej tillg�nglig';
$strings['Update all recurring records in group'] = 'Uppdatera alla �terkommande bokningar i gruppen?';
$strings['Delete?'] = 'ta bort?';
$strings['Never'] = '-- Aldrig --';
$strings['Days'] = 'Dagar';
$strings['Weeks'] = 'Veckor';
$strings['Months (date)'] = 'M�nader (datum)';
$strings['Months (day)'] = 'M�nader (dag)';
$strings['First Days'] = 'F�rsta dagar';
$strings['Second Days'] = 'Andra dagar';
$strings['Third Days'] = 'Tredje dagar';
$strings['Fourth Days'] = 'Fjarde dagar';
$strings['Last Days'] = 'Sista dagar';
$strings['Repeat every'] = 'Repetera varje:';
$strings['Repeat on'] = 'Repetera p�:';
$strings['Repeat until date'] = 'Repetera tills:';
$strings['Choose Date'] = 'V�lj datum';
$strings['Summary'] = 'Kommentarer';

$strings['View schedule'] = 'Visa bokningar:';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Past Reservations'] = 'Mina tidigare bokningar';
$strings['Other Reservations'] = 'Andra bokningar';
$strings['Other Past Reservations'] = 'Andra tidigare bokningar';
$strings['Blacked Out Time'] = 'Ej tillg�nglig';
$strings['Set blackout times'] = 'Set blackout times for %s on %s'; 
$strings['Reserve on'] = 'Boka %s on %s';
$strings['Prev Week'] = '&laquo; F�reg�ende vecka';
$strings['Jump 1 week back'] = 'G� 1 vecka bak�t';
$strings['Prev days'] = '&#8249; Tidigare %d dagar';
$strings['Previous days'] = '&#8249; Tidigare %d dagar';
$strings['This Week'] = 'Denna vecka';
$strings['Jump to this week'] = 'G� till denna vecka';
$strings['Next days'] = 'N�sta %d dagar &#8250;';
$strings['Next Week'] = 'N�sta vecka &raquo;';
$strings['Jump To Date'] = 'G� till datum';
$strings['View Monthly Calendar'] = 'Visa m�nadskalender';
$strings['Open up a navigational calendar'] = '�ppna en kalender f�r att navigera';

$strings['View stats for schedule'] = 'Visa statistik f�r en bokning:';
$strings['At A Glance'] = 'At A Glance';
$strings['Total Users'] = 'Totala anv�ndare:';
$strings['Total Resources'] = 'Totala resurser:';
$strings['Total Reservations'] = 'Totala bokningar:';
$strings['Max Reservation'] = 'Max bokningar:';
$strings['Min Reservation'] = 'Min bokningar:';
$strings['Avg Reservation'] = 'Snitt bokningar:';
$strings['Most Active Resource'] = 'Mest anv�nda resurs:';
$strings['Most Active User'] = 'Mest aktiva anv�ndare:';
$strings['System Stats'] = 'Statistik';
$strings['phpScheduleIt version'] = 'phpScheduleIt version:';
$strings['Database backend'] = 'Database backend:';
$strings['Database name'] = 'Database name:';
$strings['PHP version'] = 'PHP version:';
$strings['Server OS'] = 'Server OS:';
$strings['Server name'] = 'Server name:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt root directory:';
$strings['Using permissions'] = 'Using permissions:';
$strings['Using logging'] = 'Using logging:';
$strings['Log file'] = 'Log file:';
$strings['Admin email address'] = 'Admin email address:';
$strings['Tech email address'] = 'Tech email address:';
$strings['CC email addresses'] = 'CC email addresses:';
$strings['Reservation start time'] = 'Reservation start time:';
$strings['Reservation end time'] = 'Reservation end time:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'Reservations';
$strings['Return to top'] = 'Return to top';
$strings['for'] = 'for';

$strings['Select Search Criteria'] = 'V�lj s�kkriterie';
$strings['Schedules'] = 'Bokningar:';
$strings['All Schedules'] = 'Alla bokningar';
$strings['Hold CTRL to select multiple'] = 'H�ll inne ctrl f�r att v�lja flera';
$strings['Users'] = 'Anv�ndare:';
$strings['All Users'] = 'Alla anv�ndare';
$strings['Resources'] = 'Resurser:';
$strings['All Resources'] = 'Alla Resurser';
$strings['Starting Date'] = 'Start datum:';
$strings['Ending Date'] = 'Slut datum:';
$strings['Starting Time'] = 'Start Tid:';
$strings['Ending Time'] = 'Slut Tid:';
$strings['Output Type'] = 'Typ:';
$strings['Manage'] = 'Hantera';
$strings['Total Time'] = 'Total Tid';
$strings['Total hours'] = 'Totala timmar:';
$strings['% of total resource time'] = '% of total resource time';
$strings['View these results as'] = 'View these results as:';
$strings['Edit this reservation'] = 'Edit this reservation';
$strings['Search Results'] = 'Search Results';
$strings['Search Resource Usage'] = 'Search Resource Usage';
$strings['Search Results found'] = 'Search Results: %d reservations found';
$strings['Try a different search'] = 'S�k igen';
$strings['Search Run On'] = 'Search Run On:';
$strings['Member ID'] = 'Member ID';
$strings['Previous User'] = '&laquo; Previous User';
$strings['Next User'] = 'Next User &raquo;';

$strings['No results'] = 'No results';
$strings['That record could not be found.'] = 'That record could not be found.';
$strings['This blackout is not recurring.'] = 'This blackout is not recurring.';
$strings['This reservation is not recurring.'] = 'This reservation is not recurring.';
$strings['There are no records in the table.'] = 'There are no records in the %s table.';
$strings['You do not have any reservations scheduled.'] = 'You do not have any reservations scheduled.';
$strings['You do not have permission to use any resources.'] = 'You do not have permission to use any resources.';
$strings['No resources in the database.'] = 'No resources in the database.';
$strings['There was an error executing your query'] = 'There was an error executing your query:';

$strings['That cookie seems to be invalid'] = 'That cookie seems to be invalid';
$strings['We could not find that logon in our database.'] = 'We could not find that logon in our database.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'L�senordet �r fel.';
$strings['You can try'] = '<br />Du kan f�rs�ka:<br />Registrera en epsotadress.<br />Eller:<br />F�rs�ka logga in igen.';
$strings['A new user has been added'] = 'En ny anv�ndare har lagts till';
$strings['You have successfully registered'] = 'Du har nu registrerat!';
$strings['Continue'] = 'Forts�tt...';
$strings['Your profile has been successfully updated!'] = 'Din profil har uppdaterats!';
$strings['Please return to My Control Panel'] = '�terv�nd till startsidan';
$strings['Valid email address is required.'] = '- korrekt epostadress kr�vs.';
$strings['First name is required.'] = '- F�rnamn kr�vs.';
$strings['Last name is required.'] = '- Efternamn kr�vs.';
$strings['Phone number is required.'] = '- Telefonnummer kr�vs.';
$strings['That email is taken already.'] = '- Epostadressen �r redan upptagen.<br />Prova med en annan epostadress.';
$strings['Min 6 character password is required.'] = '- Minst 6 tecken kr�vs.';
$strings['Passwords do not match.'] = '- L�senorden matchar inte.';

$strings['Per page'] = 'Per sida:';
$strings['Page'] = 'Sida:';

$strings['Your reservation was successfully created'] = 'Din bokning �r nu skapad';
$strings['Your reservation was successfully modified'] = 'Din bokning �r nu �ndrad';
$strings['Your reservation was successfully deleted'] = 'Din bokning �r nu borttagen';
$strings['Your blackout was successfully created'] = 'Din otillg�ngliga tid �r nu skapad';
$strings['Your blackout was successfully modified'] = 'Din otillg�ngliga tid �r nu �ndrad';
$strings['Your blackout was successfully deleted'] = 'Din otillg�ngliga tid �r nu borttagen';
$strings['for the follwing dates'] = 'f�ljande datum:';
$strings['Start time must be less than end time'] = 'Starttid m�ste vara mindre �n sluttid.';
$strings['Current start time is'] = 'Nuvarande starttid �r:';
$strings['Current end time is'] = 'Nuvarnade sluttid �r:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Bokningens l�ngd st�mmer inte med denna resurs till�tna l�ngd.';
$strings['Your reservation is'] = 'Din bokning �r:';
$strings['Minimum reservation length'] = 'Min reservationsl�ngd:';
$strings['Maximum reservation length'] = 'Max reservationsl�ngd:';
$strings['You do not have permission to use this resource.'] = 'Du f�r inte anv�nda denna resurs.';
$strings['reserved or unavailable'] = '%s to %s is reserved or unavailable.';	// @since 1.1.0
$strings['Reservation created for'] = 'Bokning %s skapad';
$strings['Reservation modified for'] = 'Bokning %s �ndrad';
$strings['Reservation deleted for'] = 'Bokning %s borttagen';
$strings['created'] = 'skapad';
$strings['modified'] = '�ndrad';
$strings['deleted'] = 'borttagen';
$strings['Reservation #'] = 'Bokning #';
$strings['Contact'] = 'kontakt';
$strings['Reservation created'] = 'Bokning skapad';
$strings['Reservation modified'] = 'Bokning �ndrad';
$strings['Reservation deleted'] = 'Bokning borttagen';

$strings['Reservations by month'] = 'Bokningar m�nadsvis';
$strings['Reservations by day of the week'] = 'Bokningar veckodagsvis';
$strings['Reservations per month'] = 'Bokningar per m�nad';
$strings['Reservations per user'] = 'Bokningar per anv�ndare';
$strings['Reservations per resource'] = 'Bokningar per resurs';
$strings['Reservations per start time'] = 'Reservations per start time';
$strings['Reservations per end time'] = 'Reservations per end time';
$strings['[All Reservations]'] = '[Alla bokningar]';

$strings['Permissions Updated'] = 'R�ttigheter Uppdaterade';
$strings['Your permissions have been updated'] = 'Dina %s r�ttigheter har blivit uppdaterade';
$strings['You now do not have permission to use any resources.'] = 'Du har inte till�telse att anv�nda n�gon resurs';
$strings['You now have permission to use the following resources'] = 'Du har du till�telse att anv�nda f�ljande resurser:';
$strings['Please contact with any questions.'] = 'kontakta %s med din fr�ga.';
$strings['Password Reset'] = '�terst�ll l�senord';

$strings['This will change your password to a new, randomly generated one.'] = 'Detta kommer �ndra ditt l�senord till ett nytt slumpm�ssigt genererat.';
$strings['your new password will be set'] = 'N�r du skrivit in din epostadress och klickat p� skicka s� kommer det nya l�senordet mailas till dig.';
$strings['Change Password'] = 'Byt l�senord';
$strings['Sorry, we could not find that user in the database.'] = 'Tyv�rr, anv�ndaren finns inte i databasenl.';
$strings['Your New Password'] = 'Ditt nya l�senord %s ';
$strings['Your new passsword has been emailed to you.'] = 'Grattis!<br />'
    			. 'Ditt nya l�senord har skickats till dig.<br />'
    			. 'Kolla din mail och <a href="index.php">logga in</a>'
    			. ' med det nya l�senordet, �ndra det d�refter i din profil om du vill.';

$strings['You are not logged in!'] = 'Du �r inte inloggad!';

$strings['Setup'] = 'Setup';
$strings['Please log into your database'] = 'Please log into your database';
$strings['Enter database root username'] = 'Enter database root username:';
$strings['Enter database root password'] = 'Enter database root password:';
$strings['Login to database'] = 'Login to database';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Root user is <b>not</b> required. Any database user who has permission to create tables is acceptable.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'This will set up all the necessary databases and tables for phpScheduleIt.';
$strings['It also populates any required tables.'] = 'It also populates any required tables.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!';
$strings['Not a valid database type in the config.php file.'] = 'Not a valid database type in the config.php file.';
$strings['Database user password is not set in the config.php file.'] = 'Database user password is not set in the config.php file.';
$strings['Database name not set in the config.php file.'] = 'Database name not set in the config.php file.';
$strings['Successfully connected as'] = 'Successfully connected as';
$strings['Create tables'] = 'Create tables &gt;';
$strings['There were errors during the install.'] = 'There were errors during the install. It is possible that phpScheduleIt will still work if the errors were minor.<br/><br/>'
	. 'Please post any questions to the forums on <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'You have successfully finished setting up phpScheduleIt and are ready to begin using it.';
$strings['Thank you for using phpScheduleIt'] = 'Please be sure to COMPLETELY REMOVE THE \'install\' DIRECTORY.'
	. ' This is critical because it contains database passwords and other sensitive information.'
	. ' Failing to do so leaves the door wide open for anyone to break into your database!'
	. '<br /><br />'
	. 'Thank you for using phpScheduleIt!';
$strings['This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.'] = 'This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.';
$strings['There is no way to undo this action'] = 'There is no way to undo this action!';
$strings['Click to proceed'] = 'Click to proceed';
$strings['This version has already been upgraded to 1.0.0.'] = 'This version has already been upgraded to 1.0.0.';
$strings['Please delete this file.'] = 'Please delete this file.';
$strings['Successful update'] = 'The update succeeded fully';
$strings['Patch completed successfully'] = 'Patch completed successfully';
$strings['This will populate the required fields for phpScheduleIt 1.0.0 and patch a data bug in 0.9.9.'] = 'This will populate the required fields for phpScheduleIt 1.0.0 and patch a data bug in 0.9.9.'
		. '<br />It is only required to run this if you performed a manual SQL update or are upgrading from 0.9.9';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'If no value is specified, the default password set in the config file will be used.';
$strings['Notify user that password has been changed?'] = 'Notify user that password has been changed?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Detta system kr�ver att du har en epost-adress.';
$strings['Invalid User Name/Password.'] = 'Oglitig anv�ndare namn/l�senord.';
$strings['Pending User Reservations'] = 'V�ntar p� bokningar';
$strings['Approve'] = 'Godk�nn';
$strings['Approve this reservation'] = 'Godk�nn denna bokningen';
$strings['Approve Reservations'] ='Godk�nn bokningar';

$strings['Announcement'] = 'Meddelanden';
$strings['Number'] = 'Nummer';
$strings['Add Announcement'] = 'L�gg till meddelande';
$strings['Edit Announcement'] = 'Redigera meddelande';
$strings['All Announcements'] = 'Alla meddelanden';
$strings['Delete Announcements'] = 'Ta bort meddelanden';
$strings['Use start date/time?'] = 'Anv�nd starttid/startdatum?';
$strings['Use end date/time?'] = 'Anv�nd sluttid/slutdatum?';
$strings['Announcement text is required.'] = 'Meddelandetext kr�vs.';
$strings['Announcement number is required.'] = 'Meddelandenummer kr�vs.';

$strings['Pending Approval'] = 'V�ntar p� godk�nnande';
$strings['My reservation is approved'] = 'Min bokning �r godk�nd';
$strings['This reservation must be approved by the administrator.'] = 'Denna bokning m�ste godk�nnas av administrat�ren';
$strings['Approval Required'] = 'Beh�ver godk�nnas';
$strings['No reservations requiring approval'] = 'Inga bokningar som beh�ver godk�nnas';
$strings['Your reservation was successfully approved'] = 'Din bokning godk�ndes';
$strings['Reservation approved for'] = '%s bokning godk�nd ';
$strings['approved'] = 'godk�nd';
$strings['Reservation approved'] = 'bokning godk�nd';

$strings['Valid username is required'] = 'Giltigt anv�ndarnamn kr�vs';
$strings['That logon name is taken already.'] = 'Namnet �r redan upptaget.';
$strings['this will be your login'] = '(detta blir till login-namn)';
$strings['Logon name'] = 'Login-namn';
$strings['Your logon name is'] = 'Ditt login-namn �r %s';

$strings['Start'] = 'Start';
$strings['End'] = 'Slut';
$strings['Start date must be less than or equal to end date'] = 'Startdatum m�ste vara mindre eller lika med slutdatum';
$strings['That starting date has already passed'] = 'startdatumet har redan varit';
$strings['Basic'] = 'Grundl�ggande';
$strings['Participants'] = 'Deltagare';
$strings['Close'] = 'St�ng';
$strings['Start Date'] = 'Start datum';
$strings['End Date'] = 'slut datum';
$strings['Minimum'] = 'Min';
$strings['Maximum'] = 'Max';
$strings['Allow Multiple Day Reservations'] = 'Till�� flerdagsreservationer';
$strings['Invited Users'] = 'Inbjudna anv�ndare';
$strings['Invite Users'] = 'Bjud in anv�ndare';
$strings['Remove Participants'] = 'Ta bort deltagare';
$strings['Reservation Invitation'] = 'Inbjudningar';
$strings['Manage Invites'] = 'Hantera inbjudningar';
$strings['No invite was selected'] = 'Ingen inbjudning valdes';
$strings['reservation accepted'] = '%s har accepterat din inbjudan p� %s';
$strings['reservation declined'] = '%s har avslagit din inbjudan p� %s';
$strings['Login to manage all of your invitiations'] = 'Logga in f�r att hantera dina inbjudningar';
$strings['Reservation Participation Change'] = '�ndra bokningens deltagare';
$strings['My Invitations'] = 'Mina inbjudningar';
$strings['Accept'] = 'Acceptera';
$strings['Decline'] = 'Avsl�';
$strings['Accept or decline this reservation'] = 'Acceptera eller avsl� denna inbjudning';
$strings['My Reservation Participation'] = 'Mina bokningars deltagare';
$strings['End Participation'] = 'Avsluta deltagning';
$strings['Owner'] = '�gare';
$strings['Particpating Users'] = 'Deltagande anv�ndare';
$strings['No advanced options available'] = 'Inga avancerade inst�llningar tillg�ngliga';
$strings['Confirm reservation participation'] = 'Bekr�fta deltagande av bokning';
$strings['Confirm'] = 'Bekr�fta';
$strings['Do for all reservations in the group?'] = 'F�r alla bokningar i gruppen?';

$strings['My Calendar'] = 'Min kalender';
$strings['View My Calendar'] = 'Visa min kalender';
$strings['Participant'] = 'Deltagare';
$strings['Recurring'] = '�terkommande';
$strings['Multiple Day'] = 'Flera dagar';
$strings['[today]'] = '[idag]';
$strings['Day View'] = 'Dag-vy';
$strings['Week View'] = 'Vecko-vy';
$strings['Month View'] = 'M�nads-vy';
$strings['Resource Calendar'] = 'Bokning kalender';
$strings['View Resource Calendar'] = 'Visa bokning kalender';
$strings['Signup View'] = 'Anm�lnings-vy';

$strings['Select User'] = 'V�lj anv�ndare';
$strings['Change'] = '�ndra';

$strings['Update'] = 'Uppdatera';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt uppdatering �r endast tillg�ngligt f�r version 1.0.0 eller senare';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt �r redan uppdaterad';
$strings['Migrating reservations'] = 'Migrerar bokningar';

$strings['Admin'] = 'Admin';
// end since 1.1.0

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
   in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
***/
// @since 1.1.0
// Email message that a user gets after they register
$email['register'] = "%s, %s \r\n"
				. "Du har registrerat dig med f�ljande information:\r\n"
				. "Login: %s\r\n"
				. "Namn: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Avdelning: %s \r\n"
				. "Position: %s \r\n\r\n"
				. "Logga in p� bokningssystemet h�r:\r\n"
				. "%s \r\n\r\n"
				. "Du kan hitta l�nkar till bokningarna eller �ndra din profil p� Startsidan.\r\n\r\n"
				. "Skicka fr�gor ang�ende bokningar till %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrator,\r\n\r\n"
					. "A new user has registered with the following information:\r\n"
					. "Email: %s \r\n"
					. "Name: %s %s \r\n"
					. "Phone: %s \r\n"
					. "Institution: %s \r\n"
					. "Position: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Du har %s #%s.\r\n\r\n<br/><br/>"
			. "Anv�nd detta nummer om du har fr�gor till administrat�ren.\r\n\r\n<br/><br/>"
			. "en bokning mellan %s %s och %s %s �t %s"
			. " i %s �r %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Denna bokning repeteras p� f�ljande datum:\r\n<br/>";
$email['reservation_activity_3'] = "All recurring reservations in this group were also %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Beskrivning av bokningen:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Om detta �r fel, kontakta: %s"
                        . " eller ring %s 171833.\r\n\r\n<br/><br/>"
                        . "Du kan se eller �ndra bokningen genom att"
                        . " logga in p� %s h�r:\r\n<br/>"
                        . "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Har du tekniska fr�gor, kontakta <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Bokning #%s har blivit godk�nd.\r\n\r\n<br/><br/>"
			. "Anv�nd detta nummer om du har fr�gor till administrat�ren.\r\n\r\n<br/><br/>"
			. "en bokning mellan %s %s and %s %s for %s"
			. " i %s �r %s.\r\n\r\n<br/><br/>";
			
// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Ditt %s l�senord har blivit �terst�llt av administrat�ren.\r\n\r\n"
			. "Ditt tillf�lliga l�enord �r:\r\n\r\n %s\r\n\r\n"
			. "Anv�nd detta l�senord f�r att logga in  %s at %s"
			. " och �ndra de genast '�ndra min profil' l�nk bland snabbl�nkarna.\r\n\r\n"
			. "Kontakta %s om du har n�gra fr�gor.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Ditt nya l�senord f�r kontot p� bokningssystemet �r :\r\n\r\n"
            . "%s\r\n\r\n"
            . "Logga in p� %s "
            . "med ditt nya l�senord "
            . "(kopiera och klistra in f�r att vara s�ker p� att de blir r�tt) "
            . "byt sedan till n�tgot annat l�senord genom att klicka p� �ndra min profil"
            . "p� f�rsta sidan.\r\n\r\n"
            . "har du fr�gor kontakta %s.";
			
// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s har blivit inbjuden att delta i f�ljande bokning:\r\n\r\n"
		. "PLats: %s\r\n"
		. "Start Datum: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Datum: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Sammanfattning: %s\r\n"
		. "�terkommande datum (om n�gra): %s\r\n\r\n"
		. "F�r att acceptera bokningen klicka p� f�ljande l�nk %s\r\n"
		. "F�r att avsl� bokningen klicka p� f�ljande l�nk %s\r\n"
		. "F�r att acceptera datum eller hantera inbjudningarna senare, logga in p� %s h�r %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Du har blivit borttagen fr�n f�ljande bokning:\r\n\r\n"
		. "Plats: %s\r\n"
		. "Start Datum: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Datum: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Sammanfattning: %s\r\n"
		. "�terkommande datum (om n�gra): %s\r\n\r\n";	
?>