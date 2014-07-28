<?php
/** Social Networks Widget*/
class widget_social_network extends WP_Widget {
function widget_social_network() {
$widget_ops = array('classname' => 'social_networks_widget', 'description' => __('Link to your social networks.'));
$this->WP_Widget('social_networks', __('Social Networks'), $widget_ops, $control_ops);
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters('widget_title', $instance['title']);
$socialnetwork['Twitter'] = $instance['twitter'];
$socialnetwork['Facebook'] = $instance['facebook'];
$socialnetwork['LinkedIn'] = $instance['linkedin'];
$socialnetwork['Flickr'] = $instance['flickr'];
$socialnetwork['Dribbble'] = $instance['dribbble'];
$socialnetwork['YouTube'] = $instance['youtube'];
$socialnetwork['Vimeo'] = $instance['vimeo'];
$socialnetwork['Forrst'] = $instance['forrst'];
$socialnetwork['Tumblr'] = $instance['tumblr'];
$socialnetwork['DeviantArt'] = $instance['deviantart'];

echo $before_widget;

if ($title !== ''){
echo $before_title;
echo($title); 
echo $after_title;
}

?>

<ul class="social-networks">
<?php foreach(array("Twitter", "Facebook", "LinkedIn", "Flickr", "YouTube", "Dribbble", "Vimeo", "Forrst", "Tumblr","DeviantArt") as $network) : ?>
<?php if (!empty($socialnetwork[$network])) : ?><li>
<a rel="external" href="<?= $socialnetwork[$network] ?>">
<img src="<?php bloginfo('template_directory'); ?>/images/includes/<?php echo strtolower($network);?>.png" width="30" height="30" >
<?php echo $network; ?>
</a></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>
<?php
echo $after_widget;
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['twitter'] = $new_instance['twitter'];
$instance['facebook'] = $new_instance['facebook'];
$instance['linkedin'] = $new_instance['linkedin'];
$instance['flickr'] = $new_instance['flickr'];
$instance['youtube'] = $new_instance['youtube'];
$instance['dribbble'] = $new_instance['dribbble'];
$instance['vimeo'] = $new_instance['vimeo'];
$instance['forrst'] = $new_instance['forrst'];
$instance['tumblr'] = $new_instance['tumblr'];
$instance['deviantart'] = $new_instance['deviantart'];
return $instance;
}
function form( $instance ) {
$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '') );
$title = strip_tags($instance['title']);
$twitter = $instance['twitter'];		
$facebook = $instance['facebook'];		
$linkedin = $instance['linkedin'];		
$flickr = $instance['flickr'];		
$youtube = $instance['youtube'];	
$dribbble = $instance['dribbble'];		
$vimeo = $instance['vimeo'];
$forrst = $instance['forrst'];	
$tumblr = $instance['tumblr'];
$deviant = $instance['deviantart'];																
$text = format_to_edit($instance['text']);
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('dribbble'); ?>"><?php _e('Dribbble URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" type="text" value="<?php echo esc_attr($dribbble); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo esc_attr($vimeo); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('forrst'); ?>"><?php _e('Forrst URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('forrst'); ?>" name="<?php echo $this->get_field_name('forrst'); ?>" type="text" value="<?php echo esc_attr($forrst); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e('Tumblr URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>" /></p>
<p><label for="<?php echo $this->get_field_id('deviant'); ?>"><?php _e('Deviant Art URL:'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('deviantart'); ?>" name="<?php echo $this->get_field_name('deviantart'); ?>" type="text" value="<?php echo esc_attr($deviant); ?>" /></p>
<?php
}
}
register_widget('widget_social_network');



/** Recent Posts Widget */
class widget_recent_posts extends WP_Widget {
    function widget_recent_posts() {
        parent::WP_Widget(false, $name = 'Recent Projects');	
    }
    function widget($args, $instance) {	
        extract( $args );
		global $posttypes;
        $title 			= apply_filters('widget_title', $instance['title']);
        $numb 		= apply_filters('widget_title', $instance['number']);
        $thumb 		= $instance['thumbnail'];
        $posttype 		= $instance['posttype'];
        ?>
<?php echo $before_widget; ?>
<?php if ( $title !=="" ){
echo $before_title . $title . $after_title;}
else{
echo $before_title . 'Recent Projects' . $after_title;
}
 ?>
<div id="recent-projects">
<ul class="<?php echo $posttype.'-widget'?> recent-project-list" id="recent-projects">
<?php
global $post;
$tmp_post = $post;
$args = 'numberposts=' . $numb . '&post_type=' . $posttype;
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<li>
<a href="#port-<?php echo $post->ID ?>" class="various 
<?php if($thumb == true) echo 'thumb' ?>
">
<?php if($thumb == true) { ?>
<?php 
if(has_post_thumbnail()) {
the_post_thumbnail('thumbnail');
} else {
echo '<img src="'.get_bloginfo("template_url").'/images/default-featured-image.png" width="45" height="45" />';
}
?>
<?php } ?>
<strong><?php the_title(); ?></strong>
<span><?php 
	$terms = get_the_terms( $post->ID, 'portfolio_category' ) ;
	$term_list = array_pop($terms)->name ;
	foreach( $terms as $termname )
	{
	$term_list .= ", " . $termname->name ;
	}
	echo $term_list ;?></span>
<span class="time">
<?php the_time('Y'); ?>
</span>
</a>
</li>
<?php endforeach; ?>
<?php $post = $tmp_post; ?>
</ul>
</div>
<?php echo $after_widget; ?>
<?php
}
function update($new_instance, $old_instance) {		
global $posttypes;
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['number'] = strip_tags($new_instance['number']);
$instance['thumbnail'] = $new_instance['thumbnail'];
$instance['posttype'] = $new_instance['posttype'];
return $instance;
}

function form($instance) {	
$posttypes = get_post_types('', 'objects');
$title = esc_attr($instance['title']);
$numb = esc_attr($instance['number']);
$thumb = esc_attr($instance['thumbnail']);
$posttype	= esc_attr($instance['posttype']);
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id('posttype'); ?>"><?php _e('Post Type to show'); ?></label> 
<select name="<?php echo $this->get_field_name('posttype'); ?>" id="<?php echo $this->get_field_id('posttype'); ?>" class="widefat">
<?php foreach($posttypes as $option) : ?>
<?php if ($option->name !=='revision' && $option->name !=='attachment' && $option->name !=='post' && $option->name !=='nav_menu_item' && $option->name !=='page') : ?>
<?php	echo '<option value="' . $option->name . '" id="' . $option->name . '"', $posttype == $option->name ? ' selected="selected"' : '', '>', $option->name, '</option>'; ?>
<?php endif; ?>
<?php endforeach; ?>
</select></p>
<p>
<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of items:'); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $numb; ?>" />
</p>
<p>
<input id="<?php echo $this->get_field_id('thumbnail'); ?>" name="<?php echo $this->get_field_name('thumbnail'); ?>" type="checkbox" value="1" <?php checked( '1', $thumb ); ?>/>
<label for="<?php echo $this->get_field_id('thumbnail'); ?>"><?php _e('Display thumbnails?'); ?></label> 
</p>		
<?php 
}
} 
register_widget('widget_recent_posts');


?>