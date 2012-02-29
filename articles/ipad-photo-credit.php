<?php  $title = 'iPad Photo Credit |'; include '../header.php'; ?>

<div class="container">
<?php include '../sidebar.php'; ?>
<div id="page">
<div id="content">
<article>

<h2>iPad Photo Credit</h2>

<p><img src="/articles/assets/ipad-photo-credit/ipad-photo-credit.png"/></p>

<p>A quick way to give credit where credit is do on an iPad. This is a quick little jQuery script that will show the photo credit when the image is touched.</p>
<p>In order to get this working just include the following snippets. Make sure you also include the jQuery library too. I have found this to be the best unobtrusive way to give the photographer credit without jeopardizing your design and layout.</p>

<h3>Features</h3>
<ul>
  <li>It was made for the iPad, but it also works in webview</li>
  <li>Works with multiple sized images</li>
  <li>Minimal markup</li>
</ul>

<h4>HTML</h4>
<pre class="prettyprint linenums">
&lt;div class=&quot;imgcredit&quot;&gt;
    &lt;img src=&quot;imagename.jpeg&quot; title=&quot;Give credit where credit is due&quot;/&gt;
&lt;/div&gt;
</pre>

<h4>CSS</h4>
<pre class="prettyprint linenums">
.imgcredit {
    position: relative;
}
.credit {
    background-color: rgba(0,0,0,0.4);
    bottom: 4px; /* depending on the reset, this might have to be adjusted */
    color: #fff;
    display: none;
    left: 0;
    padding: 10px;
    position: absolute;
    width: 100%;
}
</pre>

<h4>jQuery</h4>
<pre class="prettyprint linenums">
// This is so it will work on the iPad (http://www.danwellman.co.uk/fixing-jquery-click-events-for-the-ipad/)
var ua = navigator.userAgent,
event = (ua.match(/iPad/i)) ? &quot;touchstart&quot; : &quot;click&quot;;

// This creates a span that will include the image&#39;s title
    $(&#39;.imgcredit img&#39;).each(function(){
    $(this).after($(&#39;&lt;span/&gt;&#39;)
        .attr(&#39;class&#39;, &#39;credit&#39;)
        .html($(this).attr(&#39;title&#39;))
    );
});

$(&quot;.imgcredit img&quot;).bind(event, function(e) { // this would normally be &quot;$(&quot;.imgcredit img&quot;).click( function() {&quot;, but we have to alter it for the ipad.
    var img_width = 0; // setting the default of the variable to 0
    var caption_width = 0; // setting the default of the variable to 0
    img_width += $(this).width() ; // this measures the width of the image
    caption_width += $(this).width() -20; // this measures the width of the span then minus 20px for the padding
    $(this).parent().width(img_width); // this measures the width of the span then minus 20px for the padding
    $(this).next().width(caption_width); // include the width to the caption
    $(this).next().slideToggle(); // show/hide the credit
});
</pre>

<h3>Note:</h3>
<p>My kickass mobile developer friend <a href="http://twitter.com/rjowens">Rich Owens</a> told me to add this note in here: In order for JavaScript to work you need to remove ".js" from "compiled source" and add them to "bundled files" in Xcode. (Source: <a href="http://stackoverflow.com/questions/843820/iphone-uiwebview-local-resources-using-javascript-and-handling-onorientationchang">http://stackoverflow.com/questions/843820/iphone-uiwebview-local-resources-using-javascript-and-handling-onorientationchang</a>)</p>

<!-- <div class="btns"><a href="../demos/ipad-photo-credit/index.php" class="btn">Demo</a> <a href="/downloads/ipad-photo-credit.zip" class="btn">Download</a></div> -->

<p class="byline">June 7th, 2011 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>