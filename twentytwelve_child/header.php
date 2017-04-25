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

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<![endif]-->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="http://postharvestcg.com/wp-content/uploads/2014/10/Final-Logo-copy.png" class="img-responsive logo">
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">  

        
        <li><a href="http://postharvestcg.com/">Home</a></li>
        <li><a href="http://postharvestcg.com/services/">Services</a></li>
        <li><a href="http://postharvestcg.com/about-us/">About Us</a></li>
        <?php if ( is_page_template( 'page-templates/full-width.php' ) ) { ?>
        <li><a href="#contact">Contact</a></li>
        <?php } else { ?>
        <li><a href="http://postharvestcg.com/contact/3">Contact</a></li>
        <?php } ?>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




      
    

		