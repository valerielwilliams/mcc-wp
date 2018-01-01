<div class="comments">

	<!--COMMENT FORM-->
	<?php $fields = array(
		'author' => '<input id="author" name="author" placeholder="Name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" />',
		'email' => '<input id="email" name="email" placeholder="Email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
	);
	$args = array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields )
	);
	comment_form($args, $post_id ); ?>




	<!--DISPLAY LIST OF COMMENTS-->
	<?php if (have_comments()) : ?>

		<h2><?php comments_number(); ?></h2>

		<ul>
			<?php wp_list_comments(array(
			    'avatar_size' => '140',
			    'type' => 'comment',
			    'callback' => 'ahha_comments'
			)); ?>
		</ul>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

	<?php endif; ?>

</div>







	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>


	<?php return; endif; ?>
