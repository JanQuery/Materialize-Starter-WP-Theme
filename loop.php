<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="row card-panel">
            
                <!-- post thumbnail -->
		        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                <div class="col s12 m3 center">
                   
			             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'responsive-img' ) ); ?>
			             </a>
                </div>
                <div class="col s12 m9">
                <?php else: ?>
                    
                    <div class="col s12">
                        
                <?php endif; ?>
		            <!-- /post thumbnail -->
                    <!-- post title -->
		<h2 class="bigger-text header-color">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('j. F Y'); ?></span>
		<span class="author"><?php esc_html_e( 'Published by', 'materilize-starter-wp-theme' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'materilize-starter-wp-theme' ), __( '1 Comment', 'materilize-starter-wp-theme' ), __( '% Comments', 'materilize-starter-wp-theme' )); ?></span>
		<!-- /post details -->

		<?php wop_materilize_starter_wp_theme_wp_excerpt('wop_materilize_starter_wp_theme_wp_index'); // Build your custom callback length in functions.php ?>
		
                </div>
        <div class="col s12">
            <?php edit_post_link(); ?>
        </div>
            </div>

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
