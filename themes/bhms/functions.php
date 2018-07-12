<?php
/**
 * bhmp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bhmp
 */

if ( ! function_exists( 'bhmp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bhmp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bhmp, use a find and replace
		 * to change 'bhmp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bhmp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		require_once(STYLESHEETPATH . '/library/functions/my_functions.php' );

		if (is_file(STYLESHEETPATH . '/library/theme_option/theme-extend.php' ))
			require_once(STYLESHEETPATH . '/library/theme_option/theme-extend.php' );
		else
			require_once(TEMPLATEPATH . '/library/theme_option/theme-extend.php' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bhmp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bhmp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bhmp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bhmp_content_width', 640 );
}
add_action( 'after_setup_theme', 'bhmp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bhmp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bhmp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bhmp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bhmp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bhmp_scripts() {
	wp_enqueue_style( 'bhmp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bhmp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bhmp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bhmp_scripts' );

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
add_action( 'init', 'create_custom_posttype' );
function create_custom_posttype() {
	$label_slider = array(
		'name'               => _x( 'Sliders', 'post type general name', 'bhmp' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'bhmp' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'bhmp' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'bhmp' ),
		'add_new'            => _x( 'Add New', 'Slider', 'bhmp' ),
		'add_new_item'       => __( 'Add New Slider', 'bhmp' ),
		'new_item'           => __( 'New Slider', 'bhmp' ),
		'edit_item'          => __( 'Edit Slider', 'bhmp' ),
		'view_item'          => __( 'View Slider', 'bhmp' ),
		'all_items'          => __( 'All Sliders', 'bhmp' ),
		'search_items'       => __( 'Search Sliders', 'bhmp' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'bhmp' ),
		'not_found'          => __( 'No Sliders found.', 'bhmp' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'bhmp' )
	);

	$arg_slider = array(
		'labels'             => $label_slider,
        'description'        => __( 'Description.', 'bhmp' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'main_slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'main_slider', $arg_slider );
	
	$label_pilgrims = array(
		'name'               => _x( 'Pilgrims Message', 'post type general name', 'bhmp' ),
		'singular_name'      => _x( 'Pilgrims Message', 'post type singular name', 'bhmp' ),
		'menu_name'          => _x( 'Pilgrims Message', 'admin menu', 'bhmp' ),
		'name_admin_bar'     => _x( 'Pilgrims Message', 'add new on admin bar', 'bhmp' ),
		'add_new'            => _x( 'Add New', 'Pilgrims Message', 'bhmp' ),
		'add_new_item'       => __( 'Add New Pilgrims Message', 'bhmp' ),
		'new_item'           => __( 'New Pilgrims Message', 'bhmp' ),
		'edit_item'          => __( 'Edit Pilgrims Message', 'bhmp' ),
		'view_item'          => __( 'View Pilgrims Message', 'bhmp' ),
		'all_items'          => __( 'All Pilgrims Message', 'bhmp' ),
		'search_items'       => __( 'Search Pilgrims Message', 'bhmp' ),
		'parent_item_colon'  => __( 'Parent Pilgrims Message:', 'bhmp' ),
		'not_found'          => __( 'No Pilgrims Message found.', 'bhmp' ),
		'not_found_in_trash' => __( 'No Pilgrims Message found in Trash.', 'bhmp' )
	);

	$args_pilgrims = array(
		'labels'             => $label_pilgrims,
        'description'        => __( 'Description.', 'bhmp' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'pilgrims_message' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'pilgrims_message', $args_pilgrims );
	
}

function messages_add_meta_boxes( $post ){
	add_meta_box( 'messages_meta_box', __( 'Message Meta', 'bhmp' ), 'messages_build_meta_box', 'messages', 'normal', 'low' );
}
add_action( 'add_meta_boxes_messages', 'messages_add_meta_boxes' );

function messages_build_meta_box( $post ){
	// make sure the form request comes from WordPress
	wp_nonce_field( basename( __FILE__ ), 'messages_meta_box_nonce' );
	// retrieve the _food_carbohydrates current value
	$messages_designation_en = get_post_meta( $post->ID, 'messages_designation_en', true );
	$messages_designation_bn = get_post_meta( $post->ID, 'messages_designation_bn', true );
	?>
	<div class='inside'>
		<h3><?php _e( 'Member Designation EN', 'bhmp' ); ?></h3>
		<p>
			<input type="text" name="messages_designation_en" value="<?php echo $messages_designation_en; ?>" /> 
		</p>
	</div>
	<div class='inside'>
		<h3><?php _e( 'Member Designation BN', 'bhmp' ); ?></h3>
		<p>
			<input type="text" name="messages_designation_bn" value="<?php echo $messages_designation_bn; ?>" /> 
		</p>
	</div>
	<?php
}

function messages_save_meta_box_data( $post_id ){
	// verify taxonomies meta box nonce
	if ( !isset( $_POST['messages_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['messages_meta_box_nonce'], basename( __FILE__ ) ) ){
		return;
	}
	// return if autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}
	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}
	// store custom fields values
	// messages_designation_en string
	if ( isset( $_REQUEST['messages_designation_en'] ) ) {
		update_post_meta( $post_id, 'messages_designation_en', sanitize_text_field( $_POST['messages_designation_en'] ) );
	}
	if ( isset( $_REQUEST['messages_designation_bn'] ) ) {
		update_post_meta( $post_id, 'messages_designation_bn', sanitize_text_field( $_POST['messages_designation_bn'] ) );
	}
}
add_action( 'save_post_messages', 'messages_save_meta_box_data' );

