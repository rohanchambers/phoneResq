<?php
/**
 * The template for displaying all pages.
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
	        <div class="slide-content">
	            <article>
	                <header class="animatedParent animateOnce" data-sequence='500'>
				        <h1 data-id='1' class="animated fadeInLeft">Welcome to our online store</h1>
				        <p data-id='2' class="animated fadeInLeft">No matter what the condition of your device is. We will buy it on the spot for cash.</p>	  
	                </header>
	            </article>
	        </div>
	    </div><!-- End of Slide -->
	</section>
	
	<div class="container">

		<div id="primary" class="content-area">
			<div id="content" class="site-content">
		
				<?php 
					// Add breadcrumbs on all pages
					if ( is_checkout() || is_cart() || is_account_page()  ) {
						woocommerce_breadcrumb();
					}
				?>	

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'page-templates/template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		
		<?php 
			// If woo pages use sidebar2.php else sidebar.php (blog)
			if ( is_checkout() || is_cart() || is_account_page()  ) {
				include("sidebar-woo.php");
			} else {
				get_sidebar();
			}
		?>
	</div>
<?php get_footer(); ?>
