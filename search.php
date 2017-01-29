<?php get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'blank' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' ); ?>
			<?php endwhile; ?>
			<?php blank_paging_nav(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</main>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
