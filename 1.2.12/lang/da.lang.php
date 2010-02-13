<?php
/**
* Danish (da) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Christian Clausen <christian@clausen.person.dk>
* @version 05-07-06
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
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
$days_full = array('Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag');
// The three letter abbreviation
$days_abbr = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
// The two letter abbreviation
$days_two  = array('Sø;', 'Ma', 'Ti', 'On', 'Ot', 'Fr', 'Lø');
// The one letter abbreviation
$days_letter = array('S', 'M', 'T', 'O', 'T', 'F', 'L');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Januar', 'Februar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'December');
// The three letter month name
$months_abbr = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Æ', 'Ø', 'Å');

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
$strings['hours'] = 'timer';
$strings['minutes'] = 'minuter';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'åååå';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Velkommen Tilbage, %s';
$strings['Log Out'] = 'Log Ud';
$strings['My Control Panel'] = 'Mit Kontrolpanel';
$strings['Help'] = 'Hjælp';
$strings['Manage Schedules'] = 'Administrer Planer';
$strings['Manage Users'] = 'Administrer Brugere';
$strings['Manage Resources'] = 'Administrer Ressourcer';
$strings['Manage User Training'] = 'Administrer Bruger Træning';
$strings['Manage Reservations'] = 'Administrer Reservationer';
$strings['Email Users'] = 'Email Brugere';
$strings['Export Database Data'] = 'Exporter Database Data';
$strings['Reset Password'] = 'Nulstil Kodeord';
$strings['System Administration'] = 'System Administration';
$strings['Successful update'] = 'Successful updatering';
$strings['Update failed!'] = 'Updatering fejlede!';
$strings['Manage Blackout Times'] = 'Administrer Lukketider';
$strings['Forgot Password'] = 'Glemt Kodeord';
$strings['Manage My Email Contacts'] = 'Administrer Mine Email Kontakter';
$strings['Choose Date'] = 'Vælg Dato';
$strings['Modify My Profile'] = 'Ret Min Profil';
$strings['Register'] = 'Registrer';
$strings['Processing Blackout'] = 'Processerer Lukketid';
$strings['Processing Reservation'] = 'Processrer Reservation';
$strings['Online Scheduler [Read-only Mode]'] = 'Online Reservationssystem [Kun Læsbar]';
$strings['Online Scheduler'] = 'Online Reservationssystem';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Statistik';
$strings['User Info'] = 'Bruger Info:';

$strings['Could not determine tool'] = 'Kunne ikke identificere værktøjet. Gå venligst til bage til Mit Kontrolpanel og prøv igen senere.';
$strings['This is only accessable to the administrator'] = 'Dette er kun tilgængeligt for administratoren';
$strings['Back to My Control Panel'] = 'Tilbage til Mit Kontrolpanel';
$strings['That schedule is not available.'] = 'Det skema er ikke tilgængelig.';
$strings['You did not select any schedules to delete.'] = 'Du valge ikke et skema at slette.';
$strings['You did not select any members to delete.'] = 'Du valgte ikke nogen medlemmer at slette.';
$strings['You did not select any resources to delete.'] = 'Du valgte ingen ressourcer at slette.';
$strings['Schedule title is required.'] = 'En overskrift til skemaet er nødvendig.';
$strings['Invalid start/end times'] = 'Ugyldige start/slut tider';
$strings['View days is required'] = 'Vis dage er nødvendig';
$strings['Day offset is required'] = 'Dag offset er nødvendigt';
$strings['Admin email is required'] = 'Admin email nødvendigt';
$strings['Resource name is required.'] = 'Ressource navn er nødvendigt.';
$strings['Valid schedule must be selected'] = 'Et gyldigt skema skal vælges';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Den mindste længde for en reservation skal være mindre end den største.';
$strings['Your request was processed successfully.'] = 'Din forespørgsel blev succesfuldt behandlet.';
$strings['Go back to system administration'] = 'Gå tilbage til systemadministration';
$strings['Or wait to be automatically redirected there.'] = 'Eller vent på at blive dirigeret derhen automatisk.';
$strings['There were problems processing your request.'] = 'Der var problemer med at behandle din forespørgsel.';
$strings['Please go back and correct any errors.'] = 'Gå venligst tilbage og ret eventuelle fejl.';
$strings['Login to view details and place reservations'] = 'Log ind for at se detaljer og lave reservationer';
$strings['Memberid is not available.'] = 'Medlems id: %s er ikke tilgængelig.';

$strings['Schedule Title'] = 'Skematitel';
$strings['Start Time'] = 'Start Tid';
$strings['End Time'] = 'Slut Tid';
$strings['Time Span'] = 'Tidsrum';
$strings['Weekday Start'] = 'Start Ugedag';
$strings['Admin Email'] = 'Admin Email';

$strings['Default'] = 'Standard';
$strings['Reset'] = 'Nulstil';
$strings['Edit'] = 'Rediger';
$strings['Delete'] = 'Slet';
$strings['Cancel'] = 'Annuller';
$strings['View'] = 'Se';
$strings['Modify'] = 'Ret';
$strings['Save'] = 'Gem';
$strings['Back'] = 'Tilbage';
$strings['Next'] = 'Næste';
$strings['Close Window'] = 'Luk Vindue';
$strings['Search'] = 'Søg';
$strings['Clear'] = 'Ryd';

$strings['Days to Show'] = 'Antal Dage';
$strings['Reservation Offset'] = 'Reservations Offset';
$strings['Hidden'] = 'Skjult';
$strings['Show Summary'] = 'Vis Resumé';
$strings['Add Schedule'] = 'Tilføj Skema';
$strings['Edit Schedule'] = 'Rediger Skema';
$strings['No'] = 'Nej';
$strings['Yes'] = 'Ja';
$strings['Name'] = 'Navn';
$strings['First Name'] = 'Fornavn';
$strings['Last Name'] = 'Efternavn';
$strings['Resource Name'] = 'Ressource Navn';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Institution';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Kodeord';
$strings['Permissions'] = 'Tilladelser';
$strings['View information about'] = 'Se information om %s %s';
$strings['Send email to'] = 'Send email til %s %s';
$strings['Reset password for'] = 'Nulstil Kodeord for %s %s';
$strings['Reset Password for'] = 'Nulstil Kodeord for %s';
$strings['Edit permissions for'] = 'Rediger tilladelser for %s %s';
$strings['Position'] = 'Stilling';
$strings['Password (6 char min)'] = 'Kodeord (mindst %s tegn)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Indtast Kodeord Igen';

$strings['Sort by descending last name'] = 'Sorter efter faldende efternavn';
$strings['Sort by descending email address'] = 'Sorter efter faldende email-adresse';
$strings['Sort by descending institution'] = 'Sorter efter faldende institution';
$strings['Sort by ascending last name'] = 'Sorter efter stigende efternavn';
$strings['Sort by ascending email address'] = 'Sorter efter stigende email-adresse';
$strings['Sort by ascending institution'] = 'Sorter efter stigende institution';
$strings['Sort by descending resource name'] = 'Sorter efter faldende navn på ressource';
$strings['Sort by descending location'] = 'Sorter efter faldende sted';
$strings['Sort by descending schedule title'] = 'Sorter efter faldende titel på skema';
$strings['Sort by ascending resource name'] = 'Sorter efter stigende navn på ressource';
$strings['Sort by ascending location'] = 'Sorter efter stigende sted';
$strings['Sort by ascending schedule title'] = 'Sorter efter stigende titel på skema';
$strings['Sort by descending date'] = 'Sorter efter faldende dato';
$strings['Sort by descending user name'] = 'Sorter efter faldende brugernavn';
$strings['Sort by descending start time'] = 'Sorter efter faldende starttid';
$strings['Sort by descending end time'] = 'Sorter efter faldende sluttid';
$strings['Sort by ascending date'] = 'Sorter efter stigende dato';
$strings['Sort by ascending user name'] = 'Sorter efter stigende brugernavn';
$strings['Sort by ascending start time'] = 'Sorter efter stigende starttid';
$strings['Sort by ascending end time'] = 'Sorter efter stigende sluttid';
$strings['Sort by descending created time'] = 'Sorter efter faldende tidspunkt for oprettelse';
$strings['Sort by ascending created time'] = 'Sorter efter stigende tidspunkt for oprettelse';
$strings['Sort by descending last modified time'] = 'Sorter efter faldende tidspunkt for seneste ændring';
$strings['Sort by ascending last modified time'] = 'Sorter efter stigende tidspunkt for seneste ændring';

$strings['Search Users'] = 'Søg Efter Brugere';
$strings['Location'] = 'Sted';
$strings['Schedule'] = 'Skema';
$strings['Notes'] = 'Noter';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Alle Skemaer';
$strings['All Resources'] = 'Alle Ressourcer';
$strings['All Users'] = 'Alle Brugere';

$strings['Edit data for'] = 'Rediger data for %s';
$strings['Active'] = 'Aktiv';
$strings['Inactive'] = 'Inaktiv';
$strings['Toggle this resource active/inactive'] = 'Skift denne ressource activ/inactiv';
$strings['Minimum Reservation Time'] = 'Mindste Reservations Tid';
$strings['Maximum Reservation Time'] = 'Længste Reservations Tid';
$strings['Auto-assign permission'] = 'Tildel tilladelser automatisk';
$strings['Add Resource'] = 'Tilføj Ressource';
$strings['Edit Resource'] = 'Rediger Resource';
$strings['Allowed'] = 'Tilladt';
$strings['Notify user'] = 'Giv bruger besked';
$strings['User Reservations'] = 'Bruger Reservationer';
$strings['Date'] = 'Dato';
$strings['User'] = 'Bruger';
$strings['Subject'] = 'Emne';
$strings['Message'] = 'Besked';
$strings['Please select users'] = 'Vælg venligst brugere';
$strings['Send Email'] = 'Send Email';
$strings['problem sending email'] = 'Desværre, der var problemer med at sende din email. Prøv igen senere.';
$strings['The email sent successfully.'] = 'Emailen blev sendt.';
$strings['do not refresh page'] = 'Opdater <u>ikke</u> denne side. Din email vil blive sendt igen.';
$strings['Return to email management'] = 'Tilbage til email administration';
$strings['Please select which tables and fields to export'] = 'Vælg venligst hvilke tabeller og felter der skal eksporteres.:';
$strings['all fields'] = '- alle felter -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Almindelig tekst';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Eksporter Data';
$strings['Please edit your profile'] = 'Ret venligst din profil';
$strings['Please register'] = 'Registrer dig venligst';
$strings['Keep me logged in'] = 'Forbliv logget ind <br/>(kræver cookies)';
$strings['Edit Profile'] = 'Ret Profil';
$strings['Please Log In'] = 'Log venligst ind';
$strings['Email address'] = 'Email adresse';
$strings['First time user'] = 'Ny bruger?';
$strings['Click here to register'] = 'Klik her for at registrere dig';
$strings['Register for phpScheduleIt'] = 'Registrer til phpScheduleIt';
$strings['Log In'] = 'Log Ind';
$strings['View Schedule'] = 'Se Skema';
$strings['View schedule'] = 'Se skema:';
$strings['View a read-only version of the schedule'] = 'Se en version af skemaet der kun kan læses';
$strings['I Forgot My Password'] = 'Jeg Har Glemt Mit Kodeord';
$strings['Retreive lost password'] = 'Hent mistet kodeord';
$strings['Get online help'] = 'Få online hjælp';
$strings['Language'] = 'Sprog';
$strings['(Default)'] = '(Standard)';

$strings['My Announcements'] = 'Mine Meddelelser';
$strings['My Reservations'] = 'Mine Reservationer';
$strings['My Permissions'] = 'Mine Tilladelser';
$strings['My Quick Links'] = 'Mine Genveje';
$strings['Announcements as of'] = 'Meddelelser per %s';
$strings['There are no announcements.'] = 'Der er ingen meddelelser.';
$strings['Resource'] = 'Ressource';
$strings['Created'] = 'Oprettet';
$strings['Last Modified'] = 'Senest Ændret';
$strings['View this reservation'] = 'Se denne reservation';
$strings['Modify this reservation'] = 'Ret denne reservation';
$strings['Delete this reservation'] = 'Slet denne reservation';
$strings['Bookings'] = 'Reservationer';	// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Ret Profil'; // @since 1.2.0
$strings['Manage My Email Preferences'] = 'Email Preferencer';	// @since 1.2.0
$strings['Mass Email Users'] = 'Rundsend';
$strings['Search Scheduled Resource Usage'] = 'Søg Reservationer'; // @since 1.2.0
$strings['Export Database Content'] = 'Exporter Database Indhold';
$strings['View System Stats'] = 'Se Systemstatistik';
$strings['Email Administrator'] = 'Email Administrator';

$strings['Email me when'] = 'Send mig en email når:';
$strings['I place a reservation'] = 'Jeg laver en reservation';
$strings['My reservation is modified'] = 'Min reservation er ændret';
$strings['My reservation is deleted'] = 'Min reservation er slettet';
$strings['I prefer'] = 'Jeg foretrækker:';
$strings['Your email preferences were successfully saved'] = 'Dine email preferencer blev gemt!';
$strings['Return to My Control Panel'] = 'Returner til Mit Kontrolpanel';

$strings['Please select the starting and ending times'] = 'Vælg venligst start og slut tidspunkter:';
$strings['Please change the starting and ending times'] = 'Ret venligst start og slut tidspunkter:';
$strings['Reserved time'] = 'Reserveret tid:';
$strings['Minimum Reservation Length'] = 'Minimum Reservations Længde:';
$strings['Maximum Reservation Length'] = 'Maksimal Reservations Længde:';
$strings['Reserved for'] = 'Reserveret af:';
$strings['Will be reserved for'] = 'Vil være reserveret af:';
$strings['N/A'] = ' - ';
$strings['Update all recurring records in group'] = 'Opdater alle gentagne poster i gruppen?';
$strings['Delete?'] = 'Slet?';
$strings['Never'] = '-- Aldrig --';
$strings['Days'] = 'Dag';
$strings['Weeks'] = 'Uge';
$strings['Months (date)'] = 'Måned (dato)';
$strings['Months (day)'] = 'Måned (dag)';
$strings['First Days'] = 'Første Dag';
$strings['Second Days'] = 'Anden Dag';
$strings['Third Days'] = 'Tredje Dag';
$strings['Fourth Days'] = 'Fjerde Dag';
$strings['Last Days'] = 'Sidste Dag';
$strings['Repeat every'] = 'Gentag hver:';
$strings['Repeat on'] = 'Gengag på:';
$strings['Repeat until date'] = 'Gentag indtil dato:';
$strings['Summary'] = 'Resumé';

$strings['My Past Reservations'] = 'Mine Tidligere Reservationer';
$strings['Other Reservations'] = 'Andre Reservationer';
$strings['Other Past Reservations'] = 'Andre Tidligere Reservationer';
$strings['Blacked Out Time'] = 'Lukket Tid';
$strings['Set blackout times'] = 'Sæt lukketider for %s på %s'; 
$strings['Reserve on'] = 'Reserver %s på %s';
$strings['Prev Week'] = '&laquo; Foregående Uge';
$strings['Jump 1 week back'] = 'Gå 1 uge tilbage';
$strings['Prev days'] = '&#8249; Foreg. %d dage';
$strings['Previous days'] = '&#8249; Foregående %d dage';
$strings['This Week'] = 'Denne Uge';
$strings['Jump to this week'] = 'Gå til denne uge';
$strings['Next days'] = 'Næste %d dage &#8250;';
$strings['Next Week'] = 'Næste Uge &raquo;';
$strings['Jump To Date'] = 'Gå Til Dato';
$strings['View Monthly Calendar'] = 'Se Månedlig Kalender';
$strings['Open up a navigational calendar'] = 'Åben en navigationskalender';

$strings['View stats for schedule'] = 'Se statistik for plan:';
$strings['At A Glance'] = 'Med Et Hurtigt Blik';
$strings['Total Users'] = 'Brugere Ialt:';
$strings['Total Resources'] = 'Ressourcer Ialt:';
$strings['Total Reservations'] = 'Reservationer Ialt:';
$strings['Max Reservation'] = 'Max Reservation:';
$strings['Min Reservation'] = 'Min Reservation:';
$strings['Avg Reservation'] = 'Middel Reservation:';
$strings['Most Active Resource'] = 'Mest Aktive Ressource:';
$strings['Most Active User'] = 'Mest Aktive Bruger:';
$strings['System Stats'] = 'System Statistik';
$strings['phpScheduleIt version'] = 'phpScheduleIt version:';
$strings['Database backend'] = 'Database backend:';
$strings['Database name'] = 'Database navn:';
$strings['PHP version'] = 'PHP version:';
$strings['Server OS'] = 'Server OS:';
$strings['Server name'] = 'Server navn:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt rodbibliotek:';
$strings['Using permissions'] = 'Anvender tilladelser:';
$strings['Using logging'] = 'Anvender logning:';
$strings['Log file'] = 'Log fil:';
$strings['Admin email address'] = 'Admin email adresse:';
$strings['Tech email address'] = 'Teknisk email adresse:';
$strings['CC email addresses'] = 'CC email adresser:';
$strings['Reservation start time'] = 'Reservation start tid:';
$strings['Reservation end time'] = 'Reservation slut tid:';
$strings['Days shown at a time'] = 'Dage vist af gangen:';
$strings['Reservations'] = 'Reservationer';
$strings['Return to top'] = 'Tilbage til toppen';
$strings['for'] = 'for';

$strings['Select Search Criteria'] = 'Vælg Søgekriterier';
$strings['Schedules'] = 'Skemaer:';
$strings['Hold CTRL to select multiple'] = 'Hold CTRL nede for at vælge flere';
$strings['Users'] = 'Brugere:';
$strings['Resources'] = 'Ressourcer';		// @since 1.2.0
$strings['Starting Date'] = 'Start Dato:';
$strings['Ending Date'] = 'Slut Dato:';
$strings['Starting Time'] = 'Start Tid:';
$strings['Ending Time'] = 'Slut Tid:';
$strings['Output Type'] = 'Restulat Type:';
$strings['Manage'] = 'Administrer';
$strings['Total Time'] = 'Total Tid';
$strings['Total hours'] = 'Total timer:';
$strings['% of total resource time'] = '% af samlet ressource tid';
$strings['View these results as'] = 'Se disse resultater som:';
$strings['Edit this reservation'] = 'Ret denne reservation';
$strings['Search Results'] = 'Søgeresultater';
$strings['Search Resource Usage'] = 'Søg Ressource Brug';
$strings['Search Results found'] = 'Søgeresultater: %d reservationer fundet';
$strings['Try a different search'] = 'Prøv en anden søgning';
$strings['Search Run On'] = 'Søgning Kørt På:';
$strings['Member ID'] = 'Medlems ID';
$strings['Previous User'] = '&laquo; Foregående Bruger';
$strings['Next User'] = 'Næste Bruger &raquo;';

$strings['No results'] = 'Ingen resultater';
$strings['That record could not be found.'] = 'Den post kunne ikke findes.';
$strings['This blackout is not recurring.'] = 'Dette er ikke en tilbagevendende lukning.';
$strings['This reservation is not recurring.'] = 'Dette er ikke en tilbagevendende reservation.';
$strings['There are no records in the table.'] = 'Der ingen poster i %s tabellen.';
$strings['You do not have any reservations scheduled.'] = 'Du har ingen planlagte reservationer.';
$strings['You do not have permission to use any resources.'] = 'Du har ikke tilladelse til at bruge nogen ressourcer.';
$strings['No resources in the database.'] = 'Ingen ressourcer i databasen.';
$strings['There was an error executing your query'] = 'Der var en fejl i udførelsen af din forespørsel:';

$strings['That cookie seems to be invalid'] = 'Den cookie ser ud til at være ugyldig';
$strings['We could not find that logon in our database.'] = 'Vi kunne ikke finde dette logon i vores database.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Det kodeord passede ikke med det i vores database.';
$strings['You can try'] = '<br />Du kan prøve:<br />At registrere en email adresse.<br />Eller:<br />At logge ind igen.';
$strings['A new user has been added'] = 'En ny bruger blev oprettet';
$strings['You have successfully registered'] = 'Din registrering lykkedes!';
$strings['Continue'] = 'Fortsæt...';
$strings['Your profile has been successfully updated!'] = 'Det lykkedes at opdatere din profil!';
$strings['Please return to My Control Panel'] = 'Vend venligst tilbage til Mit Kontrolpanel';
$strings['Valid email address is required.'] = '- En gyldig email adresse er påkrævet.';
$strings['First name is required.'] = '- Fornavn er påkrævet.';
$strings['Last name is required.'] = '- Efternavn er påkrævet.';
$strings['Phone number is required.'] = '- Telefonnummer er påkrævet.';
$strings['That email is taken already.'] = '- Den email adresse er allerede brugt.<br />Prøv venlist igen med en anden email adresse.';
$strings['Min 6 character password is required.'] = '- Mindst %s tegn er påkrævet i kodeordet.';
$strings['Passwords do not match.'] = '- Kodeordene er ikke ens.';

$strings['Per page'] = 'Per side:';
$strings['Page'] = 'Side:';

$strings['Your reservation was successfully created'] = 'Din reservation sucessfuldt oprettet';
$strings['Your reservation was successfully modified'] = 'Din reservation sucessfuldt rettet';
$strings['Your reservation was successfully deleted'] = 'Din reservation sucessfuldt slettet';
$strings['Your blackout was successfully created'] = 'Din lukning sucessfuldt oprettet';
$strings['Your blackout was successfully modified'] = 'Din lukning sucessfuldt rettet';
$strings['Your blackout was successfully deleted'] = 'Din lukning sucessfuldt slettet';
$strings['for the follwing dates'] = 'for de følgende dage:';
$strings['Start time must be less than end time'] = 'Start tid skal være før slut tid.';
$strings['Current start time is'] = 'Nuværende start tid er:';
$strings['Current end time is'] = 'Nuværende slut tid er:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Reservationens længde er ikke gyldig for denne ressource.';
$strings['Your reservation is'] = 'Din reservation er:';
$strings['Minimum reservation length'] = 'Mindste længde for reservationer:';
$strings['Maximum reservation length'] = 'Største længde for reservationer:';
$strings['You do not have permission to use this resource.'] = 'Du har ikke tilladelse til at bruge denne ressource.';
$strings['reserved or unavailable'] = '%s til %s er reserveret eller utilgængelig.';	// @since 1.1.0
$strings['Reservation created for'] = 'Reservation oprettet for %s';
$strings['Reservation modified for'] = 'Reservation rettet for %s';
$strings['Reservation deleted for'] = 'Reservation slettet for %s';
$strings['created'] = 'oprettet';
$strings['modified'] = 'rettet';
$strings['deleted'] = 'slettet';
$strings['Reservation #'] = 'Reservation #';
$strings['Contact'] = 'kontakt';
$strings['Reservation created'] = 'Reservation oprettet';
$strings['Reservation modified'] = 'Reservation rettet';
$strings['Reservation deleted'] = 'Reservation slettet';

$strings['Reservations by month'] = 'Reservationer efter måned';
$strings['Reservations by day of the week'] = 'Reservationer efter ugedag';
$strings['Reservations per month'] = 'Reservationer per måned';
$strings['Reservations per user'] = 'Reservationer per bruger';
$strings['Reservations per resource'] = 'Reservationer per ressource';
$strings['Reservations per start time'] = 'Reservationer per start tid';
$strings['Reservations per end time'] = 'Reservationer per slut tid';
$strings['[All Reservations]'] = '[Alle Reservationer]';

$strings['Permissions Updated'] = 'Tilladelser Opdateret';
$strings['Your permissions have been updated'] = 'Dine %s tilladelser er blevet opdateret';
$strings['You now do not have permission to use any resources.'] = 'Du har ikke tilladelse til at bruge nogen ressource';
$strings['You now have permission to use the following resources'] = 'Du har nu tilladelse til at bruge følgende ressourcer:';
$strings['Please contact with any questions.'] = 'Kontakt venligst %s hvis du har spørgsmål.';
$strings['Password Reset'] = 'Nulstil Kodeord';

$strings['This will change your password to a new, randomly generated one.'] = 'Dette vil ændre dit kodeord til et nyt tilfældigt generet.';
$strings['your new password will be set'] = 'Efter du har indtastet din email adresse og klikket "Skift Kodeord", vil dit nye kodeord blive sat i sytemet og sendt til dig.';
$strings['Change Password'] = 'Skift Kodeord';
$strings['Sorry, we could not find that user in the database.'] = 'Undskyld, vi kunde ikke finde den bruger i vores database.';
$strings['Your New Password'] = 'Dit Nye %s Kodeord';
$strings['Your new passsword has been emailed to you.'] = 'Tillykke!<br />'
    			. 'Dit nye kodeord er blevet sendt til dig.<br />'
    			. 'Check venligst din imail, og <a href="index.php">Log Ind</a>'
    			. ' med dette nye kodeord og skift det straks ved at klikke &quot;Rediger Min Profil Information&quot;'
    			. ' i Mit Kontrolpanel.';

$strings['You are not logged in!'] = 'Du er ikke logget ind!';

$strings['Setup'] = 'Setup';
$strings['Please log into your database'] = 'Log venligst ind på din database';
$strings['Enter database root username'] = 'Indtast database rod brugernavn:';
$strings['Enter database root password'] = 'Indtast database rod kodeord:';
$strings['Login to database'] = 'Log ind på databasen';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'Rod-bruger er <b>ikke</b> påkrævet. Alle database-brugere, der har tilladelse til at oprette tabeller er acceptable.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Dette vil sætte alle de nødvendige databaser og tabeller for phpScheduleIt op.';
$strings['It also populates any required tables.'] = 'Det udfylder også alle nødvendige tabeller.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Advarsel: DETTE VIL SLETTE ALLE DATA I TIDLIGERE phpScheduleIt DATABASER!';
$strings['Not a valid database type in the config.php file.'] = 'Ikke en gyldig database type i config.php filen.';
$strings['Database user password is not set in the config.php file.'] = 'Database bruger-kodeord er ikke sat i config.php filen.';
$strings['Database name not set in the config.php file.'] = 'Database-navn er ikke sat i config.php filen.';
$strings['Successfully connected as'] = 'Successfuldt forbundet som';
$strings['Create tables'] = 'Opret tabeller &gt;';
$strings['There were errors during the install.'] = 'Der var fejl under installationen. Det er muligt at phpScheduleIt stadig vil virke, hvis fejlene var mindre.<br/><br/>'
	. 'Stil eventuelle spørsmål i foraerne hos <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Det er lykkedes dig at sætte phpScheduleIt op og du er nu klar til at begynde at bruge det.';
$strings['Thank you for using phpScheduleIt'] = 'Sørg for at FJERNE \'install\' MAPPEN FULDSTÆNDIG.'
	. ' Dette er kritisk, da det indeholder database kodeord og anden følsom information.'
	. ' Undlader du det vil alle kunne bryde ind i dine database!'
	. '<br /><br />'
	. 'Tak fordi du bruger phpScheduleIt!';
$strings['There is no way to undo this action'] = 'Der er ingen måde at fortryde denne handling!';
$strings['Click to proceed'] = 'Klik for at fortsætts';
$strings['Please delete this file.'] = 'Slet venligst denne fil.';
$strings['Patch completed successfully'] = 'Opdateringen lykkedes';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Hvis ingen værdi specificeres, bruges standard-kodeordet fra konfigurationsfilen.';
$strings['Notify user that password has been changed?'] = 'Giv brugeren besked om at det kodeord er blevet ændret?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Dette system kræver at du har en email-adresse.';
$strings['Invalid User Name/Password.'] = 'Ugyldigt Brugernavn/Kodeord.';
$strings['Pending User Reservations'] = 'Ventende Bruger-Reservationer';
$strings['Approve'] = 'Godkend';
$strings['Approve this reservation'] = 'Godkend denne reservation';
$strings['Approve Reservations'] ='Godkend Reservationer';

$strings['Announcement'] = 'Meddelelser';
$strings['Number'] = 'Nummer';
$strings['Add Announcement'] = 'Tilføj Meddelelse';
$strings['Edit Announcement'] = 'Rediger Meddelelse';
$strings['All Announcements'] = 'Alle Meddelelser';
$strings['Delete Announcements'] = 'Slet Meddelelser';
$strings['Use start date/time?'] = 'Brug start dato/tid?';
$strings['Use end date/time?'] = 'Brug slut dato/tid?';
$strings['Announcement text is required.'] = 'Meddelelsestekst er påkrævet.';
$strings['Announcement number is required.'] = 'Meddelelsesnummer er påkrævet.';

$strings['Pending Approval'] = 'Afventer Godkendelser';
$strings['My reservation is approved'] = 'Min reservation er godkendt';
$strings['This reservation must be approved by the administrator.'] = 'Denne reservation skal godkendes af administratoren.';
$strings['Approval Required'] = 'Godkendelse Påkrævet';
$strings['No reservations requiring approval'] = 'Ingen reservationer kræver godkendelse';
$strings['Your reservation was successfully approved'] = 'Din reservation blev succesfuldt godkendt';
$strings['Reservation approved for'] = 'Reservation godkendt for %s';
$strings['approved'] = 'godkendt';
$strings['Reservation approved'] = 'Reservation godkendt';

$strings['Valid username is required'] = 'Gyldigt brugernavn er påkrævet';
$strings['That logon name is taken already.'] = 'Det brugernavn er allerede taget.';
$strings['this will be your login'] = '(dette vil blive dit brugernavn)';
$strings['Logon name'] = 'Brugernavn';
$strings['Your logon name is'] = 'Dig brugernavn er %s';

$strings['Start'] = 'Start';
$strings['End'] = 'Slut';
$strings['Start date must be less than or equal to end date'] = 'Begyndelses dato skal være før eller samme som slut dato';
$strings['That starting date has already passed'] = 'Den start dato har allerede været';
$strings['Basic'] = 'Grundlæggende';
$strings['Participants'] = 'Deltagere';
$strings['Close'] = 'Luk';
$strings['Start Date'] = 'Start Dato';
$strings['End Date'] = 'Slut Dato';
$strings['Minimum'] = 'Minimum';
$strings['Maximum'] = 'Maksimum';
$strings['Allow Multiple Day Reservations'] = 'Tillad Flerdags Reservationer';
$strings['Invited Users'] = 'Inviterede Brugere';
$strings['Invite Users'] = 'Inviter Brugere';
$strings['Remove Participants'] = 'Fjern Deltagere';
$strings['Reservation Invitation'] = 'Reservations Invitation';
$strings['Manage Invites'] = 'Administer Invitationer';
$strings['No invite was selected'] = 'Ingen invitation var valgt';
$strings['reservation accepted'] = '%s Accepteret Din Invitation den %s';
$strings['reservation declined'] = '%s Afvist Din Invitation den %s';
$strings['Login to manage all of your invitiations'] = 'Log ind for at administrere alle dine invitationer';
$strings['Reservation Participation Change'] = 'Reservations Deltagelses Ændring';
$strings['My Invitations'] = 'Mine Invitationer';
$strings['Accept'] = 'Accepter';
$strings['Decline'] = 'Afvis';
$strings['Accept or decline this reservation'] = 'Accepter eller afvis denne reservation';
$strings['My Reservation Participation'] = 'Mine Deltagelser';
$strings['End Participation'] = 'Afslut Deltagelse';
$strings['Owner'] = 'Ejer';
$strings['Particpating Users'] = 'Deltagende Brugere';
$strings['No advanced options available'] = 'Ingen avancerede muligheder tilgængelige';
$strings['Confirm reservation participation'] = 'Bekræft deltagelse';
$strings['Confirm'] = 'Bekræft';
$strings['Do for all reservations in the group?'] = 'Gør det for alle alle reservationer i gruppen?';

$strings['My Calendar'] = 'Min Kalender';
$strings['View My Calendar'] = 'Se Min Kalender';
$strings['Participant'] = 'Deltager';
$strings['Recurring'] = 'Gentagen';
$strings['Multiple Day'] = 'Flerdags';
$strings['[today]'] = '[idag]';
$strings['Day View'] = 'Dag Visning';
$strings['Week View'] = 'Uge Visning';
$strings['Month View'] = 'Måneds Visning';
$strings['Resource Calendar'] = 'Ressource Kalendar';
$strings['View Resource Calendar'] = 'Skema Calendar';	// @since 1.2.0
$strings['Signup View'] = 'Opskrivnings Visning';

$strings['Select User'] = 'Vælg Bruger';
$strings['Change'] = 'Skift';

$strings['Update'] = 'Opdater';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt Opdatering er kun tilgængelig for version 1.0.0 og senere';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt er allerede opdateret';
$strings['Migrating reservations'] = 'Flytter reservationer';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'Administrer Meddelelser';
$strings['There are no announcements'] = 'Der er ingen meddelelser';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maksimalt Antal Deltagere';
$strings['Leave blank for unlimited'] = 'Blank for ubegrænset';
$strings['Maximum of participants'] = 'Denne resource har en kapacitet på %s deltagere';
$strings['That reservation is at full capacity.'] = 'Denne reservation er fyldt op.';
$strings['Allow registered users to join?'] = 'Lad registerede brugere at melde sig til?';
$strings['Allow non-registered users to join?'] = 'Lad uregisterede brugere at melde sig til?';
$strings['Join'] = 'Meld Til';
$strings['My Participation Options'] = 'Mine Deltagelses Muligheder';
$strings['Join Reservation'] = 'Meld Til Reservation';
$strings['Join All Recurring'] = 'Meld Til Alle Gentagelser';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Du deltager ikke på de følgende reservations datoer, fordi de allerede er fyldt op.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Du er allered inviteret til denne restervation. Følg venligst instruktionerne i den email du har fået tilsendt.';
$strings['Additional Tools'] = 'Yderligere Værktøjer';
$strings['Create User'] = 'Opret Bruger';
$strings['Check Availability'] = 'Tjek Tilgængelighed';
$strings['Manage Additional Resources'] = 'Administrer Tilbehør';
$strings['Number Available'] = 'Antal Tilgæntelig';
$strings['Unlimited'] = 'Ubegrænset';
$strings['Add Additional Resource'] = 'Tilføj Tilbehør';
$strings['Edit Additional Resource'] = 'Rediger Tilbehør';
$strings['Checking'] = 'Tjekker';
$strings['You did not select anything to delete.'] = 'Du har ikke valgt noget at slette.';
$strings['Added Resources'] = 'Tilføjede Ressourcer';
$strings['Additional resource is reserved'] = 'Den yderligere ressource %s har kun %s tilgængelige ad gangen';
$strings['All Groups'] = 'Alle Grupper';
$strings['Group Name'] = 'Gruppe Navn';
$strings['Delete Groups'] = 'Slet Grupper';
$strings['Manage Groups'] = 'Administrer Grupper';
$strings['None'] = 'Ingen';
$strings['Group name is required.'] = 'Gruppe navn er nødvendig.';
$strings['Groups'] = 'Grupper';
$strings['Current Groups'] = 'Nuværende Grupper';
$strings['Group Administration'] = 'Gruppe Administration';

$strings['Reminder Subject'] = 'Påmindelse om reservation- %s, %s %s';
$strings['Reminder'] = 'Påmindelse';
$strings['before reservation'] = 'før reservation';
$strings['My Participation'] = 'Min Deltagelse';
$strings['My Past Participation'] = 'Min Tidligere Deltagelse';
$strings['Timezone'] = 'Tidszone';
$strings['Export'] = 'Eksporter';
$strings['Select reservations to export'] = 'Vælg reservationer at eksportere';
$strings['Export Format'] = 'Eksport Format';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Denne ressource kan ikke reserveres mindre den %s timer på forhånd';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Denne ressource kan ikke reserveres mere den %s timer på forhånd';
$strings['Minimum Booking Notice'] = 'Mindste Varsel';
$strings['Maximum Booking Notice'] = 'Højeste Varsel';
$strings['hours prior to the start time'] = 'timer før start tid';
$strings['hours from the current time'] = 'timer fra nu';
$strings['Contains'] = 'Indeholder';
$strings['Begins with'] = 'Begynder med';
$strings['Minimum booking notice is required.'] = 'Mindste varsel er nødvendigt.';
$strings['Maximum booking notice is required.'] = 'Højeste varsel er nødvendigt.';
$strings['Accessory Name'] = 'Tilbehørsnavn';
$strings['Accessories'] = 'Tilbehør';
$strings['All Accessories'] = 'Alt Tilbehør';
$strings['Added Accessories'] = 'Tilføjet Tilbehør';
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
                   . "Du er blevet registreret med følgende informatin:\r\n"
				. "Login: %s\r\n"
				. "Navn: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Institution: %s \r\n"
				. "Stilling: %s \r\n\r\n"
				. "Log venligst ind på reservationssystemet her:\r\n"
				. "%s \r\n\r\n"
				. "Du kan finde henvisninger til online reservationssystemet og redigere din profil i Mit Kontrolpanel.\r\n\r\n"
				. "Ret venligst ressource eller reservationsrelaterede spørgsmål til %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrator,\r\n\r\n"
					. "En ny bruger er blevet registreret med følgende informationer:\r\n"
					. "Email: %s \r\n"
					. "Navn: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Institution: %s \r\n"
					. "Stilling: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Du har successfuldt %s reservation #%s.\r\n\r\n<br/><br/>"
			. "Brug venligst dette reservationsnummer hvis du kontakter"
                        . "administratoren med eventuelle spørgsmål.\r\n\r\n<br/><br/>"
			. "En reservation mellem %s %s og %s %s af %s"
			. " placeret i %s er blevet %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Denne reservation er blevet gentaget på de følgende datoer:\r\n<br/>";
$email['reservation_activity_3'] = "Alle gentagne reservitioner i denne gruppe blev også %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Det følgende resume blev giget for denne reservation:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Hvis dette er en fejl, kontakt venligst administratoren på: %s"
			. " eller ved at ringe %s.\r\n\r\n<br/><br/>"
			. "Du kan til ethvert tidspunkt se eller rette din reservation ved at"
			. " logge ind på %s:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Ret venligs alle tekniske spørgsmål til <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Reservation #%s er blevet godkendt.\r\n\r\n<br/><br/>"
			. "Brug venligst dette reservationsnummer hvis du kontakter"
                        . "administratoren med eventuelle spørgsmål.\r\n\r\n<br/><br/>"
			. "En reservation mellem %s %s og %s %s af %s"
			. " placeret %s er blevet %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Dit %s kodeord er blevet nulstillet af administratoren.\r\n\r\n"
			. "Dit midlertidige kodeord er:\r\n\r\n %s\r\n\r\n"
			. "Brug venligst dette midlertidige kodeord (kopier og indsæt for at være sikker på at det er rigtigt) til at logge ind på %s ved %s"
			. " og ændr det omgående ved at bruge 'Ret Profil' i Mine Genveje.\r\n\r\n"
			. "Kontakt venligst %s med eventueller spørgsmål.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Dit nye kodeord for din %s konto er:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Log venligst in på %s "
            . "med dette nye kodeord "
            . "(kopier og indsæt for at være sikker på at det er rigtigt) "
            . "og ændr det omgående ved at brute "
            . "Ret Profil i Mit Kontrolpanel.\r\n\r\n"
            . "Ret venligst eventuelle spørgsmål til %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s har inviteret dig til at deltage i den følgende reservation:\r\n\r\n"
		. "Resource: %s\r\n"
		. "Start Dato: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Dato: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Resué: %s\r\n"
		. "Gentagne Datoer (hvis tilgængeligt): %s\r\n\r\n"
		. "For at acceptere invitationen klick dette link (kopier og indsæt hvis det ikke er fremhævet) %s\r\n"
		. "For at afvise invitationen klick dette link (kopier og indsæt hvis det ikke er fremhævet) %s\r\n"
		. "For at acceptere udvalgte datoer og administrere dine invitationer log venligst ind på %s på %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Du er blevet fjernet følgende reservation:\r\n\r\n"
		. "Resource: %s\r\n"
		. "Start Dato: %s\r\n"
		. "Start Tid: %s\r\n"
		. "Slut Dato: %s\r\n"
		. "Slut Tid: %s\r\n"
		. "Resumé: %s\r\n"
		. "Gentagne Datoer (hvis tilgængeligt): %s\r\n\r\n";
		
// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Din reservation af %s fra %s %s til %s %s nærmer sig.";
?>