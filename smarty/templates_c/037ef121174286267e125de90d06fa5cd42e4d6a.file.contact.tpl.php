<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:52:28
         compiled from "smarty\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2977857c308bc2086f5-73113487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037ef121174286267e125de90d06fa5cd42e4d6a' => 
    array (
      0 => 'smarty\\templates\\contact.tpl',
      1 => 1472399462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2977857c308bc2086f5-73113487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c308bc28d409_90280205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c308bc28d409_90280205')) {function content_57c308bc28d409_90280205($_smarty_tpl) {?><!doctype html>
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
		<div class="col-md-8 profile">
			<h1>Contacto</h1>
            <p>Complete el formulario con su consulta o comentario y ser&aacute; respondido a la brevedad. </p>
            <p>O escriba a pediatria.practica.web@gmail.com</p>                        
            <form action="sendMail.php" method="post">
                <p><label>Nombre</label><input type="text" name="name"/></p>                            
                <p><label>E-mail</label><input type="text" name="email"/></p>                           
                <p><label>Mensaje</label><textarea name="text" rows="5" cols="25"></textarea></p>
                <p><button type="submit">Enviar</button></p>
            </form>
		</div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>