<?php
/**
 * @package digistarter
 */
?>

<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	<header class="entry-header">
		<?php if (has_post_format('link')): ?>
			<?php
				$content = get_the_content();
				$linktoend = stristr($content, "http" );
				$afterlink = stristr($linktoend, ">");
				if ( ! strlen( $afterlink ) == 0 ):
				$linkurl = substr($linktoend, 0, -(strlen($afterlink) + 1));
				else:
				$linkurl = $linktoend;
				endif;
			?>
		<h2 class="blog-title"><a href="<?php echo $linkurl; ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="genericon genericon-time"></span> <?php digistarter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
	<!-- CONTENT -->
		<?php the_post_thumbnail(); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'digistarter' ) );
				if ( $categories_list && digistarter_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'digistarter' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'digistarter' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'digistarter' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'digistarter' ), __( '1 Comment', 'digistarter' ), __( '% Comments', 'digistarter' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'digistarter' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
