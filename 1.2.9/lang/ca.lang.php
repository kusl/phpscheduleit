<?php
/**
* Catalan (ca) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Francisco Martínez Espadas <fmartinez@tarragona.cat>
* @version 04-04-2007
* @package Languages
*/
// Copyright (C) 2003 - 2005 phpScheduleIt
// License: GPL, see LICENSE
//
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
$days_full = array('Diumenge', 'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 'Divendres', 'Dissabte');
// The three letter abbreviation
$days_abbr = array('Dg', 'Dl', 'Dm', 'Dc', 'Dj', 'Dv', 'Ds');
// The two letter abbreviation
$days_two  = array('Dg', 'Dl', 'Dm', 'Dc', 'Dj', 'Dv', 'Ds');
// The one letter abbreviation
$days_letter = array('Dg', 'Dl', 'Dm', 'Dc', 'Dj', 'Dv', 'Ds');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Gener', 'Febrer', 'Març', 'Abril', 'Maig', 'Juny', 'Juliol', 'Agost', 'Setembre', 'Octubre', 'Novembre', 'Desembre');
// The three letter month name
$months_abbr = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Des');

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
$strings['hours'] = 'hores';
$strings['minutes'] = 'minuts';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'aaaa';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Administrador';
$strings['Welcome Back'] = 'Benvingut de nou, %s';
$strings['Log Out'] = 'Sortir';
$strings['My Control Panel'] = 'La Meva Pàgina d\'Inici';
$strings['Help'] = 'Ajuda (està en anglès)';
$strings['Manage Schedules'] = 'Gestiona els calendaris';
$strings['Manage Users'] = 'Gestiona els usuaris';
$strings['Manage Resources'] = 'Gestiona els recursos';
$strings['Manage User Training'] = 'Gestiona l\'entranament dels Usuaris';
$strings['Manage Reservations'] = 'Gestiona les reserves';
$strings['Email Users'] = 'Email a Usuaris';
$strings['Export Database Data'] = 'Exporta les dades de la base de dades';
$strings['Reset Password'] = 'Suprimeix la contrasenya';
$strings['System Administration'] = 'Administració del sistema';
$strings['Successful update'] = 'L\'actualització s\'ha realitzat satisfactòriament';
$strings['Update failed!'] = 'No s\'ha pogut realitzar l\'actualització !';
$strings['Manage Blackout Times'] = 'Gestiona el temps de descans';
$strings['Forgot Password'] = 'Has oblidat la contrasenya?';
$strings['Manage My Email Contacts'] = 'Gestiona els meus correus electrònics de contacte';
$strings['Choose Date'] = 'Escull una data';
$strings['Modify My Profile'] = 'Modifica el meu perfil d\'usuari';
$strings['Register'] = 'Registra';
$strings['Processing Blackout'] = 'S\'està processant el temps de descans';
$strings['Processing Reservation'] = 'S\'està processant la reserva';
$strings['Online Scheduler [Read-only Mode]'] = 'Calendari en xarxa [Mode de lectura]';
$strings['Online Scheduler'] = 'Calendari en xarxa';
$strings['phpScheduleIt Statistics'] = 'Estadístiques de phpScheduleIt ';
$strings['User Info'] = 'Informació de l\'usuari:';

$strings['Could not determine tool'] = 'No s\'ha pogut determinar el recurs. Torna a "La Meva Pàgina d\'Inici" i proveu-ho de nou.';
$strings['This is only accessable to the administrator'] = 'Només és accessible per l\'administrador';
$strings['Back to My Control Panel'] = 'Torna a "La Meva Pàgina d\'Inici"';
$strings['That schedule is not available.'] = 'Aquest calendari no és disponible';
$strings['You did not select any schedules to delete.'] = 'No heu seleccionat cap calendari per suprimir.';
$strings['You did not select any members to delete.'] = 'No heu seleccionat cap membre per suprimir.';
$strings['You did not select any resources to delete.'] = 'No heu seleccionat cap recurs per suprimir';
$strings['Schedule title is required.'] = 'Es necessita el nom del calendari';
$strings['Invalid start/end times'] = 'Inici o final invàlids';
$strings['View days is required'] = 'Es necessita visualitzar els dies';
$strings['Day offset is required'] = 'Day offset is required';
$strings['Admin email is required'] = 'Es necessita el correu electrònic de l\'administrador';
$strings['Resource name is required.'] = 'Es necessita el nom del recurs';
$strings['Valid schedule must be selected'] = 'S\'ha de seleccionar un calendari vàlid';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Minimum reservation length must be less than or equal to maximum reservation length.';
$strings['Your request was processed successfully.'] = 'La vostra demanda s\'ha processat satisfactòriament';
$strings['Go back to system administration'] = 'Torna a l\'administració del sistema';
$strings['Or wait to be automatically redirected there.'] = 'O espereu a que se us redireccioni aquí.';
$strings['There were problems processing your request.'] = 'Hem tingut problemes processant la seva demanda.';
$strings['Please go back and correct any errors.'] = 'Si us plau torneu enrera i corregiu els errors';
$strings['Login to view details and place reservations'] = 'Entreu per visualitzar els detalls i els llocs de reserva';
$strings['Memberid is not available.'] = 'L\'identitat de l\'usuari: %s no està disponible.';

$strings['Schedule Title'] = 'Títol del calendari';
$strings['Start Time'] = 'Inici';
$strings['End Time'] = 'Final';
$strings['Time Span'] = 'Temps d\'obertura';
$strings['Weekday Start'] = 'La setmana comença';
$strings['Admin Email'] = 'Correu electrònic de l\'adiministrador';

$strings['Default'] = 'Defecte';
$strings['Reset'] = 'Reinicia';
$strings['Edit'] = 'Edita';
$strings['Delete'] = 'Suprimeix';
$strings['Cancel'] = 'Cancel·la';
$strings['View'] = 'Visualitza';
$strings['Modify'] = 'Modifica';
$strings['Save'] = 'Desa';
$strings['Back'] = 'Enrera';
$strings['Next'] = 'Següent';
$strings['Close Window'] = 'Tanca la finestra';
$strings['Search'] = 'Cerca';
$strings['Clear'] = 'Buida';

$strings['Days to Show'] = 'Dies per mostrar';
$strings['Reservation Offset'] = 'Reservation Offset';
$strings['Hidden'] = 'Amagat';
$strings['Show Summary'] = 'Mostra el sumari';
$strings['Add Schedule'] = 'Afegeix un calendari';
$strings['Edit Schedule'] = 'Edita un calendari';
$strings['No'] = 'No';
$strings['Yes'] = 'Sí';
$strings['Name'] = 'Nom';
$strings['First Name'] = 'Nom';
$strings['Last Name'] = 'Cognoms';
$strings['Resource Name'] = 'Nom del recurs';
$strings['Email'] = 'Adreça electrònica';
$strings['Institution'] = 'Institució';
$strings['Phone'] = 'Telèfon';
$strings['Password'] = 'Contrasenya';
$strings['Permissions'] = 'Permisos';
$strings['View information about'] = 'Visualitza l\'informació sobre %s %s';
$strings['Send email to'] = 'Envia un correu electrònic a %s %s';
$strings['Reset password for'] = 'Esborra la contrasenya de %s %s';
$strings['Edit permissions for'] = 'Edita els permisos de %s %s';
$strings['Position'] = 'Posició';
$strings['Password (6 char min)'] = 'Contrasenya (mínim %s caràcters)';
$strings['Re-Enter Password'] = 'Escriviu de nou la contrasenya';

$strings['Sort by descending last name'] = 'Ordena, de forma descendent, per cognom';
$strings['Sort by descending email address'] = 'Ordena, de forma descendent, per adreça electrònica';
$strings['Sort by descending institution'] = 'Ordena, de forma descendent, per institució';
$strings['Sort by ascending last name'] = 'Ordena, de forma ascendent, per cognom';
$strings['Sort by ascending email address'] = 'Ordena, de forma ascendent, per adreça electrònica';
$strings['Sort by ascending institution'] = 'Ordena, de forma ascendent, per institució';
$strings['Sort by descending resource name'] = 'Ordena, de forma descendent per nom de recurs';
$strings['Sort by descending location'] = 'Ordena, de forma decendent, per ubicació';
$strings['Sort by descending schedule title'] = 'Ordena, de formas descendent, per nom de calendari';
$strings['Sort by ascending resource name'] = 'Ordena, de forma ascendent, per nom';
$strings['Sort by ascending location'] = 'Ordena, de forma ascendent, per ubicació';
$strings['Sort by ascending schedule title'] = 'Ordena, de forma ascendent per nom de calendari';
$strings['Sort by descending date'] = 'Ordena, de forma descendent, per data';
$strings['Sort by descending user name'] = 'Ordena, de forma descendent, per nom d\'usuari';
$strings['Sort by descending start time'] = 'Ordena, de forma descendent, per data d\'inici';
$strings['Sort by descending end time'] = 'Ordena, de forma descendent, per data de fi';
$strings['Sort by ascending date'] = 'Ordena, de forma ascendent, per data';
$strings['Sort by ascending user name'] = 'Ordena, de forma ascendent, per nom d\'usuari';
$strings['Sort by ascending start time'] = 'Ordena, de forma ascendent, per data d\'inici';
$strings['Sort by ascending end time'] = 'Ordena, de forma ascendent, per data d\'inici';
$strings['Sort by descending created time'] = 'Ordena, de forma descendent, per data de creació';
$strings['Sort by ascending created time'] = 'Ordena, de forma ascendent, per data de creació';
$strings['Sort by descending last modified time'] = 'Ordena, de forma descendent, per data de modificació';
$strings['Sort by ascending last modified time'] = 'Ordena, de forma ascendent, per data de modificació';

$strings['Search Users'] = 'Cercar Usuaris';
$strings['Location'] = 'Lloc';
$strings['Schedule'] = 'Horari';
$strings['Phone'] = 'Telèfon';
$strings['Notes'] = 'Notes';
$strings['Status'] = 'Estat';
$strings['All Schedules'] = 'Tots els horaris';
$strings['All Resources'] = 'Tots els recursos';
$strings['All Users'] = 'Tots els usuaris';

$strings['Edit data for'] = 'Editar la informació de %s';
$strings['Active'] = 'Actiu';
$strings['Inactive'] = 'Inactiu';
$strings['Toggle this resource active/inactive'] = 'Cambiar aquest recurs entre actiu/inactiu';
$strings['Minimum Reservation Time'] = 'Temps mínim de reserva';
$strings['Maximum Reservation Time'] = 'Temps màxim de reserva';
$strings['Auto-assign permission'] = 'Permís d\'Auto-Asignació';
$strings['Add Resource'] = 'Afegir un recurs';
$strings['Edit Resource'] = 'Editar un recurs';
$strings['Allowed'] = 'Permès';
$strings['Notify user'] = 'Notificar a l\'usuari';
$strings['User Reservations'] = 'Reserves d\'usuari';
$strings['Date'] = 'Data';
$strings['User'] = 'Usuari';
$strings['Email Users'] = 'Enviar un email als usuaris';
$strings['Subject'] = 'Assumpte';
$strings['Message'] = 'Missatge';
$strings['Please select users'] = 'Selecciona als usuaris';
$strings['Send Email'] = 'Enviar Email';
$strings['problem sending email'] = 'Va haver un problema enviant l\'email. Si us plau, intente-ho més endavant.';
$strings['The email sent successfully.'] = 'L\'email s\'ha enviat correctament.';
$strings['do not refresh page'] = 'Si us plau <u>no</u> actualitzis aquesta pàgina. Si ho fas tornaràs a enviar l\'email un altre vegada.';
$strings['Return to email management'] = 'Tornar a l\'administració d\'emails';
$strings['Please select which tables and fields to export'] = 'Indica quines taules i camps vols exportar:';
$strings['all fields'] = '- tots els camps -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Text Simple';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Exportar Dades';
$strings['Reset Password for'] = 'Restablir Password per %s';
$strings['Please edit your profile'] = 'Modifica el teu perfil';
$strings['Please register'] = 'Si us plau, Registra\'t';
$strings['Email address (this will be your login)'] = 'Adreça d\'email (Aquest serà el teu nom d\'usuari)';
$strings['Keep me logged in'] = 'Mantenir oberta la sessió <br/>(requereix cookies)';
$strings['Edit Profile'] = 'Editar el perfil';
$strings['Register'] = 'Registrar';
$strings['Please Log In'] = 'Si us plau, inicia la sessió';
$strings['Email address'] = 'Adreça d\'email';
$strings['Password'] = 'Password';
$strings['First time user'] = 'Usuari per primera vegada?';
$strings['Click here to register'] = 'Fes clic aquí per registrar-te';
$strings['Register for phpScheduleIt'] = 'Registrar a Tarraco Recursos';
$strings['Log In'] = 'Iniciar sessió';
$strings['View Schedule'] = 'Veure Agenda';
$strings['View a read-only version of the schedule'] = 'Veure Agenda - Només Consulta';
$strings['I Forgot My Password'] = 'He oblidat el meu password';
$strings['Retreive lost password'] = 'Recuperar el password oblidat';
$strings['Get online help'] = 'Get online help';
$strings['Language'] = 'Idioma';
$strings['(Default)'] = '(per defecte)';

$strings['My Announcements'] = 'Els meus Anuncis';
$strings['My Reservations'] = 'Les meves Reserves';
$strings['My Permissions'] = 'Els meus Permisos';
$strings['My Quick Links'] = 'Els meus links';
$strings['Announcements as of'] = 'Anuncis per a %s';
$strings['There are no announcements.'] = 'No hi han anuncis.';
$strings['Resource'] = 'Recursos';
$strings['Created'] = 'Creat';
$strings['Last Modified'] = 'Modificat per última vegada';
$strings['View this reservation'] = 'Veure aquesta reserva';
$strings['Modify this reservation'] = 'Modificar aquesta reserva';
$strings['Delete this reservation'] = 'Eliminar aquesta reserva';
$strings['Bookings'] = 'Reserves';
$strings['Change My Profile Information/Password'] = 'Cambiar perfil';
$strings['Manage My Email Preferences'] = 'Preferencies d\'email';
$strings['Mass Email Users'] = 'Enviar un email a tots els usuaris';
$strings['Search Scheduled Resource Usage'] = 'Buscar reserves';
$strings['Export Database Content'] = 'Exportar el contingut de la Base de Dades';
$strings['View System Stats'] = 'Veure Estadístiques del Sistema';
$strings['Email Administrator'] = 'Enviar un Email a l\'Administrador';

$strings['Email me when'] = 'Enviar un email quan:';
$strings['I place a reservation'] = 'Faig una reserva';
$strings['My reservation is modified'] = 'La meva reserva s\'ha modificat';
$strings['My reservation is deleted'] = 'La meva reserva s\'ha eliminat';
$strings['I prefer'] = 'Prefereixo:';
$strings['Your email preferences were successfully saved'] = 'Les seves preferencies d\'email han estat guardades!';
$strings['Return to My Control Panel'] = 'Tornar a l\'Inici';

$strings['Please select the starting and ending times'] = 'Assenyala les dates inici i final:';
$strings['Please change the starting and ending times'] = 'Modifica les dates inici i final:';
$strings['Reserved time'] = 'Temps Reservat:';
$strings['Minimum Reservation Length'] = 'Temps Mínim de Reserva:';
$strings['Maximum Reservation Length'] = 'Temps Màxim de Reserva:';
$strings['Reserved for'] = 'Reservat per a:';
$strings['Will be reserved for'] = 'Estarà reservat per a:';
$strings['N/A'] = 'N/D';
$strings['Update all recurring records in group'] = 'Actualitzar tots els registres recurrents a la vegada?';
$strings['Delete?'] = 'Eliminar?';
$strings['Never'] = '-- Mai --';
$strings['Days'] = 'Dias';
$strings['Weeks'] = 'Semanes';
$strings['Months (date)'] = 'Mesos (data)';
$strings['Months (day)'] = 'Mesos (dia)';
$strings['First Days'] = 'Primer Dia';
$strings['Second Days'] = 'Segon Dia';
$strings['Third Days'] = 'Tercer Dia';
$strings['Fourth Days'] = 'Quart Dia';
$strings['Last Days'] = 'Últim Dia';
$strings['Repeat every'] = 'Repetir cada:';
$strings['Repeat on'] = 'Repetir en:';
$strings['Repeat until date'] = 'Repetir fins a aquesta data:';
$strings['Choose Date'] = 'Escollir Data';
$strings['Summary'] = 'Descripció';

$strings['View schedule'] = 'Veure Agenda:';
$strings['My Reservations'] = 'Les Meves Reserves';
$strings['My Past Reservations'] = 'Les Meves Reserves Passades';
$strings['Other Reservations'] = 'Altres Reserves';
$strings['Other Past Reservations'] = 'Altres Reserves Passades';
$strings['Blacked Out Time'] = 'Temps Mort';
$strings['Set blackout times'] = 'Establir Temps Mort per a %s en %s'; 
$strings['Reserve on'] = 'Reservar %s en %s';
$strings['Prev Week'] = '&laquo; Setmana Ant.';
$strings['Jump 1 week back'] = 'Anar 1 Semana enrere';
$strings['Prev days'] = '&#8249; %d dies abans';
$strings['Previous days'] = '&#8249; %d dies anteriors';
$strings['This Week'] = 'Aquesta Setmana';
$strings['Jump to this week'] = 'Anar a aquesta Setmana';
$strings['Next days'] = '%d dies següents &#8250;';
$strings['Next Week'] = 'següent setmana &raquo;';
$strings['Jump To Date'] = 'Anar a una Data';
$strings['View Monthly Calendar'] = 'Veure el Calendari Mensual';
$strings['Open up a navigational calendar'] = 'Obrir un Calendari per a Navegar';

$strings['View stats for schedule'] = 'Veure Estadístiques de l\'horari:';
$strings['At A Glance'] = 'Resumint';
$strings['Total Users'] = 'Total d\'Usuaris:';
$strings['Total Resources'] = 'Recursos Total:';
$strings['Total Reservations'] = 'Reserves Total:';
$strings['Max Reservation'] = 'Reserva Màxima:';
$strings['Min Reservation'] = 'Reserva Mínima:';
$strings['Avg Reservation'] = 'Promig de Reserva:';
$strings['Most Active Resource'] = 'Recurs més Actiu:';
$strings['Most Active User'] = 'Usuari més Actiu:';
$strings['System Stats'] = 'Estadístiques del Sistema';
$strings['phpScheduleIt version'] = 'Versió de phpScheduleIt:';
$strings['Database backend'] = 'Base de Dades:';
$strings['Database name'] = 'Nom de la Base de Dades:';
$strings['PHP version'] = 'Versió de PHP:';
$strings['Server OS'] = 'Sistema Operatiu del Servidor:';
$strings['Server name'] = 'Nom del Servidor:';
$strings['phpScheduleIt root directory'] = 'Directory arrel phpScheduleIt:';
$strings['Using permissions'] = 'Permisos d\'Ús:';
$strings['Using logging'] = 'Log d\'Ús:';
$strings['Log file'] = 'Arxiu de Log:';
$strings['Admin email address'] = 'Adreça email de l\'Administrador:';
$strings['Tech email address'] = 'Adreça email del Tècnic:';
$strings['CC email addresses'] = 'Adreces email per a copies (CC):';
$strings['Reservation start time'] = 'Hora inicial de reserva:';
$strings['Reservation end time'] = 'Hora final de reserva:';
$strings['Days shown at a time'] = 'Dies mostrats a la vegada:';
$strings['Reservations'] = 'Reserves';
$strings['Return to top'] = 'Torna a dalt';
$strings['for'] = 'per a ';

$strings['Select Search Criteria'] = 'Criteria de cerca';
$strings['Schedules'] = 'Horaris:';
$strings['All Schedules'] = 'Tots els Horaris';
$strings['Hold CTRL to select multiple'] = 'Manté la tecla CTRL pressionada per a seleccionar varis';
$strings['Users'] = 'Usuaris:';
$strings['All Users'] = 'Tots els Usuaris';
$strings['Resources'] = 'Recursos:';
$strings['All Resources'] = 'Tots els Recursos';
$strings['Starting Date'] = 'Data d\'Inici:';
$strings['Ending Date'] = 'Data Final:';
$strings['Starting Time'] = 'Hora d\'Inici:';
$strings['Ending Time'] = 'Hora Final:';
$strings['Output Type'] = 'Tipus de sortida:';
$strings['Manage'] = 'Administrar';
$strings['Total Time'] = 'Temps Total';
$strings['Total hours'] = 'Hores Totals:';
$strings['% of total resource time'] = '% del temps total del recurs';
$strings['View these results as'] = 'Veure aquests resultats com:';
$strings['Edit this reservation'] = 'Modificar aquesta reserva';
$strings['Search Results'] = 'Buscar Resultats';
$strings['Search Resource Usage'] = 'Buscar l\'Ús del Recurs';
$strings['Search Results found'] = 'Resultats de la Cerca: S\'han trobat %d reserves';
$strings['Try a different search'] = 'Intenti altre Cerca';
$strings['Search Run On'] = 'Fer la cerca a:';
$strings['Member ID'] = 'ID del Membre';
$strings['Previous User'] = '&laquo; Usuari Anterior';
$strings['Next User'] = 'Usuari Següent &raquo;';

$strings['No results'] = 'No hi han Resultats';
$strings['That record could not be found.'] = 'No s\'ha trobat aquest Recurs.';
$strings['This blackout is not recurring.'] = 'Aquest temps mort no es recurrent.';
$strings['This reservation is not recurring.'] = 'Aquesta reserva no es recurrent.';
$strings['There are no records in the table.'] = 'No hi han registres a la taula %s.';
$strings['You do not have any reservations scheduled.'] = 'No tens cap reserva programada.';
$strings['You do not have permission to use any resources.'] = 'No tens permisos per utilitzar cap recurs.';
$strings['No resources in the database.'] = 'No hi han recursos a la base de dades.';
$strings['There was an error executing your query'] = 'Hi ha hagut un error executant la comanda a la base de dades:';

$strings['That cookie seems to be invalid'] = 'La cookie sembla invalida';
$strings['We could not find that logon in our database.'] = 'No s\'ha trobat l\'email a la base de dades.';
$strings['That password did not match the one in our database.'] = 'Aquesta contrasenya no coincideix amb la de la base de dades.';
$strings['You can try'] = '<br />Pots try:<br />Registrar un email.<br />Or:<br />Torna a intentar-ho altre vegada.';
$strings['A new user has been added'] = 'S\'ha afegit un nou Usuari';
$strings['You have successfully registered'] = 'T\'has registrat bé!';
$strings['Continue'] = 'Continuar...';
$strings['Your profile has been successfully updated!'] = 'El seu perfil ha estat modificat correctament!';
$strings['Please return to My Control Panel'] = 'Torna a l\'Inici';
$strings['Valid email address is required.'] = '- Es requereix una adreça d\'email vàlida.';
$strings['First name is required.'] = '- Es requereix el nom.';
$strings['Last name is required.'] = '- Es requereix el Cognom.';
$strings['Phone number is required.'] = '- Es requereix el telèfon.';
$strings['That email is taken already.'] = '- Aquest email ja està registrat.<br />Si us plau provi de nou amb altre adreça.';
$strings['Min 6 character password is required.'] = '- Es requereix un password d\'almenys %s caràcters.';
$strings['Passwords do not match.'] = '- Les contrasenyes no coincideixen.';

$strings['Per page'] = 'Per pàgina:';
$strings['Page'] = 'Pàgina:';

$strings['Your reservation was successfully created'] = 'La seva reserva s\'ha creat correctament';
$strings['Your reservation was successfully modified'] = 'La seva reserva s\'ha modificat correctament';
$strings['Your reservation was successfully deleted'] = 'La seva reserva s\'ha eliminat correctament';
$strings['Your blackout was successfully created'] = 'El seu temps mort s\'ha creat correctament';
$strings['Your blackout was successfully modified'] = 'El seu temps mort s\'ha modificat correctament';
$strings['Your blackout was successfully deleted'] = 'El seu temps mort s\'ha eliminat correctament';
$strings['for the follwing dates'] = 'per a les següents dates:';
$strings['Start time must be less than end time'] = 'El moment inicial ha de ser anterior al moment final.';
$strings['Current start time is'] = 'La data inicial actual es:';
$strings['Current end time is'] = 'La data final actual es:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'La durada de la reserva no està dins del rang permès per aquest recurs.';
$strings['Your reservation is'] = 'La seva reserva es:';
$strings['Minimum reservation length'] = 'Durada mínima de la reserva:';
$strings['Maximum reservation length'] = 'Durada màxima de la reserva:';
$strings['You do not have permission to use this resource.'] = 'No tens permisos per utilitzar aquest recurs.';
$strings['reserved or unavailable'] = '%s fins %s ja està reservat o no està disponible.';	// @since 1.1.0
$strings['Reservation created for'] = 'Reserva creada per a %s';
$strings['Reservation modified for'] = 'Reserva modificada per a %s';
$strings['Reservation deleted for'] = 'Reserva eliminada per a %s';
$strings['created'] = 'creat';
$strings['modified'] = 'modificat';
$strings['deleted'] = 'eliminat';
$strings['Reservation #'] = 'Reserva #';
$strings['Contact'] = 'Contacte';
$strings['Reservation created'] = 'Reserva creada';
$strings['Reservation modified'] = 'Reserva modificada';
$strings['Reservation deleted'] = 'Reserva eliminada';

$strings['Reservations by month'] = 'Reserves per mes';
$strings['Reservations by day of the week'] = 'Reserves per dia de la setmana';
$strings['Reservations per month'] = 'Reserves per mes';
$strings['Reservations per user'] = 'Reserves per usuari';
$strings['Reservations per resource'] = 'Reserves per recursos';
$strings['Reservations per start time'] = 'Reserves per data d\'inici';
$strings['Reservations per end time'] = 'Reserves per data final';
$strings['[All Reservations]'] = '[Totes les Reserves]';

$strings['Permissions Updated'] = 'Permisos Actualitzats';
$strings['Your permissions have been updated'] = 'Els teus %s permisos s\'han actualitzats';
$strings['You now do not have permission to use any resources.'] = 'No tens permisos per utilitzar cap recurs.';
$strings['You now have permission to use the following resources'] = 'No tens permisos per utilitzar aquests recursos:';
$strings['Please contact with any questions.'] = 'Contacta amb %s per més informació.';
$strings['Password Reset'] = 'Contrasenya Restablerta';

$strings['This will change your password to a new, randomly generated one.'] = 'Això canviarà la teva contrasenya a una nova, generada de forma aleatòria.';
$strings['your new password will be set'] = 'Desprès d\'escriure el seu email i fer clic a "Canviar Contrasenya", la teva nova contrasenya s\'activarà al sistema i la enviarem al teu email.';
$strings['Change Password'] = 'Canviar Contrasenya';
$strings['Sorry, we could not find that user in the database.'] = 'L\'Usuari no es troba a la base de dades.';
$strings['Your New Password'] = 'La teva nova %s Contrasenya';
$strings['Your new passsword has been emailed to you.'] = 'Llest!<br />'
    			. 'La teva contrasenya s\'ha enviat.<br />'
    			. 'Mira la teva contrasenya al correu, i després <a href="index.php">Inicia la Sessió</a>'
    			. ' amb aquesta nova contrasenya i canviala fent clic a &quot;Canviar la informació del meu Perfil/Password&quot;'
    			. ' a l\'Inici.';

$strings['You are not logged in!'] = 'No has iniciat la sessió!';

$strings['Setup'] = 'Configuració';
$strings['Please log into your database'] = 'Inicia la sessió a la base de dades';
$strings['Enter database root username'] = 'Ingressi l\'usuari root de la base de dades:';
$strings['Enter database root password'] = 'Ingressi la contrasenya de root:';
$strings['Login to database'] = 'Iniciar sessió a la base de dades';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '<b>No</b> es necesari l\'usuari root. Qualsevol usuari amb permisos per a crear taules funciona.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Això crearà les bases de dades i taules necesaries per a phpScheduleIt.';
$strings['It also populates any required tables.'] = 'També crearà les dades a les taules rquerides.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Advertència: AIXÒ ELIMINARÀ TOTA LA INFORMACIÓ DE BASES DE DADES ANTERIORS DE phpScheduleIt!';
$strings['Not a valid database type in the config.php file.'] = 'Tipus invàlid de base de dades a l\'arxiu config.php.';
$strings['Database user password is not set in the config.php file.'] = 'Contrasenya d\'usuari de base de dades no indicat a l\'arxiu config.php.';
$strings['Database name not set in the config.php file.'] = 'Nom de base de dades no indicat a config.php.';
$strings['Successfully connected as'] = 'Connectat com';
$strings['Create tables'] = 'Crear taules &gt;';
$strings['There were errors during the install.'] = 'Va haver-hi errors durant la instal·lació. Es posible, no obstant això, que phpScheduleIt funcioni si els problemes no eran greus.<br/><br/>'
	. 'Publica les teves preguntes alm foros de <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Ha acabat d\'instal·lar phpScheduleIt i està llest per començar a utilitzar-lo.';
$strings['Thank you for using phpScheduleIt'] = 'ELIMINI COMPLETAMENT EL DIRECTORI \'install\'.'
	. ' Això es crític ja que conté les contrasenyes de la base de dades i altre informació important.'
	. ' Si no ho fas deixes la porta oberta per a que qualsevol persona agafi el control del seu sistema!'
	. '<br /><br />'
	. 'Gràcies per utilitzar phpScheduleIt!';
$strings['This will update your version of phpScheduleIt from 0.9.3 to 1.0.0.'] = 'Això actualitzarà la teva versió de phpScheduleIt de 0.9.3 a 1.0.0.';
$strings['There is no way to undo this action'] = 'No hi ha forma de desfer aquest canvi!';
$strings['Click to proceed'] = 'Clic per a iniciar';
$strings['This version has already been upgraded to 1.0.0.'] = 'TAquesta versió ja ha estat actualitzada a 1.0.0.';
$strings['Please delete this file.'] = 'Si us plau, elimina aquest arxiu.';
$strings['Successful update'] = 'L\'actualització s\'ha fet correctament';
$strings['Patch completed successfully'] = 'La correcció s\'ha realitzat correctament';
$strings['This will populate the required fields for phpScheduleIt 1.0.0 and patch a data bug in 0.9.9.'] = 'Això omplirà els camps requerits per a phpScheduleIt 1.0.0 i corregirà l\'error de dades de 0.9.9.'
		. '<br />Únicament es requereix executar això si has fet una actualització manual de SQL o està actualitzant versió des de 0.9.9';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Si no s\'ha especificat un valor, s\'utilitzarà ela contrasenya per defecte de l\'arxiu de configuració.';
$strings['Notify user that password has been changed?'] = 'Notificar a l\'usuari que la contrasenya ha canviat?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Aquest sistema requereix que tinguis una adreça de correu electrònic.';
$strings['Invalid User Name/Password.'] = 'Nom d\'Usuari/Password Invàlids.';
$strings['Pending User Reservations'] = 'Reserves d\'Usuari Pendents';
$strings['Approve'] = 'Aprovar';
$strings['Approve this reservation'] = 'Aprovar aquesta Reserva';
$strings['Approve Reservations'] ='Aprovar Reserves';

$strings['Announcement'] = 'Anuncis';
$strings['Number'] = 'Número';
$strings['Add Announcement'] = 'Afegir Anunci';
$strings['Edit Announcement'] = 'Editar Anunci';
$strings['All Announcements'] = 'Tots els Anuncis';
$strings['Delete Announcements'] = 'Eliminar Anunci';
$strings['Use start date/time?'] = 'Utilitzar data/hora d\'inici?';
$strings['Use end date/time?'] = 'Utilitzar data/hora de finalització?';
$strings['Announcement text is required.'] = 'Es requereix un texte per l\'anunci.';
$strings['Announcement number is required.'] = 'Es requereix un número per l\'anunci.';

$strings['Pending Approval'] = 'Aprovació Pendent';
$strings['My reservation is approved'] = 'La meva reserva està aprovada';
$strings['This reservation must be approved by the administrator.'] = 'Aquesta reserva ha de ser aprovada per l\'administrador.';
$strings['Approval Required'] = 'Es requereix Aprovació';
$strings['No reservations requiring approval'] = 'No hi ha reserves que necessitin ser aprovades';
$strings['Your reservation was successfully approved'] = 'La teva reserva ha estat aprovada correctament';
$strings['Reservation approved for'] = 'Reserva aprovada per a %s';
$strings['approved'] = 'aprovada';
$strings['Reservation approved'] = 'Reserva aprovada';

$strings['Valid username is required'] = 'Es requereix un nom d\'usuari vàlid';
$strings['That logon name is taken already.'] = 'Aquest nom d\'usuari ja existeix.';
$strings['this will be your login'] = '(aquest serà el teu usuari)';
$strings['Logon name'] = 'Nom d\'usuari';
$strings['Your logon name is'] = 'El teu nom d\'usuari es %s';

$strings['Start'] = 'Inici';
$strings['End'] = 'Fi';
$strings['Start date must be less than or equal to end date'] = 'La data d\'inici ha de ser menor o igual que la data de finalització';
$strings['That starting date has already passed'] = 'Aquesta data d\'inici ja ha passat';
$strings['Basic'] = 'Bàsic';
$strings['Participants'] = 'Participants';
$strings['Close'] = 'Tancament';
$strings['Start Date'] = 'Data d\'inici';
$strings['End Date'] = 'Data Final';
$strings['Minimum'] = 'Mínim';
$strings['Maximum'] = 'Màxim';
$strings['Allow Multiple Day Reservations'] = 'Permetre reserves de diferents dies';
$strings['Invited Users'] = 'Usuaris Convidats';
$strings['Invite Users'] = 'Convidar Usuaris';
$strings['Remove Participants'] = 'Eliminar Participants';
$strings['Reservation Invitation'] = 'Reserva Invitació';
$strings['Manage Invites'] = 'Administrar Convidats';
$strings['No invite was selected'] = 'No ha estat sel·leccionat cap convidat';
$strings['reservation accepted'] = '%s Acceptà la teva invitació el %s';
$strings['reservation declined'] = '%s Rebutjà la teva invitació el %s';
$strings['Login to manage all of your invitiations'] = 'Entra per administrar totes les teves invitacions';
$strings['Reservation Participation Change'] = 'Canvi de la participació a la reserva';
$strings['My Invitations'] = 'Les meves Invitacions';
$strings['Accept'] = 'Acceptar';
$strings['Decline'] = 'Rebutjar';
$strings['Accept or decline this reservation'] = 'Acceptar o rebutjar aquesta reserva';
$strings['My Reservation Participation'] = 'La meva participació a la reserva';
$strings['End Participation'] = 'Acabar la Participació';
$strings['Owner'] = 'Propietari';
$strings['Particpating Users'] = 'Usuaris Participants';
$strings['No advanced options available'] = 'No hi ha opcions avançades disponibles';
$strings['Confirm reservation participation'] = 'Confirmar participants a la reserva';
$strings['Confirm'] = 'Confirmar';
$strings['Do for all reservations in the group?'] = 'Fer-ho per a totes les reserves del grup?';

$strings['My Calendar'] = 'El meu Calendari';
$strings['View My Calendar'] = 'Veure el meu Calendari';
$strings['Participant'] = 'Participant';
$strings['Recurring'] = 'Recurrent';
$strings['Multiple Day'] = 'Dies Múltiples';
$strings['[today]'] = '[avui]';
$strings['Day View'] = 'Vista Dia';
$strings['Week View'] = 'Vista Setmana';
$strings['Month View'] = 'Vista Mes';
$strings['Resource Calendar'] = 'Calendari de Recursos';
$strings['View Resource Calendar'] = 'Veure Recursos del Calendari';
$strings['Signup View'] = 'Vista d\'inscripcions';

$strings['Select User'] = 'Seleccionar Usuari';
$strings['Change'] = 'Canviar';

$strings['Update'] = 'Actualitzar';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'L\'actualització de phpScheduleIt solament està disponible per les versions 1.0.0 o posteriors';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt ja està actualitzat';
$strings['Migrating reservations'] = 'Migrant les reserves';

$strings['Admin'] = 'Administrador';
$strings['Manage Announcements'] = 'Administrar Anuncis';
$strings['There are no announcements'] = 'No hi ha Anuncis';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Capacita Màxima de Participants';
$strings['Leave blank for unlimited'] = 'Deixa en blanc per capacitat ilimitada';
$strings['Maximum of participants'] = 'Aquest recurs té una capacita màxima de %s participants';
$strings['That reservation is at full capacity.'] = 'Aquesta reserva està completa.';
$strings['Allow registered users to join?'] = 'Vols permetre als usuaris registrats apuntar-se?';
$strings['Allow non-registered users to join?'] = 'Vols permetre als usuaris NO registrats apuntar-se?';
$strings['Join'] = 'Apuntar';
$strings['My Participation Options'] = 'Les meves opcions de participació';
$strings['Join Reservation'] = 'Apuntar les Reserves';
$strings['Join All Recurring'] = 'Apuntar a totes les Recurrents';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'No pots participar en les reserves següents degut a que son a la seva màxima capacitat.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Ya has estat invitat a aquesta cita. Segueix les instruccions enviades abans al teu correu electrònic.';
$strings['Additional Tools'] = 'Eines Adicionals';
$strings['Create User'] = 'Crear Usuari';
$strings['Check Availability'] = 'Disponibilitat de Comprobació';
$strings['Manage Additional Resources'] = 'Admininistrar Accesoris Adicionals';
$strings['All Additional Resources'] = 'Tots els Accesoris';
$strings['Number Available'] = 'Número Disponible';
$strings['Unlimited'] = 'Ilimitat';
$strings['Add Additional Resource'] = 'Afegir Accesori';
$strings['Edit Additional Resource'] = 'Modificar accesori';
$strings['Checking'] = 'Comprobació';
$strings['You did not select anything to delete.'] = 'No has seleccionat res per eliminar';
$strings['Added Resources'] = 'Recursos Afegits';
$strings['Additional resource is reserved'] = 'Els recursos adicionals %s %s únicament son disponibles a la vegada';
$strings['All Groups'] = 'Tots els Grups';
$strings['Group Name'] = 'Nom de Grup';
$strings['Delete Groups'] = 'Elimnar Grups';
$strings['Manage Groups'] = 'Administrar Grups';
$strings['None'] = 'Cap';
$strings['Group name is required.'] = 'Es requereix el nom de Grup.';
$strings['Groups'] = 'Grups';
$strings['Current Groups'] = 'Grups Actuals';
$strings['Group Administration'] = 'Administració de Grups';
$strings['Reminder Subject'] = 'Recordar la Reserva - %s, %s %s';
$strings['Reminder'] = 'Recordar';
$strings['before reservation'] = 'abans de la reserva';
$strings['My Participation'] = 'La Meva Participació';
$strings['My Past Participation'] = 'Les Meves Participacions Passades';
$strings['Timezone'] = 'Zona Horaria';
$strings['Export'] = 'Exportar';
$strings['Select reservations to export'] = 'Seleccionar Reserves per a Exportar';
$strings['Export Format'] = 'Format d\'Exportació';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Aquest recurs no pot ser reservat menys de %s hores per adelantat';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Aquest recurs no pot ser reservat més de %s hores per adelantat';
$strings['Minimum Booking Notice'] = 'Avís de reserves mínimes';
$strings['Maximum Booking Notice'] = 'Avís de reserves màximes';
$strings['hours prior to the start time'] = 'Hores abans de començar el temps inicial';
$strings['hours from the current time'] = 'hores del temps actual';
$strings['Contains'] = 'Conté';
$strings['Begins with'] = 'Comença';
$strings['Minimum booking notice is required.'] = 'Es requereix avís de reserves mínimes.';
$strings['Maximum booking notice is required.'] = 'Es requereix avís de reserves màximes.';
$strings['Accessory Name'] = 'Nom d\'Accesori';
$strings['Accessories'] = 'Accesoris';
$strings['All Accessories'] = 'Tots els Accessoris';
$strings['Added Accessories'] = 'Afegir Accessoris';
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
				. "T'has registrat correctament amb la següent informació:\r\n"
				. "Usuari: %s\r\n"
				. "Nom: %s %s \r\n"
				. "Telèfon: %s \r\n"
				. "Departament: %s \r\n"
				. "Càrrec: %s \r\n\r\n"
				. "Entra al sistema d'agenda en línia a aquesta adreça:\r\n"
				. "%s \r\n\r\n"
				. "Trobaràs enllaços pel sistema d'agenda en línia i per modifcar el teu perfil en Inici.\r\n\r\n"
				. "Les teves preguntes relacionades amb les reserves i recursos s'han d'enviar a %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Administrador,\r\n\r\n"
					. "S'ha registrat un nou Usuari amb la següent informació:\r\n"
					. "Email: %s \r\n"
					. "Nom: %s %s \r\n"
					. "Telèfon: %s \r\n"
					. "Departament: %s \r\n"
					. "Càrrec: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Has %s correctament la reserva #%s.\r\n\r\n<br/><br/>"
			. "Utilitza aquest número de reserva quan contactis amb l'administrador per alguna pregunta.\r\n\r\n<br/><br/>"
			. "Una reserva entre %s %s i %s %s per a %s"
			. " situat a %s ha estat %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Aquesta reserva s'ha repetit en les següents dates:\r\n<br/>";
$email['reservation_activity_3'] = "Totes les reserves recurrents d'aquest grup també van ser %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "El següent es el resumen per aquesta reserva:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Si penses que això es un error, contacta amb l'administrador a: %s"
			. " o trucant al %s.\r\n\r\n<br/><br/>"
			. "Pots veure o modificar la teva reserva en qualsevol moment"
			. " iniciant una sessió a %s en:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Dirigeix les preguntes técniques a <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "La reserva #%s s'ha aprovat.\r\n\r\n<br/><br/>"
			. "Utilitza aquest número de reserva quan contactis amb l'administrador per alguna pregunta.\r\n\r\n<br/><br/>"
			. "Una reserva entre %s %s i %s %s per a %s"
			. " situat a %s ha estat %s.\r\n\r\n<br/><br/>";
			
// Email that the user gets when the administrator changes their password
$email['password_reset'] = "La teva contrasenya %s l'ha restablert l'administrador.\r\n\r\n"
			. "La teva contrasenya temporal es:\r\n\r\n %s\r\n\r\n"
			. "Utilitza aquesta contrasenya temporal (copy and paste to be sure it is correct) per a iniciar la sessió a %s a %s"
			. " i la canvies utilitzant l'opció 'Canviar la informació del meu Perfil/Contrasenya' a la taula Els Meus Accesos Directes.\r\n\r\n"
			. "Contacta a %s per més informació.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "La teva nova contrasenya pel teu compte de %s es:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Inicia sessió en %s "
            . "amb aquesta contrasenya "
            . "(copy and paste it to ensure it is correct) "
            . "i la canvies fent clic en "
            . "Canviar la informació del meu Perfil/Contrasenya "
            . "al meu Inici.\r\n\r\n"
            . "Per més informació contacta amb %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s t'ha convidat per participar a la següent reserva:\r\n\r\n"
		. "Recurs: %s\r\n"
		. "Data d'Inici: %s\r\n"
		. "Hora d'Inici: %s\r\n"
		. "Data de Finalització: %s\r\n"
		. "Hora de Finalització: %s\r\n"
		. "Resum: %s\r\n"
		. "Dates de Repeticions (si n'hi ha): %s\r\n\r\n"
		. "Per acceptar aquesta invitació fes clic a aquest ennlaç (copy and paste if it is not highlighted) %s\r\n"
		. "Per rebutjar aquesta invitació fes clic a aquest ennlaç (copy and paste if it is not highlighted) %s\r\n"
		. "Per acceptar algunes dates o administrar les teves invitacions després, entra a %s a %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Has estat eliminat de la següent reserva:\r\n\r\n"
		. "Recurs: %s\r\n"
		. "Data d'Inici: %s\r\n"
		. "Hora d'Inici: %s\r\n"
		. "Data de Finalització: %s\r\n"
		. "Hora de Finalització: %s\r\n"
		. "Resum: %s\r\n"
		. "Dates de Repetició (si n'hi han): %s\r\n\r\n";
// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "La teva reserva per a %s des de %s %s a %s %s es propera.";

?>
