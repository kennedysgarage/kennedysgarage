<?php  $title = 'Image Replacement |'; include '../header.php'; ?>

<div class="container">
<?php include '../sidebar.php'; ?>
<div id="page">
<div id="content">
<article>

<h2>Image Replacement</h2>

<p>Image replacement always seems to be up to debate. Today I am going to show you how I do it and some of the reasoning behind why. Let dive right into it:</p>
<pre class="prettyprint linenums">
&lt;style type=&quot;text/css&quot;&gt;
#logo{
    display: inline;
    overflow: hidden;
}
#logo img{
    display: block;
    float: left;
    height: 50px;
    position: relative;
    width: 250px;
    z-index: 1;
}
#logo span{
    display: block;
    position: absolute;
    z-index: 0;
}
&lt;/style&gt;

&lt;h1 id=&quot;logo&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;logo.png&quot;/&gt;&lt;span&gt;Kennedy&#39;s Garage&lt;/span&gt;&lt;/a&gt;&lt;/h1&gt;
</pre>

<p>Lets start where I started: <a href="http://www.w3.org/">W3C</a>. Whenever I want to know something more about HTML &amp; CSS I head over to W3C. Now granted they don't have tutorials on how to do something like this, but they do have a source code to view. I can only imagine that who ever built the site know their stuff. So after reviewing their code I decided to use it as my foundation. The only major difference between the two is how the image is being called.</p>
<p>The main reason why I like this method is that if the user has images disabled the text will still be their. Unlike the -999px method, where the text is no where in sight. Now the flip side to that is what if the user has the CSS disabled. Well, it will show both the image and text. Which brings me to a strange question, who browses with CSS turned off? If they are browsing with the CSS disabled, wouldn't they have images disabled to? Anyways I hope this helps.</p>				

<p class="byline">October 24th, 2011 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>