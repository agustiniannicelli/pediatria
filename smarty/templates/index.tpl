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
	{include file="nav_bar.tpl"}
	<div class="row">
		<div class="col-md-3 side-bar">
			{include file="side_bar.tpl"}
		</div>
		<div class="col-md-7 notes-grid">
			<div class="row lasts">
				<div class="col-md-12">
					<span>&Uacute;ltimas publicaciones</span>
				</div>
			</div>
			{foreach name=notes from=$notes item=noteArr}
				{assign var="note" value=$noteArr[0]}
				{if ($smarty.foreach.notes.iteration - 1) % 2 == 0}
					<div class="row">
				{/if}
			  			<div class="col-md-5 {if ($smarty.foreach.notes.iteration - 1) % 2 == 1} col-md-offset-1 {/if} item">							
							<div>
								<span class="item-views">{$note->views} visitas</span>
								<span class="item-date">Publicada: {$note->date|date_format:"%D"}</span>
							</div>
							<br />
							<span class="item-category">{$note->category->name}</span>							
							<a href="note.php?id={$note->id}">
								<h5>
									{$note->title}
								</h5>
								<p>{$note->subtitle}</p>
								<div class="item-img">
									<img src="{$path}{$note->images[0]->path}" alt="{$note->title}" />
								</div>
							</a>
						</div>
		  		{if ($smarty.foreach.notes.iteration - 1) % 2 != 0 || $smarty.foreach.notes.last}
					</div>
				{/if}
  			{/foreach}
  		</div>
  		<div class="col-md-2 side-bar">
			<span class="top-ten">Las m&aacute;s le&iacute;das</span>
			{foreach name=topTen from=$topTen item=note}
				<div class="row">
		  			<div class="col-md-12 item">							
						<div>
							<span class="item-views">{$note->views} visitas</span>
						</div>
						<br />						
						<a href="note.php?id={$note->id}">
							<h5>
								{$note->title}
							</h5>
							<p>{$note->subtitle}</p>
						</a>
					</div>
				</div>
  			{/foreach}	
		</div>
	</div>
		
	{include file="footer.tpl"}
</body>
</html>
