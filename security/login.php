<?php
session_start();

require_once '../model/User.php';

$username = $_POST['usuario']; 
$password = $_POST['password'];
$arrayPass = explode(" ", $_POST['password']); 

//para evitar sqlInjection separo las pass en blancos y solo tomo el primero
$password =  $arrayPass[0];

$user = User::isUser($username, md5($password));

if($user != NULL)
{	
	$_SESSION['autorizado'] = true;
	$_SESSION['username'] = $username;
	$_SESSION['idUser'] = $user->id;
}

if(isset($_SESSION['to']))
{
	header('Location:' . $_SESSION['to']);
}
else
{
	header("Location:" . ConfigFile::$URL . "private/menu.php");
}
?>
