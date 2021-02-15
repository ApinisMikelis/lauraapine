<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

    <?php

    if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                printf(
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'wp-bootstrap-starter' ),
					'<span>' . esc_html(get_the_title()) . '</span>'
				);
            } else {
                printf(
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $underscore_comment_count, 'comments title', 'wp-bootstrap-starter' ) ),
					esc_html( number_format_i18n( $underscore_comment_count ) ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
            }
            ?>
        </h2>


        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'wp-bootstrap-starter' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'wp-bootstrap-starter' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'wp-bootstrap-starter' ) ); ?></div>

                </div>
            </nav>
        <?php endif; ?>

        <ul class="comment-list">
            <?php
            wp_list_comments( array( 'callback' => 'wp_bootstrap_starter_comment', 'avatar_size' => 50 ));
            ?>
        </ul>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'wp-bootstrap-starter' ); ?></h2>
                <div class="nav-links">

                    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'wp-bootstrap-starter' ) ); ?></div>
                    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'wp-bootstrap-starter' ) ); ?></div>

                </div>
            </nav>
            <?php
        endif;

    endif;


    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wp-bootstrap-starter' ); ?></p>

    <?php endif; ?>

    <?php comment_form( $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'commentsubmit',
        'title_reply'       => __( 'Leave a Reply', 'wp-bootstrap-starter' ),
		/* translators: 1: Reply Specific User */
        'title_reply_to'    => __( 'Leave a Reply to %s', 'wp-bootstrap-starter' ),
        'cancel_reply_link' => __( 'Cancel Reply', 'wp-bootstrap-starter' ),
        'label_submit'      => __( 'Post Comment', 'wp-bootstrap-starter' ),

        'comment_field' =>  '<p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',

        'comment_notes_after' => '<p class="form-allowed-tags">' .
            __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'wp-bootstrap-starter' ) .
            '</p><div class="alert alert-info">' . allowed_tags() . '</div>'
    ));

	?>

</div><!-- #comments -->
