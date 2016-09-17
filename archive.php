<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

            <div class="card-panel center z-depth-3">
			     <h1 class="primary-text-color truncate"><?php esc_html_e( 'Archive', 'materialize-starter-wp-theme' ); ?></h1>
            </div>
            
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>