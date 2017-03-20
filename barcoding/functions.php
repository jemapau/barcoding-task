<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'main-menu' => __( 'Main Menu' ),
      'contact-menu' => __( 'Contact Menu' ),
      'legal-menu' => __( 'Legal Menu' ),
     )
  );
}
add_action( 'init', 'register_my_menus' );


// Register Custom Post Type
function custom_post_type_news() {
	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'New', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'News', 'text_domain' ),
		'name_admin_bar'        => __( 'News', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
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
		'label'                 => __( 'News', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'with_front' => true,
	);

	register_post_type( 'news', $args );

}
add_action( 'init', 'custom_post_type_news' );


// Register Custom Post Type
function custom_post_type_testimonials() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
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
    'with_front' => true,
	);

	$args = array(
		'label'                 => __( 'Testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
    'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials' );


function register_cpt_gallery() {
$labels = array(
    'name' => _x( 'Galleries', 'gallery' ),
    'singular_name' => _x( 'Gallery', 'gallery' ),
    'add_new' => __( 'Add New', 'gallery' ),
    'add_new_item' => __( 'Add New Gallery', 'gallery' ),
    'edit_item' => __( 'Edit Gallery', 'gallery' ),
    'new_item' => __( 'New Gallery', 'gallery' ),
    'view_item' => __( 'View Gallery', 'gallery' ),
    'search_items' => __( 'Search Galleries', 'gallery' ),
    'not_found' => __( 'No galleries found', 'gallery' ),
    'not_found_in_trash' => __( 'No galleries found in Trash', 'gallery' ),
    'parent_item_colon' => __( 'Parent Gallery:', 'gallery' ),
    'menu_name' => __( 'Galleries', 'gallery' ),
);

$args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'description' => 'Image galleries for teachers classes',
    'supports' => array( 'title', 'editor', 'author', 'gallery'),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
		'menu_position' => 7,
    'menu_icon' => 'dashicons-format-gallery',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'with_front' => true,
    'capabilities' => array(
        'edit_post' => 'edit_gallery',
        'edit_posts' => 'edit_galleries',
        'edit_others_posts' => 'edit_other_galleries',
        'publish_posts' => 'publish_galleries',
        'read_post' => 'read_gallery',
        'read_private_posts' => 'read_private_galleries',
        'delete_post' => 'delete_gallery'
    ),
    'map_meta_cap' => true
);
  register_post_type( 'gallery', $args );
}
add_action( 'init', 'register_cpt_gallery');

function add_theme_caps() {
    // gets the administrator role
    $admins = get_role( 'administrator' );

    $admins->add_cap( 'edit_gallery' );
    $admins->add_cap( 'edit_galleries' );
    $admins->add_cap( 'edit_other_galleries' );
    $admins->add_cap( 'publish_galleries' );
    $admins->add_cap( 'read_gallery' );
    $admins->add_cap( 'read_private_galleries' );
    $admins->add_cap( 'delete_gallery' );
}
add_action( 'admin_init', 'add_theme_caps');


/*===============================
      POST FORMATAS SUPPORTS
=================================*/

add_theme_support( 'post-formats', array(
  'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
) );

/*===============================
        SOLUTIONS TAXONOMY
=================================*/

// Register Custom Post Type
function custom_post_type_solutions() {
	$labels = array(
		'name'                  => _x( 'Solutions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Solution', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Solutions', 'text_domain' ),
		'name_admin_bar'        => __( 'Solutions', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
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
    'with_front' => true,
	);

	$args = array(
		'label'                 => __( 'Solutions', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
    'taxonomies'            => array('category', 'post_tag'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
    'menu_icon'             => 'dashicons-category',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'solutions', $args );

}
add_action( 'init', 'custom_post_type_solutions' );


/* ===========================================
        GALLERY SETUP - whitout default styles
============================================== */

add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'li',
        'icontag' => '',
        'captiontag' => '',
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"slideshow-wrapper\">\n";
    $output .= "<div class=\"preloader\"></div>\n";
    $output .= "<ul data-orbit>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<li class=\"partners__item\">\n";
        $output .= "<a>\n";
        $output .= "<img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
        $output .= "</a>\n";
        $output .= "</li>\n";
    }

    $output .= "</ul>\n";
    $output .= "</div>\n";

    return $output;
}

/* ==============================
      SOLUTIONS TAXONOMY
================================= */



/* ==============================
      SIDEBAR NAVIGATION
================================= */

function wpb_list_child_pages() {

global $post;

if ( is_page() && $post->post_parent )

	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

	$string = '<li>' . $childpages . '</li>';
}

return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');


/* ==============================
        WIDGETS
================================= */

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar', //nombre del lugar donde habilitamos widgets
        'before_widget' => '', //etiqueta html o clase css que vendrá antes de nuestro widgets
        'after_widget' => '', // etiqueta html o clase css que vendrá después de nuestro widgets
        'before_title' => '<h2>', // etiqueta html que viene antes del título de nuestro widgets
        'after_title' => '</h2>', // etiqueta html que viene después del título de nuestro widgets
    ));
}

if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name'          => 'Facebook Feed',
        'id'            => 'facebook-feed-widget',
        'before_widget' => '<p>', //etiqueta html o clase css que vendrá antes de nuestro widgets
        'after_widget' => '</p>', // etiqueta html o clase css que vendrá después de nuestro widgets
        'container'    => false,
    ));
}

if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name'          => 'Twitter Feed',
        'id'            => 'twitter-feed-widget',
        'before_widget' => '<p>', //etiqueta html o clase css que vendrá antes de nuestro widgets
        'after_widget' => '</p>', // etiqueta html o clase css que vendrá después de nuestro widgets
        'container'    => false,
    ));
}


if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name'          => 'Social Image',
        'id'            => 'social-image-widget',
        'before_widget' => '<p>', //etiqueta html o clase css que vendrá antes de nuestro widgets
        'after_widget' => '</p>', // etiqueta html o clase css que vendrá después de nuestro widgets
        'container'    => false,
    ));
}


if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Categorias',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Subscribe Form',
        'id'            => 'subscribe-form-widget',
        'before_widget' => '',
        'after_widget' => '',
    ));
}


if (function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Menu Legales',
    ));
}


if (function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}


add_action( 'wp_default_scripts', function( $scripts ) {
  if ( ! empty( $scripts->registered['jquery'] ) ) {
      $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
  }
} );

function add_theme_scripts() {

  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/build/main.js', array ( 'jquery' ), 1.4, true);
  wp_enqueue_script( 'site', get_template_directory_uri() . '/js/build/site.js', array ( 'jquery' ), 1.4, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function my_init_method() {
    wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js', array('jquery'), '1.11.1');
    add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'my_init_method');

function fnc_styleTitle( $title ){
    $arr_title = explode(' ', $title);
    $arr_title[ count($arr_title) / 2 ] = '<span>'. $arr_title[ count($arr_title) / 2 ];
    $arr_title[ count($arr_title) ] = $arr_title[ count($arr_title) ] .'</span>';
    $title = implode(' ', $arr_title);
    return $title;
}

function fnc_ArbolCat( $IDCategory ){
    echo '<ul class="Section-category">';
    $the_query = new WP_Query(array('cat' => (int)$IDCategory,'orderby' => 'menu_order', 'order'   => 'ASC' ));
    while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 Section-category--item">';
            ?>
            <a href="<?php echo get_permalink( $the_query->post->ID ); ?>" title="<?php echo $the_query->post->post_title; ?>">
                <?php
                if( has_post_thumbnail() ) {
                    the_post_thumbnail( 'medium' , array( 'class' => 'img-responsive Section-category--image', 'title'=>$the_query->post->post_title ));
                }
                ?>
                <article class="Section-categoryBlock">
                    <h3 class="Section-category--title"><?php echo fnc_styleTitle( $the_query->post->post_title ); ?></h3>
                    <?php the_excerpt(); ?>
                </article>
            </a>
            <?php
        echo '</li>';
    }
    echo '</ul>';
}


/* ==============================
        CUSTOM HEADER
================================= */

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => 'http://www.example.com/some-image.png',
		'width'                  => 600,
		'height'                 => 200,
		'flex-width'             => true,
		'flex-height'            => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => 'Site Name',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => true,
		'video-active-callback'  => '',
	);
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'custom_theme_features' );
