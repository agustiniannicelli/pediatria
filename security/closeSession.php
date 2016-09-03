<?php

require_once '../model/ConfigFile.php';

session_start();
session_destroy();
header('Location:' . ConfigFile::$URL . "private/index.html");
?>
