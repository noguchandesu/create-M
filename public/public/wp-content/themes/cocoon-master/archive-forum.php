<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<div id="forum-front" class="bbp-forum-front">
		<?php $title = '病気お悩み掲示板' ; ?>
		<h1 class="entry-title"><?php bbp_forum_archive_title($title); ?></h1>
		<div class="entry-content">

			<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

		</div>
	</div><!-- #forum-front -->

	<?php do_action( 'bbp_after_main_content' ); ?>

<?php get_sidebar(); ?>
<?php get_footer();
