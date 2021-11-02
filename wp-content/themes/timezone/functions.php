<?php
/**
 * timezone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package timezone
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'timezone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function timezone_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on timezone, use a find and replace
		 * to change 'timezone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'timezone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'timezone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'timezone_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'timezone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timezone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'timezone_content_width', 640 );
}
add_action( 'after_setup_theme', 'timezone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function timezone_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'timezone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'timezone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'timezone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function timezone_scripts() {

    wp_enqueue_style( 'timezone-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style( 'timezone-owl', get_template_directory_uri() . "/assets/css/owl.carousel.min.css");
    wp_enqueue_style( 'timezone-flaticon', get_template_directory_uri() . "/assets/css/flaticon.css");
    wp_enqueue_style( 'timezone-slicknav', get_template_directory_uri() . "/assets/css/slicknav.css");
    wp_enqueue_style( 'timezone-animate', get_template_directory_uri() . "/assets/css/animate.min.css");
    wp_enqueue_style( 'timezone-magnific', get_template_directory_uri() . "/assets/css/magnific-popup.css");
    wp_enqueue_style( 'timezone-fontawesome', get_template_directory_uri() . "/assets/css/fontawesome-all.min.css");
    wp_enqueue_style( 'timezone-themify', get_template_directory_uri() . "/assets/css/themify-icons.css");
    wp_enqueue_style( 'timezone-slick', get_template_directory_uri() . "/assets/css/slick.css");
    wp_enqueue_style( 'timezone-nice-select', get_template_directory_uri() . "/assets/css/nice-select.css");
    wp_enqueue_style( 'timezone-style', get_template_directory_uri() . "/assets/css/style.css");

    wp_enqueue_script('timezone-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-animated.headline', get_template_directory_uri() . '/assets/js/animated.headline.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-contact', get_template_directory_uri() . '/assets/js/contact.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.form', get_template_directory_uri() . '/assets/js/jquery.form.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-jquery.ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), _S_VERSION, true);
    wp_enqueue_script('timezone-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'timezone_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
 * Redux config
 */

require get_template_directory() . '/inc/redux-config.php';

/*
 * Woo
 */

require get_template_directory() . '/inc/woo.php';