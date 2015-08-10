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
		<a href="https://www.facebook.com/pages/CARMA-Weight-Loss/194481884150?ref=br_rs" class="socialmedia facebook">Facebook</a><a href="https://www.youtube.com/channel/UC6RRZ5lD7LnCL-sWxeYI7eQ" class="socialmedia twitter">Youtube</a>
			<!-- FOOTER -->
		<?php get_footer(); ?>
		<!-- END FOOTER -->	
	</div>

</div>

</body>
<html>

