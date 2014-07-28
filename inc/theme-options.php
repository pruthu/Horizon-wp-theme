<?php 

$themepath = get_bloginfo('stylesheet_directory')."/images/";
$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type ='page'");
if (0 < $numposts) {$numposts = number_format($numposts);}
$numvalue = ($numposts*100);

// Set Admin Panel Options
$options = array(
	
	array( "type" => "menu", "items" => array( "General","Parallax", "Social Media", "Contact Details" ) ),

	array( "type" => "optionsBody" ),
	array( "type" => "open" ),
	
	array( "name" => "General", "type" => "section" ),
	array( "type" => "open" ),
	
			
	array( "name" => "Logo URL",
	       "desc" => "",
	         "id" => $shortname."_logo",
	       "type" => "upload",
	        "std" => "".$themepath."logo_parallaxr.png" ),
			
	array( "name" => "Copyright Text",
	       "desc" => "",
	         "id" => $shortname."_copyright",
	       "type" => "text",
	        "std" => '&copy; Copyright 2011 ProductiveThemes - All Rights Reserved.' ),
	        
	array( "name" => "Content Area Width",
	       "desc" => "",
	       "id" => $shortname."_contentwidth",
	       "type" => "text",
	       "class" => "validate[custom[onlyNumberSp],maxSize[4],min[580]] small-width",
	       "std" => "584" ),
			
	array( "type" => "close" ),


	array( "name" => "Parallax", "type" => "section" ),
	array( "type" => "open" ),

	array( "name" => "Parallax Element 1",
	       "desc" => "",
	       "id" => $shortname."_bg1",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_1.png" ),

	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem1",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".$numvalue."" ),
	       
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat1",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	       
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos1",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       

	array( "name" => "Parallax Element 2",
	       "desc" => "",
	       "id" => $shortname."_bg2",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_2.png" ),
	       
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem2",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/2)."" ),
	
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat2",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos2",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       
	
	array( "name" => "Parallax Element 3",
	       "desc" => "",
	       "id" => $shortname."_bg3",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_3.png" ),
	       
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem3",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/3)."" ),
	
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat3",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos3",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       
	
	array( "name" => "Parallax Element 4",
	       "desc" => "",
	       "id" => $shortname."_bg4",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_4.png" ),
	       
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem4",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/4)."" ),
	       
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat4",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos4",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       
	       
	array( "name" => "Parallax Element 5",
	       "desc" => "",
	       "id" => $shortname."_bg5",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_5.png" ),
	       
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem5",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/5)."" ),
	       
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat5",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos5",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       
	       
	 array( "name" => "Parallax Element 6",
	       "desc" => "",
	       "id" => $shortname."_bg6",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_6.png" ),
	
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem6",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/6)."" ),
	
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat6",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos6",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),
	       
	
	array( "name" => "Parallax Element 7",
	       "desc" => "",
	       "id" => $shortname."_bg7",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_7.png" ),
	       
	       
	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem7",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/7)."" ),
	       
	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat7",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos7",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),


	array( "name" => "Parallax Element 8",
	       "desc" => "",
	       "id" => $shortname."_bg8",
	       "type" => "upload",
	       "std" => "".$themepath."element_images/elem_8.png" ),
	
	
 	array( "name" => "",
	       "desc" => "Element Speed",
	       "id" => $shortname."_elem8",
	       "type" => "text",
	       "class" => "validate[custom[integer],max[".$numvalue."],maxSize[3]] small-width",
	       "std" => "".round($numvalue/8)."" ),

	array( "name" => "",
		   "desc" => "Image Repeat",
	         "id" => $shortname."_repeat8",
	       "type" => "select",
	    "options" => array( "repeat-x", "repeat", "no-repeat" ),
	      "class" => "small-width",
	        "std" => "repeat-x" ),
	        
	array( "name" => "",
		   "desc" => "Image Position",
	         "id" => $shortname."_pos8",
	       "type" => "select",
	    "options" => array( "top", "center", "bottom" ),
	      "class" => "small-width",
	        "std" => "bottom" ),



	array( "type" => "close" ),
	
	
	
	array( "name" => "Social Media", "type" => "section" ),
	array( "type" => "open" ),
	
	array( "name" => "Twitter Link",
	       "desc" => "Enter the link to your Twitter account.",
	         "id" => $shortname."_twitter",
	       "type" => "url",
	       "req"=>"",
	        "std" => "http://www.twitter.com/gopalraju" ),
	
			
	array( "name" => "Deviant Art Link",
	       "desc" => "Enter the link to your Deviant Art account.",
	         "id" => $shortname."_deviantart",
	       "type" => "url",
	        "std" => "http://gopalraju.deviantart.com" ),
			
			
	array( "name" => "Facebook Link",
	       "desc" => "Enter the link to your Facebook account.",
	         "id" => $shortname."_facebook",
	       "type" => "url",
	        "std" => "http://www.facebook.com/gopalraju" ),
			
	array( "name" => "Flickr Link",
	       "desc" => "Enter the link to your Flickr account.",
	         "id" => $shortname."_flickr",
	       "type" => "url",
	        "std" => "http://www.flickr.com/gopalraju" ),
			
	array( "name" => "Forrst Link",
	       "desc" => "Enter the link to your Forrst account.",
	         "id" => $shortname."_forrst",
	       "type" => "url",
	        "std" => "http://www.forrst.com/people/gopal" ),
						
	array( "name" => "Linkedin Link",
	       "desc" => "Enter the link to your Linkedin account.",
	         "id" => $shortname."_linkedin",
	       "type" => "url",
	        "std" => "http://www.linkedin.com/in/gopalr" ),
	        
	array( "name" => "Dribbble Link",
	       "desc" => "Enter the link to your Dribbble account.",
	         "id" => $shortname."_dribbble",
	       "type" => "url",
	        "std" => "http://www.dribbble.com/gopal" ),
	        
	array( "name" => "Tumblr Link",
	       "desc" => "Enter the link to your Tumblr account.",
	         "id" => $shortname."_tumblr",
	       "type" => "url",
	        "std" => "http://gopalraju.tumblr.com" ),
			
				
	array( "name" => "Vimeo Link",
	       "desc" => "Enter the link to your Vimeo account.",
	         "id" => $shortname."_vimeo",
	       "type" => "url",
	        "std" => "http://www.vimeo.com/gopalraju" ),
	
				
	array( "name" => "Youtube Link",
	       "desc" => "Enter the link to your youtube account.",
	         "id" => $shortname."_youtube",
	       "type" => "url",
	        "std" => "http://www.youtube.com/user/productivedreams" ),
	
	array( "type" => "close" ),
	
	array( "name" => "Contact Details", "type" => "section" ),
	array( "type" => "open" ),


	array( "name" => "Google Map",
	       "desc" => "Enter the link to your Google Map account. If left blank, the google map button will not be shown in the contact page",
	       "id" => $shortname."_googlemap",
	       "type" => "text",
	       "class" => "validate[custom[url]]",
	       "std" => "" ),

	array( "name" => "Email Address",
	       "desc" => "Enter the email to be shown in the contact page.",
	         "id" => $shortname."_contactemail",
	       "type" => "email",
	        "std" => "" ),

	array( "name" => "Phone Number",
	       "desc" => "Enter the phone number to be shown in the contact page.",
	         "id" => $shortname."_phonenumber",
	       "type" => "phone",
	        "std" => "" ),
	        
array( "name" => "Email for Form Submission",
	       "desc" => "This is the email to which the contact page form submission is sent.",
	         "id" => $shortname."_email",
	       "type" => "email",
	        "std" => "" ),

	array( "type" => "close" ),
	
	
	array( "type" => "close" )

);

function convax_add_admin() {
	global $themename, $shortname, $options;
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ] )); 
			}
			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], stripslashes($_REQUEST[ $value['id'] ] ) ); } else { delete_option( $value['id'] ); } 
			}
			header("Location: admin.php?page=theme-options.php&saved=true");
			die;
		} else if( 'reset' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
				delete_option( $value['id'] ); 
			}
			header("Location: admin.php?page=theme-options.php&reset=true");
			die;
		}
	}
	add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'convax_admin');
}

function convax_add_init() {  
	$file_dir = get_bloginfo( 'template_directory' );  
	wp_enqueue_style( "theme-options", $file_dir . "/inc/styles/theme-options.css", false, "1.0", "all" );  

	wp_enqueue_style( 'thickbox' );

	wp_enqueue_script( 'media-upload' );
	wp_enqueue_script( 'thickbox' );
	
	wp_enqueue_script( "theme-validation-js", $file_dir . "/inc/js/jquery.validationEngine-en.js", false, "1.0" );  
	wp_enqueue_script( "theme-validation-en", $file_dir . "/inc/js/jquery.validationEngine.js", false, "1.0" );  
	wp_enqueue_script( "theme-options-js", $file_dir . "/inc/js/theme-options.js", false, "1.0" ); 
 
} 

add_action('admin_init', 'convax_add_init');
add_action('admin_menu', 'convax_add_admin');

function convax_admin() {
	global $themename, $shortname, $options;
	$i=0;
	if ( $_REQUEST['saved'] ) echo '<div id="optionsMessage">'.$themename.' Settings Saved.</div>';
	if ( $_REQUEST['reset'] ) echo '<div id="optionsMessage">'.$themename.' Settings Reseted.</div>';
	?>
	<div class="optionsWrapper">
	
	<script type="text/javascript">
	jQuery(document).ready(function(){  

	
var uploadID = '';

//Media Upload Lightbox
jQuery('.optionsUploadButton').click(function() {
uploadID = jQuery(this).prev('input');
formfield = jQuery(this).prev('.optionsUpload').attr('name');
tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');			
return false;
		
});
	
	
		
window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
uploadID.val(imgurl);
tb_remove();
}
	
});
	</script>	
	
		<form method="post" id="settings-post">
		
		<div class="optionsHeader">
	<a href="http://www.productivethemes.com" class="logo">Productive Themes</a>
    <a href="http://www.productivethemes.com" class="themes"><span>All Themes</span></a>
</div>
			<div class="optionsBar"><p><?php echo $themename; ?> Settings</p><p class="submit"><input name="save" type="submit" class="submit" value="Save Changes" /></p></div>
				<?php foreach ($options as $value) {
					switch ( $value['type'] ) {
						case "open": ?>
							<?php break;
						case "close": ?>
							</div>
							
<!-- ************************************ textfield check ************************************ -->
							<?php break;
						case 'text': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo htmlspecialchars(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" class="<?php echo $value['class']; ?>"/>
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
<!-- ************************************ phone check ************************************ -->
	<?php break;
						case 'phone': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo htmlspecialchars(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" class="validate[<?php echo $value['req']; ?>custom[phone]]" />
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>

<!-- ************************************ url check ************************************ -->
					<?php break;
						case 'url': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo htmlspecialchars(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" class="validate[<?php echo $value['req']; ?>custom[url]]" />
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
							
<!-- ************************************ email check ************************************ -->
					<?php break;
						case 'email': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo htmlspecialchars(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" class="validate[<?php echo $value['req']; ?>custom[email]]" />
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>

																
						<?php break;
						case 'color': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input class="color" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
							<?php break;
						case 'upload': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<input class="optionsUpload validate[<?php echo $value['req']; ?>custom[url]]" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
								<input class="optionsUploadButton button" type="button" value="Upload Image" />
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
							<?php break;
						case 'textarea': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows="" class="<?php echo $value['class']; ?>"><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
							<?php break;
						case 'select': ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" class="<?php echo $value['class']; ?>">
									<?php foreach ($value['options'] as $option) { ?>
										<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
									<?php } ?>
								</select>
								<div class="fieldDesc"><?php echo $value['desc']; ?></div>
								<div class="clear"></div>
							</div>
							<?php break;
						case "checkbox": ?>
							<div class="optionsField">
								<?php if($value['name'] !== ""){?><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label><?php }?>
								<div class="optionsCheckbox">
									<?php if(get_option($value['id']) || ($value['std']=='on')){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
									<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
									<?php echo $value['desc']; ?>
								</div>
								<div class="clear"></div>
							</div>
							<?php break;
						case "section":
							$i++; ?>
							<div class="optionsSection" id="<?php echo str_replace( ' ', '', strtolower( $value['name'] ) ); ?>">
							<?php break;
						case "menu": ?>
							<ul class="optionsMenu">
								<?php foreach ($value['items'] as $item) { ?>
									<li><a href="#<?php echo str_replace( ' ', '', strtolower( $item ) ); ?>" title="<?php echo $item; ?>" class="<?php echo str_replace( ' ', '', strtolower( $item ) ); ?>"><?php echo $item; ?></a></li>
								<?php } ?>
							</ul>
							<?php break;
						case "optionsBody": ?>
							<div class="optionsBody">
							<?php break;
					}
				} ?>
				<input type="hidden" name="action" value="save" />
			</form>
			<div class="clear"></div>
			<form method="post" class="optionsReset">
				<p class="submit">
					<input name="reset" type="submit" value="Reset Fields" />
					<input type="hidden" name="action" value="reset" />
				</p>
			</form>
		</div> 
<?php } ?>