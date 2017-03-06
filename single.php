<?php get_header(); ?>
	<div id="primary" class="content-area single__content">
		<main id="main" class="site-main single-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php get_template_part('snsLink');?>

			<?php get_template_part('snsBtn');?>

			<?php //TODO:配布時には出す
				//blank_post_nav(); ?>

			<?php //TODO:配布時には出す
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>
		<?php endwhile;?>

		<?php //TODO: 配布時には消す ?>
		<div class="ilink"><div class="midashi"><i class="fa fa-heart"></i>この記事を書いているまなしばって？</div><p class="first"><a href="/about" class="cf"><span class="ilink_inner"><img src="/wp-content/themes/marmalade/img/prof_v.jpg" alt="ままはっく" scale="0"><span class="title">まなしばのプロフィールはこちら</span></span></a></p></div>

		<?php //TODO: 配布時には消す
			if(function_exists('wp_related_posts')): ?>
			<div class="single__related--post">
				<h3><i class="fa fa-edit"></i> こちらの記事もよく読まれています</h3>
				<?php wp_related_posts()?>
			</div>
		<?php endif; ?>

		<?php //TODO: 配布時には消す
			if(function_exists('wpp_get_mostpopular')): ?>
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
