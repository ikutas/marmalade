<?php
	if ( 'post' == get_post_type() ) :
		$thumbUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )["0"];
		$postTitle = get_the_title();
		$catSlug = get_the_category($post->ID)[0]->slug;
?>
<div class="entry--single__topthumb">
	<img src="<?php echo $thumbUrl;?>">
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class("entry--single ".$catSlug); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-breadcrumb">
			<?php marmalade_breadcrumb(); ?>
		</div>
		<div class="entry-meta">
			<?php marmalade_posted_on(); ?>
		</div>
		<div class="entry-cat_tag">
			<?php marmalade_entry_cat_tag(); ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'blank' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php endif; ?>
