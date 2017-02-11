<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg.jpg)">
<div id="page" class="hfeed site">
	<?php if(true){
		//TODO header画像設定するなら & single なら個別のやつを設定する？
		?>
		<div class="header" style="background-image:url(<?php echo ""; ?>)"></div>
	<?php } ?>

	<div id="content" class="site-content">
