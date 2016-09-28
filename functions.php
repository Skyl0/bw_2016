<?php
/**
 * Author: Marc Ernst (CEO)
 * Company: SkyIT Webdesign - 64287 Darmstadt
 * Description: WP-Functions
 * Version : 0.0.1
 */

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
if ( function_exists('register_sidebar') ) {
  register_sidebar();
}
function custom_sidebars()
{
//  register_sidebars(4, array('name' => 'panel_home_%d'));
  register_sidebar( array(
    'name' => 'panel_home_1',
    'id' => 'home_right_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}

add_action('init', 'register_my_menus');
add_action('widgets_init', 'custom_sidebars');