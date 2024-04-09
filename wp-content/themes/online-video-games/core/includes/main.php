<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_online_video_games_dismissed_notice_handler', 'online_video_games_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function online_video_games_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function online_video_games_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_online-video-games-guide-page') {
             $online_video_games_comments_theme = wp_get_theme(); ?>
            <div class="online-video-games-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="online-video-games-notice">
				<div class="online-video-games-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'online-video-games'); ?>">
				</div>
				<div class="online-video-games-notice-content">
					<div class="online-video-games-notice-heading"><?php esc_html_e('Thanks for installing ','online-video-games'); ?><?php echo esc_html( $online_video_games_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'online-video-games'), esc_url(admin_url('themes.php?page=online-video-games-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'online_video_games_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'online_video_games_getting_started' );
function online_video_games_getting_started() {
	add_theme_page( esc_html__('Get Started', 'online-video-games'), esc_html__('Get Started', 'online-video-games'), 'edit_theme_options', 'online-video-games-guide-page', 'online_video_games_test_guide');
}

function online_video_games_admin_enqueue_scripts() {
	wp_enqueue_style( 'online-video-games-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'online-video-games-admin-script', get_template_directory_uri() . '/js/online-video-games-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'online-video-games-admin-script', 'online_video_games_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'online_video_games_admin_enqueue_scripts' );

if ( ! defined( 'ONLINE_VIDEO_GAMES_DOCS_FREE' ) ) {
define('ONLINE_VIDEO_GAMES_DOCS_FREE',__('https://www.misbahwp.com/docs/online-video-games-free-docs/','online-video-games'));
}
if ( ! defined( 'ONLINE_VIDEO_GAMES_DOCS_PRO' ) ) {
define('ONLINE_VIDEO_GAMES_DOCS_PRO',__('https://www.misbahwp.com/docs/online-video-games-pro-docs','online-video-games'));
}
if ( ! defined( 'ONLINE_VIDEO_GAMES_BUY_NOW' ) ) {
define('ONLINE_VIDEO_GAMES_BUY_NOW',__('https://www.misbahwp.com/themes/video-games-wordpress-theme/','online-video-games'));
}
if ( ! defined( 'ONLINE_VIDEO_GAMES_SUPPORT_FREE' ) ) {
define('ONLINE_VIDEO_GAMES_SUPPORT_FREE',__('https://wordpress.org/support/theme/online-video-games','online-video-games'));
}
if ( ! defined( 'ONLINE_VIDEO_GAMES_REVIEW_FREE' ) ) {
define('ONLINE_VIDEO_GAMES_REVIEW_FREE',__('https://wordpress.org/support/theme/online-video-games/reviews/#new-post','online-video-games'));
}
if ( ! defined( 'ONLINE_VIDEO_GAMES_DEMO_PRO' ) ) {
define('ONLINE_VIDEO_GAMES_DEMO_PRO',__('https://www.misbahwp.com/demo/online-video-games/','online-video-games'));
}
if( ! defined( 'ONLINE_VIDEO_GAMES_THEME_BUNDLE' ) ) {
define('ONLINE_VIDEO_GAMES_THEME_BUNDLE',__('https://www.misbahwp.com/themes/wordpress-bundle/','online-video-games'));
}

function online_video_games_test_guide() { ?>
	<?php $online_video_games_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( ONLINE_VIDEO_GAMES_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'online-video-games' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'online-video-games' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'online-video-games' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'online-video-games' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','online-video-games'); ?><?php echo esc_html( $online_video_games_theme ); ?>  <span><?php esc_html_e('Version: ', 'online-video-games'); ?><?php echo esc_html($online_video_games_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $online_video_games_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$online_video_games_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $online_video_games_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'online-video-games' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','online-video-games'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'online-video-games' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'online-video-games' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'online-video-games' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'online-video-games' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 50+ Perfect WordPress Theme In A Single Package at just $79."','online-video-games'); ?></p>
					<p class="coupon"><?php esc_html_e('Exclusive Offer !! Get Our Theme Pack of 60+ WordPress Themes At 10% Off','online-video-games'); ?><span class="coupon-code"><?php esc_html_e('"Themespack10"','online-video-games'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( ONLINE_VIDEO_GAMES_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'online-video-games' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','online-video-games'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','online-video-games'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','online-video-games'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','online-video-games'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
