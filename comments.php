<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php esc_html_e( 'Post is password protected. Enter the password to view any comments.', 'materialize-starter-wp-theme' ); ?></p>
</div>

	<?php return; endif; ?>
	<?php if ( have_comments() ) : ?>
		<h2 id="comments" class="comments-title header-color">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'materialize-starter-wp-theme' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s comment to &ldquo;%2$s&rdquo;',
							'%1$s comments to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'materialize-starter-wp-theme'
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


<?php 

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

?>
<?php comment_form( array(
    
    'comment_field' => 
    '<p class="comment-form-comment input-field"><label for="comment" class="header-color">' . __( 'Comment', 'materialize-starter-wp-theme' ) . '</label><textarea id="comment" class="materialize-textarea" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
    'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' =>
                '<p class="comment-form-author input-field"><label for="author" class="header-color">' . __( 'Name', 'materialize-starter-wp-theme' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '" size="30"' . $aria_req . ' /></p>',

              'email' =>
                '<p class="comment-form-email input-field"><label for="email" class="header-color">' . __( 'Email', 'materialize-starter-wp-theme' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '" size="30"' . $aria_req . ' /></p>',

              'url' =>
                '<p class="comment-form-url input-field"><label for="url" class="header-color">' . __( 'Website', 'materialize-starter-wp-theme' ) . '</label>' .
                '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                '" size="30" /></p>'
    
    ) ),
    'class_submit'          => 'submit btn waves-effect secondary-color',
    'title_reply_before'    => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'     => '',
    'cancel_reply_before'   => '</h3><br><span class="body-color flow-text">',
    'cancel_reply_after'    => '</span><br>'
    
) ); ?>


</div>
