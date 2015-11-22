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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel='stylesheet' id='blank-canvas' href='<?php echo get_template_directory_uri(); ?>/style.css'
          type='text/css' media='all'/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="head" class="bc-head">
        <div class="bc-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <a class="brand" href="<?php bloginfo('siteurl'); ?>/"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                 alt="<?php bloginfo('name'); ?>" class="img-responsive"> -->
                            <img src="http://placehold.it/300x120?text=logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 text-right">
                        <ul class="sub-nav-menu">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Our team</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('menu.php'); ?>
    </header>
    <!-- #head -->

    <main id="main" class="bc-main" role="main">