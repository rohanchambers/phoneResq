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
		                <a href="/home.php"><img src="img/footer/logo.png" alt="Phone Resq." /></a>
		                <p>(904) 310-0059</p>
		                <p><a href="mailto:info@phoneresq.com">info@phoneresq.com</a></p>
		                <p>1001 Atlantic Avenue Suite<br>
		                Fernandina Beach Florida<br>
		                32034</p>
		                
		                <nav id="footer-social-links" class="nav-global">
		                    <ul>
		                        <li><a href="#" title="Facebook share"><i class="fa fa-facebook fa-lg btn-animate"></i></a></li>
		                        <li><a href="#" title="Twitter share"><i class="fa fa-twitter fa-lg btn-animate"></i></a></li>
		                        <li><a href="#" title="Instagram share"><i class="fa fa-instagram fa-lg btn-animate"></i></a></li>
		                    </ul>
		                </nav>
		            </div>
		            <div id="footer-links" class="two-col">
		                <a href="#header" id="back-top"></a>
		                <p><a href="#">Services</a></p> 
		                <p><a href="#iphone-repair">iPhone Repair</a></p>
		                <p><a href="#iphone-repair">iPod Repair</a></p>
		                <p><a href="#iphone-repair">iPad Repair</a></p>
		                <p><a href="#iphone-repair">Android Repair</a></p>
		                <p id="copyright">&copy;<?php echo date("Y") ?> Phone Resq. All Rights Reserved.</p>
		            </div>
		        </div>
		    </div>
		</footer>
		<?php tha_footer_after(); ?>	
</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>
</html>
