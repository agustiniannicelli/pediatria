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
require_once './model/ConfigFile.php';

$categories = Category::getAll();
$notes = array();
foreach ($categories as $category)
{
	$notes[$category->id] = Note::getAllByCategory($category);
}

Printer::execute(array("notes" => $notes, "categories" => $categories, "topTen" => Note::getTopTen(), "active" =>"index", "idCategory" => 0, "path" => ConfigFile::$FILES_PATH), "index.tpl");
?>