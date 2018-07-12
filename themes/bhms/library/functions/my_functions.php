<?php



/* For  Three Navigations
------------------------------------------------------------ *
/* Register Menus*/

add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array(
	   'header-menu' => __( 'Header Nav' ),
	   'resource-menu' => __( 'Resource Nav' ),	
	   'usefull-menu' => __( 'Usefull Nav' ),	
      'navigation-left' => __( 'Navigation Left' ),
      'navigation-right' => __( 'Navigation Right' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*Sidebars
------------------------------------------------------------ */
if ( function_exists( 'register_sidebar_widget' ) )
		register_sidebar(array(
				'name'=> __( 'Sidebar', 'hajj' ),
				'id' => 'normal_sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
		));
if ( function_exists( 'register_sidebar_widget' ) )
		register_sidebar(array(
				'name'=> __( 'Sidebar Left', 'hajj' ),
				'id' => 'footer_sidebar_3',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
		));
if ( function_exists( 'register_sidebar_widget' ) )
		register_sidebar(array(
				'name'=> __( 'Sidebar Center', 'hajj' ),
				'id' => 'footer_sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
		));
if ( function_exists( 'register_sidebar_widget' ) )
		register_sidebar(array(
				'name'=> __( 'Sidebar Right', 'hajj' ),
				'id' => 'footer_sidebar_2',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
		));

		


/*Custom excerpt length and more string
------------------------------------------------------------ */



/*Custom thumbnails
------------------------------------------------------------ */
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'index-thumb', 250, 150, true );
	add_image_size( 'info-new', 210, 120, true );
	add_image_size( 'all-news', 250, 150, true );
	add_image_size( 'feature-small', 30, 30, true );
	add_image_size( 'feature-big', 605, 230, true );
	add_image_size( 'msg-img', 60, 55, true );
}




/*No more tag jumping
------------------------------------------------------------ */
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-' );
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_jump_link' );


function themename_customize_register($wp_customize){
    // Add all your settings, sections and controls on to the $wp_customize_manager
}



	/* For  My Admin Menu News & Info  */
add_action( 'init', 'create_custom_news_info' );
		function create_custom_news_info() {
				register_post_type( 'newsinfo',
						array(
								'labels' => array(
										'name' => __( 'News Info' ),
										'singular_name' => __( 'News Info' ),
										'add_new' => __( 'Add New' ),
										'add_new_item' => __( 'Add New' ),
										'edit_item' => __( 'Edit News Info' ),
										'new_item' => __( 'New News Info' ),
										'view_item' => __( 'View' ),
										'not_found' => __( 'Sorry, we couldn\'t find the News & Info you are looking for.' )
								),
						'public' => true,
						'publicly_queryable' => true,
						'exclude_from_search' => true,
						'menu_position' => 6,
						'has_archive' => true,
						 'taxonomies' => array('category', 'post_tag'),
						'hierarchical' => true,
						'menu_icon' => 'dashicons-portfolio',
						'capability_type' => 'page',
						'rewrite' => false,
						'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
						)
				);
				
		}	
		
		
			/* For  My Admin Menu News & Info  */
add_action( 'init', 'create_custom_messages' );
		function create_custom_messages() {
				register_post_type( 'messages',
						array(
								'labels' => array(
										'name' => __( 'Messages' ),
										'singular_name' => __( 'Messages' ),
										'add_new' => __( 'Add Message' ),
										'add_new_item' => __( 'Add Message' ),
										'edit_item' => __( 'Edit Message' ),
										'new_item' => __( 'New Message' ),
										'view_item' => __( 'View' ),
										'not_found' => __( 'Sorry, we couldn\'t find the Messages you are looking for.' )
								),
						'public' => true,
						'publicly_queryable' => true,
						'exclude_from_search' => true,
						'menu_position' => 7,
						'has_archive' => true,
						 'taxonomies' => array('category', 'post_tag'),
						'hierarchical' => true,
						'menu_icon' => 'dashicons-email',
						'capability_type' => 'page',
						'rewrite' => false,
						'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
						)
				);
				
		}	
		
		
		/* For  My Admin Menu News & Info  */
add_action( 'init', 'create_custom_hajj_bulletin' );
		function create_custom_hajj_bulletin() {
				register_post_type( 'hajj_bulletin',
						array(
								'labels' => array(
										'name' => __( 'Hajj Bulletin' ),
										'singular_name' => __( 'Hajj Bulletin' ),
										'add_new' => __( 'Add Hajj Bulletin' ),
										'add_new_item' => __( 'Add New Bulletin' ),
										'edit_item' => __( 'Edit Bulletin' ),
										'new_item' => __( 'New Hajj Bulletin' ),
										'view_item' => __( 'View' ),
										'not_found' => __( 'Sorry, we couldn\'t find the Hajj Bulletin you are looking for.' )
								),
						'public' => true,
						'publicly_queryable' => true,
						'exclude_from_search' => true,
						'menu_position' => 7,
						'has_archive' => true,
						 'taxonomies' => array('category', 'post_tag'),
						'hierarchical' => true,
						'menu_icon' => 'dashicons-megaphone',
						'capability_type' => 'page',
						'rewrite' => false,
						'supports' => array( 'title', 'editor', 'excerpt', 'content', 'custom-fields', 'thumbnail','tags'  )
						)
				);
				
		}	
		
		
		
		
		
			/* For  My Admin Menu News & Info  */
add_action( 'init', 'create_custom_photo_gallery' );
		function create_custom_photo_gallery() {
				register_post_type( 'photo_gallery',
						array(
								'labels' => array(
										'name' => __( 'Photo Gallery' ),
										'singular_name' => __( 'Photo Gallery' ),
										'add_new' => __( 'Add  Gallery' ),
										'add_new_item' => __( 'Add New Gallery' ),
										'edit_item' => __( 'Edit Gallery' ),
										'new_item' => __( 'New  Gallery' ),
										'view_item' => __( 'View' ),
										'not_found' => __( 'Sorry, we couldn\'t find the Photo Gallery you are looking for.' )
								),
						'public' => true,
						'publicly_queryable' => true,
						'exclude_from_search' => true,
						'menu_position' => 7,
						'has_archive' => true,
						 'taxonomies' => array('category', 'post_tag'),
						'hierarchical' => true,
						'menu_icon' => 'dashicons-images-alt',
						'capability_type' => 'page',
						'rewrite' => false,
						'supports' => array( 'title', 'editor', 'excerpt', 'content', 'custom-fields', 'thumbnail','tags'  )
						)
				);
				
		}	
		
		

// For Forms
add_action( 'init', 'create_custom_forms' );
function create_custom_forms() {
	register_post_type( 'forms',
		array(
			'labels' => array(
				'name' => __( 'Forms' ),
				'singular_name' => __( 'Form' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New' ),
				'edit_item' => __( 'Edit Form' ),
				'new_item' => __( 'New Form' ),
				'view_item' => __( 'View' ),
				'not_found' => __( 'Sorry, we couldn\'t find the Form you are looking for.' )
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'hierarchical' => true,
			'menu_icon' => 'dashicons-portfolio',
			'capability_type' => 'page',
			'rewrite' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
		)
	);

}

// For Circular
add_action( 'init', 'create_custom_circular' );
function create_custom_circular() {
	register_post_type( 'circular',
		array(
			'labels' => array(
				'name' => __( 'Circulars' ),
				'singular_name' => __( 'Circular' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New' ),
				'edit_item' => __( 'Edit Circular' ),
				'new_item' => __( 'New Circular' ),
				'view_item' => __( 'View' ),
				'not_found' => __( 'Sorry, we couldn\'t find the Circular you are looking for.' )
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'hierarchical' => true,
			'menu_icon' => 'dashicons-portfolio',
			'capability_type' => 'page',
			'rewrite' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
		)
	);

}

// For Fit Agency List
add_action( 'init', 'create_custom_fit_agency_list' );
function create_custom_fit_agency_list() {
	register_post_type( 'fit_agency_list',
		array(
			'labels' => array(
				'name' => __( 'Fit Agency List' ),
				'singular_name' => __( 'Fit Agency' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New' ),
				'edit_item' => __( 'Edit Fit Agency' ),
				'new_item' => __( 'New Fit Agency List' ),
				'view_item' => __( 'View' ),
				'not_found' => __( 'Sorry, we couldn\'t find the Fit Agency you are looking for.' )
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'hierarchical' => true,
			'menu_icon' => 'dashicons-portfolio',
			'capability_type' => 'page',
			'rewrite' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
		)
	);

}

// For Complain/Punishment
add_action( 'init', 'create_custom_complain_punishment' );
function create_custom_complain_punishment() {
	register_post_type( 'complain_punishment',
		array(
			'labels' => array(
				'name' => __( 'Complain/Punishment' ),
				'singular_name' => __( 'Complain/Punishment' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New' ),
				'edit_item' => __( 'Edit Complain/Punishment' ),
				'new_item' => __( 'New Complain/Punishment' ),
				'view_item' => __( 'View' ),
				'not_found' => __( 'Sorry, we couldn\'t find the Complain/Punishment you are looking for.' )
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'hierarchical' => true,
			'menu_icon' => 'dashicons-portfolio',
			'capability_type' => 'page',
			'rewrite' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
		)
	);

}

// For Policy/Guidelines
add_action( 'init', 'create_custom_policy_guidelines' );
function create_custom_policy_guidelines() {
	register_post_type( 'policy_guidelines',
		array(
			'labels' => array(
				'name' => __( 'Policy/Guidelines' ),
				'singular_name' => __( 'Policy/Guideline' ),
				'add_new' => __( 'Add New' ),
				'add_new_item' => __( 'Add New' ),
				'edit_item' => __( 'Edit Policy/Guideline' ),
				'new_item' => __( 'New Policy/Guideline' ),
				'view_item' => __( 'View' ),
				'not_found' => __( 'Sorry, we couldn\'t find the Policy/Guideline you are looking for.' )
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 6,
			'has_archive' => true,
			'taxonomies' => array('category', 'post_tag'),
			'hierarchical' => true,
			'menu_icon' => 'dashicons-portfolio',
			'capability_type' => 'page',
			'rewrite' => false,
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','tags'  )
		)
	);

}
		
		
global $wp_rewrite;
$projects_structure = '/projects/%year%/%monthnum%/%day%/%projects%/';
$wp_rewrite->add_rewrite_tag("%projects%", '([^/]+)', "project=");
$wp_rewrite->add_permastruct('projects', $projects_structure, false);	
	
	/* If your theme supports HTML5, which happens if it uses:   */

add_theme_support( 'html5', array( 'search-form' ) );


/*Search Options
------------------------------------------------------------ */
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );




/* For Page Pagination  */

function pagination($pages = '', $range = 4)
{ 
     $showitems = ($range * 2)+1; 
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $query;
         $pages = $query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }  
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>"; 
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function customRSSFunc($hk){
 if (isset($hk['feed']))
  $hk['post_type'] = get_post_types();
 return $hk;
         get_template_part('rss', 'feedname');
 }

/* For Admin Login Page  */

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/login/login-styles.css" />';
}

add_action('login_head', 'custom_login_css');

add_filter( 'login_headerurl', 'custom_login_header_url' );
function custom_login_header_url($url) {
return 'http://hajj.gov.bd';
}


add_filter('single_post_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' );
  }
  return $title;
}

function enable_more_buttons($buttons) {

$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
$buttons[] = 'styleselect';
$buttons[] = 'backcolor';
$buttons[] = 'newdocument';
$buttons[] = 'cut';
$buttons[] = 'copy';
$buttons[] = 'charmap';
$buttons[] = 'hr';
$buttons[] = 'visualaid';

return $buttons;
}
add_filter('mce_buttons_3', 'enable_more_buttons');

add_filter( 'tiny_mce_before_init', 'myformatTinyMCE' );
function myformatTinyMCE( $in ) {

$in['wordpress_adv_hidden'] = FALSE;

return $in;
}
