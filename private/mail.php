<?php

header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Argentina/Buenos_Aires");

$level = "ALL";
include ("../security/security.php");

require_once '../smarty/PrinterPrivate.php';

PrinterPrivate::execute(array(), "header.tpl");

PrinterPrivate::execute(array("username" => $_SESSION['username']), "menu.tpl");

PrinterPrivate::execute(array(), "mail.tpl");

PrinterPrivate::execute(array(), "footer.tpl");
?>
