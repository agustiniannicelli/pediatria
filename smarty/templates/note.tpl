<!doctype html>
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
		var idNote = {$note->id};
	{literal}
  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-40899987-1']);
  		_gaq.push(['_trackPageview']);

  		(function() {
    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
		
		$.post( "bridge/Bridge.php", { action: "Note-addView", Note_id: idNote } );
	{/literal}		
	</script>
		
</head>
<body>
	{include file="nav_bar.tpl"}
	<div class="row">
		<div class="col-md-3 side-bar">
			{include file="side_bar.tpl"}
		</div>
		<div class="col-md-8 note">
			<span class="item-date">{$note->date|date_format:"%D"}</span>
			<h2>{$note->title}</h2>
			<div class="intro">
				<p>{$note->subtitle}</p>
			</div>
			{$note->text}
		</div>
	</div>
	{include file="footer.tpl"}
</body>
</html>
