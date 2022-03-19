<?php

function config_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

function enqueue_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/dist/main.css', array(), $version, 'all' );
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=PT+Serif&display=swap">', array(), '', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css', array('main'), $version, 'all' );
}

function enqueue_script() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/dist/main.bundle.js', array(), $version, true );
}

function setup_menus() {
  $locations = array(
    'primary' => 'Primary Navigation'
  );
  register_nav_menus($locations);
}


add_action( 'after_setup_theme', 'config_theme_support' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_script' );
add_action( 'init', 'setup_menus' );
