<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="primary">
 *
 * @package Catch Themes
 * @subpackage Simple_Catch_Pro
 * @since Simple Catch 1.0
 */
?><!DOCTYPE html>
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
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/a5bdefb0dd.js"></script>
    <script>
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        ga('send', 'event', 'Feedback', 'Submit');
      }, false );
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'simple-catch'); ?></a>
    <?php
    /**
     * simplecatch_before hook
     */
    do_action('simplecatch_before');
    ?>

    <?php do_action('simplecatch_before_header'); ?>

    <header id="masthead" class="site-header" role="banner">
        <div class="top-bg clearfix">

            
            <ul class="button-list">
                <li>
                    <?php if (get_theme_mod('button_display', 'show') == 'show') : ?>
                        <a class="donate header-button" href="<?php echo get_theme_mod('url_donate_button'); ?>">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <span><?php echo get_theme_mod('donate_button'); ?></span>
                        </a>
                    <?php endif ?>
                </li>
                <li>
                    <a class="help header-button" href="<?php echo get_theme_mod('url_help_button'); ?>">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <span><?php echo get_theme_mod('help_button'); ?></span>
                    </a>
                </li>
                <li>
                    <a class="exit header-button" href="<?php echo get_theme_mod('url_exit_button'); ?>">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                        <span><?php echo get_theme_mod('exit_button'); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="wrapper clearfix">
            <?php
            /**
             * simplecatch_before_headercontent hook
             */
            do_action('simplecatch_before_headercontent');
            ?>

            <div id="header-content" class="clearfix">

                <?php
                /**
                 * simplecatch_before_sidebartop hook
                 *
                 * @hooked simplecatch_headerdetails - 10
                 */
                do_action('simplecatch_before_sidebartop');
                ?>


                <?php
                /**
                 * simplecatch_after_sidebartop hook
                 *
                 */
                do_action('simplecatch_after_sidebartop');
                ?>


                <div class="hot-line"><span class="phone-title"><?php echo get_theme_mod('title_phone_line'); ?></span>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span><?php echo get_theme_mod('number_phone_line'); ?></span>
                </div>
            </div> <!-- #header-content -->

            <?php
            /**
             * simplecatch_after_headercontent hook
             *
             * @hooked simplecatch_custom_header_image - 10
             * @hooked simplecatch_menu - 15
             * @hooked simplecatch_slider_display - 20
             * @hooked simplecatch_breadcrumb_display - 25
             */
            do_action('simplecatch_after_headercontent');
            ?>

        </div><!-- .wrapper-->

        <div class="bottom-bg"></div>
    
    </header><!-- #branding -->

    <?php do_action('simplecatch_after_header'); ?>

    <?php
    /**
     * simplecatch_before_main hook
     */
    do_action('simplecatch_before_main');
    ?>

    <div id="content" class="site-content clearfix">
        <div class="wrapper clearfix">

            <?php
            /**
             * simplecatch_above_primary hook
             */
            do_action('simplecatch_above_primary');
            ?>

            <div id="primary" class="content-area">
                <main id="main" class="site-main clearfix" role="main">