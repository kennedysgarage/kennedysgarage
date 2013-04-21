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

	// http://stackoverflow.com/questions/2898740/iphone-safari-web-app-opens-links-in-new-window
	var a=document.getElementsByTagName("a");
	for(var i=0;i<a.length;i++)
	{
	  a[i].onclick=function()
	  {
	      window.location=this.getAttribute("href");
	      return false
	  }
	}



});
