<?php /* Smarty version Smarty-3.1.11, created on 2014-01-25 12:34:36
         compiled from "smarty\templates\sideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2324852e3d98c8b27c9-99663670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '321d360e8284e5580f78b2d834a1af0579a55bef' => 
    array (
      0 => 'smarty\\templates\\sideBar.tpl',
      1 => 1372231344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2324852e3d98c8b27c9-99663670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'idCategory' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3d98c8d1bd5_12521332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3d98c8d1bd5_12521332')) {function content_52e3d98c8d1bd5_12521332($_smarty_tpl) {?><div id="sidebar">
	<div class="sidebar-nav">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
			<li <?php if ($_smarty_tpl->tpl_vars['idCategory']->value==$_smarty_tpl->tpl_vars['category']->value->id){?>class="active"<?php }?>><a href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</a>
			</li> <?php } ?>
		</ul>
	</div>
	<!-- sidebar-nav -->
	<div class="sidebar-text">
		<p>"Saber no es suficiente, debemos aplicar. Desear no es suficiente,
			debemos hacer"</p>
		<p class="sidebar-text-author">Goethe</p>
	</div>
	<!-- sidebar-text -->
	<div class="sidebar-sponsor"></div>
	<div class="sidebar-sponsor"></div>
</div>
<!-- sidebar -->
<?php }} ?>