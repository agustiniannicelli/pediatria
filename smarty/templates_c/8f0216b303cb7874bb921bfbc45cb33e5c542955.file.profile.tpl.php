<?php /* Smarty version Smarty-3.1.11, created on 2016-08-28 12:42:32
         compiled from "smarty\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:740752e3db4a0e0759-40404412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0216b303cb7874bb921bfbc45cb33e5c542955' => 
    array (
      0 => 'smarty\\templates\\profile.tpl',
      1 => 1472398915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '740752e3db4a0e0759-40404412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52e3db4a22c828_39324362',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e3db4a22c828_39324362')) {function content_52e3db4a22c828_39324362($_smarty_tpl) {?><!doctype html>
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
			<div class="row photo">
				<div class="col-md-3">
					<img src="photos/photo-profile.jpg" alt="" />
				</div>
				<div class="col-md-8">
					<h3>Dr. Juan Carlos Iannicelli</h3>
					<p>Especialista en pediatr&iacute;a</p>
				</div>
			</div>			
			<p>- M&eacute;dico Residente de la residencia de Cl&iacute;nica
				Pedi&aacute;trica, Hospital de ni&ntilde;os "sor Maria Ludovica
				de La Plata".</p>
			<p>- Medico Jefe de Residentes en la especialidad de
				pediatr&iacute;a Hospital de Ni&ntilde;os "Sor Maria Ludovica de
				La Plata".</p>
			<p>- Jefe de Sala Interino en el &Aacute;rea Program&aacute;tica y
				Medicina Preventiva, del Hospital "Sor Maria Ludovica de La
				Plata".</p>
			<p>- Instructor de Residentes, de la residencia de Cl&iacute;nica
				Pedi&aacute;trica del hospital "sor Maria Ludovica de La Plata"-
				periodo: 1988 - 2012. &Aacute;rea consultorios externos.</p>
			<p>- A cargo del Consultorio de "Ni&ntilde;o Sano" Hospital de
				ni&ntilde;os "sor Maria Ludovica de La Plata". Desde 1982 - 2012.</p>
			<p>- Miembro del Comit&eacute; Cient&iacute;fico del Instituto de
				Investigaciones y Desarrollo Pedi&aacute;trico (IDIP).</p>
		</div>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>