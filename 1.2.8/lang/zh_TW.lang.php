<?php
/**
 * Simplified Chinese 繁體中文 (zh_TW) translation file.
 * @translator Xun Yan
 */

/* Do not modify this section */

global $strings;
global $email;
global $dates;
global $charset;
global $letters;
global $days_full;
global $days_abbr;
global $days_two;
global $days_letter;
global $months_full;
global $months_abbr;
global $days_letter;
/******************************/

$charset = 'utf-8';

/***
  DAY NAMES
  All of these arrays MUST start with Sunday as the first element
  and go through the seven day week，ending on Saturday
 ***/

$days_full = array('周日', '週一', '週二', '週三', '週四', '週五', '週六');

$days_abbr = array('周日', '週一', '週二', '週三', '週四', '週五', '週六');

$days_two  = array('日', '一', '二', '三', '四', '五', '六');

$days_letter = array('日', '一', '二', '三', '四', '五', '六');

/***
  MONTH NAMES
  All of these arrays MUST start with January as the first element
  and go through the twelve months of the year, ending on December
 ***/

$months_full = array ('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月') ;

$months_abbr = array ('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月') ;

$letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

/***
  DATE FORMATTING
  All of the date formatting must use the PHP strftime () syntax
  You can include any text/HTML formatting in the translation
 ***/

$dates['general_date'] = '%Y/%m/%d';

$dates['general_datetime'] = '%Y/%m/%d @';

$dates['res_check'] = '%A %Y/%m/%d';

$dates['schedule_daily'] = '%A<br/>%Y/%m/%d';

$dates['header'] = '%Y年%m月%d日，%A';

$dates['jumpbox'] = '%Y%m%d';

/***
  STRING TRANSLATIONS
  All of these strings should be translated from the English value (right side of the equals sign) to the new language.
  - Please keep the keys (between the [] brackets) as they are.  The keys will not always be the same as the value.
  - Please keep the sprintf formatting (%s) placeholders where they are unless you are sure it needs to be moved.
  - Please keep the HTML and punctuation as-is unless you know that you want to change it.
 ***/
$strings['hours'] = '小時';
$strings['minutes'] = '分鐘';

$strings['mm'] = '月';

$strings['dd'] = '日';

$strings['yyyy'] = '年';
$strings['am'] = '上午';
$strings['pm'] = '下午';

$strings['Administrator'] = '系統管理員';
$strings['Welcome Back'] = '歡迎，%s';
$strings['Log Out'] = '退出';
$strings['My Control Panel'] = '我的控制臺';
$strings['Help'] = '説明';
$strings['Manage Schedules'] = '日程管理';
$strings['Manage Users'] ='用戶管理';
$strings['Manage Resources'] ='資源管理';
$strings['Manage User Training'] ='用戶培訓管理';
$strings['Manage Reservations'] ='預訂管理';
$strings['Email Users'] ='電郵用戶';
$strings['Export Database Data'] = '導出資料庫內容';
$strings['Reset Password'] = '默認密碼';
$strings['System Administration'] = '系統管理';
$strings['Successful update'] = '更新成功';
$strings['Update failed!'] = '更新失敗！';
$strings['Manage Blackout Times'] = '管制時間';
$strings['Forgot Password'] = '忘記密碼';
$strings['Manage My Email Contacts'] = '管理我的郵件聯繫人';
$strings['Choose Date'] = '選擇日期';
$strings['Modify My Profile'] = '變更個人資料';
$strings['Register'] = '註冊';
$strings['Processing Blackout'] = '管制處理中';
$strings['Processing Reservation'] = '預訂處理中';
$strings['Online Scheduler [Read-only Mode]'] = '資源預訂系統 [唯讀模式]';
$strings['Online Scheduler'] = '資源預訂系統';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt統計資料';
$strings['User Info'] = '用戶資訊：';

$strings['Could not determine tool'] = '無法決定工具。請回到“我的控制臺”並稍候再試。';
$strings['This is only accessable to the administrator'] = '只有系統管理員可以使用這個功能';
$strings['Back to My Control Panel'] = '回到我的控制臺';
$strings['That schedule is not available.'] = '這個日程無效。';
$strings['You did not select any schedules to delete.'] = '您沒有選擇要刪除的日程。';
$strings['You did not select any members to delete.'] = '您沒有選擇要刪除的成員。';
$strings['You did not select any resources to delete.'] = '您沒有選擇要刪除的資源。';
$strings['Schedule title is required.'] = '日程是必需的。';
$strings['Invalid start/end times'] = '開始或結束時間無效';
$strings['View days is required'] = '查看日期是必需的';
$strings['Day offset is required'] = '日期偏移是必需的';
$strings['Admin email is required'] = '管理郵件地址是必需的';
$strings['Resource name is required.'] = '資源的名稱是必需的。';
$strings['Valid schedule must be selected'] = '必須選擇有效的日程';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '最短預訂期間必須小於等於最長預訂期間。';
$strings['Your request was processed successfully.'] = '您的請求已經成功的被處理了。';
$strings['Go back to system administration'] = '回到系統管理';
$strings['Or wait to be automatically redirected there.'] = '或稍候自動轉到那裏。';
$strings['There were problems processing your request.'] = '處理您的請求時發生了問題。';
$strings['Please go back and correct any errors.'] = '請回去更正錯誤。';
$strings['Login to view details and place reservations'] = '登錄以查看詳細資料和預訂';
$strings['Memberid is not available.'] = '用戶名稱：%s不存在。';

$strings['Schedule Title'] = '日程';
$strings['Start Time'] = '開始時間';
$strings['End Time'] = '結束時間';
$strings['Time Span'] = '時間跨度';
$strings['Weekday Start'] = '周起始日';
$strings['Admin Email'] = '管理者郵件';

$strings['Default'] = '預設值';
$strings['Reset'] = '默認';
$strings['Edit'] = '編輯';
$strings['Delete'] = '刪除';
$strings['Cancel'] = '取消';
$strings['View'] = '查看';
$strings['Modify'] = '修改';
$strings['Save'] = '儲存';
$strings['Back'] = '上一個';
$strings['Next'] = '下一個';
$strings['Close Window'] = '關閉窗口';
$strings['Search'] = '查找';
$strings['Clear'] = '清除';

$strings['Days to Show'] = '顯示的日期';
$strings['Reservation Offset'] = '預訂偏移';
$strings['Hidden'] = '隱藏';
$strings['Show Summary'] = '顯示摘要';
$strings['Add Schedule'] = '增加日程';
$strings['Edit Schedule'] = '編輯日程';
$strings['No'] = '否';
$strings['Yes'] = '是';
$strings['Name'] = '用戶名稱';
$strings['First Name'] = '中文名';
$strings['Last Name'] = '中文拼音名';
$strings['Resource Name'] = '資源名稱';
$strings['Email'] = '郵件';
$strings['Institution'] = '部門';
$strings['Phone'] = '電話';
$strings['Password'] = '密碼';
$strings['Permissions'] = '許可權';
$strings['View information about'] = '查看關於%s %s的資訊';
$strings['Send email to'] = '發郵件給%s %s';
$strings['Reset password for'] = '默認%s %s的密碼';
$strings['Edit permissions for'] = '編輯%s %s的許可權';
$strings['Position'] = '職位';
$strings['Password (6 char min)'] = '密碼（至少%s個字元）';
$strings['Re-Enter Password'] = '再次輸入密碼';

$strings['Sort by descending last name'] = '根據"中文拼音名"降冪排列';
$strings['Sort by descending email address'] = '根據"郵件"降冪排列';
$strings['Sort by descending institution'] = '根據"部門"降冪排列';
$strings['Sort by ascending last name'] = '根據"中文拼音名"昇冪排列';
$strings['Sort by ascending email address'] = '根據"郵件"昇冪排列';
$strings['Sort by ascending institution'] = '根據"部門"昇冪排列';
$strings['Sort by descending resource name'] = '根據"資源的名稱"降冪排列';
$strings['Sort by descending location'] = '根據"位置"降冪排列';
$strings['Sort by descending schedule title'] = '根據"日程"降冪排列';
$strings['Sort by ascending resource name'] = '根據"資源的名稱"昇冪排列';
$strings['Sort by ascending location'] = '根據"位置"昇冪排列';
$strings['Sort by ascending schedule title'] = '根據"日程"昇冪排列';
$strings['Sort by descending date'] = '根據"日期"降冪排列';
$strings['Sort by descending user name'] = '根據"用戶名稱"降冪排列';
$strings['Sort by descending start time'] = '根據"開始時間"降冪排列';
$strings['Sort by descending end time'] = '根據"結束時間"降冪排列';
$strings['Sort by ascending date'] = '根據"日期"昇冪排列';
$strings['Sort by ascending user name'] = '根據"用戶名稱"昇冪排列';
$strings['Sort by ascending start time'] = '根據"開始時間"昇冪排列';
$strings['Sort by ascending end time'] = '根據"結束時間"昇冪排列';
$strings['Sort by descending created time'] = '根據"創建時間"降冪排列';
$strings['Sort by ascending created time'] = '根據"創建時間"昇冪排列';
$strings['Sort by descending last modified time'] = '根據"最後修改時間"降冪排列';
$strings['Sort by ascending last modified time'] = '根據"最後修改時間"昇冪排列';

$strings['Search Users'] = '查找用戶';
$strings['Location'] = '位置';
$strings['Schedule'] = '日程';
$strings['Phone'] = '電話';
$strings['Notes'] = '備註';
$strings['Status'] = '狀態';
$strings['All Schedules'] = '全部日程';
$strings['All Resources'] = '全部資源';
$strings['All Users'] = '全部用戶';

$strings['Edit data for'] = '編輯%s的資料';
$strings['Active'] = '可用';
$strings['Inactive'] = '不可用';
$strings['Toggle this resource active/inactive'] = '切換這個資源的使用狀態';
$strings['Minimum Reservation Time'] = '最短預訂時限';
$strings['Maximum Reservation Time'] = '最長預訂時限';
$strings['Auto-assign permission'] = '自動給予許可權';
$strings['Add Resource'] = '增加資源';
$strings['Edit Resource'] = '保存';
$strings['Allowed'] = '允許';
$strings['Notify user'] = '通知用戶';
$strings['User Reservations'] = '用戶預訂';
$strings['Date'] = '日期';
$strings['User'] = '用戶';
$strings['Email Users'] = '電郵用戶';
$strings['Subject'] = '標題';
$strings['Message'] = '消息';
$strings['Please select users'] = '請選擇用戶';
$strings['Send Email'] = '發送郵件';
$strings['problem sending email'] = '抱歉，發送郵件時發生了問題，請稍候再試。';
$strings['The email sent successfully.'] = '郵件已成功寄出。';
$strings['do not refresh page'] = '請<u>不要</u> 刷新本頁。這樣會再一次的寄出郵件。';
$strings['Return to email management'] = '回到電郵管理';
$strings['Please select which tables and fields to export'] = '請選擇導出的表格：';
$strings['all fields'] = '－全部表格－';
$strings['HTML'] = '網頁';
$strings['Plain text'] = '純文本';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '導出資料';
$strings['Reset Password for'] = '默認%s的密碼';
$strings['Please edit your profile'] = '請編輯您的個人資料';
$strings['Please register'] = '請註冊';
$strings['Keep me logged in'] = '保持登錄狀態<br/>（需要cookies）';
$strings['Edit Profile'] = '編輯個人資料';
$strings['Register'] = '註冊';
$strings['Please Log In'] = '請登錄';
$strings['Email address'] = '郵件';
$strings['Password'] = '密碼';
$strings['First time user'] = '第一次用戶';
$strings['Click here to register'] = '按這裏註冊';
$strings['Register for phpScheduleIt'] = '註冊phpScheduleIt';
$strings['Log In'] = '登錄';
$strings['View Schedule'] = '日程';
$strings['View a read-only version of the schedule'] = '查看唯讀日程表';
$strings['I Forgot My Password'] = '忘記密碼';
$strings['Retreive lost password'] = '找回密碼';
$strings['Get online help'] = '線上幫助';
$strings['Language'] = '語言';
$strings['(Default)'] = '（默認）';

$strings['My Announcements'] = '我的公告';
$strings['My Reservations'] = '我的預訂';
$strings['My Permissions'] = '我的許可權';
$strings['My Quick Links'] = '我的快速連接';
$strings['Announcements as of'] = '%s的公告';
$strings['There are no announcements.'] = '沒有公告事項。';
$strings['Resource'] = '資源';
$strings['Created'] = '創建時間';
$strings['Last Modified'] = '最後修改時間';
$strings['View this reservation'] = '查看這個預訂';
$strings['Modify this reservation'] = '修改這個預訂';
$strings['Delete this reservation'] = '刪除這個預訂';
$strings['Bookings'] = '預訂';
$strings['Change My Profile Information/Password'] = '變更個人資料';
$strings['Manage My Email Preferences'] = '郵件設定';
$strings['Mass Email Users'] = '群發郵件';
$strings['Search Scheduled Resource Usage'] = '查找預訂';
$strings['Show Resources'] = '顯示資源';
$strings['Export Database Content'] = '導出資料庫內容';
$strings['View System Stats'] = '查看系統狀態';
$strings['Email Administrator'] = '郵件管理員';

$strings['Email me when'] = '通知我：';
$strings['I place a reservation'] = '建立預訂';
$strings['My reservation is modified'] = '預訂已被修改';
$strings['My reservation is deleted'] = '預訂已被刪除';
$strings['I prefer'] = '我選擇：';
$strings['Your email preferences were successfully saved'] = '您的郵件設定已被儲存！';
$strings['Return to My Control Panel'] = '回到我的控制臺';

$strings['Please select the starting and ending times'] = '請選擇開始與結束時間：';
$strings['Please change the starting and ending times'] = '請變更開始與結束時間：';
$strings['Reserved time'] = '預訂的時間：';
$strings['Minimum Reservation Length'] = '最短預訂長度：';
$strings['Maximum Reservation Length'] = '最長預訂長度：';
$strings['Reserved for'] = '預訂給：';
$strings['Will be reserved for'] = '將被預訂給：';
$strings['N/A'] = '無';
$strings['Update all recurring records in group'] = '是否更新群組中的全部迴圈記錄？';
$strings['Delete?'] = '是否刪除？';
$strings['Never'] = '－ 無 －';
$strings['Days'] = '天';
$strings['Weeks'] = '周';
$strings['Months (date)'] = '月（日期）';
$strings['Months (day)'] = '月（星期幾）';
$strings['First Days'] = '第一天';
$strings['Second Days'] = '第二天';
$strings['Third Days'] = '第三天';
$strings['Fourth Days'] = '第四天';
$strings['Last Days'] = '最後一天';
$strings['Repeat every'] = '重複頻率：';
$strings['Repeat on'] = '重複在：';
$strings['Repeat until date'] = '重複直到：';
$strings['Choose Date'] = '選擇日期';
$strings['Summary'] = '摘要';

$strings['View schedule'] = '日程：';
$strings['My Reservations'] = '我的預訂';
$strings['My Past Reservations'] = '我之前的預訂';
$strings['Other Reservations'] = '其他預訂';
$strings['Other Past Reservations'] = '其他過去的預訂';
$strings['Blacked Out Time'] = '管制的時間';
$strings['Set blackout times'] = '設定%s的管制於%s';
$strings['Reserve on'] = '預訂了%s於%s';
$strings['Prev Week'] = '«上周';
$strings['Prev Month'] = '«上月';
$strings['Jump 1 week back'] = '跳過一周';
$strings['Prev days'] = '« 之前%d天';
$strings['Previous days'] = '«之前%d天';
$strings['This Week'] = '本周';
$strings['Jump to this week'] = '跳到本周';
$strings['Next days'] = '之後%d天»';
$strings['Next Week'] = '下周»';
$strings['Next Month'] = '下月»';
$strings['Jump To Date'] = '跳到日期';
$strings['View Monthly Calendar'] = '查看月曆';
$strings['Open up a navigational calendar'] = '開啟一個可以流覽的日曆';

$strings['View stats for schedule'] = '查看預訂的狀態：';
$strings['At A Glance'] = '一覽表';
$strings['Total Users'] = '全部用戶數：';
$strings['Total Resources'] = '全部資源數：';
$strings['Total Reservations'] = '全部預訂數：';
$strings['Max Reservation'] = '最長預訂時間：';
$strings['Min Reservation'] = '最短預訂時間：';
$strings['Avg Reservation'] = '平均預訂時間：';
$strings['Most Active Resource'] = '最活躍的資源：';
$strings['Most Active User'] = '最活躍的用戶：';
$strings['System Stats'] = '系統狀態';
$strings['phpScheduleIt version'] = 'phpScheduleIt版本：';
$strings['Database backend'] = '後端資料庫：';
$strings['Database name'] = '資料庫的名稱：';
$strings['PHP version'] = 'PHP版本：';
$strings['Server OS'] = '作業系統：';
$strings['Server name'] = '主機名：';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt根目錄：';
$strings['Using permissions'] = '使用權限：';
$strings['Using logging'] = '使用記錄：';
$strings['Log file'] = '記錄檔：';
$strings['Admin email address'] = '管理者郵件：';
$strings['Tech email address'] = '技術支援郵件：';
$strings['CC email addresses'] = '郵件副本：';
$strings['Reservation start time'] = '預訂起始時間：';
$strings['Reservation end time'] = '預訂結束時間：';
$strings['Days shown at a time'] = '一次顯示天數：';
$strings['Reservations'] = '預訂';
$strings['Return to top'] = '回到頂端';
$strings['for'] = '-';

$strings['Select Search Criteria'] = '選擇查找條件';
$strings['Schedules'] = '日程：';
$strings['All Schedules'] = '全部日程';
$strings['Hold CTRL to select multiple'] = '按下Ctrl以多項選擇';
$strings['Users'] = '用戶：';
$strings['All Users'] = '全部用戶';
$strings['Resources'] = '資源';
$strings['All Resources'] = '全部資源';
$strings['Starting Date'] = '開始日期：';
$strings['Ending Date'] = '結束日期：';
$strings['Starting Time'] = '開始時間：';
$strings['Ending Time'] = '結束時間：';
$strings['Output Type'] = '導出類型：';
$strings['Manage'] = '管理';
$strings['Total Time'] = '全部時間';
$strings['Total hours'] = '全部小時數：';
$strings['% of total resource time'] = '％全部資源時間';
$strings['View these results as'] = '查看這些結果為：';
$strings['Edit this reservation'] = '編輯這個預訂';
$strings['Search Results'] = '查找結果';
$strings['Search Resource Usage'] = '查找資源用戶';
$strings['Search Results found'] = '查找結果：找到%d個預訂';
$strings['Try a different search'] = '嘗試別的查找條件';
$strings['Search Run On'] = '查找執行於：';
$strings['Member ID'] = '會員編號';
$strings['Previous User'] = '&laquo;上一個用戶';
$strings['Next User'] = '下一個用戶 &raquo;';

$strings['No results'] = '沒有結果';
$strings['That record could not be found.'] = '找不到這個記錄。';
$strings['This blackout is not recurring.'] = '這個管制沒有迴圈記錄。';
$strings['This reservation is not recurring.'] = '這個預訂沒有迴圈記錄。';
$strings['There are no records in the table.'] = '在%s表中沒有記錄。';
$strings['You do not have any reservations scheduled.'] = '您沒有任何預訂。';
$strings['You do not have permission to use any resources.'] = '您沒有許可權使用任何資源。';
$strings['No resources in the database.'] = '資料庫中沒有資源。';
$strings['There was an error executing your query'] = '您的查詢有錯誤：';

$strings['That cookie seems to be invalid'] = '這個cookie似乎不合法';
$strings['We could not find that logon in our database.'] = '在資料庫中找不到該名稱。';
$strings['That password did not match the one in our database.'] = '密碼與資料庫的記錄不符。';
$strings['You can try'] = '<br/>您可以嘗試：<br/>註冊一個郵件<br/>或者：<br/>嘗試再一次登錄。';
$strings['A new user has been added'] = '增加了一個新用戶';
$strings['You have successfully registered'] = '您已經成功註冊了！';
$strings['Continue'] = '繼續...';
$strings['Your profile has been successfully updated!'] = '您的個人資料已更新成功！';
$strings['Please return to My Control Panel'] = '請回到"我的控制臺"';
$strings['Valid email address is required.'] = '- 您需要一個有效的郵件。';
$strings['First name is required.'] = '- “中文名”是必需的。';
$strings['Last name is required.'] = '- "中文拼音名"是必需的。';
$strings['Phone number is required.'] = '- "電話"是必需的。';
$strings['That email is taken already.'] = '- 這個郵件已經被使用了。<br/>請換一個郵件再試。';
$strings['Min 6 character password is required.'] = '- 至少 %s個字元的密碼是必需的。';
$strings['Passwords do not match.'] = '- 密碼不符。';

$strings['Per page'] = '每頁：';
$strings['Page'] = '頁碼：';

$strings['Your reservation was successfully created'] = '您已經成功建立了下列預訂';
$strings['Your reservation was successfully modified'] = '您已經成功修改了下列預訂';
$strings['Your reservation was successfully deleted'] = '您已經成功刪除了下列預訂';
$strings['Your blackout was successfully created'] = '您已經成功建立了下列管制';
$strings['Your blackout was successfully modified'] = '您已經成功修改了下列管制';
$strings['Your blackout was successfully deleted'] = '您已經成功刪除了下列管制';
$strings['for the follwing dates'] = '為以下日期：';
$strings['Start time must be less than end time'] = '開始時間必須比結束時間早。';
$strings['Current start time is'] = '目前開始時間為：';
$strings['Current end time is'] = '目前結束時間為：';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = '預訂期間不在資源的限制長度內。';
$strings['Your reservation is'] = '您的預訂為：';
$strings['Minimum reservation length'] = '最短預訂長度：';
$strings['Maximum reservation length'] = '最長預訂長度：';
$strings['You do not have permission to use this resource.'] = '您沒有使用這個資源的許可。';
$strings['reserved or unavailable'] = '%s到%s已被預訂或不可使用。';
$strings['Reservation created for'] = '%s的預訂已建立';
$strings['Reservation modified for'] = '%s的預訂已修改';
$strings['Reservation deleted for'] = '%s的預訂已刪除';
$strings['created'] = '創建了';
$strings['modified'] = '修改了';
$strings['deleted'] = '刪除了';
$strings['Reservation #'] = '預訂編號';
$strings['Contact'] = '資源電話';
$strings['Reservation created'] = '預訂已建立';
$strings['Reservation modified'] = '預訂已修改';
$strings['Reservation deleted'] = '預訂已刪除';

$strings['Reservations by month'] = '按月的預訂數';
$strings['Reservations by day of the week'] = '按周日的預訂數';
$strings['Reservations per month'] = '每個月的預訂數';
$strings['Reservations per user'] = '按照用戶的預訂數';
$strings['Reservations per resource'] = '按照資源的預訂數';
$strings['Reservations per start time'] = '按照開始時間的預訂數';
$strings['Reservations per end time'] = '按照結束時間的預訂數';
$strings['[All Reservations]'] = '[全部預訂]';

$strings['Permissions Updated'] = '許可權已更新';
$strings['Your permissions have been updated'] = '您的%s許可權已被更新';
$strings['You now do not have permission to use any resources.'] = '您沒有任何資源的使用權限。';
$strings['You now have permission to use the following resources'] = '您有使用下列資源的許可權：';
$strings['Please contact with any questions.'] = '如果有問題，請聯絡%s。';
$strings['Password Reset'] = '重設密碼';

$strings['This will change your password to a new，randomly generated one.'] = '這個功能將會變更您的密碼為一個隨機的密碼。';
$strings['your new password will be set'] = '在輸入您的郵件並按下"變更密碼"後，您的密碼將被默認並電郵給您。';
$strings['Change Password'] = '變更密碼';
$strings['Sorry，we could not find that user in the database.'] = '抱歉，我們在資料庫中找不到這個用戶。';
$strings['Your New Password'] = '您的新%s密碼';
$strings['Your new passsword has been emailed to you.'] = '成功!<br/>'
. '您的新密碼已經寄出。<br/>'
. '請到您的信箱中取得新密碼，然後使用這個新密碼 <a href="index.php">登錄</a>'
. ' 並主動到”我的控制臺”中按下”變更我的個人資料/密碼”'
. ' 以變更密碼。';

$strings['You are not logged in!'] = '您尚未登錄！';

$strings['Setup'] = '設定';
$strings['Please log into your database'] = '請登錄您的資料庫';
$strings['Enter database root username'] = '輸入資料庫管理員名稱：';
$strings['Enter database root password'] = '輸入資料庫管理員密碼：';
$strings['Login to database'] = '登錄資料庫';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '您<b>不</b>需要管理員帳號。任何可以建立資料表的資料庫用戶都是被接受的。';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = '這將會設定所有phpScheduleIt所需要的資料庫與資料表。';
$strings['It also populates any required tables.'] = '小時也會在資料表中填入必需的資料。';
$strings['Warning：THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = '警告：這將會刪除所有phpScheduleIt的資料庫！';
$strings['Not a valid database type in the config.php file.'] = 'config.php 之中沒有有效的資料庫的名稱。';
$strings['Database user password is not set in the config.php file.'] = '資料庫用戶名稱與密碼未設定於config.php之中。';
$strings['Database name not set in the config.php file.'] = '資料庫的名稱未設定於 config.php之中。';
$strings['Successfully connected as'] = '成功的連接為';
$strings['Create tables'] = '建立資料表 &gt;';
$strings['There were errors during the install.'] = '安裝過程中發生錯誤. 如果是次要的錯誤，phpScheduleIt不能還是可以正常工作。<br/><br/>'
. '請到<a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>論壇張貼您的問題。';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '您已經成功的完成了phpScheduleIt的設定。您可以開始使用了。';
$strings['Thank you for using phpScheduleIt'] = '請確定您完全刪除 \'install\' 目錄.'
. ' 因為這個目錄包括了資料庫密碼與其他重要資料，所以這個動作非常重要.'
. ' 如果您沒有刪除，您等於開了大門讓其他人侵入您的資料庫！'
. '<br/><br/>'
. '歡迎您使用phpScheduleIt！';
$strings['There is no way to undo this action'] = '這個動作將無法復原！';
$strings['Click to proceed'] = '按這裏繼續';
$strings['Please delete this file.'] = '請刪除這個檔案。';
$strings['Successful update'] = '更新成功';
$strings['Patch completed successfully'] = '修補已成功';

$strings['If no value is specified，the default password set in the config file will be used.'] = '如果沒有指定數值，配置檔中的默認密碼將被使用。';
$strings['Notify user that password has been changed?'] = '是否通知用戶密碼變更？';

$strings['This system requires that you have an email address.'] = '系統要求你有一個郵件位址。';
$strings['Invalid User Name/Password.'] = '錯誤的用戶名稱/密碼。';
$strings['Pending User Reservations'] = '等待中的用戶預訂';
$strings['Approve'] = '批准';
$strings['Approve this reservation'] = '批准這個預訂';
$strings['Approve Reservations'] ='批准預訂';

$strings['Announcement'] = '公告';
$strings['Number'] = '編號';
$strings['Add Announcement'] = '新增公告';
$strings['Edit Announcement'] = '編輯公告';
$strings['All Announcements'] = '所有公告';
$strings['Delete Announcements'] = '刪除公告';
$strings['Use start date/time?'] = '使用開始日期/時間';
$strings['Use end date/time?'] = '使用結束日期/時間';
$strings['Announcement text is required.'] = '公告內容是必需的。';
$strings['Announcement number is required.'] = '公告編號是必需的。';

$strings['Pending Approval'] = '等待批准';
$strings['My reservation is approved'] = '我的預訂已被批准';
$strings['This reservation must be approved by the administrator.'] = '這個預訂需要管理員的批准。';
$strings['Approval Required'] = '需要批准';
$strings['No reservations requiring approval'] = '沒有預訂需要批准';
$strings['Your reservation was successfully approved'] = '您的預訂已被批准';
$strings['Reservation approved for'] = '%s的預訂批准';
$strings['approved'] = '已批准';
$strings['Reservation approved'] = '預訂已被批准';

$strings['Valid username is required'] = '需要有效的用戶名稱';
$strings['That logon name is taken already.'] = '登錄名已被使用。';
$strings['this will be your login'] = '（登錄名）';
$strings['Logon name'] = '登錄名';
$strings['Your logon name is'] = '您的登錄的名稱為%s';

$strings['Start'] = '開始';
$strings['End'] = '結束';
$strings['Start date must be less than or equal to end date'] = '開始日期必須比結束日期早';
$strings['That starting date has already passed'] = '這個開始日期已經過去了';
$strings['Basic'] = '基本情況';
$strings['Participants'] = '參與人員';
$strings['Close'] = '關閉';
$strings['Start Date'] = '開始日期';
$strings['End Date'] = '結束日期';
$strings['Minimum'] = '最短';
$strings['Maximum'] = '最長';
$strings['Allow Multiple Day Reservations'] = '允許多天的預訂';
$strings['Invited Users'] = '被邀請者';
$strings['Invite Users'] = '邀請者';
$strings['Remove Participants'] = '移除參與人員';
$strings['Reservation Invitation'] = '預訂邀請';
$strings['Manage Invites'] = '管理邀請';
$strings['No invite was selected'] = '沒有選擇邀請';
$strings['reservation accepted'] = '%s接受了您的邀請在%s';
$strings['reservation declined'] = '%s拒絕了您的邀請在%s';
$strings['Login to manage all of your invitations'] = '登錄以管理您的邀請';
$strings['Reservation Participation Change'] = '參與邀請變更';
$strings['My Invitations'] = '我的邀請';
$strings['Accept'] = '接受';
$strings['Decline'] = '拒絕';
$strings['Accept or decline this reservation'] = '接受或拒絕邀請';
$strings['My Reservation Participation'] = '我參與的邀請';
$strings['End Participation'] = '結束參與';
$strings['Owner'] = '發起人';
$strings['Particpating Users'] = '參與者';
$strings['No advanced options available'] = '沒有進階的功能';
$strings['Confirm reservation participation'] = '確認預訂邀請';
$strings['Confirm'] = '確認';
$strings['Do for all reservations in the group?'] = '是否在這個群組中做全部預訂？';

$strings['My Calendar'] = '我的日曆';
$strings['View My Calendar'] = '查看我的日曆';
$strings['Participant'] = '參與人員';
$strings['Recurring'] = '迴圈';
$strings['Multiple Day'] = '多天';
$strings['[today]'] = '[今天]';
$strings['Day View'] = '日報表';
$strings['Week View'] = '周報表';
$strings['Month View'] = '月報表';
$strings['Resource Calendar'] = '資源日曆';
$strings['View Resource Calendar'] = '查看資源日曆';
$strings['Signup View'] = '登記報表';

$strings['Select User'] = '選擇用戶';
$strings['Change'] = '變更';

$strings['Update'] = '更新';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt 更新只對1.0.0之後的版本有效';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt已經是最新的';
$strings['Migrating reservations'] = '合併預訂';

$strings['Admin'] = '管理';
$strings['Manage Announcements'] = '管理公告';
$strings['There are no announcements'] = '沒有公告';

$strings['Maximum Participant Capacity'] = '最多參與人數';
$strings['Leave blank for unlimited'] = '留空表示無限制';
$strings['Maximum of participants'] = '這個資源的最大參與人數為%s人';
$strings['That reservation is at full capacity.'] = '這個預訂已經滿了。';
$strings['Allow registered users to join?'] = '是否允許註冊的用戶參加？';
$strings['Allow non-registered users to join?'] = '是否允許未註冊的用戶參加？';
$strings['Join'] = '參加';
$strings['My Participation Options'] = '我參加的選項';
$strings['Join Reservation'] = '參加預訂';
$strings['Join All Recurring'] = '參加所有迴圈的預訂';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = '因為已經訂滿，您無法參加下列日期的預訂。';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = '您已經被邀請參加這個預訂. 請根據給您郵件中的說明參加這個預訂。';
$strings['Additional Tools'] = '另外的工具';
$strings['Create User'] = '建立用戶';
$strings['Check Availability'] = '檢查是否可用';
$strings['Manage Additional Resources'] = '管理另外的資源';
$strings['All Additional Resources'] = '所有另外的資源';
$strings['Number Available'] = '可用的數量';
$strings['Unlimited'] = '無限制';
$strings['Add Additional Resource'] = '增加另外的資源';
$strings['Edit Additional Resource'] = '編輯另外的資源';
$strings['Checking'] = '檢查中';
$strings['You did not select anything to delete.'] = '您沒有選擇要刪除的東西。';
$strings['Added Resources'] = '增加的資源';
$strings['Additional resource is reserved'] = '另外的資源%s預定有%s個可用';
$strings['All Groups'] = '全部群組';
$strings['Group Name'] = '群組名稱';
$strings['Delete Groups'] = '刪除群組';
$strings['Manage Groups'] = '管理群組';
$strings['None'] = '無';
$strings['Group name is required.'] = '群組名稱是必需的。';
$strings['Groups'] = '群組';
$strings['Current Groups'] = '目前群組';
$strings['Group Administration'] = '群組管理';
$strings['Reminder Subject'] = '預訂提醒－%s，%s %s';
$strings['Reminder'] = '提醒';
$strings['before reservation'] = '預訂前';
$strings['My Participation'] = '我參加的';
$strings['My Past Participation'] = '我過去參加的';
$strings['Timezone'] = '時區';
$strings['Export'] = '導出';
$strings['Select reservations to export'] = '選擇要導出的預訂';
$strings['Export Format'] = '導出格式';
$strings['This resource cannot be reserved less than x hours in advance'] = '這個資源不能在少於%s小時前預訂';
$strings['This resource cannot be reserved more than x hours in advance'] = '這個資源不能在多於%s小時前區預訂';
$strings['Minimum Booking Notice'] = '最短預訂時效';
$strings['Maximum Booking Notice'] = '最長預訂時效';
$strings['hours prior to the start time'] = '會議開始前...小時';
$strings['hours from the current time'] = '從現在起...小時內';
$strings['Contains'] = '包括';
$strings['Begins with'] = '開始為';
$strings['Minimum booking notice is required.'] = '最短預訂時效是必需的。';
$strings['Maximum booking notice is required.'] = '最長預訂時效是必需的。';
$strings['Manage Additional Resources'] = '管理設備';
$strings['Add Additional Resource'] = '增加設備';
$strings['Edit Additional Resource'] = '編輯設備';
$strings['Accessory Name'] = '設備的名稱';
$strings['Accessories'] = '設備';
$strings['All Accessories'] = '全部設備';
$strings['Added Accessories'] = '增加的設備';

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
  in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
 ***/

$email['register'] = "%s，%s\r\n"
		. "您成功的註冊了下列資訊：\r\n"
		. "登錄：%s\r\n"
		. "姓名：%s %s\r\n"
		. "電話：%s\r\n"
		. "部門：%s\r\n"
		. "名稱：%s\r\n\r\n"
		. "請從下面的鏈結登錄系統：\r\n"
		. "%s\r\n\r\n"
		. "您可以在\"我的控制臺\"中找到編輯您個人資料的鏈結。\r\n\r\n"
		. "如果您有關於資源預訂的問題，請聯絡%s";

$email['register_admin'] = "管裏員，\r\n\r\n"
		. "新用戶用下列的資料註冊了新帳號：\r\n"
		. "郵件：%s\r\n"
		. "姓名：%s %s\r\n"
		. "電話：%s\r\n"
		. "部門：%s\r\n"
		. "名稱：%s\r\n\r\n";

$email['reservation_activity_1'] = "%s，\r\n<br/>"
		. "您已經成功%s預訂，編號是%s。\r\n\r\n<br/><br/>"
		. "當聯絡管裏員時，請使用這個預訂編號。\r\n\r\n<br/><br/>"
		. "在%s %s到%s %s之間的%s，"
		. " 設備在 %s 已經被 %s。\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "這個預訂將在重複：\r\n<br/>";
$email['reservation_activity_3'] = "在這個群組中，所有的迴圈預訂也將%s。\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "下面是這個預訂的摘要：\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "如果有錯誤，請使用 %s 聯絡管理員，"
		. "FYI，該資源電話是：%s。\r\n\r\n<br/><br/>"
		. "您可以在任何時候登錄%s (<a href=\"%s\" target=\"_blank\">%s</a>。\r\n\r\n) 來修改這個預訂。"
		. "<br/><br/>";
$email['reservation_activity_6'] = "如果需要本系統的技術支援，請聯絡<a href=\"mailto:%s\">%s</a>。\r\n\r\n<br/><br/>";

$email['reservation_activity_7'] = "%s，\r\n<br/>"
		. "預訂編號%s已經被接受了。\r\n\r\n<br/><br/>"
		. "當聯絡管裏員時，請使用這個預訂編號。\r\n\r\n<br/><br/>"
		. "從%s %s到%s %s之間的%s預訂，"
		. " 設備在 %s 已經被 %s。\r\n\r\n<br/><br/>";

$email['password_reset'] = "您的%s密碼已經被管理員重設。\r\n\r\n"
		. "您的臨時密碼為：\r\n\r\n %s\r\n\r\n"
		. "請用這個臨時密碼 (您可以使用複製與粘貼來確認正確性) 登錄到%s（%s），"
		. "並且立刻到‘變更我的個人資料與密碼’設定新的密碼。\r\n\r\n"
		. "如果有任何問題，請聯絡%s。";

$email['new_password'] = "%s，\r\n"
		. "您 %s 帳號的新密碼為：\r\n\r\n"
		. "%s\r\n\r\n"
		. "請使用這個密碼在%s登錄"
		. "(您可以使用複製與粘貼來確認正確性)，"
		. "並且立刻到‘變更我的個人資料與密碼’設定新的密碼。\r\n\r\n"
		. "如果有任何問題，請聯絡%s。";

$email['reservation_invite'] = "%s邀請您參加下麵的預訂：\r\n\r\n"
		. "資源：%s\r\n"
		. "開始日期：%s\r\n"
		. "開始時間：%s\r\n"
		. "結束日期：%s\r\n"
		. "結束時間：%s\r\n"
		. "摘要：%s\r\n"
		. "迴圈重複日期 (如果有設定) ：%s\r\n\r\n"
		. "如果您接受這個邀請，請到 (如果有必需，請複製並貼到流覽器中) %s\r\n"
		. "如果您拒絕這個邀請，請到 (如果有必需，請複製並貼到流覽器中) %s\r\n"
		. "如果您要接受部份的日期或管理您的邀請，請登錄%s (%s) ";

$email['reservation_removal'] = "您已經移除了下面的邀請：\r\n\r\n"
		. "資源：%s\r\n"
		. "開始日期：%s\r\n"
		. "開始時間：%s\r\n"
		. "結束日期：%s\r\n"
		. "結束時間：%s\r\n"
		. "摘要：%s\r\n"
		. "迴圈重複日期 (如果有設定) ：%s\r\n\r\n";

$email['Reminder Body'] = "您的%s預訂，從%s %s到%s %s已經接近了。";
?>
