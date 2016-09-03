<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:58:39
         compiled from "smarty\templates\side_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1220257c1de0e476487-88393549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa01d4cbfc32679484716f98f0c6abc945af8cb4' => 
    array (
      0 => 'smarty\\templates\\side_bar.tpl',
      1 => 1472399720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1220257c1de0e476487-88393549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c1de0e8f2c99_20973479',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'idCategory' => 0,
    'notes' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c1de0e8f2c99_20973479')) {function content_57c1de0e8f2c99_20973479($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\pediatrianew\\smarty\\libs\\plugins\\modifier.replace.php';
?><div id="main-side-bar">
	<div class="list-group panel">
		<a href="#notas" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main-side-bar">
			NOTAS
		</a>
		<div class="collapse in" id="notas">
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<a href="#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->name,' ','_');?>
" class="list-group-item" data-toggle="collapse" data-parent="#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->name,' ','_');?>
">
					<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
 <i class="fa fa-caret-down"></i>
				</a>
		        <div class="collapse list-group-submenu <?php if ($_smarty_tpl->tpl_vars['idCategory']->value==$_smarty_tpl->tpl_vars['category']->value->id){?>in<?php }?>" id="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->name,' ','_');?>
">		
					<a class="list-group-item" data-parent="#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->name,' ','_');?>
" href="category.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">
	     				<b>VER TODAS</b>
		     		</a>
		        	<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value[$_smarty_tpl->tpl_vars['category']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
			     		<a class="list-group-item" data-parent="#<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['category']->value->name,' ','_');?>
" href="note.php?id=<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
">
			     			<?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>

			     		</a>		     		
			     	<?php } ?>
		        </div>
			<?php } ?>
		</div>
	</div>
	<div class="goethe">
		<span>"Saber no es suficiente, debemos aplicar. Desear no es suficiente, debemos hacer"</span>
		<p>Goethe</p>
	</div>
</div><?php }} ?>