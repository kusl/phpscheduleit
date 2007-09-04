<?php
/**
* Swedish (se) translation file.
*
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Johan Sundström <johan.sundstrom@vasterbottensmuseum.se>, Klas Flodqvist <klas.flodqvist@isklabbe.se>
* @version 2007-04-03
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
$days_full = array('S&ouml;ndag', 'M&aring;ndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'L&ouml;rdag');
// The three letter abbreviation
$days_abbr = array('S&ouml;n', 'M&aring;n', 'Tis', 'Ons', 'Tor', 'Fre', 'L&ouml;r');
// The two letter abbreviation
$days_two  = array('S&ouml;', 'M&aring;', 'Ti', 'On', 'To', 'Fr', 'L&ouml;');
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
$dates['general_date'] = '%d/%m/%Y';
// General datetime formatting used for all datetime display unless otherwise noted
// The hour:minute:second will always follow this format
$dates['general_datetime'] = '%d/%m/%Y @';
// Date in the reservation notification popup and email
$dates['res_check'] = '%A %d/%m/%Y';
// Date on the scheduler that appears above the resource links
$dates['schedule_daily'] = '%A,<br/>%d/%m/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %B %d, %Y';
// Jump box format on bottom of the schedule page
// This must only include %m %d %Y in the proper order,
//  other specifiers will be ignored and will corrupt the jump box
$dates['jumpbox'] = '%d %m %Y';

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
$strings['yyyy'] = '&aring;&aring;&aring;&aring;';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrat&ouml;r';
$strings['Welcome Back'] = 'V&auml;lkommen tillbaka, %s';
$strings['Log Out'] = 'Logga ut';
$strings['My Control Panel'] = 'Startsidan';
$strings['Help'] = 'Hj&auml;lp';
$strings['Manage Schedules'] = 'Hantera Scheman';
$strings['Manage Users'] ='Hantera anv&auml;ndare';
$strings['Manage Resources'] ='Hantera resurser';
$strings['Manage User Training'] ='Hantera anv&auml;ndartr&auml;ning';
$strings['Manage Reservations'] ='Hantera bokningar';
$strings['Email Users'] ='Epost till anv&auml;ndare';
$strings['Export Database Data'] = 'Exportera Databas data';
$strings['Reset Password'] = '&Aring;terst&auml;ll l&ouml;senord';
$strings['System Administration'] = 'System Administration';
$strings['Successful update'] = 'Uppdateringen lyckades';
$strings['Update failed!'] = 'Uppdateringen misslyckades!';
$strings['Manage Blackout Times'] = 'Hantera ej tillg&auml;ngliga tider';
$strings['Forgot Password'] = 'Gl&ouml;mt l&ouml;senordet?';
$strings['Manage My Email Contacts'] = 'Hantera mina epost-kontakter';
$strings['Choose Date'] = 'V&auml;lj datum';
$strings['Modify My Profile'] = '&Auml;ndra min profil';
$strings['Register'] = 'Registrera';
$strings['Processing Blackout'] = 'Behandlar st&auml;ngning';
$strings['Processing Reservation'] = 'Behandlar bokning';
$strings['Online Scheduler [Read-only Mode]'] = 'Online bokning [endast l&auml;s-l&auml;ge]';
$strings['Online Scheduler'] = 'Online bokning';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Statistik';
$strings['User Info'] = 'Anv&auml;ndarinformation:';

$strings['Could not determine tool'] = 'Kunde inte hitta verktyget. &Aring;terg&aring; till startsidan och f&ouml;rs&ouml;k igen.';
$strings['This is only accessable to the administrator'] = 'Detta &auml;r endast till f&ouml;r administrat&ouml;ren';
$strings['Back to My Control Panel'] = 'Tillbaka till startsidan';
$strings['That schedule is not available.'] = 'Den bokningen &auml;r inte tillg&auml;nglig.';
$strings['You did not select any schedules to delete.'] = 'Du valde ingen bokning att ta bort.';
$strings['You did not select any members to delete.'] = 'Du valde ingen medlem att ta bort.';
$strings['You did not select any resources to delete.'] = 'Du valde ingen resurs att ta bort.';
$strings['Schedule title is required.'] = 'Namn p&aring; bokning kr&auml;vs.';
$strings['Invalid start/end times'] = 'Ogiltig start/slut tid';
$strings['View days is required'] = 'Visa dagar kr&auml;vs';
$strings['Day offset is required'] = 'Dag offset kr&auml;vs';
$strings['Admin email is required'] = 'Administrat&ouml;rens epost kr&auml;vs';
$strings['Resource name is required.'] = 'Resurs namn kr&auml;vs.';
$strings['Valid schedule must be selected'] = 'En bokning m&aring;ste v&auml;ljas';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minimal reservationsl&auml;ngd m&aring;ste vara minde eller lika med den maximala reservationsl&auml;ngden';
$strings['Your request was processed successfully.'] = 'Din f&ouml;rfr&aring;gan behandlades.';
$strings['Go back to system administration'] = 'Tillbaka till administrationen';
$strings['Or wait to be automatically redirected there.'] = 'Eller v&auml;nta och bli automatiskt vidarebefodrad.';
$strings['There were problems processing your request.'] = 'Det var problem med din beg&auml;ran.';
$strings['Please go back and correct any errors.'] = 'G&aring; tillbaka och r&auml;tta till eventuella fel.';
$strings['Login to view details and place reservations'] = 'Logga in f&ouml;r att se detaljer och g&ouml;ra bokningar';
$strings['Memberid is not available.'] = 'Memberid: %s &auml;r inte tillg&auml;ngligt.';

$strings['Schedule Title'] = 'Schematitel';
$strings['Start Time'] = 'Start tid';
$strings['End Time'] = 'Slut tid';
$strings['Time Span'] = 'Tidsintervall';
$strings['Weekday Start'] = 'Veckodag Start';
$strings['Admin Email'] = 'Admin Epost';

$strings['Default'] = 'Standard';
$strings['Reset'] = 'Reset';
$strings['Edit'] = '&Auml;ndra';
$strings['Delete'] = 'Ta bort';
$strings['Cancel'] = 'Avbryt';
$strings['View'] = 'Visa';
$strings['Modify'] = '&Auml;ndra';
$strings['Save'] = 'Spara';
$strings['Back'] = 'Tillbaka';
$strings['Next'] = 'N&auml;sta';
$strings['Close Window'] = 'St&auml;ng f&ouml;nster';
$strings['Search'] = 'S&ouml;k';
$strings['Clear'] = 'T&ouml;m';

$strings['Days to Show'] = 'Dagar att visa';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Dold';
$strings['Show Summary'] = 'Visa sammanfattning';
$strings['Add Schedule'] = 'L&auml;gg till schema';
$strings['Edit Schedule'] = '&Auml;ndra schema';
$strings['No'] = 'Nej';
$strings['Yes'] = 'Ja';
$strings['Name'] = 'Namn';
$strings['First Name'] = 'F&ouml;rnamn';
$strings['Last Name'] = 'Efternamn';
$strings['Resource Name'] = 'Namn p&aring; resurs';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Avdelning';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'L&ouml;senord';
$strings['Permissions'] = 'Permissions';
$strings['View information about'] = 'Visa information om %s %s';
$strings['Send email to'] = 'Skicka email till %s %s';
$strings['Reset password for'] = '&Aring;terst&auml;ll l&ouml;senord &aring;t %s %s';
$strings['Edit permissions for'] = '&Auml;ndra r&auml;ttigheter f&ouml;r %s %s';
$strings['Position'] = 'Position';
$strings['Password (6 char min)'] = 'L&ouml;senord (%s tecken minst)';
$strings['Re-Enter Password'] = 'Upprepa l&ouml;senord';

$strings['Sort by descending last name'] = 'Sortera fallande, efternamn';
$strings['Sort by descending email address'] = 'Sortera fallande, email-address';
$strings['Sort by descending institution'] = 'Sortera fallande, avdelning';
$strings['Sort by ascending last name'] = 'Sortera stigande, efternamn';
$strings['Sort by ascending email address'] = 'Sortera stigande, email-address';
$strings['Sort by ascending institution'] = 'Sortera stigande, avdelning';
$strings['Sort by descending resource name'] = 'Sortera fallande, resurs';
$strings['Sort by descending location'] = 'Sortera fallande, plats';
$strings['Sort by descending schedule title'] = 'Sortera fallandeb, schemanamn';
$strings['Sort by ascending resource name'] = 'Sortera stigande, resurs';
$strings['Sort by ascending location'] = 'Sortera stigande, plats';
$strings['Sort by ascending schedule title'] = 'Sortera stigande, schemanamn';
$strings['Sort by descending date'] = 'Sortera fallande, datum';
$strings['Sort by descending user name'] = 'Sortera fallande, anv&auml;ndare';
$strings['Sort by descending start time'] = 'Sortera fallande, start tid';
$strings['Sort by descending end time'] = 'Sortera fallande, slut tid';
$strings['Sort by ascending date'] = 'Sortera stigande, datum';
$strings['Sort by ascending user name'] = 'Sortera stigande, anv&auml;ndare';
$strings['Sort by ascending start time'] = 'Sortera stigande, start tid';
$strings['Sort by ascending end time'] = 'Sortera stigande, slut tid';
$strings['Sort by descending created time'] = 'Sortera fallande, skapad';
$strings['Sort by ascending created time'] = 'Sortera stigande, skapad';
$strings['Sort by descending last modified time'] = 'Sortera fallande, senast &auml;ndrad';
$strings['Sort by ascending last modified time'] = 'Sortera stigande, senast &auml;ndrad';

$strings['Search Users'] = 'S&ouml;k anv&auml;ndare';
$strings['Location'] = 'Plats';
$strings['Schedule'] = 'Schema';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Kommentarer';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Alla scheman';
$strings['All Resources'] = 'Alla resurser';
$strings['All Users'] = 'Alla anv&auml;ndare';

$strings['Edit data for'] = '&Auml;ndra data f&ouml;r %s';
$strings['Active'] = 'Aktiv';
$strings['Inactive'] = 'Inaktiv';
$strings['Toggle this resource active/inactive'] = '&Auml;ndra denna resurs aktiv/inaktiv';
$strings['Minimum Reservation Time'] = 'Min Reservations Tid';
$strings['Maximum Reservation Time'] = 'Max Reservations Tid';
$strings['Auto-assign permission'] = 'Auto-assign permission';
$strings['Add Resource'] = 'L&auml;gg till Resurs';
$strings['Edit Resource'] = '&Auml;ndra Resurs';
$strings['Allowed'] = 'Till&aring;ten';
$strings['Notify user'] = 'Meddela anv&auml;ndare';
$strings['User Reservations'] = 'Anv&auml;ndarens bokningar';
$strings['Date'] = 'Datum';
$strings['User'] = 'Anv&auml;ndare';
$strings['Email Users'] = 'Email Anv&auml;ndare';
$strings['Subject'] = '&Auml;mne';
$strings['Message'] = 'Meddelande';
$strings['Please select users'] = 'V&auml;lj anv&auml;ndare';
$strings['Send Email'] = 'Skicka Email';
$strings['problem sending email'] = 'Det var ett problem n&auml;r ditt brev skulle skickas, prova igen senare.';
$strings['The email sent successfully.'] = 'E-brevet skickades.';
$strings['do not refresh page'] = 'Uppdatera<u>inte</u> denna sida. G&ouml;r du de s&aring; skickas e-brevet igen.';
$strings['Return to email management'] = 'Tillbaka till e-posthanteringen';
$strings['Please select which tables and fields to export'] = 'V&auml;lj tabeller och f&auml;lt att exportera:';
$strings['all fields'] = '- alla f&auml;lt -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Ren text';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Exportera data';
$strings['Reset Password for'] = '&Aring;terst&auml;ll l&ouml;senord f&ouml;r %s';
$strings['Please edit your profile'] = 'Please edit your profile';
$strings['Please register'] = 'Var god registrera';
$strings['Email address (this will be your login)'] = 'Epost-address (detta blir ditt loginnamn)';
$strings['Keep me logged in'] = 'Kom ih&aring;g min inloggning <br/> (kr&auml;ver att din webbl&auml;sare till&aring;ter cookies)';
$strings['Edit Profile'] = '&Auml;ndra profil';
$strings['Register'] = 'Registrera';
$strings['Please Log In'] = 'Logga in';
$strings['Email address'] = 'Email-address';
$strings['Password'] = 'L&ouml;senord';
$strings['First time user'] = 'Ny anv&auml;ndare';
$strings['Click here to register'] = 'Klicka h&auml;r f&ouml;r att registrera';
$strings['Register for phpScheduleIt'] = 'Registrera till phpScheduleIt';
$strings['Log In'] = 'Logga In';
$strings['View Schedule'] = 'Visa schema';
$strings['View a read-only version of the schedule'] = 'Visa en read-only version av schemat';
$strings['I Forgot My Password'] = 'Jag har gl&ouml;mt mitt l&ouml;senord';
$strings['Retreive lost password'] = '&Aring;terf&aring; gl&ouml;mt l&ouml;senord';
$strings['Get online help'] = 'F&aring; hj&auml;lp';
$strings['Language'] = 'Spr&aring;k';
$strings['(Default)'] = '(Default)';

$strings['My Announcements'] = 'Mina meddelanden';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Permissions'] = 'Mina R&auml;ttigheter';
$strings['My Quick Links'] = 'Mina Snabbl&auml;nkar';
$strings['Announcements as of'] = 'Meddelanden fr&aring;n och med %s';
$strings['There are no announcements.'] = 'Det finns inga meddelanden';
$strings['Resource'] = 'Resurs';
$strings['Created'] = 'Skapad';
$strings['Last Modified'] = 'Senast &auml;ndrad';
$strings['View this reservation'] = 'Visa denna bokning';
$strings['Modify this reservation'] = '&Auml;ndra denna bokning';
$strings['Delete this reservation'] = 'Ta bort denna bokning';
$strings['Bookings'] = 'Bokningar';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = '&Auml;ndra min profil';	// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Mina E-mailinst&auml;llningar';		// @since 1.2.0
$strings['Mass Email Users'] = 'e-posta flera anv&auml;ndare';
$strings['Search Scheduled Resource Usage'] = 'S&ouml;k schemalagda bokningar';	// @since 1.2.0
$strings['Export Database Content'] = 'Exportera databasdata';
$strings['View System Stats'] = 'Visa statistik';
$strings['Email Administrator'] = 'E-posta Administrat&ouml;r';

$strings['Email me when'] = 'Eposta mig n&auml;r:';
$strings['I place a reservation'] = 'Jag skapar en bokning';
$strings['My reservation is modified'] = 'Min bokning &auml;ndras';
$strings['My reservation is deleted'] = 'Min bokning tas bort';
$strings['I prefer'] = 'Jag f&ouml;redrar:';
$strings['Your email preferences were successfully saved'] = 'Dina epost-inst&auml;llningar sparades!';
$strings['Return to My Control Panel'] = '&Aring;terg&aring; till startsidan';

$strings['Please select the starting and ending times'] = 'V&auml;lj start och slut tider:';
$strings['Please change the starting and ending times'] = '&Auml;ndra start och slut tider:';
$strings['Reserved time'] = 'Reserverade tider:';
$strings['Minimum Reservation Length'] = 'Min l&auml;ngd p&aring; bokning:';
$strings['Maximum Reservation Length'] = 'Max l&auml;ngd p&aring; bokning:';
$strings['Reserved for'] = 'bokad &aring;t:';
$strings['Will be reserved for'] = 'Kommer vara reserverad &aring;t:';
$strings['N/A'] = 'Ej tillg&auml;nglig';
$strings['Update all recurring records in group'] = 'Uppdatera alla &aring;terkommande bokningar i gruppen?';
$strings['Delete?'] = 'Ta bort?';
$strings['Never'] = '-- Aldrig --';
$strings['Days'] = 'Dagar';
$strings['Weeks'] = 'Veckor';
$strings['Months (date)'] = 'M&aring;nader (datum)';
$strings['Months (day)'] = 'M&aring;nader (dag)';
$strings['First Days'] = 'F&ouml;rsta dagar';
$strings['Second Days'] = 'Andra dagar';
$strings['Third Days'] = 'Tredje dagar';
$strings['Fourth Days'] = 'Fj&auml;rde dagar';
$strings['Last Days'] = 'Sista dagar';
$strings['Repeat every'] = 'Repetera varje:';
$strings['Repeat on'] = 'Repetera p&aring;:';
$strings['Repeat until date'] = 'Repetera tills:';
$strings['Choose Date'] = 'V&auml;lj datum';
$strings['Summary'] = 'Kommentarer';

$strings['View schedule'] = 'Visa schema:';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Past Reservations'] = 'Mina tidigare bokningar';
$strings['Other Reservations'] = 'Andra bokningar';
$strings['Other Past Reservations'] = 'Andra tidigare bokningar';
$strings['Blacked Out Time'] = 'Ej tillg&auml;nglig';
$strings['Set blackout times'] = 'S&auml;tt inaktiverade tider f&ouml;r %s p&aring; %s';
$strings['Reserve on'] = 'Boka %s p&aring; %s';
$strings['Prev Week'] = '&laquo; F&ouml;reg&aring;ende vecka';
$strings['Jump 1 week back'] = 'G&aring; 1 vecka bak&aring;t';
$strings['Prev days'] = '&#8249; Tidigare %d dagar';
$strings['Previous days'] = '&#8249; Tidigare %d dagar';
$strings['This Week'] = 'Denna vecka';
$strings['Jump to this week'] = 'G&aring; till denna vecka';
$strings['Next days'] = 'N&auml;sta %d dagar &#8250;';
$strings['Next Week'] = 'N&auml;sta vecka &raquo;';
$strings['Jump To Date'] = 'G&aring; till datum';
$strings['View Monthly Calendar'] = 'Visa m&aring;nadskalender';
$strings['Open up a navigational calendar'] = '&Ouml;ppna en kalender f&ouml;r att navigera';

$strings['View stats for schedule'] = 'Visa statistik f&ouml;r schemat:';
$strings['At A Glance'] = 'Snabb&ouml;versikt';
$strings['Total Users'] = 'Totala anv&auml;ndare:';
$strings['Total Resources'] = 'Totala resurser:';
$strings['Total Reservations'] = 'Totala bokningar:';
$strings['Max Reservation'] = 'Max bokningar:';
$strings['Min Reservation'] = 'Min bokningar:';
$strings['Avg Reservation'] = 'Snitt bokningar:';
$strings['Most Active Resource'] = 'Mest anv&auml;nda resurs:';
$strings['Most Active User'] = 'Mest aktiva anv&auml;ndare:';
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
$strings['Reservation start time'] = 'Bokning starttid:';
$strings['Reservation end time'] = 'Bokning sluttid:';
$strings['Days shown at a time'] = 'Dagar visade per sida:';
$strings['Reservations'] = 'Reservations';
$strings['Return to top'] = 'Return to top';
$strings['for'] = 'for';

$strings['Select Search Criteria'] = 'V&auml;lj s&ouml;kkriterie';
$strings['Schedules'] = 'Scheman:';
$strings['All Schedules'] = 'Alla scheman';
$strings['Hold CTRL to select multiple'] = 'H&aring;ll ner ctrl f&ouml;r att v&auml;lja flera';
$strings['Users'] = 'Anv&auml;ndare:';
$strings['All Users'] = 'Alla anv&auml;ndare';
$strings['Resources'] = 'Resurser';
$strings['All Resources'] = 'Alla resurser';
$strings['Starting Date'] = 'Startdatum:';
$strings['Ending Date'] = 'Slutdatum:';
$strings['Starting Time'] = 'Starttid:';
$strings['Ending Time'] = 'Sluttid:';
$strings['Output Type'] = 'Typ:';
$strings['Manage'] = 'Hantera';
$strings['Total Time'] = 'Total Tid';
$strings['Total hours'] = 'Totalt timmar:';
$strings['% of total resource time'] = '% av total tid';
$strings['View these results as'] = 'Visa resultat som:';
$strings['Edit this reservation'] = 'Redigera denna bokning';
$strings['Search Results'] = 'S&ouml;kresultat';
$strings['Search Resource Usage'] = 'Anv&auml;ndning av s&ouml;kresultat';
$strings['Search Results found'] = 'S&ouml;kresultat: %d bokningar hittade';
$strings['Try a different search'] = 'S&ouml;k igen';
$strings['Search Run On'] = 'S&ouml;kning p&aring;g&aring;r:';
$strings['Member ID'] = 'Medlems ID';
$strings['Previous User'] = '&laquo; F&ouml;reg&aring;ende Anv&auml;ndare';
$strings['Next User'] = 'N&auml;sta anv&auml;ndare &raquo;';

$strings['No results'] = 'Inga resultat';
$strings['That record could not be found.'] = 'Inget objekt kunde hittas.';
$strings['This blackout is not recurring.'] = 'Denna ej-tillg&auml;ng-tid &auml;r inte &aring;terkommande.';
$strings['This reservation is not recurring.'] = 'Denna reservation &auml;r inte &aring;terkommande.';
$strings['There are no records in the table.'] = 'Det finns inga objekt i %s tabellen.';
$strings['You do not have any reservations scheduled.'] = 'Du har inga reservationer schemalagda.';
$strings['You do not have permission to use any resources.'] = 'Du har inte r&auml;ttigheteer att se n&aring;gra resurser.';
$strings['No resources in the database.'] = 'Inga resurser i databasen.';
$strings['There was an error executing your query'] = 'Ett fel uppstod vid k&ouml;rning av din fr&aring;ga:';

$strings['That cookie seems to be invalid'] = 'Den cookien verkar vara ogiltig';
$strings['We could not find that logon in our database.'] = 'Logon kunde inte hittas i databasen.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'L&ouml;senordet &auml;r fel.';
$strings['You can try'] = '<br />Du kan f&ouml;rs&ouml;ka:<br />Registrera en epostadress.<br />Eller:<br />F&ouml;rs&ouml;ka logga in igen.';
$strings['A new user has been added'] = 'En ny anv&auml;ndare har lagts till';
$strings['You have successfully registered'] = 'Du har nu registrerat!';
$strings['Continue'] = 'Forts&auml;tt...';
$strings['Your profile has been successfully updated!'] = 'Din profil har uppdaterats!';
$strings['Please return to My Control Panel'] = '&Aring;terv&auml;nd till startsidan';
$strings['Valid email address is required.'] = '- riktig epostadress kr&auml;vs.';
$strings['First name is required.'] = '- F&ouml;rnamn kr&auml;vs.';
$strings['Last name is required.'] = '- Efternamn kr&auml;vs.';
$strings['Phone number is required.'] = '- Telefonnummer kr&auml;vs.';
$strings['That email is taken already.'] = '- Epostadressen finns redan i systemet.<br />F&ouml;rs&ouml;k med en annan.';
$strings['Min 6 character password is required.'] = '- Minst 6 tecken kr&auml;vs.';
$strings['Passwords do not match.'] = '- L&ouml;senorden &auml;r inte identiska.';

$strings['Per page'] = 'Per sida:';
$strings['Page'] = 'Sida:';

$strings['Your reservation was successfully created'] = 'Din bokning &auml;r nu skapad';
$strings['Your reservation was successfully modified'] = 'Din bokning &auml;r nu &auml;ndrad';
$strings['Your reservation was successfully deleted'] = 'Din bokning &auml;r nu borttagen';
$strings['Your blackout was successfully created'] = 'Din ej-tillg&auml;nglig tid &auml;r nu skapad';
$strings['Your blackout was successfully modified'] = 'Din ej-tillg&auml;nglig tid &auml;r nu &auml;ndrad';
$strings['Your blackout was successfully deleted'] = 'Din ej-tillg&auml;nglig tid &auml;r nu borttagen';
$strings['for the follwing dates'] = 'f&ouml;ljande datum:';
$strings['Start time must be less than end time'] = 'Starttiden m&aring;ste vara f&ouml;re sluttiden.';
$strings['Current start time is'] = 'Nuvarande starttid &auml;r:';
$strings['Current end time is'] = 'Nuvarnade sluttid &auml;r:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Bokningens l&auml;ngd st&auml;mmer inte med denna resurs till&aring;tna l&auml;ngd.';
$strings['Your reservation is'] = 'Din bokning &auml;r:';
$strings['Minimum reservation length'] = 'Min reservationsl&auml;ngd:';
$strings['Maximum reservation length'] = 'Max reservationsl&auml;ngd:';
$strings['You do not have permission to use this resource.'] = 'Du f&aring;r inte anv&auml;nda denna resurs.';
$strings['reserved or unavailable'] = '%s to %s is reserved or unavailable.';	// @since 1.1.0
$strings['Reservation created for'] = 'Bokning %s skapad';
$strings['Reservation modified for'] = 'Bokning %s &auml;ndrad';
$strings['Reservation deleted for'] = 'Bokning %s borttagen';
$strings['created'] = 'skapad';
$strings['modified'] = '&auml;ndrad';
$strings['deleted'] = 'borttagen';
$strings['Reservation #'] = 'Bokning #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Bokning skapad';
$strings['Reservation modified'] = 'Bokning &auml;ndrad';
$strings['Reservation deleted'] = 'Bokning borttagen';

$strings['Reservations by month'] = 'Bokningar m&aring;nadsvis';
$strings['Reservations by day of the week'] = 'Bokningar veckodagsvis';
$strings['Reservations per month'] = 'Bokningar per m&aring;nad';
$strings['Reservations per user'] = 'Bokningar per anv&auml;ndare';
$strings['Reservations per resource'] = 'Bokningar per resurs';
$strings['Reservations per start time'] = 'Boknngar per starttid';
$strings['Reservations per end time'] = 'Bokningar per sluttid';
$strings['[All Reservations]'] = '[Alla bokningar]';

$strings['Permissions Updated'] = 'R&auml;ttigheter Uppdaterade';
$strings['Your permissions have been updated'] = 'Dina %s r&auml;ttigheter har blivit uppdaterade';
$strings['You now do not have permission to use any resources.'] = 'Du har inte till&aring;telse att anv&auml;nda n&aring;gon resurs';
$strings['You now have permission to use the following resources'] = 'Du har du till&aring;telse att anv&auml;nda f&ouml;ljande resurser:';
$strings['Please contact with any questions.'] = 'kontakta %s med din fr&aring;ga.';
$strings['Password Reset'] = '&Aring;terst&auml;ll l&ouml;senord';

$strings['This will change your password to a new, randomly generated one.'] = 'Detta kommer &auml;ndra ditt l&ouml;senord till ett nytt slumpm&auml;ssigt genererat.';
$strings['your new password will be set'] = 'N&auml;r du skrivit in din epostadress och klickat p&aring; skicka s&aring; kommer det nya l&ouml;senordet mailas till dig.';
$strings['Change Password'] = 'Byt l&ouml;senord';
$strings['Sorry, we could not find that user in the database.'] = 'Anv&auml;ndaren finns inte i databasen.';
$strings['Your New Password'] = 'Ditt nya l&ouml;senord %s ';
$strings['Your new passsword has been emailed to you.'] = 'Ditt nya l&ouml;senord har skickats till dig.<br />'
    			. 'Kolla din mail och <a href="index.php">logga in</a>'
    			. ' med det nya l&ouml;senordet, &auml;ndra det d&auml;refter i din profil om du vill.';

$strings['You are not logged in!'] = 'Du &auml;r inte inloggad!';

$strings['Setup'] = 'Setup';
$strings['Please log into your database'] = 'Logga in till din databas';
$strings['Enter database root username'] = 'Ange databasens root anv&auml;ndare:';
$strings['Enter database root password'] = 'Ange databasens root l&ouml;senord:';
$strings['Login to database'] = 'Logga in till databasen';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Root anv&auml;ndare &auml;r <b>inte</b> n&ouml;dv&auml;ndig. Vilken databasanv&auml;ndare som helst som har r&auml;ttigheter att skapa tabeller &auml;r tillr&auml;cklig.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Detta kommer att skapa n&ouml;dv&auml;ndiga tabeller och databaser f&ouml;r phpScheduleIt.';
$strings['It also populates any required tables.'] = 'Den populerar n&ouml;dv&auml;ndinga tabeller.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'VWarning: DETTA KOMMER ATT RADERA DATA I TIDIGARE phpScheduleIt DATABASER!';
$strings['Not a valid database type in the config.php file.'] = 'Inte en giltig databastyp iconfig.php filen.';
$strings['Database user password is not set in the config.php file.'] = 'Databasens anv&auml;ndar l&ouml;senord &auml;r inte angiven i config.php filen.';
$strings['Database name not set in the config.php file.'] = 'Databasens namn &auml;r inte angiven i config.php filen.';
$strings['Successfully connected as'] = 'Ansluten som';
$strings['Create tables'] = 'Skapa tabeller &gt;';
$strings['There were errors during the install.'] = 'Det blev fel under installationen.Det &auml;r m&ouml;j&ouml;ogt att phpScheduleIt &auml;nd&aring; kommer att fungera om det var mindre allvarliga fel.<br/><br/>'
	. 'Posta g&auml;rna dina fr&aring;gor i forumen p&aring;<a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Du har har slutf&ouml;rt installationene av phpScheduleIt och &auml;r redo att b&ouml;rja anv&auml;nda det.';
$strings['Thank you for using phpScheduleIt'] = 'Kom ih&aring;g att TA BORT \'install\' MAPPEN HELT.'
	. ' Det &auml;r viktigt d&aring; den inneh&aring;ller l&ouml;senord till databasen och annan k&auml;nslig information.'
	. ' G&ouml;r du inte det s&aring; l&auml;mnar du d&ouml;rren vid&ouml;ppen f&ouml;r den som vill bryta sig in i databasene!'
	. '<br /><br />'
	. 'Tack f&ouml;r att du anv&auml;nder phpScheduleIt!';
$strings['This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.'] = 'Detta kommer att uppdatera din version av phpScheduleIt fr&aring;n 0.9.3 till 1.0.0.';
$strings['There is no way to undo this action'] = 'Du kan inte &aring;ngra detta!';
$strings['Click to proceed'] = 'Klicka f&ouml;r att forts&auml;tta';
$strings['This version has already been upgraded to 1.0.0.'] = 'Denna version &auml;r redan uppgraderad till 1.0.0.';
$strings['Please delete this file.'] = 'Radera denna filen.';
$strings['Successful update'] = 'Uppgraderingen har slutf&ouml;rts.';
$strings['Patch completed successfully'] = 'Patchningen slutf&ouml;rd';
$strings['This will populate the required fields for phpScheduleIt 1.0.0 and patch a data bug in 0.9.9.'] = 'Detta kommer att populera n&ouml;dv&auml;ndiga tabeller f&ouml;r phpScheduleIt 1.0.0 och patcha en data bug i 0.9.9.'
		. '<br />Det beh&ouml;vs endast om du gjort en manuell SQL uppdatering e&ouml;&ouml;er uppgraderar fr&aring;n 0.9.9';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Om inget v&auml;rde angetts, s&aring; &auml;r det standardl&ouml;senordet i config.php som kommer att anv&auml;ndas.';
$strings['Notify user that password has been changed?'] = 'Meddela anv&auml;ndare om att l&ouml;senordet &auml;ndrats?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Detta system kr&auml;ver att du har en epost-adress.';
$strings['Invalid User Name/Password.'] = 'Ogiltig anv&auml;ndare namn/l&ouml;senord.';
$strings['Pending User Reservations'] = 'V&auml;ntar p&aring; bokningar';
$strings['Approve'] = 'Godk&auml;nn';
$strings['Approve this reservation'] = 'Godk&auml;nn bokningen';
$strings['Approve Reservations'] ='Godk&auml;nn bokningar';

$strings['Announcement'] = 'Meddelanden';
$strings['Number'] = 'Nummer';
$strings['Add Announcement'] = 'L&auml;gg till meddelande';
$strings['Edit Announcement'] = 'Redigera meddelande';
$strings['All Announcements'] = 'Alla meddelanden';
$strings['Delete Announcements'] = 'Ta bort meddelanden';
$strings['Use start date/time?'] = 'Anv&auml;nd starttid/startdatum?';
$strings['Use end date/time?'] = 'Anv&auml;nd sluttid/slutdatum?';
$strings['Announcement text is required.'] = 'Meddelandetext kr&auml;vs.';
$strings['Announcement number is required.'] = 'Meddelandenummer kr&auml;vs.';

$strings['Pending Approval'] = 'V&auml;ntar p&aring; godk&auml;nnande';
$strings['My reservation is approved'] = 'Min bokning &auml;r godk&auml;nd';
$strings['This reservation must be approved by the administrator.'] = 'Denna bokning m&aring;ste godk&auml;nnas av administrat&ouml;ren';
$strings['Approval Required'] = 'Beh&ouml;ver godk&auml;nnas';
$strings['No reservations requiring approval'] = 'Inga bokningar som beh&ouml;ver godk&auml;nnas';
$strings['Your reservation was successfully approved'] = 'Din bokning godk&auml;ndes';
$strings['Reservation approved for'] = '%s bokning godk&auml;nd ';
$strings['approved'] = 'godk&auml;nd';
$strings['Reservation approved'] = 'Bokning godk&auml;nd';

$strings['Valid username is required'] = 'Giltigt anv&auml;ndarnamn kr&auml;vs';
$strings['That logon name is taken already.'] = 'Namnet &auml;r redan upptaget.';
$strings['this will be your login'] = '(detta blir till login-namn)';
$strings['Logon name'] = 'Login-namn';
$strings['Your logon name is'] = 'Ditt login-namn &auml;r %s';

$strings['Start'] = 'Start';
$strings['End'] = 'Slut';
$strings['Start date must be less than or equal to end date'] = 'Startdatum m&aring;ste vara f&ouml;re eller samma som slutdatum';
$strings['That starting date has already passed'] = 'startdatumet har passerats';
$strings['Basic'] = 'Grundl&auml;ggande';
$strings['Participants'] = 'Deltagare';
$strings['Close'] = 'St&auml;ng';
$strings['Start Date'] = 'Startdatum';
$strings['End Date'] = 'Slutdatum';
$strings['Minimum'] = 'Min';
$strings['Maximum'] = 'Max';
$strings['Allow Multiple Day Reservations'] = 'Till&aring;t flerdagsreservationer';
$strings['Invited Users'] = 'Inbjudna anv&auml;ndare';
$strings['Invite Users'] = 'Bjud in anv&auml;ndare';
$strings['Remove Participants'] = 'Ta bort deltagare';
$strings['Reservation Invitation'] = 'Inbjudningar';
$strings['Manage Invites'] = 'Hantera inbjudningar';
$strings['No invite was selected'] = 'Ingen inbjudning valdes';
$strings['reservation accepted'] = '%s har accepterat din inbjudan p&aring; %s';
$strings['reservation declined'] = '%s har avslagit din inbjudan p&aring; %s';
$strings['Login to manage all of your invitiations'] = 'Logga in f&ouml;r att hantera dina inbjudningar';
$strings['Reservation Participation Change'] = '&Auml;ndra bokningens deltagare';
$strings['My Invitations'] = 'Mina inbjudningar';
$strings['Accept'] = 'Acceptera';
$strings['Decline'] = 'Avsl&aring;';
$strings['Accept or decline this reservation'] = 'Acceptera eller avsl&aring; denna inbjudning';
$strings['My Reservation Participation'] = 'Mina bokningars deltagare';
$strings['End Participation'] = 'Avsluta deltagning';
$strings['Owner'] = '&Auml;gare';
$strings['Particpating Users'] = 'Deltagande anv&auml;ndare';
$strings['No advanced options available'] = 'Inga avancerade inst&auml;llningar tillg&auml;ngliga';
$strings['Confirm reservation participation'] = 'Bekr&auml;fta deltagande av bokning';
$strings['Confirm'] = 'Bekr&auml;fta';
$strings['Do for all reservations in the group?'] = 'F&ouml;r alla bokningar i gruppen?';

$strings['My Calendar'] = 'Min kalender';
$strings['View My Calendar'] = 'Visa min kalender';
$strings['Participant'] = 'Deltagare';
$strings['Recurring'] = '&Aring;terkommande';
$strings['Multiple Day'] = 'Flera dagar';
$strings['[today]'] = '[idag]';
$strings['Day View'] = 'Dag-vy';
$strings['Week View'] = 'Vecko-vy';
$strings['Month View'] = 'M&aring;nads-vy';
$strings['Resource Calendar'] = 'Bokningskalender';
$strings['View Resource Calendar'] = 'Visa bokningskalender';	// @since 1.2.0
$strings['Signup View'] = 'Registreringsvy';

$strings['Select User'] = 'V&auml;lj anv&auml;ndare';
$strings['Change'] = '&Auml;ndra';

$strings['Update'] = 'Uppdatera';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt uppdatering &auml;r endast tillg&auml;ngligt f&ouml;r version 1.0.0 eller senare';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt &Auml;r redan uppdaterad';
$strings['Migrating reservations'] = 'Migrerar bokningar';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'Hantera meddelanden';
$strings['There are no announcements'] = 'Det finns inga meddelanden';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Max deltagarkapacitet';
$strings['Leave blank for unlimited'] = 'L&auml;mna tomt f&ouml;r obegr&auml;nsat';
$strings['Maximum of participants'] = 'Den h&auml;r resursen har makimal kapacitet %s deltagare';
$strings['That reservation is at full capacity.'] = 'Bokningen &auml;r fullbelagd.';
$strings['Allow registered users to join?'] = 'Till&aring;t registrerade anv&auml;ndare att ansluta sig?';
$strings['Allow non-registered users to join?'] = 'Till&aring;t oregistrerade anv&auml;nare att ansluta sig?';
$strings['Join'] = 'Anslut';
$strings['My Participation Options'] = 'Mina deltagaralternativ';
$strings['Join Reservation'] = 'Anslut till bokning';
$strings['Join All Recurring'] = 'Anslut till alla &aring;terkommande';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Du &auml;r inte antagen till f&ouml;ljande bokningsdatum, de &auml;r fulltecknade.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Du &auml;r redan inbjuden till denna bokning. F&ouml;lj deltagandeinstruktionerna i det e-brev som du f&aring;tt.';
$strings['Additional Tools'] = '&Ouml;vriga verktyg';
$strings['Create User'] = '´Skapa anv&auml;ndare';
$strings['Check Availability'] = 'Kolla tillg&auml;nglighet';
$strings['Manage Additional Resources'] = 'Hantera &ouml;vriga resurser';
$strings['All Additional Resources'] = 'Alla &ouml;vriga resurser';
$strings['Number Available'] = 'Antal tillg&auml;ngliga';
$strings['Unlimited'] = 'Obegr&auml;nsad';
$strings['Add Additional Resource'] = 'L&auml;gg till &ouml;vriga resurser';
$strings['Edit Additional Resource'] = 'Redigera &ouml;vriga resurser';
$strings['Checking'] = 'Kontrollerar';
$strings['You did not select anything to delete.'] = 'Valde du ingenting att ta bort.';
$strings['Added Resources'] = 'Lagt till resuser';
$strings['Additional resource is reserved'] = 'Den &ouml;vriga resusrsen %s har bara %s tillg&auml;ngliga &aring;t g&aring;ngen';
$strings['All Groups'] = 'Alla grupper';
$strings['Group Name'] = 'Gruppnamn';
$strings['Delete Groups'] = 'Radera Grupper';
$strings['Manage Groups'] = 'Hantera Grupper';
$strings['None'] = 'Ingen';
$strings['Group name is required.'] = 'Gruppnamn kr&auml;vs.';
$strings['Groups'] = 'Grupper';
$strings['Current Groups'] = 'Aktuella grupper';
$strings['Group Administration'] = 'Gruppadministration';
$strings['Reminder Subject'] = 'Bokningsp&aring;minnelse- %s, %s %s';
$strings['Reminder'] = 'P&aring;minnelse';
$strings['before reservation'] = 'f&ouml;re bokning';
$strings['My Participation'] = 'Mitt deltagande';
$strings['My Past Participation'] = 'Mitt tidigare deltagande';
$strings['Timezone'] = 'Tidzon';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'V&auml;lj bokningar att exportera';
$strings['Export Format'] = 'Exportformat';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Denna resurs kan inte bli bokad med mindre &auml;n %s timmar kvar till start';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Denna resurs kan inte bli bokad med mer &auml;n %s timmar kvar till start';
$strings['Minimum Booking Notice'] = 'Minsta bokningsanteckning';
$strings['Maximum Booking Notice'] = 'St&ouml;rsta bokningsanteckning';
$strings['hours prior to the start time'] = 'timmar kvar till starttiden';
$strings['hours from the current time'] = 'timmar fr&aring;n nu';
$strings['Contains'] = 'Inneh&aring;ller';
$strings['Begins with'] = 'B&ouml;rjar med';
$strings['Minimum booking notice is required.'] = 'Minsta bokningsanteckning kr&auml;vs.';
$strings['Maximum booking notice is required.'] = 'St&ouml;rsta bokningsanteckning kr&auml;vs.';
$strings['Accessory Name'] = 'Tillbeh&ouml;rs namn';
$strings['Accessories'] = 'Tillbeh&ouml;r';
$strings['All Accessories'] = 'Alla Tillbeh&ouml;r';
$strings['Added Accessories'] = 'Tilllagda TIllbeh&ouml;r';
// end since 1.2.0

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
				. "Du har registrerat dig med följande information:\r\n"
				. "Login: %s\r\n"
				. "Namn: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Avdelning: %s \r\n"
				. "Position: %s \r\n\r\n"
				. "Logga in på bokningssystemet här:\r\n"
				. "%s \r\n\r\n"
				. "Du kan hitta länkar till bokningarna eller ändra din profil på startsidan.\r\n\r\n"
				. "Skicka frågor angående bokningar till %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrator,\r\n\r\n"
					. "En ny användare har registreras med följande information:\r\n"
					. "Email: %s \r\n"
					. "Namn: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Avdelning: %s \r\n"
					. "Position: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Du har %s #%s.\r\n\r\n<br/><br/>"
			. "Använd detta nummer om du har frågor till administratören.\r\n\r\n<br/><br/>"
			. "en bokning mellan %s %s och %s %s t %s"
			. " i %s är %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Denna bokning repeteras på följande datum:\r\n<br/>";
$email['reservation_activity_3'] = "Alla återkommande bokningar i den här gruppen var också %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Beskrivning av bokningen:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Om detta är fel, kontakta: %s"
                        . " eller ring %s .\r\n\r\n<br/><br/>"
                        . "Du kan se eller ändra bokningen genom att"
                        . " logga in på %s här:\r\n<br/>"
                        . "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Har du tekniska frågor, kontakta <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Bokning #%s har blivit godkänd.\r\n\r\n<br/><br/>"
			. "Använd detta nummer om du har frågor till administratören.\r\n\r\n<br/><br/>"
			. "en bokning mellan %s %s and %s %s for %s"
			. " i %s är %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Ditt %s lösenord har blivit återställt av administratören.\r\n\r\n"
			. "Ditt tillfälliga löenord är:\r\n\r\n %s\r\n\r\n"
			. "Använd detta lösenord för att logga in  %s at %s"
			. " och ändra de genast 'Ändra min profil' länk bland snabblänkarna.\r\n\r\n"
			. "Kontakta %s om du har några frågor.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Ditt nya lösenord för kontot på bokningssystemet är :\r\n\r\n"
            . "%s\r\n\r\n"
            . "Logga in på %s "
            . "med ditt nya lösenord "
            . "(kopiera och klistra in för att vara säker på att de blir rätt) "
            . "byt sedan till nåtgot annat lösenord genom att klicka på Ändra min profil"
            . "på första sidan.\r\n\r\n"
            . "har du frågor kontakta %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s har blivit inbjuden att delta i följande bokning:\r\n\r\n"
		. "PLats: %s\r\n"
		. "Start Datum: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Datum: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Sammanfattning: %s\r\n"
		. "Återkommande datum (om det finns några): %s\r\n\r\n"
		. "För att acceptera bokningen klicka på följande länk %s\r\n"
		. "För att avslå bokningen klicka på följande länk %s\r\n"
		. "För att acceptera datum eller hantera inbjudningarna senare, logga in på %s här %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Du har blivit borttagen från följande bokning:\r\n\r\n"
		. "Plats: %s\r\n"
		. "Start Datum: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Datum: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Sammanfattning: %s\r\n"
		. "Återkommande datum (om det finns några): %s\r\n\r\n";

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Påminnelse: Bokning till %s från %s %s till %s %s.";
?>
