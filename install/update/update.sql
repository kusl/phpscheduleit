USE phpscheduleIt;

# Add support for maximum participants
ALTER TABLE resources ADD COLUMN max_participants INTEGER;

# Add support for uninvited participation
ALTER TABLE reservations ADD COLUMN allow_participation SMALLINT(1) NOT NULL DEFAULT 0;

# Add support for anonymous participation
ALTER TABLE reservations ADD COLUMN allow_anon_participation SMALLINT(1) NOT NULL DEFAULT 0;

# Create anonymous user table #
CREATE TABLE anonymous_users (
  memberid CHAR(16) NOT NULL PRIMARY KEY,
  email VARCHAR(75) NOT NULL,
  fname VARCHAR(30) NOT NULL,
  lname VARCHAR(30) NOT NULL
  );

CREATE INDEX anonymous_users_memberid ON anonymous_users (memberid);

# Create additional_resources table #
CREATE TABLE additional_resources (
  resourceid CHAR(16) NOT NULL PRIMARY KEY,
  name VARCHAR(75) NOT NULL,
  status CHAR(1) NOT NULL DEFAULT 'a',
  number_available INTEGER NOT NULL DEFAULT -1
  );

# Create indexes ON additional_resources table #
CREATE INDEX ar_resourceid ON additional_resources (resourceid);
CREATE INDEX ar_name ON additional_resources (name);
CREATE INDEX ar_status ON additional_resources (status);

# Create reservation_resources table #
CREATE TABLE reservation_resources (
  resid CHAR(16) NOT NULL,
  resourceid CHAR(16) NOT NULL,
  owner SMALLINT(1),
  PRIMARY KEY(resid, resourceid)
  );

CREATE INDEX resresources_resid ON reservation_resources (resid);
CREATE INDEX resresources_resourceid ON reservation_resources (resourceid);
CREATE INDEX resresources_owner ON reservation_resources (owner);

CREATE TABLE mutex(
  i INTEGER NOT NULL PRIMARY KEY
  );

INSERT INTO mutex VALUES (0);
INSERT INTO mutex VALUES (1);

# PostgreSQL support #
ALTER TABLE reservations CHANGE startTime starttime INTEGER NOT NULL;
ALTER TABLE reservations CHANGE endTime endtime INTEGER NOT NULL;
ALTER TABLE resources CHANGE minRes minres INTEGER NOT NULL;
ALTER TABLE resources CHANGE maxRes maxres INTEGER NOT NULL;
ALTER TABLE resources CHANGE autoAssign autoassign SMALLINT(1);

ALTER TABLE schedules CHANGE scheduleTitle scheduletitle CHAR(75);
ALTER TABLE schedules CHANGE dayStart daystart INTEGER NOT NULL;
ALTER TABLE schedules CHANGE dayEnd dayend INTEGER NOT NULL;
ALTER TABLE schedules CHANGE timeSpan timespan INTEGER NOT NULL;
ALTER TABLE schedules CHANGE timeFormat timeformat INTEGER NOT NULL;
ALTER TABLE schedules CHANGE weekDayStart weekdaystart INTEGER NOT NULL;
ALTER TABLE schedules CHANGE viewDays viewdays INTEGER NOT NULL;
ALTER TABLE schedules CHANGE usePermissions usepermissions SMALLINT(1);
ALTER TABLE schedules CHANGE isHidden ishidden SMALLINT(1);
ALTER TABLE schedules CHANGE showSummary showsummary SMALLINT(1);
ALTER TABLE schedules CHANGE adminEmail adminemail CHAR(75);
ALTER TABLE schedules CHANGE isDefault isdefault SMALLINT(1);
ALTER TABLE schedules CHANGE dayOffset dayoffset INTEGER;

# Add support for groups #
CREATE TABLE groups (
  groupid CHAR(16) NOT NULL PRIMARY KEY,
  group_name VARCHAR(50) NOT NULL,
  group_admin CHAR(16)
  );

CREATE INDEX groups_groupadmin ON groups (group_admin);

CREATE TABLE user_groups (
  groupid CHAR(16) NOT NULL,
  memberid CHAR(50) NOT NULL,
  is_admin SMALLINT(1) NOT NULL DEFAULT 0
  );

CREATE INDEX usergroups_groupid ON user_groups (groupid);
CREATE INDEX usergroups_memberid ON user_groups (memberid);
CREATE INDEX usergroups_is_admin ON user_groups (is_admin);

# Create reminders table #
CREATE TABLE reminders (
  reminderid CHAR(16) NOT NULL PRIMARY KEY,
  memberid CHAR(16) NOT NULL,
  resid CHAR(16) NOT NULL,
  reminder_date INTEGER NOT NULL
  );

CREATE INDEX reminders_date ON reminders (reminder_date);
CREATE INDEX reminders_memberid ON reminders (memberid);
CREATE INDEX reminders_resid ON reminders (resid);

# Store lang for RSS and email reminders #
ALTER TABLE login ADD COLUMN lang VARCHAR(5);