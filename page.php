<?php get_header() ?>

	   <main role="main">
        <!-- section -->
		  <section class="container">
              
              <!-- post thumbnail -->
              <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <div class="col s3 center-align"><br>
                      
                            <?php the_post_thumbnail(array(
                                240,240,
                                'class' => ' background center-align responsive-img'
                                ) ); // Fullsize image for the single post ?>
                    </div>
                    <div class="col s9">
                        <h1 class="header center-align truncate"><?php the_title(); ?></h1>
                    </div>
              <?php endif; ?>
              <!-- /post thumbnail -->



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
			<article class="col s12">

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'materializepresstheme' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
                
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar() ?>

<?php get_footer() ?>