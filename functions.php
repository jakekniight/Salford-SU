<?php

function salfordSU_script_enqueue() {

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/salfordSU.css', array(), '1.0.0', 'all' );
  wp_enqueue_script('customjs', get_template_directory_uri() .'/js/salfordSU.js' , array() , '1.0.0' , true );
}

add_action('wp_enqueue_scripts','salfordSU_script_enqueue');

function salfordSU_theme_setup(){

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'salfordSU_theme_setup');


/*ADDING FUNCTIONALITY TO WORDPRESS*/
add_action( 'after_setup_theme', 'random_theme_setup' );
  function random_theme_setup() {
    add_theme_support( 'custom-background' );
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats');
  }
