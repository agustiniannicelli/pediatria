<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:03:50
         compiled from "smarty\templates\nav_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48245780095f468bf7-24321088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb63a16f6dd09e80e99168e0c5573e318564c188' => 
    array (
      0 => 'smarty\\templates\\nav_bar.tpl',
      1 => 1472396172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48245780095f468bf7-24321088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5780095f4708f3_72309363',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5780095f4708f3_72309363')) {function content_5780095f4708f3_72309363($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container-fluid">
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      		</button>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
      		<form action="find.php" method="post">
				<p>
					<input name="key" type="text" placeholder="Buscar" class="search" />
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</p>
			</form>
      		<ul class="nav navbar-nav">
        		<li><a href="index.php">inicio</a></li>
				<li><a href="profile.php">perfil del autor</a></li>
				<li><a href="objectives.php">objetivos</a></li>
				<li><a href="contact.php">contacto</a></li>
				<li class="social">	
					<a href="https://www.facebook.com/pediatria.practica" target="_blank">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
					</a>
				</li>
      		</ul>
    	</div>
  	</div>
</nav>
<div class="row">
	<div class="col-md-12">
		<a href="index.php">
			<img class="logo" src="images/logo.png" alt="pediatria practica">
		</a>
	</div>
</div>
<div class="row dr">
	<div class="col-md-3 col-md-offset-9">
		Dr. Juan Carlos Iannicelli
	</div>
</div>
<div class="row photo-bar">		
	<div class="col-md-11 col-md-offset-1">
		<img src="photos/banner-02.jpg" alt="banner">
	</div>
</div><?php }} ?>