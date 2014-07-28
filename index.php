<?php
/**
 * The main file.
 *
 * @author Pruthu (pruthu.in)
 * @theme horizon
 */
get_header(); ?>
<?php require( dirname( __FILE__ ) . "/inc/theme-options-vars.php" ); ?>

<?php 
$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type ='page'");
if (0 < $numposts) $numposts = number_format($numposts);
?>

<?php for( $i=1; $i<=($numposts); $i++ )
{
echo '<div class="hw" id="page-'.$i.'">';
} ?>


<?php if($convax_bg1!==''){
echo'
<div class="elem-1">
<div class="elem-1-bg"></div>
</div>';
}
if($convax_bg2!==''){
echo'
<div class="elem-2">
<div class="elem-2-bg"></div>
</div>';
}
if($convax_bg3!==''){
echo'
<div class="elem-3">
<div class="elem-3-bg"></div>
</div>';
}
if($convax_bg4!==''){
echo'
<div class="elem-4">
<div class="elem-4-bg"></div>
</div>';
}
if($convax_bg5!==''){
echo'
<div class="elem-5">
<div class="elem-5-bg"></div>
</div>';
}
if($convax_bg6!==''){
echo'
<div class="elem-6">
<div class="elem-6-bg"></div>
</div>';
}
if($convax_bg7!==''){
echo'
<div class="elem-7">
<div class="elem-7-bg"></div>
</div>';
}
if($convax_bg1!==''){
echo'
<div class="elem-8">
<div class="elem-8-bg"></div>
</div> ';
}
?>

<div class="hw" id="content-inner">
					
<?php 
$pages = get_pages( 'sort_order=asc&sort_column=menu_order&depth=1' );
foreach ( $pages as $pag ) {
setup_postdata( $pag );
$new_title = str_replace( " ", "", strtolower( $pag->post_title ) );
$tempname = get_post_meta( $pag->ID, '_wp_page_template', true );
$filename = preg_replace('"\.php$"', '', $tempname);
echo '<div class="page '.$new_title;
echo '" id="' . $new_title . '"><div class="page-info">';
edit_post_link('edit','','',$pag->ID);
if ( $new_title !== 'home' ) {
echo '<h1>';
echo  $pag->post_title;
$pag->post_title;
echo '</h1>';
}
?>
 
<!-- If Portfolio Page -->			
<?php if($filename == 'page-portfolio'):?>
<?php query_posts( array( 'post_type' => 'portfolio_item', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
<?php if(have_posts()): ?>
<div class="scrollbar1">
<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
<div class="viewport">
<div class="overview">
<div class="rec-proj">
<ul>
<?php while ( have_posts() ) : the_post(); ?>
<li>
<a href="#port-<?php echo $post->ID ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'convaxsolutions' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="various">
<?php 
if(has_post_thumbnail()) {
the_post_thumbnail('thumbnail');
} else {
echo '<img src="'.get_bloginfo("template_url").'/images/default-featured-image.png" class="portfolio-thumb" width="60" height="60"/>';
}
?>
</a>
<?php edit_post_link('Edit'); ?>
</li>
<?php endwhile; ?>
</ul>
</div><!-- / rec proj -->
</div><!-- / .overview -->
</div><!-- / .viewport -->
</div><!-- / .Scrollbar1 --> 
<?php else: ?>
<h1 class="alert">No Projects have been added yet</h1>
<?php endif; ?>


<!-- Else If FAQ Page -->			
<?php elseif($filename == 'page-faq'):?>
<?php query_posts( array( 'post_type' => 'faq', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
<?php if(have_posts()): ?>
<div class="scrollbar1">
<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
<div class="viewport">
<div class="overview" id="faq">
<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title();?></h2>
<?php the_content();?>
<?php edit_post_link('Edit'); ?>
<?php endwhile; ?>
</div><!-- / .overview -->
</div><!-- / .viewport -->
</div><!-- / .Scrollbar1 -->  
<?php else: ?>
<h1 class="alert">No FAQs have been added yet.</h1>
<?php endif; ?>

<!-- Else If Contact Page -->			
<?php elseif($filename == 'page-contact'): ?>
<div class="scrollbar1">
<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
<div class="viewport">
<div class="overview">
<div class="contact-left">
<form id="contactform" method="post" action="<?php bloginfo('stylesheet_directory'); ?>/sendmail.php">
<p><input type="text" placeholder="Name *" id="nameinput" name="name" value="" class="validate[required]"  data-prompt-position="topLeft" ></p>
<p><input type="text"  id="emailinput" placeholder="Email *" name="email" value="" class="validate[required,custom[email]]"></p>
<p class="telephone"><input id="phone" name="phone" class="input validate[custom[phone]]" type="text" placeholder="Phone" />
</p>
<p class="message"><textarea cols="20" rows="7" placeholder="Your Comment *" class="validate[required]"  id="commentinput" name="comment"></textarea>
<input type="hidden" id="receiver" name="receiver" value=" <?php echo $convax_email; ?>"/>
<input type="hidden" id="subject" name="subject" value="Contact form submission from <?php echo bloginfo('name');?>"/>
</p>
<p class="submit-button">
<input type="submit" id="submitinput" name="submit" class="submit-btn more" value="Send"/>
</p>
<div class="successmsg">Successfully Sent!</div>
<div class="loader">Sending...</div>

</form>
</div><!-- / .contact-left -->
<div class="contact-right">
<div class="get-in-touch">
<h3>Get in touch</h3>
<p><a href="mailto:<?php echo $convax_contactemail ?>"><?php echo $convax_contactemail ?></a></p>
<p><?php echo $convax_phonenumber ?></p>
</div><!-- / .Get in touch -->

<?php if($convax_twitter !== '' || $convax_youtube !== '' || $convax_facebook !== '' || $convax_linkedin !== '' || $convax_flickr !== ''): ?>

<div class="follow-us">
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
<li><a href="<?php echo $convax_deviantart ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/deviantart.png" alt="Deviant Art"></a>
</li>
<?php endif; ?>
<?php if($convax_vimeo !== ''): ?>
<li><a href="<?php echo $convax_vimeo ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/vimeo.png" alt="Vimeo"></a>
</li>
<?php endif; ?>
<?php if($convax_forrst !== ''): ?>
<li><a href="<?php echo $convax_forrst ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/forrst.png" alt="Forrst"></a>
</li>
<?php endif; ?>
<?php if($convax_tumblr !== ''): ?>
<li><a href="<?php echo $convax_tumblr ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/tumblr.png" alt="Tumblr"></a>
</li>
<?php endif; ?>
<?php if($convax_dribbble !== ''): ?>
<li><a href="<?php echo $convax_dribbble ?>"><img width="30" height="30" src="<?php bloginfo('template_url'); ?>/images/includes/dribbble.png" alt="Dribbble"></a>
</li>
<?php endif; ?>
</ul>
</div><!-- / .follow us -->

<?php endif; ?>


</div><!-- / .contact-right -->
	
</div><!-- / .overview -->
</div><!-- / .viewport -->
</div><!-- / .Scrollbar1 --> 

<?php if($convax_googlemap !== ''): ?>
<a href="<?php echo $convax_googlemap ?>&amp;output=embed" class="various iframe map-btn"><span>Google map</span></a>
<?php endif; ?>

<?php else: ?>
<div class="scrollbar1">
<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
<div class="viewport">
<div class="overview">
<?php the_content(); ?>
</div><!-- / .overview -->
</div><!-- / .viewport -->
</div><!-- / .Scrollbar1 -->          

<?php endif; ?>
<!-- End If Portfolio-->			

<?php echo '</div></div>';
}
?>
<!-- End foreach -->			

</div>
<!-- / #content-inner -->

<?php for( $i=1; $i<=($numposts); $i++ )
{
echo '</div>';
} ?>
<a class="arrow" href="#"></a>


<?php get_footer(); ?>