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

	// http://stackoverflow.com/questions/8884376/iphone-safari-web-app-opens-links-in-new-window-when-using-javascripthistory-go
	(function (a, b, c) {
    if (c in b && b[c]) {
        var d, e = a.location,
            f = /^(a|html)$/i;
        a.addEventListener("click", function (a) {
            d = a.target;
            while (!f.test(d.nodeName)) d = d.parentNode;
            "href" in d && (d.href.indexOf("http") || ~d.href.indexOf(e.host)) && (a.preventDefault(), e.href = d.href);
        }, !1);
    }
	})(document, window.navigator, "standalone");

});
