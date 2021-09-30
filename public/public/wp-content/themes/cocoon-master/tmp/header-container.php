<?php //ヘッダーエリア
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit; ?>

<div id="header-container" class="header-container">
  <div id="header-container-in" class="header-container-in<?php echo get_additional_header_container_classes(); ?>">
    <header id="header" class="header<?php echo get_additional_header_classes(); ?> cf" itemscope itemtype="https://schema.org/WPHeader">

      <div id="header-in" class="header-in wrap cf" itemscope itemtype="https://schema.org/WebSite">

        <?php //キャッチフレーズがヘッダー上部のとき
        if (is_tagline_position_header_top()) {
           get_template_part('tmp/header-tagline');
        } ?>

        <?php //ロゴ前にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_before_open' ); ?>

        <?php //ロゴタグの生成
        generate_the_site_logo_tag(); ?>

        <?php //ロゴ後にコードを挿入するためのアクションフック
        do_action( 'wp_header_logo_after_open' ); ?>

        <?php //キャッチフレーズがヘッダー下部のとき
        if (is_tagline_position_header_bottom()) {
           get_template_part('tmp/header-tagline');
        } ?>

      </div>
      <div class="bbp-search-form">
        <form role="search" method="get" id="bbp-search-form">
          <div>
            <label class="screen-reader-text hidden" for="bbp_search"><?php esc_html_e( 'Search for:', 'bbpress' ); ?></label>
            <input type="hidden" name="action" value="bbp-search-request" />
            <input type="text" value="<?php bbp_search_terms(); ?>" name="bbp_search" id="bbp_search" />
            <input class="button" type="submit" id="bbp_search_submit" value="<?php esc_attr_e( 'Search', 'bbpress' ); ?>" />
          </div>
        </form>
      </div>
      <div class="make-topic-area">
        <div class="make-topic">
          <a href="" class="make-btn">相談する</a>
        </div>
      </div>

    </header>

    <?php get_template_part('tmp/navi'); ?>
  </div><!-- /.header-container-in -->
</div><!-- /.header-container -->
