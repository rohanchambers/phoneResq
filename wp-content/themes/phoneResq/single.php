<?php
/**
 * The Template for displaying all single posts.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
	<div class="container">
		<div id="primary" class="content-area">
			<div id="content" class="site-content">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'page-templates/template-parts/content', 'single' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
