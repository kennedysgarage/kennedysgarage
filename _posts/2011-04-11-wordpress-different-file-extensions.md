---
layout: article
permalink: /articles/wordpress-different-file-extensions
title: WordPress different file extensions
excerpt: For what ever reason I had a difficult time find this solution. It seemed like most of the articles where out of date. Please let me know if you need any help. Just add this to your functions.php in your theme directory.
hero:
---

<p>For what ever reason I had a difficult time find this solution. It seemed like most of the articles where out of date. Please let me know if you need any help. Just add this to your functions.php in your theme directory.</p>
<h4>Upload .eps</h4>

{% highlight php %}
add_filter(&#39;upload_mimes&#39;, &#39;custom_upload_mimes&#39;);
function custom_upload_mimes ( $existing_mimes=array() ) {
$existing_mimes[&#39;eps&#39;] = &#39;application/postscript, application/eps, application/x-eps, image/eps, image/x-eps&#39;;
return $existing_mimes;
}
{% endhighlight %}

<p>I found this solution from <a href="http://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes">Plugin API/Filter Reference/upload mimes</a> &amp; <a href="http://reference.wolfram.com/mathematica/ref/format/EPS.html">Wolfram .eps</a></p>
