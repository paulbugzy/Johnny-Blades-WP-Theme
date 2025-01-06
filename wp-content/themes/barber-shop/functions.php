&lt;?php

function barber_shop_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus( array(
    'main-menu' => __( 'Main Menu', 'barber-shop' ),
  ) );
}

add_action( 'after_setup_theme', 'barber_shop_setup' );

function barber_shop_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'barber-shop' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'barber-shop' ),
    'before_widget' => '&lt;section id="%1$s" class="widget %2$s"&gt;',
    'after_widget'  => '&lt;/section&gt;',
    'before_title'  => '&lt;h2 class="widget-title"&gt;',
    'after_title'   => '&lt;/h2&gt;',
  ) );
}

add_action( 'widgets_init', 'barber_shop_widgets_init' );
