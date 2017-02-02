<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php
			if ( 'post' == get_post_type() ) :
				$thumbUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )["0"];
				$postTitle = get_the_title();
			?>
			<div class="entry-meta">
				<?php blank_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<a class="entry-thumb" href="<?php esc_url( get_permalink()) ?>" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo $thumbUrl;?>')">
		<?php echo $postTitle; ?>
	</a>

	<footer class="entry-footer">
		<?php blank_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
