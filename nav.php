<nav id="nav" class="nav" role="navigation">
  <?php if (is_home()) { ?>
    <h1 class="nav__title"><a href="<?php echo home_url(); ?>" rel="home">
      <?php if(true){
        //TODO logo画像が設定されていたらを追加
         ?>
          <img alt="<?php bloginfo('name'); ?>" src="http://mama-hack.com/wp-content/uploads/2014/07/mamahack_dot.png">
      <?php } else { bloginfo('name'); } ?>
    </a></h1>
    <h2 class="nav__description"><?php bloginfo( 'description' ); ?></h2>
  <?php } else {?>
    <div class="nav__title"><a href="<?php echo home_url(); ?>" rel="home">
      <?php if(true){
        //TODO header画像が設定されていたらを追加
         ?>
          <img alt="<?php bloginfo('name'); ?>" src="http://mama-hack.com/wp-content/uploads/2014/07/mamahack_dot.png">
      <?php } else { bloginfo('name'); } ?>
    </a></div>
    <div class="nav__description"><?php bloginfo( 'description' ); ?></div>
  <?php }?>
  <?php wp_nav_menu( array( 'theme_location' => 'navbar' ) ); ?>
</nav><!-- #site-navigation -->
