<?php
/**
 * Simplified Chinese 简体中文(zh_CN) translation file.
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

$days_full = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');

$days_abbr = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');

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
$strings['hours'] = '小时';
$strings['minutes'] = '分钟';

$strings['mm'] = '月';

$strings['dd'] = '日';

$strings['yyyy'] = '年';
$strings['am'] = '上午';
$strings['pm'] = '下午';

$strings['Administrator'] = '系统管理员';
$strings['Welcome Back'] = '欢迎，%s';
$strings['Log Out'] = '退出';
$strings['My Control Panel'] = '我的控制台';
$strings['Help'] = '帮助';
$strings['Manage Schedules'] = '日程管理';
$strings['Manage Users'] ='用户管理';
$strings['Manage Resources'] ='资源管理';
$strings['Manage User Training'] ='用户培训管理';
$strings['Manage Reservations'] ='预订管理';
$strings['Email Users'] ='电邮用户';
$strings['Export Database Data'] = '导出数据库内容';
$strings['Reset Password'] = '默认密码';
$strings['System Administration'] = '系统管理';
$strings['Successful update'] = '更新成功';
$strings['Update failed!'] = '更新失败！';
$strings['Manage Blackout Times'] = '管制时间';
$strings['Forgot Password'] = '忘记密码';
$strings['Manage My Email Contacts'] = '管理我的邮件联系人';
$strings['Choose Date'] = '选择日期';
$strings['Modify My Profile'] = '变更个人资料';
$strings['Register'] = '注册';
$strings['Processing Blackout'] = '管制处理中';
$strings['Processing Reservation'] = '预订处理中';
$strings['Online Scheduler [Read-only Mode]'] = '资源预订系统 [只读模式]';
$strings['Online Scheduler'] = '资源预订系统';
$strings['phpScheduleIt Statistics'] = 'phpScheduleIt统计资料';
$strings['User Info'] = '用户信息：';

$strings['Could not determine tool'] = '无法决定工具。请回到“我的控制台”并稍候再试。';
$strings['This is only accessable to the administrator'] = '只有系统管理员可以使用这个功能';
$strings['Back to My Control Panel'] = '回到我的控制台';
$strings['That schedule is not available.'] = '这个日程无效。';
$strings['You did not select any schedules to delete.'] = '您没有选择要删除的日程。';
$strings['You did not select any members to delete.'] = '您没有选择要删除的成员。';
$strings['You did not select any resources to delete.'] = '您没有选择要删除的资源。';
$strings['Schedule title is required.'] = '日程是必需的。';
$strings['Invalid start/end times'] = '开始或结束时间无效';
$strings['View days is required'] = '查看日期是必需的';
$strings['Day offset is required'] = '日期偏移是必需的';
$strings['Admin email is required'] = '管理邮件地址是必需的';
$strings['Resource name is required.'] = '资源的名称是必需的。';
$strings['Valid schedule must be selected'] = '必须选择有效的日程';
$strings['Minimum reservation length must be less than or equal to maximum reservation length.'] = '最短预订期间必须小于等于最长预订期间。';
$strings['Your request was processed successfully.'] = '您的请求已经成功的被处理了。';
$strings['Go back to system administration'] = '回到系统管理';
$strings['Or wait to be automatically redirected there.'] = '或稍候自动转到那里。';
$strings['There were problems processing your request.'] = '处理您的请求时发生了问题。';
$strings['Please go back and correct any errors.'] = '请回去更正错误。';
$strings['Login to view details and place reservations'] = '登录以查看详细资料和预订';
$strings['Memberid is not available.'] = '用户名称：%s不存在。';

$strings['Schedule Title'] = '日程';
$strings['Start Time'] = '开始时间';
$strings['End Time'] = '结束时间';
$strings['Time Span'] = '时间跨度';
$strings['Weekday Start'] = '周起始日';
$strings['Admin Email'] = '管理者邮件';

$strings['Default'] = '默认值';
$strings['Reset'] = '默认';
$strings['Edit'] = '编辑';
$strings['Delete'] = '删除';
$strings['Cancel'] = '取消';
$strings['View'] = '查看';
$strings['Modify'] = '修改';
$strings['Save'] = '储存';
$strings['Back'] = '上一个';
$strings['Next'] = '下一个';
$strings['Close Window'] = '关闭窗口';
$strings['Search'] = '查找';
$strings['Clear'] = '清除';

$strings['Days to Show'] = '显示的日期';
$strings['Reservation Offset'] = '预订偏移';
$strings['Hidden'] = '隐藏';
$strings['Show Summary'] = '显示摘要';
$strings['Add Schedule'] = '增加日程';
$strings['Edit Schedule'] = '编辑日程';
$strings['No'] = '否';
$strings['Yes'] = '是';
$strings['Name'] = '用户名称';
$strings['First Name'] = '中文名';
$strings['Last Name'] = '汉语拼音名';
$strings['Resource Name'] = '资源名称';
$strings['Email'] = '邮件';
$strings['Institution'] = '部门';
$strings['Phone'] = '电话';
$strings['Password'] = '密码';
$strings['Permissions'] = '权限';
$strings['View information about'] = '查看关于%s %s的信息';
$strings['Send email to'] = '发邮件给%s %s';
$strings['Reset password for'] = '默认%s %s的密码';
$strings['Edit permissions for'] = '编辑%s %s的权限';
$strings['Position'] = '职位';
$strings['Password (6 char min)'] = '密码（至少%s个字符）';
$strings['Re-Enter Password'] = '再次输入密码';

$strings['Sort by descending last name'] = '根据"汉语拼音名"降序排列';
$strings['Sort by descending email address'] = '根据"邮件"降序排列';
$strings['Sort by descending institution'] = '根据"部门"降序排列';
$strings['Sort by ascending last name'] = '根据"汉语拼音名"升序排列';
$strings['Sort by ascending email address'] = '根据"邮件"升序排列';
$strings['Sort by ascending institution'] = '根据"部门"升序排列';
$strings['Sort by descending resource name'] = '根据"资源的名称"降序排列';
$strings['Sort by descending location'] = '根据"位置"降序排列';
$strings['Sort by descending schedule title'] = '根据"日程"降序排列';
$strings['Sort by ascending resource name'] = '根据"资源的名称"升序排列';
$strings['Sort by ascending location'] = '根据"位置"升序排列';
$strings['Sort by ascending schedule title'] = '根据"日程"升序排列';
$strings['Sort by descending date'] = '根据"日期"降序排列';
$strings['Sort by descending user name'] = '根据"用户名称"降序排列';
$strings['Sort by descending start time'] = '根据"开始时间"降序排列';
$strings['Sort by descending end time'] = '根据"结束时间"降序排列';
$strings['Sort by ascending date'] = '根据"日期"升序排列';
$strings['Sort by ascending user name'] = '根据"用户名称"升序排列';
$strings['Sort by ascending start time'] = '根据"开始时间"升序排列';
$strings['Sort by ascending end time'] = '根据"结束时间"升序排列';
$strings['Sort by descending created time'] = '根据"创建时间"降序排列';
$strings['Sort by ascending created time'] = '根据"创建时间"升序排列';
$strings['Sort by descending last modified time'] = '根据"最后修改时间"降序排列';
$strings['Sort by ascending last modified time'] = '根据"最后修改时间"升序排列';

$strings['Search Users'] = '查找用户';
$strings['Location'] = '位置';
$strings['Schedule'] = '日程';
$strings['Phone'] = '电话';
$strings['Notes'] = '备注';
$strings['Status'] = '状态';
$strings['All Schedules'] = '全部日程';
$strings['All Resources'] = '全部资源';
$strings['All Users'] = '全部用户';

$strings['Edit data for'] = '编辑%s的数据';
$strings['Active'] = '可用';
$strings['Inactive'] = '不可用';
$strings['Toggle this resource active/inactive'] = '切换这个资源的使用状态';
$strings['Minimum Reservation Time'] = '最短预订时限';
$strings['Maximum Reservation Time'] = '最长预订时限';
$strings['Auto-assign permission'] = '自动给予权限';
$strings['Add Resource'] = '增加资源';
$strings['Edit Resource'] = '保存';
$strings['Allowed'] = '允许';
$strings['Notify user'] = '通知用户';
$strings['User Reservations'] = '用户预订';
$strings['Date'] = '日期';
$strings['User'] = '用户';
$strings['Email Users'] = '电邮用户';
$strings['Subject'] = '标题';
$strings['Message'] = '消息';
$strings['Please select users'] = '请选择用户';
$strings['Send Email'] = '发送邮件';
$strings['problem sending email'] = '抱歉，发送邮件时发生了问题，请稍候再试。';
$strings['The email sent successfully.'] = '邮件已成功寄出。';
$strings['do not refresh page'] = '请<u>不要</u> 刷新本页。这样会再一次的寄出邮件。';
$strings['Return to email management'] = '回到电邮管理';
$strings['Please select which tables and fields to export'] = '请选择导出的表格：';
$strings['all fields'] = '－全部表格－';
$strings['HTML'] = '网页';
$strings['Plain text'] = '纯文本';
$strings['XML'] = 'XML';
$strings['CSV'] = 'CSV';
$strings['Export Data'] = '导出资料';
$strings['Reset Password for'] = '默认%s的密码';
$strings['Please edit your profile'] = '请编辑您的个人数据';
$strings['Please register'] = '请注册';
$strings['Keep me logged in'] = '保持登录状态<br/>（需要cookies）';
$strings['Edit Profile'] = '编辑个人数据';
$strings['Register'] = '注册';
$strings['Please Log In'] = '请登录';
$strings['Email address'] = '邮件';
$strings['Password'] = '密码';
$strings['First time user'] = '第一次用户';
$strings['Click here to register'] = '按这里注册';
$strings['Register for phpScheduleIt'] = '注册phpScheduleIt';
$strings['Log In'] = '登录';
$strings['View Schedule'] = '日程';
$strings['View a read-only version of the schedule'] = '查看只读日程表';
$strings['I Forgot My Password'] = '忘记密码';
$strings['Retreive lost password'] = '找回密码';
$strings['Get online help'] = '在线帮助';
$strings['Language'] = '语言';
$strings['(Default)'] = '（默认）';

$strings['My Announcements'] = '我的公告';
$strings['My Reservations'] = '我的预订';
$strings['My Permissions'] = '我的权限';
$strings['My Quick Links'] = '我的快速连接';
$strings['Announcements as of'] = '%s的公告';
$strings['There are no announcements.'] = '没有公告事项。';
$strings['Resource'] = '资源';
$strings['Created'] = '创建时间';
$strings['Last Modified'] = '最后修改时间';
$strings['View this reservation'] = '查看这个预订';
$strings['Modify this reservation'] = '修改这个预订';
$strings['Delete this reservation'] = '删除这个预订';
$strings['Bookings'] = '预订';
$strings['Change My Profile Information/Password'] = '变更个人资料';
$strings['Manage My Email Preferences'] = '邮件设定';
$strings['Mass Email Users'] = '群发邮件';
$strings['Search Scheduled Resource Usage'] = '查找预订';
$strings['Show Resources'] = '显示资源';
$strings['Export Database Content'] = '导出数据库内容';
$strings['View System Stats'] = '查看系统状态';
$strings['Email Administrator'] = '邮件管理员';

$strings['Email me when'] = '通知我：';
$strings['I place a reservation'] = '建立预订';
$strings['My reservation is modified'] = '预订已被修改';
$strings['My reservation is deleted'] = '预订已被删除';
$strings['I prefer'] = '我选择：';
$strings['Your email preferences were successfully saved'] = '您的邮件设定已被储存！';
$strings['Return to My Control Panel'] = '回到我的控制台';

$strings['Please select the starting and ending times'] = '请选择开始与结束时间：';
$strings['Please change the starting and ending times'] = '请变更开始与结束时间：';
$strings['Reserved time'] = '预订的时间：';
$strings['Minimum Reservation Length'] = '最短预订长度：';
$strings['Maximum Reservation Length'] = '最长预订长度：';
$strings['Reserved for'] = '预订给：';
$strings['Will be reserved for'] = '将被预订给：';
$strings['N/A'] = '无';
$strings['Update all recurring records in group'] = '是否更新群组中的全部循环记录？';
$strings['Delete?'] = '是否删除？';
$strings['Never'] = '－ 无 －';
$strings['Days'] = '天';
$strings['Weeks'] = '周';
$strings['Months (date)'] = '月（日期）';
$strings['Months (day)'] = '月（星期几）';
$strings['First Days'] = '第一天';
$strings['Second Days'] = '第二天';
$strings['Third Days'] = '第三天';
$strings['Fourth Days'] = '第四天';
$strings['Last Days'] = '最后一天';
$strings['Repeat every'] = '重复频率：';
$strings['Repeat on'] = '重复在：';
$strings['Repeat until date'] = '重复直到：';
$strings['Choose Date'] = '选择日期';
$strings['Summary'] = '摘要';

$strings['View schedule'] = '日程：';
$strings['My Reservations'] = '我的预订';
$strings['My Past Reservations'] = '我之前的预订';
$strings['Other Reservations'] = '其他预订';
$strings['Other Past Reservations'] = '其他过去的预订';
$strings['Blacked Out Time'] = '管制的时间';
$strings['Set blackout times'] = '设定%s的管制于%s';
$strings['Reserve on'] = '预订了%s于%s';
$strings['Prev Week'] = '«上周';
$strings['Prev Month'] = '«上月';
$strings['Jump 1 week back'] = '跳过一周';
$strings['Prev days'] = '« 之前%d天';
$strings['Previous days'] = '«之前%d天';
$strings['This Week'] = '本周';
$strings['Jump to this week'] = '跳到本周';
$strings['Next days'] = '之后%d天»';
$strings['Next Week'] = '下周»';
$strings['Next Month'] = '下月»';
$strings['Jump To Date'] = '跳到日期';
$strings['View Monthly Calendar'] = '查看月历';
$strings['Open up a navigational calendar'] = '开启一个可以浏览的日历';

$strings['View stats for schedule'] = '查看预订的状态：';
$strings['At A Glance'] = '一览表';
$strings['Total Users'] = '全部用户数：';
$strings['Total Resources'] = '全部资源数：';
$strings['Total Reservations'] = '全部预订数：';
$strings['Max Reservation'] = '最长预订时间：';
$strings['Min Reservation'] = '最短预订时间：';
$strings['Avg Reservation'] = '平均预订时间：';
$strings['Most Active Resource'] = '最活跃的资源：';
$strings['Most Active User'] = '最活跃的用户：';
$strings['System Stats'] = '系统状态';
$strings['phpScheduleIt version'] = 'phpScheduleIt版本：';
$strings['Database backend'] = '后端数据库：';
$strings['Database name'] = '数据库的名称：';
$strings['PHP version'] = 'PHP版本：';
$strings['Server OS'] = '操作系统：';
$strings['Server name'] = '主机名：';
$strings['phpScheduleIt root directory'] = 'phpScheduleIt根目录：';
$strings['Using permissions'] = '使用权限：';
$strings['Using logging'] = '使用记录：';
$strings['Log file'] = '记录文件：';
$strings['Admin email address'] = '管理者邮件：';
$strings['Tech email address'] = '技术支持邮件：';
$strings['CC email addresses'] = '邮件副本：';
$strings['Reservation start time'] = '预订起始时间：';
$strings['Reservation end time'] = '预订结束时间：';
$strings['Days shown at a time'] = '一次显示天数：';
$strings['Reservations'] = '预订';
$strings['Return to top'] = '回到顶端';
$strings['for'] = '-';

$strings['Select Search Criteria'] = '选择查找条件';
$strings['Schedules'] = '日程：';
$strings['All Schedules'] = '全部日程';
$strings['Hold CTRL to select multiple'] = '按下Ctrl以多项选择';
$strings['Users'] = '用户：';
$strings['All Users'] = '全部用户';
$strings['Resources'] = '资源';
$strings['All Resources'] = '全部资源';
$strings['Starting Date'] = '开始日期：';
$strings['Ending Date'] = '结束日期：';
$strings['Starting Time'] = '开始时间：';
$strings['Ending Time'] = '结束时间：';
$strings['Output Type'] = '导出类型：';
$strings['Manage'] = '管理';
$strings['Total Time'] = '全部时间';
$strings['Total hours'] = '全部小时数：';
$strings['% of total resource time'] = '％全部资源时间';
$strings['View these results as'] = '查看这些结果为：';
$strings['Edit this reservation'] = '编辑这个预订';
$strings['Search Results'] = '查找结果';
$strings['Search Resource Usage'] = '查找资源用户';
$strings['Search Results found'] = '查找结果：找到%d个预订';
$strings['Try a different search'] = '尝试别的查找条件';
$strings['Search Run On'] = '查找执行于：';
$strings['Member ID'] = '会员编号';
$strings['Previous User'] = '&laquo;上一个用户';
$strings['Next User'] = '下一个用户 &raquo;';

$strings['No results'] = '没有结果';
$strings['That record could not be found.'] = '找不到这个记录。';
$strings['This blackout is not recurring.'] = '这个管制没有循环记录。';
$strings['This reservation is not recurring.'] = '这个预订没有循环记录。';
$strings['There are no records in the table.'] = '在%s表中没有记录。';
$strings['You do not have any reservations scheduled.'] = '您没有任何预订。';
$strings['You do not have permission to use any resources.'] = '您没有权限使用任何资源。';
$strings['No resources in the database.'] = '数据库中没有资源。';
$strings['There was an error executing your query'] = '您的查询有错误：';

$strings['That cookie seems to be invalid'] = '这个cookie似乎不合法';
$strings['We could not find that logon in our database.'] = '在数据库中找不到该名称。';
$strings['That password did not match the one in our database.'] = '密码与数据库的记录不符。';
$strings['You can try'] = '<br/>您可以尝试：<br/>注册一个邮件<br/>或者：<br/>尝试再一次登录。';
$strings['A new user has been added'] = '增加了一个新用户';
$strings['You have successfully registered'] = '您已经成功注册了！';
$strings['Continue'] = '继续...';
$strings['Your profile has been successfully updated!'] = '您的个人资料已更新成功！';
$strings['Please return to My Control Panel'] = '请回到"我的控制台"';
$strings['Valid email address is required.'] = '- 您需要一个有效的邮件。';
$strings['First name is required.'] = '- “中文名”是必需的。';
$strings['Last name is required.'] = '- "汉语拼音名"是必需的。';
$strings['Phone number is required.'] = '- "电话"是必需的。';
$strings['That email is taken already.'] = '- 这个邮件已经被使用了。<br/>请换一个邮件再试。';
$strings['Min 6 character password is required.'] = '- 至少 %s个字符的密码是必需的。';
$strings['Passwords do not match.'] = '- 密码不符。';

$strings['Per page'] = '每页：';
$strings['Page'] = '页码：';

$strings['Your reservation was successfully created'] = '您已经成功建立了下列预订';
$strings['Your reservation was successfully modified'] = '您已经成功修改了下列预订';
$strings['Your reservation was successfully deleted'] = '您已经成功删除了下列预订';
$strings['Your blackout was successfully created'] = '您已经成功建立了下列管制';
$strings['Your blackout was successfully modified'] = '您已经成功修改了下列管制';
$strings['Your blackout was successfully deleted'] = '您已经成功删除了下列管制';
$strings['for the follwing dates'] = '为以下日期：';
$strings['Start time must be less than end time'] = '开始时间必须比结束时间早。';
$strings['Current start time is'] = '目前开始时间为：';
$strings['Current end time is'] = '目前结束时间为：';
$strings['Reservation length does not fall within this resource\'s allowed length.'] = '预订期间不在资源的限制长度内。';
$strings['Your reservation is'] = '您的预订为：';
$strings['Minimum reservation length'] = '最短预订长度：';
$strings['Maximum reservation length'] = '最长预订长度：';
$strings['You do not have permission to use this resource.'] = '您没有使用这个资源的许可。';
$strings['reserved or unavailable'] = '%s到%s已被预订或不可使用。';
$strings['Reservation created for'] = '%s的预订已建立';
$strings['Reservation modified for'] = '%s的预订已修改';
$strings['Reservation deleted for'] = '%s的预订已删除';
$strings['created'] = '创建了';
$strings['modified'] = '修改了';
$strings['deleted'] = '删除了';
$strings['Reservation #'] = '预订编号';
$strings['Contact'] = '资源电话';
$strings['Reservation created'] = '预订已建立';
$strings['Reservation modified'] = '预订已修改';
$strings['Reservation deleted'] = '预订已删除';

$strings['Reservations by month'] = '按月的预订数';
$strings['Reservations by day of the week'] = '按周日的预订数';
$strings['Reservations per month'] = '每个月的预订数';
$strings['Reservations per user'] = '按照用户的预订数';
$strings['Reservations per resource'] = '按照资源的预订数';
$strings['Reservations per start time'] = '按照开始时间的预订数';
$strings['Reservations per end time'] = '按照结束时间的预订数';
$strings['[All Reservations]'] = '[全部预订]';

$strings['Permissions Updated'] = '权限已更新';
$strings['Your permissions have been updated'] = '您的%s权限已被更新';
$strings['You now do not have permission to use any resources.'] = '您没有任何资源的使用权限。';
$strings['You now have permission to use the following resources'] = '您有使用下列资源的权限：';
$strings['Please contact with any questions.'] = '如果有问题，请联络%s。';
$strings['Password Reset'] = '重设密码';

$strings['This will change your password to a new，randomly generated one.'] = '这个功能将会变更您的密码为一个随机的密码。';
$strings['your new password will be set'] = '在输入您的邮件并按下"变更密码"后，您的密码将被默认并电邮给您。';
$strings['Change Password'] = '变更密码';
$strings['Sorry，we could not find that user in the database.'] = '抱歉，我们在数据库中找不到这个用户。';
$strings['Your New Password'] = '您的新%s密码';
$strings['Your new passsword has been emailed to you.'] = '成功!<br/>'
. '您的新密码已经寄出。<br/>'
. '请到您的信箱中取得新密码，然后使用这个新密码 <a href="index.php">登录</a>'
. ' 并主动到”我的控制台”中按下”变更我的个人数据/密码”'
. ' 以变更密码。';

$strings['You are not logged in!'] = '您尚未登录！';

$strings['Setup'] = '设定';
$strings['Please log into your database'] = '请登录您的数据库';
$strings['Enter database root username'] = '输入数据库管理员名称：';
$strings['Enter database root password'] = '输入数据库管理员密码：';
$strings['Login to database'] = '登录数据库';
$strings['Root user is not required. Any database user who has permission to create tables is acceptable.'] = '您<b>不</b>需要管理员账号。任何可以建立数据表的数据库用户都是被接受的。';
$strings['This will set up all the necessary databases and tables for phpScheduleIt.'] = '这将会设定所有phpScheduleIt所需要的数据库与数据表。';
$strings['It also populates any required tables.'] = '小时也会在资料表中填入必需的资料。';
$strings['Warning：THIS WILL ERASE ALL DATA IN PREVIOUS phpScheduleIt DATABASES!'] = '警告：这将会删除所有phpScheduleIt的数据库！';
$strings['Not a valid database type in the config.php file.'] = 'config.php 之中没有有效的数据库的名称。';
$strings['Database user password is not set in the config.php file.'] = '数据库用户名称与密码未设定于config.php之中。';
$strings['Database name not set in the config.php file.'] = '数据库的名称未设定于 config.php之中。';
$strings['Successfully connected as'] = '成功的连接为';
$strings['Create tables'] = '建立数据表 &gt;';
$strings['There were errors during the install.'] = '安装过程中发生错误. 如果是次要的错误，phpScheduleIt不能还是可以正常工作。<br/><br/>'
. '请到<a href="http://sourceforge.net/forum/?group_id=95547">SourceForge</a>论坛张贴您的问题。';
$strings['You have successfully finished setting up phpScheduleIt and are ready to begin using it.'] = '您已经成功的完成了phpScheduleIt的设定。您可以开始使用了。';
$strings['Thank you for using phpScheduleIt'] = '请确定您完全删除 \'install\' 目录.'
. ' 因为这个目录包括了数据库密码与其它重要数据，所以这个动作非常重要.'
. ' 如果您没有删除，您等于开了大门让其他人侵入您的数据库！'
. '<br/><br/>'
. '欢迎您使用phpScheduleIt！';
$strings['There is no way to undo this action'] = '这个动作将无法复原！';
$strings['Click to proceed'] = '按这里继续';
$strings['Please delete this file.'] = '请删除这个档案。';
$strings['Successful update'] = '更新成功';
$strings['Patch completed successfully'] = '修补已成功';

$strings['If no value is specified，the default password set in the config file will be used.'] = '如果没有指定数值，配置文件中的默认密码将被使用。';
$strings['Notify user that password has been changed?'] = '是否通知用户密码变更？';

$strings['This system requires that you have an email address.'] = '系统要求你有一个邮件地址。';
$strings['Invalid User Name/Password.'] = '错误的用户名称/密码。';
$strings['Pending User Reservations'] = '等待中的用户预订';
$strings['Approve'] = '批准';
$strings['Approve this reservation'] = '批准这个预订';
$strings['Approve Reservations'] ='批准预订';

$strings['Announcement'] = '公告';
$strings['Number'] = '编号';
$strings['Add Announcement'] = '新增公告';
$strings['Edit Announcement'] = '编辑公告';
$strings['All Announcements'] = '所有公告';
$strings['Delete Announcements'] = '删除公告';
$strings['Use start date/time?'] = '使用开始日期/时间';
$strings['Use end date/time?'] = '使用结束日期/时间';
$strings['Announcement text is required.'] = '公告内容是必需的。';
$strings['Announcement number is required.'] = '公告编号是必需的。';

$strings['Pending Approval'] = '等待批准';
$strings['My reservation is approved'] = '我的预订已被批准';
$strings['This reservation must be approved by the administrator.'] = '这个预订需要管理员的批准。';
$strings['Approval Required'] = '需要批准';
$strings['No reservations requiring approval'] = '没有预订需要批准';
$strings['Your reservation was successfully approved'] = '您的预订已被批准';
$strings['Reservation approved for'] = '%s的预订批准';
$strings['approved'] = '已批准';
$strings['Reservation approved'] = '预订已被批准';

$strings['Valid username is required'] = '需要有效的用户名称';
$strings['That logon name is taken already.'] = '登录名已被使用。';
$strings['this will be your login'] = '（登录名）';
$strings['Logon name'] = '登录名';
$strings['Your logon name is'] = '您的登录的名称为%s';

$strings['Start'] = '开始';
$strings['End'] = '结束';
$strings['Start date must be less than or equal to end date'] = '开始日期必须比结束日期早';
$strings['That starting date has already passed'] = '这个开始日期已经过去了';
$strings['Basic'] = '基本情况';
$strings['Participants'] = '参与人员';
$strings['Close'] = '关闭';
$strings['Start Date'] = '开始日期';
$strings['End Date'] = '结束日期';
$strings['Minimum'] = '最短';
$strings['Maximum'] = '最长';
$strings['Allow Multiple Day Reservations'] = '允许多天的预订';
$strings['Invited Users'] = '被邀请者';
$strings['Invite Users'] = '邀请者';
$strings['Remove Participants'] = '移除参与人员';
$strings['Reservation Invitation'] = '预订邀请';
$strings['Manage Invites'] = '管理邀请';
$strings['No invite was selected'] = '没有选择邀请';
$strings['reservation accepted'] = '%s接受了您的邀请在%s';
$strings['reservation declined'] = '%s拒绝了您的邀请在%s';
$strings['Login to manage all of your invitations'] = '登录以管理您的邀请';
$strings['Reservation Participation Change'] = '参与邀请变更';
$strings['My Invitations'] = '我的邀请';
$strings['Accept'] = '接受';
$strings['Decline'] = '拒绝';
$strings['Accept or decline this reservation'] = '接受或拒绝邀请';
$strings['My Reservation Participation'] = '我参与的邀请';
$strings['End Participation'] = '结束参与';
$strings['Owner'] = '发起人';
$strings['Particpating Users'] = '参与者';
$strings['No advanced options available'] = '没有进阶的功能';
$strings['Confirm reservation participation'] = '确认预订邀请';
$strings['Confirm'] = '确认';
$strings['Do for all reservations in the group?'] = '是否在这个群组中做全部预订？';

$strings['My Calendar'] = '我的日历';
$strings['View My Calendar'] = '查看我的日历';
$strings['Participant'] = '参与人员';
$strings['Recurring'] = '循环';
$strings['Multiple Day'] = '多天';
$strings['[today]'] = '[今天]';
$strings['Day View'] = '日报表';
$strings['Week View'] = '周报表';
$strings['Month View'] = '月报表';
$strings['Resource Calendar'] = '资源日历';
$strings['View Resource Calendar'] = '查看资源日历';
$strings['Signup View'] = '登记报表';

$strings['Select User'] = '选择用户';
$strings['Change'] = '变更';

$strings['Update'] = '更新';
$strings['phpScheduleIt Update is only available for versions 1.0.0 or later'] = 'phpScheduleIt 更新只对1.0.0之后的版本有效';
$strings['phpScheduleIt is already up to date'] = 'phpScheduleIt已经是最新的';
$strings['Migrating reservations'] = '合并预订';

$strings['Admin'] = '管理';
$strings['Manage Announcements'] = '管理公告';
$strings['There are no announcements'] = '没有公告';

$strings['Maximum Participant Capacity'] = '最多参与人数';
$strings['Leave blank for unlimited'] = '留空表示无限制';
$strings['Maximum of participants'] = '这个资源的最大参与人数为%s人';
$strings['That reservation is at full capacity.'] = '这个预订已经满了。';
$strings['Allow registered users to join?'] = '是否允许注册的用户参加？';
$strings['Allow non-registered users to join?'] = '是否允许未注册的用户参加？';
$strings['Join'] = '参加';
$strings['My Participation Options'] = '我参加的选项';
$strings['Join Reservation'] = '参加预订';
$strings['Join All Recurring'] = '参加所有循环的预订';
$strings['You are not participating on the following reservation dates because they are at full capacity.'] = '因为已经订满，您无法参加下列日期的预订。';
$strings['You are already invited to this reservation. Please follow participation instructions previously sent to your email.'] = '您已经被邀请参加这个预订. 请根据给您邮件中的说明参加这个预订。';
$strings['Additional Tools'] = '另外的工具';
$strings['Create User'] = '建立用户';
$strings['Check Availability'] = '检查是否可用';
$strings['Manage Additional Resources'] = '管理另外的资源';
$strings['All Additional Resources'] = '所有另外的资源';
$strings['Number Available'] = '可用的数量';
$strings['Unlimited'] = '无限制';
$strings['Add Additional Resource'] = '增加另外的资源';
$strings['Edit Additional Resource'] = '编辑另外的资源';
$strings['Checking'] = '检查中';
$strings['You did not select anything to delete.'] = '您没有选择要删除的东西。';
$strings['Added Resources'] = '增加的资源';
$strings['Additional resource is reserved'] = '另外的资源%s预定有%s个可用';
$strings['All Groups'] = '全部群组';
$strings['Group Name'] = '群组名称';
$strings['Delete Groups'] = '删除群组';
$strings['Manage Groups'] = '管理群组';
$strings['None'] = '无';
$strings['Group name is required.'] = '群组名称是必需的。';
$strings['Groups'] = '群组';
$strings['Current Groups'] = '目前群组';
$strings['Group Administration'] = '群组管理';
$strings['Reminder Subject'] = '预订提醒－%s，%s %s';
$strings['Reminder'] = '提醒';
$strings['before reservation'] = '预订前';
$strings['My Participation'] = '我参加的';
$strings['My Past Participation'] = '我过去参加的';
$strings['Timezone'] = '时区';
$strings['Export'] = '导出';
$strings['Select reservations to export'] = '选择要导出的预订';
$strings['Export Format'] = '导出格式';
$strings['This resource cannot be reserved less than x hours in advance'] = '这个资源不能在少于%s小时前预订';
$strings['This resource cannot be reserved more than x hours in advance'] = '这个资源不能在多于%s小时前区预订';
$strings['Minimum Booking Notice'] = '最短预订时效';
$strings['Maximum Booking Notice'] = '最长预订时效';
$strings['hours prior to the start time'] = '会议开始前...小时';
$strings['hours from the current time'] = '从现在起...小时内';
$strings['Contains'] = '包括';
$strings['Begins with'] = '开始为';
$strings['Minimum booking notice is required.'] = '最短预订时效是必需的。';
$strings['Maximum booking notice is required.'] = '最长预订时效是必需的。';
$strings['Manage Additional Resources'] = '管理设备';
$strings['Add Additional Resource'] = '增加设备';
$strings['Edit Additional Resource'] = '编辑设备';
$strings['Accessory Name'] = '设备的名称';
$strings['Accessories'] = '设备';
$strings['All Accessories'] = '全部设备';
$strings['Added Accessories'] = '增加的设备';

/***
  EMAIL MESSAGES
  Please translate these email messages into your language.  You should keep the sprintf (%s) placeholders
  in their current position unless you know you need to move them.
  All email messages should be surrounded by double quotes "
  Each email message will be described below.
 ***/

$email['register'] = "%s，%s\r\n"
		. "您成功的注册了下列信息：\r\n"
		. "登录：%s\r\n"
		. "姓名：%s %s\r\n"
		. "电话：%s\r\n"
		. "部门：%s\r\n"
		. "名称：%s\r\n\r\n"
		. "请从下面的链接登录系统：\r\n"
		. "%s\r\n\r\n"
		. "您可以在\"我的控制台\"中找到编辑您个人数据的链接。\r\n\r\n"
		. "如果您有关于资源预订的问题，请联络%s";

$email['register_admin'] = "管里员，\r\n\r\n"
		. "新用户用下列的数据注册了新账号：\r\n"
		. "邮件：%s\r\n"
		. "姓名：%s %s\r\n"
		. "电话：%s\r\n"
		. "部门：%s\r\n"
		. "名称：%s\r\n\r\n";

$email['reservation_activity_1'] = "%s，\r\n<br/>"
		. "您已经成功%s预订，编号是%s。\r\n\r\n<br/><br/>"
		. "当联络管里员时，请使用这个预订编号。\r\n\r\n<br/><br/>"
		. "在%s %s到%s %s之间的%s，"
		. " 设备在 %s 已经被 %s。\r\n\r\n<br/><br/>";
$email['reservation_activity_2'] = "这个预订将在重复：\r\n<br/>";
$email['reservation_activity_3'] = "在这个群组中，所有的循环预订也将%s。\r\n\r\n<br/><br/>";
$email['reservation_activity_4'] = "下面是这个预订的摘要：\r\n<br/>%s\r\n\r\n<br/><br/>";
$email['reservation_activity_5'] = "如果有错误，请使用 %s 联络管理员，"
		. "FYI，该资源电话是：%s。\r\n\r\n<br/><br/>"
		. "您可以在任何时候登录%s (<a href=\"%s\" target=\"_blank\">%s</a>。\r\n\r\n) 来修改这个预订。"
		. "<br/><br/>";
$email['reservation_activity_6'] = "如果需要本系统的技术支持，请联络<a href=\"mailto:%s\">%s</a>。\r\n\r\n<br/><br/>";

$email['reservation_activity_7'] = "%s，\r\n<br/>"
		. "预订编号%s已经被接受了。\r\n\r\n<br/><br/>"
		. "当联络管里员时，请使用这个预订编号。\r\n\r\n<br/><br/>"
		. "从%s %s到%s %s之间的%s预订，"
		. " 设备在 %s 已经被 %s。\r\n\r\n<br/><br/>";

$email['password_reset'] = "您的%s密码已经被管理员重设。\r\n\r\n"
		. "您的临时密码为：\r\n\r\n %s\r\n\r\n"
		. "请用这个临时密码 (您可以使用复制与粘贴来确认正确性) 登录到%s（%s），"
		. "并且立刻到‘变更我的个人数据与密码’设定新的密码。\r\n\r\n"
		. "如果有任何问题，请联络%s。";

$email['new_password'] = "%s，\r\n"
		. "您 %s 账号的新密码为：\r\n\r\n"
		. "%s\r\n\r\n"
		. "请使用这个密码在%s登录"
		. "(您可以使用复制与粘贴来确认正确性)，"
		. "并且立刻到‘变更我的个人数据与密码’设定新的密码。\r\n\r\n"
		. "如果有任何问题，请联络%s。";

$email['reservation_invite'] = "%s邀请您参加下面的预订：\r\n\r\n"
		. "资源：%s\r\n"
		. "开始日期：%s\r\n"
		. "开始时间：%s\r\n"
		. "结束日期：%s\r\n"
		. "结束时间：%s\r\n"
		. "摘要：%s\r\n"
		. "循环重复日期 (如果有设定) ：%s\r\n\r\n"
		. "如果您接受这个邀请，请到 (如果有必需，请复制并贴到浏览器中) %s\r\n"
		. "如果您拒绝这个邀请，请到 (如果有必需，请复制并贴到浏览器中) %s\r\n"
		. "如果您要接受部份的日期或管理您的邀请，请登录%s (%s) ";

$email['reservation_removal'] = "您已经移除了下面的邀请：\r\n\r\n"
		. "资源：%s\r\n"
		. "开始日期：%s\r\n"
		. "开始时间：%s\r\n"
		. "结束日期：%s\r\n"
		. "结束时间：%s\r\n"
		. "摘要：%s\r\n"
		. "循环重复日期 (如果有设定) ：%s\r\n\r\n";

$email['Reminder Body'] = "您的%s预订，从%s %s到%s %s已经接近了。";
?>
