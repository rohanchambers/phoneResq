<?php
/**
 * The template for displaying all pages in woocommerce
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>
	<!-- CAROUSEL -->
	<section id="carousel">
	    <div class="slide" id="slide-1">
	    </div><!-- End of Slide -->
	</section>
	<div class="container">

		<div id="primary" class="content-area">
			<div id="content" class="site-content">
				<?php woocommerce_breadcrumb( ); ?>

				<?php woocommerce_content(); ?>
			</div><!-- #content -->
		</div><!-- #primary -->

	<?php include("sidebar-woo.php"); ?>
	</div>
<?php get_footer(); ?>

