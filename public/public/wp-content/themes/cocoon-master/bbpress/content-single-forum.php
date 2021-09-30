<?php

/**
 * Single Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<div id="bbpress-forums" class="bbpress-wrapper">

<!-- パンクズリスト -->
	<!-- <?php bbp_breadcrumb(); ?> -->

	<?php bbp_forum_subscription_link(); ?>

	<?php do_action( 'bbp_template_before_single_forum' ); ?>

	<?php if ( post_password_required() ) : ?>

		<?php bbp_get_template_part( 'form', 'protected' ); ?>

	<?php else : ?>

		<?php if ( bbp_has_forums() ) : ?>

			<?php bbp_get_template_part( 'loop', 'forums' ); ?>

		<?php endif; ?>

<!-- トピックがあったら表示する -->
		<?php if ( ! bbp_is_forum_category() && bbp_has_topics() ) : ?>

<!-- トピックリスト -->
			<?php bbp_get_template_part( 'loop',       'topics'    ); ?>

<!-- 表示中のトピック数 -->
			<!-- <?php bbp_get_template_part( 'pagination', 'topics'    ); ?> -->

<!-- トピック入力フォーム -->
			<?php bbp_get_template_part( 'form',       'topic'     ); ?>

		<?php elseif ( ! bbp_is_forum_category() ) : ?>

			<?php bbp_get_template_part( 'feedback',   'no-topics' ); ?>

			<?php bbp_get_template_part( 'form',       'topic'     ); ?>

		<?php endif; ?>

	<?php endif; ?>

	<?php do_action( 'bbp_template_after_single_forum' ); ?>

</div>
