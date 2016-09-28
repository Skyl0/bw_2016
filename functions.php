<?php
/**
 * Author: Marc Ernst (CEO)
 * Company: SkyIT Webdesign - 64287 Darmstadt
 * Description: WP-Functions
 * Version : 0.1.0
 */

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu'),
      'imprint-menu' => __('Imprint Menu')
    )
  );
}

add_action('after_setup_theme', 'register_my_menus');

function custom_sidebars()
{

  register_sidebars(4, array
  (
    'name' => __('Panel Startseite %d', 'me'),
    'id' => 'panel-home',
    'description' => 'Widget Position for home panel',
    'class' => 'panel-sidebar',
    'before_widget' => '<div class="widget-panel-%d">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="panel-title">',
    'after_title' => '</h2>'
  ));

  $args2 = array
  (
    'name' => __('Short Bio Sidebar', 'me'),
    'id' => 'short-bio',
    'description' => 'Widget Position for short bio',
    'class' => 'shortbio-sidebar',
    'before_widget' => '<div class="widget-bio">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>'
  );
  register_sidebars(1, $args2);

}

add_action('widgets_init', 'custom_sidebars');