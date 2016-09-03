<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Argentina/Buenos_Aires");

$level = "ALL";
include ("../security/security.php");

require_once '../smarty/PrinterPrivate.php';
require_once '../model/Note.php';

PrinterPrivate::execute(array(), "header.tpl");

PrinterPrivate::execute(array("username" => $_SESSION['username']), "menu.tpl");

$error = "";
if(isset($_GET["error"]))
{
	$error = $_GET["error"];
}

$idNote = 0;
if(isset($_SESSION["idNote"]))
{
	$idNote = $_SESSION["idNote"];
}


PrinterPrivate::execute(array("notes" => Note::getAll(), "form" => "notaForm.php", "idNote" => $idNote, "error" => $error), "nota.tpl");

PrinterPrivate::execute(array(), "footer.tpl");

?>
