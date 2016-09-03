<?php
session_start();

require_once '../model/ConfigFile.php';

$authorized = TRUE;

if(!isset($_SESSION["autorizado"]) || !$_SESSION["autorizado"]) 
{
	$authorized = FALSE;
}

if ($authorized) 
{
	switch ($level) 
	{
	    case "ADMIN":
	        if(!$_SESSION["isAdmin"])
			{
				$authorized = FALSE;
			}
	        break;
	    case "SUPER_ADMIN":
			if(!$_SESSION["isSuperAdmin"])
			{
				$authorized = FALSE;
			}
	        break;
	    case "USER":
	    	if(!$_SESSION["isUser"])
			{
				$authorized = FALSE;
			}
	        break;
	}
}

if (!$authorized)
{
	$_SESSION["to"] =  ConfigFile::$HTTP . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	
	header("Location:" . ConfigFile::$URL . "private/index.html");
}

?>