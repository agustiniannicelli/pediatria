<?php

$level = "ALL";
include ("../security/security.php");

require_once '../../model/Opinion.php';

$opinions = Opinion::getLast(2);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.elpuntodeequilibrio.com/front/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
$html = curl_exec($ch);
curl_close($ch);

$headers = "From: El Punto de Equilibrio <http://www.elpuntodeequilibrio.com> \r\n";
$headers .= "Mime-Version: 1.0 \r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

echo mail("aguianni@gmail.com", "TOMAS BULAT: " . $opinions[1]->title, $html, $headers);

?>
