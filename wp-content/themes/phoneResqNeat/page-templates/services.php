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
            <header>
                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'page-templates/template-parts/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; else: endif; ?>

                    <?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p><?php the_content(); ?>
                    <?php endwhile; else: endif; ?>

                    <?php endwhile; // end of the loop. ?>                               
            </header>
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
                            <option value="iphone-repair.php">iPhone</option>
                            <option value="ipad-repair.php">iPad</option>
                            <option value="ipod-repair.php">iPod</option>
                            <option value="android-repair.php">Android</option>
                            <option value="laptop-repair.php">Laptop</option>
                            <option value="unlock-repair.php">Unlocks</option>
                        </select>
                        <i class="fa fa-caret-down fa-lg"></i>
                    </div>
                </form>         
            </div>
            <div class="two-col"></div>
        </div>
            










<!--         <div class="row-container">    
            <div class="row animatedParent">
                <div class="two-col filter iphone6s">
                    <div class="img-holder animated fadeInLeft"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone6s.png" alt="iPhone6s" /></div>
                    <h2>iPhone 6s and 6s plus</h2>
                    <p>iPhone 6 Screen Replacement: $149.99<br>
                    iPhone 6s+ Screen Replacement: $179.99<br>
                    iPhone 6s and 6s+ Charging Port Replacement: $65<br>
                    iPhone 6s and 6s+ Front Camera Replacement: $65<br>
                    iPhone 6s and 6 Plus Rear Camera Replacement: $65<br>
                    For more 6s and 6s+ repairs, please contact us!</p>
                </div>
                <div class="two-col filter iphone6">
                    <div class="img-holder animated fadeInRight"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone6.png" alt="iPhone6" /></div>
                    <h2>iPhone 6 and 6 plus</h2>
                    <p><p>iPhone 6 Screen Replacement: $149.99<br>
                    iPhone 6+ Screen Replacement: $179.99<br>
                    iPhone 6 and 6+ Charging Port Replacement: $65<br>
                    iPhone 6 and 6+ Front Camera Replacement: $65<br>
                    iPhone 6 and 6 Plus Rear Camera Replacement: $65<br>
                    For more 6 and 6+ repairs, please contact us!</p>
                </div>
            </div>

            <div class="row animatedParent">
                <div class="two-col filter iphone5s">
                    <div class="img-holder animated fadeInLeft"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone5s.png" alt="iPhone5s" /></div>
                    <h2>iPhone 5s</h2>
                    <p>Cracked Screen Replacement: $110<br>
                    Home Button: $65<br>
                    Ear Speaker: $45<br>
                    Front facing Camera: $45<br>
                    Rear Facing Camera: $50<br>
                    Loud speaker: $45<br>
                    Charging Port: $65</p>
                </div>
                <div class="two-col filter iphone5c">
                    <div class="img-holder animated fadeInRight"><img src="<?php bloginfo('template_directory'); ?>/assets/images/page-repair/iphone/iphone5c.png" alt="iPhone6c" /></div>
                    <h2>iPhone 5c</h2>
                    <p>Cracked Screen Replacement: $105<br>
                    Home Button: $40<br>
                    Ear Speaker: $45<br>
                    Front Facing Camera: $45<br>
                    Rear Facing Camera: $50<br>
                    Large Speaker: $45<br>
                    Charging Port: $60</p>
                </div>
            </div>   

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
    </div>
</div>    
</section><!-- End of Repair section-->

</div><!-- #primary -->

<?php get_footer(); ?>
