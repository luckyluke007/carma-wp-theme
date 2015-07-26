<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package digistarter
 */
?>
		<?php tha_content_bottom(); ?>
		</div><!-- #content -->
		<?php tha_content_after(); ?>
   		<?php tha_footer_before(); ?>
		<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<?php tha_footer_top(); ?>
			
			<!-- .site-info -->
			<?php tha_footer_bottom(); ?>
		</footer><!-- #colophon -->
		<?php tha_footer_after(); ?>
	</div><!-- .wrap -->
</div><!-- #page -->

<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
