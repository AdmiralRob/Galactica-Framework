<?php


/****************************************************
// Scripts and Styles
****************************************************/
function require_scripts() {  
	wp_enqueue_style( 'normalize', '//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/styles/foundation.min.css' );
	wp_enqueue_style( 'meanmenu-styles', get_template_directory_uri() . '/bower/jquery.meanmenu/meanmenu.min.css' );
    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/styles/app.css' );
    wp_enqueue_style( 'onthefly-styles', get_template_directory_uri() . '/style.css' );
  
    wp_register_script('mean-menu', get_template_directory_uri() . '/bower/jquery.meanmenu/jquery.meanmenu.min.js', true );
	wp_register_script('beacon', get_template_directory_uri() . '/js/app.js', true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'mean-menu' );
    wp_enqueue_script( 'beacon' );
}

add_action( 'wp_enqueue_scripts', 'require_scripts', 5);  


/****************************************************
// Registering Menus
****************************************************/
function galactica_menus() {
  register_nav_menus(
    array(
      'menu' => __( 'Main Menu' ),
	  'phone' => __( 'Phone Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

add_action( 'init', 'galactica_menus' );

/****************************************************
// Sidebars & Widgetizes Areas
****************************************************/
function galactica_sidebars() {

    register_sidebar(array(
        'id' => 'sidebar-1',
        'name' => __( 'Sidebar One' ),
        'description' => 'The primary sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
		'id'            => 'footer-left',
		'name'          => 'Left Footer Widget Area',
		'description'   => 'Appears in the footer section of the site on the left.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
		'id'            => 'footer-right',
		'name'          => 'Right Footer Widget Area',
		'description'   => 'Appears in the footer section of the site on the right.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
} 

add_action( 'widgets_init', 'galactica_sidebars' );


/****************************************************
// ADDITIONAL FEATURES
****************************************************/

// Post Thumbnails
add_theme_support( 'post-thumbnails' ); 


// Adding Custom Image Sizes.
add_image_size('featured', 1024, 350 , array( 'center', 'center') );
add_image_size('blog-thumbnail', 680, 250 , array( 'center', 'center') );


// Custom Excerpt Length.
function wpbf_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpbf_excerpt_length', 999 );


// Add Readmore to end of excerpts
function wpbf_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) .'">... Read More >></a>';
}

add_filter( 'excerpt_more', 'wpbf_excerpt_more' );

// Allow Shortcode in Widgets
add_filter('widget_text', 'do_shortcode');

?>