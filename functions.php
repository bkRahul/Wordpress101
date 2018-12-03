<?php
/*
==========================

	Enqueue Scripts 

==========================
*/

function wordpress101_script_enqueue() {

//css

	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0','all');

	wp_enqueue_style('wordpress101style', get_template_directory_uri().'/css/wordpress101.css', array(), '1.0', 'all');

//js


	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);

	wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '3.3.1', true);

	wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);

	wp_enqueue_script('wordpress101js', get_template_directory_uri().'/js/wordpress101.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'wordpress101_script_enqueue');

/*
==========================

	Activate Menus

==========================
*/

function wordpress101_setup()  {
	add_theme_support('menus'); 
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'wordpress101_setup');


/*
==========================

	Add Theme Support 

==========================
*/


add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image', 'video')); 
add_theme_support('html5', array('search-form'));


/*
==========================

	Sidebar Function

==========================
*/

function wordpress101_widget_setup() {
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>'
		 ));
}

add_action('widgets_init', 'wordpress101_widget_setup');



/*
==========================

	Include Walker File 

==========================
*/


include get_template_directory().'/inc/walker.php';





/*
==========================

	Head Functions 

==========================
*/

//remove Wordpress version from head


function wordpress101_remove_version() {
	return '';
}

add_filter('the_generator', 'wordpress101_remove_version');






/*
	==========================================
	 Custom Post Type
	==========================================
*/
function wordpress101_custom_post_type (){
	
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonial',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Testimonial',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('testimonials',$args);
}

add_action('init','wordpress101_custom_post_type');




/*
	==========================================
	 Custom Taxonomy Type
	==========================================
*/




function wordpress101_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Types',
		'singular_name' => 'Type',
		'search_items' => 'Search Types',
		'all_items' => 'All Types',
		'parent_item' => 'Parent Type',
		'parent_item_colon' => 'Parent Type:',
		'edit_item' => 'Edit Type',
		'update_item' => 'Update Type',
		'add_new_item' => 'Add New Testimonial Type',
		'new_item_name' => 'New Type Name',
		'menu_name' => 'Types'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'type' )
	);
	
	register_taxonomy('type', array('testimonials'), $args);
	
	//add new taxonomy NOT hierarchical
	
}
add_action( 'init' , 'wordpress101_custom_taxonomies' );


?>


