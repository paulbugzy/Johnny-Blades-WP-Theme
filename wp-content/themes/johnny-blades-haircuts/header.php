<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header role="banner">
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p><?php bloginfo( 'description' ); ?></p>
    <nav role="navigation" aria-label="Main Menu">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    <section id="social-media-header">
      <ul>
        <li><a href="https://www.facebook.com/johnnybladeshaircuts" target="_blank">Facebook</a></li>
        <li><a href="https://www.instagram.com/johnnybladeshaircuts" target="_blank">Instagram</a></li>
        <li><a href="https://twitter.com/johnnybladeshaircuts" target="_blank">X</a></li>
      </ul>
    </section>
  </header>
