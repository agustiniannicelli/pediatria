<?php
session_start();
/*
 * Created on Jul 28, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *  
 */

require_once("../model/Note.php");

$returnMethod = true;

if(isset($_POST["action"]))
{
	$action = explode("-", $_POST["action"]);
	
	$className = $action[0];
	$methodName = $action[1];

	$method = new ReflectionMethod($className, $methodName); 
	
	try
	{
		$returnMethod = $method->invoke(null, $_POST);
		if($returnMethod)
		{
			if(isset($_POST["redirectTo"])) 
			{
				header( "Location: ../" . $_POST["redirectTo"] );
			}
		}
	}
	catch (Exception $e)
	{
		header( "Location: ../" . $_POST["redirectTo"] . "?error=" . $e->getMessage());	
	}
}

?>
