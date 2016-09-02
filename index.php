<?php get_header(); ?>

	<main role="main" class="col s12">
		<!-- section -->
		<section>

			<h1 class="mega-text card-panel center truncate"><?php esc_html_e( 'Lezte Beiträge', 'materializepresstheme' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
