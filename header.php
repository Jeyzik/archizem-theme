<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    


    <title>Archizem</title>
  </head>
  <body>
    <div class="wrapper">
      <!-- header -->
      <header class="header">
        <div class="container">
          <div class="flex header-inner header-desktop">
            <div class="left">

                <?php
                    wp_nav_menu(array(
                        'container' => 'ul', 
                        'container_class' => 'navigate flex', 
                        'menu_class' => 'item-menu navigate flex',
                    ));
                ?>

            </div>
            <div class="center">
              <a href="/" class="logo">
                <?php the_custom_logo(); ?>
              </a>
            </div>
            <div class="right">
              <div class="info-lang flex">
                <div class="choose-language">
                  <a href="#">Deu</a><a href="#">Eng</a><a href="#">Ua</a>
                </div>
                <div class="phone">
                  <a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
                </div>
                <button class="btn-call">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="call button" />
                </button>
              </div>
            </div>
          </div>
          <div class="header-mobile">
            <div class="mobile-inner">
              <div class="left">
                <a href="/"><?php the_custom_logo(); ?></a>
              </div>
              <div class="right">
                <img
                  class="burger-icon"
                  src="<?php bloginfo('template_url'); ?>/assets/img/burder.png"
                  alt="burger icon"
                />
              </div>
              <div class="burder-menu-full">
                <img class="close-menu" src="<?php bloginfo('template_url'); ?>/assets/img/close.png" alt="close" />
                <?php
                    wp_nav_menu(array(
                        'container' => 'ul', 
                        'container_class' => 'mobile-navigate flex', 
                        'menu_class' => 'item-menu mobile-navigate flex', 
                    ));
                ?>
              </div>
            </div>
          </div>
        </div>
      </header>