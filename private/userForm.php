<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header('Content-Type: text/html; charset=UTF-8');
$level = "SUPER_ADMIN";
include ("seguridad.php");

require_once '../smarty/PrinterPrivate.php';
require_once '../../model/User.php';

date_default_timezone_set("America/Argentina/Buenos_Aires");

$user = new User();
$title = "Nuevo Usuario";
$operation = "insert";
if(isset($_POST["id"]) && $_POST["id"] != 0)
{
	$user = User::get($_POST["id"]);
	$title = "Edicion de " . $user->username ."";
	$operation = "update";
}

PrinterPrivate::execute(array("user" => $user, "operation" => $operation, "title" => $title), "userForm.tpl");

?>