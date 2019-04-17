<?php


	add_action( 'wp_enqueue_scripts', function() {

	    //Enqueue Style
	    wp_enqueue_style('fontAwesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	     wp_enqueue_style('googleFonts','https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,800,900i');
	     wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick/slick.css');
	   
	    wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/assets/css/slick/slick-theme.css');
	     wp_enqueue_style( 'menumaker', get_template_directory_uri() . '/assets/css/menumaker.css');
	    wp_enqueue_style( 'myStyle', get_template_directory_uri() . '/assets/css/style.css');
	   

	    //Enqueue Scripts

	    wp_enqueue_script( 'mapa', get_template_directory_uri() . '/assets/js/app_mapa.js'
	        , null, null, true);
	    wp_enqueue_script( 'ApiMapa', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAji56K9ixl6HA_0tZ6GEZndoiRzj5BFN4&callback=initMap', null, null, true);
	    wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.4.0.min.js', null, null, true);
	    wp_enqueue_script('climaApi', get_template_directory_uri() . '/assets/js/clima.js', null, null, true);
	    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, null, true);
	    wp_enqueue_script( 'jsBootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true);
	    wp_enqueue_script( 'jquery1-11', 'http://code.jquery.com/jquery-1.11.0.min.js', null, null, true);
	    wp_enqueue_script( 'jquery-migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', null, null, true);
	    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/css/slick/slick.min.js'
	        , null, null, true);
	    wp_enqueue_script( 'myScript', get_template_directory_uri() . '/assets/js/script.js'
	        , null, null, true);
	    wp_enqueue_script( 'responsiveSlick', get_template_directory_uri() . '/assets/js/responsive_slick.js'
	        , null, null, true);
	    wp_enqueue_script( 'menumaker', get_template_directory_uri() . '/assets/js/menumaker.js'
	        , null, null, true);
	    
	  
	    // wp_enqueue_script( 'menumaker', get_template_directory_uri() . '/assets/js/menumaker.js'
	    //     , null, null, true);
	  


	} );


		// custom logo
	function config_custom_logo() {
	add_theme_support( 'custom-logo', array(
	  'height'      => 300,
	  'width'       => 300,
	  'flex-height' => true,
	  'flex-width'  => true,
	  'header-text' => array( 'site-title', 'site-description' ),
	));
	}
	add_action( 'after_setup_theme', 'config_custom_logo' );




	// Register Custom Post Type
function lugar() {

	$labels = array(
		'name'                  => _x( 'Lugares', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Lugar', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Lugares', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Lugar', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies'            => array( 'tipo', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'lugar', $args );

}
add_action( 'init', 'lugar', 0 );

// Register Custom Taxonomy
function tipo() {

	$labels = array(
		'name'                       => _x( 'Tipo', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tipos', 'Taxonomy Singular Name', 'text_domain' ),

	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tipo', array( 'lugar' ), $args );

}
add_action( 'init', 'tipo', 0 );



// Register Custom Post Type
function panorama() {

	$labels = array(
		'name'                  => _x( 'Panoramas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Panorama', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Panoramas', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Panorama', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'panorama', $args );

}
add_action( 'init', 'panorama', 0 );

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }
  function kr_image_sizes( $sizes ) {
    $add_sizes = array(
      'lugar-single'		=> __('Tamaño personalizado para img post lugares'),
      'slide'               => __('Tamaño personalizado para slider'),
      'front'				=> __('Tamaño personalizado para posts en front-page')
     
    );
    return array_merge( $sizes, $add_sizes );
  }
  if ( function_exists( 'add_theme_support' ) ) {
  	add_image_size('lugar-single',500, 500, true);
  	add_image_size('slide', 300, 300, true);
  	add_image_size('front', 250, 250, true);
  
  	
    add_filter( 'image_size_names_choose', 'kr_image_sizes' );
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );


// registrar menu

	function menus_setup() {
	  register_nav_menus(
	    array(
	      
	      'header-menu' => __( 'Header Menu' ),
	      'footer-menu' => __( 'Footer Menu' ),

	    )
	  );
	}
	add_action( 'after_setup_theme', 'menus_setup' );

	
// Register Sidebars
function sidebar() {

	$args = array(
		'id'            => '1',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'sidebar' );

