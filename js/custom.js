$(document).ready(function () {

/*=================================================
	Contact Form Settings
==================================================*/

$('body').click(function(){  
$('#contactform').validationEngine('hideAll');
$('#contactform .successmsg').fadeOut('slow');
});

$("#contactform").validationEngine('attach',{scroll:false, autoPositionUpdate:true});

$("#submitinput").click( function(event) {
event.stopPropagation();   
event.preventDefault();
if (($("#contactform").validationEngine('validate')) == true) {
$("#contactform .loader").fadeIn();
$.ajax({
type: $("#contactform").attr('method'),
url: $("#contactform").attr('action'),
data: $("#contactform").serialize(),
success: function(data) {
$("#contactform .loader").fadeOut('fast');
$("#contactform .successmsg").fadeIn('slow');
}
});
}			
});


/*=================================================
	Widget Area Settings
==================================================*/

//Accordian open/close settings
$('#secondary aside h3').next().hide();
$('#secondary aside h3:first').addClass('active').next().show();
		
$('#secondary aside h3').click(function(){
if( $(this).next().is(':hidden') ) {
$('#secondary aside h3').removeClass('active').next().slideUp();
$(this).toggleClass('active').next().slideDown();
}
else{
$('#secondary aside h3').removeClass('active').next().slideUp();
}
return false;
});

// Arrow Toggle
$('.arrow').toggle(
function()
{
$('.sidebar').fadeIn();
$('#secondary').animate({
width: "290px"
}, 500);
$(this).animate({right:'290px'},500);
$(this).addClass('collapse');
},
function()
{
$('.sidebar').fadeOut();
$('#secondary').animate({
width: "10px"
}, 500);  
$(this).animate({right:'10px'},500);
$(this).removeClass('collapse');
});
		
		
/*=================================================
	Initialize Custom Scrollbar
==================================================*/

$('.scrollbar1').tinyscrollbar();

		
/*=================================================
	Add active class to Top Navigation
==================================================*/

$('#nav li a').click(function(){
$('#nav li').removeClass('active');
$(this).parent().addClass('active');
});

		
/*=================================================
	Fancybox Popup Settings
==================================================*/
		
$(".various").fancybox({
'titlePosition'	:	'inside',
'transitionIn'	:	'fade',
'transitionOut'	:	'fade',
'speedIn'		:	600, 
'speedOut'		:	100, 				
'easingIn'		:	'swing',
'easingOut'		:	'swing',
'width'			:	'90%',
'height'		:	'90%'
});	
			
			
/*=================================================
	Fallback for HTML5 Placeholder
==================================================*/

if(!Modernizr.input.placeholder) {
$("input[placeholder], textarea[placeholder]").each(function() {
var placeholder = $(this).attr("placeholder");
$(this).val(placeholder).focus(function() {
if($(this).val() == placeholder) {
$(this).val("")
}
}).blur(function() {
if($(this).val() == "") {
$(this).val(placeholder)
}
});
});
}

});