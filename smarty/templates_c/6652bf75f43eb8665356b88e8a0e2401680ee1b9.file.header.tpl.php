<?php /* Smarty version Smarty-3.1.11, created on 2014-01-25 12:34:36
         compiled from "smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2728352e3d98c86c2b8-39301169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6652bf75f43eb8665356b88e8a0e2401680ee1b9' => 
    array (
      0 => 'smarty\\templates\\header.tpl',
      1 => 1372232042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2728352e3d98c86c2b8-39301169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3d98c897248_58651690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3d98c897248_58651690')) {function content_52e3d98c897248_58651690($_smarty_tpl) {?><div id="header">
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="photos/pediatria-practica.png"
				alt="Pediatr&iacute;a Pr&aacute;ctica" height="108" width="226" />
			</a>
		</div>
		<div class="dr">Dr. Juan Carlos Iannicelli</div>
	</div>
	<!-- container -->
</div>
<!-- header -->

<div id="navigation">
	<div id="banner">
		<div class="container">
			<img src="photos/banner-02.jpg" alt="banner" width="989" height="187" />
		</div>
	</div>
	<div class="container nav-container">
		<ul class="nav">
			<li <?php if ($_smarty_tpl->tpl_vars['active']->value=="index"){?>class="active"<?php }?>><a href="index.php" tabindex="0">inicio</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['active']->value=="index"){?>class="profile"<?php }?>><a href="profile.php" tabindex="0">perfil del autor</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['active']->value=="index"){?>class="objetives"<?php }?>><a href="objectives.php" tabindex="0">objetivos</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['active']->value=="index"){?>class="contact"<?php }?>><a href="contact.php" tabindex="0">contacto</a></li>
		</ul>
		<div id="search">
			<form action="find.php" method="post">
				<p>
					<label>buscar</label><input name="key" type="text" class="search" />
					<button type="submit">Buscar</button>
				</p>
			</form>
		</div>
		<!-- search -->
	</div>
	<!-- container nav-container -->
</div>
<!-- navigation -->
<?php }} ?>