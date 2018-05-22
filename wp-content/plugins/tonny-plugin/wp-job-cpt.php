<?php

//Exit if accessed directly
if( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
function mystory_register_post_type() {
	$singular = 'Story';
	$plural = 'Stories';
	$labels = array(
		'name' 			        => $plural,
		'singular_name' 	    => $singular,
		'add_new' 		        => 'Add New',
		'add_new_item'  	    => 'Add New ' . $singular,
		'edit'		            => 'Edit',
		'edit_item'	            => 'Edit ' . $singular,
		'new_item'	            => 'New ' . $singular,
		'view' 			        => 'View ' . $singular,
		'view_item' 		    => 'View ' . $singular,
		'search_term'   	    => 'Search ' . $plural,
		'parent' 		        => 'Parent ' . $singular,
		'not_found' 		    => 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);
	$args = array(
		'labels' => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_in_nav_menus'   => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-book-alt',
		'can_export'          => true,
		'delete_with_user'    => false,
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		// 'capabilities' => array(),
		'rewrite'             => array(
			'slug' => $slug,
			'with_front' => true,
			'pages' => true,
			'feeds' => true,
		),
		'supports'            => array(
			'title',
			'editor',
			'author',
			'custom-fields',
			'thumbnail',
		)
	);
	register_post_type ( 'story', $args );
}
add_action( 'init', 'mystory_register_post_type' );
*/

function myblog_register_post_type() {
	$singular = 'Blog';
	$plural = 'Blogs';
	$labels = array(
		'name' 			        => $plural,
		'singular_name' 	    => $singular,
		'add_new' 		        => 'Add New',
		'add_new_item'  	    => 'Add New ' . $singular,
		'edit'		            => 'Edit',
		'edit_item'	            => 'Edit ' . $singular,
		'new_item'	            => 'New ' . $singular,
		'view' 			        => 'View ' . $singular,
		'view_item' 		    => 'View ' . $singular,
		'search_term'   	    => 'Search ' . $plural,
		'parent' 		        => 'Parent ' . $singular,
		'not_found' 		    => 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);
	$args = array(
		'labels' => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'show_in_nav_menus'   => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'can_export'          => true,
		'delete_with_user'    => false,
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		// 'capabilities' => array(),
		'rewrite'             => array(
			'slug' => $slug,
			'with_front' => true,
			'pages' => true,
			'feeds' => true,
		),
		'supports'            => array(
			'title',
			'editor',
			'author',
			'custom-fields',
			'thumbnail',
		)
	);
	register_post_type ( 'blog', $args );
}
add_action( 'init', 'myblog_register_post_type' );





function myvideos_register_post_type() {
    $singular = 'Video';
    $plural = 'Videos';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-video-alt3',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'video', $args );
}
add_action( 'init', 'myvideos_register_post_type' );





function myvideoblog_register_post_type() {
    $singular = 'Videoblog';
    $plural = 'Videoblogs';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-video-alt',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'videoblog', $args );
}
add_action( 'init', 'myvideoblog_register_post_type' );




/*
function mypodcast_register_post_type() {
    $singular = 'Podcast';
    $plural = 'Podcasts';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-location-alt',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'podcast', $args );
}
add_action( 'init', 'mypodcast_register_post_type' );
*/


function myteam_register_post_type() {
    $singular = 'Team';
    $plural = 'Team';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 8,
        'menu_icon'           => '\\f0c0',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'team', $args );
}
add_action( 'init', 'myteam_register_post_type' );




function myask_register_post_type() {
    $singular = 'Ask';
    $plural = 'Asks';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 9,
        'menu_icon'           => '\\f0e5',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'ask', $args );
}
add_action( 'init', 'myask_register_post_type' );




function my_3_custom_videos_register_post_type() {
    $singular = 'Custom Video';
    $plural = 'Custom Videos';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 9,
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'custom_video', $args );
}
add_action( 'init', 'my_3_custom_videos_register_post_type' );




function mycoaching_register_post_type() {
    $singular = 'Coach';
    $plural = 'Coachs';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-awards',
        'menu_position'       => 10,
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'coaching', $args );
}
add_action( 'init', 'mycoaching_register_post_type' );



function myfaq_register_post_type() {
    $singular = 'FAQ';
    $plural = 'FAQ\'S';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 11,
        'menu_icon'           => '\\f059',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'faq', $args );
}
add_action( 'init', 'myfaq_register_post_type' );





function success_story_register_post_type() {
    $singular = 'Success Story';
    $plural = 'Success Stories';
    $labels = array(
        'name' 			        => $plural,
        'singular_name' 	    => $singular,
        'add_new' 		        => 'Add New',
        'add_new_item'  	    => 'Add New ' . $singular,
        'edit'		            => 'Edit',
        'edit_item'	            => 'Edit ' . $singular,
        'new_item'	            => 'New ' . $singular,
        'view' 			        => 'View ' . $singular,
        'view_item' 		    => 'View ' . $singular,
        'search_term'   	    => 'Search ' . $plural,
        'parent' 		        => 'Parent ' . $singular,
        'not_found' 		    => 'No ' . $plural .' found',
        'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
    );
    $args = array(
        'labels' => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 11,
        'menu_icon'           => '\\f164',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'taxonomies'          => array( 'event-categories' ),
        // 'capabilities' => array(),
        'rewrite'             => array(
            'slug' => $slug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
        'supports'            => array(
            'title',
            'editor',
            'author',
            'custom-fields',
            'thumbnail',
        )
    );
    register_post_type ( 'success-story', $args );
}
add_action( 'init', 'success_story_register_post_type' );

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', array('ask', 'blog', 'coaching', 'podcast', 'team', 'success-story'));
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');



//taxonomies
add_action('init','add_categories_to_cpt');
function add_categories_to_cpt(){
    register_taxonomy_for_object_type('event-categories', 'story');
}


function my_ask_register_taxonomy() {
    $plural = 'Categories';
    $singular = 'Category';
    $labels = array(
        'name'                       => $plural,
        'singular_name'              => $singular,
        'search_items'               => 'Search ' . $plural,
        'popular_items'              => 'Popular ' . $plural,
        'all_items'                  => 'All ' . $plural,
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit ' . $singular,
        'update_item'                => 'Update ' . $singular,
        'add_new_item'               => 'Add New ' . $singular,
        'new_item_name'              => 'New ' . $singular . ' Name',
        'separate_items_with_commas' => 'Separate ' . $plural . ' with commas',
        'add_or_remove_items'        => 'Add or remove ' . $plural,
        'choose_from_most_used'      => 'Choose from the most used ' . $plural,
        'not_found'                  => 'No ' . $plural . ' found.',
        'menu_name'                  => $plural,
    );
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => $slug ),
    );
    register_taxonomy('ask_category', 'ask', $args );
}
add_action( 'init', 'my_ask_register_taxonomy' );




function my_blog_register_taxonomy() {
    $plural = 'Categories';
    $singular = 'Category';
    $labels = array(
        'name'                       => $plural,
        'singular_name'              => $singular,
        'search_items'               => 'Search ' . $plural,
        'popular_items'              => 'Popular ' . $plural,
        'all_items'                  => 'All ' . $plural,
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit ' . $singular,
        'update_item'                => 'Update ' . $singular,
        'add_new_item'               => 'Add New ' . $singular,
        'new_item_name'              => 'New ' . $singular . ' Name',
        'separate_items_with_commas' => 'Separate ' . $plural . ' with commas',
        'add_or_remove_items'        => 'Add or remove ' . $plural,
        'choose_from_most_used'      => 'Choose from the most used ' . $plural,
        'not_found'                  => 'No ' . $plural . ' found.',
        'menu_name'                  => $plural,
    );
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => $slug ),
    );
    register_taxonomy('blog_category', 'blog', $args );
}
add_action( 'init', 'my_blog_register_taxonomy' );



/*
function my_podcast_register_taxonomy() {
    $plural = 'Categories';
    $singular = 'Category';
    $labels = array(
        'name'                       => $plural,
        'singular_name'              => $singular,
        'search_items'               => 'Search ' . $plural,
        'popular_items'              => 'Popular ' . $plural,
        'all_items'                  => 'All ' . $plural,
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit ' . $singular,
        'update_item'                => 'Update ' . $singular,
        'add_new_item'               => 'Add New ' . $singular,
        'new_item_name'              => 'New ' . $singular . ' Name',
        'separate_items_with_commas' => 'Separate ' . $plural . ' with commas',
        'add_or_remove_items'        => 'Add or remove ' . $plural,
        'choose_from_most_used'      => 'Choose from the most used ' . $plural,
        'not_found'                  => 'No ' . $plural . ' found.',
        'menu_name'                  => $plural,
    );
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => $slug ),
    );
    register_taxonomy('podcast_category', 'podcast', $args );
}
add_action( 'init', 'my_podcast_register_taxonomy' );
*/
