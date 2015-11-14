<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel='stylesheet' id='blank-canvas' href='<?php echo get_template_directory_uri(); ?>/style.css' type='text/css' media='all' />
<link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="head" class="bc-head">
  <div class="bc-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a class="brand" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive">
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('menu.php'); ?>
</header>
<!-- #head -->

<main id="main" class="bc-main">