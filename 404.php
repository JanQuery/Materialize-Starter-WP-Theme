<?php get_header(); ?>
<br>
<br>
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404" class="center">

				<h1><?php esc_html_e( 'Page not found', 'materialize-starter-wp-theme' ); ?></h1>
				    
                    <a class="btn waves-effect green" href="<?php echo esc_url( home_url() ); ?>" onclick="window.history.go(-1); return false;"><?php esc_html_e( 'back', 'materialize-starter-wp-theme' ); ?></a>
					<a class="btn waves-effect" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'back to homepage', 'materialize-starter-wp-theme' ); ?></a>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>