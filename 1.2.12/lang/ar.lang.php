<?php
/**
* English (en) translation file.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Your Name <your@email.address.net>
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
//$charset = 'iso-8859-1';
$charset = 'Windows-1256';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('ÇáÃÍÏ', 'ÇáÇËäíä', 'ÇáËáÇËÇÁ', 'ÇáÃÑÈÚÇÁ', 'ÇáÎãíÓ', 'ÇáÌãÚÉ', 'ÇáÓÈÊ');

// The three letter abbreviation
//$days_abbr = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$days_abbr = array('ÃÍÏ', 'ÇËäíä', 'ËáÇËÇÁ', 'ÃÑÈÚÇÁ', 'ÎãíÓ', 'ÌãÚÉ', 'ÓÈÊ');
// The two letter abbreviation
$days_two  = array('ÃÍÏ', 'ÇËäíä', 'ËáÇËÇÁ', 'ÃÑÈÚÇÁ', 'ÎãíÓ', 'ÌãÚÉ', 'ÓÈÊ');
//('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
// The one letter abbreviation
$days_letter = array('Í', 'ä', 'Ë', 'Ú', 'Î', 'Ì', 'Ó');



/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name

$months_full = array('ßÇäæä ÇáËÇäí', 'ÔÈÇØ', 'ÂĞÇÑ', 'äíÓÇä', 'ÃíÇÑ', 'ÍÒíÑÇä', 'ÊãæÒ', 'ÂÈ', 'Ãíáæá', 'ÊÔÑíä Ãæá', 'ÊÔÑíä ÇáËÇäí', 'ßÇäæä ÇáÃæá');
// The three letter month name
//$months_abbr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$months_abbr = array('ßÇäæä ÇáËÇäí', 'ÔÈÇØ', 'ÂĞÇÑ', 'äíÓÇä', 'ÃíÇÑ', 'ÍÒíÑÇä', 'ÊãæÒ', 'ÂÈ', 'Ãíáæá', 'ÊÔÑíä Ãæá', 'ÊÔÑíä ÇáËÇäí', 'ßÇäæä ÇáÃæá');
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
$dates['schedule_daily'] = '%A <br/>%d/%m/%Y';
// Date on top-right of each page
$dates['header'] = '%A, %d %B, %Y';
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
$strings['hours'] = 'ÓÇÚÇÊ';
$strings['minutes'] = 'ÏŞÇÆŞ';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'Õ';
$strings['pm'] = 'ã';

$strings['Administrator'] = 'ÇáãÏíÑ';
$strings['Welcome Back'] = 'ÃåáÇ Èß ãä ÌÏíÏ, %s';
$strings['Log Out'] = 'ÎÑæÌ';
$strings['My Control Panel'] = 'áæÍÉ ÇáÊÍßã';
$strings['Help'] = 'ãÓÇÚÏÉ';
$strings['Manage Schedules'] = 'ÅÏÇÑÉ ÇáÌÏÇæá';
$strings['Manage Users'] = 'ÅÏÇÑÉ ÇáãÓÊËãÑíä';
$strings['Manage Resources'] = 'ÅÏÇÑÉ ÇáãæÇÑÏ';
$strings['Manage User Training'] = 'ÅÏÇÑÉ ÇáÊÏÑíÈ ÇáãÓÊËãÑ';
$strings['Manage Reservations'] = 'ÅÏÇÑÉ ÇáÍÌæÒÇÊ';
$strings['Email Users'] = 'ãÓÊËãÑí ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Export Database Data'] = 'ŞÇÚÏÉ  ÈíÇäÇÊ ÇáÊÕÏíÑ';
$strings['Reset Password'] = 'ÅÚÇÏÉ ÖÈØ ßáãÉ ÇáÓÑ';
$strings['System Administration'] = 'ÅÏÇÑÉ ÇáäÙÇã';
$strings['Successful update'] = 'äÌÇÍ ÇáÊÍÏíË';
$strings['Update failed!'] = 'İÔá ÇáÊÍÏíË!';
$strings['Manage Blackout Times'] = 'ÅÏÇÑÉ ÇáÃæŞÇÊ ÇáãÚÊãÉ';
$strings['Forgot Password'] = 'äÓíÊ ßáãÉ ÇáÓÑ';
$strings['Manage My Email Contacts'] = 'ÅÏÇÑÉ ÇáÈÑíÏ ÇáÅáßÊÑæäí .ÇÊÕÇáÇÊ';
$strings['Choose Date'] = 'ÇÎÊÑ ÇáÊÇÑíÎ';
$strings['Modify My Profile'] = 'ÊÚÏíá ãáİí ÇáÔÎÕí';
$strings['Register'] = 'ÓÌá';
$strings['Processing Blackout'] = 'ÊÌåíÒ ÇáÊÚÊíã';
$strings['Processing Reservation'] = 'ÊÌåíÒ ÇáÍÌÒ';
$strings['Online Scheduler [Read-only Mode]'] = '(ãÌÏæá ÇáÅäÊÑäÊ (ÇáŞÑÇÁÉ İŞØ';
$strings['Online Scheduler'] = 'ÇáãÈÑãÌ Úáì ÇáÇäÊÑäÊ';
$strings['phpScheduleIt Statistics'] = 'ÇáÈÑäÇãÌ  ÅÍÕÇÁÇÊ';
$strings['User Info'] = 'ãÚáæãÇÊ ÇáãÓÊËãÑ :';

$strings['Could not determine tool'] = 'áã ÊÓÊØÚ ÊÍÏíÏ ÇáÃÏÇÉ. íÑÌì ÇáÚæÏÉ Åáì áæÍÉ ÇáÊÍßã æÍÇæá ãÑÉ ÃÎÑì İí æŞÊ áÇÍŞ.';
$strings['This is only accessable to the administrator'] = 'ÊÍÊÇÌ ãÏíÑ ÇáÈÑäÇãÌ';
$strings['Back to My Control Panel'] = 'ÇáÚæÏÉ Åáì áæÍÉ ÇáÊÍßã';
$strings['That schedule is not available.'] = 'ÇáÌÏæá ÛíÑ ãÊÇÍ';
$strings['You did not select any schedules to delete.'] = 'áã ÊÎÊÑ Ãí ÌÏÇæá ááÍĞİ';
$strings['You did not select any members to delete.'] = ' áã ÊÎÊÑ Ãí ÃÚÖÇÁ ááÍĞİ';
$strings['You did not select any resources to delete.'] = 'áã ÊÎÊÑ Ãí ãÕÇÏÑ ááÍĞİ';
$strings['Schedule title is required.'] = 'ÇáãØáæÈ ÚäæÇä ÇáÌÏæá';
 $strings['Invalid start/end times'] = 'ÈÏÇíÉ/äåÇíÉ ÃæŞÇÊ ÛíÑ ÕÍíÍÉ';
$strings['View days is required'] = 'ÇáãØáæÈ ÑÄíÉ ÇáÃíÇã';
$strings['Day offset is required'] = 'ÇáãØáæÈ Çáíæã ÇáãŞÇÈá';
$strings['Admin email is required'] = 'ÇáãØáæÈ ÅÏÇÑÉ ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Resource name is required.'] = 'ÇáãØáæÈ ÅÓã ÇáãæÑÏ.';
$strings['Valid schedule must be selected'] = 'íÌÈ ÇÎÊíÇÑ ÇáÌÏæá ÇáÕÍíÍ';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'ÇáÍÏ ÇáÃÏäì áãÏÉ ÇáÍÌÒ íÌÈ Ãä Êßæä ÃŞá ãä Ãæ ÊÓÇæí ÇáÍÏ ÇáÃŞÕì áãÏÉ ÇáÍÌÒ.';
$strings['Your request was processed successfully.'] = 'ØáÈß Êã ÊÌåíÒå ÈäÌÇÍ.';
$strings['Go back to system administration'] = 'ÇáÚæÏÉ áäÙÇã ÇáÅÏÇÑÉ';
$strings['Or wait to be automatically redirected there.'] = 'Ãæ ÇáÇäÊÙÇÑ Åáì Ãä íßæä åäÇß ÅÚÇÏÉ ÊæÌíåß ÊáŞÇÆíÇğ.';
$strings['There were problems processing your request.'] = 'æÌÏ ãÔÇßá İí ÊÌåíÒ ØáÈß';
$strings['Please go back and correct any errors.'] = 'íÑÌì ÇáÚæÏÉ æÊÕÍíÍ Çí ÇÎØÇÁ';
$strings['Login to view details and place reservations'] = 'ÃÏÎá áÊÑì ÇáÊİÇÕíá æãßÇä ÇáÍÌæÒÇÊ';
$strings['Memberid is not available.'] = 'ÑŞã ÇáÊÚÑíİ: %s  ÛíÑ ãÊÇÍ';

$strings['Schedule Title'] = 'ÚäæÇä ÇáÌÏæá';
$strings['Start Time'] = 'æŞÊ ÇáÈÏÁ';
$strings['End Time'] = 'æŞÊ ÇáÇäÊåÇÁ';
$strings['Time Span'] = 'ÇáãÏì ÇáÒãäí';
$strings['Weekday Start'] = 'ÈÏÇíÉ ÇáÅÓÈæÚ';
$strings['Admin Email'] = 'ÅÏÇÑÉ ÇáÈÑíÏ ÇáÅáßÊÑæäí';

$strings['Default'] = 'ÇáÃÓÇÓí';
$strings['Reset'] = 'ÅÚÇÏÉ ÊÚííä';
$strings['Edit'] = 'ÊÍÑíÑ';
$strings['Delete'] = 'ÍĞİ';
$strings['Cancel'] = 'ÇáÛÇÁ';
$strings['View'] = 'ÑÄíÉ';
$strings['Modify'] = 'ÊÚÏíá';
$strings['Save'] = 'ÍİÙ';
$strings['Back'] = 'ÑÌæÚ';
$strings['Next'] = 'ÇáÊÇáí';
$strings['Close Window'] = 'ÅÛáÇŞ ÇáäÇİĞÉ';
$strings['Search'] = 'ÈÍË';
$strings['Clear'] = 'ÅÒÇáÉ';

$strings['Days to Show'] = 'ÃíÇã ááÑÄíÉ';
$strings['Reservation Offset'] = 'ÇáÍÌÒ ÇáãŞÇÈá';
$strings['Hidden'] = 'ãÎİí';
$strings['Show Summary'] = 'ÑÄíÉ ÇáÎáÇÕÉ';
$strings['Add Schedule'] = 'ÅÖÇİÉ ÌÏæá';
$strings['Edit Schedule'] = 'ÊÍÑíÑ ÌÏæá';
$strings['No'] = 'áÇ';
$strings['Yes'] = 'äÚã';
$strings['Name'] = 'ÇáÅÓã';
$strings['First Name'] = 'ÇáÅÓã ÇáÃæá';
$strings['Last Name'] = 'ÇáÅÓã ÇáÃÎíÑ';
$strings['Resource Name'] = 'ÅÓã ÇáãæÑÏ';
$strings['Email'] = 'ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Institution'] = 'ÇáãÚåÏ';
$strings['Phone'] = 'ÇáåÇÊİ';
$strings['Password'] = 'ßáãÉ ÇáÓÑ';
$strings['Permissions'] = 'ÇáÓãÇÍíÇÊ';
$strings['View information about'] = 'ÑÄíÉ ÇáãÚáæãÇÊ Íæá %s %s';
$strings['Send email to'] = 'ÅÑÓÇá ÈÑíÏ ÅáßÊÑæäí Åáì %s %s';
$strings['Reset password for'] = 'ÅÚÇÏÉ ÖÈØ ßáãÉ ÇáãÑæÑ á %s %s';
$strings['Edit permissions for'] = 'ÊÍÑíÑ ÇáÓãÇÍíÇÊ á %s %s';
$strings['Position'] = 'æÖÚ';
$strings['Password (6 char min)'] = 'ßáãÉ ÇáÓÑ (ÃŞáå %s ÍÑæİ)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'ÃÚÏ ÅÏÎÇá ßáãÉ ÇáÓÑ';

$strings['Sort by descending last name'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ ÇáÅÓã ÇáÃÎíÑ ';
$strings['Sort by descending email address'] = 'ÇáÊÑÊíÈ  ÇáÊäÇÒáí  ÍÓÈ ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Sort by descending institution'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ ÇáãÚåÏ';
$strings['Sort by ascending last name'] = 'ÇáÊÑÊíÈ ÇáÊÕÇÚÏí  ÍÓÈ ÇáÅÓã ÇáÃÎíÑ';
$strings['Sort by ascending email address'] = 'ÇáÊÑÊíÈ ÇáÊÕÇÚÏí  ÍÓÈ ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Sort by ascending institution'] = 'ÇáÊÑÊíÈ ÇáÊÕÇÚÏí ÍÓÈ ÇáãÚåÏ';
$strings['Sort by descending resource name'] = 'ÇáÊÑÊíÈ ÍÓÈ ÅÓã ÇáãæÑÏ ÊäÇÒáí';
$strings['Sort by descending location'] = 'ÇáÊÑÊíÈ ÍÓÈ ÇáãæŞÚ ÊäÇÒáí';
$strings['Sort by descending schedule title'] = 'ÇáÊÑÊíÈ ÍÓÈ ÚäæÇä ÇáÌÏæá ÇáÒãäí ÇáÊäÇÒáí ';
$strings['Sort by ascending resource name'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí íÍÓÈ ÅÓã ÇáãæÑÏ';
$strings['Sort by ascending location'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÈÍÓÈ  ÇáãæŞÚ';
$strings['Sort by ascending schedule title'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÚäæÇä ÇáÌÏæá ';
$strings['Sort by descending date'] = 'ÇáÊÑÊíÈ ÊäÇÒáí ÍÓÈ ÇáÊÇÑíÎ ';
$strings['Sort by descending user name'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ  ÅÓã ÇáãÓÊËãÑ';
$strings['Sort by descending start time'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí  ÍÓÈ  æŞÊ ÇáÈÏÁ';
$strings['Sort by descending end time'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ æŞÊ ÇáÇäÊåÇÁ';
$strings['Sort by ascending date'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÇáÊÇÑíÎ';
$strings['Sort by ascending user name'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÅÓã ÇáãÓÊËãÑ';
$strings['Sort by ascending start time'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ æŞÊ ÇáÈÏÁ';
$strings['Sort by ascending end time'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ æŞÊ ÇáÇäÊåÇÁ';
$strings['Sort by descending created time'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ æŞÊ ÇáÅäÔÇÁ';
$strings['Sort by ascending created time'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ æŞÊ ÇáÅäÔÇÁ';
$strings['Sort by descending last modified time'] = 'ÇáÊÑÊíÈ ÇáÊäÇÒáí ÍÓÈ ÂÎÑ ÊÚÏíá ááæŞÊ';
$strings['Sort by ascending last modified time'] = 'ÇáÊÑÊíÈ ÊÕÇÚÏí ÍÓÈ ÂÎÑ ÊÚÏíá ááæŞÊ';

$strings['Search Users'] = 'ÈÍË ÇáãÓÊËãÑíä';
$strings['Location'] = 'ÇáãæŞÚ';
$strings['Schedule'] = 'ÌÏæá';
$strings['Phone'] = 'ÇáåÇÊİ';
$strings['Notes'] = 'ãáÇÍÙÇÊ';
$strings['Status'] = 'ÇáÍÇáÉ';
$strings['All Schedules'] = 'ÌãíÚ ÇáÌÏÇæá';
$strings['All Resources'] = 'ÌãíÚ ÇáãæÇÑÏ';
$strings['All Users'] = 'ÌãíÚ ÇáãÓÊËãÑíä';

$strings['Edit data for'] = 'áÊÍÑíÑ ÇáÈíÇäÇÊ %s';
$strings['Active'] = 'İÚÇá';
$strings['Inactive'] = 'ÎÇãá';
$strings['Toggle this resource active/inactive'] = 'ÊÈÏíá åĞÇ ÇáãæÑÏ äÔØ / ÛíÑ äÔØ';
$strings['Minimum Reservation Time'] = 'ÇáÍÏ ÇáÃÏäì áæŞÊ ÇáÍÌÒ';
$strings['Maximum Reservation Time'] = 'ÇáÍÏ ÇáÃŞÕì áæŞÊ ÇáÍÌÒ';
$strings['Auto-assign permission'] = 'ÅÓäÇÏ ÅĞä- Âáí';
$strings['Add Resource'] = 'ÅÖÇİÉ ãæÑÏ';
$strings['Edit Resource'] = 'ÊÍÑíÑ ãæÑÏ';
$strings['Allowed'] = 'ÓãÍ';
$strings['Notify user'] = 'ÅÚáÇã ÇáãÓÊËãÑ';
$strings['User Reservations'] = 'ÍÌæÒÇÊ ÇáãÓÊËãÑ ';
$strings['Date'] = 'ÇáÊÇÑíÎ';
$strings['User'] = 'ÇáãÓÊËãÑ';
$strings['Email Users'] = 'ãÓÊËãÑí ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Subject'] = 'ÇáãæÖæÚ';
$strings['Message'] = 'ÑÓÇáÉ';
$strings['Please select users'] = 'íÑÌì ÇÎÊíÇÑ ÇáãÓÊËãÑíä';
$strings['Send Email'] = 'ÅÑÓÇá ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['problem sending email'] = 'ÚİæÇ ¡ ßÇäÊ åäÇß ãÔßáÉ İí ÅÑÓÇá ÇáÈÑíÏ ÇáÅáßÊÑæäí ÇáÎÇÕ Èß. íÑÌì ÅÚÇÏÉ ÇáãÍÇæáÉ áÇÍŞÇğ.';
$strings['The email sent successfully.'] = 'ÃÑÓá ÇáÈÑíÏ ÇáÅáßÊÑæäí ÈäÌÇÍ';
$strings['do not refresh page'] = 'ÑÌÇÁ <u>ÚÏã</u> ÊÍÏíË åĞå ÇáÕİÍÉ. æÈĞáß Óæİ íÑÓá ÇáÈÑíÏ ÇáÅáßÊÑæäí ãÑÉ ÃÎÑì.';
$strings['Return to email management'] = 'ÇáÚæÏÉ Åáì ÅÏÇÑÉ ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Please select which tables and fields to export'] = 'ÇáÑÌÇÁ ÊÍÏíÏ ÇáÌÏÇæá æÇáÍŞæá  ááÊÕÏíÑ :';
$strings['all fields'] = '- ÌãíÚ ÇáÍŞæá -';
$strings['HTML'] = 'HTML';
$strings['Plain text'] = 'äÕ ÚÇÏí';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'ÊÕÏíÑ ÈíÇäÇÊ';
$strings['Reset Password for'] = 'ÅÚÇÏÉ ÖÈØ ßáãÉ ÇáãÑæÑ á %s';
$strings['Please edit your profile'] = 'íÑÌì ÊÚÏíá Çáãáİ ÇáÔÎÕí';
$strings['Please register'] = 'ãä İÖáß ÓÌá';
$strings['Keep me logged in'] = 'ÍİÙ ÊÓÌíá ÇáÏÎæá <br/>(íÊØáÈ ÇáßæßíÒ)';
$strings['Edit Profile'] = 'ÊÍÑíÑ ãáİí ÇáÔÎÕí';
$strings['Register'] = 'ÓÌá';
$strings['Please Log In'] = 'íÑÌì ÊÓÌíá ÇáÏÎæá';
$strings['Email address'] = 'ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Password'] = 'ßáãÉ ÇáãÑæÑ';
$strings['First time user'] = 'Ãæá ãÑÉ¿  ãÓÊËãÑ';
$strings['Click here to register'] = 'ÇÖÛØ åäÇ ááÊÓÌíá';
$strings['Register for phpScheduleIt'] = 'ÓÌá İí ÇáÈÑäÇãÌ';
$strings['Log In'] = 'ÓÌá İí';
$strings['View Schedule'] = 'ÑÄíÉ ÇáÌÏæá';
$strings['View a read-only version of the schedule'] = 'äÓÎÉ ÇáÈÑäÇãÌ ááŞÑÇÁÉ İŞØ ';
$strings['I Forgot My Password'] = 'äÓíÊ ßáãÉ ÇáãÑæÑ';
$strings['Retreive lost password'] = ' İŞÏÊ ÇÓÊÑÏÇÏ ßáãÉ ÇáÓÑ ';
$strings['Get online help'] = 'ÇÍÕá Úáì ÊÚáíãÇÊ ÚÈÑ ÇáÇäÊÑäÊ';
$strings['Language'] = 'ÇááÛÉ';
$strings['(Default)'] = '(ÇáÃÓÇÓí)';

$strings['My Announcements'] = 'ÅÚáÇäÇÊí';
$strings['My Reservations'] = 'ÍÌæÒÇÊí';
$strings['My Permissions'] = 'ÃĞæäí';
$strings['My Quick Links'] = ' ÇÑÊÈÇØÇÊí ÇáÓÑíÚÉ';
$strings['Announcements as of'] = 'ÅÚáÇäÇÊ ÇÚÊÈÇÑÇğ ãä %s';
$strings['There are no announcements.'] = 'áÇ ÊæÌÏ ÅÚáÇäÇÊ';
$strings['Resource'] = 'ÇáãæÑÏ';
$strings['Created'] = 'ãäÔÆ';
$strings['Last Modified'] = 'ÂÎÑ ÊÚÏíá';
$strings['View this reservation'] = 'ÑÄíÉ åĞÇ ÇáÍÌÒ';
$strings['Modify this reservation'] = 'ÊÚÏíá åĞÇ ÇáÍÌÒ';
$strings['Delete this reservation'] = 'ÍĞİ åĞÇ ÇáÍÌÒ';
$strings['Bookings'] = 'ÇáÍÌæÒÇÊ';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'ÊÛííÑ Çáãáİ ÇáÔÎÕí';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'ÊİÕíáÇÊ ÇáÈÑíÏ ÇáÅáßÊÑæäí';				// @since 1.2.0
$strings['Mass Email Users'] = 'ßÊáÉ ãÓÊËãÑí ÇáÈÑíÏ ÇáÅáßÊÑæäí';
$strings['Search Scheduled Resource Usage'] = 'ÈÍË ÇáÍÌæÒÇÊ';		// @since 1.2.0
$strings['Export Database Content'] = 'ÊÕÏíÑ ãÍÊæì ŞÇÚÏÉ ÈíÇäÇÊ';
$strings['View System Stats'] = 'ÅÍÕÇÆíÇÊ ÇáÌÏÇæá';
$strings['Email Administrator'] = 'ãÏíÑ ÇáÈÑíÏ ÇáÅáßÊÑæäí';

$strings['Email me when'] = 'ÃÑÓá áí ÈÑíÏÇğ ÅáßÊÑæäíÇğ ÚäÏãÇ :';
$strings['I place a reservation'] = 'áí ãßÇä ÍÌÒ';
$strings['My reservation is modified'] = 'ÍÌÒí ãÚÏá';
$strings['My reservation is deleted'] = 'ÍÌÒí ÍĞİ';
$strings['I prefer'] = 'Åääí ÃİÖá :';
$strings['Your email preferences were successfully saved'] = 'ÊİÕíáÇÊ ÈÑíÏß ÇáÅáßÊÑæäí ÍİÙÊ ÈäÌÇÍ ';
$strings['Return to My Control Panel'] = 'ÇáÚæÏÉ Åáì áæÍÉ ÇáÊÍßã';

$strings['Please select the starting and ending times'] = 'ÇáÑÌÇÁ ÇÎÊíÇÑ ÈÏÇíÉ æäåÇíÉ ÇáÃæŞÇÊ:';
$strings['Please change the starting and ending times'] = 'ÇáÑÌÇÁ ÊÛííÑ ÈÏÇíÉ æäåÇíÉ ÇáÃæŞÇÊ:';
$strings['Reserved time'] = 'ÇáæŞÊ ÇáãÍÌæÒ:';
$strings['Minimum Reservation Length'] = 'ÇáÍÏ ÇáÃÏäì áØæá ÇáÍÌÒ:';
$strings['Maximum Reservation Length'] = 'ÇáÍÏ ÇáÃŞÕì áØæá ÇáÍÌÒ:';
$strings['Reserved for'] = 'ãÍÌæÒ á:';
$strings['Will be reserved for'] = 'æÓíÎÕÕ á:';
$strings['N/A'] = 'äÚã/áÇ';
$strings['Update all recurring records in group'] = 'ÊÍÏíË ÌãíÚ ÇáÓÌáÇÊ ÇáãÊßÑÑÉ İí ÇáãÌãæÚÉ¿';
$strings['Delete?'] = 'ÍĞİ¿';
$strings['Never'] = '-- ÃÈÏÇğ --';
$strings['Days'] = 'ÃíÇã';
$strings['Weeks'] = 'ÃÓÇÈíÚ';
$strings['Months (date)'] = 'ÇáÃÔåÑ (ÇáÊÇÑíÎ)';
$strings['Months (day)'] = 'ÇáÃÔåÑ (Çáíæã)';
$strings['First Days'] = 'ÇáÃíÇã ÇáÃæáì';
$strings['Second Days'] = 'ÇáÃíÇã ÇáËÇäíÉ';
$strings['Third Days'] = 'ÇáÃíÇã ÇáËÇáËÉ';
$strings['Fourth Days'] = 'ÇáÃíÇã ÇáÑÇÈÚÉ';
$strings['Last Days'] = 'ÇáÃíÇã ÇáÃÎíÑÉ';
$strings['Repeat every'] = 'ÃßÑÑ ßá :';
$strings['Repeat on'] = 'ÇßÑÑ Úáì :';
$strings['Repeat until date'] = 'ÇßÑÑ ÍÊì ÊÇÑíÎ :';
$strings['Choose Date'] = 'ÇÎÊÑ ÇáÊÇÑíÎ';
$strings['Summary'] = 'ÎáÇÕÉ';

$strings['View schedule'] = 'ÑÄíÉ ÇáÌÏæá :';
$strings['My Reservations'] = 'ÍÌæÒÇÊí';
$strings['My Past Reservations'] = 'ÍÌæÒÇÊí ÇáãÇÖíÉ';
$strings['Other Reservations'] = 'ÇáÍÌæÒÇÊ ÇáÃÎÑì';
$strings['Other Past Reservations'] = 'ÇáÍÌæÒÇÊ ÇáÃÎÑì ÇáãÇÖíÉ';
$strings['Blacked Out Time'] = 'ÃæŞÇÊ ãÚÊãÉ';
$strings['Set blackout times'] = 'ÍÏÏ ÇáÃæŞÇÊ ÇáãÚÊãÉ%s Úáì %s'; 
$strings['Reserve on'] = 'ÍÌÒ %s Úáì %s';
$strings['Prev Week'] = '&laquo; ÇáÅÓÈæÚ ÇáÓÇÈŞ';
$strings['Jump 1 week back'] = 'ÇĞåÈ Åáì ÇáæÑÇÁ ÅÓÈæÚ 1';
$strings['Prev days'] = '&#8249; ÇáÓÇÈŞÉ %d ÇáÃíÇã';
$strings['Previous days'] = '&#8249; ÇáÓÇÈŞÉ %d ÇáÃíÇã';
$strings['This Week'] = 'åĞÇ ÇáÅÓÈæÚ';
$strings['Jump to this week'] = 'ÇĞåÈ áåĞÇ ÇáÅÓÈæÚ';
$strings['Next days'] = 'ÇáÊÇáíÉ %d ÇáÃíÇã &#8250;';
$strings['Next Week'] = 'ÇáÅÓÈæÚ ÇáÊÇáí &raquo;';
$strings['Jump To Date'] = 'ÇĞåÈ Åáì ÊÇÑíÎ';
$strings['View Monthly Calendar'] = 'ÑÄíÉ ÇáÊŞæíã ÇáÔåÑí';
$strings['Open up a navigational calendar'] = 'İÊÍ ÇáÊŞæíã ÇáãáÇÍí ';

$strings['View stats for schedule'] = 'ÑÄíÉ ÅÍÕÇÆíÇÊ ÇáÌÏæá :';
$strings['At A Glance'] = 'İí áãÍÉ';
$strings['Total Users'] = 'ÅÌãÇáí ÇáãÓÊËãÑíä :';
$strings['Total Resources'] = 'ãÌãæÚ ÇáãæÇÑÏ :';
$strings['Total Reservations'] = 'ãÌãæÚ ÇáÍÌæÒÇÊ:';
$strings['Max Reservation'] = 'ÇáÍÏ ÇáÃŞÕì ááÍÌÒ:';
$strings['Min Reservation'] = 'ÇáÍÏ ÇáÃÏäì ááÍÌÒ:';
$strings['Avg Reservation'] = 'ãÊæÓØ ÇáÍÌÒ:';
$strings['Most Active Resource'] = 'ÇáãæÑÏ ÇáÃßËÑ äÔÇØÇğ:';
$strings['Most Active User'] = 'ÇáãÓÊËãÑ ÇáÃßËÑ äÔÇØÇğ:';
$strings['System Stats'] = 'ÅÍÕÇÆíÇÊ ÇáäÙÇã';
$strings['phpScheduleIt version'] = 'äÓÎÉ ÇáÈÑäÇãÌ:';
$strings['Database backend'] = 'ŞÇÚÏÉ ÈíÇäÇÊ ÇáÎáİíÉ:';
$strings['Database name'] = 'ÅÓã ŞÇÚÏÉ ÇáÈíÇäÇÊ :';
$strings['PHP version'] = 'PHP äÓÎÉ:';
$strings['Server OS'] = 'ÎÇÏã ÇáäÙÇã:';
$strings['Server name'] = 'ÅÓã ÇáÎÇÏã:';
$strings['phpScheduleIt root directory'] = 'ÇáÏáíá ÇáÑÆíÓí ááÈÑäÇãÌ:';
$strings['Using permissions'] = 'ÇÓÊÎÏÇã ÇáÓãÇÍíÇÊ:';
$strings['Using logging'] = 'ÇÓÊÎÏÇã ÊÓÌíá ÇáÏÎæá:';
$strings['Log file'] = 'ãáİ ÇáÃÍÏÇË :';
$strings['Admin email address'] = 'ÅÏÇÑÉ ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí :';
$strings['Tech email address'] = 'ÊŞäíÉ ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí :';
$strings['CC email addresses'] = 'äÓÎÉ Åáì ÚäÇæíä ÇáÈÑíÏ ÇáÅáßÊÑæäí :';
$strings['Reservation start time'] = 'ÈÏÇíÉ æŞÊ ÇáÍÌÒ :';
$strings['Reservation end time'] = 'äåÇíÉ æŞÊ ÇáÍÌÒ :';
$strings['Days shown at a time'] = 'ÅÙåÇÑ ÇáÃíÇã İí ÇáæŞÊ:';
$strings['Reservations'] = 'ÇáÍÌæÒÇÊ';
$strings['Return to top'] = 'ÚæÏÉ Åáì ÇáÃÚáì';
$strings['for'] = ' ';

$strings['Select Search Criteria'] = 'ÇÎÊÑ ãÚÇííÑ ÇáÈÍË';
$strings['Schedules'] = 'ÌÏÇæá:';
$strings['All Schedules'] = 'ÌãíÚ ÇáÌÏÇæá';
$strings['Hold CTRL to select multiple'] = 'ÇÓÊãÑ ÈÇáäŞÑ CTRL áÎíÇÑÇÊ ãÊÚÏÏÉ';
$strings['Users'] = 'ÇáãÓÊËãÑíä:';
$strings['All Users'] = 'ÌãíÚ ÇáãÓÊËãÑíä';
$strings['Resources'] = 'ÇáãæÇÑÏ';		// @since 1.2.0
$strings['All Resources'] = 'ÌãíÚ ÇáãæÇÑÏ';
$strings['Starting Date'] = 'ÇÈÊÏÇÁğ ãä ÊÇÑíÎ :';
$strings['Ending Date'] = 'ÊÇÑíÎ ÇáÇäÊåÇÁ:';
$strings['Starting Time'] = 'ÇÈÊÏÇÁğ ãä ÇáæŞÊ:';
$strings['Ending Time'] = 'æŞÊ ÇáÇäÊåÇÁ:';
$strings['Output Type'] = 'äæÚ ÇáÎÑÌ:';
$strings['Manage'] = 'ÅÏÇÑÉ';
$strings['Total Time'] = 'ÅÌãÇáí ÇáæŞÊ';
$strings['Total hours'] = 'ãÌãæÚ ÇáÓÇÚÇÊ:';
$strings['% of total resource time'] = '% ãä ãÌãæÚ æŞÊ ÇáãæÑÏ';
$strings['View these results as'] = 'ÑÄíÉ åĞå ÇáäÊÇÆÌ Úáì ÇáäÍæ:';
$strings['Edit this reservation'] = 'ÊÍÑíÑ åĞÇ ÇáÍÌÒ';
$strings['Search Results'] = 'äÊÇÆÌ ÇáÈÍË';
$strings['Search Resource Usage'] = 'ÇÓÊÎÏÇã ÈÍË ÇáãæÑÏ';
$strings['Search Results found'] = 'äÊÇÆÌ ÇáÈÍË: %d ÍÌÒ ';
$strings['Try a different search'] = 'ÊÌÑÈÉ ÈÍË ÂÎÑ';
$strings['Search Run On'] = 'ÇÓÊãÑÇÑ ÇáÈÍË İí:';
$strings['Member ID'] = 'ÑŞã ÇáÊÚÑíİ';
$strings['Previous User'] = '&laquo; ÇáãÓÊËãÑ ÇáÓÇÈŞ';
$strings['Next User'] = 'ÇáãÓÊËãÑ ÇáÊÇáí &raquo;';

$strings['No results'] = 'áÇ ÊæÌÏ äÊÇÆÌ';
$strings['That record could not be found.'] = 'Åä ÇáÓÌá áÇ íãßä ÇáÚËæÑ Úáíå.';
$strings['This blackout is not recurring.'] = 'åĞÇ ÇáÊÚÊíã ÛíÑ ãÊßÑÑ';
$strings['This reservation is not recurring.'] = 'åĞÇ ÇáÍÌÒ ÛíÑ ãÊßÑÑ';
$strings['There are no records in the table.'] = 'áÇ ÊæÌÏ ÓÌáÇÊ İí ÌÏæá %s ';
$strings['You do not have any reservations scheduled.'] = 'áíÓ áÏíß ÃíÉ ÍÌæÒÇÊ ãÌÏæáÉ';
$strings['You do not have permission to use any resources.'] = 'áíÓ áÏíß ÃĞä áÇÓÊÎÏÇã ÃíÉ ãæÇÑÏ.';
$strings['No resources in the database.'] = 'áÇ íæÌÏ ãæÇÑÏ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ';
$strings['There was an error executing your query'] = 'åäÇß ÎØÃ İí ÊäİíĞ ØáÈß :';

$strings['That cookie seems to be invalid'] = 'íÈÏæ Ãä ãáİ Çáßæßí ÛíÑ ÕÍíÍ';
$strings['We could not find that logon in our database.'] = 'ÇáÊÓÌíá ÛíÑ ãæÌæÏ İí ŞÇÚÏÉÇáÈíÇäÇÊ.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'Åä ßáãÉ ÇáÓÑ ÛíÑ ãäÇÓÈÉ İí ŞÇÚÏÉ ÈíÇäÇÊäÇ.';
$strings['You can try'] = '<br />íãßäß Çä ÊÌÑÈ:<br />ÊÓÌíá ÚäæÇä ÇáÈÑíÏ ÇáÅáßÊÑæäí.<br />Ãæ:<br />ßÑÑ ãÍÇæáÉ ÊÓÌíá ÇáÏÎæá ãÑÉ ÃÎÑì.';
$strings['A new user has been added'] = 'ãÓÊËãÑ ÌÏíÏ ÊãÊ ÅÖÇİÊå';
$strings['You have successfully registered'] = 'áŞÏ äÌÍÊ İí ÇáÊÓÌíá!';
$strings['Continue'] = 'ÇÓÊãÑ...';
$strings['Your profile has been successfully updated!'] = 'äÌÍÊ ÚãáíÉ ÊÍÏíË Çáãáİ ÇáÔÎÕí!';
$strings['Please return to My Control Panel'] = 'íÑÌì ÇáÚæÏÉ Åáì áæÍÉ ÇáÊÍßã';
$strings['Valid email address is required.'] = '- áãØáæÈ ÚäæÇä ÇáÈÑíÏ ÇáÕÍíÍ';
$strings['First name is required.'] = '- ÇáãØáæÈ ÇáÅÓã ÇáÃæá';
$strings['Last name is required.'] = '- ÇáãØáæÈ ÇáÅÓã ÇáÃÎíÑ';
$strings['Phone number is required.'] = '- ÇáãØáæÈ ÑŞã ÇáåÇÊİ';
$strings['That email is taken already.'] = '- Åä ÇáÈÑíÏ ÇáÅáßÊÑæäí ãæÌæÏ ãÓÈŞÇğ.<br />íÑÌì ÇáãÍÇæáÉ ãÑÉ ÃÎÑì ãÚ ÚäæÇä ÈÑíÏ ÅáßÊÑæäí ãÎÊáİ';
$strings['Min 6 character password is required.'] = '- ÇáÍÏ ÇáÃÏäì ÇáãØáæÈ %s  ÍÑæİ áßáãÉ ÇáãÑæÑ';
$strings['Passwords do not match.'] = '- ßáãÉ ÇáÓÑ ÛíÑ ãäÇÓÈÉ';

$strings['Per page'] = 'áßá ÕİÍÉ:';
$strings['Page'] = 'ÕİÍÉ:';

$strings['Your reservation was successfully created'] = 'äÌÍÊ ÚãáíÉ ÅäÔÇÁ ÇáÍÌÒ';
$strings['Your reservation was successfully modified'] = ' Êã ÊÚÏíá ÇáÍÌÒ ÈäÌÇÍ ';
$strings['Your reservation was successfully deleted'] = 'ÍÌÒß ÍĞİ ÈäÌÇÍ';	
$strings['Your blackout was successfully created'] = 'ÃäÔÆ ÇáÊÚÊíã  ÈäÌÇÍ';
$strings['Your blackout was successfully modified'] = ' äÌÍÊ ÚãáíÉ ÊÚÏíá ÇáÊÚÊíã';
$strings['Your blackout was successfully deleted'] = 'äÌÍÊ ÚãáíÉ ÍĞİ ÇáÊÚÊíã';
$strings['for the follwing dates'] = 'ááÊæÇÑíÎ ÇáÊÇáíÉ:';
$strings['Start time must be less than end time'] = 'æŞÊ ÇáÈÏÁ íÌÈ Ãä íßæä ÃŞá ãä æŞÊ ÇáÇäÊåÇÁ.';
$strings['Current start time is'] = 'ÈÏÇíÉ ÇáæŞÊ ÇáÍÇáí åæ :';
$strings['Current end time is'] = 'äåÇíÉ ÇáæŞÊ ÇáÍÇáí åæ:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'Øæá ÇáÍÌÒ áÇ íäÏÑÌ Öãä åĞÇ ÇáãæÑÏ\'s ÇáØæá ÇáãÓãæÍ Èå';
$strings['Your reservation is'] = 'ÍÌÒß åæ:';
$strings['Minimum reservation length'] = 'ÇáÍÏ ÇáÃÏäì áØæá ÇáÍÌÒ:';
$strings['Maximum reservation length'] = 'ÇáÍÏ ÇáÃŞÕì áØæá ÇáÍÌÒ:';
$strings['You do not have permission to use this resource.'] = 'áíÓ áÏíß ÃĞä áÇÓÊÎÏÇã åĞÇ ÇáãæÑÏ';
$strings['reserved or unavailable'] = '%s Åáì %s ãÍÌæÒ Ãæ ÛíÑ ãÊÇÍ.';	// @since 1.1.0
$strings['Reservation created for'] = ' ÃäÔÆ ÇáÍÌÒ á %s';
$strings['Reservation modified for'] = 'ÚÏá ÇáÍÌÒ á %s';
$strings['Reservation deleted for'] = 'ÍĞİ ÇáÍÌÒ á %s';
$strings['created'] = 'ÃäÔÆ';
$strings['modified'] = 'ÚÏá';
$strings['deleted'] = 'ÍĞİ';
$strings['Reservation #'] = 'ÍÌÒ #';
$strings['Contact'] = 'ÇáÇÊÕÇá';
$strings['Reservation created'] = 'ÃäÔÆ ÇáÍÌÒ';
$strings['Reservation modified'] = 'ÚÏá ÇáÍÌÒ';
$strings['Reservation deleted'] = 'ÍĞİ ÇáÍÌÒ';

$strings['Reservations by month'] = 'ÇáÍÌæÒÇÊ áÔåÑ';
$strings['Reservations by day of the week'] = 'ÇáÍÌæÒÇÊ ÊÈÚÇğ áíæã ãä ÇáÅÓÈæÚ';
$strings['Reservations per month'] = 'ÇáÍÌæÒÇÊ ÊÈÚÇğ ááÔåÑ';
$strings['Reservations per user'] = 'ÇáÍÌæÒÇÊ ÊÈÚÇğ ááãÓÊËãÑ';
$strings['Reservations per resource'] = 'ÇáÍÌæÒÇÊ ÊÈÚÇğ ááãæÑÏ';
$strings['Reservations per start time'] = ' ÇáÍÌæÒÇÊ ÊÈÚÇğ áÈÏÇíÉ ÇáæŞÊ';
$strings['Reservations per end time'] = 'ÇáÍÌæÒÇÊ ÊÈÚÇğ áäåÇíÉ ÇáæŞÊ';
$strings['[All Reservations]'] = '[ÌãíÚ ÇáÍÌæÒÇÊ]';

$strings['Permissions Updated'] = 'ÊÍÏíË ÇáÓãÇÍíÇÊ';
$strings['Your permissions have been updated'] = 'áß %s ÇáÓãÇÍíÇÊ ŞÏ Êã ÊÍÏíËåÇ';
$strings['You now do not have permission to use any resources.'] = 'ÃäÊ ÇáÂä áíÓ áÏíß ÊÕÑíÍ áÇÓÊÎÏÇã ÃíÉ ãæÇÑÏ';
$strings['You now have permission to use the following resources'] = 'áÏíß ÇáÂä ÃĞä áÇÓÊÎÏÇã ÇáãæÇÑÏ ÇáÊÇáíÉ:';
$strings['Please contact with any questions.'] = 'íÑÌì ÇáÇÊÕÇá %s ááÇÓÊİÓÇÑ';
$strings['Password Reset'] = 'ÅÚÇÏÉ ÖÈØ ßáãÉ ÇáÓÑ';

$strings['This will change your password to a new, randomly generated one.'] = 'ÓÊÊÛíÑ ßáãÉ ÇáÓÑ ÇáÎÇÕÉ Èß ãÌÏÏÇğ¡ æÈØÑíŞÉ ÚÔæÇÆíÉ ';
$strings['your new password will be set'] = 'ÈÚÏ ÅÏÎÇá ÚäæÇä ÈÑíÏß ÇáÅáßÊÑæäí æÇáäŞÑ "ÊÛííÑ ßáãÉ ÇáãÑæÑ", ßáãÉ ÇáÓÑ ÇáÌÏíÏÉ ÓÊæÖÚ İí ÇáäÙÇã æÈÇáÈÑíÏ ÇáÅáßÊÑæäí.';
$strings['Change Password'] = 'ÊÛííÑ ßáãÉ ÇáãÑæÑ';
$strings['Sorry, we could not find that user in the database.'] = 'ÚĞÑÇğ¡ áÇ íãßä ÅíÌÇÏ ÇáãÓÊËãÑ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ.';
$strings['Your New Password'] = 'ÇáÌÏíÏÉ %s ßáãÉ ÇáãÑæÑ';
$strings['Your new passsword has been emailed to you.'] = 'äÌÇÍ<br />'
    			. 'ßáãÉ ãÑæÑ ÌÏíÏÉ Êã ÅÑÓÇáåÇ Åáíß ÚÈÑ ÇáÈÑíÏ ÇáÅáßÊÑæäí.<br />'
    			. 'ÇáÑÌÇÁ ÇáÊÍŞŞ ãä ÈÑíÏß ÇáÅáßÊÑæäí áßáãÉ ÇáÓÑ ÇáÌÏíÏÉ, Ëã <a href="index.php">ÓÌá İí</a>'
    			. ' ãÚ ßáãÉ ÇáÓÑ ÇáÌÏíÏÉ æÊÛííÑåÇ ÈÇáäŞÑ Úáì &quot;ÊÛííÑ Çáãáİ ÇáÔÎÕí&quot;'
    			. ' æåí æÕáÉ İí áæÍÉ ÇáÊÍßã';

$strings['You are not logged in!'] = 'áã ÊŞã ÈÇáÊÓÌíá!';

$strings['Setup'] = 'ÇáÅÚÏÇÏ';
$strings['Please log into your database'] = 'ÇáÑÌÇÁ ÊÓÌíá ÇáÏÎæá İí ŞÇÚÏÉ ÇáÈíÇäÇÊ ÇáÎÇÕÉ Èß';
$strings['Enter database root username'] = 'ÃÏÎá ÅÓã ÌĞÑ ŞÇÚÏÉ ÇáÈíÇäÇÊ:';
$strings['Enter database root password'] = 'ÃÏÎá ßáãÉ ãÑæÑ ÌĞÑ ŞÇÚÏÉ ÇáÈíÇäÇÊ:';
$strings['Login to database'] = 'ÊÓÌíá ÇáÏÎæá Åáì ŞÇÚÏÉ ÇáÈíÇäÇÊ';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = 'ÇáãÓÊËãÑ ÇáÌĞÑ<b> áÇ</b>ÍÇÌÉ áå . íßİí Ãí ãÓÊËãÑ áŞÇÚÏÉ ÇáÈíÇäÇÊ áÏíå ÊÑÎíÕ áÅäÔÇÁ ÇáÌÏÇæá.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = 'åĞÇ ÓíäÔÆ ßá ãÇ íáÒã ãä ŞæÇÚÏ ÇáÈíÇäÇÊ æÇáÌÏÇæá.';
$strings['It also populates any required tables.'] = 'ßãÇ íÄåá Ãí ÌÏÇæá ãØáæÈÉ.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = 'ÊÍĞíÑ : åĞÇ Óæİ íãÍæ ÌãíÚ ÇáÈíÇäÇÊ İí ŞÇÚÏÉ ÇáÈíÇäÇÊ ÇáÓÇÈŞÉ !';
$strings['Not a valid database type in the config.php file.'] = 'äæÚ ŞÇÚÏÉ ÇáÈíÇäÇÊ ÛíÑ ÕÍíÍ Şí Çáãáİ config.php .';
$strings['Database user password is not set in the config.php file.'] = 'ßáãÉ ÇáÓÑ áãÓÊËãÑ ŞÇÚÏÉ ÇáÈíÇäÇÊ ÚíÑ ãÊæİÑÉ İí Çáãáİ the config.php .';
$strings['Database name not set in the config.php file.'] = 'ÅÓã ŞÇÚÏÉ ÇáÈíÇäÇÊ ÛíÑ ãÊæİÑÉ İí Çáãáİ config.php .';
$strings['Successfully connected as'] = 'Êã ÇáÇÊÕÇá ÈäÌÇÍ';
$strings['Create tables'] = 'ÅäÔÇÁ ÇáÌÏÇæá &gt;';
$strings['There were errors during the install.'] = 'ßÇäÊ åäÇß ÃÎØÇÁ ÃËäÇÁ ÚãáíÉ ÇáÊËÈíÊ. æãä Çáããßä ÇÓÊãÑÇÑ ÇáÚãá ãÚ Şáíá ãä ÇáÃÎØÇÁ.<br/><br/>'
	. 'íÑÌì äÔÑ ÃíÉ ÃÓÆáÉ Åáì ÇáãäÊÏíÇÊ Úáì <a href="http://bookings.hiast.edu.sy</a>.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = 'áŞÏ äÌÍÊ İí ÅÚÏÇÏ ÇáÈÑäÇãÌ æãÓÊÚÏ ááÈÏÁ İí ÅÓÊÎÏÇãå.';
$strings['Thank you for using phpScheduleIt'] = 'íÑÌì ÇáÊÃßÏ ãä ÅÒÇáÉ ÊãÇãÇğ ÇáÏáíá \'install\' .'
	. ' æåĞÇ ÃãÑ ÈÇáÛ ÇáÃåãíÉ áÃäå íÍÊæí Úáì ŞÇÚÏÉ ÈíÇäÇÊ ßáãÇÊ ÇáãÑæÑ æÛíÑåÇ ãä ÇáãÚáæãÇÊ ÇáÍÓÇÓÉ.'
	. ' æãä ÇáÎØÃ ÊÑß ÇáÈÇÈ ãİÊæÍÇğ Úáì ãÕÑÇÚíå áÃí ÔÎÕ íÓÊØíÚ ÅŞÊÍÇã ŞÇÚÏÉ ÇáÈíÇäÇÊ ÇáÎÇÕÉ Èß!'
	. '<br /><br />'
	. 'ÔßÑÇğ Úáì ÅÓÊÎÏÇãß ÇáÈÑäÇãÌ!';
$strings['There is no way to undo this action'] = 'áíÓ åäÇß ãä ÓÈíá ááÊÑÇÌÚ Úä åĞÇ ÇáÚãá!';
$strings['Click to proceed'] = 'ÇäŞÑ ááÈÏÁ';
$strings['Please delete this file.'] = 'ÇáÑÌÇÁ ÍĞİ åĞÇ Çáãáİ';
$strings['Successful update'] = 'ÇáÊÍÏíË äÌÍ ÊãÇãÇğ';
$strings['Patch completed successfully'] = 'ÇáÊÕÍíÍ Êã ÈäÌÇÍ';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'ÅĞÇ áã ÊÍÏÏ åĞå ÇáŞíãÉ¡ İÅä ßáãÉ ÇáÓÑ ÇáÅİÊÑÇÖíÉ ÇáãÍÏÏÉ İí ãáİ ÇáÊåíÆÉ ÓÊÓÊÎÏã.';
$strings['Notify user that password has been changed?'] = 'ÅÚáÇã ÇáãÓÊËãÑ ÈÃäå Êã ÊÛííÑ ßáãÉ ÇáÓÑ¿';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'æíÊØáÈ åĞÇ ÇáäÙÇã Ãä íßæä áÏíß ÚäæÇä ÈÑíÏ ÅáßÊÑæäí.';
$strings['Invalid User Name/Password.'] = 'ÅÓã ÇáãÓÊËãÑ/ßáãÉ ÇáÓÑ ÛíÑ ÕÍíÍ';
$strings['Pending User Reservations'] = 'ÈÇäÊÙÇÑ ÍÌæÒÇÊ ÇáãÓÊËãÑ';
$strings['Approve'] = 'ÇáãæÇİŞÉ';
$strings['Approve this reservation'] = 'ÇáãæÇİŞÉ Úáì åĞÇ ÇáÍÌÒ';
$strings['Approve Reservations'] ='ÇáãæÇİŞÉ Úáì ÇáÍÌæÒÇÊ';

$strings['Announcement'] = 'ÅÚáÇä';
$strings['Number'] = 'ÚÏÏ';
$strings['Add Announcement'] = 'ÃÖİ ÅÚáÇä';
$strings['Edit Announcement'] = 'ÊÍÑíÑ ÅÚáÇä';
$strings['All Announcements'] = 'ÌãíÚ ÇáÅÚáÇäÇÊ';
$strings['Delete Announcements'] = 'ÍĞİ ÅÚáÇäÇÊ';
$strings['Use start date/time?'] = 'ÈÏÁ ÇÓÊÎÏÇã ÇáÊÇÑíÎ/ÇáæŞÊ¿';
$strings['Use end date/time?'] = 'ÇÓÊÎÏÇã äåÇíÉ ÇáÊÇÑíÎ/ÇáæŞÊ¿';
$strings['Announcement text is required.'] = 'ÇáãØáæÈ äÕ ÇáÅÚáÇä';
$strings['Announcement number is required.'] = 'ÇáãØáæÈ ÑŞã ÇáÅÚáÇä';

$strings['Pending Approval'] = 'ÈÇäÊÙÇÑ ÇáãæÇİŞÉ';
$strings['My reservation is approved'] = 'ÊãÊ ÇáãæÇİŞÉ Úáì ÍÌÒí';
$strings['This reservation must be approved by the administrator.'] = 'åĞÇ ÇáÍÌÒ íÌÈ Ãä íßæä ãæÇİŞ Úáíå ãä ãÏíÑ ÇáÈÑäÇãÌ';
$strings['Approval Required'] = 'ÇáãæÇİŞÉ ÇáãØáæÈÉ';
$strings['No reservations requiring approval'] = ' áÇ ÊæÌÏ ÍÌæÒÇÊ ÊÊØáÈ ãæÇİŞÉ';
$strings['Your reservation was successfully approved'] = 'ÍÌÒß ÊãÊ ÇáãæÇİŞÉ Úáíå ÈäÌÇÍ';
$strings['Reservation approved for'] = 'ÊãÊ ÇáãæÇİŞÉ Úáì ÇáÍÌÒ %s';
$strings['approved'] = 'ÊãÊ ÇáãæÇİŞÉ';
$strings['Reservation approved'] = ' ÇáÍÌÒ ÇáãæÇİŞ Úáíå';

$strings['Valid username is required'] = 'ÇáãØáæÈ ÅÓã ãÓÊËãÑ ÇáÕÍíÍ';
$strings['That logon name is taken already.'] = 'ÅÓã ÇáÏÎæá ãæÌæÏ ÓÇÈŞÇğ';
$strings['this will be your login'] = '(åĞÇ æÓíÊã ÊÓÌíá ÏÎæáß)';
$strings['Logon name'] = 'ÅÓã ÇáÏÎæá';
$strings['Your logon name is'] = 'ÅÓã ÊÓÌíá ÇáÏÎæá ÇáÎÇÕ Èß åæ %s';

$strings['Start'] = 'ÈÏÇíÉ';
$strings['End'] = 'äåÇíÉ';
$strings['Start date must be less than or equal to end date'] = 'ÊÇÑíÎ ÇáÈÏÁ íÌÈ Ãä íßæä ÃŞá ãä Ãæ íÓÇæí ÊÇÑíÎ ÇáÇäÊåÇÁ';
$strings['That starting date has already passed'] = 'Åä ãæÚÏå ŞÏ İÇÊ ÈÇáİÚá';
$strings['Basic'] = 'ÑÆíÓí';
$strings['Participants'] = 'ÇáãÔÇÑßæä';
$strings['Close'] = 'ÅÛáÇŞ';
$strings['Start Date'] = 'ÊÇÑíÎ ÇáÇÈÊÏÇÁ';
$strings['End Date'] = 'ÊÇÑíÎ ÇáÇäÊåÇÁ';
$strings['Minimum'] = 'ÇáÍÏ ÇáÃÏäì';
$strings['Maximum'] = 'ÇáÍÏ ÇáÃŞÕì';
$strings['Allow Multiple Day Reservations'] = 'ÇáÓãÇÍ ÈÍÌæÒÇÊ ãÊÚÏÏÉ İí Çáíæã';
$strings['Invited Users'] = 'ãÓÊËãÑíä  ãÏÚæíä';
$strings['Invite Users'] = 'ÏÚæÉ ãÓÊËãÑíä';
$strings['Remove Participants'] = 'ÅÒÇáÉ ÇáãÔÇÑßíä';
$strings['Reservation Invitation'] = 'ÍÌÒ ÏÚæÉ';
$strings['Manage Invites'] = 'ÏÚæÇÊ ÇáÅÏÇÑÉ';
$strings['No invite was selected'] = ' áã íÊã ÇÎÊíÇÑ Ãí ÏÚæÉ';
$strings['reservation accepted'] = '%s  ŞÈáÊ ÏÚæÊß İí %s';
$strings['reservation declined'] = '%s  ÑİÖÊ ÏÚæÊß İí %s';
$strings['Login to manage all of your invitiations'] = 'ÇáÏÎæá áÅÏÇÑÉ ßá ÇáÏÚæÇÊ ÇáÎÇÕÉ Èß';
$strings['Reservation Participation Change'] = 'ÊÛííÑ ãÔÇÑßÉ ÇáÍÌÒ';
$strings['My Invitations'] = 'ÏÚæÇÊí';
$strings['Accept'] = 'ŞÈæá';
$strings['Decline'] = 'ÑİÖ';
$strings['Accept or decline this reservation'] = 'ŞÈæá Ãæ ÑİÖ åĞå ÇáÍÌÒ';
$strings['My Reservation Participation'] = 'ãÔÇÑßÊí';
$strings['End Participation'] = 'äåÇíÉ ÇáãÔÇÑßÉ';
$strings['Owner'] = 'ÇáãÇáß';
$strings['Particpating Users'] = 'ãÔÇÑßÉ ÇáãÓÊËãÑíä';
$strings['No advanced options available'] = 'áÇ ÎíÇÑÇÊ ãÊŞÏãÉ ãÊÇÍÉ';
$strings['Confirm reservation participation'] = 'ÊÃßíÏ ãÔÇÑßÉ ÇáÍÌÒ';
$strings['Confirm'] = 'ÇáÊÃßíÏ';
$strings['Do for all reservations in the group?'] = 'ÇÚãá áÌãíÚ ÇáÍÌæÒÇÊ İí ÇáãÌãæÚÉ¿';

$strings['My Calendar'] = 'ÊŞæíãí';
$strings['View My Calendar'] = 'ÑÄíÉ ÊŞæíãí';
$strings['Participant'] = 'ãÔÇÑß';
$strings['Recurring'] = 'ÇáãÊßÑÑÉ';
$strings['Multiple Day'] = 'ÃíÇã ãÊÚÏÏÉ';
$strings['[today]'] = '[Çáíæã]';
$strings['Day View'] = 'ÑÄíÉ Çáíæã';
$strings['Week View'] = 'ÑÄíÉ ÇáÅÓÈæÚ';
$strings['Month View'] = 'ÑÄíÉ ÇáÔåÑ';
$strings['Resource Calendar'] =  'ÊŞæíã ÇáãæÑÏ';
$strings['View Resource Calendar'] = 'ÊŞæíã ÇáÌÏæá';	// @since 1.2.0
$strings['Signup View'] = 'ÑÄíÉ ÇáÊÓÌíá';

$strings['Select User'] = 'ÇÎÊÑ ÇáãÓÊËãÑ';
$strings['Change'] = 'ÊÛííÑ';

$strings['Update'] = 'ÊÍÏíË';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = ' ÇáÊÍÏíË ãÊæİÑ İŞØ ááäÓÎ 1.0.0 Ãæ ÇáÃÍÏË';
$strings['phpScheduleIt is already up to date'] = 'åæ ÈÇáİÚá ÃÍÏË ãä ÇáÍÇáí';
$strings['Migrating reservations'] = 'åÌÑÉ ÇáÍÌæÒÇÊ';

$strings['Admin'] = 'ÇáÅÏÇÑÉ';
$strings['Manage Announcements'] = 'ÅÏÇÑÉ ÇáÅÚáÇäÇÊ';
$strings['There are no announcements'] = 'áÇ ÊæÌÏ ÅÚáÇäÇÊ';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'ÇáÍÏ ÇáÃŞÕì áŞÏÑÉ ÇáãÔÇÑßíä';
$strings['Leave blank for unlimited'] = 'ÃÊÑß İÑÇÛ áÚÏã ÇáÊÍÏíÏ';
$strings['Maximum of participants'] = 'åĞÇ ÇáãæÑÏ ÓÚÊå ÇáŞÕæì %s ãÔÇÑß';
$strings['That reservation is at full capacity.'] = 'Åä ÇáÍÌÒ ÈßÇãá ØÇŞÊå';
$strings['Allow registered users to join?'] = 'íÓãÌ ááãÓÊÎÏãíä ÇáãÓÌáíä ÈÇáÇäÖãÇã Åáì¿';
$strings['Allow non-registered users to join?'] = 'ÇáÓãÇÍ áÛíÑ ÇáãÓÊÎÏãíä ÇáãÓÌáíä Úáì ÇáÇäÖãÇã¿';
$strings['Join'] = 'íäÖã';
$strings['My Participation Options'] = 'ÎíÇÑÇÊ ãÔÇÑßÊí ';
$strings['Join Reservation'] = 'ÇäÖã Åáì ÇáÍÌÒ';
$strings['Join All Recurring'] = 'ÊßÑÇÑ ÇáÅäÖãÇã ááÌãíÚ';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'ÃäÊ áã ÊÔÇÑß Úáì ãÇ íáí ãä ãæÇÚíÏ ÇáÍÌÒ áÃäåÇ ÈßÇãá ØÇŞÊåÇ';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'ÃäÊ ãÏÚæ Åáì åĞÇ ÇáÍÌÒ. íÑÌì ÅÊÈÇÚ ÊÚáíãÇÊ ÇáãÔÇÑßÉ ÇáÊí Êã ÅÑÓÇáåÇ Åáì ÈÑíÏß ÇáÅáßÊÑæäí.';
$strings['Additional Tools'] = 'ÃÏæÇÊ ÅÖÇİíÉ';
$strings['Create User'] = 'ÅäÔÇÁ ãÓÊËãÑ';
$strings['Check Availability'] = 'ÇáÊÍŞŞ ãä ÇáÊæİÑ';
$strings['Manage Additional Resources'] = 'ÅÏÇÑÉ ÇáãáÍŞÇÊ';
$strings['Number Available'] = 'ÇáÚÏÏ ÇáãÊÇÍ ';
$strings['Unlimited'] = 'ÛíÑ ãÍÏæÏ';
$strings['Add Additional Resource'] = 'ÃÖİ ãáÍŞ';
$strings['Edit Additional Resource'] = 'ÊÍÑíÑ ãáÍŞ';
$strings['Checking'] = 'İÍÕ';
$strings['You did not select anything to delete.'] = 'ÃäÊ áã ÊÎÊÇÑ Ãí ÔíÁ ááÍĞİ';
$strings['Added Resources'] = 'ÅÖÇİÉ ãæÇÑÏ';
$strings['Additional resource is reserved'] = 'ÇáãæÇÑÏ ÇáÅÖÇİíÉ %s İŞØ %s ãÊÇÍÉ İì ÇáæŞÊ';
$strings['All Groups'] = 'ÌãíÚ ÇáãÌãæÚÇÊ';
$strings['Group Name'] = 'ÅÓã ÇáãÌãæÚÉ';
$strings['Delete Groups'] = 'ÍĞİ ÇáãÌãæÚÇÊ';
$strings['Manage Groups'] = 'ÅÏÇÑÉ ÇáãÌãæÚÇÊ';
$strings['None'] = 'áÇ ÔíÁ';
$strings['Group name is required.'] ='ÇáãØáæÈ ÅÓã ÇáãÌãæÚÉ'; 
$strings['Groups'] = 'ÇáãÌãæÚÇÊ';
$strings['Current Groups'] = 'ÇáãÌãæÚÇÊ ÇáÍÇáíÉ';
$strings['Group Administration'] = 'İÑíŞ ÇáÅÏÇÑÉ';
$strings['Reminder Subject'] = 'ÊĞßÑ ÇáÍÌÒ- %s, %s %s';
$strings['Reminder'] = 'ÊĞßÑ';
$strings['before reservation'] = 'ŞÈá ÇáÍÌÒ';
$strings['My Participation'] = 'ãÔÇÑßÊí';
$strings['My Past Participation'] = 'ãÔÇÑßÊí ÇáãÇÖíÉ';
$strings['Timezone'] = 'ãäØŞÉ ÇáÊæŞíÊ';
$strings['Export'] = 'ÇáÊÕÏíÑ';
$strings['Select reservations to export'] = 'ÇÎÊÑ ÇáÍÌæÒÇÊ ááÊÕÏíÑ';
$strings['Export Format'] = 'ÇáÊÕÏíÑ İí Ôßá';
$strings['This resource cannot be reserved less than x hours in advance'] = 'åĞÇ ÇáãæÑÏ áÇ íãßä Ãä íßæä ãÍÌæÒ ÃŞá ãä %s ÓáİÇğ ÓÇÚÇÊ';
$strings['This resource cannot be reserved more than x hours in advance'] = 'åĞÇ ÇáãæÑÏ áÇ íãßä Ãä íßæä ãÍÌæÒ ÃßËÑ ãä %s ÓáİÇğ ÓÇÚÇÊ';
$strings['Minimum Booking Notice'] = 'ÃÏäì ãåáÉ áÅÔÚÇÑ ÇáÍÌÒ';
$strings['Maximum Booking Notice'] = 'ÃŞÕì ãåáÉ áÅÔÚÇÑ ÇáÍÌÒ';
$strings['hours prior to the start time'] = 'ÓÇÚÇÊ ŞÈá ÈÏÁ ÇáæŞÊ';
$strings['hours from the current time'] = 'ÓÇÚÇÊ ãä ÇáæŞÊ ÇáÍÇáí';
$strings['Contains'] = 'íÍÊæí';
$strings['Begins with'] = 'íÈÏÃ ãÚ';
$strings['Minimum booking notice is required.'] = 'ÇáãØáæÈ ÇáÍÏ ÇáÃÏäì áÅÔÚÇÑ ÇáÍÌÒ';
$strings['Maximum booking notice is required.'] = 'ÇáãØáæÈ ÇáÍÏ ÇáÃŞÕì áÅÔÚÇÑ ÇáÍÌÒ';
$strings['Accessory Name'] = 'ÅÓã ÇáãáÍŞ';
$strings['Accessories'] = 'ÇáãáÍŞÇÊ';
$strings['All Accessories'] = 'ÌãíÚ ÇáãáÍŞÇÊ';
$strings['Added Accessories'] = ' ÇáãáÍŞÇÊ ÇáãÖÇİÉ';
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
				. "áŞÏ äÌÍÊ İí ÊÓÌíá  ÇáÏÎæá ãÚ ÇáãÚáæãÇÊ ÇáÊÇáíÉ :\r\n"
				. "ÊÓÌíá ÇáÏÎæá: %s\r\n"
				. "ÇáÅÓã: %s %s \r\n"
				. "ÇáåÇÊİ: %s \r\n"
				. "ÇáãÚåÏ: %s \r\n"
				. "ÇáæÖÚ: %s \r\n\r\n"
				. "íÑÌì ÊÓÌíá ÇáÏÎæá İí ÇáãÌÏæá İí åĞÇ ÇáãæŞÚ:\r\n"
				. "%s \r\n\r\n"
				. "íãßäß ÇáÚËæÑ Úáì æÕáÇÊ ÇáãÈÑãÌ æÊÚÏíá ãáİß ÇáÔÎÕí İí áæÍÉ ÇáÊÍßã.\r\n\r\n"
				. "íÑÌì ÊæÌíå Ãí ãæÑÏ Ãæ ÍÌÒ ŞÇÆã Úáì ÇáÇÓÆáÉ á  %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "ÇáãÏíÑ,\r\n\r\n"
					. "ãÓÊÎÏã ÌÏíÏ æŞÏ ÓÌá ãÚ ÇáãÚáæãÇÊ ÇáÊÇáíÉ:\r\n"
					. "ÇáÈÑíÏ ÇáÅáßÊÑæäí: %s \r\n"
					. "ÇáÅÓã: %s %s \r\n"
					. "ÇáåÇÊİ: %s \r\n"
					. "ÇáãÚåÏ: %s \r\n"
					. "ÇáæÖÚ: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "áŞÏ äÌÍ %s ÇáÍÌÒ #%s.\r\n\r\n<br/><br/>"
			. "ÇáÑÌÇÁ ÇÓÊÎÏÇã ÑŞã åĞÇ ÇáÍÌÒ ÚäÏ ÇáÇÊÕÇá ÈãÏíÑ ÇáäÙÇã ãÚ ÃíÉ ÇÓÆáÉ.\r\n\r\n<br/><br/>"
			. "ÇáÍÌÒ Èíä %s %s æ %s %s ãä ÃÌá %s"
			. " æíŞÚ İí %s æŞÏ %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "åĞÇ ÇáÍÌÒ ÊßÑÑ İí ÇáãæÇÚíÏ ÇáÊÇáíÉ:\r\n<br/>";
$email['reservation_activity_3'] = "ÌãíÚ ÇáÍÌæÒÇÊ ÇáãÊßÑÑÉ İí åĞå ÇáãÌãæÚÉ ÃíÖÇğ %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "ÇáãæÌÒ ÇáÊÇáí Êã áåĞÇ ÇáÍÌÒ:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "ÅĞÇ ßÇä åĞÇ åæ ÇáÎØÃ¡ íÑÌì ÇáÇÊÕÇá ÈãÏíÑ ÇáäÙÇã Úáì: %s"
			. " Ãæ Úä ØÑíŞ ÇáÇÊÕÇá ÈÇáåÇÊİ %s.\r\n\r\n<br/><br/>"
			. "íãßäß Ãä ÊÑì Ãæ ÊÚÏá ãÚáæãÇÊ ÍÌÒß İí Ãí æŞÊ ãä ÎáÇá"
			. " ÊÓÌíá ÇáÏÎæá %s İí:\r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "íÑÌì ÊæÌíå ÌãíÚ ÇáÇÓÆáÉ ÇáÊŞäíÉ Åáì <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "ÇáÍÌÒ #%s ÊãÊ ÇáãæÇİŞÉ Úáíå.\r\n\r\n<br/><br/>"
			. "ÇáÑÌÇÁ ÇÓÊÎÏÇã ÑŞã åĞÇ ÇáÍÌÒ ÚäÏ ÇáÇÊÕÇá ÈãÏíÑ ÇáäÙÇã ãÚ ÇíÉ ÇÓÆáÉ.\r\n\r\n<br/><br/>"
			. "ÇáÍÌÒ Èíä %s %s æ %s %s ãä ÃÌá %s"
			. " æíŞÚ İí %s æŞÏ %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = " %. ßáãÉ ÇáÓÑ ÇáÎÇÕÉ Èß ÇáãÄŞÊÉ åí : %s ";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = " %. %. ßáãÉ ÇáÓÑ ÇáÎÇÕÉ Èß ÇáÌÏíÏÉ åí : %s ";


// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s ŞÏ ÏÚÇß Çáì ÇáãÔÇÑßÉ İí ÇáÍÌÒ ÇáÊÇáí:\r\n\r\n"
		. "ÇáãæÑÏ: %s\r\n"
		. "ÊÇÑíÎ ÇáÇÈÊÏÇÁ: %s\r\n"
		. "æŞÊ ÇáÈÏÁ: %s\r\n"
		. "ÊÇÑíÎ ÇáÇäÊåÇÁ: %s\r\n"
		. "æŞÊ ÇáÇäÊåÇÁ: %s\r\n"
		. "ÇáÎáÇÕÉ: %s\r\n"
		. "ÊßÑÇÑ ÇáãæÇÚíÏ İí ÍÇá ÇáÍÖæÑ: %s\r\n\r\n"
		. "áŞÈæá åĞå ÇáÏÚæÉ ÇäŞÑ ÇáæÕáÉ æİí ÍÇá ÚÏã ÇáæÖæÍ ÇäÓÎ æÇáÕŞ %s\r\n"
		. "áÑİÖ åĞå ÇáÏÚæÉ ÇäŞÑ ÇáæÕáÉ æİí ÍÇá ÚÏã ÇáæÖæÍ ÇäÓÎ æÇáÕŞ %s\r\n"
		. "áŞÈæá ÊæÇÑíÎ  ãÍÏÏÉ Ãæ ÅÏÇÑÉ ÏÚæÇÊß İì æŞÊ áÇÍŞ¡ ÇáÑÌÇÁ ÊÓÌíá ÇáÏÎæá %s İí %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "áŞÏ ÃÒíáÊ ãä ÇáÍÌÒ ÇáÊÇáí:\r\n\r\n"
		. "ÇáãæÑÏ: %s\r\n"
		. "ÊÇÑíÎ ÇáÇÈÊÏÇÁ: %s\r\n"
		. "æŞÊ ÇáÈÏÁ: %s\r\n"
		. "ÊÇÑíÎ ÇáÇäÊåÇÁ: %s\r\n"
		. "æŞÊ ÇáÇäÊåÇÁ: %s\r\n"
		. "ÇáÎáÇÕÉ: %s\r\n"
		. "ÊßÑÇÑ ÇáãæÇÚíÏ İí ÍÇá ÇáÍÖæÑ: %s\r\n\r\n";	
		
// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "ÍÌÒß á %s ãä %s %s Åáì%s %s æÔíß.";
?>
