<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/motion-ui.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">
        <?php wp_head(); ?> 
    </head>
	<body <?php body_class(); ?>>

		<div class="trigger-bg">
            <div class="trigger"></div>
        </div>
        <div class="header">
            <div class="small-12 medium-12 large-2 columns logo">
	            <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>
            </div>
            <div class="small-12 medium-12 large-10 columns top-nav text-right">
                <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'nav-hold' )); ?>
            </div>
        </div>