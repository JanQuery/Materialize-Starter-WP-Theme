<?php
/**
 * Materialize-Starter-WP-Theme functionality
 *
 * @package WordPress
 * @subpackage materializestarterwptheme
 * @since Materialize-Starter-WP-Theme functionality 1.0
 */

/*------------------------------------*\
	Actions + Filters #29b6f6
\*------------------------------------*/

//Add custom colors to theme
function wop_materializestarterwptheme_cutom_colors( $wp_customize ) {
 
    $wp_customize->add_section('materializestarterwptheme_cutom_colors', array(
        'title'         => __( 'Color Settings', 'materializestarterwptheme' ),
        'priority'      => 20,
        'description'   => __( 'set your custom colors', 'materializestarterwptheme' )
    ));
    
//Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'background_color',
    )));

    //Customize background color
    $wp_customize->add_setting('background_color', array(
        'default' => '#fff'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
        'label'    => __( 'Background color', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'background_color',
    )));
    
     //Customize primary color
    $wp_customize->add_setting('primary_color', array(
        'default' => '#29b6f6'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __( 'Primary color (class="primary-color")', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'primary_color',
    )));
    
    //Customize secondary color
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#f44336'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary color (class="secondary-color")', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'secondary_color',
    )));
    
    //Customize footer color
    $wp_customize->add_setting('footer_color', array(
        'default' => '#ff9800'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
        'label'    => __( 'Footer color (class="footer-color")', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'footer_color',
    )));
    
    //Customize header color
    $wp_customize->add_setting('header_color', array(
        'default' => '#ff9800'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_color', array(
        'label'    => __( 'Header color (class="header-color")', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'header_color',
    )));
    
    //Customize icon color
    $wp_customize->add_setting('icon_color', array(
        'default' => '#29b6f6'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'icon_color', array(
        'label'    => __( 'Icon color (class="material-icons")', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_cutom_colors',
		'settings' => 'icon_color',
    )));
    
}
function wop_materializestarterwptheme_css_customizer(){
?>
    <style type="text/css">
        body {background-color: #<?php echo get_theme_mod( 'background_color' ); ?>;}
        
        .primary-color {background-color: <?php if ( get_theme_mod( 'primary_color' ) ):  echo get_theme_mod( 'primary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .secondary-color {background-color: <?php if ( get_theme_mod( 'secondary_color' ) ):  echo get_theme_mod( 'secondary_color' );
            else: echo '#29b6f6'; endif; ?>!important;
            }
        
        .footer-color {background-color: <?php if ( get_theme_mod( 'footer_color' ) ):  echo get_theme_mod( 'footer_color' );
            else: echo '#ff9800'; endif; ?>!important;
            }
        
        .header-color {color: <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>!important;
            }
        
        .material-icons {color: <?php if ( get_theme_mod( 'icon_color' ) ):  echo get_theme_mod( 'icon_color' );
            else: echo '#29b6f6'; endif; ?>;
            }
        
        blockquote {
            border-left: 5px solid <?php if ( get_theme_mod( 'header_color' ) ):  echo get_theme_mod( 'header_color' );
            else: echo '#ff9800'; endif; ?>;
        }
        
    </style>
<?php
}
add_action( 'wp_head', 'wop_materializestarterwptheme_css_customizer' );
add_action( 'customize_register', 'wop_materializestarterwptheme_cutom_colors' );


// Add your logo to navbar
function wop_materializestarterwptheme_logo_customizer( $wp_customize ) {

    $wp_customize->add_section(
        'materializestarterwptheme_logo_section',
        array(
    	'title'            => __( 'Logo', 'materializestarterwptheme' ),
    	'priority'         => 65,
    	'description'      => __('Upload your Logo to navigation bar', 'materializestarterwptheme' ),
	) );

	$wp_customize->add_setting(
        'materializestarterwptheme_logo', 
        array(
            'default'        => get_template_directory_uri() . '/img/default-logo.png',
            'width'         => 56,
	    	'height'        => 56,
            'flex-width'    => false,
            'uploads'       => true,
            )
    );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'materializestarterwptheme_logo', array(

    	'label'    => __( 'Aktuelles Logo', 'materializestarterwptheme' ),
		'section'  => 'materializestarterwptheme_logo_section',
		'settings' => 'materializestarterwptheme_logo',
	) ) );

}
add_action('customize_register', 'wop_materializestarterwptheme_logo_customizer');

?>