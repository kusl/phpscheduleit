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
$days_full = array('Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag');
// The three letter abbreviation
$days_abbr = array('Sön', 'Mån', 'Tis', 'Ons', 'Tor', 'Fre', 'Lör');
// The two letter abbreviation
$days_two  = array('Sö', 'Må', 'Ti', 'On', 'To', 'Fr', 'Lö');
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

$strings['Administrator'] = 'Administratör';
$strings['Welcome Back'] = 'Välkommen tillbaka, %s';
$strings['Log Out'] = 'Logga ut';
$strings['My Control Panel'] = 'Startsidan';
$strings['Help'] = 'Hjälp';
$strings['Manage Schedules'] = 'Hantera Scheman';
$strings['Manage Users'] ='Hantera användare';
$strings['Manage Resources'] ='Hantera resurser';
$strings['Manage User Training'] ='Hantera användarträning';
$strings['Manage Reservations'] ='Hantera bokningar';
$strings['Email Users'] ='Epost till användare';
$strings['Export Database Data'] = 'Export Databas data';
$strings['Reset Password'] = 'Återställ lösenord';
$strings['System Administration'] = 'System Administration';
$strings['Successful update'] = 'Updateringen lyckades';
$strings['Update failed!'] = 'Updateringen misslyckades!';
$strings['Manage Blackout Times'] = 'Hantera ej tillgängliga tider';
$strings['Forgot Password'] = 'Glömt lösenordet?';
$strings['Manage My Email Contacts'] = 'Hantera mina epost-kontakter';
$strings['Choose Date'] = 'Välj datum';
$strings['Modify My Profile'] = 'Ändra min profil';
$strings['Register'] = 'Registrera';
$strings['Processing Blackout'] = 'Behandlar stängning';
$strings['Processing Reservation'] = 'Behandlar bokning';
$strings['Online Scheduler [Read-only Mode]'] = 'Online bokning [endast läs-läge]';
$strings['Online Scheduler'] = 'Online bokning';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Statistik';
$strings['User Info'] = 'Användarinformation:';

$strings['Could not determine tool'] = 'Kunde inte hitta verktyget. Återgå till startsidan och försök igen.';
$strings['This is only accessable to the administrator'] = 'Detta är endast till för administratören';
$strings['Back to My Control Panel'] = 'Tillbaka till startsidan';
$strings['That schedule is not available.'] = 'Den bokningen är inte tillgänglig.';
$strings['You did not select any schedules to delete.'] = 'Du valde ingen bokning att ta bort.';
$strings['You did not select any members to delete.'] = 'Du valde ingen medlem att ta bort.';
$strings['You did not select any resources to delete.'] = 'Du valde ingen resurs att ta bort.';
$strings['Schedule title is required.'] = 'Namn på bokning krävs.';
$strings['Invalid start/end times'] = 'Ogiltig start/slut tid';
$strings['View days is required'] = 'Visa dagar krävs';
$strings['Day offset is required'] = 'Dag offset krävs';
$strings['Admin email is required'] = 'Administratörens epost krävs';
$strings['Resource name is required.'] = 'Resurs namn krävs.';
$strings['Valid schedule must be selected'] = 'En bokning måste väljas';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minimal reservationslängd måste vara minde eller lika med den maximala reservationslängden';
$strings['Your request was processed successfully.'] = 'Din förfrågan behandlades.';
$strings['Go back to system administration'] = 'Tillbaka till administrationen';
$strings['Or wait to be automatically redirected there.'] = 'Eller vänta och bli automatiskt vidarebefodrad.';
$strings['There were problems processing your request.'] = 'Det var problem med din begäran.';
$strings['Please go back and correct any errors.'] = 'Gå tillbaka o rätta till eventuella fel.';
$strings['Login to view details and place reservations'] = 'Logga in för att se detaljer och göra bokningar';
$strings['Memberid is not available.'] = 'Memberid: %s är inte tillgängligt.';

$strings['Schedule Title'] = 'Schematitel';
$strings['Start Time'] = 'Start tid';
$strings['End Time'] = 'Slut tid';
$strings['Time Span'] = 'Tidsintervall';
$strings['Weekday Start'] = 'Veckodag Start';
$strings['Admin Email'] = 'Admin Epost';

$strings['Default'] = 'Default';
$strings['Reset'] = 'Reset';
$strings['Edit'] = 'Ändra';
$strings['Delete'] = 'Ta bort';
$strings['Cancel'] = 'Avbryt';
$strings['View'] = 'Visa';
$strings['Modify'] = 'Ändra';
$strings['Save'] = 'Spara';
$strings['Back'] = 'Tillbaka';
$strings['Next'] = 'Nästa';
$strings['Close Window'] = 'Stäng fönster';
$strings['Search'] = 'Sök';
$strings['Clear'] = 'Töm';

$strings['Days to Show'] = 'Dagar att visa';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Dold';
$strings['Show Summary'] = 'Visa sammanfattning';
$strings['Add Schedule'] = 'Lägg till schema';
$strings['Edit Schedule'] = 'Ändra schema';
$strings['No'] = 'Nej';
$strings['Yes'] = 'Ja';
$strings['Name'] = 'Namn';
$strings['First Name'] = 'Förnamn';
$strings['Last Name'] = 'Efternamn';
$strings['Resource Name'] = 'Namn på resurs';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Avdelning';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Lösenord';
$strings['Permissions'] = 'Permissions';
$strings['View information about'] = 'Visa information om %s %s';
$strings['Send email to'] = 'Skicka email till %s %s';
$strings['Reset password for'] = 'Återställ lösenord åt %s %s';
$strings['Edit permissions for'] = 'Ändra rättigheter för %s %s';
$strings['Position'] = 'Position';
$strings['Password (6 char min)'] = 'Lösenord (%s tecken minst)';
$strings['Re-Enter Password'] = 'Upprepa lösenord';

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
$strings['Sort by descending user name'] = 'Sortera fallande, användare';
$strings['Sort by descending start time'] = 'Sortera fallande, start tid';
$strings['Sort by descending end time'] = 'Sortera fallande, slut tid';
$strings['Sort by ascending date'] = 'Sortera stigande, datum';
$strings['Sort by ascending user name'] = 'Sortera stigande, användare';
$strings['Sort by ascending start time'] = 'Sortera stigande, start tid';
$strings['Sort by ascending end time'] = 'Sortera stigande, slut tid';
$strings['Sort by descending created time'] = 'Sortera fallande, skapad';
$strings['Sort by ascending created time'] = 'Sortera stigande, skapad';
$strings['Sort by descending last modified time'] = 'Sortera fallande, senast ändrad';
$strings['Sort by ascending last modified time'] = 'Sortera stigande, senast ändrad';

$strings['Search Users'] = 'Sök användare';
$strings['Location'] = 'Plats';
$strings['Schedule'] = 'Schema';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Kommentarer';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Alla scheman';
$strings['All Resources'] = 'Alla resurser';
$strings['All Users'] = 'Alla användare';

$strings['Edit data for'] = 'Ändra data för %s';
$strings['Active'] = 'Aktiv';
$strings['Inactive'] = 'Inaktiv';
$strings['Toggle this resource active/inactive'] = 'Ändra denna resurs aktiv/inaktiv';
$strings['Minimum Reservation Time'] = 'Min Reservations Tid';
$strings['Maximum Reservation Time'] = 'Max Reservations Tid';
$strings['Auto-assign permission'] = 'Auto-assign permission';
$strings['Add Resource'] = 'Lägg till Resurs';
$strings['Edit Resource'] = 'Ändra Resurs';
$strings['Allowed'] = 'Tillåten';
$strings['Notify user'] = 'Meddela användare';
$strings['User Reservations'] = 'Användarens bokningar';
$strings['Date'] = 'Datum';
$strings['User'] = 'Användare';
$strings['Email Users'] = 'Email Användare';
$strings['Subject'] = 'Ämne';
$strings['Message'] = 'Meddelande';
$strings['Please select users'] = 'Välj användare';
$strings['Send Email'] = 'Skicka Email';
$strings['problem sending email'] = 'Det var ett problem när ditt brev skulle skickas, prova igen senare.';
$strings['The email sent successfully.'] = 'E-brevet skickades.';
$strings['do not refresh page'] = 'Uppdatera<u>inte</u> denna sida. Gör du de så skickas e-brevet igen.';
$strings['Return to email management'] = 'Tillbaka till e-posthanteringen';
$strings['Please select which tables and fields to export'] = 'Välj tabeller och fält att exportera:';
$strings['all fields'] = '- alla fält -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Ren text';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Exportera data';
$strings['Reset Password for'] = 'Återställ lösenord för %s';
$strings['Please edit your profile'] = 'Please edit your profile';
$strings['Please register'] = 'Var god registrera';
$strings['Email address (this will be your login)'] = 'Epost-address (detta blir ditt loginnamn)';
$strings['Keep me logged in'] = 'Kom ihåg min inloggning <br/> (kräver att din webbläsare tillåter cookies)';
$strings['Edit Profile'] = 'Ändra profil';
$strings['Register'] = 'Registrera';
$strings['Please Log In'] = 'Logga in';
$strings['Email address'] = 'Email-address';
$strings['Password'] = 'Lösenord';
$strings['First time user'] = 'Ny användare';
$strings['Click here to register'] = 'Klicka här för att registrera';
$strings['Register for phpScheduleIt'] = 'Registrera till phpScheduleIt';
$strings['Log In'] = 'Logga In';
$strings['View Schedule'] = 'Visa schema';
$strings['View a read-only version of the schedule'] = 'Visa en read-only version av schemat';
$strings['I Forgot My Password'] = 'Jag har glömt mitt lösenord';
$strings['Retreive lost password'] = 'Återfå glömt lösenord';
$strings['Get online help'] = 'Få hjälp';
$strings['Language'] = 'Språk';
$strings['(Default)'] = '(Default)';

$strings['My Announcements'] = 'Mina meddelanden';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Permissions'] = 'Mina Rättigheter';
$strings['My Quick Links'] = 'Mina Snabblänkar';
$strings['Announcements as of'] = 'Meddelanden från och med %s';
$strings['There are no announcements.'] = 'Det finns inga meddelanden';
$strings['Resource'] = 'Resurs';
$strings['Created'] = 'Skapad';
$strings['Last Modified'] = 'Senast ändrad';
$strings['View this reservation'] = 'Visa denna bokning';
$strings['Modify this reservation'] = 'Ändra denna bokning';
$strings['Delete this reservation'] = 'Ta bort denna bokning';
$strings['Bookings'] = 'Bokningar';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Ändra min profil';	// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Mina E-mailinställningar';		// @since 1.2.0
$strings['Mass Email Users'] = 'e-posta flera användare';
$strings['Search Scheduled Resource Usage'] = 'Sök schemalagda bokningar';	// @since 1.2.0
$strings['Export Database Content'] = 'Exportera databasdata';
$strings['View System Stats'] = 'Visa statistik';
$strings['Email Administrator'] = 'E-posta Administratör';

$strings['Email me when'] = 'Eposta mig när:';
$strings['I place a reservation'] = 'Jag skapar en bokning';
$strings['My reservation is modified'] = 'Min bokning ändras';
$strings['My reservation is deleted'] = 'Min bokning tas bort';
$strings['I prefer'] = 'Jag föredrar:';
$strings['Your email preferences were successfully saved'] = 'Dina epost-inställningar sparades!';
$strings['Return to My Control Panel'] = 'Återgå till startsidan';

$strings['Please select the starting and ending times'] = 'Välj start och slut tider:';
$strings['Please change the starting and ending times'] = 'Ändra start och slut tider:';
$strings['Reserved time'] = 'Reserverade tider:';
$strings['Minimum Reservation Length'] = 'Min längd på bokning:';
$strings['Maximum Reservation Length'] = 'Max längd på bokning:';
$strings['Reserved for'] = 'bokad åt:';
$strings['Will be reserved for'] = 'Kommer vara reserverad åt:';
$strings['N/A'] = 'Ej tillgänglig';
$strings['Update all recurring records in group'] = 'Uppdatera alla återkommande bokningar i gruppen?';
$strings['Delete?'] = 'Ta bort?';
$strings['Never'] = '-- Aldrig --';
$strings['Days'] = 'Dagar';
$strings['Weeks'] = 'Veckor';
$strings['Months (date)'] = 'Månader (datum)';
$strings['Months (day)'] = 'Månader (dag)';
$strings['First Days'] = 'Första dagar';
$strings['Second Days'] = 'Andra dagar';
$strings['Third Days'] = 'Tredje dagar';
$strings['Fourth Days'] = 'Fjärde dagar';
$strings['Last Days'] = 'Sista dagar';
$strings['Repeat every'] = 'Repetera varje:';
$strings['Repeat on'] = 'Repetera på:';
$strings['Repeat until date'] = 'Repetera tills:';
$strings['Choose Date'] = 'Välj datum';
$strings['Summary'] = 'Kommentarer';

$strings['View schedule'] = 'Visa schema:';
$strings['My Reservations'] = 'Mina bokningar';
$strings['My Past Reservations'] = 'Mina tidigare bokningar';
$strings['Other Reservations'] = 'Andra bokningar';
$strings['Other Past Reservations'] = 'Andra tidigare bokningar';
$strings['Blacked Out Time'] = 'Ej tillgänglig';
$strings['Set blackout times'] = 'Set blackout times for %s on %s';
$strings['Reserve on'] = 'Boka %s on %s';
$strings['Prev Week'] = '&laquo; Föregående vecka';
$strings['Jump 1 week back'] = 'Gå 1 vecka bakåt';
$strings['Prev days'] = '&#8249; Tidigare %d dagar';
$strings['Previous days'] = '&#8249; Tidigare %d dagar';
$strings['This Week'] = 'Denna vecka';
$strings['Jump to this week'] = 'Gå till denna vecka';
$strings['Next days'] = 'Nästa %d dagar &#8250;';
$strings['Next Week'] = 'Nästa vecka &raquo;';
$strings['Jump To Date'] = 'Gå till datum';
$strings['View Monthly Calendar'] = 'Visa månadskalender';
$strings['Open up a navigational calendar'] = 'Öppna en kalender för att navigera';

$strings['View stats for schedule'] = 'Visa statistik för schemat:';
$strings['At A Glance'] = 'Snabböversikt';
$strings['Total Users'] = 'Totala användare:';
$strings['Total Resources'] = 'Totala resurser:';
$strings['Total Reservations'] = 'Totala bokningar:';
$strings['Max Reservation'] = 'Max bokningar:';
$strings['Min Reservation'] = 'Min bokningar:';
$strings['Avg Reservation'] = 'Snitt bokningar:';
$strings['Most Active Resource'] = 'Mest använda resurs:';
$strings['Most Active User'] = 'Mest aktiva användare:';
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

$strings['Select Search Criteria'] = 'Välj sökkriterie';
$strings['Schedules'] = 'Scheman:';
$strings['All Schedules'] = 'Alla scheman';
$strings['Hold CTRL to select multiple'] = 'Håll ner ctrl för att välja flera';
$strings['Users'] = 'Användare:';
$strings['All Users'] = 'Alla användare';
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
$strings['Search Results'] = 'Sökresultat';
$strings['Search Resource Usage'] = 'Användning av sökresultat';
$strings['Search Results found'] = 'Sökresultat: %d bokningar hittade';
$strings['Try a different search'] = 'Sök igen';
$strings['Search Run On'] = 'Sökning pågår:';
$strings['Member ID'] = 'Medlems ID';
$strings['Previous User'] = '&laquo; Föregående Användare';
$strings['Next User'] = 'Nästa användare &raquo;';

$strings['No results'] = 'Inga resultat';
$strings['That record could not be found.'] = 'Inget objekt kunde hittas.';
$strings['This blackout is not recurring.'] = 'Denna ej-tillgäng-tid är inte återkommande.';
$strings['This reservation is not recurring.'] = 'Denna reservation är inte återkommande.';
$strings['There are no records in the table.'] = 'Det finns inga objekt i %s tabellen.';
$strings['You do not have any reservations scheduled.'] = 'Du har inga reservationer schemalagda.';
$strings['You do not have permission to use any resources.'] = 'Du har inte rättigheteer att se några resurser.';
$strings['No resources in the database.'] = 'Inga resurser i databasen.';
$strings['There was an error executing your query'] = 'Ett fel uppstod vid körning av din fråga:';

$strings['That cookie seems to be invalid'] = 'Den cookien verkar vara ogiltig';
$strings['We could not find that logon in our database.'] = 'Logon kunde inte hittas i databasen.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Lösenordet är fel.';
$strings['You can try'] = '<br />Du kan försöka:<br />Registrera en epsotadress.<br />Eller:<br />Försöka logga in igen.';
$strings['A new user has been added'] = 'En ny användare har lagts till';
$strings['You have successfully registered'] = 'Du har nu registrerat!';
$strings['Continue'] = 'Fortsätt...';
$strings['Your profile has been successfully updated!'] = 'Din profil har uppdaterats!';
$strings['Please return to My Control Panel'] = 'Återvänd till startsidan';
$strings['Valid email address is required.'] = '- riktig epostadress krävs.';
$strings['First name is required.'] = '- Förnamn krävs.';
$strings['Last name is required.'] = '- Efternamn krävs.';
$strings['Phone number is required.'] = '- Telefonnummer krävs.';
$strings['That email is taken already.'] = '- Epostadressen finns redan i systemet.<br />Försök med en annan.';
$strings['Min 6 character password is required.'] = '- Minst 6 tecken krävs.';
$strings['Passwords do not match.'] = '- Lösenorden är inte identiska.';

$strings['Per page'] = 'Per sida:';
$strings['Page'] = 'Sida:';

$strings['Your reservation was successfully created'] = 'Din bokning är nu skapad';
$strings['Your reservation was successfully modified'] = 'Din bokning är nu ändrad';
$strings['Your reservation was successfully deleted'] = 'Din bokning är nu borttagen';
$strings['Your blackout was successfully created'] = 'Din ej-tillgänglig tid är nu skapad';
$strings['Your blackout was successfully modified'] = 'Din ej-tillgänglig tid är nu ändrad';
$strings['Your blackout was successfully deleted'] = 'Din ej-tillgänglig tid är nu borttagen';
$strings['for the follwing dates'] = 'följande datum:';
$strings['Start time must be less than end time'] = 'Starttiden måste vara före sluttiden.';
$strings['Current start time is'] = 'Nuvarande starttid är:';
$strings['Current end time is'] = 'Nuvarnade sluttid är:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Bokningens längd stämmer inte med denna resurs tillåtna längd.';
$strings['Your reservation is'] = 'Din bokning är:';
$strings['Minimum reservation length'] = 'Min reservationslängd:';
$strings['Maximum reservation length'] = 'Max reservationslängd:';
$strings['You do not have permission to use this resource.'] = 'Du får inte använda denna resurs.';
$strings['reserved or unavailable'] = '%s to %s is reserved or unavailable.';	// @since 1.1.0
$strings['Reservation created for'] = 'Bokning %s skapad';
$strings['Reservation modified for'] = 'Bokning %s ändrad';
$strings['Reservation deleted for'] = 'Bokning %s borttagen';
$strings['created'] = 'skapad';
$strings['modified'] = 'ändrad';
$strings['deleted'] = 'borttagen';
$strings['Reservation #'] = 'Bokning #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Bokning skapad';
$strings['Reservation modified'] = 'Bokning ändrad';
$strings['Reservation deleted'] = 'Bokning borttagen';

$strings['Reservations by month'] = 'Bokningar månadsvis';
$strings['Reservations by day of the week'] = 'Bokningar veckodagsvis';
$strings['Reservations per month'] = 'Bokningar per månad';
$strings['Reservations per user'] = 'Bokningar per användare';
$strings['Reservations per resource'] = 'Bokningar per resurs';
$strings['Reservations per start time'] = 'Boknngar per starttid';
$strings['Reservations per end time'] = 'Bokningar per sluttid';
$strings['[All Reservations]'] = '[Alla bokningar]';

$strings['Permissions Updated'] = 'Rättigheter Uppdaterade';
$strings['Your permissions have been updated'] = 'Dina %s rättigheter har blivit uppdaterade';
$strings['You now do not have permission to use any resources.'] = 'Du har inte tillåtelse att använda någon resurs';
$strings['You now have permission to use the following resources'] = 'Du har du tillåtelse att använda följande resurser:';
$strings['Please contact with any questions.'] = 'kontakta %s med din fråga.';
$strings['Password Reset'] = 'Återställ lösenord';

$strings['This will change your password to a new, randomly generated one.'] = 'Detta kommer ändra ditt lösenord till ett nytt slumpmässigt genererat.';
$strings['your new password will be set'] = 'När du skrivit in din epostadress och klickat på skicka så kommer det nya lösenordet mailas till dig.';
$strings['Change Password'] = 'Byt lösenord';
$strings['Sorry, we could not find that user in the database.'] = 'Användaren finns inte i databasen.';
$strings['Your New Password'] = 'Ditt nya lösenord %s ';
$strings['Your new passsword has been emailed to you.'] = 'Ditt nya lösenord har skickats till dig.<br />'
    			. 'Kolla din mail och <a href="index.php">logga in</a>'
    			. ' med det nya lösenordet, ändra det därefter i din profil om du vill.';

$strings['You are not logged in!'] = 'Du är inte inloggad!';

$strings['Setup'] = 'Setup';
$strings['Please log into your database'] = 'Logga in till din databas';
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
$strings['Successfully connected as'] = 'Ansluten som';
$strings['Create tables'] = 'Skapa tabeller &gt;';
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
$strings['Click to proceed'] = 'Klicka för att fortsätta';
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
$strings['This system requires that you have an email address.'] = 'Detta system kräver att du har en epost-adress.';
$strings['Invalid User Name/Password.'] = 'Oglitig användare namn/lösenord.';
$strings['Pending User Reservations'] = 'Väntar på bokningar';
$strings['Approve'] = 'Godkänn';
$strings['Approve this reservation'] = 'Godkänn bokningen';
$strings['Approve Reservations'] ='Godkänn bokningar';

$strings['Announcement'] = 'Meddelanden';
$strings['Number'] = 'Nummer';
$strings['Add Announcement'] = 'Lägg till meddelande';
$strings['Edit Announcement'] = 'Redigera meddelande';
$strings['All Announcements'] = 'Alla meddelanden';
$strings['Delete Announcements'] = 'Ta bort meddelanden';
$strings['Use start date/time?'] = 'Använd starttid/startdatum?';
$strings['Use end date/time?'] = 'Använd sluttid/slutdatum?';
$strings['Announcement text is required.'] = 'Meddelandetext krävs.';
$strings['Announcement number is required.'] = 'Meddelandenummer krävs.';

$strings['Pending Approval'] = 'Väntar på godkännande';
$strings['My reservation is approved'] = 'Min bokning är godkänd';
$strings['This reservation must be approved by the administrator.'] = 'Denna bokning måste godkännas av administratören';
$strings['Approval Required'] = 'Behöver godkännas';
$strings['No reservations requiring approval'] = 'Inga bokningar som behöver godkännas';
$strings['Your reservation was successfully approved'] = 'Din bokning godkändes';
$strings['Reservation approved for'] = '%s bokning godkänd ';
$strings['approved'] = 'godkänd';
$strings['Reservation approved'] = 'Bokning godkänd';

$strings['Valid username is required'] = 'Giltigt användarnamn krävs';
$strings['That logon name is taken already.'] = 'Namnet är redan upptaget.';
$strings['this will be your login'] = '(detta blir till login-namn)';
$strings['Logon name'] = 'Login-namn';
$strings['Your logon name is'] = 'Ditt login-namn är %s';

$strings['Start'] = 'Start';
$strings['End'] = 'Slut';
$strings['Start date must be less than or equal to end date'] = 'Startdatum måste vara före eller samma som slutdatum';
$strings['That starting date has already passed'] = 'startdatumet har passerats';
$strings['Basic'] = 'Grundläggande';
$strings['Participants'] = 'Deltagare';
$strings['Close'] = 'Stäng';
$strings['Start Date'] = 'Startdatum';
$strings['End Date'] = 'Slutdatum';
$strings['Minimum'] = 'Min';
$strings['Maximum'] = 'Max';
$strings['Allow Multiple Day Reservations'] = 'Tillåt flerdagsreservationer';
$strings['Invited Users'] = 'Inbjudna användare';
$strings['Invite Users'] = 'Bjud in användare';
$strings['Remove Participants'] = 'Ta bort deltagare';
$strings['Reservation Invitation'] = 'Inbjudningar';
$strings['Manage Invites'] = 'Hantera inbjudningar';
$strings['No invite was selected'] = 'Ingen inbjudning valdes';
$strings['reservation accepted'] = '%s har accepterat din inbjudan på %s';
$strings['reservation declined'] = '%s har avslagit din inbjudan på %s';
$strings['Login to manage all of your invitiations'] = 'Logga in för att hantera dina inbjudningar';
$strings['Reservation Participation Change'] = 'Ändra bokningens deltagare';
$strings['My Invitations'] = 'Mina inbjudningar';
$strings['Accept'] = 'Acceptera';
$strings['Decline'] = 'Avslå';
$strings['Accept or decline this reservation'] = 'Acceptera eller avslå denna inbjudning';
$strings['My Reservation Participation'] = 'Mina bokningars deltagare';
$strings['End Participation'] = 'Avsluta deltagning';
$strings['Owner'] = 'Ägare';
$strings['Particpating Users'] = 'Deltagande användare';
$strings['No advanced options available'] = 'Inga avancerade inställningar tillgängliga';
$strings['Confirm reservation participation'] = 'Bekräfta deltagande av bokning';
$strings['Confirm'] = 'Bekräfta';
$strings['Do for all reservations in the group?'] = 'För alla bokningar i gruppen?';

$strings['My Calendar'] = 'Min kalender';
$strings['View My Calendar'] = 'Visa min kalender';
$strings['Participant'] = 'Deltagare';
$strings['Recurring'] = 'Återkommande';
$strings['Multiple Day'] = 'Flera dagar';
$strings['[today]'] = '[idag]';
$strings['Day View'] = 'Dag-vy';
$strings['Week View'] = 'Vecko-vy';
$strings['Month View'] = 'Månads-vy';
$strings['Resource Calendar'] = 'Bokningskalender';
$strings['View Resource Calendar'] = 'Visa bokningskalender';	// @since 1.2.0
$strings['Signup View'] = 'Registreringsvy';

$strings['Select User'] = 'Välj användare';
$strings['Change'] = 'Ändra';

$strings['Update'] = 'Uppdatera';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt uppdatering är endast tillgängligt för version 1.0.0 eller senare';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt Är redan uppdaterad';
$strings['Migrating reservations'] = 'Migrerar bokningar';

$strings['Admin'] = 'Admin';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Max deltagarkapacitet';
$strings['Leave blank for unlimited'] = 'Lämna tomt för obegränsat';
$strings['Maximum of participants'] = 'Den här resursen har makimal kapacitet %s deltagare';
$strings['That reservation is at full capacity.'] = 'Bokningen är fullbelagd.';
$strings['Allow registered users to join?'] = 'Tillåt registrerade användare att ansluta sig?';
$strings['Allow non-registered users to join?'] = 'Tillåt oregistrerade använare att ansluta sig?';
$strings['Join'] = 'Anslut';
$strings['My Participation Options'] = 'Mina deltagaralternativ';
$strings['Join Reservation'] = 'Anslut till bokning';
$strings['Join All Recurring'] = 'Anslut till alla återkommande';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Du är inte antagen till följande bokningsdatum, de är fulltecknade.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Du är redan inbjuden till denna bokning. Följ deltagandeinstruktionerna i det e-brev som du fått.';
$strings['Additional Tools'] = 'Övriga verktyg';
$strings['Create User'] = '´Skapa användare';
$strings['Check Availability'] = 'Kolla tillgänglighet';
$strings['Manage Additional Resources'] = 'Hantera övriga resurser';
$strings['All Additional Resources'] = 'Alla övriga resurser';
$strings['Number Available'] = 'Antal tillgängliga';
$strings['Unlimited'] = 'Obegränsad';
$strings['Add Additional Resource'] = 'Lägg till övriga resurser';
$strings['Edit Additional Resource'] = 'Redigera övriga resurser';
$strings['Checking'] = 'Kontrollerar';
$strings['You did not select anything to delete.'] = 'Valde du ingenting att ta bort.';
$strings['Added Resources'] = 'Lagt till resuser';
$strings['Additional resource is reserved'] = 'Den övriga resusrsen %s har bara %s tillgängliga åt gången';
$strings['All Groups'] = 'Alla grupper';
$strings['Group Name'] = 'Gruppnamn';
$strings['Delete Groups'] = 'Radera Grupper';
$strings['Manage Groups'] = 'Hantera Grupper';
$strings['None'] = 'Ingen';
$strings['Group name is required.'] = 'Gruppnamn krävs.';
$strings['Groups'] = 'Grupper';
$strings['Current Groups'] = 'Aktuella grupper';
$strings['Group Administration'] = 'Gruppadministration';
$strings['Reminder Subject'] = 'Bokningspåminnelse- %s, %s %s';
$strings['Reminder'] = 'Påminnelse';
$strings['before reservation'] = 'före bokning';
$strings['My Participation'] = 'Mitt deltagande';
$strings['My Past Participation'] = 'Mitt tidigare deltagande';
$strings['Timezone'] = 'Tidzon';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'Välj bokningar att exportera';
$strings['Export Format'] = 'Exportformat';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Denna resurs kan inte bli bokad med mindre än %s timmar kvar till start';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Denna resurs kan inte bli bokad med mer än %s timmar kvar till start';
$strings['Minimum Booking Notice'] = 'Minsta bokningsanteckning';
$strings['Maximum Booking Notice'] = 'Största bokningsanteckning';
$strings['hours prior to the start time'] = 'timmar kvar till starttiden';
$strings['hours from the current time'] = 'timmar fån nu';
$strings['Contains'] = 'Innehåller';
$strings['Begins with'] = 'Börjar med';
$strings['Minimum booking notice is required.'] = 'Minsta bokningsanteckning krävs.';
$strings['Maximum booking notice is required.'] = 'Största bokningsanteckning krävs.';
$strings['Accessory Name'] = 'Accessory Name';
$strings['Accessories'] = 'Accessories';
$strings['All Accessories'] = 'All Accessories';
$strings['Added Accessories'] = 'Added Accessories';
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
