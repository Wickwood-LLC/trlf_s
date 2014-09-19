<?php
/**
 * TRLF_s Custom Theme functions and definitions
 *
 * @package TRLF_s Custom Theme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'trlf_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function trlf_s_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on TRLF_s Custom Theme, use a find and replace
	 * to change 'trlf_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'trlf_s', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'trlf_s' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'trlf_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // trlf_s_setup
add_action( 'after_setup_theme', 'trlf_s_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function trlf_s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'trlf_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'trlf_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function trlf_s_scripts() {
	wp_enqueue_style( 'trlf_s-style', get_stylesheet_uri() );

	wp_enqueue_script( 'trlf_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'trlf_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'trlf_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Add theme options.
 */
function theme_include_lib($name) {
    locate_template(array('library/' . $name), true);
}
if (is_admin()) {
    theme_include_lib('options.php');
    theme_include_lib('admins.php');

    function theme_add_option_page() {
        add_theme_page(__('Theme Options', THEME_NS), __('Theme Options', THEME_NS), 'edit_theme_options', basename(__FILE__), 'theme_print_options');
    }

    add_action('admin_menu', 'theme_add_option_page');
    add_action('sidebar_admin_setup', 'theme_widget_process_control');
    add_filter('widget_update_callback', 'theme_update_widget_additional');
    add_action('add_meta_boxes', 'theme_add_meta_boxes');
    add_action('save_post', 'theme_save_post');
    add_filter( 'wp_default_editor', 'theme_wp_default_editor' );
    add_filter( 'admin_footer', 'theme_admin_footer', 99);

    function theme_wp_default_editor($content){
        if(isset($_GET['post']) && !theme_get_meta_option($_GET['post'], 'theme_use_wpautop')){
            return 'html';
        }
        return $content;
    }

    function theme_admin_footer(){
		 if(isset($_GET['post']) && !theme_get_meta_option($_GET['post'], 'theme_use_wpautop')){
            echo '	<script type="text/javascript">
					
                    jQuery(function($){
						$(\'#content-tmce\').click(function(){
							if (!$(\'#theme_use_wpautop\')[0].checked) {
								if ($(\'#save-alert\').length < 1) {
									$(\'#titlediv\').after(\'<div id="save-alert" class="updated below-h2"><p><strong>Warning:</strong> Saving after switching to Visual mode can break the page layout (<a href="http://codex.wordpress.org/Function_Reference/wpautop">wpautop</a> enabled).</p></div>\');
								}
								$(\'#theme_use_wpautop\')[0].checked = true;
							}
						});
                    });
                    </script>';
        }
    }
    
    if (file_exists(TEMPLATEPATH . '/content/content-importer.php')) {
        include(TEMPLATEPATH . '/content/content-importer.php');
    }
    return;
}
