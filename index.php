<?php get_header(); ?>

	<main role="main" class="col s12">
		<!-- section -->
		<section>

			<h1 class="card-panel center primary-text-color truncate"><?php esc_html_e( 'latest posts', 'materialize-starter-wp-theme' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
