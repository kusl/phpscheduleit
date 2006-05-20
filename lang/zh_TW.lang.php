<?php
/**
* Traditional Chinese (zh_TW) translation file.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Jing-Jong Shyue <shyue@mail.shyue.idv.tw>
* @version 05-14-06
* @package Languages
*
* Copyright (C) 2003 - 2005 phpScheduleIt
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
$charset = 'utf-8';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element 
   and go through the seven day week, ending on Saturday
***/
// The full day name
$days_full = array('週日', '週一', '週二', '週三', '週四', '週五', '週六');
// The three letter abbreviation
$days_abbr = array('週日', '週一', '週二', '週三', '週四', '週五', '週六');
// The two letter abbreviation
$days_two  = array('日', '一', '二', '三', '四', '五', '六');
// The one letter abbreviation
$days_letter = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
   and go through the twelve months of the year, ending on December
***/
// The full month name
$months_full = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
// The three letter month name
$months_abbr = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

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
$strings['hours'] = '小時';
$strings['minutes'] = '分鐘';
// The common abbreviation to hint that a user should enter the month as 2 digits
$strings['mm'] = '月';
// The common abbreviation to hint that a user should enter the day as 2 digits
$strings['dd'] = '日';
// The common abbreviation to hint that a user should enter the year as 4 digits
$strings['yyyy'] = '年';
$strings['am'] = 'am';
$strings['pm'] = 'pm';

$strings['Administrator'] = '系統管理員';
$strings['Welcome Back'] = '歡迎回來, %s';
$strings['Log Out'] = '登出';
$strings['My Control Panel'] = '我的控制台';
$strings['Help'] = '說明';
$strings['Manage Schedules'] = '日程管理';
$strings['Manage Users'] ='使用者管理';
$strings['Manage Resources'] ='資源管理';
$strings['Manage User Training'] ='使用者訓練管理';
$strings['Manage Reservations'] ='預約管理';
$strings['Email Users'] ='電郵使用者';
$strings['Export Database Data'] = '匯出資料庫內容';
$strings['Reset Password'] = '重設密碼';
$strings['System Administration'] = '系統管理';
$strings['Successful update'] = '更新成功';
$strings['Update failed!'] = '更新失敗!';
$strings['Manage Blackout Times'] = '管理管制時間';
$strings['Forgot Password'] = '忘記密碼';
$strings['Manage My Email Contacts'] = '管理我的電郵連絡';
$strings['Choose Date'] = '選擇日期';
$strings['Modify My Profile'] = '變更個人資料';
$strings['Register'] = '註冊';
$strings['Processing Blackout'] = '管制處理中';
$strings['Processing Reservation'] = '預約處理中';
$strings['Online Scheduler [Read-only Mode]'] = '線上日程管理 [唯讀模式]';
$strings['Online Scheduler'] = '線上日程管理';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt 統計資料';
$strings['User Info'] = '使用者資料:';

$strings['Could not determine tool'] = '無法決定工具. 請回到"我的控制台"並稍候再試.';
$strings['This is only accessable to the administrator'] = '只有系統管理員可以使用這個功能';
$strings['Back to My Control Panel'] = '回到我的控制台';
$strings['That schedule is not available.'] = '不允許這個日程.';
$strings['You did not select any schedules to delete.'] = '您沒有選擇要刪除的日程.';
$strings['You did not select any members to delete.'] = '您沒有選擇要刪除的會員.';
$strings['You did not select any resources to delete.'] = '您沒有選擇要刪除的資源.';
$strings['Schedule title is required.'] = '日程標題是必需的.';
$strings['Invalid start/end times'] = '不合法的開始或結束時間';
$strings['View days is required'] = '檢視日期是必需的';
$strings['Day offset is required'] = '日期位移是必需的';
$strings['Admin email is required'] = '管理電子郵件是必需的';
$strings['Resource name is required.'] = '資源名稱是必需的.';
$strings['Valid schedule must be selected'] = '必須選擇有效的日程';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '最小預約長度必須比最大預約長度小.';
$strings['Your request was processed successfully.'] = '您的要求已經成功的被處理了.';
$strings['Go back to system administration'] = '回到系統管理';
$strings['Or wait to be automatically redirected there.'] = '或稍候自動重轉向到那裡.';
$strings['There were problems processing your request.'] = '處理您的要求時發生了問題.';
$strings['Please go back and correct any errors.'] = '請回去更正錯誤.';
$strings['Login to view details and place reservations'] = '登入以檢視詳細資料和預約';
$strings['Memberid is not available.'] = '使用者名稱: %s 不存在.';

$strings['Schedule Title'] = '日程標題';
$strings['Start Time'] = '開始時間';
$strings['End Time'] = '結束時間';
$strings['Time Span'] = '時間跨度';
$strings['Weekday Start'] = '每週起始日';
$strings['Admin Email'] = '管理者電郵';

$strings['Default'] = '預設值';
$strings['Reset'] = '重設';
$strings['Edit'] = '編輯';
$strings['Delete'] = '刪除';
$strings['Cancel'] = '取消';
$strings['View'] = '檢視';
$strings['Modify'] = '修改';
$strings['Save'] = '儲存';
$strings['Back'] = '上一個';
$strings['Next'] = '下一個';
$strings['Close Window'] = '關閉視窗';
$strings['Search'] = '搜尋';
$strings['Clear'] = '清除';

$strings['Days to Show'] = '要顯示的日期';
$strings['Reservation Offset'] = '預約位移';
$strings['Hidden'] = '隱藏';
$strings['Show Summary'] = '顯示摘要';
$strings['Add Schedule'] = '增加日程';
$strings['Edit Schedule'] = '編輯日程';
$strings['No'] = '否';
$strings['Yes'] = '是';
$strings['Name'] = '使用者名稱';
$strings['First Name'] = '名';
$strings['Last Name'] = '姓';
$strings['Resource Name'] = '資源名稱';
$strings['Email'] = '電子郵件';
$strings['Institution'] = '機構';
$strings['Phone'] = '電話';
$strings['Password'] = '密碼';
$strings['Permissions'] = '權限';
$strings['View information about'] = '檢視關於 %s %s 的資訊';
$strings['Send email to'] = '送電子郵件給 %s %s';
$strings['Reset password for'] = '重設 %s %s 的密碼';
$strings['Edit permissions for'] = '編輯 %s %s 的權限';
$strings['Position'] = '職稱';
$strings['Password (6 char min)'] = '密碼 (至少 %s 個字元)';	// @since 1.1.0
$strings['Re-Enter Password'] = '再次輸入密碼';

$strings['Sort by descending last name'] = '根據"姓"遞減排序';
$strings['Sort by descending email address'] = '根據"電子郵件"遞減排序';
$strings['Sort by descending institution'] = '根據"機構"遞減排序';
$strings['Sort by ascending last name'] = '根據"姓"遞增排序';
$strings['Sort by ascending email address'] = '根據"電子郵件"遞增排序';
$strings['Sort by ascending institution'] = '根據"機構"遞增排序';
$strings['Sort by descending resource name'] = '根據"資源名稱"遞減排序';
$strings['Sort by descending location'] = '根據"位置"遞減排序';
$strings['Sort by descending schedule title'] = '根據"日程標題"遞減排序';
$strings['Sort by ascending resource name'] = '根據"資源名稱"遞增排序';
$strings['Sort by ascending location'] = '根據"位置"遞增排序';
$strings['Sort by ascending schedule title'] = '根據"日程標題"遞增排序';
$strings['Sort by descending date'] = '根據"日期"遞減排序';
$strings['Sort by descending user name'] = '根據"使用者名稱"遞減排序';
$strings['Sort by descending start time'] = '根據"開始時間"遞減排序';
$strings['Sort by descending end time'] = '根據"結束時間"遞減排序';
$strings['Sort by ascending date'] = '根據"日期"遞增排序';
$strings['Sort by ascending user name'] = '根據"使用者名稱"遞增排序';
$strings['Sort by ascending start time'] = '根據"開始時間"遞增排序';
$strings['Sort by ascending end time'] = '根據"結束時間"遞增排序';
$strings['Sort by descending created time'] = '根據"建立時間"遞減排序';
$strings['Sort by ascending created time'] = '根據"建立時間"遞增排序';
$strings['Sort by descending last modified time'] = '根據"最後修改時間"遞減排序';
$strings['Sort by ascending last modified time'] = '根據"最後修改時間"遞增排序';

$strings['Search Users'] = '搜尋使用者';
$strings['Location'] = '位置';
$strings['Schedule'] = '日程';
$strings['Phone'] = '電話';
$strings['Notes'] = '備考';
$strings['Status'] = '狀態';
$strings['All Schedules'] = '全部日程';
$strings['All Resources'] = '全部資源';
$strings['All Users'] = '全部使用者';

$strings['Edit data for'] = '編輯 %s 的資料';
$strings['Active'] = '使用中';
$strings['Inactive'] = '停用中';
$strings['Toggle this resource active/inactive'] = '切換這個資源的使用狀態';
$strings['Minimum Reservation Time'] = '最小預約時間';
$strings['Maximum Reservation Time'] = '最大預約時間';
$strings['Auto-assign permission'] = '自動給予權限';
$strings['Add Resource'] = '增加資源';
$strings['Edit Resource'] = '編輯資源';
$strings['Allowed'] = '允許';
$strings['Notify user'] = '通知使用著';
$strings['User Reservations'] = '使用者預約';
$strings['Date'] = '日期';
$strings['User'] = '使用者';
$strings['Email Users'] = '電郵使用著';
$strings['Subject'] = '標題';
$strings['Message'] = '訊息';
$strings['Please select users'] = '請選擇使用者';
$strings['Send Email'] = '寄送郵件';
$strings['problem sending email'] = '抱歉, 寄送郵件時發生了問題, 請稍候再試.';
$strings['The email sent successfully.'] = '郵件以成功送出.';
$strings['do not refresh page'] = '請 <u>不要</u> 重新載入本頁. 這麼做將會再一次的送出郵件.';
$strings['Return to email management'] = '回到電郵管理';
$strings['Please select which tables and fields to export'] = '請選擇要匯出的表格與欄位:';
$strings['all fields'] = '- 全部欄位 -';
$strings['HTML'] = '網頁';
$strings['Plain text'] = '純文字';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '匯出資料';
$strings['Reset Password for'] = '重設 %s 的密碼';
$strings['Please edit your profile'] = '請編輯您的個人資料';
$strings['Please register'] = '請註冊';
$strings['Keep me logged in'] = '保持我的登入狀態 <br/>(需要 cookies)';
$strings['Edit Profile'] = '編輯個人資料';
$strings['Register'] = '註冊';
$strings['Please Log In'] = '請登入';
$strings['Email address'] = '電子郵件位址';
$strings['Password'] = '密碼';
$strings['First time user'] = '第一次使用?';
$strings['Click here to register'] = '按這裡註冊';
$strings['Register for phpScheduleIt'] = '註冊 phpScheduleIt';
$strings['Log In'] = '登入';
$strings['View Schedule'] = '檢視日程';
$strings['View a read-only version of the schedule'] = '檢視唯讀得日程表';
$strings['I Forgot My Password'] = '我忘記我的密碼了';
$strings['Retreive lost password'] = '找回密碼';
$strings['Get online help'] = '取得線上說明';
$strings['Language'] = '語言';
$strings['(Default)'] = '(預設)';

$strings['My Announcements'] = '我的公告';
$strings['My Reservations'] = '我的預約';
$strings['My Permissions'] = '我的權限';
$strings['My Quick Links'] = '我的快速連結';
$strings['Announcements as of'] = '%s 的公告';
$strings['There are no announcements.'] = '沒有公告事項.';
$strings['Resource'] = '資源';
$strings['Created'] = '建立時間';
$strings['Last Modified'] = '最後修改時間';
$strings['View this reservation'] = '檢視這個預約';
$strings['Modify this reservation'] = '修改這個預約';
$strings['Delete this reservation'] = '刪除這個預約';
$strings['Bookings'] = 'Bookings';											// @since 1.2.0
$strings['Change My Profile Information/Password'] = 'Change Profile';		// @since 1.2.0
$strings['Manage My Email Preferences'] = 'Email Preferences';				// @since 1.2.0
$strings['Mass Email Users'] = '大量電郵使用者';
$strings['Search Scheduled Resource Usage'] = 'Search Reservations';		// @since 1.2.0
$strings['Export Database Content'] = '匯出資料庫內容';
$strings['View System Stats'] = '檢視系統狀況';
$strings['Email Administrator'] = '電郵管理員';

$strings['Email me when'] = '通知我:';
$strings['I place a reservation'] = '建立預約';
$strings['My reservation is modified'] = '預約已被修改';
$strings['My reservation is deleted'] = '預約已被刪除';
$strings['I prefer'] = '我偏好:';
$strings['Your email preferences were successfully saved'] = '您的電郵偏好設定已被儲存!';
$strings['Return to My Control Panel'] = '回到我的控制台';

$strings['Please select the starting and ending times'] = '請選擇開始與結束時間:';
$strings['Please change the starting and ending times'] = '請變更開始與結束時間:';
$strings['Reserved time'] = '預約的時間:';
$strings['Minimum Reservation Length'] = '最小預約長度:';
$strings['Maximum Reservation Length'] = '最大預約長度:';
$strings['Reserved for'] = '預約給:';
$strings['Will be reserved for'] = '將被預約給:';
$strings['N/A'] = '無';
$strings['Update all recurring records in group'] = '是否更新群組中全部的循環記錄?';
$strings['Delete?'] = '是否刪除?';
$strings['Never'] = '-- 無 --';
$strings['Days'] = '日';
$strings['Weeks'] = '週';
$strings['Months (date)'] = '月 (日期)';
$strings['Months (day)'] = '月 (某天)';
$strings['First Days'] = '第一個';
$strings['Second Days'] = '第二個';
$strings['Third Days'] = '第三個';
$strings['Fourth Days'] = '第四個';
$strings['Last Days'] = '最後一個';
$strings['Repeat every'] = '重複頻率:';
$strings['Repeat on'] = '重複在:';
$strings['Repeat until date'] = '重複直到:';
$strings['Choose Date'] = '選擇日期';
$strings['Summary'] = '摘要';

$strings['View schedule'] = '檢視日程:';
$strings['My Reservations'] = '我的預約';
$strings['My Past Reservations'] = '我之前的預約';
$strings['Other Reservations'] = '其他預約';
$strings['Other Past Reservations'] = '其他過去的預約';
$strings['Blacked Out Time'] = '管制的時間';
$strings['Set blackout times'] = '設定 %s 的管制於 %s'; 
$strings['Reserve on'] = '預約了 %s 於 %s';
$strings['Prev Week'] = '&laquo; 上週';
$strings['Jump 1 week back'] = '跳到一週前';
$strings['Prev days'] = '&#8249; 之前 %d 天';
$strings['Previous days'] = '&#8249; 之前 %d 天';
$strings['This Week'] = '本週';
$strings['Jump to this week'] = '跳到本週';
$strings['Next days'] = '之後 %d 天 &#8250;';
$strings['Next Week'] = '下週 &raquo;';
$strings['Jump To Date'] = '跳到日期';
$strings['View Monthly Calendar'] = '檢視月曆';
$strings['Open up a navigational calendar'] = '開啟一個可以瀏覽的月曆';

$strings['View stats for schedule'] = '檢視預約的狀態:';
$strings['At A Glance'] = '一覽表';
$strings['Total Users'] = '全部使用者數:';
$strings['Total Resources'] = '全部資源數:';
$strings['Total Reservations'] = '全部預約數:';
$strings['Max Reservation'] = '最大預約時間:';
$strings['Min Reservation'] = '最小預約時間:';
$strings['Avg Reservation'] = '平均預約時間:';
$strings['Most Active Resource'] = '用量最高的資源:';
$strings['Most Active User'] = '用量最多的使用者:';
$strings['System Stats'] = '系統狀態';
$strings['phpScheduleIt version'] = 'phpScheduleIt 版本:';
$strings['Database backend'] = '後端資料庫:';
$strings['Database name'] = '資料庫名稱:';
$strings['PHP version'] = 'PHP 版本:';
$strings['Server OS'] = '伺服器作業系統:';
$strings['Server name'] = '伺服器名稱:';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt 根目錄:';
$strings['Using permissions'] = '使用權限:';
$strings['Using logging'] = '使用記錄:';
$strings['Log file'] = '記錄檔:';
$strings['Admin email address'] = '管理者電子郵件:';
$strings['Tech email address'] = '工程支援電子郵件:';
$strings['CC email addresses'] = '電子郵件副本:';
$strings['Reservation start time'] = '預約起始時間:';
$strings['Reservation end time'] = '預約結束時間:';
$strings['Days shown at a time'] = '同時顯示日數:';
$strings['Reservations'] = '預約';
$strings['Return to top'] = '回到頂端';
$strings['for'] = '-';

$strings['Select Search Criteria'] = '選擇搜尋條件';
$strings['Schedules'] = '日程:';
$strings['All Schedules'] = '全部日程';
$strings['Hold CTRL to select multiple'] = '按下 CTRL 以多重選擇';
$strings['Users'] = '使用者:';
$strings['All Users'] = '全部使用者';
$strings['Resources'] = '資源';
$strings['All Resources'] = '全部資源';
$strings['Starting Date'] = '開始日期:';
$strings['Ending Date'] = '結束日期:';
$strings['Starting Time'] = '開始時間:';
$strings['Ending Time'] = '結束時間:';
$strings['Output Type'] = '輸出類型:';
$strings['Manage'] = '管理';
$strings['Total Time'] = '全部時間';
$strings['Total hours'] = '全部時數:';
$strings['% of total resource time'] = '% 全部資源時間';
$strings['View these results as'] = '檢視這些結果為:';
$strings['Edit this reservation'] = '編輯這個預約';
$strings['Search Results'] = '搜尋結果';
$strings['Search Resource Usage'] = '搜尋資源使用量';
$strings['Search Results found'] = '搜尋結果: 找到 %d 個預約';
$strings['Try a different search'] = '嘗試不同搜尋條件';
$strings['Search Run On'] = '搜尋執行於:';
$strings['Member ID'] = '會員編號';
$strings['Previous User'] = '&laquo; 前一個使用者';
$strings['Next User'] = '下一個使用者 &raquo;';

$strings['No results'] = '沒有結果';
$strings['That record could not be found.'] = '找不到這個記錄.';
$strings['This blackout is not recurring.'] = '這個管制沒有循環記錄.';
$strings['This reservation is not recurring.'] = '這個預約沒有循環記錄.';
$strings['There are no records in the table.'] = '在 %s 表中沒有記錄.';
$strings['You do not have any reservations scheduled.'] = '您沒有任何預約的日程.';
$strings['You do not have permission to use any resources.'] = '您沒有權限使用任何資源.';
$strings['No resources in the database.'] = '資料庫中沒有資源.';
$strings['There was an error executing your query'] = '您的查詢有錯誤:';

$strings['That cookie seems to be invalid'] = '這個 cookie 似乎不合法';
$strings['We could not find that logon in our database.'] = '我們在資料庫中找不到這個登入名稱.';	// @since 1.1.0
$strings['That password did not match the one in our database.'] = '密碼與我們資料庫的記錄不符.';
$strings['You can try'] = '<br />您可以嘗試:<br />註冊一個電子郵件.<br />或者:<br />嘗試再一次登入.';
$strings['A new user has been added'] = '增加了一個新使用者';
$strings['You have successfully registered'] = '您已經成功註冊了!';
$strings['Continue'] = '繼續...';
$strings['Your profile has been successfully updated!'] = '您個個人資料已成功更新!';
$strings['Please return to My Control Panel'] = '請回到"我的控制台"';
$strings['Valid email address is required.'] = '- 您需要一個合法的電子郵件.';
$strings['First name is required.'] = '- "名"是必要的.';
$strings['Last name is required.'] = '- "姓"是必要的.';
$strings['Phone number is required.'] = '- "電話"是必要的.';
$strings['That email is taken already.'] = '- 這個電子郵件已經被使用了.<br />請換一個電子郵件後重試.';
$strings['Min 6 character password is required.'] = '- 至少 %s 個字元的密碼是必需的.';
$strings['Passwords do not match.'] = '- 密碼不符.';

$strings['Per page'] = '每頁:';
$strings['Page'] = '頁碼:';

$strings['Your reservation was successfully created'] = '您已經成功建立了下列預約';
$strings['Your reservation was successfully modified'] = '您已經成功修改了下列預約';
$strings['Your reservation was successfully deleted'] = '您已經成功刪除了下列預約';
$strings['Your blackout was successfully created'] = '您已經成功建立了下列管制';
$strings['Your blackout was successfully modified'] = '您已經成功修改了下列管制';
$strings['Your blackout was successfully deleted'] = '您已經成功刪除了下列管制';
$strings['for the follwing dates'] = ':';
$strings['Start time must be less than end time'] = '開始時間必須比結束時間早.';
$strings['Current start time is'] = '目前開始時間為:';
$strings['Current end time is'] = '目前結束時間為:';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = '預約長度不在資源的限制長度內.';
$strings['Your reservation is'] = '您的預約為:';
$strings['Minimum reservation length'] = '最小預約長度:';
$strings['Maximum reservation length'] = '最大預約長度:';
$strings['You do not have permission to use this resource.'] = '您沒有使用這個資源的許可.';
$strings['reserved or unavailable'] = '%s 到 %s 已經被預約或不可使用.';	// @since 1.1.0
$strings['Reservation created for'] = '預約已建立給 %s';
$strings['Reservation modified for'] = '預約已修改給 %s';
$strings['Reservation deleted for'] = '預約已刪除給 %s';
$strings['created'] = '建立時間';
$strings['modified'] = '修改時間';
$strings['deleted'] = '已刪除';
$strings['Reservation #'] = '預約編號';
$strings['Contact'] = '連絡';
$strings['Reservation created'] = '預約已建立';
$strings['Reservation modified'] = '預約已修改';
$strings['Reservation deleted'] = '預約已刪除';

$strings['Reservations by month'] = '每月的預約數';
$strings['Reservations by day of the week'] = '每週日子的預約數';
$strings['Reservations per month'] = '每個月的預約數';
$strings['Reservations per user'] = '依照使用者的預約數';
$strings['Reservations per resource'] = '依照儀器的預約數';
$strings['Reservations per start time'] = '依照開始時間的預約數';
$strings['Reservations per end time'] = '依照結束時間的預約數';
$strings['[All Reservations]'] = '[全部預約]';

$strings['Permissions Updated'] = '權限已更新';
$strings['Your permissions have been updated'] = '您的 %s 權限已被更新';
$strings['You now do not have permission to use any resources.'] = '您沒有任何資源的使用權限.';
$strings['You now have permission to use the following resources'] = '您有使用下列資源的權限:';
$strings['Please contact with any questions.'] = '如果有問題, 請連絡 %s.';
$strings['Password Reset'] = '重設密碼';

$strings['This will change your password to a new, randomly generated one.'] = '這個功能將會變更您的密碼為一個隨機的密碼.';
$strings['your new password will be set'] = '在輸入您的電子郵件並按下"變更密碼"後, 您的密碼將被重設並電郵給您.';
$strings['Change Password'] = '變更密碼';
$strings['Sorry, we could not find that user in the database.'] = '抱歉, 我們在資料庫中找不到這個使用者.';
$strings['Your New Password'] = '您的新 %s 密碼';
$strings['Your new passsword has been emailed to you.'] = '成功!<br />'
    			. '您的新密碼已經寄出.<br />'
    			. '請到您的信箱中取得新密碼, 然後使用這個新密碼 <a href="index.php">登入</a>'
    			. ' 並主動到 &quot;我的控制台&quot; 中按下 &quot;變更我的個人資料/密碼&quot;'
    			. ' 以變更密碼.';

$strings['You are not logged in!'] = '您尚未登入!';

$strings['Setup'] = '設定';
$strings['Please log into your database'] = '請登入您的資料庫';
$strings['Enter database root username'] = '輸入資料庫管理員名稱:';
$strings['Enter database root password'] = '輸入資料庫管理員密碼:';
$strings['Login to database'] = '登入資料庫';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '您 <b>不</b> 需要管理員帳號. 任何可以建立資料表的資料庫使用者都是可接受的.';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = '這將會設定所有 phpScheduleIt 所需要的資料庫與資料表.';
$strings['It also populates any required tables.'] = '同時也會在資料表中填入必需的資料.';
$strings['Warning: THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = '警告: 這將會刪除所有 phpScheduleIt 的資料庫!';
$strings['Not a valid database type in the config.php file.'] = 'config.php 之中沒有合法的資料庫名稱.';
$strings['Database user password is not set in the config.php file.'] = '資料庫使用者名稱與密碼未設定於 config.php 之中.';
$strings['Database name not set in the config.php file.'] = '資料庫名稱未設定於 config.php 之中.';
$strings['Successfully connected as'] = '成功的連結為';
$strings['Create tables'] = '建立資料表 &gt;';
$strings['There were errors during the install.'] = '安裝過程中發生錯誤. 如果是次要的錯誤, phpScheduleIt 可能還是可以正常運作.<br/><br/>'
	. '請到<a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a> 的討論板張貼您的問題.';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '您已經成功的完成了 phpScheduleIt 的設定. 您可以開始使用了.';
$strings['Thank you for using phpScheduleIt'] = '請確定您完全刪除 \'install\' 目錄.'
	. ' 因為這個目錄包含了資料庫密碼與其他重要資料, 所以這個動作非常重要.'
	. ' 如果您沒有刪除, 您等於開了大門讓其他人侵入您的資料庫!'
	. '<br /><br />'
	. '謝謝您使用 phpScheduleIt!';
$strings['There is no way to undo this action'] = '這個動作將無法復原!';
$strings['Click to proceed'] = '按下這裡繼續';
$strings['Please delete this file.'] = '請刪除這個檔案.';
$strings['Successful update'] = '更新成功';
$strings['Patch completed successfully'] = '修補已成功';

// @since 1.0.0 RC1
$strings['If no value is specified, the default password set in the config file will be used.'] = '如果沒有指定數值, 設定檔中的預設密碼將被使用.';
$strings['Notify user that password has been changed?'] = '是否通知使用者密碼變更?';

// @since 1.1.0
$strings['This system requires that you have an email address.'] = '您必須有電子郵件才能使用這個系統.';
$strings['Invalid User Name/Password.'] = '錯誤的使用者名稱/密碼.';
$strings['Pending User Reservations'] = '等待同意的使用者預約';
$strings['Approve'] = '同意';
$strings['Approve this reservation'] = '同意這個預約';
$strings['Approve Reservations'] ='同意預約';

$strings['Announcement'] = '公告';
$strings['Number'] = '編號';
$strings['Add Announcement'] = '新增公告';
$strings['Edit Announcement'] = '編輯公告';
$strings['All Announcements'] = '所有公告';
$strings['Delete Announcements'] = '刪除公告';
$strings['Use start date/time?'] = '使用開始日期/時間';
$strings['Use end date/time?'] = '使用結束日期/時間';
$strings['Announcement text is required.'] = '公告內容是必需的.';
$strings['Announcement number is required.'] = '公告編號是必需的.';

$strings['Pending Approval'] = '等待同意';
$strings['My reservation is approved'] = '我的預約已被同意';
$strings['This reservation must be approved by the administrator.'] = '這個預約需要管理員的同意.';
$strings['Approval Required'] = '需要同意';
$strings['No reservations requiring approval'] = '沒有需要同意的預約';
$strings['Your reservation was successfully approved'] = '您的預約已被同意';
$strings['Reservation approved for'] = '%s 的預約同意';
$strings['approved'] = '已同意';
$strings['Reservation approved'] = '預約已被同意';

$strings['Valid username is required'] = '需要合法的使用者名稱';
$strings['That logon name is taken already.'] = '這的登入名稱已被使用.';
$strings['this will be your login'] = '(這將成為您的登入名稱)';
$strings['Logon name'] = '登入名稱';
$strings['Your logon name is'] = '您的登入名稱為 %s';

$strings['Start'] = '開始';
$strings['End'] = '結束';
$strings['Start date must be less than or equal to end date'] = '開始時間必須比結束時間早';
$strings['That starting date has already passed'] = '這個開始時間已經過去了';
$strings['Basic'] = '基本';
$strings['Participants'] = '參與人員';
$strings['Close'] = '關閉';
$strings['Start Date'] = '開始時間';
$strings['End Date'] = '結束時間';
$strings['Minimum'] = '最小';
$strings['Maximum'] = '最大';
$strings['Allow Multiple Day Reservations'] = '允許多天的預約';
$strings['Invited Users'] = '邀請的使用者';
$strings['Invite Users'] = '邀請使用者';
$strings['Remove Participants'] = '移除參與人員';
$strings['Reservation Invitation'] = '預約邀請';
$strings['Manage Invites'] = '管理邀請';
$strings['No invite was selected'] = '沒有選擇邀請';
$strings['reservation accepted'] = '%s 接受了您的邀請在 %s ';
$strings['reservation declined'] = '%s 拒絕了您的邀請在 %s ';
$strings['Login to manage all of your invitiations'] = '登入已管理您的邀請';
$strings['Reservation Participation Change'] = '參與邀請變更';
$strings['My Invitations'] = '我的邀請';
$strings['Accept'] = '接受';
$strings['Decline'] = '拒絕';
$strings['Accept or decline this reservation'] = '接受或拒絕邀請';
$strings['My Reservation Participation'] = '我的參與邀請';
$strings['End Participation'] = '結束參與';
$strings['Owner'] = '擁有人';
$strings['Particpating Users'] = '參與的使用者';
$strings['No advanced options available'] = '沒有進階的功能';
$strings['Confirm reservation participation'] = '確認預約邀請';
$strings['Confirm'] = '確認';
$strings['Do for all reservations in the group?'] = '是否對這個群組中的全部預約?';

$strings['My Calendar'] = '我的日曆';
$strings['View My Calendar'] = '檢視我的日曆';
$strings['Participant'] = '參與人員';
$strings['Recurring'] = '循環';
$strings['Multiple Day'] = '多天';
$strings['[today]'] = '[今天]';
$strings['Day View'] = '日報表';
$strings['Week View'] = '週報表';
$strings['Month View'] = '月報表';
$strings['Resource Calendar'] = '資源日曆';
$strings['View Resource Calendar'] = 'Schedule Calendar';	// @since 1.2.0
$strings['Signup View'] = '登記報表';

$strings['Select User'] = '選擇使用者';
$strings['Change'] = '變更';

$strings['Update'] = '更新';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt 更新只提供給 1.0.0 之後的版本';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt 已經是最新的';
$strings['Migrating reservations'] = '合併預約';

$strings['Admin'] = '管理';
$strings['Manage Announcements'] = '管理公告';
$strings['There are no announcements'] = '沒有公告';
// end since 1.1.0

// @since 1.2.0
$strings['Maximum Participant Capacity'] = 'Maximum Participant Capacity';
$strings['Leave blank for unlimited'] = 'Leave blank for unlimited';
$strings['Maximum of participants'] = 'This resource has a maximum capacity of %s participants';
$strings['That reservation is at full capacity.'] = 'That reservation is at full capacity.';
$strings['Allow registered users to join?'] = 'Allow registered users to join?';
$strings['Allow non-registered users to join?'] = 'Allow non-registered users to join?';
$strings['Join'] = 'Join';
$strings['My Participation Options'] = 'My Participation Options';
$strings['Join Reservation'] = 'Join Reservation';
$strings['Join All Recurring'] = 'Join All Recurring';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = 'You are not participating on the following reservation dates because they are at full capacity.';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = 'You are already invited to this reservation. Please follow participation instructions previously sent to your email.';
$strings['Additional Tools'] = 'Additional Tools';
$strings['Create User'] = 'Create User';
$strings['Check Availability'] = 'Check Availability';
$strings['Manage Additional Resources'] = 'Manage Additional Resources';
$strings['All Additional Resources'] = 'All Additional Resources';
$strings['Number Available'] = 'Number Available';
$strings['Unlimited'] = 'Unlimited';
$strings['Add Additional Resource'] = 'Add Additional Resource';
$strings['Edit Additional Resource'] = 'Edit Additional Resource';
$strings['Checking'] = 'Checking';
$strings['You did not select anything to delete.'] = 'You did not select anything to delete.';
$strings['Added Resources'] = 'Added Resources';
$strings['Additional resource is reserved'] = 'The additional resource %s only has %s available at a time';
$strings['All Groups'] = 'All Groups';
$strings['Group Name'] = 'Group Name';
$strings['Delete Groups'] = 'Delete Groups';
$strings['Manage Groups'] = 'Manage Groups';
$strings['None'] = 'None';
$strings['Group name is required.'] = 'Group name is required.';
$strings['Groups'] = 'Groups';
$strings['Current Groups'] = 'Current Groups';
$strings['Group Administration'] = 'Group Administration';
$strings['Reminder Subject'] = 'Reservation reminder- %s, %s %s';
$strings['Reminder'] = 'Reminder';
$strings['before reservation'] = 'before reservation';
$strings['My Participation'] = 'My Participation';
$strings['My Past Participation'] = 'My Past Participation';
$strings['Timezone'] = 'Timezone';
$strings['Export'] = 'Export';
$strings['Select reservations to export'] = 'Select reservations to export';
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
				. "您成功的註冊了下列資料:\r\n"
				. "登入: %s\r\n"
				. "姓名: %s %s \r\n"
				. "電話: %s \r\n"
				. "機構: %s \r\n"
				. "職稱: %s \r\n\r\n"
				. "慶從下面的位址登入系統:\r\n"
				. "%s \r\n\r\n"
				. "您可以在\"我的控制台\"中找到編輯您個人資料的連結.\r\n\r\n"
				. "如果您有關於資源或預約的問題, 請連絡 %s";

// Email message the admin gets after a new user registers
$email['register_admin'] = "管裡員,\r\n\r\n"
					. "新使用者用下列的資料註冊了新帳號:\r\n"
					. "電子郵件: %s \r\n"
					. "姓名: %s %s \r\n"
					. "電話: %s \r\n"
					. "機構: %s \r\n"
					. "職稱: %s \r\n\r\n";

// First part of the email that a user gets after they create/modify/delete a reservation
// 'reservation_activity_1' through 'reservation_activity_6' are all part of one email message
//  that needs to be assembled depending on different options.  Please translate all of them.
// @since 1.1.0
$email['reservation_activity_1'] = "%s,\r\n<br />"
			. "您已經成功的 %s 了預約, 編號 #%s.\r\n\r\n<br/><br/>"
			. "當連絡管裡員時, 請使用這個預約編號.\r\n\r\n<br/><br/>"
			. "在 %s %s 到 %s %s 之間的 %s 預約,"
			. " 位置在 %s 已經被 %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "這個預約將在重複:\r\n<br/>";
$email['reservation_activity_3'] = "在這個群組中, 所有的循環預約也將 %s.\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "下面是這個預約的摘要:\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "如果有錯誤, 請使用 %s 連絡管理員,"
			. " 或致電 %s.\r\n\r\n<br/><br/>"
			. "您可以在任何時候登入 %s (<a href=\"%s\" target=\"_blank\">%s</a>.\r\n\r\n) 以修改這個預約."
			. "<br/><br/>";
$email['reservation_activity_6'] = "如果需要本系統的技術支援, 請連絡 <a href=\"mailto:%s\">%s</a>.\r\n\r\n<br/><br/>";
// @since 1.1.0
$email['reservation_activity_7'] = "%s,\r\n<br />"
			. "預約編號 #%s 已經被接受了.\r\n\r\n<br/><br/>"
			. "當連絡管裡員時, 請使用這個預約編號.\r\n\r\n<br/><br/>"
			. "在 %s %s 到 %s %s 之間的 %s 預約,"
			. " 位置在 %s 已經被 %s.\r\n\r\n<br/><br/>";

// Email that the user gets when the administrator changes their password
$email['password_reset'] = "您的 %s 密碼已經被管理員重設.\r\n\r\n"
			. "您的臨時密碼為:\r\n\r\n %s\r\n\r\n"
			. "請用這個臨時密碼(您可以使用複製與貼上來確保正確性)登入到 %s (%s),"
			. " 並且立刻到 '變更我的個人資料與密碼' 設定新的密碼.\r\n\r\n"
			. "如果有任何問題, 請連絡 %s.";

// Email that the user gets when they change their lost password using the 'Password Reset' form
$email['new_password'] = "%s,\r\n"
            . "您 %s 帳號的新密碼為:\r\n\r\n"
            . "%s\r\n\r\n"
            . "請使用這個密碼在 %s 登入"
            . "(您可以使用複製與貼上來確保正確性), "
			. " 並且立刻到 '變更我的個人資料與密碼' 設定新的密碼.\r\n\r\n"
			. "如果有任何問題, 請連絡 %s.";

// @since 1.1.0
// Email that is sent to invite users to a reservation
$email['reservation_invite'] = "%s 邀請您參加下面的預約:\r\n\r\n"
		. "資源: %s\r\n"
		. "開始日期: %s\r\n"
		. "開始時間: %s\r\n"
		. "結束日期: %s\r\n"
		. "結束時間: %s\r\n"
		. "摘要: %s\r\n"
		. "循環重複日期 (如果有設定): %s\r\n\r\n"
		. "如果要接受這個邀請, 請到 (如果有必要, 請複製並貼到瀏覽器中) %s\r\n"
		. "如果要拒絕這個邀請, 請到 (如果有必要, 請複製並貼到瀏覽器中) %s\r\n"
		. "如果只要接受部份的日期或管理您的邀請, 請登入 %s (%s)";

// @since 1.1.0
// Email that is sent when a user is removed from a reservation
$email['reservation_removal'] = "您已經移除了下面的邀請:\r\n\r\n"
		. "資源: %s\r\n"
		. "開始日期: %s\r\n"
		. "開始時間: %s\r\n"
		. "結束日期: %s\r\n"
		. "結束時間: %s\r\n"
		. "摘要: %s\r\n"
		. "循環重複日期 (如果有設定): %s\r\n\r\n"

// @since 1.2.0
// Email body that is sent for reminders
$email['Reminder Body'] = "Your reservation for %s from %s %s to %s %s is approaching.";
?>