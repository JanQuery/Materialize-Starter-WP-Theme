<?php get_header(); ?>

<!-- Homepage Intro Section -->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 m10 offset-m1">
                
                 <h1 class="header center header-color"><?php bloginfo( 'name' ) ?></h1>
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

                        <section class="content-block"><!-- section -->

                            <h2 class="homepage-title truncate"><?php the_title(); ?></h2>

            <?php
            $args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
            $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <?php the_content(); ?>

                                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                                            <br class="clear">

                                            <?php edit_post_link(); ?>

                                </article>
                                <!-- /article -->

                                <?php endwhile; ?>

                                    <?php else: ?>

                                        <!-- article -->
                                        <article>

                                            <h2><?php esc_html_e( 'Sorry, nothing to display.', 'materilize-starter-wp-theme' ); ?></h2>

                                        </article>
                                        <!-- /article -->

                                        <?php endif; ?>

                        </section><!-- /section -->
                        
                    </main><!-- ./ Main Section -->
                    
            </div><!-- .row / -->
    	</div><!-- .contaienr / -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>