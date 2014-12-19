<?php
/**
 * The header template file
 *
 * @file           header.php
 * @package        Impulse Press
 * @author         Two Impulse
 * @copyright      2014 Two Impulse
 * @version        Release: 1.2.6
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('&#124;', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>"/>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
<div class="container" id="wrapsit">
    <div class="row">
        <div class="logohome col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        <a href="/"><img src="<?php bloginfo('template_directory') ?>/images/logo2.png" alt="" align="left"/></a><br/>
                    </p>
                    <h1>TEAM CENTRAL <br/>ELITE LACROSSE</h1>
                </div>
                <div class="col-lg-6 well hero">
                    <div class="row">
                        <div class="col-sm-3 hero-top">
                            <h3>Announcements</h3>
                            <p>Practice is cancelled for today 9/21/14 because of inclement weather.</p>
                        </div>
                        <div class="col-sm-3 hero-main">
                            <div class="hero-3">
                                <a href="#">About Us</a> | <a href="#">Links</a> | <a href="#">Contact</a>
                            </div>
                            <div class="hero-2">
                                <a class="btn btn-social-icon btn-facebook">
                                    <i class="fa fa-facebook fa-2x"></i>
                                </a>
                                <a class="btn btn-social-icon btn-twitter">
                                    <i class="fa fa-twitter fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="wrap">
    <!-- Navbar -->
    <div class="navbar-wrapper">
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="navbar-brand">
                            <?php if ( get_header_image() ) { ?>

                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                                </a>

                            <?php } else { ?>
                                <a href="<?php echo esc_url( home_url() ); ?>/" title="<?php bloginfo('name'); ?>"
                                        rel="homepage">
                                    <h2 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo('description'); ?>" rel="home"><?php bloginfo('name'); ?></a></h2><p class="site_tagline"><?php bloginfo('description'); ?></p>
                                </a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <?php
                            $walker = has_nav_menu( 'top-menu' ) ? new wp_bootstrap_navwalker() : new IP_Bootstrap_Page_Walker();
                            $args = array(
                                'theme_location' => 'top-menu',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav navbar-nav homenav1',
                                'fallback_cb' => 'impulse_press_page_menu',
                                'walker' => $walker,
                            );
                            wp_nav_menu($args);
                        ?>


                    </div>

                </div>
            </div><!-- Navbar -->
       </div>

