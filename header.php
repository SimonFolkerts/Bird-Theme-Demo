<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header>
    <h1>This is the Header</h1>
    <?php wp_nav_menu(array('theme_location' => 'header-menu'));
    ?>
  </header>
  <hr>
  <?php
  wp_body_open();
  ?>