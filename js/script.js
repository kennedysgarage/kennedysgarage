/*
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

/*
	disqus.com
*/
var disqus_shortname = 'kennedysgarage';

// The following are highly recommended additional parameters. Remove the slashes in front to use.
// var disqus_identifier = 'unique_dynamic_id_1234';
// var disqus_url = 'http://example.com/permalink-to-page.html';

/* * * DON'T EDIT BELOW THIS LINE * * */
(function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();