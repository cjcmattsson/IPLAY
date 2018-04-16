<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body <?php body_class(); ?>>

    <header>
        <!-- WEB NAV -->
        <nav class="menu-nav" role="navigation">
            <div class="logo">
                <a href="#home"><img src="<?php
                    $variable = get_field('logotype', 'option');
                    echo $variable['url'];
                 ?>" alt=""></a>
            </div>
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>

        <!-- MOBILE NAV -->
        <nav class="mobile-nav" role="navigation">
            <div class="logo-mobile">
                <a href="#home"><img src="themes/IPLAY/assets/images/iplay.png" alt=""></a>
            </div>
            <button class="hamburger hamburger--spin" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
            <div class="mobile-small-menu">
                <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
            </div>
        </nav>
    </header>
