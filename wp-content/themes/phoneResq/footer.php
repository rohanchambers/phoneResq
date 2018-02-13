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
		                <a href="#header"><img src="<?php bloginfo('template_directory'); ?>/assets/images/footer/logo.png" alt="Phone Resq." /></a>
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
		                <p id="site-developer">Site developed by <a href="http://rohanchambers.net/" title="Rohan Chambers">Rohan Chambers</a></p>
		                <p id="copyright">&copy;<?php echo date("Y") ?> Phone Resq. All Rights Reserved.<br>
		                	Site by: <a href="http://www.slamdunkdigital.com" target="_blank">Slam DunK Digital</a></p>
		            </div>
		        </div>
		    </div>
		</footer>
		<?php tha_footer_after(); ?>	
</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=628421490629466";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));	
</script>  
<!-- Twitter share -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- Google + share -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Linkedin Share -->
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<!-- Google Maps api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6w8Hmte-H4bI060xWOYKawQdSDnUd79o&callback=initMap" async defer></script>
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