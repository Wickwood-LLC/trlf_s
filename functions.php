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

	register_sidebar( array(
		'name' => 'Secondary Widget Area',
		'id' => 'secondary_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Header Widget Area',
		'id' => 'header_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'First Navigation Widget Area',
		'id' => 'first_navigation_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Second Navigation Widget Area',
		'id' => 'second_navigation_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'First Top Widget Area',
		'id' => 'first_top_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Second Top Widget Area',
		'id' => 'second_top_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'First Bottom Widget Area',
		'id' => 'first_bottom_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Second Bottom Widget Area',
		'id' => 'second_navigation_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'First Footer Widget Area',
		'id' => 'first_footer_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Second Footer Widget Area',
		'id' => 'second_footer_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Third Footer Widget Area',
		'id' => 'third_footer_widget_area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name' => 'Fourth Footer Widget Area',
		'id' => 'fourth_footer_widget_area',
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
**/
$options = array(
    array("name" => "Header",
            "type" => "sub-section-3",
            "category" => "header-styles",
    ),
    array('type' => 'checkbox',
				'field_title' => 'Show headline',
				'field_id' => 'show_headline',
				'description' => 'Yes',
				'default_value' => true,
				'text' => 'Yes',
            ),
/*    array("name" => "Body Background Settings",
            "type" => "sub-section-3",
            "category" => "body-styles",
    ),
    array("name" => "Body Background Color",
            "desc" => "Set the color of the background on which the page is. ",
            "id" => $shortname."_body_background_color",
            "type" => "color-picker",
            "parent" => "body-styles",
            "std" => "444444"),
    array("name" => "Sidebar Setup",
            "type" => "sub-section-3",
            "category" => "sidebar-setup",
    ),
    array("name" => "Sidebar Position",
            "id" => $shortname."_sidebar_alignment",
            "type" => "radio",
            "desc" => "Which side would you like your sidebar?",
            "options" => array("left" => "Left", "right" => "Right"),
            "parent" => "sidebar-setup",
            "std" => "right"),
    array("name" => "Navigation Bar Setup",
            "type" => "sub-section-3",
            "category" => "nav-setup",
    ),
    array("name" => "Pages to show in Navigation Bar",
            "desc" => "Select the pages you want to include. All pages are excluded by default",
            "id" => $shortname."_nav_pages",
            "type" => "multi-select",
            "options" => mnt_get_formatted_page_array($shortname."_nav_pages"),
            "parent" => "nav-setup",
            "std" => "none"),
    array("name" => "Analytics",
            "type" => "sub-section-3",
            "category" => "analytics-setup",
    ),
    array("name" => "Custom Google Analytics Tracking Code",
            "desc" => "Enter your tracking code here for Google Analytics",
            "id" => $shortname."_custom_analytics_code",
            "type" => "textarea",
            "parent" => "analytics-setup",
            "std" => ""),*/
    );

function create_suf_header_3($value) {
    echo '<h3 class="suf-header-3">'.$value['name']."</h3>";
}
function create_section_for_checkbox($value) {
    
    echo '<span>';
    echo $value['field_title'];
    echo '</span>';
    echo '<input type="checkbox" name="'.$value['id'].'">'."n";
    if ( get_option( $value['id'] ) != "") {
        echo get_option( $value['id'] );
    }
    else {
        echo $value['std'];
    }
    echo '</input>'; 
}
function create_section_for_text($value) {
    create_opening_tag($value);
    $text = "";
    if (get_option($value['id']) === FALSE) {
        $text = $value['std'];
    }
    else {
        $text = get_option($value['id']);
    }
 
    echo '<input type="text" id="'.$value['id'].'" name="'.$value['id'].'" value="'.$text.'" />'."n";
    create_closing_tag();
}

function create_form($options) {
    echo '<form method="post" name="form">n';
    foreach ($options as $value) {
        switch ( $value['type'] ) {
            case "sub-section-3":
                create_suf_header_3($value);
                break;

            case "checkbox";
                create_section_for_checkbox($value);
                break;
 
            case "text";
                create_section_for_text($value);
                break;
 
            case "textarea":
                create_section_for_textarea($value);
                break;
 
            case "multi-select":
                create_section_for_multi_select($value);
                break;
 
            case "radio":
                create_section_for_radio($value);
                break;
 
            case "color-picker":
                create_section_for_color_picker($value);
                break;
        }
    }
/*    echo '<input name="save" type="button" value="Save" class="button" onclick="submit_form(this, document.forms['form'])" />n';
    echo '<input name="reset_all" type="button" value="Reset to default values" class="button" onclick="submit_form(this, document.forms['form'])" />n';
    echo '<input type="hidden" name="formaction" value="default" />n';
    echo '</form>n';*/
}
function trlf_s_add_admin() {
    global $themename, $shortname, $options, $spawned_options;
 
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['formaction'] ) {
            foreach ($options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
                }
                else {
                    delete_option( $value['id'] );
                }
            }
 
            foreach ($spawned_options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
                }
                else {
                    delete_option( $value['id'] );
                }
            }
 
            header("Location: themes.php?page=functions.php&saved=true");
            die;
        }
        else if('reset_all' == $_REQUEST['formaction']) {
            foreach ($options as $value) {
                delete_option( $value['id'] );
            }
 
            foreach ($spawned_options as $value) {
                delete_option( $value['id'] );
            }
 
            header("Location: themes.php?page=functions.php&".$_REQUEST['formaction']."=true");
            die;
        }
    }
    add_theme_page($themename." Theme Options", "".$themename." Theme Options", 
        'edit_themes', basename(__FILE__), 'trlf_s_admin');
}

add_action('admin_menu', 'trlf_s_add_admin');

function trlf_s_admin() {
    global $themename, $shortname, $options, $spawned_options, $theme_name;
 
    if ($_REQUEST['saved']) {
        echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved for this page.</strong></p></div>';
    }
    if ($_REQUEST['reset_all']) {
        echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    }
    ?>
<div class="wrap">
    <h2>Settings for <?php echo $themename; ?></h2>
    <div class="mnt-options">
<?php
    create_form($options);
?>
    </div><!-- mnt-options -->
</div><!-- wrap -->
<?php
} // end function trlf_s_admin()
?>
