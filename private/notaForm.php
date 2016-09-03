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

$note = new Note();

$title = "Nueva Nota";
$operation = "insert";
if(isset($_POST["id"]) && $_POST["id"] != 0)
{
	$note = Note::get($_POST["id"]);
	$title = "Edicion de \"" . $note->title ."\"";
	$operation = "update";
}

$categories = Category::getAll();

PrinterPrivate::execute(array("note" => $note, "categories" => $categories, "operation" => $operation, "title" => $title, "filePath" => "../" . ConfigFile::$FILES_PATH, "back" => "nota.php"), "notaForm.tpl");

?>