<?php
/**
* Scheduler class
* This file contians the scheduler application where
*  users have an interface for reserving resources,
*  viewing other reservations and modifying their own.
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author David Poole <David.Poole@fccc.edu>
* @author Richard Cantzler <rmcii@users.sourceforge.net>
* @version 03-30-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');
/**
* Include ScheduleDB class
*/
include_once('db/ScheduleDB.class.php');
/**
* Include Calendar
*/
include_once('Calendar.class.php');
/**
* Include Schedule template files
*/
include_once(BASE_DIR . '/templates/schedule.template.php');

class Schedule {

    var $_date        = array();
    var $machids    = array();
    var $res        = array();
    var $blackouts    = array();
    var $db;
    var $user;
    var $scheduleType;
    var $scheduleid;
    var $viewdays;
    var $startDay;
    var $endDay;
    var $timespan;
    var $weekStartDay;
    var $showsummary;
    var $dayoffset;
    var $title;
    var $admin;
    var $isValid = false;
    
    /**
    * Sets up initial variable values
    * @param constant $scheduleType type of schedule to print out
    */
    function Schedule($scheduleid, $scheduleType = ALL) {
        $this->scheduleid = $scheduleid;
        $this->scheduleType = $scheduleType;                // Set schedule type
        
        $this->db = new ScheduleDB($scheduleid, $scheduleType);            // Set database class
        
        if ($scheduleid == null) {
            $this->scheduleid = $this->db->get_default_id();
            $this->db->scheduleid = $this->scheduleid;    
        }
        
        $this->isValid = $this->db->check_scheduleid($this->scheduleid);

        if ($this->isValid) {
            $data = $this->db->get_schedule_data($this->scheduleid);
            $this->viewdays = $data['viewdays'];
            $this->startDay = $data['daystart'];
            $this->endDay     = $data['dayend'];
            $this->timespan    = $data['timespan'];
            $this->weekdaystart = $data['weekdaystart'];
            $this->showsummary = $data['showsummary'];
            $this->title    = $data['scheduletitle'];
            $this->admin    = $data['adminemail'];
            $this->dayoffset= $data['dayoffset'];
            
            if ($scheduleType == READ_ONLY) {
                $this->user = new User();
			}
            else {
                $this->user = new User(Auth::getCurrentID());    // Set User class
			}
            
            $this->_date = $this->get_date_vars();        // Get all date info we need
            $this->machids = $this->db->get_mach_ids($this->scheduleid);    // Get all resource info
            $machids = array();
            if($this->machids !== false) {
                foreach($this->machids as $mach) {
                    $machids[] = $mach['machid'];
                }
            }    
            $this->res = $this->db->get_all_res($this->_date['firstDayTs'], $this->_date['lastDayTs'], $machids, $this->user->get_id());
        }
    }
    
    /**
    * Prints the actual schedule by calling all necessary class
    *  and schedule template functions
    * @param none
    */
    function print_schedule() {
        global $conf;

        print_date_span($this->_date, $this->title);
        
        print_schedule_list($this->db->get_schedule_list(), $this->scheduleid);
        
        $this->print_calendars();
        
        if ($this->scheduleType == ALL)
            print_color_key();
        
        // Break first day we are viewing into an array of date pieces
        $temp_date = getdate($this->_date['firstDayTs']);
        $hour_header = get_hour_header($this->get_time_array(), $this->startDay, $this->endDay, $this->timespan);    // Get the headers (same for all tables)

        // Repeat this for each day we need to show
        for ($dayCount = 0; $dayCount < $this->viewdays; $dayCount++) {
            // Timestamp for whatever day we are currently viewing
            $this->_date['current'] = mktime(0,0,0, $temp_date['mon'], $temp_date['mday'] + $dayCount, $temp_date['year']);
            start_day_table($this->get_display_date(), $hour_header);    // Start the table for this day
            $this->print_reservations();    // Print reservations for this day
            end_day_table();                // End the table for this day
        }
        print_summary_div();

    }
    
    /**
    * Prints out 3 calendars (prev month, this month, next month) at the top of the schedule
    * @param none
    */
    function print_calendars() {
        $prev = new Calendar(false, $this->_date['month'] -1, $this->_date['year']);
        $curr = new Calendar(false, $this->_date['month'], $this->_date['year']);
        $next = new Calendar(false, $this->_date['month'] + 1, $this->_date['year']);
        $prev->scheduleid = $curr->scheduleid = $next->scheduleid = $this->scheduleid;
        
        print_calendars($prev, $curr, $next);
    }
    
    /**
    * Print out the reservations for each resource on each day
    * @param none
    */
    function print_reservations() {
        global $conf;
        
        if (!$this->machids)
            return;
        $current_date = $this->_date['current'];        // Store current_date so we dont have to access the array every time
        
        // Repeat this whole process for each resource in the database
        for ($count = 0; $count < count($this->machids); $count++) {
            $prevTime = $this->startDay;        // Previous time holder
            $totCol = intval(($this->endDay - $this->startDay) / $this->timespan);    // Total columns holder
            
            // Store info about this current resource in local vars
            $id = $this->machids[$count]['machid'];
            $name = $this->machids[$count]['name'];
            $status = $this->machids[$count]['status'];
            $approval = $this->machids[$count]['approval'];
            
            $shown = false;        // Default resource visiblilty to not shown
            
            // If the date has not passed, resource is active and user has permission,
            //  or the user is the admin allow reservations to be made
            if ( $current_date >= mktime(0,0,0, date('m'), date('d') + $this->dayoffset)
            && ( ($status == 'a' && $this->user->has_perm($id)) || Auth::isAdmin()))
                $shown = true;
            
            $color = 'cellColor' . ($count%2);
            print_name_cell($current_date, $id, $name, $shown, $this->scheduleType == BLACKOUT_ONLY, $this->scheduleid, $approval, $color);
            
            $index = $id;
            if (isset($this->res[$index])) {
                for ($i = 0; $i < count($this->res[$index]); $i++) {
                    $rs = $this->res[$index][$i];
                    // If it doesnt start sometime today, end sometime today, or surround today, just skip over it
                    if (
                        !(($rs['start_date'] >= $current_date && $rs['start_date'] <= $current_date)
                        || ($rs['end_date'] >= $current_date && $rs['end_date'] <= $current_date)
                        || ($rs['start_date'] <= $current_date && $rs['end_date'] >= $current_date))
                       ) {
                        continue;
                    }
                    
                    // Just skip the reservation if the ending date/time is todays start time
                    if ($rs['end_date'] == $current_date && $rs['endtime'] == $this->startDay) { continue; }

                    // If the reservation starts before or ends after todays date, just pretend it ends today so it shows correctly
                    if ($rs['start_date'] < $current_date) {
                        $rs['starttime'] = $this->startDay;
                    }
                    if ($rs['end_date'] > $current_date) {
                        $rs['endtime'] = $this->endDay;
                    }
                    
                    // Print out row of reservations
                    $thisStart = $rs['starttime'];
                    $thisEnd = $rs['endtime'];
                    
                    if ($thisStart < $this->startDay && $thisEnd > $this->startDay)
                        $thisStart = $this->startDay;
                    else if ($thisStart < $this->startDay && $thisEnd <= $this->startDay)
                        continue;    // Ignore reservation, its off the schedule
                    
                    if ($thisStart < $this->endDay && $thisEnd > $this->endDay)
                        $thisEnd = $this->endDay;
                    else if ($thisStart >= $this->endDay && $thisEnd > $this->startDay)
                        continue;    // Ignore reservation, its off the schedule
                                            
                    $colspan = intval(($thisEnd - $thisStart) / $this->timespan);
                    
                    $this->move_to_starting_col($rs, $thisStart, $prevTime, $this->timespan, $id, $current_date, $shown, $color);        
                    
                    if ($rs['is_blackout'] == 1)
                        $this->write_blackout($rs, $colspan);
                    else
                        $this->write_reservation($rs, $colspan);
                                
                    // Set prevTime to this reservation's ending time
                    $prevTime = $thisEnd;
                }
            }
            
            $this->finish_row($this->endDay, $prevTime, $this->timespan, $id, $current_date, $shown, $color);
        }
    }
    
    /**
    * Return the formatted and timezone adjusted date
    * @param int $ts time stamp for date to format
    * @return formatted date
    */
    function get_display_date() {
		return CmnFns::formatReservationDate($this->_date['current'], $this->startDay, null, 'schedule_daily');
    }
    
    /**
    * Sets up all date variables needed in the scheduler
    * @param none
    * @return array of all needed date variables
    */
    function get_date_vars() {
        $default = false;
        
        $dv = array();
        
        // For Back, Current, Next Week clicked links
        //    pull values into an array month,day,year
        $indate = (isset($_GET['date'])) ? explode('-',$_GET['date']) : '';
        
        // Set date values if a date has been passed in (these will always be set to a valid date)
        if ( !empty($indate) || isset($_POST['jumpForm']) ) {
            $dv['month']  = (isset($_POST['jumpMonth'])) ? date('m', mktime(0,0,0,$_POST['jumpMonth'],1)) : date('m', mktime(0,0,0,$indate[0],1));
            $dv['day']    = (isset($_POST['jumpDay'])) ? date('d', mktime(0,0,0,$dv['month'], $_POST['jumpDay'])) : date('d', mktime(0,0,0, $dv['month'], $indate[1]));
            $dv['year']   = (isset($_POST['jumpYear'])) ? date('Y', mktime(0,0,0, $dv['month'], $dv['day'], $_POST['jumpYear'])) : date('Y', mktime(0,0,0, $dv['month'], $dv['day'], $indate[2]));
        }
        else {   
            // Else set values to user defined starting day of week
            $d = getdate();
            $dv['month']  = $d['mon'];
            $dv['day']    = $d['mday'];
            $dv['year']   = $d['year'];
            $default = true;
        }
        
        // Make timestamp for today's date
        $dv['todayTs'] = mktime(0,0,0, $dv['month'], $dv['day'], $dv['year']);
        
        // Get proper starting day
        $dayNo = date('w', $dv['todayTs']);
        
        if ($default)
            $dv['day'] = $dv['day'] - ($dayNo - $this->weekdaystart);        // Make sure week starts on correct day
        
        // If default view and first day has passed, move up one week
        //if ($default && (date(mktime(0,0,0,$dv['month'], $dv['day'] + $this->viewdays, $dv['year'])) <= mktime(0,0,0)))
        //    $dv['day'] += 7;
                
        $dv['firstDayTs'] = mktime(0,0,0, $dv['month'], $dv['day'], $dv['year']);
		$date_parts = getdate();
		
        // Make timestamp for last date
        // by adding # of days to view minus the day of the week to $day
        $dv['lastDayTs'] = mktime(0,0,0, $dv['month'], ($dv['day'] + $this->viewdays - 1), $dv['year']);
        $dv['current'] = $dv['firstDayTs'];

        return $dv;        
    }
    
    
    /**
    * Get associative array of available times and rowspans
    * This function computes and returns an associative array
    * containing a timezone adjusted time value and it's rowspan value as
    * $array[time] => rowspan
    * @param none
    * @return array of time value and it's associated rowspan value
    * @global $conf
    * @see CmnFns::formatTime()
    */
    function get_time_array() {
        global $conf;
        
        $startDay = $startingTime = $this->startDay;
        $endDay   = $endingTime   = $this->endDay;
        $interval = $this->timespan;
        $timeHash = array();
        
        // Compute the available times
        $prevTime = $startDay;
        
        if ( (($startDay % 60) != 0) && ($interval < 60) ) {
            $time = CmnFns::formatTime($startDay);
            $timeHash[$time] = intval((60-($startDay%60))/$interval);
            $prevTime += $interval*$timeHash[$time];
        }

        while ($prevTime < $endingTime) {                                    
            if ($interval < 60) {                
                $time = CmnFns::formatTime($prevTime);
                $timeHash[$time] = intval(60 / $interval);
                $prevTime += 60;        // Always increment by 1 hour
            }
            else {
                $colspan = 1;                // Colspan is always 1
                $time = CmnFns::formatTime($prevTime);
                $timeHash[$time] = $colspan;
                $prevTime += $interval;
            }                
        }
        return $timeHash;   
    }
    
    /**
    * Print out links to jump to new dates
    * @param none
    */
    function print_jump_links() {
        global $conf;
        print_jump_links($this->_date['firstDayTs'], $this->viewdays, ($this->viewdays != 7));
    }
    
    /**
    * Return color_select for given reservation
    * @param array $rs array of reservation information
    */
    function get_reservation_colorstr($rs) {
        global $conf;
        
        $is_mine = false;
		$is_participant = false;
        $is_past = false;
        $color_select = 'other_res';        // Default color (if anything else is true, it will be changed)
        
		//die('parid' . $rs['participantid']);
        if ($this->scheduleType != READ_ONLY) {
            if ($rs['owner'] == 1) {
                $is_mine = true;
                $color_select = 'my_res';
            }
			else if ($rs['participantid'] != null && $rs['owner'] == 0) {
				$is_participant = true;
				$color_select = 'participant_res';
			}
        }
        
        if (mktime(0,0,0, date('m'), date('d') + $this->dayoffset) > $this->_date['current']) {        // If todays date is still before or on the day of this reservation
            $is_past = true;
			if ($is_mine) {
				 $color_select = 'my_past_res';
			}
			else if ($is_participant) {
				$color_select = 'participant_past_res';
			}
			else {
				$color_select ='other_past_res';
			}
            //$color_select = ($is_mine) ? 'my_past_res' : 'other_past_res';        // Choose which color array to use
        }
        
        // pending reservation
        if ( $rs['is_pending'] ) {
            $color_select = 'pending';
        }
        
        return $color_select;
    }
    
    /**
    * Calculates and calls the template function to print out leading columns
	* @param array $rs array of reservation information
    * @param int $start starting time of reservation
    * @param int $prev previous ending reservation time
    * @param int $span time span for reservations
    * @param string $machid id of the resource on this table row
    * @param int $ts timestamp for the reservation start date
    * @param bool $clickable if this row's cells can be clicked to start a reservation
	* @param string $color class of column background
    */
    function move_to_starting_col($rs, $start, $prev, $span, $machid, $ts, $clickable, $color) {
        global $conf;
        $cols = (($start-$prev) / $span) - 1;
        
        print_blank_cols($cols, $prev, $span, $ts, $machid, $this->scheduleid, $this->scheduleType, $clickable, $color);
    }
    
    /**
    * Calculates and calls template function to print out trailing columns
    * @param int $end ending time of day
    * @param int $prev previous ending reservation time
    * @param int $span time span for reservations
    * @param string $machid id of the resource on this table row
    * @param int $ts timestamp for the reservation start date
    * @param bool $clickable if this row's cells can be clicked to start a reservation
	* @param string $color class of column background
    */
    function finish_row($end, $prev, $span, $machid, $ts, $clickable, $color) {
        global $conf;
        $cols = (($end-$prev) / $span) - 1;
        
        $is_past = (mktime(0,0,0, date('m'), date('d') + $this->dayoffset) > $this->_date['current']);        // If todays date is still before or on the day of this reservation

		print_blank_cols($cols, $prev, $span, $ts, $machid, $this->scheduleid, $this->scheduleType, $clickable, $color);
        print_closing_tr();
    }
    
    /**
    * Calls template function to write out the reservation cell
    * @param array $rs array of reservation information
    * @param int $colspan column span value
    */
    function write_reservation($rs, $colspan) {                
        global $conf;
        
		/// !!! CLEAN THIS UP !!! ///
        $is_mine = false;
        $is_past = false;
		$is_private = $conf['app']['privacyMode'] && !Auth::isAdmin();
        $color_select = $this->get_reservation_colorstr($rs);//'other_res';        // Default color (if anything else is true, it will be changed)
        
        if ($this->scheduleType != READ_ONLY) {
            if ($rs['memberid'] == $_SESSION['sessionID']) {
                $is_mine = true;
               // $color_select = 'my_res';
            }
        }

        if (mktime(0,0,0, date('m'), date('d') + $this->dayoffset) > $this->_date['current']) {        // If todays date is still before or on the day of this reservation
            $is_past = true;
            //$color_select = ($is_mine) ? 'my_past_res' : 'other_past_res';        // Choose which color array to use        
        }
        
        // pending reservation
        if ( $rs['is_pending'] ) {
          //$color_select = "pending";
        }
        
		$summary = ($conf['app']['prefixNameOnSummary']) ? "{$rs['fname']} {$rs['lname']}\n<i>" . htmlspecialchars($rs['summary']) . '</i>' : htmlspecialchars($rs['summary']);
        
        // If this is the user who made the reservation or the admin,
        //  and time has not passed, allow them to edit it
        //  else only allow view
        $mod_view = ( ($is_mine || Auth::isAdmin()) && !$is_past) ? 'm' : 'v';    // To use in javascript edit/view box
        $showsummary = (($this->scheduleType != READ_ONLY || ($this->scheduleType == READ_ONLY && $conf['app']['readOnlySummary'])) && $this->showsummary && !$is_private);
        $viewable = ($this->scheduleType != READ_ONLY || ($this->scheduleType == READ_ONLY && $conf['app']['readOnlyDetails']));
        write_reservation($colspan, $color_select, $mod_view, $rs['resid'],$summary , $viewable, $showsummary, $this->scheduleType == READ_ONLY, $rs['is_pending']);
    }
    
    /**
    * Calls template function to write out the blackout cell
    * @param array $rs array of reservation information
    * @param int $colspan column span value
    */
    function write_blackout($rs, $colspan) {
        global $conf;
		$is_private = $conf['app']['privacyMode'] && !Auth::isAdmin();
        $showsummary = (($this->scheduleType != READ_ONLY || ($this->scheduleType == READ_ONLY && $conf['app']['readOnlySummary'])) && $this->showsummary && !$is_private);
                        
        write_blackout($colspan, Auth::isAdmin(), $rs['resid'], htmlspecialchars($rs['summary']),  $showsummary);
    }
    
    /**
    * Prints out an error message for the user
    * @param none
    */
    function print_error() {
        CmnFns::do_error_box(translate('That schedule is not available.') . '<br/><a href="javascript: history.back();">' . translate('Back') . '</a>', '', false);
    }
}
?>