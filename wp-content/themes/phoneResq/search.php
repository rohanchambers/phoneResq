<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
	<div class="container">
		<section id="primary" class="content-area">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'some-like-it-neat' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'page-templates/template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'page-templates/template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</section><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
