<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package some_like_it_neat
 */

get_header(); ?>

	<div class="container">
		<div id="primary" class="content-area">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title">
							<?php _e( 'Oops! That page can&rsquo;t be found.', 'some-like-it-neat' ); ?>
						</h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p>
							<?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'some-like-it-neat' ); ?>
						</p>

						<?php get_search_form(); ?>

						<?php if ( some_like_it_neat_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

					<div class="widget widget_categories">
						<h2 class="widgettitle">
							<?php _e( 'Most Used Categories', 'some-like-it-neat' ); ?>
						</h2>
						<ul>
							<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
							?>
						</ul>
					</div><!-- .widget -->
			<?php endif; ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
		</div><!-- #primary -->
	<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
