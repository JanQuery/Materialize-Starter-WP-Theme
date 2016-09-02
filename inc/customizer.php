<?php
/**
 * Materialize-Starter-WP-Theme functionality
 *
 * @package WordPress
 * @subpackage materilize-starter-wp-theme
 * @since Materialize-Starter-WP-Theme functionality 1.0
 */

/*------------------------------------*\
	Actions + Filters #29b6f6
\*------------------------------------*/

//Add custom colors to theme
function wop_materilize_starter_wp_theme_cutom_colors( $wp_customize ) {
 
    $wp_customize->add_section('materilize-starter-wp-theme_cutom_colors', array(
        'title'         => __( 'Color Settings', 'materilize-starter-wp-theme' ),
        'priority'      => 20,
        'description'   => __( 'set your custom colors', 'materilize-starter-wp-theme' )
    ));
    
//Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'background_color',
    )));

    //Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'background_color',
    )));
    
     //Customize primary color
    $wp_customize->add_setting('primary_color', array(
        'default' => '#29b6f6'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __( 'Primary color or Main color (class="primary-color")', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'primary_color',
    )));
    
    //Customize secondary color
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#f44336'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary color - for Buttons & CTA (class="secondary-color")', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'secondary_color',
    )));
    
    //Customize footer color
    $wp_customize->add_setting('footer_color', array(
        'default' => '#ff9800'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
        'label'    => __( 'Footer color (class="footer-color")', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'footer_color',
    )));
    
    //Customize header color
    $wp_customize->add_setting('header_color', array(
        'default' => '#ff9800'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_color', array(
        'label'    => __( 'Header color (class="header-color")', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'header_color',
    )));
    
    //Customize icon color
    $wp_customize->add_setting('icon_color', array(
        'default' => '#29b6f6'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'icon_color', array(
        'label'    => __( 'Icon color (class="material-icons")', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_cutom_colors',
		'settings' => 'icon_color',
    )));
    
}
function wop_materilize_starter_wp_theme_css_customizer(){
?>
    <style type="text/css">
        body {background-color: #<?php echo get_theme_mod( 'background_color' ); ?>;}
        
        .primary-color {background-color: <?php if ( get_theme_mod( 'primary_color' ) ):  echo get_theme_mod( 'primary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        .primary-text-color,
        .view-article {color: <?php if ( get_theme_mod( 'primary_color' ) ):  echo get_theme_mod( 'primary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .secondary-color {background-color: <?php if ( get_theme_mod( 'secondary_color' ) ):  echo get_theme_mod( 'secondary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .footer-color {background-color: <?php if ( get_theme_mod( 'footer_color' ) ):  echo get_theme_mod( 'footer_color' );
            else: echo '#ff9800'; endif; ?>!important;
            }
        
        .header-color, .header-color a, a.post-edit-link {color: <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
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
add_action( 'customize_register', 'wop_materilize_starter_wp_theme_cutom_colors' );


// Add your logo to navbar
function wop_materilize_starter_wp_theme_logo_customizer( $wp_customize ) {

    $wp_customize->add_section(
        'materilize-starter-wp-theme_logo_section',
        array(
    	'title'            => __( 'Logo', 'materilize-starter-wp-theme' ),
    	'priority'         => 65,
    	'description'      => __('Upload your Logo to navigation bar', 'materilize-starter-wp-theme' ),
	) );

	$wp_customize->add_setting(
        'materilize-starter-wp-theme_logo', 
        array(
            'default'        => get_template_directory_uri() . '/img/default-logo.png',
            'width'         => 56,
	    	'height'        => 56,
            'flex-width'    => false,
            'uploads'       => true,
            )
    );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'materilize-starter-wp-theme_logo', array(

    	'label'    => __( 'Aktuelles Logo', 'materilize-starter-wp-theme' ),
		'section'  => 'materilize-starter-wp-theme_logo_section',
		'settings' => 'materilize-starter-wp-theme_logo',
	) ) );

}
add_action('customize_register', 'wop_materilize_starter_wp_theme_logo_customizer');

?>