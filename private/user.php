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

PrinterPrivate::execute(array(), "header.tpl");

PrinterPrivate::execute(array("username" => $_SESSION['username']), "menu.tpl");

$error = "";
if(isset($_GET["error"]))
{
	$error = $_GET["error"];
}

PrinterPrivate::execute(array("users" => User::getAll(), "error" => $error), "user.tpl");

PrinterPrivate::execute(array(), "footer.tpl");

?>
