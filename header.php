<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exitus GP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  </head>
  <body>
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="https://exitusgp.com.br/"><span>
              <?php
          
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
          if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" class="img-fluid">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
            echo '<p class="lead">' . get_bloginfo('description') . '</p>';
          }
        
        ?>

              </span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
              </button>
              <?php
              wp_nav_menu( array(
                'theme_location'    => 'principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'ftco-nav',
                'menu_class'        => 'navbar-nav ml-auto text-uppercase font-weight-bolder',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
              ?>
    
              
            </div>
          </nav>

         