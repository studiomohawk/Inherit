<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/css_favicon.ico">
<meta name="google-site-verification" content="VCjPu4enLtZl8QXpuPVxY6vMufxe68UrchkhHkzz1zA">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed (<?php bloginfo('language'); ?>)" href="<?php bloginfo('atom_url'); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<base href="<?php bloginfo("template_url"); ?>/">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet/less" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.less">
<?php /* If this is a single */ if (is_single()) { ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/syntaxhighlight.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/skin/fancybox/jquery.fancybox.css">
<?php } ?>
<script type="text/javascript" src="http://lesscss.googlecode.com/files/less-1.0.35.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1b.css">
<![endif]-->
<?php wp_head(); ?>
</head>
<body class="<?php thematic_body_class(); ?>">
