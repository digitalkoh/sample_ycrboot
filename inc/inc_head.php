<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en">        <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo _SITE_TITLE ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="css/override.less">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" href="css/ie.css">
	<![endif]-->
	<?php
		if(_CUSTOM_CSS == 1){
			echo '<link href="clients/'._CLIENT.'/_custom.css" rel="stylesheet">';
		} 
	?>
	<script src="js/less-1.3.3.min.js" type="text/javascript"></script>
	<script src="js/init.js"></script>
	
	<script type="text/javascript">
	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo(_GA_ACCOUNT); ?>']);
		_gaq.push(['_setCustomVar', 1, 'Client','00001']);
		_gaq.push(['_trackPageview']);
		_gaq.push(['_trackEvent']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	
	</script>

</head>
<body>
	<div class="container">