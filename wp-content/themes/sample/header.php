<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header l-header u-margin__bottom--xxxlarge">
  <?php 
  /*
  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
  <h4><?php bloginfo( 'description' ); ?></h4>
  */
  ?>
  <div>
    <img src="/wp-content/uploads/2021/10/logo_main.png" alt="Life.com" width="" height="" class="u-img--full">
  </div>
</header>