<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div <?php bbp_reply_class(); ?>>
	<div class="bbp-reply-author">

		<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>

		<?php bbp_reply_author_link( array( 'show_role' => false ) ); ?>

		<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

	</div><!-- .bbp-reply-author -->
	<div class="reply-date">
		<p><?php echo bbp_topic_post_date(); ?></p>
	</div>

	<div class="bbp-reply-content">

		<?php do_action( 'bbp_theme_before_reply_content' ); ?>

		<?php bbp_reply_content(); ?>

		<?php do_action( 'bbp_theme_after_reply_content' ); ?>

	</div><!-- .bbp-reply-content -->
</div><!-- .reply -->


<div id="post-<?php bbp_reply_id(); ?>" class="bbp-reply-header">
	
</div><!-- #post-<?php bbp_reply_id(); ?> -->


