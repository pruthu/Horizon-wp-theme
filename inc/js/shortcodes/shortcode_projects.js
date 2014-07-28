(function() {
	tinymce.create('tinymce.plugins.projects', {
		init : function(ed, url) {
		
			ed.addButton('projects', {  
            title : 'Insert Projects',  
            image : url+'/projects.png',  
            onclick : function() {
            
            
            		
			var width = jQuery(window).width(), H = jQuery(window).height(), W = ( 720 < width ) ? 720 : width;
						W = W - 80;
						H = H - 84;
						tb_show( 'Twitter Feed Shortcode', '#TB_inline?width=' + W + '&height=' + H + '&inlineId=shortcodes-twitter-form' );


           
            }  
       		});  
			
			
		},
		createControl : function(n, cm) {
			return null;
		}
		
			});
	tinymce.PluginManager.add('projects', tinymce.plugins.projects);
	
	
	
	jQuery(function(){
		var form = jQuery('\
			<div id="shortcodes-twitter-form">\
				<div id="shortcodes-twitter-container" class="shortcodes-container">\
					<div class="left">\
						<label for="convax_projects_number">Number of Projects</label>\
						<input type="text" id="convax_projects_number" placeholder="6" name="convax_projects_number" value="" />\
						<small>Enter the number of projects to be shown.</small><br/>\
						<label for="convax_projects_title">Section Title</label>\
						<input type="text" id="convax_projects_title" placeholder="Recent Projects" name="convax_projects_number" value="" />\
						<small>Enter the title for this section.</small>\
					</div>\
					<div class="right">\
						<label for="convax_order_by">Order by</label>\
						<select id="convax_order_by" name="convax_order_by" style="height:30px;">\
							<option value="date">Recent</option>\
							<option value="rand">Random</option>\
						</select>\
						<small>Select how the projects should be arranged.</small>\
					</div>\
					<div class="clear"></div>\
					<div class="full">\
						<p class="submit">\
							<input type="button" id="shortcodes-twitter-submit" class="button-primary" value="Insert Shortcode" name="submit" />\
						</p>\
		</div></div></div>');
		
		var table = form.find('#shortcodes-twitter-container');
		form.appendTo('body').hide();
		
		form.find('#shortcodes-twitter-submit').click(function(){
		
		
			var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
			
			
			var order =table.find( '#convax_order_by').val();
			var limit =table.find( '#convax_projects_number').val();
			var title =table.find( '#convax_projects_title').val();
			var numlimit = numberRegex.exec(limit);


if (  numlimit!='undefined' && numlimit!=null	){		
		
			var shortcode = '[projects ';
			shortcode += 'orderby="' + order + '" title ="'+ title + '" limit ="' + numlimit[0] + '"';
			shortcode += ']';
			
			}
else{
alert("Enter the number of Projects to be shown");
}			

			tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
			
			tb_remove();
		});
	});

	
	
            
			
	
	
	
	
	
	
})();