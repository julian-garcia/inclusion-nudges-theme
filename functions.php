<?php

function config_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

function enqueue_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/dist/main.css', array(), $version, 'all' );
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

function widget_areas() {
  register_sidebar( 
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Widget',
      'id' => 'footer-1',
      'description' => 'Footer Widget Area',
    )
  );
  register_sidebar( 
    array(
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Column 1',
      'id' => 'footer-col-1',
      'description' => 'Footer Column 1',
    )
  );
  register_sidebar( 
    array(
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Column 2',
      'id' => 'footer-col-2',
      'description' => 'Footer Column 2',
    )
  );
  register_sidebar( 
    array(
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Column 3',
      'id' => 'footer-col-3',
      'description' => 'Footer Column 3',
    )
  );
  register_sidebar( 
    array(
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Footer Column 4',
      'id' => 'footer-col-4',
      'description' => 'Footer Column 4',
    )
  );
}

function testimonial_post_type() {
  register_post_type('testimonial',
    array(
      'rewrite' => array('slug' => 'testimonial'),
      'labels' => array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial'
      ),
      'menu_icon' => 'dashicons-groups',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'supports' => array(
        'title', 'editor', 'excerpt'
      )
    )
  );
}

function question_post_type() {
  register_post_type('question',
    array(
      'rewrite' => array('slug' => 'question'),
      'labels' => array(
        'name' => 'Questions',
        'singular_name' => 'Question',
        'add_new_item' => 'Add New Question',
        'edit_item' => 'Edit Question'
      ),
      'menu_icon' => 'dashicons-format-status',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'supports' => array(
        'title', 'editor'
      )
    )
  );
}

function testimonials_shortcode() {
  $output = '<div class="splide" tabindex="-1"> <div class="splide__track"> <ul class="splide__list" tabindex="-1">';
  $query = new  WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'rand' ) );
  while ( $query->have_posts() ) : $query->the_post();
      $output .= '<li class="splide__slide" tabindex="-1">' . '<strong>' . get_the_content() . '</strong>' . get_the_title() . '<br>' . get_the_excerpt() . '</li>';
  endwhile;
  wp_reset_query();
  return $output . ' </ul> </div> </div> ';
}

function questions_shortcode() {
  $output = '<div class="splide-questions" tabindex="-1"> <div class="splide__track"> <ul class="splide__list" tabindex="-1">';
  $query = new  WP_Query( array( 'post_type' => 'question', 'orderby' => 'rand' ) );
  while ( $query->have_posts() ) : $query->the_post();
      $output .= '<li class="splide__slide" tabindex="-1">' . '<h3 class="question">' . get_the_content() . '</h3>' . '</li>';
  endwhile;
  wp_reset_query();
  return $output . ' </ul> </div> </div> ';
}

function manifest_link() {   
  echo '<link rel="manifest" href="' . get_template_directory_uri() . '/manifest.json">';
}

add_action( 'after_setup_theme', 'config_theme_support' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_script' );
add_action( 'init', 'setup_menus' );
add_action( 'init', 'testimonial_post_type' );
add_action( 'init', 'question_post_type' );
add_action( 'widgets_init', 'widget_areas' );
add_action( 'wp_head', 'manifest_link' );
add_post_type_support( 'page', 'excerpt' );
add_shortcode( 'testimonials' , 'testimonials_shortcode');
add_shortcode( 'questions' , 'questions_shortcode');
