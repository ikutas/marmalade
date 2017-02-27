<nav id="nav" class="nav js-nav" role="navigation">
  <button class="nav__menuOpen js-menuBtn"></button>
  <?php if (is_home()) { ?>
    <h1 class="nav__title"><a href="<?php echo home_url(); ?>" rel="home">
      <?php if(true){
        //TODO logo画像が設定されていたらを追加
         ?>
          <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
      <?php } else { bloginfo('name'); } ?>
    </a></h1>
    <h2 class="nav__description"><?php bloginfo( 'description' ); ?></h2>
  <?php } else {?>
    <div class="nav__title"><a href="<?php echo home_url(); ?>" rel="home">
      <?php if(true){
        //TODO header画像が設定されていたらを追加
         ?>
          <img alt="<?php bloginfo('name'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
      <?php } else { bloginfo('name'); } ?>
    </a></div>
    <div class="nav__description"><?php bloginfo( 'description' ); ?></div>
  <?php }?>
</nav><!-- #site-navigation -->
<div id="spmenu" class="spmenu js-spmenu">
  <?php wp_nav_menu( array( 'theme_location' => 'navbar' ) ); ?>
  <div class="spmenu__cover js-menuCover"></div>
</div>
