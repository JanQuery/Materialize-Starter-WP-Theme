<?php get_header(); ?>


	<main role="main" class="container">
	<!-- section -->
	<section class="row">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        
    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        

          <div class="row">
            <div class="col s12 m9">
               <!-- post title -->
            <h1 class="header-color">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
        <!-- /post title -->
        
             <!-- post details -->
			<span class="date"><?php the_time('j. F Y'); ?></span>
			<span class="author"><?php esc_html_e( 'Published by', 'materilize-starter-wp-theme' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'materilize-starter-wp-theme' ), __( '1 Comment', 'materilize-starter-wp-theme' ), __( '% Comments', 'materilize-starter-wp-theme' )); ?></span>
            <p><?php esc_html_e( 'Categorised in: ', 'materilize-starter-wp-theme' ); the_category(', '); // Separated by commas ?></p>
			<!-- /post details -->
              </div>
              <div class="col s12 m3 center">
                <br><br>
              <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<?php the_post_thumbnail(array(
                    240,240,
                    'class' => 'responsive-img'
                ) ); // Fullsize image for the single post ?>
        <?php endif; ?>
        <!-- /post thumbnail -->
            </div>
            <div class="col s12">
            

        
            <?php the_content(); // Dynamic Content ?>
        
    <div class="card-action">
        <?php the_tags( __( 'Tags: ', 'materilize-starter-wp-theme' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			

			<p><?php esc_html_e( 'This post was written by ', 'materilize-starter-wp-theme' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>
    </div>
            </div>
          </div>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'materilize-starter-wp-theme' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_sidebar(); ?>

    
<?php get_footer(); ?>
