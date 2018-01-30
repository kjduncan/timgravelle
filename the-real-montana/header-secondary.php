<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="masthead" class="secondary" role="banner">
    <div class="row">
      <div class="columns small-12 large-5">
          <div class="name">
            <h1 class="border">
              Tim
            </h1>
            <h1>
              Gravelle
            </h1>
          </div>
          <h2>
            Glacier Real Estate
          </h2>
          <div class="contact-info">
            <h3>406-250-9803</h3>
            <a href="mailto:TIM.GRAVELLE@THEREALMONTANA.COM">TIM.GRAVELLE@THEREALMONTANA.COM</a>
          </div>
          <h2 class="bold">
            THE REAL MONTANA

          </h2>
      </div>
      <div class="columns small-12 large-7" style="dislay:flex; height:100%;">
    		<nav id="site-navigation" class="secondary-navigation" role="navigation">
    			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
    			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
    			<?php wp_nav_menu( array( 'theme_location' => 'montana-menu', 'menu_class' => 'nav-menu' ) ); ?>
    		</nav><!-- #site-navigation -->
      </div>
    </div>

</header>

		<div id="main">
	<!-- #masthead -->
