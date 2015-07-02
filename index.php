<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package digistarter
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0" name="viewport"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php tha_head_bottom(); ?>
	<?php wp_head(); ?>

	<script src="http://carmaweightloss.net.site/wp-content/themes/scg_studio/assets/js/vendor/masterslider.min.js"></script>
</head>
<body>
<div class="carma_header">
	<div class="carma_branding">
		<div class="logo"><img src="http://www.scgstudio.com/images/flowers.png"></div>
		<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
		<div class="site-description"><?php bloginfo( 'description' ) ?></div>
	</div>
</div>
<!-- PRIMARY NAVIGATION -->
<nav class="carma-navigation">
	<div class="navigation">
		<button class="menu-button" role="navigation">
						<span class="dashicons <?php echo get_theme_mod( 'digistarter_mobile_nav_icon', 'dashicons-menu' ); ?>"></span><?php echo get_theme_mod( 'digistarter_mobile_nav_label', 'Menu' ); ?>
					</button>
					<?php 	wp_nav_menu( array(
						    'theme_location' => 'primary-navigation',
						    'menu_class' => 'flexnav', //Adding the class for FlexNav
						    'items_wrap' => '<ul data-breakpoint=" '. esc_attr( get_theme_mod( 'digistarter_mobile_min_width' ) ) .' " id="%1$s" class="%2$s">%3$s</ul>', // Adding data-breakpoint for FlexNav
						    ));
					?>
	</div>
</nav>
<!-- END PRIMARY NAVIGATION -->
<!-- FRONT SLIDER -->
<div class="carma_slider">
	<?php if ( ! dynamic_sidebar( 'carma-slider' ) ) : ?>
		<?php masterslider(1); ?>
  	<?php endif; ?>  
</div>
<!-- END FRONT SLIDER -->
<div class="carma-magenta">
	<div class="carma-home-container">
		<?php if ( ! dynamic_sidebar( 'home-text' ) ) : ?>
			
	  	<?php endif; ?> 
		<!--<div class="home-loss-box"><img src="http://carmaweightloss.net.site/wp-content/themes/scg_studio/assets/js/vendor/weight-loss-icon.png" alt="Weight Loss"></div>
		<div class="home-body-box"><img src="http://carmaweightloss.net.site/wp-content/themes/scg_studio/assets/js/vendor/bodyworks-icon.png" alt="Bodyworks"></div> -->
	</div>
</div>
</body>
<html>

