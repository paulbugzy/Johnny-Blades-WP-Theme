<?php
/**
 * Plugin Name: Futuristic Barber Shop SEO
 * Description: Advanced SEO optimization plugin for the Futuristic Barber Shop theme.
 * Version: 1.2.0
 * Author: Bolt
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function futuristic_barber_shop_seo_init() {
  if ( is_admin() ) {
    add_action( 'admin_menu', 'futuristic_barber_shop_seo_menu' );
    return;
  }

  add_action( 'wp_head', 'futuristic_barber_shop_add_seo_meta_tags' );
}

function futuristic_barber_shop_add_seo_meta_tags() {
  echo '<meta name="description" content="Futuristic Barber Shop - Best haircuts in town.">';
  echo '<meta property="og:title" content="Futuristic Barber Shop">';
  echo '<meta property="og:description" content="Visit our Futuristic Barber Shop for the best haircuts.">';
  echo '<meta name="twitter:card" content="summary">';
  echo '<meta name="twitter:title" content="Futuristic Barber Shop">';
  echo '<meta name="twitter:description" content="Best haircuts in town.">';
  echo '<script type="application/ld+json">';
  echo json_encode( array(
    '@context' => 'https://schema.org',
    '@type' => 'BarberShop',
    'name' => 'Futuristic Barber Shop',
    'description' => 'Best haircuts in town.',
    'address' => array(
      '@type' => 'PostalAddress',
      'streetAddress' => '123 Barber St',
      'addressLocality' => 'Barber City',
      'addressRegion' => 'BC',
      'postalCode' => '12345',
      'addressCountry' => 'US'
    ),
    'telephone' => '+1234567890',
    'openingHours' => 'Mo,Tu,We,Th,Fr 09:00-19:00',
    'priceRange' => '$$',
    'image' => 'https://example.com/logo.png',
    'geo' => array(
      '@type' => 'GeoCoordinates',
      'latitude' => '37.4224764',
      'longitude' => '-122.0842499'
    ),
    'sameAs' => array(
      'https://www.facebook.com/barbershop',
      'https://www.instagram.com/barbershop'
    )
  ) );
  echo '</script>';
}

function futuristic_barber_shop_seo_menu() {
  add_options_page(
    'Futuristic Barber Shop SEO Settings',
    'Futuristic Barber Shop SEO',
    'manage_options',
    'futuristic-barber-shop-seo',
    'futuristic_barber_shop_seo_options_page'
  );
}

function futuristic_barber_shop_seo_options_page() {
  echo '<div class="wrap">';
  echo '<h1>Futuristic Barber Shop SEO Settings</h1>';
  echo '<form method="post" action="options.php">';
  settings_fields( 'futuristic_barber_shop_seo_options' );
  do_settings_sections( 'futuristic_barber_shop_seo' );
  submit_button();
  echo '</form>';
  echo '</div>';
}

add_action( 'plugins_loaded', 'futuristic_barber_shop_seo_init' );
