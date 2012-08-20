//@codekit-prepend "plugins.js";

$(document).ready(function(){

	// http://web.enavu.com/tutorials/client-side-filtering-data-with-jquery/
	$('#filters a').click(function(e){
		e.preventDefault();
		var filter = $(this).attr('id');
		$('#filter-results ul li').show();
		$('#filter-results ul li:not(.' + filter + ')').hide();
		e.preventDefault();
	});
	$('#all').click(function(e){
		e.preventDefault();
		var filter = $(this).attr('id');
		$('#filter-results ul li').show();
	});

});
