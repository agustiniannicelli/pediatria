<?php /* Smarty version Smarty-3.1.11, created on 2014-01-25 12:37:23
         compiled from "..\smarty\templates\private\notaForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2249852e3da33adb746-38945156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c709ed24aa74f33559e6ef065101e6d492dfe2a1' => 
    array (
      0 => '..\\smarty\\templates\\private\\notaForm.tpl',
      1 => 1352760226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2249852e3da33adb746-38945156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'note' => 0,
    'categories' => 0,
    'category' => 0,
    'image' => 0,
    'filePath' => 0,
    'operation' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3da33c08418_19328197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3da33c08418_19328197')) {function content_52e3da33c08418_19328197($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\pediatria\\smarty\\libs\\plugins\\modifier.date_format.php';
?><h2 class="title_form"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
<form id="form" method="post" action="../bridge/Bridge.php" enctype="multipart/form-data">
	<div>
		<label>Fecha</label> 
		<input name="Note_date" id="datepicker" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value->date,'%Y-%m-%d');?>
" type="text"/>
	</div>
	<div>
		<label>Categoria</label>
		<select name="Note_idCategory">
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['note']->value->category->id==$_smarty_tpl->tpl_vars['category']->value->id){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
			<?php } ?>
		</select>
	</div>
	<div>
		<label>Titulo:</label> 
		<input name="Note_title" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
" type="text"/>
	</div>
	<div>
		<label>Subtitulo:</label>
		<textarea name="Note_subtitle" rows="5" cols="29"><?php echo $_smarty_tpl->tpl_vars['note']->value->subtitle;?>
</textarea>
	</div>
	<div>
		<label>Texto:</label>
		<textarea cols="80" rows="20" class="textrich" name="Note_text"><?php echo $_smarty_tpl->tpl_vars['note']->value->text;?>
</textarea>
	</div>
	<div>
		<label>Topics:</label>
		<input name="Note_topic" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->topic;?>
" type="text"/>
	</div>
	<div>
		<label>Publicada:</label> 
		<input name="Note_published" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['note']->value->published){?> checked="checked" <?php }?> />
	</div>
	<div>
		<label>Imagenes:</label>
		<a id="addImage" href="javascript:addImage()">agregar</a>
		<div id="imagesDiv">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['note']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			<div class="imageDiv">
				<input type="hidden" name="Image_id[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
" />
				<img src="<?php echo $_smarty_tpl->tpl_vars['filePath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['image']->value->path;?>
" />
				<img onclick="removeImage(this, <?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
)" src="styles/images/remove.jpg" />
				<div><label>Posicion: </label><input name="Image_position[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->position;?>
" /></div>
				<input type="file" name="Image_file[]" />
				<div><label>Texto: </label><input type="text" class="imgText" name="Image_text[]" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->text;?>
"/></div>
			</div>
			<?php } ?>
		</div>
	</div>
	
	<input type="hidden" id="action" name="action" value="Note-<?php echo $_smarty_tpl->tpl_vars['operation']->value;?>
">
	<input type="hidden" name="Note_id" value="<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
">
	<input type="hidden" name="redirectTo" value="private/<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
">
	
	<div class="operations">
		<?php if (isset($_smarty_tpl->tpl_vars['note']->value->id)){?>
			<a href="javascript:seeNote(<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
)">Ver</a>
		
			<a href="javascript:remove()">Eliminar</a>
		<?php }?>
		<a href="javascript:sendForm()">Guardar</a>
	</div>
</form>

<div id="templateImage">
	<div class="imageDiv">
		<input type="hidden" name="Image_id[]" value="null" />
		<img onclick="removeImage(this, null)" src="styles/images/remove.jpg" />
		<div><label>Posicion: </label><input type="text" name="Image_position[]" /></div>
		<input type="file" name="Image_file[]" />
		<div><label>Texto: </label><input class="imgText" type="text" name="Image_text[]" /></div>
	</div>
</div>
<?php }} ?>