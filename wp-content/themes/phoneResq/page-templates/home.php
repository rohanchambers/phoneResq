<?php
/**
 * Template Name: home
 *
 * This template home display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
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
                    <h1 data-id='1' class="animated fadeInLeft">Welcome to Phone ResQ.</h1>
                    <p data-id='2' class="animated fadeInLeft">We repair and improve all of your handheld devices and home computers. Our hassle-free customer service is centered around your interests and the intention of getting you back online.</p>
                    <a href="#contact" data-id='3' class="btn-animate animated fadeInLeft">Contact us</a>
                </header>
            </article>
        </div>
    </div><!-- End of Slide -->

    <div id="carousel-btn">
        <a href="#" id="btn-prev" class="btn-slide btn-animate"><i class="fa fa-chevron-left fa-3x"></i></a>
        <a href="#" id="btn-nxt" class="btn-slide btn-animate"><i class="fa fa-chevron-right fa-3x"></i></a>
    </div>
    <div class="section-divider"></div>
</section><!-- End of Carousel section-->

<section id="services">
    <div class="container">
        <div class="row">
            <article class="intro">
                <h1>Services<span></span></h1>
                <p>We’re here to serve you with all of your device-related needs. Whether your screen is cracked or you’re looking for assistance setting up a program on your computer, we’ve got you covered.</p>
                <p id="show-hide">Our services include, but are not limited to:<br>
                screen repair, speeding up your slow device, hard drive repair, jailbreaking, application and software setup assistance (Coming Soon), iCloud support and other miscellaneous services. Click below to discover more based on your needs.</p>
                <div id="mouse-scroll">
                    <div class='icon-animate'></div>
                    <i class="fa fa-angle-down fa-3x angle-down-1"></i>
                    <i class="fa fa-angle-down fa-3x  angle-down-2"></i>
                </div>
                <hr />
            </article>
        </div><!-- End of row -->
        
        <!-- Repair cateogories -->
        <div class="row row-products animatedParent" data-appear-top-offset="-100">
            <article id="iphone-repair" class="repair animated fadeInLeft">
                <header>
                    <span>iPhone repair</span>
                    <h1>iPhone repair</h1>
                    <p>Whether you have the original iPhone or the latest model, we can take a look at your device and figure out what steps need to be made to get you back on the grid.</p>
                </header>
                <a href="/iphone-repair/">&nbsp;</a>
            </article>
            <article id="ipad-repair" class="repair animated fadeInUp">
                <header>
                    <span>iPad repair</span>
                    <h1>iPad repair</h1>
                    <p>If you don’t have the time to make an appointment and have your tablet sent away to a third-party repair shop, consider our in-house services for all of your iPad needs.</p>
                </header>
                <a href="/ipad-repair/">&nbsp;</a>
            </article>
            <article id="ipod-repair" class="repair animated fadeInRight">
                <header>
                    <span>iPod repair</span>
                    <h1>iPod Repair</h1>
                    <p>So your iPod is busted and you need to get back to jamming out on your favorite tunes. We get it.</p>
                </header>
                <a href="/ipod-repair/">&nbsp;</a>
            </article>
        </div><!-- End of row -->

        <div class="row animatedParent" data-appear-top-offset="-100">
            <article id="android-repair" class="repair animated fadeInLeft">
                <header>
                    <span>Android repair</span>
                    <h1>Android Repair</h1>
                    <p>We’re not just about Apple here. We work on Android devices as well. All devices and models are covered in the hands of our knowledgeable staff.</p>
                </header>
                <a href="/android-repair/">&nbsp;</a>
            </article>
            <article id="laptop-repair" class="repair animated fadeInUp">
                <header>
                    <span>Laptop &amp; Desktop Repair</span>
                    <h1>Laptop &amp; Desktop Repair</h1>
                    <p>Doesn’t it feel like when your computer isn’t working, that life slows down? Let us take a look and we’ll get you up and running again in no time.</p>
                </header>
                <a href="/laptop-repair/">&nbsp;</a>
            </article>
            <article id="unlocks-repair" class="repair animated fadeInRight">
                <header>
                    <span>Cell Phone unlocks</span>
                    <h1>Cell Phone unlocks</h1>
                    <p>Interested in unlocking your phone? We’ve got the tools to safely and securely unlock almost any smartphone device.</p>
                </header>
                <a href="/cellphone-unlocks/"></a>
            </article>
        </div><!-- End of row -->
    </div><!-- End of container -->

    <div class="section-divider"></div>
</section><!-- End of Services Section -->


<section id="about">

    <div class="container">
        <div class="row">
            <div class="bg-color bg-color-left"></div>
            <div id="about-row-one" class="about-rows">
                <article>
                    <header>
                        <h1>Phone ResQ strives to create a new and unique experience for its customers:</h1>
                        <p>A one-on-one interaction that redefines customer service geared toward consistency and ultimate satisfaction.</p>
                        <p>We at Phone ResQ put our customers first and understand what it means to go a day or two without your device. When you put your device-related needs in our hands, we spring into action and work tirelessly to get your device running smoothly once again, so you can resume your life and work with ease.</p>
                    </header>
                </article>      
            </div>
            <div id="about-row-one-img" class="about-row-img"></div>
        </div><!-- End of row -->
    
        <div class="row">
            <div class="bg-color bg-color-right"></div>
            <div id="about-row-two" class="about-rows">
                <article class="left">
                    <p>As Fernandina Beach’s premier Cell Phone Repair service center, we feel a responsibility in keeping prices low so that you don’t have to travel far to get the best price and service for your needs. We proudly carry strictly genuine parts that come at a low cost, which we can then pass those savings onto you.</p>
                    <p>Don’t let the word “Phone” in our name confuse you— we don’t just do cell phones. We also work on and repair almost any device with a screen. Your computer, be it a laptop or desktop, cannot go weeks broken any more than your phone can!</p>

                </article>
            </div>
            <div id="about-row-two-img" class="about-row-img"></div>
        </div><!-- End of row -->

        <div class="row">
            <div class="bg-color bg-color-left"></div>
            <div id="about-row-three" class="about-rows">
                <article>
                    <header>
                        <p>The benefit to our services is that you’ll have all of your device-related needs taken care of under one roof! No need to go to different locations and scout multiple agents. We take care of all of your needs, in one place.</p>
                        <p>If you’re looking for a quote or estimate on your desired repair, visit our <a href="#contact">Contact Us</a> section. Or stop by our shop during our regular business hours. No appointment needed. We can take a look at your device and let you know what steps will follow. Estimates are, of course, free and we will be able to diagnose the problem and what needs to be done on site. So there’s no need to send your device far and away for even the most complex of problems. It’s fast, easy and best of all: efficient.</p>
                    </header>
                </article>      
            </div>
            <div id="about-row-three-img" class="about-row-img"></div>
        </div><!-- End of row -->
    </div><!-- End of container -->
    <div class="section-divider"></div>

</section><!-- End of About -->


<section id="sell">
    <div class="container">
        <div class="row">
            <div class="bg-color bg-color-right"></div>
            <div id="sell-row" class="sell-rows">
                <article class="left">
                    <header>
                        <h1>Need to sell your iPhone, iPod, iPad, Mac?</h1>
                        <p>No matter what the condition of your device is. We will buy it on the spot for cash.</p>
                        <p>Please contact us for a quote! Use the contact form below or give us a call during business hours! 904-310-0059</p>
                    </header>      
                </article>
            </div>
            <div id="sell-row-img" class="sell-row-img"></div>
        </div><!-- End of row -->
    </div>
    <div class="section-divider"></div>

</section><!-- End of Sell -->

<section id="shop" class="">
    <div class="container">
        <div class="row">
            <article class="intro">
                <header>
                    <h1>Shop<span></span></h1>
                    <p>Please find some products that are for sale or refurbished.</p>
                </header>
            </article>
        </div>

        <div class="row">
            <div id="shop-products" class="animatedParent" data-sequence="100">
                <article id="iPhone" class="product animated fadeInUp" data-id='1'>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/products/iphone.png" alt="iPhone repair" />
                    <a href="/shop" class="btn-global btn-animate">Find out more</a>
                </article>

                <article id="samsung" class="product animated fadeInUp" data-id='2'>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/products/android.png" alt="iPad repair" />
                    <a href="/shop" class="btn-global btn-animate">Find out more</a>
                </article>

                <article id="iPad" class="product animated fadeInUp" data-id='3'>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/products/ipad.png" alt="iPod repair" />
                    <a href="/shop" class="btn-global btn-animate">Find out more</a>
                </article>      

                <article id="samsung-galaxy" class="product animated fadeInUp" data-id='4'>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/products/samsungtablet.png" alt="Samsung Galaxy repair" />
                    <a href="/shop" class="btn-global btn-animate">Find out more</a>
                </article>

                <article id="accessories" class="product animated fadeInUp" data-id='5'>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/products/accessories.png" alt="Accessories" />
                    <a href="/shop" class="btn-global btn-animate">Find out more</a>
                </article>
            </div>            
        </div><!-- End of row -->
    </div><!-- End of Container -->

</section><!-- End of Shop -->

<section id="contact">
    <div class="container">
        <div class="row">
            <article class="intro">
                <header>
                    <h1>Contact us<span></span></h1>
                </header>
                <?php
                    //if "email" variable is filled out, send email
                      if (isset($_REQUEST['email']))  {
                      
                      //Email information
                      $admin_email = "nate@phoneresq.com";
                      $email = $_REQUEST['email'];
                      $subject = "Phone Resq. message: " . $_REQUEST['subject'];
                      $comment = $_REQUEST['comment'].$phone;
                      $phone = $_REQUEST['phone'];
                      $comment_phone = $comment . "\n\n Phone: ".$phone;

                      //send email
                      mail($admin_email, "$subject", "Comment: \n" . $comment_phone, "From:" . $email);
                      
                      //Email response
                      echo "<p>Thank you, your message has been sent successfully! We will be in touch with your very soon.</p>";
                      }
                      
                      //if "email" variable is not filled out, display the form
                      else  {
                    ?>
                    <p>Please fill in all the fields below to send us a message online.</p>
                    <form id="contact-form" method="post" action="index.php#contact">
                        <fieldset>
                            <p>
                                <input type="text" placeholder="Name" name="subject" id="resqFullname" required>
                                <span></span>
                                <label for="resqFullname"></label>
                            </p>
                            <p>
                                <input type="email" placeholder="Email" name="email" id="resqEmail" required>
                                <span></span>
                                <label for="resqEmail"></label>
                            </p>
                            <p>
                                <input type="numbers" placeholder="Phone number (optional)" name="phone" id="resqPhone">
                                <span></span>
                                <label for="resqPhone"></label>
                            </p>        
                            <p id="textarea">
                                <textarea placeholder="Your message" name="comment" id="resqMessage" required></textarea>
                                <span></span>
                                <label for="resqMessage"></label>
                            </p>
                            <p>
                                <button type="submit" id="btn-submit" class="btn-animate">Send</button>
                            </p>
                        </fieldset>       
                    </form>
                <?php
                  }
                ?>
            </article>
        </div>
        
        <div class="row"> 
            <hr />  
            <div id="google-map" class="two-col">
                <div id="map"></div>
            </div>

            <div id="get-in-touch" class="two-col">
                <article class="intro">
 
                        <h1>Get in touch<span></span></h1>
                    
                        <p>Contact us today! Stop by the store during normal business hours or call us at<br> 
                        <a href="tel:9043100059">(904) 310-0059</a>.</p>

                        <p>We look forward to hearing from you!</p>

                        <p>1001 Atlantic Avenue,<br> 
                        Suite B,<br> 
                        Fernandina Beach,<br>
                        Florida, 32034</p>

                        <p>Email: <a href="mailto:info@phoneresq.com">info@phoneresq.com</a><br>
                        Hours: 10:00AM to 5:00 PM <br>
                        (Monday-Saturday)</p>

                </article>    

            </div>
        </div>            
    </div>
    
</section><!-- End of contact -->

<section id="clients">
    <div class="container">
        <div class="row">
            <ul id="client-list">
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/samsung.png" alt="Samsung" /></li>
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/apple.png" alt="Apple" /></li>
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/htc.png" alt="HTC" /></li>
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/android.png" alt="Android" /></li>
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/motorola.png" alt="Motorola" /></li>
                <li class="client"><img src="<?php bloginfo('template_directory'); ?>/assets/images/clients/blackberry.png" alt="Blackberry" /></li>
            </ul>
        </div>
    </div>
</section><!-- End of clients -->

<?php get_footer(); ?>
<!-- Google Maps API -->