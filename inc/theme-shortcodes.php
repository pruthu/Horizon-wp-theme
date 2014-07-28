<?php
/*=================================================
	Projects Shortcode 
==================================================*/

function project_shortcode( $atts ) {  

extract( shortcode_atts( array(  
'limit' => '6',  
'orderby' => 'date', 
'title' => 'Recent Projects', 
), $atts ) ); 
 
$loop = new WP_Query(array('post_type' => 'portfolio_item', 'posts_per_page' => $limit, 'orderby' => $orderby)); 

// first if
if($loop && $loop->have_posts()){  
$output .= '<div class="rec-proj"> <h3><span>'.$title.'</span></h3><ul class="rec-proj-list">';

// first while
while ($loop->have_posts()){  
$loop->the_post(); 
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
$url = $thumb['0']; 

$output .= '<li><a class="various" href="#port-'.$loop->post->ID.'">';

if(has_post_thumbnail()) {
$output .= '<img src="'.$url.'"/>';
} 
else {
$output .= '<img src="'.get_bloginfo("template_url").'/images/default-featured-image.png" width="84" height="84" /></a>';
}

$output .= '</a>';

if ( is_user_logged_in() ) {  
$output .= '<a href="'.get_edit_post_link( $loop->ID ).'" class="post-edit-link">Edit</a>';	
}

$output .= '</li>';
				
}
// first while
  
$output .= '</ul></div>';
}  
// End first if


else{
$output = 'Sorry, No projects yet. Come back Soon.';  
}

return $output;  
}   
    
add_shortcode('projects','project_shortcode');


/*=================================================
	Adding Shortcode Buttons to TinyMCE 
==================================================*/

function add_button() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_your_tinymce_plugin");
     add_filter('mce_buttons', 'register_button');
   }
}
 
function register_button($buttons) {
   array_push($buttons, "|", "projects");
   return $buttons;
}
 
function add_your_tinymce_plugin($plugin_array) {
   $plugin_array['projects'] = get_bloginfo('template_url').'/inc/js/shortcodes/shortcode_projects.js';
   return $plugin_array;
}
 

add_action('init', 'add_button');
?>