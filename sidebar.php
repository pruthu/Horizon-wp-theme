<div id="secondary" role="complementary">
<?php require( dirname( __FILE__ ) . "/inc/theme-options-vars.php" ); ?>
<div class="sidebar">
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

<?php query_posts( array( 'post_type' => 'portfolio_item', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
<?php if(have_posts()): ?>
<aside class="widget widget_recent_posts">
	<h3 class="widget-title">Recent Projects</h3>
	<div id="recent-projects">
	<ul class="recent-project-list">		
	<?php 
	$posts=get_posts('post_type=portfolio_item&showposts=4');
	if ($posts) {
	foreach($posts as $post) {
	setup_postdata($post);
	?>
	<li>
	<a href="#port-<?php echo $post->ID ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="various thumb">
	<?php 
	if(has_post_thumbnail()) {
	the_post_thumbnail('thumbnail');
	} else {
	echo '<img src="'.get_bloginfo("template_url").'/images/default-featured-image.png" width="45" height="45" />';
	}
	?>
	<strong><?php the_title(); ?> </strong>
	<span><?php 
	$terms = get_the_terms( $post->ID, 'portfolio_category' ) ;
	$term_list = array_pop($terms)->name ;
	foreach( $terms as $termname )
	{
	$term_list .= ", " . $termname->name ;
	}
	echo $term_list ;?></span>
	<span><?php the_time('Y'); ?></span>
	</a>
	</li>
	<?php }
	}
	?>
	</ul>
	</div>	
</aside>
<?php endif; ?>
<!-- #recent projects widget -->


<aside class="widget">
	<ul><?php wp_list_bookmarks('title_before=<h3>&title_after=</h1>'  ); ?> </ul>
</aside>
<!-- #bookmarks widget -->
<?php if($convax_twitter !== '' || $convax_youtube !== '' || $convax_facebook !== '' || $convax_linkedin !== '' || $convax_flickr !== ''): ?>
<aside>
	<h3 class="widget-title">Social Networks</h3>
	<ul class="social-networks">
	<?php if($convax_twitter !== ''): ?>
	<li><a href="<?php echo $convax_twitter ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/twitter.png" alt="Twitter"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_youtube !== ''): ?>
	<li><a href="<?php echo $convax_twitter ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/youtube.png" alt="Youtube"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_facebook !== ''): ?>
	<li><a href="<?php echo $convax_facebook ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/facebook.png" alt="Facebook"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_linkedin !== ''): ?>
	<li><a href="<?php echo $convax_linkedin ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/linkedin.png" alt="Linked in"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_flickr !== ''): ?>
	<li><a href="<?php echo $convax_flickr ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/flickr.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_deviantart !== ''): ?>
	<li><a href="<?php echo $convax_deviantart ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/deviantart.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_vimeo !== ''): ?>
	<li><a href="<?php echo $convax_vimeo ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/vimeo.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_forrst !== ''): ?>
	<li><a href="<?php echo $convax_forrst ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/forrst.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_tumblr !== ''): ?>
	<li><a href="<?php echo $convax_tumblr ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/tumblr.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	<?php if($convax_dribbble !== ''): ?>
	<li><a href="<?php echo $convax_dribbble ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/dribbble.png" alt="Flickr"></a>
	</li>
	<?php endif; ?>
	</ul>
</aside>
<?php endif; ?>
<!-- #Social networks widget -->
				
<?php endif; // end sidebar widget area ?>
</div><!-- .sidebar -->
</div><!-- #secondary .widget-area -->