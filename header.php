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
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel='stylesheet' id='blank-canvas' href='<?php echo get_template_directory_uri(); ?>/style.css?ver=1.0'
          type='text/css' media='all'/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Tibbalds">
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="sub-nav-menu">
                        <h2>Tibbalds Planning and Urban Design</h2>
                        <ul>
                            <li class="menu-item <?php if ( is_page( 'best-practice' ) ) { echo 'active'; } ?>"><a href="<?php bloginfo('siteurl'); ?>/best-practice/">best practice</a></li>
                            <li class="menu-item <?php if ( is_page( 'about' ) ) { echo 'active'; } ?>"><a href="<?php bloginfo('siteurl'); ?>/about/">about us</a></li>
                            <li class="menu-item <?php if ( is_page( 'people' ) ) { echo 'active'; } ?>"><a href="<?php bloginfo('siteurl'); ?>/people/">people</a></li>
                            <li class="menu-item <?php if ( is_page( 'contact' ) ) { echo 'active'; } ?>"><a href="<?php bloginfo('siteurl'); ?>/contact/">contact us</a></li>
                            <li class="menu-item <?php if ( is_page( 'news' ) ) { echo 'active'; } ?>"><a href="<?php bloginfo('siteurl'); ?>/news/">news</a></li>
                        </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('menu.php'); ?>
    </header>
    <!-- #head -->

    <main id="main" class="bc-main" role="main">