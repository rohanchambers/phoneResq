<?php
/**
 * Template Name: Services
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area">

<!-- iPhone repair -->
<section id="repair">
    <div class="container">

        <div class="row row-intro">
            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'page-templates/template-parts/content', 'page' ); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                    comments_template();
                endif;
            ?>

            <?php endwhile; // end of the loop. ?>
        </div>

        <div class="row">            
            <div class="two-col">
                <form id="filter-model">
                    <div>
                        <select class="filter-model btn-animate">
                            <option value="reset">Filter model</option>
                            <option value="iphone4">iPhone 4</option>
                            <option value="iphone4s">iPhone 4s</option>
                            <option value="iphone5">iPhone 5</option>
                            <option value="iphone5c">iPhone 5s</option>
                            <option value="iphone5c">iPhone 5c</option>
                            <option value="iphone6">iPhone 6</option>
                            <option value="iphone6s">iPhone 6s</option>
                        </select>
                        <i class="fa fa-caret-down fa-lg"></i>
                    </div>

                    <div>
                        <select class="filter-model btn-animate" name="menu" onChange="top.location.href=this.options[this.selectedIndex].value;" value="GO">
                            <option>Change brand</option>
                            <option value="/iphone-repair/">iPhone</option>
                            <option value="/ipad-repair/">iPad</option>
                            <option value="/ipod-repair/">iPod</option>
                            <option value="/android-repair/">Android</option>
                            <option value="/laptop-repair/">Laptop</option>
                            <option value="/unlock-repair/">Unlocks</option>
                        </select>
                        <i class="fa fa-caret-down fa-lg"></i>
                    </div>
                </form>         
            </div>
            <div class="two-col"></div>
        </div>

        <div class="row-container">                        

            <?php query_posts('category_name='.get_the_title().'&post_status=publish', '&orderby=date&order=ASC');?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="row animatedParent">
                <div class="two-col filter iphone6s <?php '.get_the_title().' ?> ">
                   
                    <?php getImage('1'); ?>
                    <h2><?php the_title(); ?></h2>
                    
                    <!-- Remove images from get_the_content -->
                    <?php 
                        $content = get_the_content();
                        $content = preg_replace("/<img[^>]+\>/i", " ", $content);          
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]>', $content);
                        echo $content;
                    ?>
                </div>
            </div>      
            
            <?php endwhile; else: endif; ?>

        </div><!-- End of row container-->  



<!-- 
            <div class="row animatedParent">
                <div class="two-col filter iphone5">
                    <div class="img-holder animated fadeInLeft"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone5.png" alt="iPhone5" /></div>
                    <h2>iPhone 5</h2>
                    <p>Cracked Screen Replacement: $99<br>
                    Home Button: $40<br>
                    Ear Speaker: $45<br>
                    Vibrate Motor: $45<br>
                    Charging Port: $50</p>
                </div>
                <div class="two-col filter iphone4s">
                    <div class="img-holder animated fadeInRight"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone4s.png" alt="iPhone4s" /></div>
                    <h2>iPhone 4s</h2>
                    <p>Cracked Screen Replacement: $65<br>
                    Rear Cover Replacement: $35<br>
                    Home Button: $45<br>
                    Charging Port: $45<br>
                    Color Swap Starting at: $80</p>
                </div>
            </div>

            <div class="row animatedParent">
                <div class="two-col filter iphone4">
                    <div class="img-holder animated fadeInLeft"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone4.png" alt="iPhone4" /></div>
                    <h2>iPhone 4</h2>
                    <p>Cracked Screen Replacement: $65<br>
                    Rear Cover Replacement: $35<br>
                    Home Button: $45<br>
                    Charging Port: $45<br>
                    Color Swap Starting at: $80</p>
                </div>
            </div>

        </div> --><!-- End of row container -->
  
</div><!-- End of container-->    
</section><!-- End of Repair section-->

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
                          $admin_email = "rohanchambers888@gmail.com";
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

                        <form id="contact-form" method="post" action="index.php#contact">
                            <fieldset>
                                <legend>Please fill in all the fields below to send us a message online.</legend>
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
                        (904) 310-0059.</p>

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
</div><!-- #primary -->

<?php get_footer(); ?>
