<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =========================
          FAV AND TOUCH ICONS
    ============================== -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/images/apple-touch-icon-114x114.png">
    <!-- =========================
         STYLESHEETS
    ============================== -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/assets/elegant-icons/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/assets/app-icons/styles.css">
    <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
    <!-- WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>

    <!-- CAROUSEL AND LIGHTBOX -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/nivo_themes/default/default.css">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css">

    <!-- CUSTOM STYLESHEETS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/styles.css">

    <!-- COLORS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/colors/blue.css">
    <!-- DEFAULT COLOR/ CURRENTLY USING -->


    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css">

    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<!-- =========================
     HEADER
============================== -->
<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
