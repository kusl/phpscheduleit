<?php
class ParameterNames
{
	private function __construct()
	{}

	const ACCESSORY_ID = '@accessoryid';
	const ACCESSORY_NAME = '@accessoryname';
	const ACCESSORY_QUANTITY = '@quantity';

	const CURRENT_DATE = '@current_date';
	const CURRENT_SERIES_ID = '@currentSeriesId';
	
	const DATE_CREATED = '@dateCreated';
	const DATE_MODIFIED = '@dateModified';
	const DESCRIPTION = '@description';
	
	const END_DATE = '@endDate';
	const END_TIME = '@endTime';
	const EMAIL_ADDRESS = '@email';
	
	const FIRST_NAME = '@fname';
	
	const GROUP_ID = '@groupid';
	const GROUP_NAME = '@groupname';
	const GROUP_ADMIN_ID = '@admin_group_id';
		
	const HOMEPAGE_ID = '@homepageid';

	const IS_ACTIVE = '@isactive';
	
	const LAST_LOGIN = '@lastlogin';
	const LAST_NAME = '@lname';
	const LAYOUT_ID = '@layoutid';
	
	const ORGANIZATION = '@organization';
	
	const PASSWORD = '@password';
	const PERIOD_AVAILABILITY_TYPE = '@periodType';
	const PERIOD_LABEL = '@label';
	const PHONE = '@phone';
	const POSITION = '@position';

	const QUOTA_DURATION = '@duration';
	const QUOTA_ID = '@quotaid';
	const QUOTA_LIMIT = '@limit';
	const QUOTA_UNIT = '@unit';

	const REFERENCE_NUMBER = '@referenceNumber';
	
	const REPEAT_OPTIONS = '@repeatOptions';
	const REPEAT_TYPE = '@repeatType';
	
	const RESERVATION_INSTANCE_ID = '@reservationid';
	const RESERVATION_USER_LEVEL_ID = '@levelid';
	
	const RESOURCE_ID = '@resourceid';
	const RESOURCE_ALLOW_MULTIDAY = '@allow_multiday_reservations';
	const RESOURCE_AUTOASSIGN = '@autoassign';
	const RESOURCE_CONTACT = '@contact_info';
	const RESOURCE_COST = '@unit_cost';
	const RESOURCE_DESCRIPTION = '@description';
	const RESOURCE_LOCATION = '@location';
	const RESOURCE_MAX_PARTICIPANTS = '@max_participants';
	const RESOURCE_MAXDURATION = '@max_duration';
	const RESOURCE_MAXNOTICE = '@max_notice_time';
	const RESOURCE_MINDURATION = '@min_duration';
	const RESOURCE_MININCREMENT = '@min_increment';
	const RESOURCE_MINNOTICE = '@min_notice_time';
	const RESOURCE_NAME = '@resource_name';	
	const RESOURCE_NOTES = '@resource_notes';
	const RESOURCE_REQUIRES_APPROVAL = '@requires_approval';
	const RESOURCE_LEVEL_ID = "@resourceLevelId";
	const RESOURCE_IMAGE_NAME = "@imageName";
	const RESOURCE_ISACTIVE = "@isActive";

	const ROLE_ID = '@roleid';
	const ROLE_LEVEL = '@role_level';
	
	const SALT = '@salt';
	const SCHEDULE_ID = '@scheduleid';
	const SCHEDULE_NAME = '@scheduleName';
	const SCHEDULE_ISDEFAULT = '@scheduleIsDefault';
	const SCHEDULE_WEEKDAYSTART = '@scheduleWeekdayStart';
	const SCHEDULE_DAYSVISIBLE = '@scheduleDaysVisible';
	const SERIES_ID = '@seriesid';
	const START_DATE = '@startDate';
	const START_TIME = '@startTime';
	const STATUS_ID = '@statusid';
	const TIMEZONE_NAME = '@timezone';
	const TYPE_ID = '@typeid';
	const LANGUAGE = '@language';
	const TITLE = '@title';
	const USER_ID = '@userid';
	const USER_ROLE_ID = '@user_roleid';
	const USER_STATUS_ID = '@user_statusid';
	const USERNAME = '@username';	


	// used?
	const FIRST_NAME_SETTING = '@fname_setting';
	const LAST_NAME_SETTING = '@lname_setting';
	const USERNAME_SETTING = '@username_setting';	
	const EMAIL_ADDRESS_SETTING = '@email_setting';
	const PASSWORD_SETTING = '@password_setting';
	const ORGANIZATION_SELECTION_SETTING = '@organization_setting';
	const GROUP_SETTING = '@group_setting';
	const POSITION_SETTING = '@position_setting';
	const ADDRESS_SETTING = '@address_setting';
	const PHONE_SETTING = '@phone_setting';
	const HOMEPAGE_SELECTION_SETTING = '@homepage_setting';
	const TIMEZONE_SELECTION_SETTING = '@timezone_setting';
}

class Queries
{
	private function __construct()
	{}
    
    //MPinnegar
    //TO-DO: Put this in alphabetical order
    //Words following @symbols are variables that will be used by the SQL statement. In this case we will be taking in the userId and using that to find out the reservations that the person represented by the userId has
    //So the only symbol is the @userId. All of these can be found in the ParameterNames class above
    
    //Inside of the statement, besides using the funky @ symbol for variables, everything else is like a normal SQL statement. You use the table and column names from the SQL database.
    //The below constants will be used inside of Commands.php in the style of "parent::__construct(Queries::GET_ALL_RESERVATIONS_BY_USER)"
    //I am lame, and have not actually tested this. I need to populate my database and give this one a whirl. However, running it on the empty database was successful, so there aren't any simple syntax errors :)   
	const GET_ALL_RESERVATIONS_BY_USER = 
		'SELECT
			reservation_series.*
		FROM
			reservation_users JOIN reservation_series
		WHERE
			(@userid = reservation_users.user_id AND reservation_users.series_id = reservation_series.series_id)';

	const ADD_ACCESSORY =
		'INSERT INTO
			accessories (accessory_name, accessory_quantity)
		VALUES (@accessoryname, @quantity)';
	
	const ADD_GROUP =
		'INSERT INTO
			groups (name)
		VALUES (@groupname)';
	
	const ADD_GROUP_RESOURCE_PERMISSION =
		'INSERT INTO
 			group_resource_permissions (group_id, resource_id)
		VALUES (@groupid, @resourceid)';

	const ADD_GROUP_ROLE =
		'INSERT INTO
			group_roles (group_id, role_id)
		VALUES (@groupid, @roleid)';
	
	const ADD_LAYOUT = 
		'INSERT INTO 
			layouts (timezone)
		VALUES (@timezone)';
	
	const ADD_LAYOUT_TIME = 
		'INSERT INTO
			time_blocks (layout_id, start_time, end_time, availability_code, label)
		VALUES (@layoutid, @startTime, @endTime, @periodType, @label)';

	const ADD_QUOTA =
		'INSERT INTO
			quotas (quota_limit, unit, duration, resource_id, group_id, schedule_id)
		VALUES (@limit, @unit, @duration, @resourceid, @groupid, @scheduleid)';
	
	const ADD_RESERVATION = 
		'INSERT INTO 
			reservation_instances (start_date, end_date, reference_number, series_id)
		VALUES (@startDate, @endDate, @referenceNumber, @seriesid)';

	const ADD_RESERVATION_ACCESSORY =
		'INSERT INTO
			reservation_accessories (series_id, accessory_id, quantity)
		VALUES (@seriesid, @accessoryid, @quantity)';
	
	const ADD_RESERVATION_RESOURCE =
		'INSERT INTO
			reservation_resources (series_id, resource_id, resource_level_id)
		VALUES (@seriesid, @resourceid, @resourceLevelId)';	
	
	const ADD_RESERVATION_SERIES = 
		'INSERT INTO 
			reservation_series (date_created, title, description, allow_participation, allow_anon_participation, repeat_type, repeat_options, type_id, status_id, owner_id)
		VALUES (@dateCreated, @title, @description, false, false, @repeatType, @repeatOptions, @typeid, @statusid, @userid)';
	
	const ADD_RESERVATION_USER  = 
		'INSERT INTO
			reservation_users (reservation_instance_id, user_id, reservation_user_level)
		VALUES (@reservationid, @userid, @levelid)';

	const ADD_SCHEDULE = 
		'INSERT INTO
			schedules (name, isdefault, weekdaystart, daysvisible, layout_id)
		VALUES (@scheduleName, @scheduleIsDefault, @scheduleWeekdayStart, @scheduleDaysVisible, @layoutid)';

	const ADD_USER_GROUP =
		'INSERT INTO
			user_groups (user_id, group_id)
		VALUES (@userid, @groupid)';
	
	const ADD_USER_RESOURCE_PERMISSION =
		'INSERT INTO
			user_resource_permissions (user_id, resource_id)
		VALUES (@userid, @resourceid)';
	
	const AUTO_ASSIGN_PERMISSIONS = 
		'INSERT INTO 
			user_resource_permissions (user_id, resource_id) 
		SELECT 
			@userid as user_id, resource_id 
		FROM 
			resources
		WHERE 
			autoassign=1';
	
	const CHECK_EMAIL = 
		'SELECT user_id 
		FROM users
		WHERE email = @email';
		
	const CHECK_USERNAME = 
		'SELECT user_id 
		FROM users
		WHERE username = @username';
		
	const CHECK_USER_EXISTANCE = 
		'SELECT user_id 
		FROM users
		WHERE (username = @username OR email = @email)';
		
	const COOKIE_LOGIN = 
		'SELECT user_id, lastlogin, email 
		FROM users 
		WHERE user_id = @userid';

	const DELETE_ACCESSORY =
		'DELETE FROM accessories WHERE accessory_id = @accessoryid';
	
	const DELETE_GROUP =
		'DELETE FROM groups	WHERE group_id = @groupid';

	const DELETE_GROUP_RESOURCE_PERMISSION =
		'DELETE	FROM group_resource_permissions WHERE group_id = @groupid AND resource_id = @resourceid';

	const DELETE_GROUP_ROLE =
		'DELETE FROM group_roles WHERE group_id = @groupid AND role_id = @roleid';
	
	const DELETE_QUOTA =
		'DELETE	FROM quotas	WHERE quota_id = @quotaid';

	const DELETE_RESOURCE_COMMAND = 
		'DELETE FROM resources WHERE resource_id = @resourceid';
	
	const DELETE_RESOURCE_RESERVATIONS_COMMAND = 
		'DELETE s.* 
		FROM reservation_series s 
		INNER JOIN reservation_resources rs ON s.series_id = rs.series_id 
		WHERE rs.resource_id = @resourceid';
	
	const DELETE_SERIES =
		'DELETE FROM reservation_series	WHERE series_id = @seriesid';

	const DELETE_USER =
		'DELETE FROM users	WHERE user_id = @userid';
	
	const DELETE_USER_GROUP =
		'DELETE	FROM user_groups WHERE user_id = @userid AND group_id = @groupid';
	
	const DELETE_USER_RESOURCE_PERMISSION =
		'DELETE	FROM user_resource_permissions WHERE user_id = @userid AND resource_id = @resourceid';
	
	const LOGIN_USER = 
		'SELECT user_id, email, fname, lname, timezone, lastlogin, homepageid
		FROM users 
		WHERE (username = @username OR email = @username)';

	const GET_ACCESSORY_BY_ID =
		'SELECT * FROM accessories WHERE accessory_id = @accessoryid';

	const GET_ACCESSORY_LIST =
		'SELECT *, rs.status_id as status_id
		FROM reservation_instances ri
		INNER JOIN reservation_series rs ON ri.series_id = rs.series_id
		INNER JOIN reservation_accessories ar ON ar.series_id = rs.series_id
		INNER JOIN accessories a on ar.accessory_id = a.accessory_id
		WHERE
			(
				(ri.start_date >= @startDate AND ri.start_date <= @endDate)
				OR
				(ri.end_date >= @startDate AND ri.end_date <= @endDate)
				OR
				(ri.start_date <= @startDate AND ri.end_date >= @endDate)
			) AND
			rs.status_id <> 2
		ORDER BY
			ri.start_date ASC';
	
	const GET_ALL_ACCESSORIES =
		'SELECT * FROM accessories ORDER BY accessory_name';
	
	const GET_ALL_GROUPS =
		'SELECT g.*, admin_group.name as admin_group_name
		FROM groups g
		LEFT JOIN groups admin_group ON g.admin_group_id = admin_group.group_id
		ORDER BY g.name';

	const GET_ALL_GROUPS_BY_ROLE =
		'SELECT g.*
		FROM groups g
		INNER JOIN group_roles gr ON g.group_id = gr.group_id
		INNER JOIN roles r ON r.role_id = gr.role_id
		WHERE r.role_level = @role_level
		ORDER BY g.name';
	
	const GET_ALL_GROUP_USERS =
		'SELECT *
		FROM users u
		INNER JOIN user_groups ug ON u.user_id = ug.user_id
		INNER JOIN groups g ON g.group_id = ug.group_id
		WHERE g.group_id IN (@groupid)
		ORDER BY u.lname, u.fname';

	const GET_ALL_QUOTAS =
		'SELECT q.*, r.name as resource_name, g.name as group_name, s.name as schedule_name
		FROM quotas q
		LEFT JOIN resources r ON r.resource_id = q.resource_id
		LEFT JOIN groups g ON g.group_id = q.group_id
		LEFT JOIN schedules s ON s.schedule_id = q.schedule_id';

	const GET_ALL_RESOURCES = 
		'SELECT * 
		FROM resources r';
	
	const GET_ALL_SCHEDULES = 
		'SELECT * 
		FROM schedules s
		INNER JOIN layouts l ON s.layout_id = l.layout_id';
	
	const GET_ALL_USERS_BY_STATUS = 
		'SELECT *
		FROM users
		WHERE (0 = @user_statusid OR status_id = @user_statusid)';
		
	const GET_DASHBOARD_ANNOUNCEMENTS =
		'SELECT announcement_text 
		FROM announcements
		WHERE (start_datetime <= @current_date AND end_datetime >= @current_date)
		ORDER BY priority DESC';

	const GET_GROUP_BY_ID =
		'SELECT *
		FROM groups
		WHERE group_id = @groupid';

	const GET_GROUP_RESOURCE_PERMISSIONS =
		'SELECT *
		FROM group_resource_permissions
		WHERE group_id = @groupid';

	const GET_GROUP_ROLES =
		'SELECT r.*
		FROM roles r
		INNER JOIN group_roles gr ON r.role_id = gr.role_id
		WHERE gr.group_id = @groupid';
	
	const GET_RESOURCE_BY_ID = 
		'SELECT *
		FROM resources r
		WHERE r.resource_id = @resourceid';
	
	const GET_RESERVATION_BY_ID =
		'SELECT *
		FROM reservation_instances r
		INNER JOIN reservation_series rs ON r.series_id = rs.series_id
		WHERE
			r.reservation_instance_id = @reservationid AND
			status_id <> 2';

	const GET_RESERVATION_BY_REFERENCE_NUMBER =
		'SELECT *
		FROM reservation_instances r
		INNER JOIN reservation_series rs ON r.series_id = rs.series_id
		WHERE
			reference_number = @referenceNumber AND
			status_id <> 2';
	
	const GET_RESERVATION_FOR_EDITING = 
		'SELECT ri.*, rs.*, rr.*, u.user_id, u.fname, u.lname, u.email, r.schedule_id, r.name, rs.status_id as status_id
		FROM reservation_instances ri
		INNER JOIN reservation_series rs ON rs.series_id = ri.series_id
		INNER JOIN users u ON u.user_id = rs.owner_id
		INNER JOIN reservation_resources rr ON rs.series_id = rr.series_id AND rr.resource_level_id = @resourceLevelId
		INNER JOIN resources r ON r.resource_id = rr.resource_id
		WHERE 
			reference_number = @referenceNumber AND
			rs.status_id <> 2';

	const GET_RESERVATION_LIST_FULL =
		'SELECT *, rs.date_created as date_created, rs.last_modified as last_modified, rs.status_id as status_id
		FROM reservation_instances ri
		INNER JOIN reservation_series rs ON rs.series_id = ri.series_id
		INNER JOIN reservation_resources rr ON rs.series_id = rr.series_id AND rr.resource_level_id = 1
		INNER JOIN reservation_users ru ON ru.reservation_instance_id = ri.reservation_instance_id
		INNER JOIN users ON users.user_id = rs.owner_id
		INNER JOIN resources on rr.resource_id = resources.resource_id
		WHERE rs.status_id <> 2 AND ru.reservation_user_level = @levelid
		ORDER BY ri.start_date ASC';
	
	const GET_RESERVATION_LIST = 
		'SELECT *, rs.status_id as status_id
		FROM reservation_instances ri
		INNER JOIN reservation_series rs ON ri.series_id = rs.series_id
		INNER JOIN reservation_resources rr ON rr.series_id = rs.series_id
		INNER JOIN reservation_users ru ON ru.reservation_instance_id = ri.reservation_instance_id
		INNER JOIN resources r on rr.resource_id = r.resource_id
		INNER JOIN users u ON u.user_id = ru.user_id
		WHERE 
			(
				(ri.start_date >= @startDate AND ri.start_date <= @endDate)
				OR
				(ri.end_date >= @startDate AND ri.end_date <= @endDate)
				OR
				(ri.start_date <= @startDate AND ri.end_date >= @endDate)
			) AND
			(@userid = -1 OR ru.user_id = @userid) AND
			(@levelid = 0 OR ru.reservation_user_level = @levelid) AND
			rs.status_id <> 2
		ORDER BY 
			ri.start_date ASC';

	const GET_RESERVATION_ACCESSORIES =
		'SELECT *
		FROM reservation_accessories ra
		INNER JOIN accessories a ON ra.accessory_id = a.accessory_id
		WHERE ra.series_id = @seriesid';
	
	const GET_RESERVATION_PARTICIPANTS =
		'SELECT
			u.user_id, 
			u.fname,
			u.lname,
			u.email,
			ru.*
		FROM reservation_users ru
		INNER JOIN users u ON ru.user_id = u.user_id
		WHERE reservation_instance_id = @reservationid';
	
	const GET_RESERVATION_RESOURCES =
		'SELECT r.*, rr.resource_level_id
		FROM reservation_resources rr
		INNER JOIN resources r ON rr.resource_id = r.resource_id
		WHERE rr.series_id = @seriesid';
	
	const GET_RESERVATION_SERIES_INSTANCES =
		'SELECT *
		FROM reservation_instances
		WHERE series_id = @seriesid';

	const GET_RESERVATION_SERIES_PARTICIPANTS =
		'SELECT ru.*, ri.*
		FROM reservation_users ru
		INNER JOIN reservation_instances ri ON ru.reservation_instance_id = ri.reservation_instance_id
		WHERE series_id = @seriesid';
	
	// TODO: Pass in "Deleted" status ID
	const GET_RESERVATIONS_COMMAND =
	 'SELECT 
		ri.reservation_instance_id,
		ri.start_date,
		ri.end_date,
		r.type_id,
		r.status_id,
		r.description,
		rr.resource_id,
		rr.resource_level_id,
		u.user_id,
		u.fname,
		u.lname,
		ri.series_id,
		ri.reference_number
	FROM reservation_instances ri
	INNER JOIN reservation_series r ON ri.series_id = r.series_id AND r.status_id <> 2
	INNER JOIN reservation_users ru ON ri.reservation_instance_id = ru.reservation_instance_id
	INNER JOIN users u ON ru.user_id = u.user_id
	INNER JOIN reservation_resources rr ON rr.series_id = ri.series_id
	INNER JOIN resources ON resources.resource_id = rr.resource_id
	WHERE
		ru.reservation_user_level = 1 AND
		(@scheduleid = -1 OR resources.schedule_id = @scheduleid) AND
		(@resourceid = -1 OR rr.resource_id = @resourceid) AND
		(
			(ri.start_date >= @startDate AND ri.start_date <= @endDate)
			OR
			(ri.end_date >= @startDate AND ri.end_date <= @endDate)
			OR
			(ri.start_date <= @startDate AND ri.end_date >= @endDate)
		)';

	const GET_SCHEDULE_TIME_BLOCK_GROUPS =
		'SELECT 
			tb.label, 
			tb.end_label, 
			tb.start_time, 
			tb.end_time, 
			tb.availability_code,
			l.timezone
		FROM 
			time_blocks tb, 
			layouts l,
			schedules s
		WHERE 
			l.layout_id = s.layout_id  AND 
			tb.layout_id = l.layout_id AND
			s.schedule_id = @scheduleid 
		ORDER BY tb.start_time';
	
	const GET_SCHEDULE_BY_ID = 
		'SELECT
			*
		FROM
			schedules s
		INNER JOIN
			layouts l ON s.layout_id = l.layout_id
		WHERE
			schedule_id = @scheduleid';
	
	const GET_SCHEDULE_RESOURCES = 
		'SELECT 
			*
		FROM 
			resources r
		WHERE 
			r.schedule_id = @scheduleid AND
			r.isactive = 1';
	
	const GET_USER_BY_ID = 
		'SELECT
			*
		FROM
			users
		WHERE
			user_id = @userid';
	
	const GET_USER_EMAIL_PREFERENCES =
		'SELECT 
			*
		FROM
			user_email_preferences
		WHERE
			user_id = @userid';

	const GET_USER_GROUPS =
		'SELECT g.*, r.role_level
		FROM user_groups ug
		INNER JOIN groups g ON ug.group_id = g.group_id
		LEFT JOIN group_roles gr ON ug.group_id = gr.group_id
		LEFT JOIN roles r ON gr.role_id = r.role_id
		WHERE user_id = @userid AND (@role_level is null OR r.role_level = @role_level)';
	
	const GET_USER_RESOURCE_PERMISSIONS = 
		'SELECT 
			urp.user_id, r.resource_id, r.name
		FROM
			user_resource_permissions urp, resources r
		WHERE
			urp.user_id = @userid AND r.resource_id = urp.resource_id';

	const GET_USER_GROUP_RESOURCE_PERMISSIONS =
		'SELECT
			grp.group_id, r.resource_id, r.name
		FROM
			group_resource_permissions grp, resources r, user_groups ug
		WHERE
			ug.user_id = @userid AND ug.group_id = grp.group_id AND grp.resource_id = r.resource_id';

	const GET_USER_ROLES = 
		'SELECT 
			user_id, user_level 
		FROM 
			roles r
		INNER JOIN
			user_roles ur on r.role_id = ur.role_id
		WHERE 
			ur.user_id = @userid';
	
	const MIGRATE_PASSWORD = 
		'UPDATE 
			users 
		SET 
			password = @password, legacypassword = null, salt = @salt 
		WHERE 
			user_id = @userid';

	const REGISTER_FORM_SETTINGS = 
		'INSERT INTO
			registration_form_settings (fname_setting, lname_setting, username_setting, email_setting, password_setting, 
			organization_setting, group_setting, position_setting, address_setting, phone_setting, homepage_setting, timezone_setting)	
		VALUES
			(@fname_setting, @lname_setting, @username_setting, @email_setting, @password_setting, @organization_setting, 
			 @group_setting, @position_setting, @address_setting, @phone_setting, @homepage_setting, @timezone_setting)
		';

	const REGISTER_MINI_USER = 
		'INSERT INTO 
			users (email, password, fname, lname, username, salt, timezone, status_id, role_id)
		VALUES
			(@email, @password, @fname, @lname, @username, @salt, @timezone, @user_statusid, @user_roleid)
		';

	const REGISTER_USER = 
		'INSERT INTO 
			users (email, password, fname, lname, phone, organization, position, username, salt, timezone, language, homepageid, status_id, date_created)
		VALUES
			(@email, @password, @fname, @lname, @phone, @organization, @position, @username, @salt, @timezone, @language, @homepageid, @user_statusid, @dateCreated)';

	const REMOVE_RESERVATION_ACCESSORY =
		'DELETE FROM reservation_accessories WHERE accessory_id = @accessoryid AND series_id = @seriesid';
	
	const REMOVE_RESERVATION_INSTANCE = 
		'DELETE FROM reservation_instances WHERE reference_number = @referenceNumber';

	const REMOVE_RESERVATION_RESOURCE =
		'DELETE FROM reservation_resources WHERE series_id = @seriesid AND resource_id = @resourceid';
	
	const REMOVE_RESERVATION_USER =
		'DELETE FROM reservation_users WHERE reservation_instance_id = @reservationid AND user_id = @userid';

	const ADD_RESOURCE = 
		'INSERT INTO 
			resources (name, location, contact_info, description, notes, isactive, min_duration, min_increment, 
					   max_duration, unit_cost, autoassign, requires_approval, allow_multiday_reservations, 
					   max_participants, min_notice_time, max_notice_time, schedule_id)
		VALUES
			(@resource_name, @location, @contact_info, @description, @resource_notes, @isactive, @min_duration, @min_increment, 
			 @max_duration, @unit_cost, @autoassign, @requires_approval, @allow_multiday_reservations,
		     @max_participants, @min_notice_time, @max_notice_time, @scheduleid)';
	
	const SET_DEFAULT_SCHEDULE = 
		'UPDATE schedules
		SET isdefault = 0
		WHERE schedule_id <> @scheduleid';

	const UPDATE_ACCESSORY =
		'UPDATE accessories
		SET accessory_name = @accessoryname, accessory_quantity = @quantity
		WHERE accessory_id = @accessoryid';
	
	const UPDATE_GROUP =
		'UPDATE groups
		SET name = @groupname, admin_group_id = @admin_group_id
		WHERE group_id = @groupid';

	const UPDATE_LOGINTIME = 
		'UPDATE users
		SET lastlogin = @lastlogin
		WHERE user_id = @userid';

	const UPDATE_FUTURE_RESERVATION_INSTANCES =
		'UPDATE reservation_instances
		SET series_id = @seriesid
		WHERE
			series_id = @currentSeriesId AND
			start_date >= (SELECT start_date FROM reservation_instances WHERE reference_number = @referenceNumber)';
	
	const UPDATE_RESERVATION_INSTANCE = 
		'UPDATE reservation_instances
		SET
			series_id = @seriesid,
			start_date = @startDate,
			end_date = @endDate
		WHERE
			reference_number = @referenceNumber';
	
	const UPDATE_RESERVATION_SERIES = 
		'UPDATE
			reservation_series
		SET
			last_modified = @dateModified, 
			title = @title, 
			description = @description, 
			repeat_type = @repeatType, 
			repeat_options = @repeatOptions,
			status_id = @statusid
		WHERE
			series_id = @seriesid';
	
	const UPDATE_RESOURCE = 
		'UPDATE
			resources
		SET
			name = @resource_name,
			location = @location,
			contact_info = @contact_info,
			description = @description,
			notes = @resource_notes,
			min_duration = @min_duration,
			max_duration = @max_duration,
			autoassign = @autoassign,
			requires_approval = @requires_approval,
			allow_multiday_reservations = @allow_multiday_reservations,
			max_participants = @max_participants,
			min_notice_time = @min_notice_time,
			max_notice_time = @max_notice_time,
			image_name = @imageName,
			isactive = @isActive,
			schedule_id = @scheduleid
		WHERE
			resource_id = @resourceid';
	
	const UPDATE_SCHEDULE =
		'UPDATE
			schedules
		SET
			name = @scheduleName,
			isdefault = @scheduleIsDefault,
			weekdaystart = @scheduleWeekdayStart,
			daysvisible = @scheduleDaysVisible
		WHERE
			schedule_id = @scheduleid';
	
	const UPDATE_SCHEDULE_LAYOUT = 
		'UPDATE
			schedules
		SET
			layout_id = @layoutid
		WHERE
			schedule_id = @scheduleid';

	const UPDATE_USER =
		'UPDATE
			users
		SET
			status_id = @user_statusid,
			password = @password,
			salt = @salt,
			fname = @fname,
			lname = @lname,
			email = @email,
			username = @username,
			homepageId = @homepageid,
			last_modified = @dateModified,
			timezone = @timezone
		WHERE
			user_id = @userid';

	const UPDATE_USER_ATTRIBUTES =
		'UPDATE
			users
		SET
			phone = @phone,
			position = @position,
			organization = @organization
		WHERE
			user_id = @userid';
	
	const UPDATE_USER_BY_USERNAME = 
		'UPDATE 
			users 
		SET 
			email = @email,
			password = @password,
			salt = @salt,
			fname = @fname,
			lname = @lname,
			phone = @phone,
			organization = @organization,
			position = @position
		WHERE 
			username = @username';
	
	const VALIDATE_USER = 
		'SELECT user_id, password, salt, legacypassword
		FROM users 
		WHERE (username = @username OR email = @username)';
}

class ColumnNames
{
	private function __construct()
	{}
	
	// USERS //
	const USER_ID = 'user_id';	
	const USERNAME = 'username';	
	const EMAIL = 'email';
	const FIRST_NAME = 'fname';
	const LAST_NAME = 'lname';	
	const PASSWORD = 'password';
	const OLD_PASSWORD = 'legacypassword';
	const USER_CREATED = 'date_created';
	const USER_MODIFIED = 'last_modified';
	const USER_STATUS_ID = 'status_id';
	const HOMEPAGE_ID = 'homepageid';
	const LAST_LOGIN = 'lastlogin';
	const TIMEZONE_NAME = 'timezone';
	const LANGUAGE_CODE = 'language';
	const SALT = 'salt';
	const PHONE_NUMBER = 'phone';
	const ORGANIZATION = 'organization';
	const POSITION = 'position';

	// USER_ADDRESSES //
	const ADDRESS_ID = 'address_id';
	
	// ROLES //
	const ROLE_LEVEL = 'role_level';
	const ROLE_ID = 'role_id';
	const ROLE_NAME = 'name';
	
	// ANNOUNCEMENTS //
	const ANNOUNCEMENT_TEXT = 'announcement_text';
	
	// GROUPS //
	const GROUP_ID = 'group_id';
	const GROUP_NAME = 'name';
	const GROUP_ADMIN_GROUP_ID = 'admin_group_id';
	const GROUP_ADMIN_GROUP_NAME = 'admin_group_name';
	
	// TIME BLOCKS //
	const BLOCK_LABEL = 'label';
	const BLOCK_LABEL_END = 'end_label';
	const BLOCK_CODE = 'availability_code';
	const BLOCK_TIMEZONE = 'timezone';

	// TIME BLOCK USES //
	const BLOCK_START = 'start_time';
	const BLOCK_END = 'end_time';	

	// RESERVATION SERIES //	
	const RESERVATION_USER = 'user_id';
	const RESERVATION_GROUP = 'group_id';
	const RESERVATION_CREATED = 'date_created';
	const RESERVATION_MODIFIED = 'last_modified';
	const RESERVATION_TYPE = 'type_id';
	const RESERVATION_TITLE = 'title';
	const RESERVATION_DESCRIPTION = 'description';
	const RESERVATION_COST = 'total_cost';
	const RESERVATION_PARENT_ID = 'parent_id';	
	const REPEAT_TYPE = 'repeat_type';
	const REPEAT_OPTIONS = 'repeat_options';
	const RESERVATION_STATUS = 'status_id';
	const SERIES_ID = 'series_id';
	const RESERVATION_OWNER = 'owner_id';

	// RESERVATION_INSTANCE //
	const RESERVATION_INSTANCE_ID = 'reservation_instance_id';
	const RESERVATION_START = 'start_date';
	const RESERVATION_END = 'end_date';
	const REFERENCE_NUMBER = 'reference_number';
	
	// RESERVATION_USER //
	const RESERVATION_USER_LEVEL = 'reservation_user_level';
	
	// RESOURCE //
	const RESOURCE_ID = 'resource_id';
	const RESOURCE_NAME = 'name';
	const RESOURCE_LOCATION = 'location';
	const RESOURCE_CONTACT = 'contact_info';
	const RESOURCE_DESCRIPTION = 'description';
	const RESOURCE_NOTES = 'notes';
	const RESOURCE_MINDURATION = 'min_duration';
	const RESOURCE_MININCREMENT = 'min_increment';
	const RESOURCE_MAXDURATION = 'max_duration';
	const RESOURCE_COST = 'unit_cost';
	const RESOURCE_AUTOASSIGN = 'autoassign';
	const RESOURCE_REQUIRES_APPROVAL = 'requires_approval';
	const RESOURCE_ALLOW_MULTIDAY = 'allow_multiday_reservations';
	const RESOURCE_MAX_PARTICIPANTS = 'max_participants';
	const RESOURCE_MINNOTICE = 'min_notice_time';
	const RESOURCE_MAXNOTICE = 'max_notice_time';
	const RESOURCE_IMAGE_NAME = 'image_name';
	const RESOURCE_ISACTIVE = 'isactive';

	// RESERVATION RESOURCES
	const RESOURCE_LEVEL_ID = 'resource_level_id';
	
	// SCHEDULE //
	const SCHEDULE_ID = 'schedule_id';
	const SCHEDULE_NAME = 'name';
	const SCHEDULE_DEFAULT = 'isdefault';
	const SCHEDULE_WEEKDAY_START = 'weekdaystart';
	const SCHEDULE_DAYS_VISIBLE = 'daysvisible';
	const LAYOUT_ID = 'layout_id';
	
	// EMAIL PREFERENCES //
	const EVENT_CATEGORY = 'event_category';
	const EVENT_TYPE= 'event_type';
	
	const REPEAT_START = 'repeat_start';
	const REPEAT_END = 'repeat_end';

	// QUOTAS //
	const QUOTA_ID = 'quota_id';
	const QUOTA_LIMIT = 'quota_limit';
	const QUOTA_UNIT = 'unit';
	const QUOTA_DURATION = 'duration';

	// ACCESSORIES //
	const ACCESSORY_ID = 'accessory_id';
	const ACCESSORY_NAME = 'accessory_name';
	const ACCESSORY_QUANTITY = 'accessory_quantity';

	// RESERVATION ACCESSORY //
	const QUANTITY = 'quantity';

	// dynamic
	const TOTAL = 'total';

}

class TableNames
{
	const RESERVATION_SERIES_ALIAS = 'rs';
	const RESOURCES = 'resources';
	const SCHEDULES = 'schedules';
	const USERS = 'users';
}
?>