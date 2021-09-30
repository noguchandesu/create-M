<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>
<ul class="forum-titles">
			<li class="bbp-forum-info"><?php esc_html_e( 'Forum', 'bbpress' ); ?></li>
			<li class="bbp-forum-topic-count"><?php esc_html_e( 'Topics', 'bbpress' ); ?></li>
			<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic()
				? esc_html_e( 'Replies', 'bbpress' )
				: esc_html_e( 'Posts',   'bbpress' );
			?></li>
			<li class="bbp-forum-freshness"><?php esc_html_e( 'Last Post', 'bbpress' ); ?></li>
		</ul>
<?php get_header(); ?>
<?php echo do_shortcode('[bbp-forum-index]'); ?>
<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>
<?php
////////////////////////////
//一覧表示
///////////////////////
if (!is_user_agent_live_writer()) {
  //通常表示
  get_template_part('tmp/list');
} else {
  //ブログエディターLive Writerでテーマ取得の際
  get_template_part('tmp/live-writer');
}
?>

<?php get_footer(); ?>
