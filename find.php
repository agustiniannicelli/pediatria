<?php
/*
 * Created on Jul 21, 2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Argentina/Buenos_Aires");

require_once 'smarty/Printer.php';
require_once './model/Note.php';

$key = $_POST["key"];
$notesFound = Note::find($key);

$categories = Category::getAll();
$notes = array();
foreach ($categories as $category)
{
	$notes[$category->id] = Note::getAllByCategory($category);
}

Printer::execute(array( "notesFound" => $notesFound, "notes" => $notes, "categories" => $categories, "active" =>"find", "idCategory" => 1, "path" => ConfigFile::$FILES_PATH), "find.tpl");
?>
