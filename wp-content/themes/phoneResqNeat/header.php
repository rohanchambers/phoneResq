<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package some_like_it_neat
 */
?>
<!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>

    <?php tha_head_top(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    

    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/keyframes.css" data-skrollr-stylesheet />      
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to content', 'some-like-it-neat' ); ?></a>
        <?php tha_header_before(); ?>
        <header id="header" class="site-header wrap" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <?php tha_header_top(); ?>
            <div class="container">    
                <div id="logo"><a href="#header">Phone Resq</a></div>
                <nav id="nav-main" class="nav-global">
                    <ul>
                        <li id="dropdown"><a href="#services">Services<i class="fa fa-caret-down fa-lg"></i></a>
                            <ul id="subnav">
                                <li><a href="/iphone-repair">iPhone repair</a><span></span></li>
                                <li><a href="/ipad-repair">iPad repair</a><span></span></li>
                                <li><a href="/ipod-repair">iPod repair</a><span></span></li>
                                <li><a href="/android-repair">Android repair</a><span></span></li>
                                <li><a href="/laptop-repair">Laptop &amp; Desktop repair</a><span></span></li>
                                <li><a href="/cellphone-unlocks">Cell Phone Unlocks</a><span></span></li>
                            </ul>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li id="nav-sell"><a href="#sell">Sell your device</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </nav>
                <nav id="social-links" class="nav-global">
                    <ul>
                        <li><a href="https://www.facebook.com/PhoneResQ/" title="Facebook share" target="_blank"><i class="fa fa-facebook fa-lg btn-animate"></i></a></li>
                        <li><a href="https://twitter.com/PhoneResQ/" title="Twitter share" target="_blank"><i class="fa fa-twitter fa-lg btn-animate"></i></a></li>
                        <li><a href="https://www.instagram.com/dinaresq/" title="Instagram share" target="_blank"><i class="fa fa-instagram fa-lg btn-animate"></i></a></li>
                        <li><a href="http://www.phoneresq.com/feed" title="RSS share"><i class="fa fa-rss fa-lg btn-animate"></i></a></li>
                    </ul>
                </nav>
                <nav id="nav-cta" class="nav-global">
                    <ul>
                        <li><a href="#contact" class="btn-nav btn-animate"><i class="fa fa-wrench fa-lg"></i>Request repair</a></li>
                        <li><a href="tel:9043100059" class="btn-nav btn-animate"><i class="fa fa-phone fa-lg"></i>(904) 310-0059</a></li>
                    </ul>
                </nav>
                <div id="nav-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <?php tha_header_bottom(); ?>
        </header><!-- End of Header -->
        <?php tha_header_after(); ?>

		<?php tha_content_before(); ?>

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

		<main id="main" class="site-main wrap" role="main">
			<?php tha_content_top(); ?>
