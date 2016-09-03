<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:09:56
         compiled from "smarty\templates\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3015852e3db22538ad5-19387558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03420ce7f841aaaac3b414fa832fa0c0c91a2e7d' => 
    array (
      0 => 'smarty\\templates\\category.tpl',
      1 => 1472396911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3015852e3db22538ad5-19387558',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3db226cef30_34334666',
  'variables' => 
  array (
    'idCategory' => 0,
    'notes' => 0,
    'note' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3db226cef30_34334666')) {function content_52e3db226cef30_34334666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\pediatrianew\\smarty\\libs\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<title>Pediatr&iacute;a Pr&aacute;ctica</title>
	<meta name="title" content="Site" />
	<meta name="description" content="description" />
	<meta name="keywords" content="keywords, keywords" />

  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" media="screen, projection" href="css/layout.css" />	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<script src="js/jquery-2.1.4.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-40899987-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="row">
		<div class="col-md-3 side-bar">
			<?php echo $_smarty_tpl->getSubTemplate ("side_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div class="col-md-9 notes-grid">
			<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value[$_smarty_tpl->tpl_vars['idCategory']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['notes']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['notes']['iteration']++;
?>
				
				<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['notes']['iteration']-1)%2==0){?>
					<div class="row">
				<?php }?>
			  			<div class="col-md-5 <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['notes']['iteration']-1)%2==1){?> col-md-offset-1 <?php }?> item">							
							<span class="item-category"><?php echo $_smarty_tpl->tpl_vars['note']->value->category->name;?>
</span>
							<span class="item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value->date,"%D");?>
</span>
							<a href="note.php?id=<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
">
								<h5>
									<?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>

								</h5>
								<p><?php echo $_smarty_tpl->tpl_vars['note']->value->subtitle;?>
</p>
								<div class="item-img">
									<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['note']->value->images[0]->path;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
" />
								</div>
							</a>
						</div>
		  		<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['notes']['iteration']-1)%2!=0){?>
					</div>
				<?php }?>
  			<?php } ?>
		
			
		</div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>