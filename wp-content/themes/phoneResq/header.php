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
    
    <meta name="title" content="Mobile Phone Repair | Cell Phone Repair | Fernandina Beach, FL | Phone ResQ">
    <meta name="author" content="Phone ResQ">
    <meta name="description" content="We repair and improve all of your handheld devices and home computers. Our hassle-free customer service is centered around your interests and the intention of getting you back online." />
    <meta name="keywords" content="Cell Phone Repair, Cell Phone Repair Fernandina, Cell Phone Repair Yulee, iPhone Screen Repair, iPad screen Repair, iPod Screen Repair, Samsung Screen Repair, mobile phone repair, Tablet Repair, Cell phone unlock, iPhone for sale, Samsung For Sale" />    

    <meta name="apple-mobile-web-app-title" content="Phone ResQ">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/keyframes.css" data-skrollr-stylesheet />
    <link rel="alternate" type="application/rss+xml" title="Example" href="http://www.aweber.com/blog/feed/" />

    <!-- Open graph tags -->
    <meta property="og:image"           content="http://phoneresq.com/wp-content/themes/phoneResq/assets/images/share-image.jpg" />    
    <meta property="og:title"           content="Welcome to PhoneResQ" />
    <meta property="og:description"     content="We repair and improve all of your handheld devices and home computers. Our hassle-free customer service is centered around your interests and the intention of getting you back online." />
    <meta property="og:url"             content="http://phoneresq.com/" />    
    <meta property="og:image:width"     content="600" />
    <meta property="og:image:height"    content="600" />
    <meta property="og:image:type"      content="image/jpg" /> 
    <meta property="fb:app_id"          content="628421490629466" />

    <meta name="twitter:card"           content="summary">
    <meta name="twitter:site"           content="@PhoneResQ">
    <meta name="twitter:title"          content="Welcome to PhoneResQ">
    <meta name="twitter:description"    content="We repair and improve all of your handheld devices and home computers. Our hassle-free customer service is centered around your interests and the intention of getting you back online.">
    <meta name="twitter:creator"        content="@PhoneResQ">
    <meta name="twitter:image:src"      content="http://phoneresq.com/wp-content/themes/phoneResq/assets/images/share-image.jpg">
    <meta name="twitter:domain"         content="phoneresq.com">

    <!-- Web and App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/assets/images/icons/android-icon-192x192.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/manifest.json">
    <link rel="image_src" type="image/jpg" href="http://phoneresq.com/wp-content/themes/phoneResq/assets/images/share-image.jpg" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/assets/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to content', 'some-like-it-neat' ); ?></a>
        <?php tha_header_before(); ?>
        <header id="header" class="site-header wrap" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <?php tha_header_top(); ?>
            <div class="container">    
                <div id="logo"><a href="<?php homehash('header') ?>">Phone Resq</a></div>
                <nav id="nav-main" class="nav-global">
                    <ul>
                        <li id="dropdown"><a href="<?php homehash('services') ?>">Services<i class="fa fa-caret-down fa-lg"></i></a>
                            <ul id="subnav">
                                <li><a href="/iphone-repair">iPhone repair</a><span></span></li>
                                <li><a href="/ipad-repair">iPad repair</a><span></span></li>
                                <li><a href="/ipod-repair">iPod repair</a><span></span></li>
                                <li><a href="/android-repair">Android repair</a><span></span></li>
                                <li><a href="/laptop-repair">Laptop &amp; Desktop repair</a><span></span></li>
                                <li><a href="/cellphone-unlocks">Cell Phone Unlocks</a><span></span></li>
                            </ul>
                        </li>
                        <li><a href="<?php homehash('about') ?>">About</a></li>
                        <li id="nav-sell"><a href="<?php homehash('sell') ?>">Sell</a></li>
                        <li><a href="<?php homehash('contact') ?>">Contact us</a></li>
                        <li><a href="./blog/">Blog</a></li>
                        <li><a href="./shop/">Shop</a></li>
                    </ul>
                </nav>
                <nav id="social-links" class="nav-global">
                    <ul>
                        <li><a href="https://www.facebook.com/PhoneResQ/" title="Facebook share" target="_blank"><i class="fa fa-facebook fa-lg btn-animate"></i></a></li>
                        <li><a href="https://twitter.com/PhoneResQ/" title="Twitter share" target="_blank"><i class="fa fa-twitter fa-lg btn-animate"></i></a></li>
                        <li><a href="https://www.instagram.com/dinaresq/" title="Instagram share" target="_blank"><i class="fa fa-instagram fa-lg btn-animate"></i></a></li>
                        <li><a href="#nogo" id="share-me-cta" class="animatedClick fast" title="Share this site" data-target="share-me-panel"><i class="fa fa-lg fa-share-alt btn-animate"></i></a>
                            <ul id="share-me" class="animated fadeInDown fast share-me-panel">
                                <li><div class="fb-share-button" data-href="http://phoneresq.com/" data-layout="button_count"></div></li>
                                <li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://phoneresq.com/" data-text="We repair and improve all of your handheld devices and home computers." data-via="PhoneResQ">Tweet</a></li>                            
                                <li><script type="IN/Share" data-url="http://phoneresq.com/"></script></li>
                                <li><div class="g-plusone" data-annotation="none"></div></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav id="nav-cta" class="nav-global">
                    <ul>
                        <li><a href="<?php homehash('contact') ?>" class="btn-nav btn-animate"><i class="fa fa-wrench fa-lg"></i>Request repair</a></li>
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

		<main id="main" class="site-main wrap" role="main">
			<?php tha_content_top(); ?>
            