<?php
/*
 *  Author: WebdesignOfPassion
 *  URL: webdesignofpassion.de
 *  Custom functions, support, custom settings
 */

/*-------------------------------------------------------*\
	   -------------    INDEX   ----------------
                    ____________

       1. External Modules & Files
       2. Theme Support
       3. Functions
\*-------------------------------------------------------*/

/*-------------------------------------------------------*\
	1. External Modules & Files
\*-------------------------------------------------------*/

require  get_template_directory() . '/inc/custom-nav.php';
require  get_template_directory() . '/inc/custom-nav-mobile.php';
require get_template_directory() . '/inc/customizer.php';


/*-------------------------------------------------------*\
	2. Theme Support
\*-------------------------------------------------------*/

if ( function_exists( 'add_theme_support' ) ){

    // Localisation Support
    load_theme_textdomain('materialize-starter-wp-theme', get_template_directory() . '/languages');

    // Add Title-Tag Support
    add_theme_support( 'title-tag' );

    // Add Automatic Feed Links (RSS) for post and comment in the head
    add_theme_support( 'automatic_feed_links' );

    // Add Post Thumbnails support
    add_theme_support( 'post-thumbnails' );
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

}


/*------------------------------------*\
	3. Functions
\*------------------------------------*/

// Custom Excerpts
function wop_woptheme_post_index($length) {
    return 30;
}

function wop_woptheme_archiv_index($length) {
    return 20;
}

// Create the Custom Excerpts callback
function wop_materilize_starter_wp_theme_wp_excerpt($length_callback = '', $more_callback = ''){
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

function wop_materilize_starter_wp_theme_pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li class=\"waves-effect\">$page</li>";
        }
       echo '</ul>';
        }
}
add_action('init', 'wop_materilize_starter_wp_theme_pagination');


function wop_materilize_starter_wp_theme_register_menus(){
    register_nav_menus( array(
        'header-menu' => __('Main Navigation', 'materialize-starter-wp-theme')
    ) );
}
add_action( 'init', 'wop_materilize_starter_wp_theme_register_menus' );


//Add Sidebar
function wop_materilize_starter_wp_theme_widgets_init() {

    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'materialize-starter-wp-theme'),
        'description' => __('Sidebar Menu 1', 'materialize-starter-wp-theme'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="truncate header-color card-panel">',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'materialize-starter-wp-theme'),
        'description' => __('Sidebar Menu 2', 'materialize-starter-wp-theme'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="truncate header-color card-panel">',
        'after_title' => '</h3>'
    ));

      // Define Widget Area Homepage Intro
    register_sidebar(array(
        'name' => __('Homepage Intro', 'materialize-starter-wp-theme'),
        'description' => __('Homepage Intro Content', 'materialize-starter-wp-theme'),
        'id' => 'widget-homepage-intro',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="center header-color truncate">',
        'after_title' => '</h2>'
    ));

    // Define Widget Area Homepage ICON 1
    register_sidebar(array(
        'name' => __('Homepage ICON 1', 'materialize-starter-wp-theme'),
        'description' => __('Add Widget to icon section 1', 'materialize-starter-wp-theme'),
        'id' => 'widget-homepage-icon1',
        'before_widget' => '<div class="col s12 m4">
                    <div id="%1$s" class="%2$s icon-block center">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="center header-color">',
        'after_title' => '</h3>'
    ));
        // Define Widget Area Homepage ICON 2
    register_sidebar(array(
        'name' => __('Homepage ICON 2', 'materialize-starter-wp-theme'),
        'description' => __('Add Widget to icon section 2', 'materialize-starter-wp-theme'),
        'id' => 'widget-homepage-icon2',
        'before_widget' => '<div class="col s12 m4">
                    <div id="%1$s" class="%2$s icon-block center">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="center heder-color">',
        'after_title' => '</h3>'
    ));
        // Define Widget Area Homepage ICON 3
    register_sidebar(array(
        'name' => __('Homepage ICON 3', 'materialize-starter-wp-theme'),
        'description' => __('Add Widget to icon section 3', 'materialize-starter-wp-theme'),
        'id' => 'widget-homepage-icon3',
        'before_widget' => '<div class="col s12 m4">
                    <div id="%1$s" class="%2$s icon-block center">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="center header-color">',
        'after_title' => '</h2>'
    ));

        // Define Widget Area Footer 1
    register_sidebar(array(
        'name' => __('Widget Area Footer 1', 'materialize-starter-wp-theme'),
        'description' => __('Footer area widget on left side', 'materialize-starter-wp-theme'),
        'id' => 'footer-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="truncate">',
        'after_title' => '</h4>'
    ));

    // Define Widget Area Footer 2
    register_sidebar(array(
        'name' => __('Widget Area Footer 2', 'materialize-starter-wp-theme'),
        'description' => __('Footer area widget center', 'materialize-starter-wp-theme'),
        'id' => 'footer-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="truncate">',
        'after_title' => '</h4>'
    ));

    // Define Widget Area Footer 3
    register_sidebar(array(
        'name' => __('Widget Area Footer 3', 'materialize-starter-wp-theme'),
        'description' => __('Footer area widget on right side', 'materialize-starter-wp-theme'),
        'id' => 'footer-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="truncate">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'wop_materilize_starter_wp_theme_widgets_init' );


//Load Styles
function wop_materilize_starter_wp_theme_style() {

    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_style( 'material-icons', 'http://fonts.googleapis.com/icon?family=Material+Icons' );
        wp_enqueue_style( 'material-icons' );

        wp_register_style( 'materialize', get_template_directory_uri() . '/css/materialize.min.css', array(), '0.9.7', 'all' );
        wp_enqueue_style( 'materialize' );

        wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style' );
    }
}
add_action( 'init', 'wop_materilize_starter_wp_theme_style' );

// Load JavaScripts
function wop_materilize_starter_wp_theme_footer_scripts() {

  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '2.1.3', false );
        wp_enqueue_script( 'jquery-js');


        wp_register_script( 'material-js', get_template_directory_uri() . '/js/materialize.min.js', array( 'jquery-js' ), '0.9.7', true );
        wp_enqueue_script( 'material-js');

        wp_register_script( 'init-js', get_template_directory_uri() . '/js/init.js', array( 'material-js' ), '1.0.0', true); // Custom script
        wp_enqueue_script( 'init-js');
  }

}
add_action( 'init', 'wop_materilize_starter_wp_theme_footer_scripts' );


?>
