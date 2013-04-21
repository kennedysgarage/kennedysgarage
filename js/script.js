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

	// http://www.mobilejoomla.com/forum/5-bug-reports/692-solvedwebapp-leads-to-safari.html
	var iWebkit;
if (!iWebkit) {
    iWebkit = window.onload = function () {
        function fullscreen() {
            var a = document.getElementsByTagName("a");
            for (var i = 0; i < a.length; i++) {
                if (a[i].className.match("noeffect")) {} else {
                    a[i].onclick = function () {
                        window.location = this.getAttribute("href");
                        return false
                    }
                }
            }
        }
        function hideURLbar() {
            window.scrollTo(0, 0.9)
        }
        iWebkit.init = function () {
            fullscreen();
            hideURLbar()
        };
        iWebkit.init()
    }
}

});
