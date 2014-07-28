<?php
/**
 * The Header for our theme.
 *
 * @author Pruthu (pruthu.in)
 * @theme horizon
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="position:relative;">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php echo " | ".bloginfo('name').get_bloginfo('description'); ?></title>
<link href="http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans:600" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" media="all"/><![endif]-->

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/inc/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/inc/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-1.7.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tinyscrollbar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>

<?php require( dirname( __FILE__ ) . "/inc/theme-options-vars.php" ); ?>

<style rel="stylesheet">
<?php 
$numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type ='page'");
if (0 < $numposts) $numposts = number_format($numposts);
?>

<?php 
for( $i=1; $i<=($numposts); $i++ )
{
echo '#page-'.$i.':target .elem-1 {
margin-left:-'.round($convax_elem1*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-2 {
margin-left:-'.round($convax_elem2*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-3 {
margin-left:-'.round($convax_elem3*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-4 {
margin-left:-'.round($convax_elem4*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-5 {
margin-left:-'.round($convax_elem5*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-6 {
margin-left:-'.round($convax_elem6*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-7 {
margin-left:-'.round($convax_elem7*($i-1)/$numposts).'%; 
}
#page-'.$i.':target .elem-8 {
margin-left:-'.round($convax_elem8*($i-1)/$numposts).'%; 
}
#page-'.$i.':target #content-inner {
margin-left:-'.round(($i-1)*100).'%;
}
';
} 

echo '#content-inner {
width:'.($numposts*100).'%;
height: 100%;
}

.page {
width:'.(floor((100/$numposts)*100)/100).'%;
height: 100%;
float: left;
position:relative; overflow:hidden; zoom:1;
}

.elem-1,.elem-2,.elem-3,.elem-4,.elem-5,.elem-6,.elem-7,.elem-8{
width:'.($numposts*100).'%;
}';

if($convax_bg1!==''){
echo '.elem-1-bg{
background-image:url('.$convax_bg1.');
background-position:left '.$convax_pos1.';
background-repeat:'.$convax_repeat1.';
}';
}


if($convax_bg2!==''){
echo '.elem-2-bg{
background-image:url('.$convax_bg2.');
background-position:left '.$convax_pos2.';
background-repeat:'.$convax_repeat2.';

}';
}

if($convax_bg3!==''){
echo '.elem-3-bg{
background-image:url('.$convax_bg3.');
background-position:left '.$convax_pos3.';
background-repeat:'.$convax_repeat3.';

}';
}

if($convax_bg4!==''){
echo '.elem-4-bg{
background-image:url('.$convax_bg4.');
background-position:left '.$convax_pos4.';
background-repeat:'.$convax_repeat4.';

}';
}

if($convax_bg5!==''){
echo '.elem-5-bg{
background-image:url('.$convax_bg5.');
background-position:left '.$convax_pos5.';
background-repeat:'.$convax_repeat5.';

}';
}

if($convax_bg6!==''){
echo '.elem-6-bg{
background-image:url('.$convax_bg6.');
background-position:left '.$convax_pos6.';
background-repeat:'.$convax_repeat6.';

}';
}

if($convax_bg7!==''){
echo '.elem-7-bg{
background-image:url('.$convax_bg7.');
background-position:left '.$convax_pos7.';
background-repeat:'.$convax_repeat7.';

}';
}

if($convax_bg8!==''){
echo '.elem-8-bg{
background-image:url('.$convax_bg8.');
background-position:left '.$convax_pos8.';
background-repeat:'.$convax_repeat8.';

}';
}

echo '
.page-info{width:'.$convax_contentwidth.'px;
margin-left:-'.preg_replace('/( *)/', '', (($convax_contentwidth+116)/2)).'px;
}
';
?>
</style>

<script>
$(document).ready(function () {
	
if (!Modernizr.csstransitions) {
<?php echo '      
$(".elem-1, .elem-2, .elem-3, .elem-4, .elem-5, .elem-6, .elem-7, .elem-8").css("width","'.($numposts*100).'%");'
?>	
	
<?php		
for( $j=1; $j<=($numposts); $j++ )
{
echo '$("#button'.$j.' a").click(function(){
$("#page-'.$j.' #content-inner").animate({marginLeft:"-'.round(($j-1)*100).'%"}, 1000);
$("#page-'.$j.' .elem-1").animate({marginLeft:"-'.round($convax_elem1*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-2").animate({marginLeft:"-'.round($convax_elem2*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-3").animate({marginLeft:"-'.round($convax_elem3*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-4").animate({marginLeft:"-'.round($convax_elem4*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-5").animate({marginLeft:"-'.round($convax_elem5*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-6").animate({marginLeft:"-'.round($convax_elem6*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-7").animate({marginLeft:"-'.round($convax_elem7*($j-1)/$numposts).'%"}, 1000);
$("#page-'.$j.' .elem-8").animate({marginLeft:"-'.round($convax_elem8*($j-1)/$numposts).'%"}, 1000);
});'; 
}
?>
}
		
});
</script>

<?php wp_head();?>
</head>
<body>

<div id="header-wrapper">
	<header id="header-main">
    	<h1 class="logo"><a href="#page-1" title="<?php bloginfo( 'name' ); ?>">
    	<?php if($convax_logo !== ""){ ?>
    	<img src="<?php echo $convax_logo;?>" alt="<?php bloginfo( 'description' ); ?>"/>
    	<?php } else {?>
    	<?php bloginfo( 'name' ); ?>
    	<span><?php bloginfo( 'description' ); ?></span>
    	<?php }?>
    	</a></h1>
<nav>
<ul id="nav">
	<?php 
	$pages = get_pages( 'sort_order=asc&sort_column=menu_order&depth=1' );
	$count = 0;
	foreach ($pages as $pag){
	$count++;
	$new_title = str_replace( " ", "", strtolower($pag->post_name));
	echo '<li id="button'.$count.'"><a href="#page-'.$count.'" title="'.$pag->post_title.'">'.$pag->post_title.'</a></li>';
	}?>
</ul>
</nav>
    </header><!-- / Header Main -->
</div><!-- / #Header Wrapper -->  