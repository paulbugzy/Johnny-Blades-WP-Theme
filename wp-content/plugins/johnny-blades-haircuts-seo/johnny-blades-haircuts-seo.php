<?php
/**
 * Plugin Name: Johnny Blades Haircuts SEO
 * Description: Advanced SEO optimization plugin for the Johnny Blades Haircuts theme.
 * Version: 1.4.0
 * Author: Paul Youhanna
 * Author URI: https://rockethosted.com
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function johnny_blades_haircuts_seo_init() {
  if ( is_admin() ) {
    add_action( 'admin_menu', 'johnny_blades_haircuts_seo_menu' );
    return;
  }

  add_action( 'wp_head', 'johnny_blades_haircuts_add_seo_meta_tags' );
}

function johnny_blades_haircuts_add_seo_meta_tags() {
  echo '<meta name="description" content="Johnny Blades Haircuts - Best haircuts in town.">';
  echo '<meta property="og:title" content="Johnny Blades Haircuts">';
  echo '<meta property="og:description" content="Visit Johnny Blades Haircuts for the best haircuts.">';
  echo '<meta name="twitter:card" content="summary">';
  echo '<meta name="twitter:title" content="Johnny Blades Haircuts">';
  echo '<meta name="twitter:description" content="Best haircuts in town.">';
  echo '<script type="application/ld+json">';
  echo json_encode( array(
    '@context' => 'https://schema.org',
    '@type' => 'BarberShop',
    'name' => 'Johnny Blades Haircuts',
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
      'https://www.facebook.com/johnnybladeshaircuts',
      'https://www.instagram.com/johnnybladeshaircuts'
    )
  ) );
  echo '</script>';
}

function johnny_blades_haircuts_seo_menu() {
  add_options_page(
    'Johnny Blades Haircuts SEO Settings',
    'Johnny Blades Haircuts SEO',
    'manage_options',
    'johnny-blades-haircuts-seo',
    'johnny_blades_haircuts_seo_options_page'
  );
}

function johnny_blades_haircuts_seo_options_page() {
  echo '<div class="wrap">';
  echo '<h1>Johnny Blades Haircuts SEO Settings</h1>';
  echo '<form method="post" action="options.php">';
  settings_fields( 'johnny_blades_haircuts_seo_options' );
  do_settings_sections( 'johnny_blades_haircuts_seo' );
  submit_button();
  echo '</form>';
  echo '</div>';
}

add_action( 'plugins_loaded', 'johnny_blades_haircuts_seo_init' );
