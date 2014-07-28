<?php
/*=================================================
	Remove Comments div from edit pages column
==================================================*/
function custom_pages_columns($defaults) {
		unset($defaults['comments']);
		return $defaults;
	}
add_filter('manage_pages_columns', 'custom_pages_columns');


/*=================================================
	Remove unused menus from admin bar
==================================================*/
function wps_admin_bar() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('search');
	    $wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('about');
	    $wp_admin_bar->remove_menu('wporg');
	    $wp_admin_bar->remove_menu('documentation');
	    $wp_admin_bar->remove_menu('support-forums');
	    $wp_admin_bar->remove_menu('feedback');
	    $wp_admin_bar->remove_menu('view-site');
	    $wp_admin_bar->remove_menu('new-post');
	    $wp_admin_bar->remove_menu('new-media');
		$wp_admin_bar->remove_menu('new-link');
		$wp_admin_bar->remove_menu('comments');
		$wp_admin_bar->remove_menu('menus');
	}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );


/*=================================================
	Remove unused menus from admin panel
==================================================*/
function remove_menus () {
		global $menu;
		$restricted = array(__('Posts'), __('Media'), __('Comments'));
		end ($menu);
		while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
	}
add_action('admin_menu', 'remove_menus');


/*=================================================
	Remove unused sub menus from admin panel
==================================================*/
function remove_sub_menus () {
		remove_submenu_page( 'options-general.php', 'options-discussion.php' );
		remove_submenu_page( 'options-general.php', 'options-reading.php' );
		remove_submenu_page( 'options-general.php', 'options-writing.php' );
		remove_submenu_page( 'options-general.php', 'options-permalink.php' );
		remove_submenu_page( 'themes.php', 'nav-menus.php' );
		remove_submenu_page( 'themes.php', 'theme-editor.php' );
	}
add_action('admin_init','remove_sub_menus');	


/*=================================================
	Remove unused default widgets from admin panel
==================================================*/
function unregister_default_wp_widgets() {
		unregister_widget('WP_Widget_Pages');
		unregister_widget('WP_Widget_Calendar');
		unregister_widget('WP_Widget_Archives');
		unregister_widget('WP_Widget_Meta');
		unregister_widget('WP_Widget_Search');
		unregister_widget('WP_Widget_Categories');
		unregister_widget('WP_Widget_Recent_Posts');
		unregister_widget('WP_Widget_Recent_Comments');
		unregister_widget('WP_Widget_RSS');
		unregister_widget('WP_Widget_Tag_Cloud');
		unregister_widget('WP_Nav_Menu_Widget');
	}
add_action('widgets_init', 'unregister_default_wp_widgets', 1);


/*=================================================
	Set maximum number of pages to 8
==================================================*/
function max_pages( $new_status, $old_status, $post ) {
		$max = 8;
		global $user_ID, $wpdb;
		$num_posts = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(ID) FROM $wpdb->posts WHERE post_author='%s' AND post_status = 'publish' AND post_type ='page'", $user_ID ));
		if( $num_posts > $max ){wp_die( __( "This is a single page site and Adding more than " . $max . " could break the structure, and you have created a total of " . $num_posts . " pages" ) );}
	}
add_action("transition_post_status","max_pages",10,3);

?>