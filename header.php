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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="head" class="bc-head">
        <div class="bc-banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <a class="brand" href="<?php bloginfo('siteurl'); ?>/"
                           title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                 alt="<?php bloginfo('name'); ?>" class="img-responsive"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Tibbalds">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-right">
                        <h2>Tibbalds Planning and Urban Design</h2>
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