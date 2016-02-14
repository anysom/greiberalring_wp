<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <a href="<?php home_url(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
      <h5><?php bloginfo('description'); ?></h5>

      <!--Conditional to include markup or logic only on a specific page-->
      <?php if(is_page('About me')){ ?>
        <h3>Ups, i think this is the about me page</h3>
      <?php }?>

      <nav>
        <!-- print a menu, and pass args to the menu function to tell what kind of menu it is. Then i can reference the menu from WP backoffice and control it. -->
        <?php
        $args = array(
          'theme_location' => 'primary'
        );
        ?>

        <?php wp_nav_menu( $args ); ?>
      </nav>
    </header>
