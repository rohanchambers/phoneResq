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
		                <p><a href="tel:9043100059">(904) 310-0059</a></p>
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
		                <p id="site-developer">Site developed by <a href="http://rohanchambers.net/" title="Rohan Chambers">RohanChambers.net</a></p>
		                <p id="copyright">&copy;<?php echo date("Y") ?> Phone Resq. All Rights Reserved.</p>
		            </div>
		        </div>
		    </div>
		</footer>
		<?php tha_footer_after(); ?>	
</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>
<!-- Google <aps api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhbCpomcdBHz8oDL7STcqrTKQ5UKAjmwU&callback=initMap" async defer></script>
<!-- Google Analytics: -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-55836510-1', 'auto');
	ga('send', 'pageview');
</script>
</body>
</html>