<?php
/**
 * Materialize-Starter-WP-Theme functionality
 *
 * @package WordPress
 * @subpackage materialize-starter-wp-theme
 * @since Materialize-Starter-WP-Theme functionality 1.0
 */

/*------------------------------------*\
	Actions + Filters
\*------------------------------------*/

// Customize post edit link
function wop_materilize_starter_wp_theme_custom_post_edit_link($output) {
    $output = str_replace('class="post-edit-link"', 'class="btn waves-effect waves-red red-text body-color"', $output);
    return $output;
}
add_filter('edit_post_link', 'wop_materilize_starter_wp_theme_custom_post_edit_link');

// Customize comment reply link
function wop_materilize_starter_wp_theme_custom_comment_reply($class) {
	$class = str_replace("class='comment-reply-link", "class='btn body-color header-color", $class);
    return $class;
}
add_filter('comment_reply_link', 'wop_materilize_starter_wp_theme_custom_comment_reply');

// Customize expert more link
function wop_materilize_starter_wp_theme_blank_view_article($more)
{
    global $post;
    return '<br><br><a class="view-article btn body-color primary-text-color" href="' . get_permalink($post->ID) . '">' . __('Read more', 'materialize-starter-wp-theme') . '</a>';
}
add_filter('excerpt_more', 'wop_materilize_starter_wp_theme_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts



//Add custom colors to theme
function wop_materilize_starter_wp_theme_cutom_colors( $wp_customize ) {
 
    $wp_customize->add_section('materialize-starter-wp-theme_cutom_colors', array(
        'title'         => __( 'Color Settings', 'materialize-starter-wp-theme' ),
        'description'   => __( 'set your custom colors', 'materialize-starter-wp-theme' ),
        'priority'      => 20
    ));
    
//Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'background_color',
    )));

    //Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'background_color',
    )));
    
     //Customize primary color
    $wp_customize->add_setting('primary_color', array(
        'default' => '#29b6f6',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __( 'Primary color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'primary_color',
    )));
    
    //Customize secondary color
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#ff9800',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary color - for Buttons & CTA', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'secondary_color',
    )));
    
    //Customize footer color
    $wp_customize->add_setting('footer_color', array(
        'default' => '#ff9800',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
        'label'    => __( 'Footer color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'footer_color',
    )));
    
    //Customize header color
    $wp_customize->add_setting('header_color', array(
        'default' => '#ff9800',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_color', array(
        'label'    => __( 'Header color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'header_color',
    )));
    
    //Customize icon color
    $wp_customize->add_setting('icon_color', array(
        'default' => '#29b6f6',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'icon_color', array(
        'label'    => __( 'Icon color', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_cutom_colors',
		'settings' => 'icon_color',
    )));
    
}
add_action( 'customize_register', 'wop_materilize_starter_wp_theme_cutom_colors' );

function wop_materilize_starter_wp_theme_css_customizer(){
?>
    <style type="text/css">
        body, .body-color, .body-color:hover {background-color: #<?php echo get_theme_mod( 'background_color' ); ?>;}
        
        .primary-color {background-color: <?php if ( get_theme_mod( 'primary_color' ) ):  echo get_theme_mod( 'primary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        .primary-text-color,
        .view-article {color: <?php if ( get_theme_mod( 'primary_color' ) ):  echo get_theme_mod( 'primary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .secondary-color, .pagination li span.current {background-color: <?php if ( get_theme_mod( 'secondary_color' ) ):  echo get_theme_mod( 'secondary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .footer-color {background-color: <?php if ( get_theme_mod( 'footer_color' ) ):  echo get_theme_mod( 'footer_color' );
            else: echo '#ff9800'; endif; ?>!important;
            }
        
        .header-color, .header-color .active, .header-color a, .input-field :focus:not([readonly]) + label {color: <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>!important;
            }
        
        .material-icons {color: <?php if ( get_theme_mod( 'icon_color' ) ):  echo get_theme_mod( 'icon_color' );
            else: echo '#29b6f6'; endif; ?>;
            }
        
        blockquote {
            border-left: 5px solid <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>;
        }
        textarea.materialize-textarea:focus:not([readonly]),
        input[type=text]:focus:not([readonly]) {
            border-bottom: 1px solid <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>;
            box-shadow: 0 1px 0 0 <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>;
        }
        
    </style>
<?php
}
add_action( 'wp_head', 'wop_materilize_starter_wp_theme_css_customizer' );


// Add your images to the theme
function wop_materilize_starter_wp_theme_images_customizer( $wp_customize ) {

    $wp_customize->add_section(
        'materialize-starter-wp-theme_images_section',
        array(
    	'title'            => __( 'Images Setting', 'materialize-starter-wp-theme' ),
    	'description'      => __('Upload your Imges to theme', 'materialize-starter-wp-theme' ),
    	'priority'         => 25
	) );
    
    // Add your logo to navbar
	$wp_customize->add_setting(
        'materialize-starter-wp-theme_logo', 
        array(
            'default'        => get_template_directory_uri() . '/img/default-logo.png',
            'width'         => 60,
	    	'height'        => 60,
            'uploads'       => true,
            'sanitize_callback' => 'esc_url_raw'
            )
    );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'materialize-starter-wp-theme_logo', array(

    	'label'    => __( 'Current Logo', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_images_section',
		'settings' => 'materialize-starter-wp-theme_logo',
	) ) );
    
    
    // Add Avatar to Header
    $wp_customize->add_setting(
        'materialize-starter-wp-theme_avatar_header', 
        array(
            'default'       => get_template_directory_uri() . '/img/default-avatar.jpg',
            'width'         => 128,
            'height'        => 128,
            'uploads'       => true,
            'sanitize_callback' => 'esc_url_raw'
                )
    );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'materializepresstheme_avatar_header', array(

    	'label'    => __( 'Current Avatar', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_images_section',
		'settings' => 'materialize-starter-wp-theme_avatar_header',
	) ) );
    
    // Add background to Avatar
    $wp_customize->add_setting(
        'materialize-starter-wp-theme_avatar_header_background', 
        array(
            'default'       => get_template_directory_uri() . '/img/default-background-sidebar-nav.png',
            'width'         => 240,
            'height'        => 120,
            'uploads'       => true,
            'sanitize_callback' => 'esc_url_raw'
                )
    );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'materializepresstheme_avatar_header_background', array(

    	'label'    => __( 'Current Avatar Background', 'materialize-starter-wp-theme' ),
		'section'  => 'materialize-starter-wp-theme_images_section',
		'settings' => 'materialize-starter-wp-theme_avatar_header_background',
	) ) );
}
add_action('customize_register', 'wop_materilize_starter_wp_theme_images_customizer');


// Add Theme settings
function wop_materilize_starter_wp_theme_theme_customizer( $wp_customize ) {
    
    
    $wp_customize->add_section(
        'materialize-starter-wp-theme_theme_section',
        array(
    	'title'            => __( 'Theme Setting', 'materialize-starter-wp-theme' ),
    	'description'      => __('Customize Theme', 'materialize-starter-wp-theme' ),
    	'priority'         => 30
	) );
    
    // Add fixed navbar option
    $wp_customize->add_setting('materialize-starter-wp-theme_fixed_navbar', array(
        'default'       => false
    ) );
    
    $wp_customize->add_control( 'materialize-starter-wp-theme_fixed_navbar', array(
    'label'    => __( 'Fix Navigation Bar', 'materialize-starter-wp-theme' ),
    'section'  => 'materialize-starter-wp-theme_theme_section',
    'settings' => 'materialize-starter-wp-theme_fixed_navbar',
    'type'     => 'checkbox',
    ) );
    
    // Add copyright text
    $wp_customize->add_setting('materialize-starter-wp-theme_copyright_text', array(
        'default'       => ''
    ) );
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'materialize-starter-wp-theme_copyright_text', array(
    'label'    => __( 'Your Custom Copyright Text', 'materialize-starter-wp-theme' ),
    'section'  => 'materialize-starter-wp-theme_theme_section',
    'settings' => 'materialize-starter-wp-theme_copyright_text',
    'type'     => 'text',
    ) ) );
}
add_action('customize_register', 'wop_materilize_starter_wp_theme_theme_customizer');

function wop_materiialize_starter_wp_theme_js_customizer() {
    ?>
    <script type="text/javascript">        
        <?php if (get_theme_mod( 'materialize-starter-wp-theme_fixed_navbar' )) : 
    
                    echo '$("#masthead").addClass("navbar-fixed");'; 
              else: 
                    echo '$("#masthead").removeClass("navbar-fixed");'; 
              endif; ?>        
    </script>
    <?php
}
add_action( 'wp_footer', 'wop_materiialize_starter_wp_theme_js_customizer' )


?>