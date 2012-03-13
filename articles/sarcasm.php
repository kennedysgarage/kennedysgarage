<?php  $title = 'CSS for Sarcasm |'; include '../header.php'; ?>

<div id="page">
<div id="content">
<article>
	
<h2>CSS for Sarcasm</h2>
<p>Communication on the internet is great, but sometimes it is hard to get your tone across. Ever since <a href="https://twitter.com/#!/gf3">@gf3</a> proposed it to the <a href="https://twitter.com/#!/w3c">@W3C</a> I wanted a way to do it.</p>

<blockquote class="twitter-tweet tw-align-center"><p>Proposed HTML 5 tag: &lt;sarcasm&gt;. To help clear up some online misunderstandings. (@<a href="https://twitter.com/w3c">w3c</a> am I right?)</p>&mdash; Gianni Chiappetta (@gf3) <a href="https://twitter.com/gf3/status/2025825142" data-datetime="2009-06-04T04:37:41+00:00">June 4, 2009</a></blockquote>

<blockquote class="twitter-tweet tw-align-center"><p>@<a href="https://twitter.com/gf3">gf3</a>, &lt;sarcasm&gt;you are right&lt;/sarcasm&gt;</p>&mdash; W3C Team (@w3c) <a href="https://twitter.com/w3c/status/2027402192" data-datetime="2009-06-04T08:41:11+00:00">June 4, 2009</a></blockquote>

<p>Today I am suggesting some CSS to help clear this up. This morning I woke up and thought of the solution, why don't we just use Backslant or "Contra Italics". Just add the following to your stylesheet and feel free to use when needed.</p>

<h3>The CSS:</h3>
<pre class="prettyprint linenums">
.sarcasm {
	display:inline-block;
	-moz-transform: scale(1) rotate(0deg) translate(0px, 0px) skew(15deg, 0deg);
	-webkit-transform: scale(1) rotate(0deg) translate(0px, 0px) skew(15deg, 0deg);
	-o-transform: scale(1) rotate(0deg) translate(0px, 0px) skew(15deg, 0deg);
	-ms-transform: scale(1) rotate(0deg) translate(0px, 0px) skew(15deg, 0deg);
	transform: scale(1) rotate(0deg) translate(0px, 0px) skew(15deg, 0deg);
}
</pre>

<h3>Example:</h3>
<p>Sarcasm is the ability to <span class="sarcasm">insult idiots</span> without them realizing it.</p>
<pre class="prettyprint linenums">
&lt;span class=&quot;sarcasm&quot;&gt;insult idiots&lt;/span&gt;
</pre>

<p>Please join the conversation on <a href="http://news.ycombinator.com/item?id=3699121">Hacker News</a>.</p>

<p class="byline">March 13th, 2011 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->

<script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php include("../footer.php"); ?>