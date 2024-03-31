<?php
/*
 *  Author: Tradehelm
 *  URL: tradehelm.com
 *  
 */

 

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here
require_once( __DIR__ . '/includes/functions-custom-post-types.php');

/*------------------------------------*\
	Theme Support
\*------------------------------------*/
add_filter( 'use_block_editor_for_post', '__return_false' );

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
	add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}



/*------------------------------------*\
	Functions
\*------------------------------------*/
/*** Login Customization ***/
function custon_login_logo() { ?>
<style type="text/css">
#login h1 a,
.login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri();
    ?>/img/gcc-logo.svg);
    background-size: contain;
    background-repeat: no-repeat;
    width: 250px;    
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'custon_login_logo' );

function custom_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );

function custom_login_logo_url_title() {
    return 'Global Creators Community';
}
add_filter( 'login_headertitle', 'custom_login_logo_url_title' );

/*** End Login Customization ***/

/******* Theme options ******/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title' 	=> 'Site Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


/*** End Theme options ******/

// function link_css_stylesheet() {
//     wp_enqueue_style('style', get_bloginfo('template_directory').'/style.min.css');
// }
// add_action('wp_head', 'link_css_stylesheet', 1);

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
   }
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );

function header_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="nav-menu">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
	
}

function that_footer_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="that-nav-footer">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
function that_footer_links()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-links',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="that-nav-links-footer">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function header_mobile_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'mobile-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="nav-mobile">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		//wp_deregister_script('jquery');
		wp_register_script('jquery-local', get_template_directory_uri() . '/_include/_js/_lib/jquery-3.3.1.min.js'); 
		wp_enqueue_script('jquery-local'); // Enqueue it!
		
		wp_register_script('owl.carousel', get_template_directory_uri() . '/_include/_js/owl.carousel.min.js'); // Conditional script(s)
		wp_enqueue_script('owl.carousel'); // Enqueue it!

		wp_register_script('jquery.autocomplete', get_template_directory_uri() . '/_include/_js/jquery.autocomplete.js'); // Conditional script(s)
		wp_enqueue_script('jquery.autocomplete'); // Enqueue it!
		
		wp_register_script('lazysizes', get_template_directory_uri() . '/_include/_js/lazysizes.min.js'); // Conditional script(s)
		wp_enqueue_script('lazysizes'); // Enqueue it!			

		// wp_register_script('chosen-jquery', get_template_directory_uri() . '/_include/_js/chosen.jquery.min.js'); // Conditional script(s)
		// wp_enqueue_script('chosen-jquery'); // Enqueue it!

		// wp_register_script('chosen.proto', get_template_directory_uri() . '/_include/_js/chosen.proto.min.js'); // Conditional script(s)
		// wp_enqueue_script('chosen.proto'); // Enqueue it!

		//WOW for Animate CSS
		//wp_register_script('wow', get_template_directory_uri() . '/_include/_js/_lib/wow.min.js'); // Conditional script(s)
		//wp_enqueue_script('wow'); // Enqueue it!	

		wp_register_script('defer-css', get_template_directory_uri() . '/_include/_js/defer-css.js'); // Conditional script(s)
		wp_enqueue_script('defer-css'); // Enqueue it!
		
		wp_register_script('site_scripts', get_template_directory_uri() . '/_include/_js/site-scripts.js'); // Custom scripts
		wp_enqueue_script('site_scripts'); // Enqueue it!	

		// Localize scripts
		wp_localize_script( 'site_scripts', 'site_path', array( 'template_url' => get_bloginfo('template_url') ) ); 

    }
}

function ajax_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
	$args['post_type'] = 'events';
	$args['posts_per_page'] = 16;
	
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post(); 
			get_template_part( 'loop', 'events' );
		endwhile;
 
	endif;
	wp_die( '0' );
	//die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
//add_action('wp_ajax_loadmore', 'ajax_loadmore_ajax_handler'); // wp_ajax_{action}
//add_action('wp_ajax_nopriv_loadmore', 'ajax_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
   // Load homepage scripts
	if ( is_page_template("template-home.php") )   {		
	}	
}


function add_defer_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array(
	'jquery-local',
	'defer-css',
	//'masonry',
	//'imagesloaded',
	'owl.carousel',
	'site_scripts',
	// 'chosen-jquery',
	// 'chosen.proto',
	'jquery.autocomplete'
	//'gsap',
	//'gsap-css',
	//'gsap-ease'
   );
   
   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}

// Load HTML5 Blank styles
function html5blank_styles()
{
	wp_register_style('owl.carousel', get_template_directory_uri() . '/_include/_css/owl.carousel.min.css', array(), '1.0', 'all');
	wp_enqueue_style('owl.carousel'); // Enqueue it!

	wp_register_style('jquery.autocomplete', get_template_directory_uri() . '/_include/_css/jquery.autocomplete.css', array(), '1.0', 'all');
	wp_enqueue_style('jquery.autocomplete'); // Enqueue it!

	//wp_register_style('owl.theme.default', get_template_directory_uri() . '/_include/_css/owl.theme.default.min.css', array(), '1.0', 'all');
	//wp_enqueue_style('owl.theme.default'); // Enqueue it!

	//wp_register_style('owl.theme.green', get_template_directory_uri() . '/_include/_css/owl.theme.green.min.css', array(), '1.0', 'all');
	//wp_enqueue_style('owl.theme.green'); // Enqueue it!
	
	// wp_register_style('chosen', get_template_directory_uri() . '/_include/_css/chosen.min.css', array(), '1.0', 'all');
  	// wp_enqueue_style('chosen'); // Enqueue it!

  	//wp_register_style('animate', get_template_directory_uri() . '/_include/_css/animate.min.css', array(), '1.0', 'all');
  	//wp_enqueue_style('animate'); // Enqueue it!

}


// Load Admin styles
function that_admin_styles()
{
  
  if( is_admin() ) {
    
  }
    
  
}


// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
		'header-menu' => __('Header Menu', 'html5blank'), // Main navigation
        'footer-menu' => __('Footer Menu', 'html5blank'), // Footer navigation
        'footer-links' => __('Footer Links', 'html5blank'), // Footer small links
		'mobile-menu' => __('Mobile Menu', 'html5blank') // Mobile navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	$tag = 'div';
	$add_below = 'comment';

	
	
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <div <?php comment_class(empty( $args['has_children'] ) ? 'risponse' : 'parent'); ?> id="comment-<?php comment_ID() ?>">
		<div class="comment-author"><?php comment_author(); ?></div>
		<div class="comment-date"><?php echo get_comment_date(); ?></div>
		<div class="comment-text"><?php echo get_comment_text() ?></div>		
<?php }

/**
 * Remove website field in public blog's comments
 */
add_filter('comment_form_default_fields', 'website_remove');

function website_remove($fields)
{
	if(isset($fields['url']))
	unset($fields['url']);
	return $fields;
}

function wd_admin_menu_rename() {
	global $menu; // Global to get menu array
	$menu[25][0] = 'Comments'; // Change name of posts to portfolio
	
}
add_action( 'admin_menu', 'wd_admin_menu_rename' );

/* Remove WP-EMBED */
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}




/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts', 2); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles', 5); // Add Theme Stylesheet
add_action('admin_enqueue_scripts', 'that_admin_styles', 6); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action( 'wp_footer', 'my_deregister_scripts' ); /* Remove WP-EMBED */


// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2); // defer scripts


// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

function html5_search_form( $form ) { 
	$form = '<section class="search">
				<form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
	   				<label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
					<div class="search-input-container">
						<input type="search" value="' . get_search_query() . '" name="s" id="s" 
							class="search-input" placeholder="Looking for something?" />
						<div class="search-icon">
							<img src="' . get_template_directory_uri() . '/img/icons/icon-search-black.svg" />
						</div>
					</div>
				</form>
			</section>';
	return $form;
}

add_filter( 'get_search_form', 'html5_search_form' );



/*******************************/

add_action( 'init', 'brandpage_form_head' );
function brandpage_form_head(){
	if (!is_admin()) {
		acf_form_head();
	}
}




// Add input placeholder
function acf_load_field_text( $field ) {
	
    $field['placeholder'] = $field['label'];

    return $field;    
}

add_filter('acf/load_field/type=text', 'acf_load_field_text');

// Add input placeholder
function acf_load_field_email( $field ) {
	
    $field['placeholder'] = $field['label'];

    return $field;    
}

add_filter('acf/load_field/type=email', 'acf_load_field_email');


function filters_pre_get_posts( $query ) {
	// bail early if is in admin
	if( is_admin() ) return;

	if ($query->is_main_query() && !is_admin()) {
		$query->set( 'posts_per_page', 15 );
	}
	
	
	return;
	
	
}

add_action( 'pre_get_posts', 'filters_pre_get_posts' );

/*------------------------------------*\
	ACF Tweaks Functions
\*------------------------------------*/
  // add default image setting to ACF image fields
  // let's you select a defualt image
  // this is simply taking advantage of a field setting that already exists
  /*
  add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
  function add_default_value_to_image_field($field) {
	  acf_render_field_setting( $field, array(
		  'label'			=> 'Default Image',
		  'instructions'		=> 'Appears when creating a new post',
		  'type'			=> 'image',
		  'name'			=> 'default_value',
	  ));
  }
  */

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}



/*------------------------------------*\
	Search filters Functions
\*------------------------------------*/
//used to searching in archive

function template_chooser( $template ){
    global $wp_query;   
    
    if( $wp_query->is_search){
        return locate_template('archive.php');  
    }   
    return $template;   
}

add_filter( 'template_include', 'template_chooser' ); 

// Content Views Pro - Add taxonomy term name to post's class

add_filter( 'pt_cv_content_item_class', 'cvp_theme_term_name_as_class', 100, 2 );
function cvp_theme_term_name_as_class( $args, $post_id ) {
	$taxonomies	 = get_taxonomies( '', 'names' );
	$terms		 = wp_get_object_terms( $post_id, $taxonomies );
	foreach ( $terms as $term ) {
		$args[] = sanitize_html_class( "cvp-term-{$term->taxonomy}-{$term->slug}" );
	}

	return $args;
}

// Allow uploading svg files
function upload_svg_files( $allowed ) {
    if ( !current_user_can( 'manage_options' ) )
        return $allowed;
    $allowed['svg'] = 'image/svg+xml';
    return $allowed;
}

add_filter( 'upload_mimes', 'upload_svg_files');

function add_ajax_scripts() {
    wp_localize_script( 'site_scripts', 'ajax_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'ajaxnonce' => wp_create_nonce( 'ajax_post_validation' )
    ) );
}

add_action( 'wp_enqueue_scripts', 'add_ajax_scripts' );

function st_ajaxurl(){
?>
	<script>
	
	var ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>';
	
	</script>
<?php	
}

add_action('wp_head','st_ajaxurl');	

function st_handle_registration(){

	if( $_POST['action'] == 'register_action' ) {

		$username = trim( $_POST['email'] );
		$email = trim( $_POST['email'] );
		$password = trim( $_POST['password'] );

		$status = wp_create_user( $username, $password ,$email );
	
		if( is_wp_error($status) ){
			$msg = '';

			foreach( $status->errors as $key=>$val ){
				foreach( $val as $k=>$v ){
					$msg = '<p class="error">'.$v.'</p>';
				}
			}

			echo $msg;
		}
		else {
			$msg = '<p class="success">Registration Successful</p>';
			echo $msg;						
		}
		
		die(1);
	}
}

add_action( 'wp_ajax_register_action', 'st_handle_registration' );
add_action( 'wp_ajax_nopriv_register_action', 'st_handle_registration' );

function user_metadata( $user_id ){
	if( !empty( $_POST['firstname'] ) && !empty( $_POST['lastname'] ) ) {
		update_user_meta( $user_id, 'first_name', trim($_POST['firstname']) );
		update_user_meta( $user_id, 'last_name', trim($_POST['lastname']) );
		update_user_meta( $user_id, 'usertype', $_POST['usertype'] );
		update_user_meta( $user_id, 'userchannel', $_POST['userchannel'] );
		update_user_meta( $user_id, 'userhandle', trim($_POST['userhandle']) );
		update_user_meta( $user_id, 'userindustry', $_POST['userindustry'] );
	}

	update_user_meta( $user_id, 'show_admin_bar_front', false );

	$user = get_user_by( 'id', $user_id );
	$user_meta = get_user_meta( $user_id );

	addMailchimpUser($user, $user_meta);
}

add_action( 'user_register', 'user_metadata' );
add_action( 'profile_update', 'user_metadata' );

function auto_login_new_user( $user_id ) {
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    $user = get_user_by( 'id', $user_id );
    do_action( 'wp_login', $user->user_login );//`[Codex Ref.][1]
	//wp_redirect( home_url() ); // You can change home_url() to the specific URL,such as "wp_redirect( 'http://www.wpcoke.com' )";
	echo "<script>		
		$('#registrationFormContainer').hide();
		$('.modal-user .modal-wrapper').css('top', '7em');
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		$('#successRegistration').show();
		//window.location.href='/';
		</script>";
    exit;
}

add_action( 'user_register', 'auto_login_new_user' );

function ajax_login_init(){

    wp_localize_script( 'site_scripts', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
        'loadingmessage' => __('Sending user info, please wait...')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}

function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = $_POST['username'];
    $info['user_password'] = $_POST['password'];
    $info['remember'] = true;

    $user_signon = wp_signon( $info, false );
    if ( is_wp_error($user_signon) ){
        echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
    }

    die();
}

function checkEmailExists() {

	if( $_POST['action'] == 'check_email_exists' ) {
		$email = $_POST['emailAddress'];

		$username = sanitize_text_field( $email );

		if ( username_exists( $username ) ) {
			echo "Error";
		} else {
			echo "OK";
		}
	}
}

add_action( 'wp_ajax_nopriv_check_email_exists', 'checkEmailExists');

function ajax_check_user_logged_in() {
    echo is_user_logged_in()?'yes':'no';
    die();
}
add_action('wp_ajax_is_user_logged_in', 'ajax_check_user_logged_in');
add_action('wp_ajax_nopriv_is_user_logged_in', 'ajax_check_user_logged_in');

function checkEmailResetExists() {

	if( $_POST['action'] == 'check_email_reset_exists' ) {
		$email = $_POST['emailResetAddress'];
		$username = sanitize_text_field( $email );		

		if ( username_exists( $username ) ) {
			echo "OK" ;
		} else {
			echo "Error";
		}
	}
}

add_action( 'wp_ajax_nopriv_check_email_reset_exists', 'checkEmailResetExists');

add_action( 'login_form_rp', 'redirect_to_custom_password_reset' );
add_action( 'login_form_resetpass', 'redirect_to_custom_password_reset' );

/**
 * Redirects to the custom password reset page, or the login page
 * if there are errors.
 */
function redirect_to_custom_password_reset() {
    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
		if(isset($_GET['action']) && $_GET['action']==='rp' && strpos($_SERVER['REQUEST_URI'],'wp-login.php')) {
			$key = isset( $_GET['key'] ) ? $_GET['key'] : '';
			$login = isset( $_GET['login'] ) ? $_GET['login'] : '';
			wp_redirect( site_url( ) . '?key=' . $key . '&login=' . $login );	
			exit;
		}

        // Verify key / login combo
        $user = check_password_reset_key( $_REQUEST['key'], $_REQUEST['login'] );
        if ( ! $user || is_wp_error( $user ) ) {
            if ( $user && $user->get_error_code() === 'expired_key' ) {
                wp_redirect( home_url( '?login=expiredkey' ) );
            } else {
                wp_redirect( home_url( '?login=invalidkey' ) );
            }
            exit;
        }
 
		$redirect_url = home_url();
        $redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );
        $redirect_url = add_query_arg( 'login', esc_attr( $_REQUEST['login'] ), $redirect_url );
 
        wp_redirect( $redirect_url );
        exit;
    }
}

add_action( 'login_form_rp', 'do_password_reset');
add_action( 'login_form_resetpass', 'do_password_reset' );

/**
 * Resets the user's password if the password reset form was submitted.
 */
function do_password_reset() {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
        $rp_key = $_REQUEST['rp_key'];
		$rp_login = $_REQUEST['rp_login'];
 
        $user = check_password_reset_key( $rp_key, $rp_login );

		// print_r($user);

        if ( ! $user || is_wp_error( $user ) ) {
            if ( $user && $user->get_error_code() === 'expired_key' ) {
                $redirect_url = home_url();
				$redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );
				$redirect_url = add_query_arg( 'login', 'expiredkey', $redirect_url );
                wp_redirect( $redirect_url );
            } else {
				$redirect_url = home_url();
				$redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );
				$redirect_url = add_query_arg( 'login', 'invalidkey', $redirect_url );
                wp_redirect( $redirect_url );
            }
            exit;
        }
 
        if ( isset( $_POST['pass1'] ) ) {
             // Parameter checks OK, reset password
            reset_password( $user, $_POST['pass1'] );
            wp_redirect( home_url( '?password=changed' ) );
        } else {
            echo "Invalid request.";
        }
 
        exit;
    }
}

add_action( 'wp_ajax_save_find_mentor_data', 'save_find_mentor_data' );
add_action( 'wp_ajax_nopriv_save_find_mentor_data', 'save_find_mentor_data' );

function save_find_mentor_data( ) {
	$current_user = wp_get_current_user();

	if( $_POST['action'] == 'save_find_mentor_data' ) {
		update_user_meta( $current_user->ID, 'find_mentor_userindustry', $_POST['find_mentor_userindustry'] );
		update_user_meta( $current_user->ID, 'find_mentor_learning_interest', $_POST['find_mentor_learning_interest'] );
		update_user_meta( $current_user->ID, 'find_mentor_location', trim($_POST['find_mentor_location']) );
		update_user_meta( $current_user->ID, 'find_mentor_email', $_POST['find_mentor_email'] );
		update_user_meta( $current_user->ID, 'find_mentor_lastUpdateDate', date("F j, Y") );
		update_user_meta( $current_user->ID, 'find_mentor_lastUpdateTime', date('G:i') );
	}

	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($_POST['find_mentor_email']));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;
	
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);       
	
	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	
	$jsonResult = json_decode($result);
	
	if($jsonResult->{'status'} == 404){
		$mailchimp_status = 'unsubscribed';
		$mailchimp_tag = 'Mentee';
	}
	else{
		$mailchimp_status = $jsonResult->{'status'};
		$mailchimp_tag = $jsonResult->{'tags'}[0]->{'name'};
	}

	$data = [
		'email'     => $_POST['find_mentor_email'],
		'firstname' => $current_user->user_firstname,
		'lastname'  => $current_user->user_lastname,
		'status'    => $mailchimp_status,
		'tags'  	=> $mailchimp_tag,
		'merge_fields' => array(
			'FINDUSTRY'		=> $_POST['find_mentor_userindustry'],
			'FINTEREST'		=> $_POST['find_mentor_learning_interest'],
			'FLOCATION' 	=> $_POST['find_mentor_location']
		)
	];	

	if($data['status'] == 'subscribed') {
		if($data['tags'] == '') {			
			setMailchimpMenteeTag($data['email']);
		}
		else if($data['tags'] == 'Mentor') {
			setAllMailchimpTags($data['email']);
		}
	}
	else
		syncMailchimp($data);

	updateFindMentorMailchimpData($data);
}

add_action( 'wp_ajax_save_be_mentor_data', 'save_be_mentor_data' );
add_action( 'wp_ajax_nopriv_save_be_mentor_data', 'save_be_mentor_data' );

function save_be_mentor_data( ) {
	$current_user = wp_get_current_user();

	if( $_POST['action'] == 'save_be_mentor_data' ) {
		update_user_meta( $current_user->ID, 'be_mentor_userindustry', $_POST['be_mentor_userindustry'] );
		
		$countBusinessAspect = 1;
		$totalBusinessAspect = 7;

		$businessAspectArray = array();

		foreach ($_POST['be_mentor_business_aspect'] as $business_aspect) {
			update_user_meta( $current_user->ID, 'be_mentor_business_aspect_' . $countBusinessAspect, $business_aspect );
			$countBusinessAspect++;

			$businessAspectArray[] = $business_aspect;
			
			if($countBusinessAspect < $totalBusinessAspect){
				for($i = $countBusinessAspect; $i <= $totalBusinessAspect; $i++) {
					delete_user_meta( $current_user->ID, 'be_mentor_business_aspect_' . $i);
				}
			}				
		}

		update_user_meta( $current_user->ID, 'be_mentor_additional_revenue', $_POST['be_mentor_additional_revenue'] );
		update_user_meta( $current_user->ID, 'be_mentor_location', trim($_POST['be_mentor_location']) );
		update_user_meta( $current_user->ID, 'be_mentor_email', $_POST['be_mentor_email'] );
		update_user_meta( $current_user->ID, 'be_mentor_lastUpdateDate', date("F j, Y") );
		update_user_meta( $current_user->ID, 'be_mentor_lastUpdateTime', date('G:i') );
	}

	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($_POST['be_mentor_email']));
	$dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;
	
	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);       
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	
	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);		

	curl_close($ch);
	
	$jsonResult = json_decode($result);	
	
	if($jsonResult->{'status'} == 404){
		$mailchimp_status = 'unsubscribed';
		$mailchimp_tag = 'Mentor';
	}
	else{
		$mailchimp_status = $jsonResult->{'status'};

		if($jsonResult->{'tags'}[0] != '')
			$mailchimp_tag = $jsonResult->{'tags'}[0]->{'name'};
		else
			$mailchimp_tag = '';
	}

	// if($mailchimp_status == 'subscribed' && $mailchimp_tag == 'Mentee')
	// 	$tags = array('Mentor', 'Mentee');
	// else
	// 	$tags = array('Mentor');

	$stringBusinessAspect = implode(', ', $businessAspectArray);

	$data = [
		'email'     => $_POST['be_mentor_email'],
		'firstname' => $current_user->user_firstname,
		'lastname'  => $current_user->user_lastname,
		'status'    => $mailchimp_status,
		// 'tags'  	=> $tags
		'tags'  	=> $mailchimp_tag,
		'merge_fields' => array(
			'BINDUSTRY'			=> $_POST['be_mentor_userindustry'],
			'BEXPERTISE'		=> $stringBusinessAspect,
			'BREVENUE'			=> $_POST['be_mentor_additional_revenue'],
			'BLOCATION'			=> $_POST['be_mentor_location']
		)
	];		
	
	if($data['status'] == 'subscribed') {
		if($data['tags'] == '') {			
			setMailchimpMentorTag($data['email']);
		}
		else if($data['tags'] == 'Mentee') {
			setAllMailchimpTags($data['email']);
		}
	}
	else
		syncMailchimp($data);

	updateBeMentorMailchimpData($data);
}

function addMailchimpUser($user, $usermeta) {
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($user->user_email));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

	$json = json_encode([
		'email_address' => $user->user_email,
		// 'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
		'status'        => 'subscribed',
		'merge_fields'  => [
			'FNAME'     => $user->first_name,
			'LNAME'     => $user->last_name,
			'DESCRIBE'	=> $usermeta['usertype'][0],
			'CHANNEL'	=> $usermeta['userchannel'][0],
			'HANDLE'	=> $usermeta['userhandle'][0],
			'INDUSTRY'	=> $usermeta['userindustry'][0]
		]
	]);	

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);		

	return $httpCode;
}

function syncMailchimp($data) {
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($data['email']));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

	$json = json_encode([
		'email_address' => $data['email'],
		// 'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
		'status'        => 'subscribed',
		'tags'  		=> array($data['tags']),
		'merge_fields'  => [
			'FNAME'     => $data['firstname'],
			'LNAME'     => $data['lastname']
		]
	]);			

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);	

	return $httpCode;
}

function setAllMailchimpTags($email) {	
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($email));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId . '/tags/';

	$json = json_encode([
		'tags'		=> array(
							array(
								'name' => 'Mentee',
								'status' => 'active'
							),
							array(
								'name' => 'Mentor',
								'status' => 'active'
							)
						)
	]);	

	// $fp = fopen(__DIR__ . '/errorlog.txt', 'w');
	// fwrite($fp, print_r($json, TRUE));		

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	// fwrite($fp, print_r($_POST['be_mentor_email'], TRUE));	
	// fwrite($fp, print_r($result, TRUE));	
	// fwrite($fp, print_r($httpCode, TRUE));	
	// fclose($fp);

	return $httpCode;
}

function setMailchimpMentorTag($email) {	
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($email));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId . '/tags/';

	$json = json_encode([
		'tags'		=> array(
							array(
								'name' => 'Mentor',
								'status' => 'active'
							)
						)
	]);	

	// $fp = fopen(__DIR__ . '/errorlog.txt', 'w');
	// fwrite($fp, print_r($json, TRUE));		

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	// fwrite($fp, print_r($_POST['be_mentor_email'], TRUE));	
	// fwrite($fp, print_r($result, TRUE));	
	// fwrite($fp, print_r($httpCode, TRUE));	
	// fclose($fp);

	return $httpCode;
}

function setMailchimpMenteeTag($email) {	
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($email));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId . '/tags/';

	$json = json_encode([
		'tags'		=> array(
							array(
								'name' => 'Mentee',
								'status' => 'active'
							)
						)
	]);	

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	return $httpCode;
}

function updateFindMentorMailchimpData($data) {	
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($data['email']));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

	$json = json_encode([
		'merge_fields'  => [
			'FINDUSTRY'		=> $data['merge_fields']['FINDUSTRY'],
			'FINTEREST'		=> $data['merge_fields']['FINTEREST'],
			'FLOCATION'		=> $data['merge_fields']['FLOCATION']
		]
	]);		

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	return $httpCode;
}

function updateBeMentorMailchimpData($data) {	
	
	$apiKey = MAILCHIMP_API_KEY;
	$listId = MAILCHIMP_LIST_ID;

	$memberId = md5(strtolower($data['email']));
	$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

	$json = json_encode([
		'merge_fields'  => [
			'BINDUSTRY'			=> $data['merge_fields']['BINDUSTRY'],
			'BEXPERTISE'		=> $data['merge_fields']['BEXPERTISE'],
			'BREVENUE'			=> $data['merge_fields']['BREVENUE'],
			'BLOCATION'			=> $data['merge_fields']['BLOCATION']
		]
	]);		

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);

	return $httpCode;
}

remove_filter( 'the_content', 'wpautop' );