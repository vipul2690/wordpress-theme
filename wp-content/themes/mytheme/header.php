<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title><?php wp_title(' | ', true, 'right'); ?></title>
    <link href="<?php bloginfo('stylesheet_url') ?>" rel= "stylesheet" >
    <?php wp_head(); ?>
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
                wp_nav_menu( array(
                    'theme_location'	=> 'primary',
                    'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
                    'menu_class'		=> 'navbar-nav mr-auto',
                    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                    'walker'			=> new WP_Bootstrap_Navwalker()
                ) );
            ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">