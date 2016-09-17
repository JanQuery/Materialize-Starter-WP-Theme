<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>"/>
    
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php endif; ?>
    
    <?php wp_head(); ?>
    
</head>

<body>
    
    <header id="masthead" class="site-header navbar-fixed" role="banner">
      <nav class="primary-color" role="navigation">
        <div class="nav-wrapper container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
                <?php if ( get_theme_mod( 'materialize-starter-wp-theme_logo' ) ) : ?>
                
	                   <?php echo '<img src="' . esc_url( get_theme_mod( 'materialize-starter-wp-theme_logo' ) ) . '" height="60px" />'; ?>
                
                    <?php else: ?>
                
	                   <?php echo '<img src="' . esc_url( get_template_directory_uri() . '/img/default-logo.png')  . '" height="60px" />'; ?>
                
                <?php endif; ?>
                
            </a>
            
          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons white-text">menu</i></a>
                
                    <ul class="right">
                                        
                        <li>
                            <a  href="#" data-activates="slide-out" class="button-collapse-sidebar"><i id="sidebar-icon" class="material-icons white-text">format_indent_decrease</i></a>
                        </li>
                        
                    </ul>

                    <?php if (has_nav_menu('header-menu')) : ?>
                   <?php wp_nav_menu( array(
							             'menu' => 'header-menu',
                                        'theme_location' => 'header-menu',
							             'menu_class'     => 'right hide-on-med-and-down',
                                        'container'         => false,
                                        'fallback'        => 'Materialize_Menu_Walker::fallback',
			                             'walker'         => new Materialize_Menu_Walker())
							                        );
							                        ?>
                        <?php // Display Logo or Avatar in navigation sidebar on mobile devices
                              if (get_theme_mod( 'materialize-starter-wp-theme_avatar_header' )):
                               $choose_image =  get_theme_mod( 'materialize-starter-wp-theme_avatar_header' );
                              else: 
                                $choose_image = get_theme_mod( 'materialize-starter-wp-theme_logo' );
                              endif; ?>
                        <?php   wp_nav_menu( array(
							                        'menu' => 'header-menu',
                                                    'theme_location' => 'header-menu',
							                        'menu_class'     => 'menu side-nav',
							                        'menu_id'        => 'mobile-nav',
							                        'items_wrap'     => '
                                                    <br>
                                                    <ul id="%1$s" class="%2$s side-nav">
                                                    <li id="icon-close-left-sidebar-container"><span id="close-sidebar-left" class="right"><i class="material-icons black-text pointer">close</i></span></a></li>
                                                    <li><div class="userView">
                                                        <img class="background" src="' . get_theme_mod( 'materialize-starter-wp-theme_avatar_header_background' ) . '" alt="' .  esc_url( home_url( 'name' ) )  . '-avatar">
                                                        <a href="#!user" class="header-avatar-sidebar"><img class="circlize" src="' . esc_url( $choose_image ) . '" width="64" height="64"></a>
                                                        <a href="' .  esc_url( home_url( '/' ) )  . '"><span class="primary-text-color name">' . get_bloginfo( 'name' ) . '</a>
                                                        <a href="#"><span class="primary-text-color email">' . get_bloginfo( 'description' ) . '</span></a>
                                                        </div>
                                                    </li>
                                                        <li class="mobile-header center black-text">
                                                            <p>Menu</p>
                                                        </li><ul class="collapsible" data-collapsible="accordion">%3$s</ul></ul>
                                                    <div class="clear"></div>',
                                            'fallback'        => 'Materialize_Mobile_Menu_Walker::fallback',
			                                'walker'         => new Materialize_Mobile_Menu_Walker())
							                        );
							                        ?>
                    <?php endif; ?>
        </div>
      </nav>
    </header>