jQuery(document).ready(function(){  

			// binds form submission and fields to the validation engine
			jQuery("#settings-post").validationEngine('attach');
	
	//Remove bottom margin of last field
	jQuery('.optionsSection .optionsField:last-child').css('margin-bottom', '0');
	//Tabs
	jQuery('.optionsMenu a').first().addClass('active');
	jQuery('.optionsSection').hide();
	jQuery('.optionsSection').first().addClass('active').show();
	equalColumns();
	jQuery('.optionsMenu a').click( function() {
			jQuery("#settings-post").validationEngine('hide');

		jQuery('.optionsMenu a').removeClass('active');
		var sectionID = jQuery(this).attr('class');
		jQuery(this).addClass('active');
		jQuery('.optionsSection').hide().removeClass('active');
		jQuery('.optionsSection#' + sectionID).fadeIn().addClass('active');
		equalColumns();
		return false;

	});
	


	
});



function equalColumns() {
	//Set equal height for menu and content
	var highestCol = Math.max(jQuery('.optionsSection.active').height(),jQuery('.optionsMenu').height());
	jQuery('.optionsSection.active, .optionsMenu').height(highestCol);
}