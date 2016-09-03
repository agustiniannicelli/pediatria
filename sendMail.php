<?php

require_once './model/ConfigFile.php';

$headers = "From: Pediatria Practica\r\n";
$headers .= "Mime-Version: 1.0 \r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";


$text = "<b>NOMBRE Y APELLIDO:</b> " . $_POST['name'] . "<br />";
$text .= "<b>EMAIL:</b> " . $_POST['email'] . "<br />";
$text .= "<b>CONSULTA:</b> " . $_POST['text'] . "<br />";

//mail("pediatria.practica.web@gmail.com", "CONTACTO PEDIATRIA PRACTICA", $text, $headers);
//mail("aguianni@gmail.com", "CONTACTO PEDIATRIA PRACTICA", $text, $headers);

header('Location:' . ConfigFile::$URL . "confirmation.php");

?>
