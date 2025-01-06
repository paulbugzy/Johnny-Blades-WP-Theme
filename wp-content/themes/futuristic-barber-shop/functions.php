<?php

function futuristic_barber_shop_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus( array(
    'main-menu' => __( 'Main Menu', 'futuristic-barber-shop' ),
  ) );
}

add_action( 'after_setup_theme', 'futuristic_barber_shop_setup' );

function futuristic_barber_shop_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'futuristic-barber-shop' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'futuristic-barber-shop' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}

add_action( 'widgets_init', 'futuristic_barber_shop_widgets_init' );

function futuristic_barber_shop_enqueue_scripts() {
  wp_enqueue_style( 'futuristic-barber-shop-style', get_stylesheet_uri() );
  wp_enqueue_script( 'futuristic-barber-shop-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'futuristic_barber_shop_enqueue_scripts' );

function futuristic_barber_shop_breadcrumbs() {
  if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
  }
}
