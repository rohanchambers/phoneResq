<?php
/**
 * some_like_it_neat functions and definitions
 *
 * @package some_like_it_neat
 */

if ( ! function_exists( 'some_like_it_neat_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function some_like_it_neat_setup()
	{

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
		if ( ! isset( $content_width ) ) {
			$content_width = 640; /* pixels */
		}

		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on some_like_it_neat, use a find and replace
		* to change 'some-like-it-neat' to the name of your theme in all the template files
		*/
		load_theme_textdomain( 'some-like-it-neat', get_template_directory() . '/library/languages' );

		/**
		* Add default posts and comments RSS feed links to head.
		*/
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable HTML5 markup
		 */
		add_theme_support( 'html5', array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
		) );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );

		/*
		* Enable title tag support for all posts.
		*
		* @link http://codex.wordpress.org/Title_Tag
		*/
		add_theme_support( 'title-tag' );

		/*
		* Add Editor Style for adequate styling in text editor.
		*
		* @link http://codex.wordpress.org/Function_Reference/add_editor_style
		*/
		add_editor_style( '/assets/css/editor-style.css' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary-navigation', __( 'Primary Menu', 'some-like-it-neat' ) );

		// Enable support for Post Formats.
		if ( 'yes' === get_theme_mod( 'some-like-it-neat_post_format_support' ) ) {
			add_theme_support( 'post-formats',
				array(
					'aside',
					'image', '
					video',
					'quote',
					'link',
					'status',
					'gallery',
					'chat',
					'audio'
				) );
		}

		// Enable Support for Jetpack Infinite Scroll
		if ( 'yes' === get_theme_mod( 'some-like-it-neat_infinite_scroll_support' ) ) {
			$scroll_type = get_theme_mod( 'some-like-it-neat_infinite_scroll_type' );
			add_theme_support( 'infinite-scroll', array(
				'type'				=> $scroll_type,
				'footer_widgets'	=> false,
				'container'			=> 'content',
				'wrapper'			=> true,
				'render'			=> false,
				'posts_per_page' 	=> false,
				'render'			=> 'some_like_it_neat_infinite_scroll_render',
			) );

			function some_like_it_neat_infinite_scroll_render() {
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'page-templates/template-parts/content', get_post_format() );
				endwhile;
				endif;
			}
		}

		// Setup the WordPress core custom background feature.
		add_theme_support(
			'custom-background', apply_filters(
				'some_like_it_neat_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
				)
			)
		);

		/**
		* Including Theme Hook Alliance (https://github.com/zamoose/themehookalliance).
		*/
		include get_template_directory() . '/library/vendors/theme-hook-alliance/tha-theme-hooks.php' ;

		/**
		* WP Customizer
		*/
		include get_template_directory() . '/library/vendors/customizer/customizer.php';

		/**
		* Implement the Custom Header feature.
		*/
		//require get_template_directory() . '/library/vendors/custom-header.php';

		/**
		* Custom template tags for this theme.
		*/
		include get_template_directory() . '/library/vendors/template-tags.php';

		/**
		* Custom functions that act independently of the theme templates.
		*/
		include get_template_directory() . '/library/vendors/extras.php';

		/**
		* Load Jetpack compatibility file.
		*/
		include get_template_directory() . '/library/vendors/jetpack.php';

		/**
		 * Including TGM Plugin Activation
		 */
		include_once get_template_directory() . '/library/vendors/tgm-plugin-activation/class-tgm-plugin-activation.php' ;

		include_once get_template_directory() . '/library/vendors/tgm-plugin-activation/tgm-plugin-activation.php' ;

	}
endif; // some_like_it_neat_setup
add_action( 'after_setup_theme', 'some_like_it_neat_setup' );

/**
 * Enqueue scripts.
 */
if ( ! function_exists( 'some_like_it_neat_scripts' ) ) :
	function some_like_it_neat_scripts()
	{

		if ( SCRIPT_DEBUG || WP_DEBUG ) :
			// Vendor Scripts
			wp_register_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr/modernizr.js', array( 'jquery' ), '2.8.2', true );
			wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr/modernizr.js', array( 'jquery' ), '2.8.2', true );

			wp_register_script( 'selectivizr-js', get_template_directory_uri() . '/assets/js/vendor/selectivizr/selectivizr.js', array( 'jquery' ), '1.0.2b', true );
			wp_enqueue_script( 'selectivizr-js', get_template_directory_uri() . '/assets/js/vendor/selectivizr/selectivizr.js', array( 'jquery' ), '1.0.2b', true );

			wp_register_script( 'css3-animate-it-js', get_template_directory_uri() . '/assets/js/vendor/css3-animate-it.js', array( 'jquery' ), '0.1.0', true );
			wp_enqueue_script( 'css3-animate-it-js', get_template_directory_uri() . '/assets/js/vendor/css3-animate-it.js', array( 'jquery' ), '0.1.0', true );

			wp_register_script( 'validate-js', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), '1.14.0', true );
			wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), '1.14.0', true );

			wp_register_script( 'skrollr-stylesheet-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.stylesheets.min.js', array( 'jquery' ), '0.0.6', true );
			wp_enqueue_script( 'skrollr-stylesheet-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.stylesheets.min.js', array( 'jquery' ), '0.0.60', true );

			wp_register_script( 'skrollr-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.min.js', array( 'jquery' ), '0.6.30', true );
			wp_enqueue_script( 'skrollr-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.min.js', array( 'jquery' ), '0.6.30', true );

			wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/vendor/main.js', array( 'jquery' ), '1.1.3', true );
			wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/vendor/main.js', array( 'jquery' ), '1.1.3', true );


			// Concatonated Scripts
			wp_enqueue_script( 'development-js', get_template_directory_uri() . '/assets/js/development.js', array( 'jquery' ), '1.0.0', false );

	 else :
			// Vendor Scripts
			wp_register_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr/modernizr.js', array( 'jquery' ), '2.8.2', true );
			wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/vendor/modernizr/modernizr.js', array( 'jquery' ), '2.8.2', true );

			wp_register_script( 'selectivizr-js', get_template_directory_uri() . '/assets/js/vendor/selectivizr/selectivizr.js', array( 'jquery' ), '1.0.2b', true );
			wp_enqueue_script( 'selectivizr-js', get_template_directory_uri() . '/assets/js/vendor/selectivizr/selectivizr.js', array( 'jquery' ), '1.0.2b', true );

			wp_register_script( 'css3-animate-it-js', get_template_directory_uri() . '/assets/js/vendor/css3-animate-it.min.js', array( 'jquery' ), '0.1.0', true );
			wp_enqueue_script( 'css3-animate-it-js', get_template_directory_uri() . '/assets/js/vendor/css3-animate-it.min.js', array( 'jquery' ), '0.1.0', true );

			wp_register_script( 'validate-js', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), '1.14.0', true );
			wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), '1.14.0', true );

			wp_register_script( 'skrollr-stylesheet-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.stylesheets.min.js', array( 'jquery' ), '0.0.6', true );
			wp_enqueue_script( 'skrollr-stylesheet-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.stylesheets.min.js', array( 'jquery' ), '0.0.60', true );

			wp_register_script( 'skrollr-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.min.js', array( 'jquery' ), '0.6.30', true );
			wp_enqueue_script( 'skrollr-js', get_template_directory_uri() . '/assets/js/vendor/skrollr.min.js', array( 'jquery' ), '0.6.30', true );

			wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/vendor/main.js', array( 'jquery' ), '1.1.3', true );
			wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/vendor/main.js', array( 'jquery' ), '1.1.3', true );


			// Concatonated Scripts
			wp_enqueue_script( 'production-js', get_template_directory_uri() . '/assets/js/production-min.js', array( 'jquery' ), '1.0.0', false );

	 endif;

		// Dashicons
		wp_enqueue_style( 'dashicons' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'some_like_it_neat_scripts' );
endif; // Enqueue scripts

/**
 * Enqueue styles.
 */

if ( ! function_exists( 'some_like_it_neat_styles' ) ) :

	function some_like_it_neat_styles() {
		if ( SCRIPT_DEBUG || WP_DEBUG ) :
			wp_register_style(
				'some_like_it_neat-style', // handle name
				get_template_directory_uri() . '/assets/css/style.css', '', '3.9', 'screen'
			);
			wp_enqueue_style( 'some_like_it_neat-style' );

			else :
			wp_register_style(
				'some_like_it_neat-style', // handle name
				get_template_directory_uri() . '/assets/css/style-min.css', '', '3.9', 'screen'
			);
			wp_enqueue_style( 'some_like_it_neat-style' );
		endif;
	}
  add_action( 'wp_enqueue_scripts', 'some_like_it_neat_styles' );

endif; // Enqueue styles

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function some_like_it_neat_widgets_init()
{
	register_sidebar(
		array(
		'name'          => __( 'Sidebar', 'some-like-it-neat' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'some_like_it_neat_widgets_init' );

/**
 * Add Singular Post Template Navigation
 */
if ( ! function_exists( 'some_like_it_neat_post_navigation' ) ) :
	function some_like_it_neat_post_navigation() {
		if ( function_exists( 'get_the_post_navigation' ) && is_singular() ) {
			echo get_the_post_navigation(
				array(
				'prev_text'    => __( '&larr; %title', 'some-like-it-neat' ),
				'next_text'    => __( '%title &rarr;', 'some-like-it-neat' ),
				'screen_reader_text' => __( 'Page navigation', 'some-like-it-neat' )
				)
			);
		} else {
			wp_link_pages(
				array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'some-like-it-neat' ),
				'after'  => '</div>',
				)
			);
		}
	}
endif;
add_action( 'tha_entry_after', 'some_like_it_neat_post_navigation' );

/**
 * Custom Hooks and Filters
 */

if ( ! function_exists( 'some_like_it_neat_optional_scripts' ) ) :
	function some_like_it_neat_optional_scripts()
	{
		// Link Color
		if ( '' != get_theme_mod( 'some_like_it_neat_add_link_color' )  ) {
		} ?>
			<style type="text/css">
				a { color: <?php echo get_theme_mod( 'some_like_it_neat_add_link_color' ); ?>; }
			</style>
		<?php
	}
	add_action( 'wp_head', 'some_like_it_neat_optional_scripts' );
endif;

if ( ! function_exists( 'some_like_it_neat_mobile_styles' ) ) :
	function some_like_it_neat_mobile_styles() {

		$value = get_theme_mod( 'some_like_it_neat_mobile_hide_arrow' );

		if ( 0 == get_theme_mod( 'some_like_it_neat_mobile_hide_arrow' ) ) { ?>
			<style>
				.menu-button i.navicon {
					display: none;
				}
			</style>
		<?php } else {

		}
	}
	add_action( 'wp_head', 'some_like_it_neat_mobile_styles' );

endif;

if ( ! function_exists( 'some_like_it_neat_add_footer_divs' ) ) :
	function some_like_it_neat_add_footer_divs()
	{
	?>

			<div class="footer-left">
				<?php echo esc_attr( get_theme_mod( 'some_like_it_neat_footer_left', __( '&copy; All Rights Reserved', 'some-like-it-neat' ) ) ); ?>
			</div>
			<div class="footer-right">
				<?php echo esc_attr( get_theme_mod( 'some_like_it_neat_footer_right', 'Footer Content Right' ) );  ?>
			</div>
		<?php
	}
	add_action( 'tha_footer_bottom', 'some_like_it_neat_add_footer_divs' );

endif;

function some_like_it_neat_add_selectivizr() { 	?>

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/selectivizr/selectivizr-min.js"></script>
		<noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" /></noscript>
	<![endif]-->
<?php }
add_action( 'tha_head_bottom', 'some_like_it_neat_add_selectivizr' );

//*** Custom for theme Page Slug Body Class ***
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

// DEQEUE WORDPRESS FILES that are not needed for this theme
// do not load the file: wp-embed.min.js (used since WordPress 4.4) This is to allow embed of videos
function on_wp_footer_action() {
    wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'on_wp_footer_action', 9 );

// Get images from get_the_content edited
// http://bavotasan.com/2009/retrieve-the-first-image-from-a-wordpress-post/ 
function getImage($num, $left = true) {
    global $more;
    $fadeClass = $left ? 'fadeInLeft' : 'fadeInRight';
    $more = 1;
    $link = get_permalink();
    $content = get_the_content();
    $count = substr_count($content, '<img');
    $start = 0;
    for($i=1;$i<=$count;$i++) {
	    $imgBeg = strpos($content, '<img', $start);
	    $post = substr($content, $imgBeg);
	    $imgEnd = strpos($post, '>');
	    $postOutput = substr($post, 0, $imgEnd+1);
	    $postOutput = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '',$postOutput);;
	    $image[$i] = $postOutput;
	    $start=$imgEnd+1;
    }
    if(stristr($image[$num],'<img')) { echo '<div class="img-holder animated '.$fadeClass.'">'.$image[$num]."</div>"; }
    $more = 0;
}

function getTwoColumnBlock($left = true){
	global $post;

	?>
	<div class="two-col filter <?php echo $post->post_name; ?>">
	   
	    <?php getImage('1', $left); ?>
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
	<?php
}

function more_posts() {
  global $wp_query;
  return $wp_query->current_post + 1 < $wp_query->post_count;
}

// Alberto redirect pages from sub and home
function homehash($section){
	$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
	if ($uri != '/'){
		echo home_url( '#' . $section );
	}
	else{
		echo '#' . $section;
	}
}
