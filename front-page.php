<?php get_header(); ?>

<!-- Homepage Intro Section -->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 m10 offset-m1">
                
                 <h1 class="header center primary-text-color"><?php bloginfo( 'name' ) ?></h1>
                 <div class="row center">
                    <p class="header col s12 light"><?php bloginfo( 'description' ) ?></p>
                </div>
                
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-homepage-intro')) ?>
                
            </div>
        </div>
    </div>
</div>
<!-- ./ Homepage Intro Section -->

<!-- Homepage Icon Section -->
<div class="container">
    <div class="section">
        <div class="row">

            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-homepage-icon1')) ?>

            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-homepage-icon2')) ?>

            <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-homepage-icon3')) ?>

        </div>
    </div>
</div>
<!-- ./ Homepage Icon Section -->

        <div class="container"><!-- .container -->
                <div class="row"><!-- -row -->

                    
                    <main role="main"><!-- Main Section -->

                        <h2 class="center primary-text-color truncate"><?php esc_html_e( 'Latest posts', 'materialize-starter-wp-theme' ); ?></h2>
                        <br>
                        <br>
                        
                        <section class="content-block"><!-- section -->


            <?php
            $args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
            $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    
                                    <h3 class="header-color truncate"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

                                    
                                    <?php wop_materilize_starter_wp_theme_wp_excerpt('wop_materilize_starter_wp_theme_wp_index'); ?>

                                            <br class="clear">

                                            <?php edit_post_link(); ?>

                                </article>
                                <!-- /article -->

                                <?php endwhile; ?>

                                    <?php else: ?>

                                        <!-- article -->
                                        <article>

                                            <h2><?php esc_html_e( 'Sorry, nothing to display.', 'materialize-starter-wp-theme' ); ?></h2>

                                        </article>
                                        <!-- /article -->

                                        <?php endif; ?>

                        </section><!-- /section -->
                        
                    </main><!-- ./ Main Section -->
                    
            </div><!-- .row / -->
    	</div><!-- .contaienr / -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>