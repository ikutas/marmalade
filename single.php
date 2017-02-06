<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php blank_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile;?>

		<?php if(function_exists('wp_related_posts')): ?>
			<div class="single__related--post">
				<h3><i class="fa fa-edit"></i> こちらの記事もよく読まれています</h3>
				<?php wp_related_posts()?>
			</div>
		<?php endif; ?>

		<?php if(function_exists('wpp_get_mostpopular')): ?>
			<div class="single__bottom_popular--post">
				<h3><i class="fa fa-trophy"></i> 今日の人気記事</h3>
				<div class="ninki-post" align="center">
				  <?php wpp_get_mostpopular('range=daily&limit=8&post_type=post&order_by=views&stats_comments=0&thumbnail_height=110&thumbnail_width=110&thumbnail_selection =usergenerated&stats_views=0'); ?>
				</div>
			</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
