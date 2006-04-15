<?php
/**
* 
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 04-15-06
* @package 
*
* Copyright (C) 2003 - 2006 phpScheduleIt
* License: GPL, see LICENSE
*/

class ReservationSearch
{
	var $data = null;
	
	function ReservationSearch($data = null) {
		$this->data = $data;
	}
	
	function getReservation($id) {
		$res = new Reservation($id);
		$result = new ReservationResult();
		
		$result->copyFrom($res);
		
		return array($result);
	}
	
	function getReservations($userid, $start_date = null, $end_date = null) {
		if ($start_date != null && $end_date == null)
		{
			$end_date = mktime(0,0,0);
		}
		
		return $this->data->getReservations($userid, $start_date, $end_date);
	}
}

$basedir = dirname(__FILE__) . '/..';
require_once($basedir . '/lib/db/ResDB.class.php');

class ReservationSearchDb extends ResDB
{	
	function getReservations($userid, $start_date, $end_date) {
		$return = array();
		$values = array($userid, $userid);
		
		$query = 'SELECT r.*, ru.memberid AS participantid, rem.reminder_time, rem.reminderid FROM ' . $this->get_table(TBL_RESERVATIONS) . ' r'
			. ' LEFT JOIN ' . $this->get_table(TBL_RESERVATION_USERS) . ' ru ON r.resid = ru.resid AND ru.memberid = ? AND ru.owner = 0 AND ru.invited = 0'
			. ' LEFT JOIN ' . $this->get_table(TBL_REMINDERS) . ' rem ON r.resid = rem.resid AND rem.memberid = ?';
		
		if ($start_date != null && $end_date != null) {
			$values[] = $start_date;
			$values[] = $end_date;
			
			$query .= 'WHERE r.start_date >= ? AND r.end_date <=';
		}
		
		$result = $this->db->query($query, $values);
		$this->check_for_error($result);
				
		while ($rs = $result->fetchRow()) {
			$res = new ReservationResult();
			
			$res->id = $rs['resid'];
			$res->start_date = $rs['start_date'];
			$res->end_date = $rs['end_date'];
			$res->start = $rs['starttime'];
			$res->end = $rs['endtime'];
			$res->resource = new Resource($rs['machid']);
			$res->resource->db = null;
			$res->created = $rs['created'];
			$res->modified = $rs['modified'];
			$res->parentid = $rs['parentid'];
			$res->summary = $rs['summary'];
			$res->scheduleid = $rs['scheduleid'];
			$res->is_pending = $rs['is_pending'];
			$res->is_participant = $rs['participantid'] != null;
			
			$reminder = new Reminder($rs['reminderid']);
			$reminder->set_reminder_time($rs['reminder_time']);
			$res->reminderid = $rs['reminderid'];
			$res->reminder_minutes_prior = $reminder->getMinutuesPrior($res);
	
			$res->users = $this->get_res_users($res->id);
			for ($i = 0; $i < count($res->users); $i++) {
				if ($res->users[$i]['owner'] == 1) {
					$res->user = new User($res->users[$i]['memberid']);
					$res->user->db = null;
					break;
				}
			}
		
			$res->resources = $this->get_sup_resources($res->id);
			
			$return[] = $res;
		}
		
		$result->free();
		
		return $return;
	}
}

$basedir = dirname(__FILE__) . '/..';
require_once($basedir . '/lib/Reservation.class.php');

class ReservationResult extends Reservation
{
	function ReservationResult() {
	}
	
	function copyFrom(&$res) {
		$this->id = $res->id;
		$this->start_date = $res->start_date;
		$this->end_date	= $res->end_date;
		$this->start = $res->start;
		$this->end = $res->end;
		$this->resource = $res->resource;
		$this->resource->db = null;
		$this->created = $res->created;
		$this->modified = $res->modified;
		$this->parentid = $res->parentid;
		$this->summary = $res->summary;
		$this->scheduleid = $res->scheduleid;
		$this->is_pending = $res->is_pending;
		$this->is_participant = $res->is_participant;
		$this->reminderid = $res->reminderid;
		$this->reminder_minutes_prior = $res->reminder_minutes_prior;
		$this->users = $res->users;
		$this->user = $res->user;
		$this->user->db = null;
		$this->resources = $res->resources;
	}
}
?>