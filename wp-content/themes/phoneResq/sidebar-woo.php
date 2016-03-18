<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package some_like_it_neat
 */
?>
	<?php tha_sidebars_before(); ?>

	<div id="secondary" class="widget-area" role="complementary">

		<?php if ( is_user_logged_in() ) { ?>
			<aside id="loginLogout">
				<ul id="menu-shop-nav" class="nav">
					<li class="welcome">Welcome: <span>Guest</span></li>
				</ul>
			</aside>
				<?php } 
				else { ?>
			<aside id="loginLogout">
				<ul id="menu-shop-nav">
					<li class="login">
						<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('Login / Register','woothemes'); ?></a> </li>
					</ul>
			</aside>
		<?php } ?>

		<?php tha_sidebar_top(); ?>

		<?php do_action( 'before_sidebar' ); ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<aside id="search" class="widget widget_search">

				<?php get_search_form(); ?>

			</aside>

			<aside id="archives" class="widget">

				<h4 class="widget-title"><?php _e( 'Archives', 'some-like-it-neat' ); ?></h4>

				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>

			</aside>

			<aside id="meta" class="widget">

				<h4 class="widget-title"><?php _e( 'Meta', 'some-like-it-neat' ); ?></h4>

				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>

			</aside>

    <?php endif; // end sidebar widget area ?>

    <?php tha_sidebar_bottom(); ?>

	</div><!-- #secondary -->

    <?php tha_sidebars_after(); ?>
