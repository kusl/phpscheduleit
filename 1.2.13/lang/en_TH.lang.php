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
$charset = 'tis-620';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
//$days_full = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$days_full = array("วันอาทิตย์", "วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์", "วันเสาร์");
// The three letter abbreviation
//$days_abbr = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$days_abbr = array("อา.", "จัน.", "อัง.", "พุธ", "พฤ.", "ศุกร์", "เสาร์");
// The two letter abbreviation
//$days_two  = array('Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa');
$days_two  = array("อา", "จ.", "อ.", "พ.", "พฤ", "ศ.", "ส.");
// The one letter abbreviation
//$days_letter = array('S', 'M', 'T', 'W', 'T', 'F', 'S');
$days_letter = array("อา", "จ", "อ", "พ", "พฤ", "ศ", "ส");

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤษจิกายน', 'ธันวาคม');

// The three letter month name
$months_abbr = array("ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");

// All letters of the alphabet starting with A and ending with Z
$letters = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

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
$dates['header'] = '%Aที่ %d %B %Y';
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
$strings['hours'] = '=ชั่วโมง';
$strings['minutes'] = 'นาที';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = 'mm';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = 'dd';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = 'yyyy';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = 'ผู้ดูแลระบบ';
$strings['Welcome Back'] = 'ยินดีในการกลับมา %s';
$strings['Log Out'] = 'ออกจากระบบ';
$strings['My Control Panel'] = 'กล่องควบคุมส่วนตัว';
$strings['Help'] = 'ช่วยเหลือ';
$strings['Manage Schedules'] = 'การจัดตารางเวลา';
$strings['Manage Users'] = 'การจัดการสมาชิก';
$strings['Manage Resources'] = 'ฐานข้อมูลพัสดุ';
$strings['Manage User Training'] = 'Manage User Training';
$strings['Manage Reservations'] = 'แก้ไขการจอง';
$strings['Email Users'] = 'ส่งอีเมล์';
$strings['Export Database Data'] = 'นำออกข้อมูล';
$strings['Reset Password'] = 'ตั้งค่ารหัสผ่านใหม่';
$strings['System Administration'] = 'ผู้ดูแลระบบ';
$strings['Successful update'] = 'ปรับปรุงข้อมูลสำเร็จ';
$strings['Update failed!'] = 'ปรับปรุงข้อมูลไม่สำเร็จ!';
$strings['Manage Blackout Times'] = 'การจัดตารางนอกเวลา';
$strings['Forgot Password'] = 'ลืมรหัสผ่าน';
$strings['Manage My Email Contacts'] = 'จัดการรายชื่ออีเมล์ของฉัน';
$strings['Choose Date'] = 'เลือกวัน';
$strings['Modify My Profile'] = 'เปลี่ยนแปลงข้อมูลของฉัน';
$strings['Register'] = 'ลงทะเบียนเข้าใช้';
$strings['Processing Blackout'] = 'Processing Blackout';
$strings['Processing Reservation'] = 'กำลังทำการจอง';
$strings['Online Scheduler [Read-only Mode]'] = 'ตารางการจอง [ดูได้อย่างเดียว]';
$strings['Online Scheduler'] = 'ตารางจอง';
$strings['phpScheduleIt Statistics'] = 'สถิติใช้งาน';
$strings['User Info'] = 'ข้อมูลผู้ใช้:';

$strings['Could not determine tool'] = 'Could not determine tool. Please return to My Control Panel and try again later.';
$strings['This is only accessable to the administrator'] = 'เฉพาะผู้จัดการระบบที่เข้าใช้งานได้';
$strings['Back to My Control Panel'] = 'กลับไปยังหน้าจอควบคุมของฉัน';
$strings['That schedule is not available.'] = 'ยังไม่สามารถใช้งานตารางเวลานั้นได้';
$strings['You did not select any schedules to delete.'] = 'คุณไม่ได้เลือกตารางเวลาที่ต้องการจะลบ';
$strings['You did not select any members to delete.'] = 'คุณยังไม่ได้เลือกผู้ใช้งานที่ต้องการจะลบ';
$strings['You did not select any resources to delete.'] = 'คุณไม่ได้เลือกรายการสำหรับจองใช้งาน เพื่อต้องการจะลบ';
$strings['Schedule title is required.'] = 'ชื่อตารางเวลาจองที่จะใช้เรียก';
$strings['Invalid start/end times'] = 'เวลาไม่ถูกต้อง';
$strings['View days is required'] = 'ต้องใช้การแสดงผลแบบรายวันที่ด้วยนะ';
$strings['Day offset is required'] = 'ใส่จำนวนวันที่ต้องการลงไปด้วย';
$strings['Admin email is required'] = 'อีเมล์ของผู้ควบคุมระบบยังไม่มี';
$strings['Resource name is required.'] = 'ต้องใส่ชื่อเรียกของรายการที่เปิดให้จองนะ';
$strings['Valid schedule must be selected'] = 'โปรดเลือกตารางเวลาใช้จองที่ถูกต้องด้วย';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = 'ระยะเวลาการจองอย่างต่ำนั้นต้องมีค่าน้อยกว่าหรือเท่ากับระยะเวลาที่ให้จองใช้สูงสุด';
$strings['Your request was processed successfully.'] = 'ดำเนินการเสร็จสิ้นเรียบร้อยดี';
$strings['Go back to system administration'] = 'กลับไปที่ส่วนควบคุมโปรแกรม';
$strings['Or wait to be automatically redirected there.'] = 'หรือรอสักครู่จะกลับไปยังหน้าจอก่อนหน้านี้';
$strings['There were problems processing your request.'] = 'พบข้อผิดพลาดเกิดขึ้นขณะทำการประมวลผล';
$strings['Please go back and correct any errors.'] = 'ลองกลับไปแก้ไขข้อมูลใหม่อีกครั้ง';
$strings['Login to view details and place reservations'] = 'กดเพื่อเข้าสู่ระบบและสามารถทำการจองห้องได้';
$strings['Memberid is not available.'] = 'รหัสผู้ใช้ %s นี้ยังไม่สามารถใช้งานได้';

$strings['Schedule Title'] = 'ชื่อตารางการจอง';
$strings['Start Time'] = 'เริ่มเวลา';
$strings['End Time'] = 'สิ้นสุดเวลา';
$strings['Time Span'] = 'ระยะเวลา';
$strings['Weekday Start'] = 'วันเริ่มต้นสัปดาห์';
$strings['Admin Email'] = 'เมล์ผู้ดูแลระบบ';

$strings['Default'] = 'ค่าเริ่มต้น';
$strings['Reset'] = 'เปลี่ยนรหัสผ่านใหม่';
$strings['Edit'] = 'แก้ไข';
$strings['Delete'] = 'ลบ';
$strings['Cancel'] = 'ยกเลิก';
$strings['View'] = 'ดู';
$strings['Modify'] = 'แก้ไข';
$strings['Save'] = 'จัดเก็บ';
$strings['Back'] = 'กลับ';
$strings['Next'] = 'ต่อไป';
$strings['Close Window'] = 'ปิดหน้าต่าง';
$strings['Search'] = 'ค้นหา';
$strings['Clear'] = 'ล้าง';

$strings['Days to Show'] = 'วันที่ต้องการแสดง';
$strings['Reservation Offset'] = 'เวลาที่ต้องการจอง';
$strings['Hidden'] = 'ซ่อน';
$strings['Show Summary'] = 'แสดงภาพรวม';
$strings['Add Schedule'] = 'เพิ่มกลุ่มของตารางการจอง';
$strings['Edit Schedule'] = 'แก้ไขกลุ่มตารางการจอง';
$strings['No'] = 'ไม่';
$strings['Yes'] = 'ใช่';
$strings['Name'] = 'ชื่ิอ-นามสกุล';
$strings['First Name'] = 'ชื่อ';
$strings['Last Name'] = 'นามสกุล';
$strings['Resource Name'] = 'ชื่อรายการ';
$strings['Email'] = 'อีเมล์';
$strings['Institution'] = 'คณะ/งาน/หน่วยงาน';
$strings['Phone'] = 'โทรศัพท์';
$strings['Password'] = 'รหัสผ่าน';
$strings['Permissions'] = 'การอนุญาต';
$strings['View information about'] = 'แสดงข้อมูลของ %s %s';
$strings['Send email to'] = 'ส่งอีเมลืไปให้ %s %s';
$strings['Reset password for'] = 'ตั้งค่ารหัสผ่านใหม่สำหรับ %s %s';
$strings['Edit permissions for'] = 'แก้ไขการอนุญาตของ %s %s';
$strings['Position'] = 'ตำแหน่ง';
$strings['Password (6 char min)'] = 'รหัสผ่าน (%s char min)';	// @since 1.1.0
$strings['Re-Enter Password'] = 'ใส่รหัสผ่านใหม่';

$strings['Sort by descending last name'] = 'เรียงลำดับนามสกุลย้อนกลับ';
$strings['Sort by descending email address'] = 'เรียงลำดับชื่ออีเมล์ย้อนกลับ';
$strings['Sort by descending institution'] = 'เรียงลำดับชื่อหน่วยงานหรืองานย้อนกลับ';
$strings['Sort by ascending last name'] = 'เรียงลำดับนามสกุล';
$strings['Sort by ascending email address'] = 'เรียงลำดับชื่ออีเมล์';
$strings['Sort by ascending institution'] = 'เรียงลำดับชื่อหน่วยงานหรืองาน';
$strings['Sort by descending resource name'] = 'เรียงลำดับชื่อรายการที่เปิดจองย้อนกลับ';
$strings['Sort by descending location'] = 'เรียงลำดับชื่อชื่อสถานที่ย้อนกลับ';
$strings['Sort by descending schedule title'] = 'เรียงลำดับชื่อตารางการจองย้อนกลับ';
$strings['Sort by ascending resource name'] = 'เรียงลำดับชื่อรายการที่เปิดจอง';
$strings['Sort by ascending location'] = 'เรียงลำดับชื่อชื่อสถานที่';
$strings['Sort by ascending schedule title'] = 'เรียงลำดับชื่อตารางการจอง';
$strings['Sort by descending date'] = 'เรียงลำดับวันที่ทำรายการย้อนกลับ';
$strings['Sort by descending user name'] = 'เรียงลำดับชื่อย้อนกลับ';
$strings['Sort by descending start time'] = 'เรียงลำดับเวลาเริ่มจองย้อนกลับ';
$strings['Sort by descending end time'] = 'เรียงลำดับเวลาสิ้นสุดย้อนกลับ';
$strings['Sort by ascending date'] = 'เรียงลำดับวันที่ทำรายการ';
$strings['Sort by ascending user name'] = 'เรียงลำดับชื่อ';
$strings['Sort by ascending start time'] = 'เรียงลำดับเวลาเริ่มจอง';
$strings['Sort by ascending end time'] = 'เรียงลำดับเวลาสิ้นสุด';
$strings['Sort by descending created time'] = 'เรียงลำดับเวลาที่ทำรายการย้อนกลับ';
$strings['Sort by ascending created time'] = 'เรียงลำดับเวลาที่ทำรายการ';
$strings['Sort by descending last modified time'] = 'เรียงลำดับรายการจองที่เปลี่ยนแปลงย้อนกลับ';
$strings['Sort by ascending last modified time'] = 'เรียงลำดับรายการจองที่เปลี่ยนแปลง';

$strings['Search Users'] = 'ค้นหาชื่อผู้ใช้งาน';
$strings['Location'] = 'สถานที';
$strings['Schedule'] = 'ตารางเวลา';
$strings['Phone'] = 'โทรศัพท์';
$strings['Notes'] = 'โน็ต';
$strings['Status'] = 'สถานะ';
$strings['All Schedules'] = 'ตารางเวลาทั้งหมด';
$strings['All Resources'] = 'ข้อมูลทรัพยากรทั้งหมด';
$strings['All Users'] = 'ผู้ใช้ทั้งหมด';

$strings['Edit data for'] = 'แก้ไขข้อมูลของ %s';
$strings['Active'] = 'ให้ใช้งาน';
$strings['Inactive'] = 'ระงับการใช้งาน';
$strings['Toggle this resource active/inactive'] = 'คลิ๊กเพื่อตั้งค่าใช้งานหรือไม่ใช้งาน';
$strings['Minimum Reservation Time'] = 'ระยะเวลาการจองขั้นต่ำ';
$strings['Maximum Reservation Time'] = 'ระยะเวลาการจองขั้นสูง';
$strings['Auto-assign permission'] = 'อนุญาตโดยอัตโนมัติ';
$strings['Add Resource'] = 'เพิ่มข้อมูลห้องหรือรถ';
$strings['Edit Resource'] = 'แก้ไขข้อมูล';
$strings['Allowed'] = 'ให้ใช้ได้';
$strings['Notify user'] = 'แจ้งเตือนผู้ใช้';
$strings['User Reservations'] = 'การจองของผู้ใช้';
$strings['Date'] = 'วันที่';
$strings['User'] = 'ผู้ใช้งาน';
$strings['Email Users'] = 'ส่งเมล์ไปยังผู้ใช้';
$strings['Subject'] = 'เรื่อง';
$strings['Message'] = 'ข้อความ';
$strings['Please select users'] = 'เลือกผู้ใช้งาน';
$strings['Send Email'] = 'ส่งเมล์จ้า';
$strings['problem sending email'] = 'กรุณาลองส่งเมล์อีกครั้ง';
$strings['The email sent successfully.'] = 'ส่งอีเมล์สำเร็จ';
$strings['do not refresh page'] = '<u>อย่า</u> อัพเดทหน้าจอโดยกด F5 หรือเลือก Refresh เพราะจะทำให้มีการส่งเมล์ซ้ำซ้อน';
$strings['Return to email management'] = 'กลับไปยังส่วนจัดการอีเมล์';
$strings['Please select which tables and fields to export'] = 'โปรดเลือกตารางข้อมูลและหัวตารางเพื่อส่งออกข้อมูล:';
$strings['all fields'] = '- หัวตารางข้อมูลทั้งหมด -';
$strings['HTML'] = 'แบบหน้าเวบ';
$strings['Plain text'] = 'ข้อความธรรมดา';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = 'ส่งออกข้อมูล';
$strings['Reset Password for'] = 'ตั้งค่ารหัสผ่านใหม่ของ %s';
$strings['Please edit your profile'] = 'ให้แก้ไขข้อมูลส่วนตัว';
$strings['Please register'] = 'ลงทะเบียนการใช้งาน';
$strings['Keep me logged in'] = 'ให้เข้าสู่ระบบเลย <br/>(requires cookies)';
$strings['Edit Profile'] = 'แก้ไขข้อมูลส่วนตัว';
$strings['Register'] = 'ลงทะเบียน';
$strings['Please Log In'] = 'ให้เข้าล็อคระบบเพื่อจองใช้งาน';
$strings['Email address'] = 'อีเมล์';
$strings['Password'] = 'รหัสผ่าน';
$strings['First time user'] = 'เพิ่งใช้งานครั้งแรก?';
$strings['Click here to register'] = 'ลงทะเบียนผู้ใช้ใหม่';
$strings['Register for phpScheduleIt'] = 'ลงทะเบียนเพื่อเข้าสู่ระบบ';
$strings['Log In'] = 'เข้าสู่ระบบ';
$strings['View Schedule'] = 'ดูตารางการจอง';
$strings['View a read-only version of the schedule'] = 'แสดงผลข้อมูลของตารางเวลาจองอย่างเดียว';
$strings['I Forgot My Password'] = 'ลืมรหัสผ่าน';
$strings['Retreive lost password'] = 'ขอให้ส่งรหัสผ่านใหม่';
$strings['Get online help'] = 'ขอความช่วยเหลือแบบออนไลน์';
$strings['Language'] = 'ภาษา';
$strings['(Default)'] = '(ค่าเริ่มต้น)';

$strings['My Announcements'] = 'ประกาศของฉัน';
$strings['My Reservations'] = 'การจองของฉัน';
$strings['My Permissions'] = 'รายการที่สามารถทำการจองได้';
$strings['My Quick Links'] = 'เมนูลัด';
$strings['Announcements as of'] = 'ประกาศในวันที่ %s';
$strings['There are no announcements.'] = 'ไม่มีข้อความประกาศใดๆ';
$strings['Resource'] = 'รายการ';
$strings['Created'] = 'ทำการจองเมื่อ';
$strings['Last Modified'] = 'แก้ไขล่าสุด';
$strings['View this reservation'] = 'แสดงการจองอันนี้';
$strings['Modify this reservation'] = 'แก้ไขการจองอันนี้';
$strings['Delete this reservation'] = 'ลบการจองอันนี้';
$strings['Bookings'] = 'ตารางสำหรับจองใช้งาน';							// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'เปลี่ยนแปลงข้อมูลส่วนตัว';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'แก้ไขการใช้งานอีเมล์';				// @since 1.2.0
$strings['Mass Email Users'] = 'ส่งเมล์หลายๆ คน';
$strings['Search Scheduled Resource Usage'] = 'ค้นหาการจองใช้งาน';		// @since 1.2.0
$strings['Export Database Content'] = 'ส่งออกข้อมูลจากฐานข้อมูล';
$strings['View System Stats'] = 'ดูสถานะระบบ';
$strings['Email Administrator'] = 'เมล์ไปที่ผู้ดูแลระบบ';

$strings['Email me when'] = 'เมล์มาหาฉันเมื่อ:';
$strings['I place a reservation'] = 'เมื่อลงตารางเวลาการจองเอง';
$strings['My reservation is modified'] = 'รายการการจองของฉันได้ถูกปรับปรุงแล้ว';
$strings['My reservation is deleted'] = 'รายการการจองของฉันได้ถูกลบแล้ว';
$strings['I prefer'] = 'ต้องการให้แสดงผล :';
$strings['Your email preferences were successfully saved'] = 'รายละเอียดอีเมล์ของคุณได้ถูกจัดเก็บแล้ว';
$strings['Return to My Control Panel'] = 'กลับไปหน้าจอควบคุม';

$strings['Please select the starting and ending times'] = 'เลือกเวลาเริ่มต้นและเวลาสิ้นสุด:';
$strings['Please change the starting and ending times'] = 'เปลี่ยนแปลงเวลาเริ่มต้นและเวลาสิ้นสุด:';
$strings['Reserved time'] = 'เวลาที่จอง:';
$strings['Minimum Reservation Length'] = 'ช่วงเวลาการจองต่ำสุด:';
$strings['Maximum Reservation Length'] = 'ช่วงเวลาการจองสูงสุด:';
$strings['Reserved for'] = 'ถูกจองไว้สำหรับ:';
$strings['Will be reserved for'] = 'ถูกจองเอาไว้เพื่อ:';
$strings['N/A'] = 'ไม่มีข้อมูล';
$strings['Update all recurring records in group'] = 'ปรับปรุงรายการทั้งหมดที่ปรากฏในกลุ่ม?';
$strings['Delete?'] = 'ลบมั้ย?';
$strings['Never'] = '-- ไม่เลย --';
$strings['Days'] = 'วัน';
$strings['Weeks'] = 'สัปดาห์';
$strings['Months (date)'] = 'เดือน (วันที่)';
$strings['Months (day)'] = 'เดือน (วัน)';
$strings['First Days'] = 'วันแรก';
$strings['Second Days'] = 'วันที่สอง';
$strings['Third Days'] = 'วันที่สาม';
$strings['Fourth Days'] = 'วันที่สี่';
$strings['Last Days'] = 'วันสุดท้าย';
$strings['Repeat every'] = 'จองซ้ำทุกๆวันที่:';
$strings['Repeat on'] = 'จองซ้ำวันที่:';
$strings['Repeat until date'] = 'จองไปจนถึง:';
$strings['Choose Date'] = 'เลือกวัน';
$strings['Summary'] = 'สรุป';

$strings['View schedule'] = 'ตารางเวลาแบบ :';
$strings['My Reservations'] = 'รายการจองที่เคยทำ';
$strings['My Past Reservations'] = 'การจองของฉันครั้งสุดท้าย';
$strings['Other Reservations'] = 'การจองอื่นๆ';
$strings['Other Past Reservations'] = 'การจองอื่นๆ ที่เคยทำมา';
$strings['Blacked Out Time'] = 'หลังเวลาทำการ';
$strings['Set blackout times'] = 'ตั้งเวลาสำหรับเวลานอกทำการ %s on %s'; 
$strings['Reserve on'] = 'จอง %s ในวันที่ %s';
$strings['Prev Week'] = '&laquo; สัปดาห์ก่อน';
$strings['Jump 1 week back'] = 'ถอยกลับไป 1 สัปดาห์';
$strings['Prev days'] = '< %d วันก่อน';
$strings['Previous days'] = '&#8249; ผ่านมา %d วัน';
$strings['This Week'] = 'สัปดาห์นี้';
$strings['Jump to this week'] = 'ข้ามมาสัปดาห์นี้';
$strings['Next days'] = '%d วันข้างหน้า >';
$strings['Next Week'] = 'สัปดาห์ถัดไป &raquo;';
$strings['Jump To Date'] = 'ข้ามไปยังวันที่';
$strings['View Monthly Calendar'] = 'แสดงผลแบบรายเดือน';
$strings['Open up a navigational calendar'] = 'เปิดดูปฏิทิน';

$strings['View stats for schedule'] = 'ดูสถิติของตาราง:';
$strings['At A Glance'] = 'ข้อมูลภาพรวม';
$strings['Total Users'] = 'ผู้ใช้ทั้งหมด:';
$strings['Total Resources'] = 'สิ่งของที่มีให้จอง:';
$strings['Total Reservations'] = 'จำนวนการจองทั้งหมด:';
$strings['Max Reservation'] = 'การจองสูงสุด:';
$strings['Min Reservation'] = 'การจองต่ำสุด:';
$strings['Avg Reservation'] = 'การจองเฉลี่ย:';
$strings['Most Active Resource'] = 'สิ่งที่ถูกจองใช้มากที่สุด:';
$strings['Most Active User'] = 'ผู้ใช้ที่จองใช้งานมากที่สุด:';
$strings['System Stats'] = 'ข้อมูลระบบ';
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
$strings['Reservation start time'] = 'เวลาที่เริ่มต้นจองใช้งาน:';
$strings['Reservation end time'] = 'เวลาสิ้นสุดการจองใช้งาน:';
$strings['Days shown at a time'] = 'Days shown at a time:';
$strings['Reservations'] = 'การจองใช้งาน';
$strings['Return to top'] = 'กลับไปด้านบน';
$strings['for'] = 'สำหรับ';

$strings['Select Search Criteria'] = 'เลือกเงื่อนไขในการค้นหา';
$strings['Schedules'] = 'ตารางเวลา:';
$strings['All Schedules'] = 'กลุ่มของตารางทั้งหมด';
$strings['Hold CTRL to select multiple'] = 'กดปุ่ม CTRL ค้างไว้แล้วเลือกรายการได้';
$strings['Users'] = 'ผู้ใช้:';
$strings['All Users'] = 'ผู้ใช้ทั้งหมด';
$strings['Resources'] = 'รายการขอยืมเพิ่มเติม';		// @since 1.2.0
$strings['All Resources'] = 'ทะเบียนของยืมทั้งหมด';
$strings['Starting Date'] = 'วันที่เริ่มต้น:';
$strings['Ending Date'] = 'วันสิ้นสุด:';
$strings['Starting Time'] = 'เวลาเริ่มต้น:';
$strings['Ending Time'] = 'สิ้นสุดเมื่อ:';
$strings['Output Type'] = 'รูปแบบที่แสดงผล:';
$strings['Manage'] = 'การจัดการ';
$strings['Total Time'] = 'เวลาทั้งหมด';
$strings['Total hours'] = 'จำนวนชั่วโมงทั้งหมด:';
$strings['% of total resource time'] = '% ของเวลาทั้งหมด';
$strings['View these results as'] = 'View these results as:';
$strings['Edit this reservation'] = 'แก้ไขข้อมูลการจอง';
$strings['Search Results'] = 'ผลลัพธ์การค้นหา';
$strings['Search Resource Usage'] = 'ค้นหาการจองใช้งานอุปกรณ์';
$strings['Search Results found'] = 'ผลลัพธ์การค้นหาพบ %d ครั้ง';
$strings['Try a different search'] = 'ลองหาโดยใช้คำค้นอื่นๆ';
$strings['Search Run On'] = 'ค้นหารายการที่กำลังใช้งานอยู่:';
$strings['Member ID'] = 'ID ผู้ใช้';
$strings['Previous User'] = '&laquo; ผู้ใช้งานคนก่อน';
$strings['Next User'] = 'ผู้ใช้งานถัดไป &raquo;';

$strings['No results'] = 'ไม่พบรายการใดๆ';
$strings['That record could not be found.'] = 'ไม่พบข้อมูลในทะเบียน';
$strings['This blackout is not recurring.'] = 'ตารางนอกเวลาไม่สามารถต่อเวลาได้';
$strings['This reservation is not recurring.'] = 'ไม่สามารถต่อเวลาการจองใช้งานได้';
$strings['There are no records in the table.'] = 'ไม่มีข้อมูลในตาราง %s';
$strings['You do not have any reservations scheduled.'] = 'ยังไม่ปรากฎว่าเคยทำรายการมาก่อน';
$strings['You do not have permission to use any resources.'] = 'ยังไม่สามารถทำการจองได้';
$strings['No resources in the database.'] = 'ไม่พบรายการที่จะทำการจองใช้ในระบบ';
$strings['There was an error executing your query'] = 'มีข้อผิดพลาดเกิดขึ้นขณะติดต่อฐานข้อมูล:';

$strings['That cookie seems to be invalid'] = 'Cookie ไม่ใช่ตัวที่ใช้งาน';
$strings['We could not find that logon in our database.'] = 'ระบบไม่สามารถค้นหารายชื่อในฐานข้อมูลได้';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = 'รหัสผ่านที่ใช้ไม่มีในระบบ';
$strings['You can try'] = '<br />คุณอาจจะลอง<br />ลงทะเบียนชื่อ email <br />หรือ<br />เข้าลองระบบใหม่อีกครั้ง';
$strings['A new user has been added'] = 'ชื่อผู้ใช้งานใหม่ถูกเพิ่มเข้าไปแล้ว';
$strings['You have successfully registered'] = 'คุณได้ลงทะเบียนเรียบร้อยแล้ว!';
$strings['Continue'] = 'มีต่อ...';
$strings['Your profile has been successfully updated!'] = 'ข้อมูลของคุณได้ถูกปรับแล้ว!';
$strings['Please return to My Control Panel'] = 'โปรดกลับไปที่หน้าต่างควบคุม';
$strings['Valid email address is required.'] = '- ใส่ชื่ออีเมล์ที่สมบรูณ์';
$strings['First name is required.'] = '- ป้อนชื่อใส่ด้วย';
$strings['Last name is required.'] = '- ป้อนนามสกุลใส่ด้วย';
$strings['Phone number is required.'] = '- ป้อนเบอร์โทรติดต่อด้วย';
$strings['That email is taken already.'] = '- มีการใช้อีเมล์นี้แล้ว<br />โปรดใช้อีเมล์ชื่ออื่น';
$strings['Min 6 character password is required.'] = '- จำนวนอย่างต่ำ %s ตัวอักษร';
$strings['Passwords do not match.'] = '- รหัสผ่านไม่เหมือนกัน.';

$strings['Per page'] = 'ต่อหน้า:';
$strings['Page'] = 'หน้าที่:';

$strings['Your reservation was successfully created'] = 'ได้รับรายการแล้ว';
$strings['Your reservation was successfully modified'] = 'รายการการจองได้รับการปรับแก้แล้ว';
$strings['Your reservation was successfully deleted'] = 'รายการการจองได้ถูกลบไปแล้ว';
$strings['Your blackout was successfully created'] = 'รายการการจองนอกเวลาทำการได้รับเข้าสู่ทะเบียนการจองแล้ว';
$strings['Your blackout was successfully modified'] = 'รายการการจองนอกเวลาทำการได้รับการปรับแก้แล้ว';
$strings['Your blackout was successfully deleted'] = 'รายการการจองนอกเวลาทำการได้ถูกลบไปแล้ว';
$strings['for the follwing dates'] = 'ในวันดังต่อไปนี้:';
$strings['Start time must be less than end time'] = 'เวลาเริ่มต้นต้องมีค่าน้อยกว่าเวลาสิ้นสุด';
$strings['Current start time is'] = 'เวลาที่เริ่มจองคือ';
$strings['Current end time is'] = 'สิ้นสุดเวาลจองเมื่อ';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = 'ระยะเวลาการจองเพื่อใช้งานไม่อยู่ในช่วงที่กำหนด';
$strings['Your reservation is'] = 'การจองใช้ของคุณคือ';
$strings['Minimum reservation length'] = 'ระยะเวลาจองน้อยสุดคือ:';
$strings['Maximum reservation length'] = 'ระยะเวลาจองมากสุดคือ:';
$strings['You do not have permission to use this resource.'] = 'คุณไม่มีสิทธฺ์จองใช้สำหรับสิ่งนี้';
$strings['reserved or unavailable'] = '%s ถึง %s ได้ถูกจองหรือยกเลิกไปแล้ว';	// @since 1.1.0
$strings['Reservation created for'] = 'ลงทะเบียนการจองเพื่อ %s';
$strings['Reservation modified for'] = 'แก้ไขทะเบียนการจองสำหรับ %s';
$strings['Reservation deleted for'] = 'ลบทะเบียนการจองของ %s';
$strings['created'] = 'สร้างแล้ว';
$strings['modified'] = 'แก้ไขแล้ว';
$strings['deleted'] = 'ลบแล้ว';
$strings['Reservation #'] = 'การจอง #';
$strings['Contact'] = 'การติดต่อ';
$strings['Reservation created'] = 'รายการจองได้ถูกสร้างแล้ว';
$strings['Reservation modified'] = 'รายการจองได้ถูกแก้ไขแล้ว';
$strings['Reservation deleted'] = 'รายการจองได้ถูกลบไปแล้ว';

$strings['Reservations by month'] = 'ตารางจองรายเดือน';
$strings['Reservations by day of the week'] = 'ตารางจองรายวันของแต่ละสัปดาห์';
$strings['Reservations per month'] = 'ตารางการจองต่อเดือน';
$strings['Reservations per user'] = 'ตารางการจองต่อผู้ใช้';
$strings['Reservations per resource'] = 'ตารางการจองต่อสิ่งที่ให้จอง';
$strings['Reservations per start time'] = 'ตารางการจองต่อเวลาที่เริ่มจอง';
$strings['Reservations per end time'] = 'ตารางการจองต่อเวลาที่สิ้นสุดการจอง';
$strings['[All Reservations]'] = '[All Reservations]';

$strings['Permissions Updated'] = 'แก้ไขการอนุญาตแล้ว';
$strings['Your permissions have been updated'] = '%s ของคุณได้รับการแก้ไขแล้ว';
$strings['You now do not have permission to use any resources.'] = 'ตอนนี้คุณไม่มีสิทธิ์ในการจองอยู่';
$strings['You now have permission to use the following resources'] = 'คุณสามารถจองใช้งานรายการดังต่อไปนี้:';
$strings['Please contact with any questions.'] = 'โปรดติดต่อ %s เมื่อมีข้อสงสัย';
$strings['Password Reset'] = 'รหัสผ่านได้ถูกตั้งใหม่แล้ว';

$strings['This will change your password to a new, randomly generated one.'] = 'โปรแกรมจะทำการสร้างรหัสให้ใหม่โดยสุ่มค่าขึ้นมาใหม่';
$strings['your new password will be set'] = 'ซึ่งหลังจากที่คุณกดปุ่ม เปลี่ยนรหัสใหม่ โปรแกรมจะส่งเมล์รหัสผ่านไปยังอีเมล์ที่ที่คุณให้และใช้รหัสผ่านที่ได้เข้าระบบอีกครั้ง';
$strings['Change Password'] = 'เปลี่ยนรหัสผ่านใหม่';
$strings['Sorry, we could not find that user in the database.'] = 'โอะๆ ไม่พบชื่อีเมล์ที่คุณให้ปรากฎอยู่ในระบบ';
$strings['Your New Password'] = 'รหัสใหม่คือ %s ';
$strings['Your new passsword has been emailed to you.'] = 'สำเร็จ!<br />'
    			. 'รหัสใหม่ได้ส่งไปหาคุณแล้ว<br />'
    			. 'โปรดตรวจดูรหัสผ่านใหม่ในกล่องอีเมล์ขาเข้าจากนั้นไปที่<a href="index.php"> เข้าสู่ระบบ</a>'
    			. ' ด้วยรหัสผ่านนี้ และสามารถเปลี่ยนแปลงรหัสผ่านใหม่ได้โดยเช้าไปที่ &quot;Change My Profile Information/Password&quot;';

$strings['You are not logged in!'] = 'คุณยังไม่ได้เข้าสู่ระบบ';

$strings['Setup'] = 'การตั้งค่าในระบบ';
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
$strings['There is no way to undo this action'] = 'There is no way to undo this action!';
$strings['Click to proceed'] = 'Click to proceed';
$strings['Please delete this file.'] = 'Please delete this file.';
$strings['Successful update'] = 'The update succeeded fully';
$strings['Patch completed successfully'] = 'Patch completed successfully';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = 'If no value is specified, the default password set in the config file will be used.';
$strings['Notify user that password has been changed?'] = 'Notify user that password has been changed?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = 'ต้องการใช้อีเมล์ของคุณสำหรับการใช้งานระบบนี้';
$strings['Invalid User Name/Password.'] = 'ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง';
$strings['Pending User Reservations'] = 'Pending User Reservations';
$strings['Approve'] = 'อนุมัติ';
$strings['Approve this reservation'] = 'อนุมัติการจองนี้';
$strings['Approve Reservations'] ='อนุมัติรายการจอง';

$strings['Announcement'] = 'ประกาศ';
$strings['Number'] = 'รุ่นที่';
$strings['Add Announcement'] = 'ใส่ประกาศ';
$strings['Edit Announcement'] = 'แก้ไขประกาศ';
$strings['All Announcements'] = 'ประกาศทั้งหมด';
$strings['Delete Announcements'] = 'ลบประกาศ';
$strings['Use start date/time?'] = 'Use start date/time?';
$strings['Use end date/time?'] = 'Use end date/time?';
$strings['Announcement text is required.'] = 'ต้องการข้อมูลลงใช้งานในประกาศ';
$strings['Announcement number is required.'] = 'ยังไม่ได้ใส่หมายเลขครั้งที่เขียน/แก้ไขปรับปรุงประกาศ';

$strings['Pending Approval'] = 'รอการอนุมัติใช้งาน';
$strings['My reservation is approved'] = 'รายการจองของฉันได้รับอนุมัติแล้ว';
$strings['This reservation must be approved by the administrator.'] = 'รายการจองนี้ที่รับการอนุมัติแล้ว';
$strings['Approval Required'] = 'ต้องการการอนุมัติ';
$strings['No reservations requiring approval'] = 'ไม่พบรายการจองใดเลยที่รอการอนุมัติ';
$strings['Your reservation was successfully approved'] = 'การจองใช้งานของคุณได้รับการอนุมัติแล้ว';
$strings['Reservation approved for'] = 'อนุมัติการจองสำหรับ %s';
$strings['approved'] = 'ผ่าน...!';
$strings['Reservation approved'] = 'อนุมัติการจองใช้งาน';

$strings['Valid username is required'] = 'โปรดใส่ชื่อผู้ใช้งานที่ถูกต้อง';
$strings['That logon name is taken already.'] = 'ชื่อสำหรับเข้าสู่ระบบได้ถูกใช้งานโดยผู้อื่นแล้ว';
$strings['this will be your login'] = '(ชื่อนี้คือชื่อสำหรับเข้าสู่ระบบ)';
$strings['Logon name'] = 'ชื่อเรียกผู้ใช้งาน';
$strings['Your logon name is'] = 'Your logon name is %s';

$strings['Start'] = 'เริ่ม';
$strings['End'] = 'สิ้นสุด';
$strings['Start date must be less than or equal to end date'] = 'วันที่เริ่มทำการจองใช้งานจะต้องมีค่าน้อยกว่าวันที่สิ้สุดการจองใช้';
$strings['That starting date has already passed'] = 'วันที่จองนั้นได้ผ่านมาแล้ว';
$strings['Basic'] = 'รายละเอียดทั่วไป';
$strings['Participants'] = 'รายชื่อผู้เข้าร่วม';
$strings['Close'] = 'ปิด';
$strings['Start Date'] = 'วันที่เริ่มต้น';
$strings['End Date'] = 'วันที่สิ้นสุด';
$strings['Minimum'] = 'ต่ำสุด';
$strings['Maximum'] = 'สูงสุด';
$strings['Allow Multiple Day Reservations'] = 'สามารถเลือกได้หลายวัน';
$strings['Invited Users'] = 'รายชื่อผู้เข้าร่วม';
$strings['Invite Users'] = 'Invite Users';
$strings['Remove Participants'] = 'เอาชื่อผู้เข้าร่วมประชุมออก';
$strings['Reservation Invitation'] = 'Reservation Invitation';
$strings['Manage Invites'] = 'จัดการการเชิญ';
$strings['No invite was selected'] = 'ไม่ได้เชิญใครเข้าร่วม';
$strings['reservation accepted'] = '%s ได้ตอบรับการเข้าร่วมวันที่ %s';
$strings['reservation declined'] = '%s ได้ยกเลิกตอบรับการเข้าร่วมวันที่ %s';
$strings['Login to manage all of your invitiations'] = 'เข้าสู่ระบบเพื่อจัดการคำเชิญ';
$strings['Reservation Participation Change'] = 'Reservation Participation Change';
$strings['My Invitations'] = 'ตารางจองที่เคยเข้าร่วม';
$strings['Accept'] = 'ตกลง';
$strings['Decline'] = 'ยกเลิก';
$strings['Accept or decline this reservation'] = 'ยอมรับหรือยกเลิกการเข้าร่วมนี้';
$strings['My Reservation Participation'] = 'รายการจองที่ถูกเชิญเข้าร่วม';
$strings['End Participation'] = 'End Participation';
$strings['Owner'] = 'ผู้ทำรายการ';
$strings['Particpating Users'] = 'ผู้ที่ถูกเชิญให้ร่วมประชุมหรือใช้งาน';
$strings['No advanced options available'] = 'ไม่มีตัวเลือกอื่นๆ แล้ว';
$strings['Confirm reservation participation'] = 'ตอบรับการเข้าร่วมตามการเชิญ';
$strings['Confirm'] = 'ยืนยัน';
$strings['Do for all reservations in the group?'] = 'Do for all reservations in the group?';

$strings['My Calendar'] = 'ตารางจองของผู้ใช้';
$strings['View My Calendar'] = 'ดูปฏิทินของฉัน';
$strings['Participant'] = 'ผู้เข้าร่วมอื่นๆ';
$strings['Recurring'] = 'ต่ออายุ';
$strings['Multiple Day'] = 'หลายๆ วัน';
$strings['[today]'] = '[วันนี้]';
$strings['Day View'] = 'แสดงรายวัน';
$strings['Week View'] = 'แสดงรายสัปดาห์';
$strings['Month View'] = 'แสดงรายเดือน';
$strings['Resource Calendar'] = 'Resource Calendar';
$strings['View Resource Calendar'] = 'ดูตารางการจอง';	// @since 1.2.0
$strings['Signup View'] = 'Signup View';

$strings['Select User'] = 'เลือกบุคล';
$strings['Change'] = 'แก้ไข';

$strings['Update'] = 'ปรับปรุงข้อมูล';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt Update is only available for versions 1.0.0 or later';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt is already up to date';
$strings['Migrating reservations'] = 'Migrating reservations';

$strings['Admin'] = 'Admin';
$strings['Manage Announcements'] = 'การประกาศต่างๆ';
$strings['There are no announcements'] = 'ยังไม่มีข้อความประกาศใดๆ';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'จำนวนคนสูงสุด';
$strings['Leave blank for unlimited'] = 'เว้นว่างไว้หากไม่จำกัดจำนวน';
$strings['Maximum of participants'] = 'รายการจองสามารถรองรับผผู้เข้าร่วมสูงสุด %s คน';
$strings['That reservation is at full capacity.'] = 'เต็มแล้ว';
$strings['Allow registered users to join?'] = 'ยอมให้สมาชิกเข้าร่วมได้?';
$strings['Allow non-registered users to join?'] = 'ยอมให้บุคลภายนอกเข้าร่วมได้?';
$strings['Join'] = 'เข้าร่วม';
$strings['My Participation Options'] = 'My Participation Options';
$strings['Join Reservation'] = 'Join Reservation';
$strings['Join All Recurring'] = 'Join All Recurring';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'คุณไม่สามารถเข้าร่วมได้ตามตารางจองเพราะจำนวนผู้เข้าร่วมได้ถึงจำนวนสูงสุดแล้ว';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'คุณได้เข้าร่วมในตารางใช้ห้องนี้แล้ว โปรดเช็คอีเมล์ของคุณในภายหลัง';
$strings['Additional Tools'] = 'Additional Tools';
$strings['Create User'] = 'สร้างผู้ใช้ใหม่';
$strings['Check Availability'] = 'ตรวจดูตารางใช้งาน';
$strings['Manage Additional Resources'] = 'จัดการอุปกรณ์ประกอบอื่นๆ';
$strings['Number Available'] = 'จำนวน';
$strings['Unlimited'] = 'ไม่จำกัด';
$strings['Add Additional Resource'] = 'เพิ่มรายการเพิ่มเติมอื่นๆ';
$strings['Edit Additional Resource'] = 'แก้ไขรายการเพิ่มเติมอื่นๆ';
$strings['Checking'] = 'ตรวจสอบ';
$strings['You did not select anything to delete.'] = 'ไม่ได้เลือกรายการใดๆ เพื่อทำการลบ';
$strings['Added Resources'] = 'Added Resources';
$strings['Additional resource is reserved'] = 'รายการเพิ่มเติม %s มีเพียง %s ในตอนนี้';
$strings['All Groups'] = 'กลุ่มผู้ใช้งานทั้งหมด';
$strings['Group Name'] = 'ชื่อกลุ่มผู้ใช้งาน';
$strings['Delete Groups'] = 'ลบกลุ่มผู้ใช้งาน';
$strings['Manage Groups'] = 'การแบ่งกลุ่มผู้ใช้งาน';
$strings['None'] = 'ไม่มี';
$strings['Group name is required.'] = 'โปรดใส่ชื่อกลุ่มผู้ใช้งาน';
$strings['Groups'] = 'กลุ่มสมาชิก';
$strings['Current Groups'] = 'กลุ่มผู้ใช้งานขณะนี้';
$strings['Group Administration'] = 'Group Administration';
$strings['Reminder Subject'] = 'ระบบเตือนการจอง- %s, %s %s';
$strings['Reminder'] = 'Reminder';
$strings['before reservation'] = 'before reservation';
$strings['My Participation'] = 'ผู้ร่วมประชุมของฉัน';
$strings['My Past Participation'] = 'ผู้ที่เคยเข้าร่วมประชุมที่ผ่านมา';
$strings['Timezone'] = 'เขตเวลา (ระยะเวลาที่ห่างจากเครื่อง Server)';
$strings['Export'] = 'ส่งออก';
$strings['Select reservations to export'] = 'เลือกรายการที่จะส่งออก';
$strings['Export Format'] = 'Export Format';
$strings['This resource cannot be reserved less than x hours in advance'] = 'This resource cannot be reserved less than %s hours in advance';
$strings['This resource cannot be reserved more than x hours in advance'] = 'This resource cannot be reserved more than %s hours in advance';
$strings['Minimum Booking Notice'] = 'Minimum Booking Notice';
$strings['Maximum Booking Notice'] = 'Maximum Booking Notice';
$strings['hours prior to the start time'] = 'hours prior to the start time';
$strings['hours from the current time'] = 'hours from the current time';
$strings['Contains'] = 'Contains';
$strings['Begins with'] = 'Begins with';
$strings['Minimum booking notice is required.'] = 'Minimum booking notice is required.';
$strings['Maximum booking notice is required.'] = 'Maximum booking notice is required.';
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
				. "คุณได้ลงทะเบียนเรียบร้อยแล้วโดยมีรายละเอียดดังนี้:\r\n"
				. "ชื่อล็อกอิน: %s\r\n"
				. "ชื่อ-นามสกุล: %s %s \r\n"
				. "โทรศัพท์: %s \r\n"
				. "สถานที่ทำงาน: %s \r\n"
				. "ตำแหน่ง: %s \r\n\r\n"
				. "โปรดเข้าสุ่ระบบที่:\r\n"
				. "%s \r\n\r\n"
				. "คุณสามารถหาลิงค์ไปที่การจองและแก้รายละเอียดของคุณที่กล่องคุมส่วนตัว\r\n\r\n"
				. "มีปัญหาโปรดติดต่อ %s";

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
			. "คุณได้ทำรายการ %s การจองใช้ #%s \r\n\r\n<br/><br/>"
			. "ใช้หรัสการจองนี้เเมื่อต้องการติดต่อผู้ควบคุมระบบ \r\n\r\n<br/><br/>"
			. "การจองใช้งานระหว่างเวลา %s %s ถึง %s %s ของ %s"
			. " ที่ %s ได้ถูก %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "การจองซ้ำๆในช่วงเวลาอื่นๆ ของทุกวันที่ \r\n<br/>";
$email['reservation_activity_3'] = "รายการจองอื่นๆ ที่เกี่ยวข้องกับการจองนี้ %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "หมายเหต \r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "หากมีข้อผิดพลาดโปรดติดต่อผู้ดูแลที่ %s"
			. " หรือโทรติดต่อ %s.\r\n\r\n<br/><br/>"
			. "คุณสามารถดูและแก้ไขรายการจองอันนี้โดย"
			. " เข้าไป %s ที่ \r\n<br/>"
			. "<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n<br/><br/>";
$email['reservation_activity_6'] = "หากมีปัญหา โปรดติดต่อไปที่ <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "การจอง #%s ได้ถูกอนุมัติแล้ว \r\n\r\n<br/><br/>"
			. "และใช้รหัสการจองนี้เเมื่อต้องการติดต่อผู้ควบคุมระบบ \r\n\r\n<br/><br/>"
			. "การจองใช้งานระหว่างเวลา %s %s ถึง %s %s ของ %s"
			. " ที่ %s ได้ถูก %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "รหัส %s ได้ถูกรีเซ้ตโดยผู้ดูแลระบบ \r\n\r\n"
			. "รหัสผ่านชั่วคราวคือ \r\n\r\n %s\r\n\r\n"
			. "ให้ใช้รหัสผ่านชั่วคราวนี้ (ก็อปปี้หรือจดไว้) เพื่อใช้เข้าระบบ %s ที่ %s"
			. " จากนั้นให้เปลี่ยนรหัสผ่านใหม่อีกครั้งในกล่องควบคุมส่วนตัวของผู้ใช้\r\n\r\n"
			. "โปรดติดต่อ %s หากมีข้อสงสัย";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "Your new password for your %s account is:\r\n\r\n"
            . "%s\r\n\r\n"
            . "Please Log In at %s "
            . "with this new password "
            . "(copy and paste it to ensure it is correct) "
            . "and promptly change your password by clicking the "
            . "Change My Profile Information/Password "
            . "link in My Control Panel.\r\n\r\n"
            . "Please direct any questions to %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s  ได้ให้คุณเข้าร่วมหรือดูแลการใช้งาน \r\n\r\n"
		. "สถานที่ : %s\r\n"
		. "วันที่ : %s\r\n"
		. "เวลา : %s\r\n"
		. "สิ้นสุดวันที่ : %s\r\n"
		. "สิ้นสุดเวลา : %s\r\n"
		. "ข้อมูลอื่นๆ : %s\r\n"
		. "จองซ้ำในวันอื่นๆ (หากมี) : %s\r\n\r\n"
		. "หากตกลงเข้าร่วมให้คลิ๊กที่ลิงค์นี้ (ก็อปปี้ลิงค์หากไม่มีลิงค์ปรากฏ)\n %s\r\n\n"
		. "หากตกลงเข้าร่วมให้คลิ๊กที่ลิงค์นี้ (ก็อปปี้ลิงค์หากไม่มีลิงค์ปรากฏ)\n %s\r\n\n"
		. "หากตัดสินใจในภายหลังให้เข้าไป %s ที่ %s";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "คุณได้ถูกปฏิเสทในการเข้าร่วมจากตารางจอง :\r\n\r\n"
		. "สถานที่ : %s\r\n"
		. "วันที่ : %s\r\n"
		. "เวลา : %s\r\n"
		. "สิ้นสุดวันที่ : %s\r\n"
		. "สิ้นสุดเวลา : %s\r\n"
		. "ข้อมูลอื่นๆ : %s\r\n"
		. "จองซ้ำในวันอื่นๆ (หากมี) : %s\r\n\r\n";	
		
// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "ตารางจองที่ทำไว้ %s ตั้งแต่ %s %s จนถึง %s %s ใกล้จะถึงกำหนดการแล้ว";
?>