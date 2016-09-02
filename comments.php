<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php esc_html_e( 'Post is password protected. Enter the password to view any comments.', 'woptheme' ); ?></p>
</div>

	<?php return; endif; ?>
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'woptheme' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Kommentar zu &ldquo;%2$s&rdquo;',
							'%1$s Kommentare zu &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'woptheme'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>



<?php comment_form(); ?>

</div>
