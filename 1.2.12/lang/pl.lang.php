<?php
/**
* Polish (en) translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Arkadiusz Lipiec arkadiusz.lipiec@gmail.com
* @version 05-11-09
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
$charset = 'windows-1250';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Niedziela', 'Poniedzia³ek', 'Wtorek', 'Œroda', 'Czwartek', 'Pi¹tek', 'Sobota');
// The three letter abbreviation
$days_abbr = array('Nie', 'Pon', 'Wto', 'Œro', 'Czw', 'Pt', 'Sob');
// The two letter abbreviation
$days_two  = array('Ni', 'Po', 'Wt', 'Œr', 'Cz', 'Pt', 'So');
// The one letter abbreviation
$days_letter = array('N', 'P', 'W', 'Œ', 'C', 'P', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Styczeñ', 'Luty', 'Marzec', 'Kwiecieñ', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpieñ', 'Wrzesieñ', 'PaŸdziernik', 'Listopad', 'Grudzieñ');
// The three letter month name
$months_abbr = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'PaŸ', 'Lis', 'Gru');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('A', '¥', 'B', 'C', 'Æ', 'D', 'E', 'Ê', 'F', 'G', 'H', 'I', 'J', 'K', 'L', '£', 'M', 'N', 'Ñ', 'O', 'Ó', 'P', 'Q', 'R', 'S', 'Œ', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '', '¯');

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
$strings['hours'] = 'godzin(y)';
$strings['minutes'] = 'minut(y)';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'rrrr';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrator';
$strings['Welcome Back'] = 'Witaj znowu, %s';
$strings['Log Out'] = 'Wyloguj';
$strings['My Control Panel'] = 'Panel sterowania';
$strings['Help'] = 'Pomoc';
$strings['Manage Schedules'] = 'Terminy';
$strings['Manage Users'] ='U¿ytkownicy';
$strings['Manage Resources'] ='Zasoby';
$strings['Manage User Training'] ='Szkolenie u¿ytkowników';
$strings['Manage Reservations'] ='Rezerwacje';
$strings['Email Users'] ='Email do u¿ytkowników';
$strings['Export Database Data'] = 'Eksport danych z bazy';
$strings['Reset Password'] = 'Wyzeruj has³o';
$strings['System Administration'] = 'Administracja systemem';
$strings['Successful update'] = 'Aktualizacja powiod³a siê';
$strings['Update failed!'] = 'Aktualizacja zakoñczona niepowodzeniem!';
$strings['Manage Blackout Times'] = 'Czasy niedostêpnoœci';
$strings['Forgot Password'] = 'Zapomnia³em has³a';
$strings['Manage My Email Contacts'] = 'Zarz¹dzaj kontaktami email';
$strings['Choose Date'] = 'Wybierz datê';
$strings['Modify My Profile'] = 'Modyfikacja profilu';
$strings['Register'] = 'Zarejestruj';
$strings['Processing Blackout'] = 'Przetwarzanie terminów niedostêpnoœci';
$strings['Processing Reservation'] = 'Przetwarzanie rezerwacji';
$strings['Online Scheduler [Read-only Mode]'] = 'Terminarz online [tylko do odczytu]';
$strings['Online Scheduler'] = 'Terminarz online';
$strings['phpScheduleIt Statistics'] = 'Statystyki phpScheduleIt';
$strings['User Info'] = 'Informacje o u¿ytkowniku:';

$strings['Could not determine tool'] = 'Nie mo¿na znaleŸæ narzêdzia. Wróæ do panelu administracyjnego i spróbuj ponownie.';
$strings['This is only accessable to the administrator'] = 'Ta opcja jest dostêpna tylko dla administratora';
$strings['Back to My Control Panel'] = 'Powrót do panelu administracyjnego';
$strings['That schedule is not available.'] = 'Ten termin nie jest dostêpny.';
$strings['You did not select any schedules to delete.'] = 'Nie wybrano terminów do usuniêcia.';
$strings['You did not select any members to delete.'] = 'Nie wybrano u¿ytkowników do usuniêcia.';
$strings['You did not select any resources to delete.'] = 'Nie wybrano ¿adnych zasobów do usuniêcia.';
$strings['Schedule title is required.'] = 'Wymagany jest tytu³ terminu.';
$strings['Invalid start/end times'] = 'Niepoprawna data pocz¹tkowa/koñcowa.';
$strings['View days is required'] = 'Wymagane jest pole wyœwieltlanych dni';
$strings['Day offset is required'] = 'Wymagane jest stworzenie odcinków czasu';
$strings['Admin email is required'] = 'Wymagany jest adres email administratora';
$strings['Resource name is required.'] = 'Wymagana jest nazwa zasobu.';
$strings['Valid schedule must be selected'] = 'Nale¿y wybraæ poprawny termin';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Miminalna d³ugoœæ rezerwacji musi byæ mniejsza lub co najmniej równa maksymalnej.';
$strings['Your request was processed successfully.'] = 'Twoje ¿¹danie zosta³o pomyœlnie przetworzone.';
$strings['Go back to system administration'] = 'Powrót do administracji systemem';
$strings['Or wait to be automatically redirected there.'] = 'Lub poczekaj na automatyczne przekierowanie.';
$strings['There were problems processing your request.'] = 'Wyst¹pi³ problem z przetworzeniem ¿¹dania.';
$strings['Please go back and correct any errors.'] = 'Wróæ i popraw wszystkie b³êdy.';
$strings['Login to view details and place reservations'] = 'Zaloguj siê aby zobaczyæ szczegó³y oraz zarezerwowaæ termin';
$strings['Memberid is not available.'] = 'Memberid: %s nie jest dostêpny.';

$strings['Schedule Title'] = 'Nazwa terminu';
$strings['Start Time'] = 'Czas rozpoczêcia';
$strings['End Time'] = 'Czas zakoñczenia';
$strings['Time Span'] = 'Odcinki czasu';
$strings['Weekday Start'] = 'Pierwszy dzieñ tygodnia';
$strings['Admin Email'] = 'Email administratora';

$strings['Default'] = 'Domyœlny';
$strings['Reset'] = 'Wyczyœæ';
$strings['Edit'] = 'Edycja';
$strings['Delete'] = 'Usuñ';
$strings['Cancel'] = 'Anuluj';
$strings['View'] = 'Wyœwietl';
$strings['Modify'] = 'Zmieñ';
$strings['Save'] = 'Zapisz';
$strings['Back'] = 'Powrót';
$strings['Next'] = 'Dalej';
$strings['Close Window'] = 'Zamknij okno';
$strings['Search'] = 'Wyszukaj';
$strings['Clear'] = 'Wyczyœæ';

$strings['Days to Show'] = 'Wyœwieltane dni';
$strings['Reservation Offset'] = 'Margines czasu rezerwacji';
$strings['Hidden'] = 'Ukryty';
$strings['Show Summary'] = 'Wyœwietlanie informacji';
$strings['Add Schedule'] = 'Dodaj termin';
$strings['Edit Schedule'] = 'Zmodyfikuj termin';
$strings['No'] = 'Nie';
$strings['Yes'] = 'Tak';
$strings['Name'] = 'Nazwa';
$strings['First Name'] = 'Imiê';
$strings['Last Name'] = 'Nazwisko';
$strings['Resource Name'] = 'Nazwa zasobu';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Instytucja';
$strings['Phone'] = 'Telefon';
$strings['Password'] = 'Has³o';
$strings['Permissions'] = 'Uprawnienia';
$strings['View information about'] = 'Wyœwietl informacje o %s %s';
$strings['Send email to'] = 'Wyœlij maila do %s %s';
$strings['Reset password for'] = 'Wyzeruj has³o dla %s %s';
$strings['Edit permissions for'] = 'Zmodyfikuj uprawnienia dla %s %s';
$strings['Position'] = 'Pozycja';
$strings['Password (6 char min)'] = 'Has³o (%s min znaków)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Powtórz has³o';

$strings['Sort by descending last name'] = 'Sortowanie malej¹ce po nazwisku';
$strings['Sort by descending email address'] = 'Sortowanie malej¹ce po adresie email';
$strings['Sort by descending institution'] = 'Sortowanie malej¹ce po instytucji';
$strings['Sort by ascending last name'] = 'Sortowanie rosn¹ce po nazwisku';
$strings['Sort by ascending email address'] = 'Sortowanie rosn¹ce po adresie email';
$strings['Sort by ascending institution'] = 'Sortowanie rosn¹co po instytucji';
$strings['Sort by descending resource name'] = 'Sortowanie malej¹co po nazwie zasobu';
$strings['Sort by descending location'] = 'Sortowanie malej¹co po lokalizacji';
$strings['Sort by descending schedule title'] = 'Sortowanie malej¹co po tytule terminu';
$strings['Sort by ascending resource name'] = 'Sortowanie rosn¹co po nazwie zasobu';
$strings['Sort by ascending location'] = 'Sortowanie rosn¹co po lokalizacji';
$strings['Sort by ascending schedule title'] = 'Sortowanie rosn¹co po tytule terminu';
$strings['Sort by descending date'] = 'Sortowanie malej¹co po dacie';
$strings['Sort by descending user name'] = 'Sortowanie malej¹co po nazwie u¿ytkownika';
$strings['Sort by descending start time'] = 'Sortowanie malej¹co po czasie rozpocz¹cia';
$strings['Sort by descending end time'] = 'Sortowanie malej¹co po czasie zakoñczenia';
$strings['Sort by ascending date'] = 'Sortowanie rosn¹co po dacie';
$strings['Sort by ascending user name'] = 'Sortowanie rosn¹co po nazwie u¿ytkownika';
$strings['Sort by ascending start time'] = 'Sortowanie rosn¹co po czasie rozpoczêcia';
$strings['Sort by ascending end time'] = 'Sortowanie rosn¹co po czasie zakoñczenia';
$strings['Sort by descending created time'] = 'Sortowanie malej¹co po czasie utworzenia';
$strings['Sort by ascending created time'] = 'Sortowanie rosn¹co po czasie utworzenia';
$strings['Sort by descending last modified time'] = 'Sortowanie malej¹co po czasie ostatniej modyfikacji';
$strings['Sort by ascending last modified time'] = 'Sortowanie rosn¹co po czasie ostatniej modyfikacji';

$strings['Search Users'] = 'Wyszukaj u¿ytkowników';
$strings['Location'] = 'Lokalizacja';
$strings['Schedule'] = 'Termin';
$strings['Phone'] = 'Telefon';
$strings['Notes'] = 'Uwagi';
$strings['Status'] = 'Status';
$strings['All Schedules'] = 'Wszystkie terminy';
$strings['All Resources'] = 'Wszystkie zasoby';
$strings['All Users'] = 'Wszyscy u¿ytkownicy';

$strings['Edit data for'] = 'Zmodyfikuj dane dla %s';
$strings['Active'] = 'Aktywny';
$strings['Inactive'] = 'Nieaktywny';
$strings['Toggle this resource active/inactive'] = 'Prze³¹cz ten zasób na aktywny/nieaktywny';
$strings['Minimum Reservation Time'] = 'Minimalny czas rezerwacji';
$strings['Maximum Reservation Time'] = 'Maksymalny czas rezerwacji';
$strings['Auto-assign permission'] = 'Automatyczny przydzia³ uprawnieñ';
$strings['Add Resource'] = 'Dodaj zasób';
$strings['Edit Resource'] = 'Zmodyfikuj zasób';
$strings['Allowed'] = 'Dostêpne';
$strings['Notify user'] = 'Powiadom u¿ytkownika';
$strings['User Reservations'] = 'Rezerwacje u¿ytkownika';
$strings['Date'] = 'Data';
$strings['User'] = 'U¿ytkownik';
$strings['Email Users'] = 'Wyœlij maila u¿ytkownikom';
$strings['Subject'] = 'Temat';
$strings['Message'] = 'Wiadomoœæ';
$strings['Please select users'] = 'Wybierz u¿ytkowników';
$strings['Send Email'] = 'Wyœlij email';
$strings['problem sending email'] = 'Niestety, nie uda³o siê wys³aæ emaila. Spróbuj jeszcze raz póŸniej.';
$strings['The email sent successfully.'] = 'Wys³ano pomyœlnie emaila.';
$strings['do not refresh page'] = 'Proszê <u>nie odœwie¿aæ</u> tej strony. Ta akcja spowoduje ponowne wys³anie emaila.';
$strings['Return to email management'] = 'Wróæ do zarz¹dzania emailami';
$strings['Please select which tables and fields to export'] = 'Wybierz które tabele i które pola maj¹ zostaæ wyekportowane:';
$strings['all fields'] = '- wszystkie pola -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Zwyk³y tekst';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Export Data';
$strings['Reset Password for'] = 'Wyzeruj has³o dla %s';
$strings['Please edit your profile'] = 'Proszê zmodyfikowaæ swój profil';
$strings['Please register'] = 'Zarejestruj siê';
$strings['Keep me logged in'] = 'Utrzymuj sesjê <br/>(wymaga cookie)';
$strings['Edit Profile'] = 'Edycja profilu';
$strings['Register'] = 'Rejestracja';
$strings['Please Log In'] = 'Proszê siê zalogowaæ';
$strings['Email address'] = 'Adres email';
$strings['Password'] = 'Has³o';
$strings['First time user'] = 'Jesteœ tu pierwszy raz?';
$strings['Click here to register'] = '<br>Kliknij tu aby siê zarejestrowaæ';
$strings['Register for phpScheduleIt'] = 'Zarejestruj w systemie';
$strings['Log In'] = 'Zaloguj';
$strings['View Schedule'] = 'Zobacz terminy';
$strings['View a read-only version of the schedule'] = 'Wyœwietl wersjê terminarza tylko do odczytu';
$strings['I Forgot My Password'] = 'Zapomnia³em has³a';
$strings['Retreive lost password'] = 'Przywróæ utracone has³o';
$strings['Get online help'] = 'Pomoc internetowa';
$strings['Language'] = 'Jêzyk';
$strings['(Default)'] = '(Domyœlny)';

$strings['My Announcements'] = 'Moje powiadomienia';
$strings['My Reservations'] = 'Moje rezerwacje';
$strings['My Permissions'] = 'Uprawnienia';
$strings['My Quick Links'] = 'Odnoœniki';
$strings['Announcements as of'] = 'Powiadomienia do dnia %s';
$strings['There are no announcements.'] = 'Brak powiadomieñ.';
$strings['Resource'] = 'Zasób';
$strings['Created'] = 'Utworzono';
$strings['Last Modified'] = 'Ost. modyfikacja';
$strings['View this reservation'] = 'Wyœwietl t¹ rezerwacjê';
$strings['Modify this reservation'] = 'Zmieñ t¹ rezerwacjê';
$strings['Delete this reservation'] = 'Usuñ t¹ rezerwacjê';
$strings['Bookings'] = 'Rezerwacje';										// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Edycja profilu';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Ustawienia email';				// @since 1.2.0
$strings['Mass Email Users'] = 'Masowa wysy³ka maili';
$strings['Search Scheduled Resource Usage'] = 'Wyszukaj rezerwacje';		// @since 1.2.0
$strings['Export Database Content'] = 'Wyeksportuj zawartoœæ bazy danych';
$strings['View System Stats'] = 'Statystyki systemu';
$strings['Email Administrator'] = 'Email do administratora';

$strings['Email me when'] = 'Wyœlij emaila gdy:';
$strings['I place a reservation'] = 'Utworzona zostanie nowa rezerwacja';
$strings['My reservation is modified'] = 'Moja rezerwacja zostanie zmieniona';
$strings['My reservation is deleted'] = 'Moja rezerwacja zostanie usuniêta';
$strings['I prefer'] = 'Format wiadomoœci:';
$strings['Your email preferences were successfully saved'] = 'Twoje ustawienia email zosta³y pomyœlnie zapisane!';
$strings['Return to My Control Panel'] = 'Powrót do panelu sterowania';

$strings['Please select the starting and ending times'] = 'Wybierz czas rozpoczêcia i zakoñczenia:';
$strings['Please change the starting and ending times'] = 'Zmieñ czas rozpoczêcia i zakoñczenia:';
$strings['Reserved time'] = 'Czas rezerwacji:';
$strings['Minimum Reservation Length'] = 'Minimalna d³ugoœæ rezerwacji:';
$strings['Maximum Reservation Length'] = 'Maksymalna d³ugoœæ rezerwacji:';
$strings['Reserved for'] = 'Rezerwacja dla:';
$strings['Will be reserved for'] = 'Bêdzie zarezerwowany dla:';
$strings['N/A'] = 'N/A';
$strings['Update all recurring records in group'] = 'Uaktualniæ wszystkie powi¹zane rekordy w grupie?';
$strings['Delete?'] = 'Usun¹æ?';
$strings['Never'] = '-- Nigdy --';
$strings['Days'] = 'Dni';
$strings['Weeks'] = 'Tygodnie';
$strings['Months (date)'] = 'Miesi¹ce (data)';
$strings['Months (day)'] = 'Miesi¹ce (dzieñ)';
$strings['First Days'] = 'Pierwsze dni';
$strings['Second Days'] = 'Drugie dni';
$strings['Third Days'] = 'Trzecie dni';
$strings['Fourth Days'] = 'Czwarte dni';
$strings['Last Days'] = 'Ostatnie dni';
$strings['Repeat every'] = 'Powtarzaj co:';
$strings['Repeat on'] = 'Powtarzaj od:';
$strings['Repeat until date'] = 'Powtarzaj do daty:';
$strings['Choose Date'] = 'Wybierz datê';
$strings['Summary'] = 'Informacje';

$strings['View schedule'] = 'Widok terminów:';
$strings['My Reservations'] = 'Moje rezerwacje';
$strings['My Past Reservations'] = 'Moje przesz³e rezerwacje';
$strings['Other Reservations'] = 'Inne rezerwacje';
$strings['Other Past Reservations'] = 'Inne przesz³e rezerwacje';
$strings['Blacked Out Time'] = 'Czas niedostêpnoœci';
$strings['Set blackout times'] = 'Ustaw czas niedostêpnoœci dla %s na %s'; 
$strings['Reserve on'] = 'Zarezerwuj %s na %s';
$strings['Prev Week'] = '&laquo; Pop. tydzieñ';
$strings['Jump 1 week back'] = 'Skocz 1 tydzieñ wstecz';
$strings['Prev days'] = '&#8249; Poprz. %d dni';
$strings['Previous days'] = '&#8249; Poprz. %d dni';
$strings['This Week'] = 'Ten tydzieñ';
$strings['Jump to this week'] = 'Skocz do tego tygodnia';
$strings['Next days'] = 'Nast. %d dni &#8250;';
$strings['Next Week'] = 'Nast. tydzieñ &raquo;';
$strings['Jump To Date'] = 'Skocz do daty';
$strings['View Monthly Calendar'] = 'Obejrzyj miesiêczny kalendarz';
$strings['Open up a navigational calendar'] = 'Otwórz kalendarz nawigacyjny';

$strings['View stats for schedule'] = 'Zobacz statystyki dla terminu:';
$strings['At A Glance'] = 'Przegl¹d';
$strings['Total Users'] = 'Wszyscy u¿ytkownicy:';
$strings['Total Resources'] = 'Wszystkie zasoby:';
$strings['Total Reservations'] = 'Ca³kowite rezerwacje:';
$strings['Max Reservation'] = 'Maksymalna rezerwacja:';
$strings['Min Reservation'] = 'Najkrótsza rezerwacja:';
$strings['Avg Reservation'] = 'Œrednia rezerwacja:';
$strings['Most Active Resource'] = 'Najaktywniejszy zasób:';
$strings['Most Active User'] = 'Najaktywniejszy u¿ytkownik:';
$strings['System Stats'] = 'Statystyki systemu';
$strings['phpScheduleIt version'] = 'Wersja phpScheduleIt:';
$strings['Database backend'] = 'Proces t³a bazy danych:';
$strings['Database name'] = 'Nazwa bazy danych:';
$strings['PHP version'] = 'Wersja PHP:';
$strings['Server OS'] = 'System OS serwera:';
$strings['Server name'] = 'Nazwa serwera:';
$strings['phpScheduleIt root directory'] = 'Katalog g³ówny phpScheduleIt:';
$strings['Using permissions'] = 'U¿ywanie uprawnieñ:';
$strings['Using logging'] = 'U¿ywanie dziennika:';
$strings['Log file'] = 'Pik dziennika:';
$strings['Admin email address'] = 'Administracyjne adresy email:';
$strings['Tech email address'] = 'Techniczne adresy email:';
$strings['CC email addresses'] = 'Adresy email CC:';
$strings['Reservation start time'] = 'Pocz¹tek rezerwacji:';
$strings['Reservation end time'] = 'Koniec rezerwacji:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'Rezerwacje';
$strings['Return to top'] = 'Powrót do góry';
$strings['for'] = 'dla';

$strings['Select Search Criteria'] = 'Wybierz kryteria wyszukiwania';
$strings['Schedules'] = 'Terminy:';
$strings['All Schedules'] = 'Wszystkie terminy';
$strings['Hold CTRL to select multiple'] = 'Przytrzymaj CTRL aby wybraæ wiele pozycji';
$strings['Users'] = 'U¿ytkownicy:';
$strings['All Users'] = 'Wszyscy u¿ytkownicy';
$strings['Resources'] = 'Zasoby';		// @since 1.2.0
$strings['All Resources'] = 'Wszystkie zasoby';
$strings['Starting Date'] = 'Data pocz¹tkowa:';
$strings['Ending Date'] = 'Data koñcowa:';
$strings['Starting Time'] = 'Czas pocz¹tkowy:';
$strings['Ending Time'] = 'Czas koñcowy:';
$strings['Output Type'] = 'Typ wyjœcia:';
$strings['Manage'] = 'Zarz¹dzaj';
$strings['Total Time'] = 'Ca³kowity czas';
$strings['Total hours'] = 'W sumie godzin:';
$strings['% of total resource time'] = '% ca³kowitego czasu zasobów';
$strings['View these results as'] = 'Przejrzyj wyniki jako:';
$strings['Edit this reservation'] = 'Zmodyfikuj t¹ rezerwacjê';
$strings['Search Results'] = 'Rezultaty wyszukiwania';
$strings['Search Resource Usage'] = 'U¿ycie wyszkukiwarki';
$strings['Search Results found'] = 'Wyniki wyszukiwania: znaleziono %d rezerwacji';
$strings['Try a different search'] = 'Spróbuj wyszukaæ z innymi warunkami';
$strings['Search Run On'] = 'Wyszukiwanie na:';
$strings['Member ID'] = 'ID u¿ytkownika';
$strings['Previous User'] = '&laquo; Poprzedni u¿ytkownik';
$strings['Next User'] = 'Nastêpny u¿ytkownik &raquo;';

$strings['No results'] = 'No results';
$strings['That record could not be found.'] = 'Noe mo¿na znaleŸæ tego rekordu.';
$strings['This blackout is not recurring.'] = 'Ten czas niedostêpnoœci siê nie powtarza.';
$strings['This reservation is not recurring.'] = 'Ta rezerwacja siê nie powtarza.';
$strings['There are no records in the table.'] = 'Brak rekordów w tabeli %s.';
$strings['You do not have any reservations scheduled.'] = 'Nie masz ¿adnych zaplanowanych rezerwacji.';
$strings['You do not have permission to use any resources.'] = 'Nie masz uprawnieñ aby u¿ywaæ jakichkolwiek zasobów.';
$strings['No resources in the database.'] = 'Brak zasobów w bazie danych.';
$strings['There was an error executing your query'] = 'Wyst¹pi³ b³¹d przy przetwarzaniu polecenia:';

$strings['That cookie seems to be invalid'] = 'Ten plik cookie nie wygl¹da na prawid³owy';
$strings['We could not find that logon in our database.'] = 'Nie mo¿na znaleŸæ tego loginu w bazie danych.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'To has³o nie zgadza siê z has³em z bazy danych.';
$strings['You can try'] = '<br />Spróbuj:<br />Zarejestrowaæ adres email.<br />Or:<br />Ponowiæ próbê logowania.';
$strings['A new user has been added'] = 'Dodano nowego u¿ytkownika';
$strings['You have successfully registered'] = 'Rejestracja zakoñczona pomyœlnie!';
$strings['Continue'] = 'Kontynuuj...';
$strings['Your profile has been successfully updated!'] = 'Twój profil zosta³ poprawnie uaktualniony!';
$strings['Please return to My Control Panel'] = 'Wróæ do panelu sterowania';
$strings['Valid email address is required.'] = '- Wymagany jest poprawny adres email.';
$strings['First name is required.'] = '- Wymagane imiê.';
$strings['Last name is required.'] = '- Wymagane nazwisko.';
$strings['Phone number is required.'] = '- Wymagany numer telefonu.';
$strings['That email is taken already.'] = '- Ten adres email jest ju¿ u¿ywany.<br />Spróbuj ponownie z innym adresem email.';
$strings['Min 6 character password is required.'] = '- Potrzebna min. liczba %s znaków has³a.';
$strings['Passwords do not match.'] = '- Has³a nie s¹ zgodne.';

$strings['Per page'] = 'Na stronie:';
$strings['Page'] = 'Strona:';

$strings['Your reservation was successfully created'] = 'Pomyœlnie utworzono rejestracjê';
$strings['Your reservation was successfully modified'] = 'Pomyœlnie zmodyfikowano rejestracjê';
$strings['Your reservation was successfully deleted'] = 'Pomyœlnie usuniêto rejestracjê';
$strings['Your blackout was successfully created'] = 'Czas niedostêpnoœci zosta³ pomyœlnie utworzony';
$strings['Your blackout was successfully modified'] = 'Czas niedostêpnoœci zosta³ pomyœlnie zmodyfikowany';
$strings['Your blackout was successfully deleted'] = 'Czas niedostêpnoœci zosta³ pomyœlnie usuniêty';
$strings['for the follwing dates'] = 'dla nastêpuj¹cych dat:';
$strings['Start time must be less than end time'] = 'Czas rozpoczêcia musi byæ mniejszy ni¿ czas zakoñczenia.';
$strings['Current start time is'] = 'Aktualny czas rozpoczêcia:';
$strings['Current end time is'] = 'Aktualny czas zakoñczenia:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'D³ugoœæ czasu rezerwacji nie zgadza siê z dozwolon¹ d³ugoœci¹ rezerwacji tego zasobu.';
$strings['Your reservation is'] = 'Twoja rezerwacja to:';
$strings['Minimum reservation length'] = 'Minimalna d³ugoœæ rezerwacji:';
$strings['Maximum reservation length'] = 'Maksymalna d³ugoœæ rezerwacji:';
$strings['You do not have permission to use this resource.'] = 'Nie masz uprawnieñ do u¿ycia tego zasobu.';
$strings['reserved or unavailable'] = '%s do %s jest zarejestrowany lub niedostêpny.';	// @since 1.1.0
$strings['Reservation created for'] = 'Rezerwacja utworzona dla %s';
$strings['Reservation modified for'] = 'Rezerwacja zmodyfikowana dla %s';
$strings['Reservation deleted for'] = 'Rezerwacja usuniêta dla %s';
$strings['created'] = 'utworzona';
$strings['modified'] = 'zmieniona';
$strings['deleted'] = 'usuniêta';
$strings['Reservation #'] = 'Rezerwacja #';
$strings['Contact'] = 'Kontakt';
$strings['Reservation created'] = 'Utworzono rezerwacjê';
$strings['Reservation modified'] = 'Uaktualniono rezerwacjê';
$strings['Reservation deleted'] = 'Usuniêto rezerwacjê';

$strings['Reservations by month'] = 'Rezerwacje miesiêcznie';
$strings['Reservations by day of the week'] = 'Rezerwacje wed³ug dnia tygodnia';
$strings['Reservations per month'] = 'Rezerwacje miesiêcznie';
$strings['Reservations per user'] = 'Rezerwacje wed³ug u¿ytkownika';
$strings['Reservations per resource'] = 'Rezerwacje wed³ug zasobu';
$strings['Reservations per start time'] = 'Rezerwacje wed³ug czasu pocz¹tkowego';
$strings['Reservations per end time'] = 'Rezerwacje wed³ug czasu koñcowego';
$strings['[All Reservations]'] = '[Wszystkie rezerwacje]';

$strings['Permissions Updated'] = 'Uaktualniono uprawnienia';
$strings['Your permissions have been updated'] = 'Twoje uprawnienia %s zosta³y zaktualizowane';
$strings['You now do not have permission to use any resources.'] = 'Nie masz uprawnieñ do u¿ywania jakichkolwiek zasobów.';
$strings['You now have permission to use the following resources'] = 'Masz teraz uprawnienia do korzystania z nastêpuj¹cych zasobów:';
$strings['Please contact with any questions.'] = 'Skontaktuj siê z %s w przypadku jakichkolwiek kwestii.';
$strings['Password Reset'] = 'Reset has³a';

$strings['This will change your password to a new, randomly generated one.'] = 'Ta operacja zmieni has³o na nowe, losowo wygenerowane.';
$strings['your new password will be set'] = 'Po wprowadzeniu adresu email oraz klikniêciu "Zmiana has³a", Twoje nowe has³o zostanie ustawione w systemie i przes³ane Ci na adres email.';
$strings['Change Password'] = 'Zmiana has³a';
$strings['Sorry, we could not find that user in the database.'] = 'Niestety nie mo¿na znaleŸæ tego u¿ytkownika w bazie danych.';
$strings['Your New Password'] = 'Twoje nowe has³o %s';
$strings['Your new passsword has been emailed to you.'] = 'Sukces!<br />'
    			. 'Twoje nowe has³o zostanie Ci przes³ane.<br />'
    			. 'SprawdŸ swoj¹ skrzynkê pocztow¹ czy zawiera nowe has³o na nastêpnie <a href="index.php">Zaloguj siê</a>'
    			. ' za jego pomoc¹ i zmieñ je za poœrednictwem opcji &quot;Zmiana inoformacji profilu/has³a&quot;'
    			. ' znajduj¹cej siê w panelu sterowania.';

$strings['You are not logged in!'] = 'Nie jesteœ zalogowana/zalogowany!';

$strings['Setup'] = 'Konfiguracja';
$strings['Please log into your database'] = 'Zaloguj siê do swojej bazy danych';
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
$strings['There is no way to undo this action'] = 'Nie da siê cofn¹æ tej operacji!';
$strings['Click to proceed'] = 'Kliknij aby kontynuowaæ';
$strings['Please delete this file.'] = 'Proszê usun¹æ ten plik.';
$strings['Successful update'] = 'Aktualizacja powiod³a siê w pe³ni';
$strings['Patch completed successfully'] = 'Pomyœlne zakoñczenie aktualizacji ³aty';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'If no value is specified, the default password set in the config file will be used.';
$strings['Notify user that password has been changed?'] = 'Powiadamiaæ u¿ytkownika, ¿e has³o zosta³o zaktualizowane?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Ten system wymaga posiadania adresu email.';
$strings['Invalid User Name/Password.'] = 'Nieprawid³owa nazwa u¿ytkownika/has³o.';
$strings['Pending User Reservations'] = 'Oczekuj¹ce rezerwacje u¿ytkowników';
$strings['Approve'] = 'Zaakceptuj';
$strings['Approve this reservation'] = 'Akceptacja tej rezerwacji';
$strings['Approve Reservations'] ='Akceptacja rezerwacji';

$strings['Announcement'] = 'Powiadomienie';
$strings['Number'] = 'Liczba';
$strings['Add Announcement'] = 'Dodaj powiadomienie';
$strings['Edit Announcement'] = 'Zmodyfikuj powiadomienie';
$strings['All Announcements'] = 'Wszystkie powiadomienia';
$strings['Delete Announcements'] = 'Usuñ powiadomienia';
$strings['Use start date/time?'] = 'U¿yæ pocz¹tkowej daty/czasu?';
$strings['Use end date/time?'] = 'U¿yæ koñcowej daty/czasu?';
$strings['Announcement text is required.'] = 'Tekst powiadomienia jest wymagany.';
$strings['Announcement number is required.'] = 'Numer powiadomienia jest wymagany.';

$strings['Pending Approval'] = 'Oczekuj¹ce akceptacje';
$strings['My reservation is approved'] = 'Moja rezerwacja zosta³a zaakceptowana';
$strings['This reservation must be approved by the administrator.'] = 'Ta rezerwacja musi zostaæ zaakceptowana przez administratora.';
$strings['Approval Required'] = 'Wymagana akceptacja';
$strings['No reservations requiring approval'] = 'Brak rezerwacji wymagaj¹cych akceptacji';
$strings['Your reservation was successfully approved'] = 'Twoja rezerwacja zosta³a pomyœlnie zaakceptowana';
$strings['Reservation approved for'] = 'Zaakceptowano rezerwacjê dla %s';
$strings['approved'] = 'zaakceptowane';
$strings['Reservation approved'] = 'Rezerwacja zaakceptowana';

$strings['Valid username is required'] = 'Wymagana jest poprawna nazwa u¿ytkownika';
$strings['That logon name is taken already.'] = 'Ta nazwa u¿ytkownika jest ju¿ zajêta.';
$strings['this will be your login'] = '(to bêdzie Twój login)';
$strings['Logon name'] = 'Nazwa u¿ytkownika';
$strings['Your logon name is'] = 'Twój login to %s';

$strings['Start'] = 'Pocz¹tek';
$strings['End'] = 'Koniec';
$strings['Start date must be less than or equal to end date'] = 'Data pocz¹tkowa musi byæ wczeœniejsza lub równa dacie koñcowej';
$strings['That starting date has already passed'] = 'Ta data pocz¹tkowa ju¿ minê³a';
$strings['Basic'] = 'Podstawowy';
$strings['Participants'] = 'Cz³onkowie';
$strings['Close'] = 'Zamknij';
$strings['Start Date'] = 'Data pocz.';
$strings['End Date'] = 'Data koñc.';
$strings['Minimum'] = 'Minimum';
$strings['Maximum'] = 'Maksimum';
$strings['Allow Multiple Day Reservations'] = 'Mo¿liwe wielokrotne rezerwacje';
$strings['Invited Users'] = 'Zaproszeni u¿ytkownicy';
$strings['Invite Users'] = 'Zaproœ u¿ytkowników';
$strings['Remove Participants'] = 'Usuñ wspó³u¿ytkowników';
$strings['Reservation Invitation'] = 'Zaproszenie do rezerwacji';
$strings['Manage Invites'] = 'Zarz¹dzaj zaproszeniami';
$strings['No invite was selected'] = 'Nie wybrano zaproszenia';
$strings['reservation accepted'] = 'U¿ytkownik %s zaakceptowa³ twoje zaproszenie na %s';
$strings['reservation declined'] = 'U¿ytkownik %s odrzuci³ twoje zaproszenie na %s';
$strings['Login to manage all of your invitiations'] = 'Zaloguj siê aby zarz¹dzaæ wszystkimi swoimi zaproszeniami';
$strings['Reservation Participation Change'] = 'Zmiana wspó³udzia³u rezerwacji';
$strings['My Invitations'] = 'Moje zaproszenia';
$strings['Accept'] = 'Zaakceptuj';
$strings['Decline'] = 'Odrzuæ';
$strings['Accept or decline this reservation'] = 'Zaakceptuj lub odrzuæ t¹ rezerwacjê';
$strings['My Reservation Participation'] = 'Mój udzia³ w rezerwacjach';
$strings['End Participation'] = 'Zakoñcz udzia³';
$strings['Owner'] = 'W³aœciciel';
$strings['Particpating Users'] = 'U¿ytkownicy bior¹cy udzia³';
$strings['No advanced options available'] = 'Brak opcji zaawansowanych';
$strings['Confirm reservation participation'] = 'PotwierdŸ udzia³ w rezerwacji';
$strings['Confirm'] = 'PotwierdŸ';
$strings['Do for all reservations in the group?'] = 'Zrobiæ to samo ze wszystkimi rezerwacjami w grupie?';

$strings['My Calendar'] = 'Mój kalendarz';
$strings['View My Calendar'] = 'Zobacz mój kalendarz';
$strings['Participant'] = 'Cz³onek';
$strings['Recurring'] = 'Powtórzenie';
$strings['Multiple Day'] = 'Wiele dni';
$strings['[today]'] = '[dzisiaj]';
$strings['Day View'] = 'Widok dzienny';
$strings['Week View'] = 'Widok tygodniowy';
$strings['Month View'] = 'Widok miesiêczny';
$strings['Resource Calendar'] = 'Kalendarz zasobów';
$strings['View Resource Calendar'] = 'Kalendarz terminów';	// @since 1.2.0
$strings['Signup View'] = 'Widok logowania';

$strings['Select User'] = 'Wybierz u¿ytkownika';
$strings['Change'] = 'Zmieñ';

$strings['Update'] = 'Uaktualnij';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'Aktualizacja phpScheduleIt Update jest dostêpna dopiero od wersji 1.0.0 lub wy¿szych';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt jest w najnowszej wersji';
$strings['Migrating reservations'] = 'Migrowanie rezerwacji';

$strings['Admin'] = 'Administracja';
$strings['Manage Announcements'] = 'Powiadomienia';
$strings['There are no announcements'] = 'Brak powiadomieñ';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maksymalna pojemnoœæ udzia³u';
$strings['Leave blank for unlimited'] = 'Puste pole przy braku ograniczeñ';
$strings['Maximum of participants'] = 'Ten zasób posiada maksymaln¹ pojemnoœæ %s dla osób';
$strings['That reservation is at full capacity.'] = 'Ta rezerwacja ma ju¿ pe³n¹ pojemnoœæ.';
$strings['Allow registered users to join?'] = 'Pozwoliæ zarejestrowanym u¿ytkownikom przy³¹czyæ siê?';
$strings['Allow non-registered users to join?'] = 'Pozwoliæ niezarejestrowanym u¿ytkownikom przy³¹czyæ siê??';
$strings['Join'] = 'Przy³¹cz';
$strings['My Participation Options'] = 'Opcje mojego udzia³u';
$strings['Join Reservation'] = 'Po³¹cz rezerwacjê';
$strings['Join All Recurring'] = 'Po³¹cz wszystkie powtórzenia';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'You are not participating on the following reservation dates because they are at full capacity.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'You are already invited to this reservation. Please follow participation instructions previously sent to your email.';
$strings['Additional Tools'] = 'Dodatkowe narzêdzia';
$strings['Create User'] = 'Utwórz u¿ytkownika';
$strings['Check Availability'] = 'SprawdŸ dostêpnoœæ';
$strings['Manage Additional Resources'] = 'Zarz¹dzaj sprzêtem';
$strings['All Additional Resources'] = 'Ca³e wyposa¿enie';
$strings['Number Available'] = 'Dostêpna liczba';
$strings['Unlimited'] = 'Bez ograniczeñ';
$strings['Add Additional Resource'] = 'Dodaj sprzêt';
$strings['Edit Additional Resource'] = 'Modyfikuj sprzêt';
$strings['Checking'] = 'Sprawdzanie';
$strings['You did not select anything to delete.'] = 'Nie wybrano pozycji do usuniêcia.';
$strings['Added Resources'] = 'Dodane zasoby';
$strings['Additional resource is reserved'] = 'Dodatkowy zasób %s posiada dostêpnych tylko %s w tym czasie';
$strings['All Groups'] = 'Wszystkie grupy';
$strings['Group Name'] = 'Nazwa grupy';
$strings['Delete Groups'] = 'Usuñ grupy';
$strings['Manage Groups'] = 'Zarz¹dzanie grupami';
$strings['None'] = 'Brak';
$strings['Group name is required.'] = 'Nazwa grupy jest wymagana.';
$strings['Groups'] = 'Grupy';
$strings['Current Groups'] = 'Aktualne grupy';
$strings['Group Administration'] = 'Administracja grupami';
$strings['Reminder Subject'] = 'Przypomnienie o rezerwacji- %s, %s %s';
$strings['Reminder'] = 'Przypomnienie';
$strings['before reservation'] = 'przed rezerwacj¹';
$strings['My Participation'] = 'Mój udzia³';
$strings['My Past Participation'] = 'Mój przesz³y udzia³';
$strings['Timezone'] = 'Strefa czasowa';
$strings['Export'] = 'Wyeksportuj';
$strings['Select reservations to export'] = 'Wybierz rezerwacje do wyeksportowania';
$strings['Export Format'] = 'Format eksportu';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Ten zasób nie mo¿e zostaæ zarezerwowany mniej ni¿ %s godzin naprzód';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Ten zasób nie mo¿e zostaæ zarejestrowany wczeœniej ni¿ %s godzin naprzód';
$strings['Minimum Booking Notice'] = 'Uwaga o minimalnym czasie rezerwacji';
$strings['Maximum Booking Notice'] = 'Uwaga o maksymalnym czasie rezerwacji';
$strings['hours prior to the start time'] = 'godzin przed pocz¹tkiem';
$strings['hours from the current time'] = 'godzin od aktualnego czasu';
$strings['Contains'] = 'Zawiera';
$strings['Begins with'] = 'Zaczyna siê od';
$strings['Minimum booking notice is required.'] = 'Uwaga o minimalnym czasie rezerwacji jest wymagana.';
$strings['Maximum booking notice is required.'] = 'Uwaga o maksymalnym czasie rezerwacji jest wymagana.';
$strings['Accessory Name'] = 'Nazwa sprzêtu';
$strings['Accessories'] = 'Sprzêt';
$strings['All Accessories'] = 'Dostêpny sprzêt';
$strings['Added Accessories'] = 'Dodany sprzêt';
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
				. "U¿ytkownik zosta³ dodany z nastêpuj¹cymi informacjami\r\n"
				. "Login: %s\r\n"
				. "Nazwa: %s %s \r\n"
				. "Telefon: %s \r\n"
				. "Instytucja: %s \r\n"
				. "Pozycja: %s \r\n\r\n"
				. "Proszê siê zalogowaæ pod tym adresem:\r\n"
				. "%s \r\n\r\n"
				. "Mo¿na znaleŸæ odnoœniki do internetowego terminarza aby zaktualizowaæ swój profil w Panelu administracyjnym.\r\n\r\n"
				. "Wszelkie pytania dotycz¹ce zasobów lub rezerwacji kierowaæ do %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administratorze,\r\n\r\n"
					. "Nowy u¿ytkownik z nastêpuj¹cymi informacjami:\r\n"
					. "Email: %s \r\n"
					. "Nazwa: %s %s \r\n"
					. "Telefon: %s \r\n"
					. "Instytucja: %s \r\n"
					. "Pozycja: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Pusiadasz pomyœlnie %s rezerwacjê #%s.\r\n\r\n<br/><br/>"
			. "U¿yj tego numeru rezerwacji podczas kontaktu z administratorem lub w razie posiadania jakichœ pytañ.\r\n\r\n<br/><br/>"
			. "Rezerwacja pomiêdzy %s %s i %s %s dla %s"
			. " opisana jako %s zosta³a %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Ta rezerwacja zosta³a powtórzona dla nastêpuj¹cych dat:\r\n<br/>";
$email['reservation_activity_3'] = "Wszystkie powtórzone rezerwacje w tej grupie s¹ tak¿e %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Poni¿sze zestawienie zosta³o wypisane dla tej rezerwacji:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Jeœli to b³¹d, skontaktuj siê z administratorem pod adresem: %s"
			. " lub telefonicznie pod numerem %s.\r\n\r\n<br/><br/>"
			. "Mo¿na przejrzeæ lub zmodyfikowaæ dowoln¹ informacjê w dowolnym czasie poprzez "
			. " zalogowanie siê do %s pod adresem:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Kwestie techniczne nale¿y kierowaæ do: <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Rezerwacja #%s zosta³a zaakceptowana.\r\n\r\n<br/><br/>"
			. "U¿yj tego numeru rejestracyjnego podczas kontaktu z administratorem.\r\n\r\n<br/><br/>"
			. "Rezerwacja pomiêdzy %s %s oraz %s %s dla %s"
			. " opisana jako %s zosta³a %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Twoje has³o %s zosta³o zresetowane przez administratora.\r\n\r\n"
			. "Twoje has³o tymczasowe to:\r\n\r\n %s\r\n\r\n"
			. "U¿yj tego tymczasowego has³a (skopiuj i wklej aby siê upewniæ, ¿e jest ono poprawne) i zaloguj siê na %s pod adresem %s"
			. " nastêpnie natychmiast zmieñ to has³o przy u¿yciu zak³adki 'Edycja profilu' w tabeli Odnoœniki.\r\n\r\n"
			. "Skontaktuj siê z administratorem %s w razie w¹tpliwoœci.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Twoje nowe has³o dla konta %s zosta³o:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Zaloguj siê pod adres %s "
            . "za pomoc¹ tego has³a "
            . "(skopiuj je i wklej aby siê upewniæ, ¿e jest poprawne) "
            . "i zmieñ to has³o poprzez klikniêcie opcji "
            . "Edycja profilu "
            . "znajduj¹c¹ siê w panelu sterowania.\r\n\r\n"
            . "Wszystkie pytania kieruj bezpoœrednio na adres %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "U¿ytkownik %s zaprosi³ Ciê do udzia³u w poni¿szej rezerwacji:\r\n\r\n"
		. "Zasób: %s\r\n"
		. "Data rozpoczêcia: %s\r\n"
		. "Czas rozpoczêcia: %s\r\n"
		. "Data zakoñczenia: %s\r\n"
		. "Czas zakoñczenia: %s\r\n"
		. "Podsumowanie: %s\r\n"
		. "Powtarzaj¹ce siê daty (jeœli obecne): %s\r\n\r\n"
		. "Aby zaakceptowaæ to zaproszenie kliknij ten link (skopiuj i wklej jeœli jest podœwietlony) %s\r\n"
		. "Aby odrzuciæ to zaproszenie kliknij ten link (skopiuj i wklej jeœli jest podœwietlony) %s\r\n"
		. "Aby zaakceptowaæ wybrane daty i zarz¹dzaæ swoimi zaproszeniami w czasie póŸniejszym, zaloguj siê do systemu %s pod adresem %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Usuniêto nastêpuj¹c¹ rezerwacjê:\r\n\r\n"
		. "Zasób: %s\r\n"
		. "Data rozpoczêcia: %s\r\n"
		. "Czas rozpoczêcia: %s\r\n"
		. "Data zakoñczenia: %s\r\n"
		. "Czas zakoñczenia: %s\r\n"
		. "Podsumowanie: %s\r\n"
		. "Powtarzaj¹ce siê daty (jeœli obecne): %s\r\n\r\n";	

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Twoja rezerwacja dla %s od %s %s do %s %s wkrótce siê zbli¿a.";
?>