<?php
// Set variables with theme names
$themename = 'Parallaxr';
$shortname = 'convax';   

require_once ( dirname( __FILE__ ) . "/inc/fn-admin-cleanup.php" );
require_once ( dirname( __FILE__ ) . "/inc/fn-common.php" );
require_once ( dirname( __FILE__ ) . "/inc/theme-options.php" );	


/*=================================================
	Theme Setup
==================================================*/
function convax_setup() {
		require_once ( dirname( __FILE__ ) . '/inc/theme-widgets.php' );
		require_once ( dirname( __FILE__ ) . '/inc/theme-shortcodes.php' );
		require_once ( dirname( __FILE__ ) . '/inc/theme-post-types.php' );

		add_theme_support( 'post-thumbnails' );
		add_action( 'init', 'convax_post_types' );
	}
add_action( 'after_setup_theme', 'convax_setup' );


/*=================================================
	Widget area Setup
==================================================*/
function convax_widgets_init() {
		register_sidebar( array(
		'name' => __( 'Global Sidebar', 'convaxsolutions' ),
		'description' => __( 'The global sidebar', 'convaxsolutions' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
		) );
	}
add_action( 'widgets_init', 'convax_widgets_init' );