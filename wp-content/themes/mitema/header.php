<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/example.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<div class="header">
	<img alt="imagen de cabecera" width="80%"
		 src="<?php echo get_template_directory_uri(); ?>/images/cabecera.jpg" />
<p>This is header section. Put your logo and other details here.</p>
</div>