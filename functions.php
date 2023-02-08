<?php
/**
 * aapsk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aapsk
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aapsk, use a find and replace
		* to change 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara' ),
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
			'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_custom_background_args',
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
add_action( 'after_setup_theme', 'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_content_width', 640 );
}
add_action( 'after_setup_theme', 'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_scripts() {
	wp_enqueue_style( 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('agjencia-e-administrimit-te-pasurive-te-sekuestruara-dhe-te-konfiskuara-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'agjencia_e_administrimit_te_pasurive_te_sekuestruara_dhe_te_konfiskuara_scripts' );

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


function your_theme_customizer_setting($wp_customize)
{

	// Add Footer Section
	$wp_customize->add_section('aapsk_social_media', array(
		'title' => 'Social Media',
		'description' => '',
		'priority' =>  120,
	));

	$wp_customize->add_setting('aapsk_social_media_facebook', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('aapsk_social_media_facebook', array(
		'type' => 'text',
		'section' => 'aapsk_social_media', // Add a default or your own section
		'label' => __('Facebook'),
	));



	$wp_customize->add_setting('aapsk_social_media_youtube', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('aapsk_social_media_youtube', array(
		'type' => 'text',
		'section' => 'aapsk_social_media', // Add a default or your own section
		'label' => __('Youtube'),
	));
	$wp_customize->add_setting('aapsk_social_media_email', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('aapsk_social_media_email', array(
		'type' => 'text',
		'section' => 'aapsk_social_media', // Add a default or your own section
		'label' => __('Email'),
	));
	$wp_customize->add_setting('aapsk_social_media_phone', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('aapsk_social_media_phone', array(
		'type' => 'text',
		'section' => 'aapsk_social_media', // Add a default or your own section
		'label' => __('Phone'),
	));

}

add_action('customize_register', 'your_theme_customizer_setting');


/* Footer Widgets */



register_sidebar(array(
	'name' => 'Footer Widget 1',
	'id' => 'footer-widget-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => 'Footer Widget 2',
	'id' => 'footer-widget-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => 'Footer Widget 3',
	'id' => 'footer-widget-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => 'Footer Widget 4',
	'id' => 'footer-widget-4',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => 'Footer Widget 5',
	'id' => 'footer-widget-5',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));


add_action('init', 'register_cpt_slider_post');
function register_cpt_slider_post()
{
	$labels = array(
		'name' => _x('Slider', 'slider_post'),
		'singular_name' => _x('Slider', 'slider_post'),
		'add_new' => _x('Add New', 'slider_post'),
		'add_new_item' => _x('Add New Slider', 'slider_post'),
		'edit_item' => _x('Edit Slider', 'slider_post'),
		'new_item' => _x('New Slider', 'slider_post'),
		'view_item' => _x('View Slider', 'slider_post'),
		'search_items' => _x('Search Slider', 'slider_post'),
		'not_found' => _x('No Slider found', 'slider_application_postpost'),
		'not_found_in_trash' => _x('No Slider found in Trash', 'slider_post'),
		'menu_name' => _x('Slider', 'slider_post'),
	);
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'page-attributes'),
		// 'taxonomies' => array('campaign-categories'),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-media-spreadsheet',
		'show_in_nav_menus' => true,
		'show_in_rest'       => true,
		'publicly_queryable' => false,
		'exclude_from_search' => false,
		'hierarchical' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'slider'),
		'capability_type' => 'post',
		// 'taxonomies'          => array('slider'),
	);

	register_post_type('slider_post', $args);
	flush_rewrite_rules();
}

add_filter('pll_get_post_types', 'add_cpt_to_pll', 10, 2);
function add_cpt_to_pll($post_types, $hide) {
    if ($hide)
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset($post_types['my_cpt']);
    else
        // enables language and translation management for 'my_cpt'
        $post_types['slider_post'] = 'slider_post';
    return $post_types;
}



add_action('init', 'register_cpt_auctions_post');
function register_cpt_auctions_post()
{
	$labels = array(
		'name' => _x('Auctions', 'auctions_post'),
		'singular_name' => _x('Auctions', 'auctions_post'),
		'add_new' => _x('Add New', 'auctions_post'),
		'add_new_item' => _x('Add New Auction', 'auctions_post'),
		'edit_item' => _x('Edit Auction', 'auctions_post'),
		'new_item' => _x('New Auction', 'auctions_post'),
		'view_item' => _x('View Auction', 'auctions_post'),
		'search_items' => _x('Search Auctions', 'auctions_post'),
		'not_found' => _x('No Auction found', 'auctions_post'),
		'not_found_in_trash' => _x('No Auction found in Trash', 'auctions_post'),
		'menu_name' => _x('Auctions', 'auctions_post'),
	);
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'page-attributes'),
		// 'taxonomies' => array('auctions-categories'),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-media-spreadsheet',
		'show_in_nav_menus' => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'hierarchical' => true,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'auctions'),
		'capability_type' => 'post',
		'taxonomies'          => array('auctions'),
	);

	register_post_type('auctions_post', $args);
	flush_rewrite_rules();
}

add_action('init', 'register_cpt_reports_post');
function register_cpt_reports_post()
{
	$labels = array(
		'name' => _x('Reports', 'reports_post'),
		'singular_name' => _x('Reports', 'reports_post'),
		'add_new' => _x('Add New', 'reports_post'),
		'add_new_item' => _x('Add New Report', 'reports_post'),
		'edit_item' => _x('Edit Report', 'reports_post'),
		'new_item' => _x('New Report', 'reports_post'),
		'view_item' => _x('View Report', 'reports_post'),
		'search_items' => _x('Search Reports', 'reports_post'),
		'not_found' => _x('No Report found', 'reports_post'),
		'not_found_in_trash' => _x('No Report found in Trash', 'reports_post'),
		'menu_name' => _x('Reports', 'reports_post'),
	);
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'page-attributes'),
		// 'taxonomies' => array('auctions-categories'),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-media-spreadsheet',
		'show_in_nav_menus' => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'hierarchical' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'reports'),
		'capability_type' => 'post',
		'taxonomies'          => array('reports'),
	);

	register_post_type('reports_post', $args);
	flush_rewrite_rules();
}





// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch() {

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: {
            action: 'data_fetch',
            year: jQuery('#year-select').val(),
            month: jQuery('#month-select').val()
        },
        success: function(data) {
            jQuery('#datafetch').html(data);
        }
    });

}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

	$tax_query = array('relation' => 'AND');
	if ($_POST['year']) {
        $tax_query[] =  array(
			array(
				'year'  => esc_attr( $_POST['year'] ),
				'month'  => esc_attr( $_POST['month'] ),
			),
        );
    }
	
	$my_query_args = array(
		'posts_per_page' => 9999,
		'offset' => 0,
		'orderby' => 'post_date',
		'order' => 'ASC',
		'post_type' => 'auctions_post',
		'post_status' => 'publish',
		'date_query' => $tax_query,
	);
	
	$the_query = new WP_Query($my_query_args);


    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

<div class="auction">
    <div class="title">
        <a href="<?php the_field('file'); ?>"><?php echo get_the_title(); ?></a>
    </div>
    <?php if( get_field('file') ): ?>
    <a href="<?php the_field('file'); ?>" class="btn">Shkarko</a>
    <?php endif; ?>

</div>

<?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}
add_action( 'wp_footer', 'ajax_fetch_reports' );
function ajax_fetch_reports() {
?>
<script type="text/javascript">
function fetchReports() {

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: {
            action: 'data_fetch_reports',
            year: jQuery('#reports-year-select').val(),
        },
        success: function(data) {
            jQuery('#datafetch-reports').html(data);
        }
    });

}
</script>

<?php
}

// the ajax function
add_action('wp_ajax_data_fetch_reports' , 'data_fetch_reports');
add_action('wp_ajax_nopriv_data_fetch_reports','data_fetch_reports');
function data_fetch_reports(){

	$tax_query = array('relation' => 'AND');
	if ($_POST['year']) {
        $tax_query[] =  array(
			array(
				'year'  => esc_attr( $_POST['year'] ),
			),
        );
    }
	
	$my_query_args = array(
		'posts_per_page' => 9999,
		'offset' => 0,
		'orderby' => 'post_date',
		'order' => 'ASC',
		'post_type' => 'reports_post',
		'post_status' => 'publish',
		'date_query' => $tax_query,
	);
	
	$the_query = new WP_Query($my_query_args);


    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

<div class="report">
    <div class="title">
        <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M27.125 8.719v18.406A3.875 3.875 0 0 1 23.25 31h-1.938v-1.938h1.938a1.937 1.937 0 0 0 1.938-1.937V8.719h-3.875a2.906 2.906 0 0 1-2.907-2.906V1.938H7.75a1.937 1.937 0 0 0-1.938 1.937v17.438H3.875V3.875A3.875 3.875 0 0 1 7.75 0h10.656l8.719 8.719ZM3.1 22.959H0v7.748h1.533v-2.6h1.555c.556 0 1.03-.11 1.419-.335.393-.227.693-.533.897-.918.21-.405.318-.856.312-1.312 0-.484-.103-.922-.306-1.312a2.278 2.278 0 0 0-.892-.924c-.387-.232-.858-.347-1.418-.347Zm1.056 2.583a1.54 1.54 0 0 1-.165.736 1.113 1.113 0 0 1-.46.467 1.539 1.539 0 0 1-.727.16H1.527V24.18h1.278c.423 0 .754.116.992.35.239.237.359.574.359 1.012Zm2.358-2.583v7.748h2.829c.777 0 1.422-.155 1.933-.459a2.81 2.81 0 0 0 1.153-1.335c.252-.58.38-1.282.38-2.1 0-.814-.126-1.507-.38-2.083a2.763 2.763 0 0 0-1.141-1.317c-.512-.303-1.16-.454-1.947-.454H6.514Zm1.532 1.25h1.091c.48 0 .872.097 1.18.295.32.209.561.518.686.88.153.389.229.875.229 1.458.006.387-.039.772-.132 1.147a2.208 2.208 0 0 1-.38.818 1.55 1.55 0 0 1-.647.488 2.513 2.513 0 0 1-.936.159h-1.09v-5.245Zm7.253 3.416v3.082h-1.531V22.96h4.937v1.266h-3.406v2.164h3.111v1.236H15.3Z"
                fill="#000" />
        </svg><a href="<?php the_field('file'); ?>"><?php echo get_the_title(); ?></a>
    </div>
    <?php if( get_field('file') ): ?>
    <a href="<?php the_field('file'); ?>" class="btn">Shkarko</a>
    <?php endif; ?>

</div>

<?php endwhile;
        wp_reset_postdata();  
    endif;

    die();
}


add_filter( 'get_archives_link', function( $link_html, $url, $text, $format, $before, $after ) {

    if ( 'custom' == $format ) {
        $link_html = "\t<option value=\"". esc_attr( $text ) ."\">$before $text $after</option>\n";
    }

    return $link_html;

}, 10, 6 );


// Polylang String Translation 

add_action('init', function () {
	pll_register_string('related-thumbnail', 'Lexo më shumë');
	pll_register_string('year-select', 'Viti');
	pll_register_string('month-select', 'Muaji');
	pll_register_string('btn', 'Më shumë');
	
});