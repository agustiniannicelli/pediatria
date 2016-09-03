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

$note= Note::get($id);

if($note == NULL)
{
	header("Location:" . ConfigFile::$URL);
}

$note->images = array_slice($note->images, 1);

foreach ($note->images as $image) 
{
	$path =  ConfigFile::$FILES_PATH . $image->path;
	$note->text = preg_replace("/{imagen}/", "<div><a target='_blank' href='$path'><img src='$path' /></a><p style='font-size: small; font-style: italic;'>$image->text</p></div>", $note->text, 1);
}

$category = Category::get($note->category->id);
$categories = Category::getAll();
$notes = array();
foreach ($categories as $category)
{
	$notes[$category->id] = Note::getAllByCategory($category);
}

Printer::execute(array("note" => $note, "notes" => $notes, "categories" => $categories, "active" =>"note", "idCategory" => $note->category->id, "path" => ConfigFile::$FILES_PATH), "note.tpl");
?>
