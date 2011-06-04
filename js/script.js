/* Author: 
	google.com/analytics
*/
function googleCode(){
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-17557746-1']);
	_gaq.push(['_setDomainName', '.kennedysgarage.com']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
}
$(document).ready(function() {
	googleCode();
});

/* Author: 
	readability.com
*/
(function() {
    var s     = document.getElementsByTagName('script')[0],
        rdb   = document.createElement('script');
    rdb.type  = 'text/javascript';
    rdb.async = true;
    rdb.src   = document.location.protocol + '//www.readability.com/embed.js';
    s.parentNode.insertBefore(rdb, s);
    })();