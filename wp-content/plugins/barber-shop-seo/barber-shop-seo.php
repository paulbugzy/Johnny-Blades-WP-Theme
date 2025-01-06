&lt;?php
/**
 * Plugin Name: Barber Shop SEO
 * Description: Enhanced SEO optimization plugin for the Barber Shop theme.
 * Version: 1.1.0
 * Author: Bolt
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

function barber_shop_seo_init() {
  if ( is_admin() ) {
    add_action( 'admin_menu', 'barber_shop_seo_menu' );
    return;
  }

  add_action( 'wp_head', 'barber_shop_add_seo_meta_tags' );
}

function barber_shop_add_seo_meta_tags() {
  echo '&lt;meta name="description" content="Barber Shop - Best haircuts in town."&gt;';
  echo '&lt;meta property="og:title" content="Barber Shop"&gt;';
  echo '&lt;meta property="og:description" content="Visit our Barber Shop for the best haircuts."&gt;';
  echo '&lt;meta name="twitter:card" content="summary"&gt;';
  echo '&lt;meta name="twitter:title" content="Barber Shop"&gt;';
  echo '&lt;meta name="twitter:description" content="Best haircuts in town."&gt;';
  echo '&lt;script type="application/ld+json"&gt;';
  echo json_encode( array(
    '@context' => 'https://schema.org',
    '@type' => 'BarberShop',
    'name' => 'Barber Shop',
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
  echo '&lt;/script&gt;';
}

function barber_shop_seo_menu() {
  add_options_page(
    'Barber Shop SEO Settings',
    'Barber Shop SEO',
    'manage_options',
    'barber-shop-seo',
    'barber_shop_seo_options_page'
  );
}

function barber_shop_seo_options_page() {
  echo '&lt;div class="wrap"&gt;';
  echo '&lt;h1&gt;Barber Shop SEO Settings&lt;/h1&gt;';
  echo '&lt;form method="post" action="options.php"&gt;';
  settings_fields( 'barber_shop_seo_options' );
  do_settings_sections( 'barber_shop_seo' );
  submit_button();
  echo '&lt;/form&gt;';
  echo '&lt;/div&gt;';
}

add_action( 'plugins_loaded', 'barber_shop_seo_init' );
