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

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<?php
		if ( is_single() ) {
			$thumbUrl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )["0"];
		} else {
			$thumbUrl = get_template_directory_uri()."/img/header.jpg";
		}
	?>
	<div class="header" style="background-image:url(<?php echo $thumbUrl; ?>)"></div>

	<div id="content" class="site-content cf">
