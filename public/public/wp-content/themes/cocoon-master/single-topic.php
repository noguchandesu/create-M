<?php

/**
 * Single Topic
 *
 * @package bbPress
 * @subpackage Theme
 */

get_header(); ?>

	<?php do_action( 'bbp_before_main_content' ); ?>

	<?php do_action( 'bbp_template_notices' ); ?>

	<?php if ( bbp_user_can_view_forum( array( 'forum_id' => bbp_get_topic_forum_id() ) ) ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php bbp_breadcrumb(); ?>

			<div id="bbp-topic-wrapper-<?php bbp_topic_id(); ?>" class="bbp-topic-wrapper">
			  
				<div class="topic-maker-header">
					<div class="topic-maker ">
						<?php bbp_topic_author_link( array( 'show_role' => false ) ); ?>
					</div>
					<div class="topic-main">
						<div class="topic-title">
							<div class="reply-date">
								<div class="check">
									<img src="<?php echo get_template_directory_uri(); ?>/images/check.png" alt="">
									<p><?php echo get_post_views( get_the_ID() ); set_post_views( get_the_ID() ); ?></p>
								</div>
								<div class="comment">
									<img src="<?php echo get_template_directory_uri(); ?>/images/comment.png" alt="">
									<?php
									$commentcount = get_comments( array(
										'status' => 'approve',
										'post_id'=> get_the_ID(), 
										'count' => true
									) );
									?>
									<p><?php echo $commentcount ; ?></p>
								</div>
								<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
							</div>
							<h1 class="entry-title"><?php bbp_topic_title(); ?></h1>
						</div>
						<div class="topic-content">
							<?php bbp_reply_content(); ?>
						</div>
					</div>
				</div>
				<div class="entry-content">

					<?php bbp_get_template_part( 'content', 'single-topic' ); ?>

				</div>
			</div><!-- #bbp-topic-wrapper-<?php bbp_topic_id(); ?> -->

		<?php endwhile; ?>

	<?php elseif ( bbp_is_forum_private( bbp_get_topic_forum_id(), false ) ) : ?>

		<?php bbp_get_template_part( 'feedback', 'no-access' ); ?>

	<?php endif; ?>

	<?php do_action( 'bbp_after_main_content' ); ?>

<?php get_sidebar(); ?>
<?php get_footer();