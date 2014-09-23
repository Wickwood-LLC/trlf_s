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
    array("name" => "Navigation Menu",
            "type" => "sub-section-3",
            "category" => "header-styles",
    ),
    array('type' => 'checkbox',
				'name' => 'Trim long menu items',
				'id' => 'trim_long_menu_items',
				'std' => Yes,
				'text' => 'Yes',
            ),
    array('type' => 'numeric',
				'name' => 'Limit each item to [N] characters',
				'id' => 'limit_menu_title',
				'text' => '(characters). Used when "Trim long menu items" is enabled',
				'std' => '45',
				'depend' => 'trim_long_menu_items'
            ),
    array('type' => 'numeric',
				'name' => 'Limit each subitem to [N] characters',
				'id' => 'limit_sub_menu_title',
				'text' => '(characters). Used when "Trim long menu items" is enabled',
				'std' => '40',
				'depend' => 'trim_long_menu_items'
            ),
    array('type' => 'select',
				'name' => 'Default menu source',
				'id' => 'default_menu_src',
				'text' => 'Displayed when Appearance > Menu > Primary menu is not set',
				'values' => array(
					1 => 'Pages',
					2 => 'Categories'),
            ),

   array('type' => 'checkbox',
				'name' => 'Use not stylized menu',
				'id' => 'use_default_menu',
				'std' => Yes,
				'text' => 'Use standard <a href="http://codex.wordpress.org/Function_Reference/wp_nav_menu">wp_nav_menu</a>, when option is enabled (need for some third-party plugins).',
            ),

   array("name" => "Posts",
            "type" => "sub-section-3",
            "category" => "post-styles",
    ),
   array('type' => 'checkbox',
				'name' => 'Show navigation links at the top of front posts page',
				'id' => 'home_top_posts_navigation',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Show navigation links at the top of posts page',
				'id' => 'top_posts_navigation',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Show navigation links at the bottom of posts page',
				'id' => 'bottom_posts_navigation',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Show top navigation links in single post view',
				'id' => 'top_single_navigation',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Show bottom navigation links in single post view',
				'id' => 'bottom_single_navigation',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Trim long navigation links in single post view',
				'id' => 'single_navigation_trim_title',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'numeric',
				'name' => 'Limit each link to [N] characters',
				'id' => 'single_navigation_trim_len',
				'text' => '(characters). Used when "Trim long menu items" is enabled',
				'std' => '40',
				'depend' => 'single_navigation_trim_title'
            ),

   array("name" => "Excerpt",
            "type" => "sub-section-3",
            "category" => "excerpt-styles",
    ),
   array('type' => 'checkbox',
				'name' => 'Use auto excerpts',
				'id' => 'metadata_excerpt_auto',
				'std' => Yes,
				'text' => 'Generate post excerpts automatically (When neither more-tag nor post excerpt is used)',
            ),
   array('type' => 'numeric',
				'name' => 'Excerpt length',
				'id' => 'metadata_excerpt_words',
				'text' => '(words). Used when "Use auto excerpts" is enabled',
				'std' => '40',
				'depend' => 'metadata_excerpt_auto'
            ),
   array('type' => 'numeric',
				'name' => 'Excerpt balance',
				'id' => 'metadata_excerpt_min_remainder',
				'text' => '(words). Used when "Use auto excerpts" is enabled',
				'std' => '5',
				'depend' => 'metadata_excerpt_auto'
            ),

   array("name" => "Comments",
            "type" => "sub-section-3",
            "category" => "comment-styles",
    ),
   array('type' => 'checkbox',
				'name' => 'Allow comments',
				'id' => 'allow_comments',
				'std' => Yes,
				'text' => 'Yes',
            ),
   array('type' => 'checkbox',
				'name' => 'Use smilies in comments',
				'id' => 'comment_use_smilies',
				'std' => Yes,
				'text' => 'Yes. Used when "Allow Comments" is enabled',
				'depend' => 'allow_comments',
            ),

   array("name" => "Sidebars",
            "type" => "sub-section-3",
            "category" => "sidebar-styles",
            'text' => 'Default widgets style'
    ),
   array('type' => 'select',
				'name' => 'Primary sidebar',
				'id' => 'sidebars_style_default',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Secondary sidebar',
				'id' => 'sidebars_style_secondary',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Nav sidebars',
				'id' => 'sidebars_style_nav',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Top sidebars',
				'id' => 'sidebars_style_top',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Bottom sidebars',
				'id' => 'sidebars_style_bottom',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Header sidebars',
				'id' => 'sidebars_style_header',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),
   array('type' => 'select',
				'name' => 'Footer sidebars',
				'id' => 'sidebars_style_footer',
				'values' => array(
					1 => 'Block style',
					2 => 'Post style',
					3 => 'Simple text'),
            ),

   array("name" => "Footer",
            "type" => "sub-section-3",
            "category" => "sidebar-styles",
    ),
   array('type' => 'checkbox',
				'name' => 'Override default theme footer content',
				'id' => 'override_default_footer_content',
				'text' => 'Yes',
            ),
   array('type' => 'textarea',
				'name' => 'Footer content',
				'id' => 'footer_content',
				'text' => sprintf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>'), 'a, abbr, acronym, em, b, i, strike, strong, span') . '<br />'
		. sprintf(__('<strong>ShortTags:</strong><code>%s</code>'), '[year], [top], [rss], [login_link], [blog_title], [xhtml], [css], [rss_url], [rss_title]') . '<br />'
		. __('Used when "Override default theme footer content" is enabled'),
				'depend' => 'override_default_footer_content'
            ),
    );

function create_opening_tag($value) {
	echo '<div id="'.$value['id'].'">';
    echo '<span>';
    echo $value['name'];
    echo '</span>';
}
function create_closing_tag($value) { 
    echo '<span>';
    echo $value['text'];
    echo '</span><br /></div>';
}

function create_suf_header_3($value) {
    echo '<h3 class="suf-header-3">'.$value['name']."</h3>";
    echo '<p class="description">'.$value['text']."</p>";
}
function create_section_for_checkbox($value) {    
    create_opening_tag($value);
    if ( get_option( $value['id'] ) != 'Yes') {
        echo get_option( $value['id'] );
    }
    else {
        echo $value['std'];
    }
    echo '<input type="'.$value['type'].'" id="'.$value['id'].'" name="'.$value['name'].'" />';
    create_closing_tag($value);
}
function create_section_for_text($value) {
	create_opening_tag($value);
    if (get_option($value['id']) === FALSE) {
        $text = $value['std'];
    }
    else {
        $text = get_option($value['id']);
    } 
    echo '<input type="'.$value['type'].'" id="'.$value['id'].'" name="'.$value['id'].'" value="'.$text.'" />';
	create_closing_tag($value);
}
function create_section_for_textarea($value) {
	create_opening_tag($value);
	echo '<textarea name="'.$value['id'].'" type="textarea" cols="" rows="">';
	if ( get_option( $value['id'] ) != "") {
		echo get_option( $value['id'] );
	}
	else {
		echo $value['std'];
	}
	echo '</textarea>';
	create_closing_tag($value);
}
function create_section_for_numeric($value) {
	create_opening_tag($value);
    if (get_option($value['id']) === FALSE) {
        $text = $value['std'];
    }
    else {
        $text = get_option($value['id']);
    } 
    echo '<input type="'.$value['type'].'" id="'.$value['id'].'" name="'.$value['id'].'" value="'.$text.'" />';
	create_closing_tag($value);
}
function create_section_for_select($value) {
	create_opening_tag($value);
    if (get_option($value['id']) === FALSE) {
        $text = $value['std'];
    }
    else {
        $text = get_option($value['id']);
    } 
    echo '<select id="'.$value['id'].'" name="'.$value['id'].'">';
    foreach ($value['values'] as $option => $source) {
    	print '<option value="'.$source.'"> '.$source.' </option>';
    }
    echo '</select>';
	create_closing_tag($value);
}

function create_form($options) {
    echo '<form method="post" name="form">';
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
 
            case "select":
                create_section_for_select($value);
                break;
 
            case "radio":
                create_section_for_radio($value);
                break;
 
            case "numeric":
                create_section_for_numeric($value);
                break;
        }
    }
    echo '<input name="save" type="button" value="Save" class="button" onclick="submit_form(this, document.forms[\'form\'])" />';
	echo '<input name="reset_all" type="button" value="Reset to default values" class="button" onclick="submit_form(this, document.forms[\'form\'])" />';
	echo '<input type="hidden" name="formaction" value="default" />';
	echo '</form>';
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
