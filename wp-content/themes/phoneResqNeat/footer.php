<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>
		<?php tha_content_bottom(); ?>

		</main><!-- #main -->

		<?php tha_content_after(); ?>

		<?php tha_footer_before(); ?>

		<footer id="footer" class="site-footer wrap" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php tha_footer_top(); ?>
		    <div class="container">
		        <div class="row">
		            <div id="company-details" class="two-col">
		                <a href="/#header"><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/logo.png" alt="Phone Resq." /></a>
		                <p>(904) 310-0059</p>
		                <p><a href="mailto:info@phoneresq.com">info@phoneresq.com</a></p>
		                <p>1001 Atlantic Avenue Suite<br>
		                Fernandina Beach Florida<br>
		                32034</p>
		                
		                <nav id="footer-social-links" class="nav-global">
		                    <ul>
		                        <li><a href="https://www.facebook.com/PhoneResQ/" title="Facebook share" target="_blank"><i class="fa fa-facebook fa-lg btn-animate"></i></a></li>
		                        <li><a href="https://twitter.com/PhoneResQ/" title="Twitter share" target="_blank"><i class="fa fa-twitter fa-lg btn-animate"></i></a></li>
		                        <li><a href="https://www.instagram.com/dinaresq/" title="Instagram share" target="_blank"><i class="fa fa-instagram fa-lg btn-animate"></i></a></li>
		                    </ul>
		                </nav>
		            </div>
		            <div id="footer-links" class="two-col">
		                <a href="#header" id="back-top"></a>
		                <p><a href="/iphone-repair">iPhone Repair</a></p>
		                <p><a href="/ipod-repair">iPod Repair</a></p>
		                <p><a href="/ipad-repair">iPad Repair</a></p>
		                <p><a href="/android-repair">Android Repair</a></p>
		                <p id="copyright">&copy;<?php echo date("Y") ?> Phone Resq. All Rights Reserved.</p>
		            </div>
		        </div>
		    </div>
		</footer>
		<?php tha_footer_after(); ?>	
</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAnlujjc073E2Ku0_K_HyCtbRDC-HjFgk&callback=initMap" async defer></script> -->
</body>
</html>