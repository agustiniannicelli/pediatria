<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require_once 'ConfigFile.php';; 
 
class ConnectionManager{
	
	public static function executeSelect($query)
	{
		$mysqli = new mysqli(ConfigFile::$HOST, ConfigFile::$USER_SELECT, ConfigFile::$PASS_SELECT, ConfigFile::$DATABASE);
		if ($mysqli->connect_errno) 
		{
	    	header("Location:" . ConfigFile::$URL);
		}
		$result = $mysqli->query($query);
		return $result;
	}
	
	
	public static function executeUpdate($query)
	{
		$mysqli = new mysqli(ConfigFile::$HOST, ConfigFile::$USER_UPDATE, ConfigFile::$PASS_UPDATE, ConfigFile::$DATABASE);
		if ($mysqli->connect_errno)
		{
		    header("Location:" . ConfigFile::$URL);
		}
		$mysqli->query($query);
		return $mysqli->insert_id;
	}
}
?>
