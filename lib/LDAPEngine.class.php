<?php
/**
* LDAPEngine class
* @author David Poole <David.Poole@fccc.edu>
* @version 04-19-05
* @package LDAPEngine
*
* Copyright (C) 2004 phpScheduleIt
* License: GPL, see LICENSE
*/
/**
* Base directory of application
*/
@define('BASE_DIR', dirname(__FILE__) . '/..');
/**
* CmnFns class
*/
include_once('CmnFns.class.php');


class LDAPEngine {

	var $host;
	var $port;
	var $basedn;
	
	var $binddn;
    var $ldap;
    var $connected;
    
    var $uid;
    var $fname;
    var $lname;
    var $mail;
    var $phone;
	var $password;
    
	/**
	* LDAPEngine constructor to initialize object
	* @param string $uid user id
	* @param string $password password associated with uid
	*/
	function LDAPEngine( $uid, $password ) {
	   global $conf;
	   
	   $this->connected = false;
	   
	   if( strlen( $uid ) == 0 || strlen( $password ) == 0 ) {
	   	  return;
	   }
	   
	   $this->host = $conf['ldap']['host'];
	   $this->port = $conf['ldap']['port'];
	   $this->basedn = $conf['ldap']['basedn'];
	   
	   $this->ldap = ldap_connect( $this->host, $this->port ) or die( "Could not connect to LDAP server." );
	   
	   $this->uid = $uid;
	   $uid = "uid=$uid,". $this->basedn;
	   
	   if( $this->ldap ) {
	       $bind = @ldap_bind( $this->ldap, $uid, $password );

	       if( $bind ) {
	           // authenication was a success, try to load user information
	           $this->binddn = $uid;
	           
	           if( $this->loadUserData() ) {
	               $this->connected = true;
	               $this->password = $password;
	           } else {
	               ldap_close( $this->ldap );
	           }
            
            } else {
                ldap_close( $this->ldap );
            }
        }

    }
    
    /**
	* Disconnects from the LDAP server
	* @param none
	*/
    function disconnect() {
        if( $this->connected ) {
            ldap_close( $this->ldap );
            $this->connected = false;
        } 
    }

	/**
	* Queries LDAP for user information 
	* @return boolean indicating success or failure
	*/
	function loadUserData() {

		$attributes = array( "sn", "givenname", "mail", "telephonenumber" );
		
        $result = ldap_search( $this->ldap, $this->binddn, "uid=". $this->uid, $attributes );
        $entries = ldap_get_entries( $this->ldap, $result );
        
        if( $result and ( $entries["count"] == 1 ) ) {        
            $this->fname = $entries[0]['givenname'][0];
            $this->lname = $entries[0]['sn'][0];
            $this->mail = strtolower( $entries[0]['mail'][0] );
            $this->phone = $entries[0]['telephonenumber'][0];
        } else {    
            return false;
        }
	
	   return true;
	
	}
	
    /**
	* Returns user information 
	* @return array containing user information
	*/
    function getUserData() {
    
        $return = array(
            'fname' => $this->fname,
            'lname' => $this->lname,
            'emailaddress' => $this->mail,
            'phone' => $this->phone,
            'logon_name' => $this->uid,
            'password' => $this->password,
            'password2' => $this->password
        );
        
        return $return;
    
    }
    	
    /**
	* Gets user's mail attribute.
	* @return string user's email address
	*/
	function getUserEmail( ) {
	  	return $this->mail;
    }	

    /**
	* See if the user was authenticated.
	* @return boolean authenication success of failure
	*/
	function connected( ) {
	  	return $this->connected;
    }	

}

?>