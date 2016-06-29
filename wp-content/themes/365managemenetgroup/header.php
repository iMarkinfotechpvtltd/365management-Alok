<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365 Management</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scrol.css">
</head>

<body>
    <!-- Main Header Starts-->
    <header class="main-header">
        <div class="container">
           <div class="top-head">
               <div class="header-phone"><a href="tel:<?php echo get_option_tree('header_phone_number'); ?>"><span data-unicode="e183" class="glyphicon glyphicon-phone-alt"></span> <?php echo get_option_tree('change_call_us_text'); ?> <?php echo get_option_tree('header_phone_number'); ?></a></div>
               
               <div class="social">
                <ul>
                 <li><?php echo get_option_tree('change_connect_with_us_text'); ?></li>
                 <li>
				 <?php
		         $face=get_option_tree('facebook');
		         if($face==""){}else{ ?>
				 <a target="_blank" href="<?php echo $face; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?></li>
                 <li>
				 <?php 
				 $twi=get_option_tree('twitter');
				 if($twi==""){}else { ?>
				 <a target="_blank" href="<?php echo $twi; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php }?></li>
                 <li>
				 <?php
				 $din=get_option_tree('linkedin');
				 if($din==""){}else { ?>
				 <a target="_blank" href="<?php echo $din; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php }?></li>
                 <li>
				 <?php
				 $inst=get_option_tree('instagram');
				 if($inst==""){}else { ?>
				 <a target="_blank" href="<?php echo $inst; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?></li>
                </ul>
              </div>               
               <div class="menu">
                   <a href="#" class="see-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
                   <div  class="menu-open">
                   <ul>
				   <?php 
                    $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'Header',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '<span></span>',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                   );

                wp_nav_menu( $defaults ); ?>
                      <!-- <li><a href="index.html" class="active">Home<span></span></a></li>
                       <li><a href="#">About<span></span></a></li>
                       <li><a href="artist.html">Artist<span></span></a></li>
                       <li><a href="portfolio.html">Portfolio<span></span></a></li>
                       <li><a href="news.html">News & Events<span></span></a></li>
                       <li><a href="career.html">Careers<span></span></a></li>
                       <li><a href="contact.html">Contact Us<span></span></a></li>-->
                   </ul>
                   </div>
               </div>
               <div class="brand">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_option_tree('logo'); ?>" alt="logo" /></a>
               </div>
            </div>
               
        </div>
    </header>
    <!-- Main Header Ends-->