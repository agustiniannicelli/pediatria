<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:21:48
         compiled from "smarty\templates\note.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2833252e3dac12b1f80-79639665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f95ba3daefe126fe3c5b9ab3020327757277e1' => 
    array (
      0 => 'smarty\\templates\\note.tpl',
      1 => 1472397702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2833252e3dac12b1f80-79639665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3dac13cb3c5_61513391',
  'variables' => 
  array (
    'note' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3dac13cb3c5_61513391')) {function content_52e3dac13cb3c5_61513391($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\pediatrianew\\smarty\\libs\\plugins\\modifier.date_format.php';
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
		<div class="col-md-8 note">
			<span class="item-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['note']->value->date,"%D");?>
</span>
			<h2><?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
</h2>
			<div class="intro">
				<p><?php echo $_smarty_tpl->tpl_vars['note']->value->subtitle;?>
</p>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['note']->value->text;?>

		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>