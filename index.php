<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package digistarter
 */
get_header(); ?>
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
		
	</div>
	<div id="social-media">
		<a href="#" class="socialmedia facebook">Facebook</a><a href="#" class="socialmedia twitter">twitter</a><a href="#" class="socialmedia google">google</a>
			<!-- FOOTER -->
		<?php get_footer(); ?>
		<!-- END FOOTER -->	
	</div>

</div>

</body>
<html>

