<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.2.min.js" type="text/javascript" ></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript" ></script>
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>
<body>
<div class="facebook">
	<ul>
		<li><a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico-fbook.jpg" alt="fbook-img" /></a></li>
		<li class="ht-img"><a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/htop-img1.png" alt="htop-img1" /></a></li>
		<li class="ht-img"><a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/htop-img2.png" alt="htop-img2" /></a></li>
		<li class="ht-img"><a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/htop-img3.png" alt="htop-img3" /></a></li>
		<li><p>We are now also on facebook <a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>" class="join_us">Join our page.</a></p></li>
		<li class="ht-arrow"><a href="<?php echo get_option('facebook_link', get_bloginfo('url')); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right.png" alt="ar" /></a></li>
	</ul>
</div>
<div class="mainWrapper">
	<div class="header">
    	<div class="headerImg">
        	<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('cityheader'); ?>" alt="<?php bloginfo('description'); ?>" /></a>
        	<div class="description"><a href="<?php bloginfo('url'); ?>" class="large"><?php bloginfo('description'); ?></a><br /><a href="http://hotels.com.ng">by Hotels.com.ng</a></div>
        </div>
    </div>