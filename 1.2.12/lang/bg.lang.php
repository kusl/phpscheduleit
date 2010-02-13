<?php
/**
* Български (bg) превод.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Владислав Живков <vladi@ucc.uni-sofia.bg>
* @version 05-13-06
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
// 'utf-8' will work for most languages
$charset = 'utf-8';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('Неделя', 'Понеделник', 'Вторник', 'Сряда', 'Четвъртък', 'Петък', 'Събота');
// The three letter abbreviation
$days_abbr = array('Нед', 'Пон', 'Вто', 'Сря', 'Чет', 'Пет', 'Съб');
// The two letter abbreviation
$days_two  = array('Не', 'По', 'Вт', 'Ср', 'Че', 'Пе', 'Съ');
// The one letter abbreviation
$days_letter = array('Н', 'П', 'В', 'С', 'Ч', 'П', 'С');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('Януари', 'Февруари', 'Март', 'Април', 'Май', 'Юни', 'Юли', 'Август', 'Септември', 'Октомври', 'Ноември', 'Декември');
// The three letter month name
$months_abbr = array('Яну', 'Фев', 'Мар', 'Апр', 'Май', 'Юни', 'Юли', 'Авг', 'Сеп', 'Окт', 'Ное', 'Дек');

// All letters of the alphabet starting with A and ending with Z
$letters = array ('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ь', 'Ю', 'Я');

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
$strings['hours'] = 'час(а)';
$strings['minutes'] = 'минути';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'мм';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'дд';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'гггг';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'Администратор';
$strings['Welcome Back'] = 'Добре Дошли, %s';
$strings['Log Out'] = 'Излизане';
$strings['My Control Panel'] = 'Моя Контролен Панел';
$strings['Help'] = 'Помощ';
$strings['Manage Schedules'] = 'Управление на Разписания';
$strings['Manage Users'] ='Управление на Потребители';
$strings['Manage Resources'] ='Управление на Ресурси';
$strings['Manage User Training'] ='Управление на Трейнинг на Потребител';
$strings['Manage Reservations'] ='Управление на Резервации';
$strings['Email Users'] ='Email-и на Потребители';
$strings['Export Database Data'] = 'Експорт на Данните на Базата';
$strings['Reset Password'] = 'Смяна на Парола';
$strings['System Administration'] = 'Администриране на Системата';
$strings['Successful update'] = 'Успешно обновяване';
$strings['Update failed!'] = 'Неуспешно обновяване!';
$strings['Manage Blackout Times'] = 'Управление на Забранени Периоди';
$strings['Forgot Password'] = 'Забравена Парола';
$strings['Manage My Email Contacts'] = 'Управление на Моите Email Контакти';
$strings['Choose Date'] = 'Избиране на Дата';
$strings['Modify My Profile'] = 'Промяна на Моя Профил';
$strings['Register'] = 'Регистриране';
$strings['Processing Blackout'] = 'Обработка на Забранени Периоди';
$strings['Processing Reservation'] = 'Обраборка на Резервации';
$strings['Online Scheduler [Read-only Mode]'] = 'Онлайн Разписание [Режим Само за Четене]';
$strings['Online Scheduler'] = 'Онлайн Разписание';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt Статистика';
$strings['User Info'] = 'Инфо за Потребител:';

$strings['Could not determine tool'] = 'Не мога да определя средство. Моля, върнете се към Моя Контролен Панел и опитайте отново.';
$strings['This is only accessable to the administrator'] = 'Това е достъпно само на администратора';
$strings['Back to My Control Panel'] = 'Обратно към Моя Контролен Панел';
$strings['That schedule is not available.'] = 'Това разписание не е налично.';
$strings['You did not select any schedules to delete.'] = 'Не сте избрали нито едно разписание за изтриване.';
$strings['You did not select any members to delete.'] = 'Не сте избрали нито един член за изтриване.';
$strings['You did not select any resources to delete.'] = 'Не сте избрали нито един ресурс за изтриване.';
$strings['Schedule title is required.'] = 'Заглавие на разписание е задължително.';
$strings['Invalid start/end times'] = 'Невалидни времена начало/край';
$strings['View days is required'] = 'Видими Дни е задължително';
$strings['Day offset is required'] = 'Дни Отместване е задължително';
$strings['Admin email is required'] = 'Еmail на админ е задължително';
$strings['Resource name is required.'] = 'Име на ресурс е задължително.';
$strings['Valid schedule must be selected'] = 'Трябва да бъде избран валиден график';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'Минималната дължина на резервация трябва да бъде по-малка или равна на максималната дължина на резервация.';
$strings['Your request was processed successfully.'] = 'Вашата заявка е обработена успешно.';
$strings['Go back to system administration'] = 'Върнете се обратно към администриране на системата';
$strings['Or wait to be automatically redirected there.'] = 'Или изчакайте автоматично да бъдете препратен там.';
$strings['There were problems processing your request.'] = 'Имаше проблеми при обработката на Вашата заявка.';
$strings['Please go back and correct any errors.'] = 'Моля, върнете се и изчистете всички грешки.';
$strings['Login to view details and place reservations'] = 'Регистрирайте се, за да видите детайли и да правите резервации';
$strings['Memberid is not available.'] = 'Ид на член: %s не е налично.';

$strings['Schedule Title'] = 'Заглавие на Разписание';
$strings['Start Time'] = 'Начално Време';
$strings['End Time'] = 'Крайно Време';
$strings['Time Span'] = 'Времеви Интервал';
$strings['Weekday Start'] = 'Начален Ден от Седмица';
$strings['Admin Email'] = 'Email на Админ';

$strings['Default'] = 'Подразбиране';
$strings['Reset'] = 'Смяна';
$strings['Edit'] = 'Редактиране';
$strings['Delete'] = 'Изтриване';
$strings['Cancel'] = 'Анулиране';
$strings['View'] = 'Преглеждане';
$strings['Modify'] = 'Промяна';
$strings['Save'] = 'Запазване';
$strings['Back'] = 'Обратно';
$strings['Next'] = 'Следващ';
$strings['Close Window'] = 'Затваряне на Прозорец';
$strings['Search'] = 'Търсене';
$strings['Clear'] = 'Изчистване';

$strings['Days to Show'] = 'Показвани Дни';
$strings['Reservation Offset'] = 'Отместване на Резервация';
$strings['Hidden'] = 'Скрит';
$strings['Show Summary'] = 'Показване на Резюме';
$strings['Add Schedule'] = 'Добавяне на Разпосание';
$strings['Edit Schedule'] = 'Редактиране на Разписание';
$strings['No'] = 'Не';
$strings['Yes'] = 'Да';
$strings['Name'] = 'Име';
$strings['First Name'] = 'Име';
$strings['Last Name'] = 'Фамилия';
$strings['Resource Name'] = 'Име на Ресурс';
$strings['Email'] = 'Email';
$strings['Institution'] = 'Институция';
$strings['Phone'] = 'Телефон';
$strings['Password'] = 'Парола';
$strings['Permissions'] = 'Достъпи';
$strings['View information about'] = 'Разглеждане на информация за %s %s';
$strings['Send email to'] = 'Изпращане на email на %s %s';
$strings['Reset password for'] = 'Смяна на парола на %s %s';
$strings['Edit permissions for'] = 'Редактиране на достъпи на %s %s';
$strings['Position'] = 'Длъжност';
$strings['Password (6 char min)'] = 'Парола (мин %s знака)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'Повторно въведете Парола';

$strings['Sort by descending last name'] = 'Сортиране в намаляващ ред по фамилия';
$strings['Sort by descending email address'] = 'Сортиране в намаляващ ред по email адрес';
$strings['Sort by descending institution'] = 'Сортиране в намаляващ ред по институция';
$strings['Sort by ascending last name'] = 'Сортиране в нарастващ ред по фамилия';
$strings['Sort by ascending email address'] = 'Сортиране в нарастващ ред по email адрес';
$strings['Sort by ascending institution'] = 'Сортиране в нарастващ ред по институция';
$strings['Sort by descending resource name'] = 'Сортиране в намаляващ ред по име на ресурс';
$strings['Sort by descending location'] = 'Сортиране в намаляващ ред по локация';
$strings['Sort by descending schedule title'] = 'Сортиране в намаляващ ред по име на разписание';
$strings['Sort by ascending resource name'] = 'Сортиране в нарастващ ред по име на ресурс';
$strings['Sort by ascending location'] = 'Сортиране в нарастващ ред по локация';
$strings['Sort by ascending schedule title'] = 'Сортиране в нарастващ ред по име на разписание';
$strings['Sort by descending date'] = 'Сортиране в намаляващ ред по дата';
$strings['Sort by descending user name'] = 'Сортиране в намаляващ ред по име на потребител';
$strings['Sort by descending start time'] = 'Сортиране в намаляващ ред по начално време';
$strings['Sort by descending end time'] = 'Сортиране в намаляващ ред по крайно време';
$strings['Sort by ascending date'] = 'Сортиране в нарастващ ред по дата';
$strings['Sort by ascending user name'] = 'Сортиране в нарастващ ред по име на потребител';
$strings['Sort by ascending start time'] = 'Сортиране в нарастващ ред по начално време';
$strings['Sort by ascending end time'] = 'Сортиране в нарастващ ред по крайно време';
$strings['Sort by descending created time'] = 'Сортиране в намаляващ ред по време на създаване';
$strings['Sort by ascending created time'] = 'Сортиране в нарастващ ред по време на създаване';
$strings['Sort by descending last modified time'] = 'Сортиране в намаляващ ред по време на послсдна промяна';
$strings['Sort by ascending last modified time'] = 'Сортиране в нарастващ ред по време на послсдна промяна';

$strings['Search Users'] = 'Търсене на Потребители';
$strings['Location'] = 'Локация';
$strings['Schedule'] = 'Разписание';
$strings['Phone'] = 'Телефон';
$strings['Notes'] = 'Бележки';
$strings['Status'] = 'Статус';
$strings['All Schedules'] = 'Всички Разписания';
$strings['All Resources'] = 'Всички Ресурси';
$strings['All Users'] = 'Всички Потребители';

$strings['Edit data for'] = 'Редактиране на данни за %s';
$strings['Active'] = 'Активен';
$strings['Inactive'] = 'Неактивен';
$strings['Toggle this resource active/inactive'] = 'Маркиране на този ресурс активен/неактивен';
$strings['Minimum Reservation Time'] = 'Минимално Време за Резервация';
$strings['Maximum Reservation Time'] = 'Максимално Време за Резервация';
$strings['Auto-assign permission'] = 'Автоматично присвояване на достъпи';
$strings['Add Resource'] = 'Дабавяне на Ресурс';
$strings['Edit Resource'] = 'Редактиране на Ресурс';
$strings['Allowed'] = 'Разрешен';
$strings['Notify user'] = 'Уведомяване на потребител';
$strings['User Reservations'] = 'Резервации на Потребител';
$strings['Date'] = 'Дата';
$strings['User'] = 'Потребител';
$strings['Email Users'] = 'Email на Потребители';
$strings['Subject'] = 'Тема';
$strings['Message'] = 'Съобщение';
$strings['Please select users'] = 'Моля изверете потребители';
$strings['Send Email'] = 'Изпращане на Email';
$strings['problem sending email'] = 'За съжаление, Вашият email не може да бъде изпратен. Моля опитайте отново по-късно.';
$strings['The email sent successfully.'] = 'Еmail-ът е изпратен успешно.';
$strings['do not refresh page'] = 'Моля <u>не</u> обновявайте тази страница. Ако го направите писмото ще бъде изпратено отново.';
$strings['Return to email management'] = 'Връщане към управление на email';
$strings['Please select which tables and fields to export'] = 'Моля изберете таблиците и полетата за експорт:';
$strings['all fields'] = '- всички полета -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'Текст';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'Експорт на Данни';
$strings['Reset Password for'] = 'Обновяване на Парола за %s';
$strings['Please edit your profile'] = 'Моля редактирайте своя профил';
$strings['Please register'] = 'Моля регистрирайте се';
$strings['Keep me logged in'] = 'Запазете моята оторизация <br/>(изисква бисквитки)';
$strings['Edit Profile'] = 'Редактиране на Профил';
$strings['Register'] = 'Регистриране';
$strings['Please Log In'] = 'Моля Влезте';
$strings['Email address'] = 'Email адрес';
$strings['Password'] = 'Парола';
$strings['First time user'] = 'Нов потребител?';
$strings['Click here to register'] = 'Кликнете тук за регистриране';
$strings['Register for phpScheduleIt'] = 'Регистриране в phpScheduleIt';
$strings['Log In'] = 'Влизане';
$strings['View Schedule'] = 'Разглеждане на Разписание';
$strings['View a read-only version of the schedule'] = 'Разглеждане на версия само за четене на разписанието';
$strings['I Forgot My Password'] = 'Аз Забравих Моята Парола';
$strings['Retreive lost password'] = 'Възстановяване на изгубена парола';
$strings['Get online help'] = 'Онлайн помощ';
$strings['Language'] = 'Език';
$strings['(Default)'] = '(Подразбиране)';

$strings['My Announcements'] = 'Моите Обяви';
$strings['My Reservations'] = 'Моите Резервации';
$strings['My Permissions'] = 'Моите Достъпи';
$strings['My Quick Links'] = 'Моите Бързи Връзки';
$strings['Announcements as of'] = 'Обяви на %s';
$strings['There are no announcements.'] = 'Няма обяви.';
$strings['Resource'] = 'Ресурс';
$strings['Created'] = 'Създаден';
$strings['Last Modified'] = 'Последно Променен';
$strings['View this reservation'] = 'Разглеждане на тази резервация';
$strings['Modify this reservation'] = 'Промяна на тази резервация';
$strings['Delete this reservation'] = 'Изтриване на тази резервация';
$strings['Bookings'] = 'Ангажиране на Ресурс';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Смяна на Информация на Профил/Парола';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Email Предпочитания';				// @since 1.2.0
$strings['Mass Email Users'] = 'Групово Изпращане на Email на Потребители';
$strings['Search Scheduled Resource Usage'] = 'Търсене на Резервации';		// @since 1.2.0
$strings['Export Database Content'] = 'Експорт на Съдържанието на Базата';
$strings['View System Stats'] = 'Разглеждане на Статистиката на Системата';
$strings['Email Administrator'] = 'Email към Администратор';

$strings['Email me when'] = 'Изпратете ми Email когато:';
$strings['I place a reservation'] = 'Аз направих резервация';
$strings['My reservation is modified'] = 'Моята резервация е променена';
$strings['My reservation is deleted'] = 'Моята резервация е изтрита';
$strings['I prefer'] = 'Аз предпочитам:';
$strings['Your email preferences were successfully saved'] = 'Моите email предпочитания са запазени успешно!';
$strings['Return to My Control Panel'] = 'Връщане към Моя Контролен Панел';

$strings['Please select the starting and ending times'] = 'Моля въведете началното и крайното време:';
$strings['Please change the starting and ending times'] = 'Моля променете началното и крайното време:';
$strings['Reserved time'] = 'Резервирано време:';
$strings['Minimum Reservation Length'] = 'Минимална Продължителност на Резервация:';
$strings['Maximum Reservation Length'] = 'Максимална Продължителност на Резервация:';
$strings['Reserved for'] = 'Резервиран за:';
$strings['Will be reserved for'] = 'Ще бъде резервиран(а) за:';
$strings['N/A'] = 'Недостъпен';
$strings['Update all recurring records in group'] = 'Обновяване на всички рекурентни записи в група?';
$strings['Delete?'] = 'Изтриване?';
$strings['Never'] = '-- Никога --';
$strings['Days'] = 'Дни';
$strings['Weeks'] = 'Седмици';
$strings['Months (date)'] = 'Месеци (дата)';
$strings['Months (day)'] = 'Месеци (ден)';
$strings['First Days'] = 'Първи Дни';
$strings['Second Days'] = 'Втори Дни';
$strings['Third Days'] = 'Трети Дни';
$strings['Fourth Days'] = 'Четвърти Дни';
$strings['Last Days'] = 'Последни Дни';
$strings['Repeat every'] = 'Повтаряне на всеки:';
$strings['Repeat on'] = 'Повтаряне на:';
$strings['Repeat until date'] = 'Повтаряне до дата:';
$strings['Choose Date'] = 'Избиране на Дата';
$strings['Summary'] = 'Резюме';

$strings['View schedule'] = 'Разглеждане на разписание:';
$strings['My Reservations'] = 'Моите Резервации';
$strings['My Past Reservations'] = 'Моите Минали Резервации';
$strings['Other Reservations'] = 'Други Резервации';
$strings['Other Past Reservations'] = 'Други Минали Резервации';
$strings['Blacked Out Time'] = 'Забранено Време';
$strings['Set blackout times'] = 'Задаване на забранени времена за %s на %s'; 
$strings['Reserve on'] = 'Резервиране на %s на %s';
$strings['Prev Week'] = '&laquo; Предходна Седмица';
$strings['Jump 1 week back'] = 'Минете 1 седмица назад';
$strings['Prev days'] = '&#8249; Предх %d дни';
$strings['Previous days'] = '&#8249; Предходни %d дни';
$strings['This Week'] = 'Тази Седмица';
$strings['Jump to this week'] = 'Преминаване към тази седмица';
$strings['Next days'] = 'Следващи %d дни &#8250;';
$strings['Next Week'] = 'Следваща Седмица &raquo;';
$strings['Jump To Date'] = 'Преминаване към Дата';
$strings['View Monthly Calendar'] = 'Разглеждане на Месечен Календар';
$strings['Open up a navigational calendar'] = 'Отваряне на навигационен календар';

$strings['View stats for schedule'] = 'Разглеждане на статистика за разписание:';
$strings['At A Glance'] = 'Обобщено';
$strings['Total Users'] = 'Общо Потребители:';
$strings['Total Resources'] = 'Общо Ресурси:';
$strings['Total Reservations'] = 'Общо Резервации:';
$strings['Max Reservation'] = 'Макс Резервации:';
$strings['Min Reservation'] = 'Мин Резервации:';
$strings['Avg Reservation'] = 'Средно Резервации:';
$strings['Most Active Resource'] = 'Най-активен Ресурс:';
$strings['Most Active User'] = 'Най-активен Потребител:';
$strings['System Stats'] = 'Статистика на Системата';
$strings['phpScheduleIt version'] = 'Версия на phpScheduleIt:';
$strings['Database backend'] = 'База данни:';
$strings['Database name'] = 'Име на Базата Данни:';
$strings['PHP version'] = 'PHP версия:';
$strings['Server OS'] = 'ОС на Сървър:';
$strings['Server name'] = 'Име на Сървър:';
$strings['phpScheduleIt root directory'] = 'корнева папка на phpScheduleIt:';
$strings['Using permissions'] = 'Използувайки достъпи:';
$strings['Using logging'] = 'Използувайки регистриране:';
$strings['Log file'] = 'Лог файл:';
$strings['Admin email address'] = 'Еmail адрес на админ:';
$strings['Tech email address'] = 'Техн email адрес:';
$strings['CC email addresses'] = 'CC email адреси:';
$strings['Reservation start time'] = 'Начално време на резервация:';
$strings['Reservation end time'] = 'Крайно време на резервация:';
$strings['Days shown at a time'] = 'Показвани дни по време:';
$strings['Reservations'] = 'Резервации';
$strings['Return to top'] = 'Връщане към начало';
$strings['for'] = 'за';

$strings['Select Search Criteria'] = 'Изберете Критерии за Търсене';
$strings['Schedules'] = 'Разписания:';
$strings['All Schedules'] = 'Всички разписания';
$strings['Hold CTRL to select multiple'] = 'Задръжте CTRL за да изберете няколко';
$strings['Users'] = 'Потребители:';
$strings['All Users'] = 'Всички Потребители';
$strings['Resources'] = 'Ресурси';		// @since 1.2.0
$strings['All Resources'] = 'Всички Ресурси';
$strings['Starting Date'] = 'Начална Дата:';
$strings['Ending Date'] = 'Крайна Дата:';
$strings['Starting Time'] = 'Начално Време:';
$strings['Ending Time'] = 'Крайно Време:';
$strings['Output Type'] = 'Тип Изход:';
$strings['Manage'] = 'Управление';
$strings['Total Time'] = 'Общо Време';
$strings['Total hours'] = 'Общо Часове:';
$strings['% of total resource time'] = '% от общото време на ресурса';
$strings['View these results as'] = 'Разглеждане на тези резултати като:';
$strings['Edit this reservation'] = 'Редактиране на тази резервация';
$strings['Search Results'] = 'Резултати от Търсене';
$strings['Search Resource Usage'] = 'Използуване на Ресурса за Търсене';
$strings['Search Results found'] = 'Резултати от Търсене: %d намерени резервации';
$strings['Try a different search'] = 'Опитайте различно търсене';
$strings['Search Run On'] = 'Търсене се Извършва Върху:';
$strings['Member ID'] = 'ИД на Член';
$strings['Previous User'] = '&laquo; Предишен Потребител';
$strings['Next User'] = 'Следващ Потребител &raquo;';

$strings['No results'] = 'Няма резултати';
$strings['That record could not be found.'] = 'Този запис не може да бъде намерен.';
$strings['This blackout is not recurring.'] = 'Този забранен период не се повтаря.';
$strings['This reservation is not recurring.'] = 'Тази ресервация не се повтаря.';
$strings['There are no records in the table.'] = 'Нама записи в таблица %s.';
$strings['You do not have any reservations scheduled.'] = 'Вие нямате никакви направени резервации.';
$strings['You do not have permission to use any resources.'] = 'Вие нямате права да използувате никакви ресурси.';
$strings['No resources in the database.'] = 'Няма ресурси в базата.';
$strings['There was an error executing your query'] = 'Има грешка при изпълнение на Вашата заявка:';

$strings['That cookie seems to be invalid'] = 'Тази бисквитка изглежда невалидна';
$strings['We could not find that logon in our database.'] = 'Ние не можем да намерим такава регистрация в нашата база.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Тази парола не съответства на записаната в нашата база.';
$strings['You can try'] = '<br />Можете да опитате:<br />Регистриране на email адрес.<br />Или:<br />Опитайте отново влизане.';
$strings['A new user has been added'] = 'Добавен е нов потребител';
$strings['You have successfully registered'] = 'Вие се регистрирахте успешно!';
$strings['Continue'] = 'Продължение...';
$strings['Your profile has been successfully updated!'] = 'Вашият профил е обновен успешно!';
$strings['Please return to My Control Panel'] = 'Моля върнете към Моя Контролен Панел';
$strings['Valid email address is required.'] = '- Изисква се валиден email адрес.';
$strings['First name is required.'] = '- Името е задължително.';
$strings['Last name is required.'] = '- Фамилията е задължителна.';
$strings['Phone number is required.'] = '- Телефонният номер е задължителен.';
$strings['That email is taken already.'] = '- Този email вече е въведен.<br />Моля опитайте отново с различен email адрес.';
$strings['Min 6 character password is required.'] = '- Мин %s знака парола се изисква.';
$strings['Passwords do not match.'] = '- Паролите не съвпадат.';

$strings['Per page'] = 'На страница:';
$strings['Page'] = 'Страница:';

$strings['Your reservation was successfully created'] = 'Вашата резервация беше създадена успешно';
$strings['Your reservation was successfully modified'] = 'Вашата резервация беше променена успешно';
$strings['Your reservation was successfully deleted'] = 'Вашата резервация беше изтрита успешно';
$strings['Your blackout was successfully created'] = 'Вашият забранен период беше създаден успешно';
$strings['Your blackout was successfully modified'] = 'Вашият забранен период беше променен успешно';
$strings['Your blackout was successfully deleted'] = 'Вашият забранен период беше изтрит успешно';
$strings['for the follwing dates'] = 'за следните дати:';
$strings['Start time must be less than end time'] = 'Началното време трябва да е по-малко от началното време.';
$strings['Current start time is'] = 'Текущото начално време е:';
$strings['Current end time is'] = 'Текущото крайно време е:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Продължителността на резервацията не се вписва в продължителността на този ресурс.';
$strings['Your reservation is'] = 'Вашата резервация е:';
$strings['Minimum reservation length'] = 'Минимална продължителност на резервация:';
$strings['Maximum reservation length'] = 'Максимална продължителност на резервация:';
$strings['You do not have permission to use this resource.'] = 'Вие нямате права да използувате този ресурс.';
$strings['reserved or unavailable'] = '%s до %s е резервиран или недостъпен.';	// @since 1.1.0
$strings['Reservation created for'] = 'Създадена е резервация за %s';
$strings['Reservation modified for'] = 'Променена е резервация за %s';
$strings['Reservation deleted for'] = 'Изтрита е резервация за %s';
$strings['created'] = 'създаден';
$strings['modified'] = 'променен';
$strings['deleted'] = 'изтрит';
$strings['Reservation #'] = 'Резервация #';
$strings['Contact'] = 'Контакт';
$strings['Reservation created'] = 'Създадена резервация';
$strings['Reservation modified'] = 'Променена резервация';
$strings['Reservation deleted'] = 'Изтрита резервация';

$strings['Reservations by month'] = 'Резервации по месец';
$strings['Reservations by day of the week'] = 'Резервации по ден от седмицата';
$strings['Reservations per month'] = 'Резервации на месец';
$strings['Reservations per user'] = 'Резервации на потребител';
$strings['Reservations per resource'] = 'Резервации на ресурс';
$strings['Reservations per start time'] = 'Резервации на начално време';
$strings['Reservations per end time'] = 'Резервации на крайно време';
$strings['[All Reservations]'] = '[Всички резервации]';

$strings['Permissions Updated'] = 'Обновени Достъпи';
$strings['Your permissions have been updated'] = 'Вашите %s достъпи са обновени';
$strings['You now do not have permission to use any resources.'] = 'В момента Вие нямате права да използуване никакви ресурси.';
$strings['You now have permission to use the following resources'] = 'В момента Вие имате права да използувате следните ресурси:';
$strings['Please contact with any questions.'] = 'Моля свържете се с %s при въпроси.';
$strings['Password Reset'] = 'Обновяване на Парола';

$strings['This will change your password to a new, randomly generated one.'] = 'Това ще смени Вашата парола с нова, случайно генерирана.';
$strings['your new password will be set'] = 'След въвеждане на Вашия email адрес и кликване върху "Смяна на Парола", Ващата нова парола ще Ви бъде изпратена по email.';
$strings['Change Password'] = 'Смяна на Парола';
$strings['Sorry, we could not find that user in the database.'] = 'Съжаляваме, ние не можем да намерим такъв потребител в базата.';
$strings['Your New Password'] = 'Вашата Нова %s Парола';
$strings['Your new passsword has been emailed to you.'] = 'Успех!<br />'
    			. 'Вашата нова парола Ви е изпратена по email.<br />'
    			. 'Моля, проверете Вашата пощенска кутия за нея, след това се <a href="index.php">Регистрирайте</a>'
    			. ' с тази нова парола и и евентуално я сменете, като кликнете върху линк &quot;Смяна на Информация на Профил/Парола&quot;'
    			. ' в Моя Контролен Панел.';

$strings['You are not logged in!'] = 'Вие не сте регистриран!';

$strings['Setup'] = 'Създаване';
$strings['Please log into your database'] = 'Моля, регистрирайте се в базата данни';
$strings['Enter database root username'] = 'Въведете потребител root:';
$strings['Enter database root password'] = 'Въведете парола за root потребител:';
$strings['Login to database'] = 'Регистриране в базата данни';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '<b>Не</b> необходим Root потребител. Може да бъде използван всеки потребител, който има права за създаване на таблици.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'Това ще създаде всички необходими бази и таблици за phpScheduleIt.';
$strings['It also populates any required tables.'] = 'Ще зареди и всички задължителни таблици.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'Предупреждение: ЩЕ БЪДАТ ИЗТРИТИ ВСИЧКИ ДАННИ В ПРЕДИШНИТЕ phpScheduleIt БАЗИ ДАННИ!';
$strings['Not a valid database type in the config.php file.'] = 'Невалиден тип на база данни във файл config.php.';
$strings['Database user password is not set in the config.php file.'] = 'Паролата на потребителя на базата данни не е зададена във файла config.php.';
$strings['Database name not set in the config.php file.'] = 'Името на базата данни не е зададена във файла config.php.';
$strings['Successfully connected as'] = 'Успешно свързване като';
$strings['Create tables'] = 'Създаване на таблици &gt;';
$strings['There were errors during the install.'] = 'Имаше грешки по време на инсталацията. Възможно е phpScheduleIt да работи, ако грешките са незначителни.<br/><br/>'
	. 'Моля изпращайте всякакви въпроси на форумите <a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'Вие успешно завършихте създаването на phpScheduleIt и можете да го използувате.';
$strings['Thank you for using phpScheduleIt'] = 'Моля, ИЗТРИЙТЕ ПАПКА \'install\'.'
	. ' Това е критично, защото там има пароли и друга важна информация.'
	. '<br /><br />'
	. 'Благодарим, че използувате phpScheduleIt!';
$strings['There is no way to undo this action'] = 'Това действие не позволява връщане обратно!';
$strings['Click to proceed'] = 'Кликнете, за да продължите';
$strings['Please delete this file.'] = 'Моля изтрийте този файл.';
$strings['Successful update'] = 'Обновяването завърши успешно';
$strings['Patch completed successfully'] = 'Кръпката завърши успешно';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'Ако не е зададена парола, ще бъде използвана паролата по подразбиране от config файла.';
$strings['Notify user that password has been changed?'] = 'Да уведомя потребителя, че паролата е сменена?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'Тази система изисква да имате email адрес.';
$strings['Invalid User Name/Password.'] = 'Невалидно Потребителско Име/Парола.';
$strings['Pending User Reservations'] = 'Непотвърдени Потребителски Резервации';
$strings['Approve'] = 'Одобряване';
$strings['Approve this reservation'] = 'Одобряване на тази резервация';
$strings['Approve Reservations'] ='Одобряване на Резервации';

$strings['Announcement'] = 'Обява';
$strings['Number'] = 'Номер';
$strings['Add Announcement'] = 'Добавяне на Обява';
$strings['Edit Announcement'] = 'Редактиране на Обява';
$strings['All Announcements'] = 'Всички Обяви';
$strings['Delete Announcements'] = 'Изтриване на Обяви';
$strings['Use start date/time?'] = 'Начална дата/време?';
$strings['Use end date/time?'] = 'Крайна дата/време?';
$strings['Announcement text is required.'] = 'Текстът на обявата е задължителен.';
$strings['Announcement number is required.'] = 'Номерът на обявата е задължителен.';

$strings['Pending Approval'] = 'Очакващ Одобрение';
$strings['My reservation is approved'] = 'Моята резервация е одобрена';
$strings['This reservation must be approved by the administrator.'] = 'Тази резервация трябва да бъде одобрена от администратора.';
$strings['Approval Required'] = 'Одобрението е Задължително';
$strings['No reservations requiring approval'] = 'Няма резервации чакащи одобрение';
$strings['Your reservation was successfully approved'] = 'Вашата резервация е успешно одобрена';
$strings['Reservation approved for'] = 'Резервацията одобрена за %s';
$strings['approved'] = 'одобрена';
$strings['Reservation approved'] = 'Резервацията одобрена';

$strings['Valid username is required'] = 'Валидно потребителско име е задължително';
$strings['That logon name is taken already.'] = 'Това потребителско име вече се използува.';
$strings['this will be your login'] = '(това ще бъде Вашето потребителско име)';
$strings['Logon name'] = 'Потребителско име';
$strings['Your logon name is'] = 'Вашето потребителско име е %s';

$strings['Start'] = 'Начало';
$strings['End'] = 'Край';
$strings['Start date must be less than or equal to end date'] = 'Началната дата трябва да е по-малка или равна на крайната дата';
$strings['That starting date has already passed'] = 'Тази начална дата вече е минала';
$strings['Basic'] = 'Основна';
$strings['Participants'] = 'Участници';
$strings['Close'] = 'Затваряне';
$strings['Start Date'] = 'Начална Дата';
$strings['End Date'] = 'Крайна Дата';
$strings['Minimum'] = 'Минимум';
$strings['Maximum'] = 'Максимум';
$strings['Allow Multiple Day Reservations'] = 'Разрешаване на Многодневни Резервации';
$strings['Invited Users'] = 'Поканени Потребители';
$strings['Invite Users'] = 'Поканване на Потребители';
$strings['Remove Participants'] = 'Преместване на Участници';
$strings['Reservation Invitation'] = 'Покана за Резервация';
$strings['Manage Invites'] = 'Управление на Поканени';
$strings['No invite was selected'] = 'Не е избрана покана';
$strings['reservation accepted'] = '%s Приемане на Ваша Покана за %s';
$strings['reservation declined'] = '%s Отказване на Ваша Покана за %s';
$strings['Login to manage all of your invitiations'] = 'Регистрирайте се, за да управлявате всички Ваши покани';
$strings['Reservation Participation Change'] = 'Смяна на Участие в Резервации';
$strings['My Invitations'] = 'Моите Покани';
$strings['Accept'] = 'Приемам';
$strings['Decline'] = 'Отказвам';
$strings['Accept or decline this reservation'] = 'Приемане или отказване на тази резервация';
$strings['My Reservation Participation'] = 'Моето Участие в Резервации';
$strings['End Participation'] = 'Край на Участие';
$strings['Owner'] = 'Собственик';
$strings['Particpating Users'] = 'Участващи Потребители';
$strings['No advanced options available'] = 'Не са достъпни разширени опции';
$strings['Confirm reservation participation'] = 'Потвърждаване на участие в резервация';
$strings['Confirm'] = 'Потвърждаване';
$strings['Do for all reservations in the group?'] = 'За всички резервации в групата ли?';

$strings['My Calendar'] = 'Моя Календар';
$strings['View My Calendar'] = 'Разглеждане на Моя Календар';
$strings['Participant'] = 'Участник';
$strings['Recurring'] = 'Повтарящ се';
$strings['Multiple Day'] = 'Кратен Ден';
$strings['[today]'] = '[днес]';
$strings['Day View'] = 'Разглеждане на Ден';
$strings['Week View'] = 'Разглеждане на Седмица';
$strings['Month View'] = 'Разглеждане на Месец';
$strings['Resource Calendar'] = 'Календар на Ресурс';
$strings['View Resource Calendar'] = 'Преглед на Календар на Разписание';	// @since 1.2.0
$strings['Signup View'] = 'Разглеждане на Регистрации';

$strings['Select User'] = 'Избиране на Потребител';
$strings['Change'] = 'Промяна';

$strings['Update'] = 'Актуализация';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt Актуализация е налична от версия 1.0.0 или по-нова';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt е актуализиран';
$strings['Migrating reservations'] = 'Мигриране на резервации';

$strings['Admin'] = 'Админ';
$strings['Manage Announcements'] = 'Управление на Обяви';
$strings['There are no announcements'] = 'Няма обяви';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Максимум Капацитет Участници';
$strings['Leave blank for unlimited'] = 'Оставете празно за неограничен';
$strings['Maximum of participants'] = 'Този ресурс има максимален капацитет от %s участника';
$strings['That reservation is at full capacity.'] = 'Тази резервация е достигнала максималния капацитет.';
$strings['Allow registered users to join?'] = 'Да позволя ли регистрирани потребители да се присъединят?';
$strings['Allow non-registered users to join?'] = 'Да позволя ли нерегистрирани потребители да се присъединят?';
$strings['Join'] = 'Присъединяване';
$strings['My Participation Options'] = 'Моите Опции за Участие';
$strings['Join Reservation'] = 'Присъединяване към Резервация';
$strings['Join All Recurring'] = 'Присъединяване към Всички Периодично';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'Вие не участвате в следните дати на резервация, защото за тях е запълнен максималния капацитет.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'Вие вече сте поканен за тази резервация. Моля следвайте инструкцията за участие, която преди това е изпратена на Вашия email.';
$strings['Additional Tools'] = 'Допълнителни Инструменти';
$strings['Create User'] = 'Създаване на Потребител';
$strings['Check Availability'] = 'Проверка за Наличност';
$strings['Manage Additional Resources'] = 'Управление на Аксесоари';
$strings['All Additional Resources'] = 'Всички Аксесоари';
$strings['Number Available'] = 'Брой Налични';
$strings['Unlimited'] = 'Неограничено';
$strings['Add Additional Resource'] = 'Добавяне на Аксесоар';
$strings['Edit Additional Resource'] = 'Редактиране на Аксесоар';
$strings['Checking'] = 'Проверяване';
$strings['You did not select anything to delete.'] = 'Не сте избрали нищо за изтриване.';
$strings['Added Resources'] = 'Добавени Ресурси';
$strings['Additional resource is reserved'] = 'Допълнителният ресурс %s има само %s налични по това време';
$strings['All Groups'] = 'Всички Групи';
$strings['Group Name'] = 'Име на Група';
$strings['Delete Groups'] = 'Изтриване на Групи';
$strings['Manage Groups'] = 'Управление на Групи';
$strings['None'] = 'Нищо';
$strings['Group name is required.'] = 'Име на Група е задължително.';
$strings['Groups'] = 'Групи';
$strings['Current Groups'] = 'Текущи Групи';
$strings['Group Administration'] = 'Администриране на Група';
$strings['Reminder Subject'] = 'Напомняне за Резервация- %s, %s %s';
$strings['Reminder'] = 'Напомняне';
$strings['before reservation'] = 'преди резервация';
$strings['My Participation'] = 'Мое Участие';
$strings['My Past Participation'] = 'Мое Минало Участие';
$strings['Timezone'] = 'Часова зона';
$strings['Export'] = 'Експорт';
$strings['Select reservations to export'] = 'Изберете резервации за експорт';
$strings['Export Format'] = 'Формат на експорт';
$strings['This resource cannot be reserved less than x hours in advance'] = 'Този ресурс не може да бъде резервиран по-малко от %s часа предварително';
$strings['This resource cannot be reserved more than x hours in advance'] = 'Този ресурс не може да бъде резервиран повече от %s часа предварително';
$strings['Minimum Booking Notice'] = 'Предупреждение за Минимум Ангажиране';
$strings['Maximum Booking Notice'] = 'Предупреждение за Максимум Ангажиране';
$strings['hours prior to the start time'] = 'часа преди началото';
$strings['hours from the current time'] = 'часа от текущото време';
$strings['Contains'] = 'Съдържа';
$strings['Begins with'] = 'Започва с';
$strings['Minimum booking notice is required.'] = 'Предупреждение за минимум ангажиране е задължително.';
$strings['Maximum booking notice is required.'] = 'Предупреждение за максимум ангажиране е задължително.';
$strings['Accessory Name'] = 'Име на Аксесоар';
$strings['Accessories'] = 'Аксесоари';
$strings['All Accessories'] = 'Всички Аксесоари';
$strings['Added Accessories'] = 'Добавени Аксесоари';
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
				. "Вие се регистрирахте успешно със следната информация:\r\n"
				. "Логване: %s\r\n"
				. "Име: %s %s \r\n"
				. "Телефон: %s \r\n"
				. "Институция: %s \r\n"
				. "Длъжност: %s \r\n\r\n"
				. "Моля, логнете се в разписанието тук:\r\n"
				. "%s \r\n\r\n"
				. "Вие можете да намерите връзки към онлайн разписанието и да редактирате Вашия профил в Моя Контролен Панел.\r\n\r\n"
				. "Моля, отнесете всички въпроси за ресурси и резервации към %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "Админ,\r\n\r\n"
					. "Регистриран е нов потребител със следната информация:\r\n"
					. "Email: %s \r\n"
					. "Име: %s %s \r\n"
					. "Телефон: %s \r\n"
					. "Институция: %s \r\n"
					. "Длъжност: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "Вие успешно резервирахте %s резервация #%s.\r\n\r\n<br/><br/>"
			. "Моля, използувайте този номер на резервация, когато отправяте въпроси към администратора.\r\n\r\n<br/><br/>"
			. "Резервация между %s %s и %s %s за %s"
			. " разположена в %s е %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "Тази резервация беше повторена на следните дати:\r\n<br/>";
$email['reservation_activity_3'] = "Всички периодични резервации в тази група бяха също %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "Резюме за тази резервация:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "Ако това е грешка, моля свържете се с администратора на: %s"
			. " или му позвънете %s.\r\n\r\n<br/><br/>"
			. "Вие монете да разгледате или промените информацията на Вашата резервация по всяко време, като"
			. " се логнете в %s на:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "Моля, отправяйте всички тежнически въпроси към <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "Резервация #%s е одобрена.\r\n\r\n<br/><br/>"
			. "Моля използувайте този номер на резервация, когато отправяте въпроси към администратора.\r\n\r\n<br/><br/>"
			. "Резервация между %s %s и %s %s за %s"
			. " разположен(а) в %s е %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "Вашата %s парола е сменена от администратора.\r\n\r\n"
			. "Вашата временна парола е:\r\n\r\n %s\r\n\r\n"
			. "Моля, използувайте тази временна парола (copy и paste, за да сте сигурни, че е вярна), за да влезете в %s на %s"
			. " и я сменете веднага, като използувате линк 'Смяна на Информация на Профил/Парола' в таблица Мои Бързи Връзки.\r\n\r\n"
			. "Моля обърнете се към %s , ако имате въпроси.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Вашата нова парола за Вашата %s сметка е:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Моля, Влезте в %s "
            . "с тази нова парола "
            . "(copy и paste, за да сте сигурни, че е вярна) "
            . "и веднага сменете своята парола, като кликнете върху връзка "
            . "Смяна на Информация на Профил/Парола "
            . "в Моя Контролен Панел.\r\n\r\n"
            . "Моля, отправяйте всички въпроси към %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s Ви кани да участвате в следнаъа резервация:\r\n\r\n"
		. "Ресурс: %s\r\n"
		. "Начална Дата: %s\r\n"
		. "Начално Време: %s\r\n"
		. "Крайна Дата: %s\r\n"
		. "Крайно Време: %s\r\n"
		. "Резюме: %s\r\n"
		. "Дати на Повторение (ако има): %s\r\n\r\n"
		. "За да приемете тази покана, кликнете върху тази връзка (copy и paste, ако не е повдигната) %s\r\n"
		. "За да откажете тази покана, кликнете върху тази връзка (copy и paste, ако не е повдигната) %s\r\n"
		. "За да приемете определени дати или за да управлявате Вашите резервации по-късно, моля влезте в %s на %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "Вие сте изтрити от следната резервация:\r\n\r\n"
		. "Ресурс: %s\r\n"
		. "Начална Дата: %s\r\n"
		. "Начално Време: %s\r\n"
		. "Крайна Дата: %s\r\n"
		. "Крайно Време: %s\r\n"
		. "Резюме: %s\r\n"
		. "Дати на Повторение (ако има): %s\r\n\r\n";	

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Вашата резервация за %s от %s %s до %s %s наближава.";
?>