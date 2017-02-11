<?php
	if ( 'post' == get_post_type() ) :
		$thumbUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )["0"];
		$postTitle = get_the_title();
		$catSlug = get_the_category($post->ID)[0]->slug;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("entry--list cf ".$catSlug); ?>>
	<a class="entry-thumb" href="<?php esc_url( get_permalink()) ?>" title="<?php the_title_attribute(); ?>" style="background-image: url('<?php echo $thumbUrl;?>')">
		<?php echo $postTitle; ?>
	</a>

	<div class="entry-content">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<div class="entry-date">
				<?php marmalade_posted_on(false); ?>
			</div>
			<div class="entry-cat_tag">
				<?php marmalade_entry_footer(); ?>
			</div>
		<?php endif; ?>
	</div>
</article>
