<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		
		<header class="site-header">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://s29.postimg.org/9gj9uv27r/HDUNIVERSE.jpg" style="float: left;" alt="Logo" /></a></h1>
			<h5><?php bloginfo('description'); ?></h5>
			
		<!--Cool box-->
            <div id="info-box">
                <h4> Board</h4>
                <p>
				    <?php $hoveredPageID = getPageIDfromMenuID(); ?>
                    <?php echo get_post_meta($hoveredPageID, 'summary', true);?>
                </p>
        </div> <!--Cool box-->
		<div id="my_results"></div>
			
		<!--Site nav-->	
		<nav id="site-nav">				
            <?php
                $args = array (
                'theme_location' => 'primary'
                 );                
            ?>
            <?php wp_nav_menu($args);?>
        </nav>   <!--Site nav-->	
			
			
		
			
			
		</header><!-- /site-header -->
