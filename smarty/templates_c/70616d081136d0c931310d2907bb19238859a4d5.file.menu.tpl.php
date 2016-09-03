<?php /* Smarty version Smarty-3.1.11, created on 2014-01-25 12:36:20
         compiled from "..\smarty\templates\private\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2581552e3d9f4dbb6c2-45171755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70616d081136d0c931310d2907bb19238859a4d5' => 
    array (
      0 => '..\\smarty\\templates\\private\\menu.tpl',
      1 => 1351730620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2581552e3d9f4dbb6c2-45171755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3d9f4dcef41_63797043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3d9f4dcef41_63797043')) {function content_52e3d9f4dcef41_63797043($_smarty_tpl) {?><div class="top_menu">
	<div>
		<span>Ud. esta logueado como <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <a href="../security/closeSession.php">(cerrar sesion)</a></span>
		<ul>
			<li>
				<a href="nota.php">Notas</a>
			</li>
		</ul>
	</div>
</div>
<?php }} ?>