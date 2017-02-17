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

		<div class="entry-info">
			<div class="entry-breadcrumb">
				<?php marmalade_breadcrumb(); ?>
			</div>
			<span class="entry-meta">
				<i class="fa fa-calendar"></i>
				<?php marmalade_posted_on(false); ?>
			</span>
			<?php if (function_exists('wpp_get_views')) { ?>
				<span class="entry-views">
					<span class="num">
						<?php echo wpp_get_views( get_the_ID() ); ?>
					</span>
					view
				</span>
			 <?php } ?>
			<span class="entry-cat_tag">
				<?php marmalade_entry_cat_tag(false); ?>
			</span>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

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
