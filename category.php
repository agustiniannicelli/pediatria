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

$id=1;
if(isset($_GET["id"]))
{
	$id = intval($_GET["id"], 10);

	if(!is_int($id))
	{
		header("Location:" . ConfigFile::$URL);
	}
}

$category = Category::get($id);

if($category == NULL)
{
	header("Location:" . ConfigFile::$URL);
}

$categories = Category::getAll();
$notes = array();
foreach ($categories as $category)
{
	$notes[$category->id] = Note::getAllByCategory($category);
}

Printer::execute(array("notes" => $notes, "idCategory" => $id, "categories" => $categories, "active" =>"category", "path" => ConfigFile::$FILES_PATH), "category.tpl");
?>
