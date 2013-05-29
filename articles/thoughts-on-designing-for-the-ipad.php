<?php  $title = 'Thoughts on designing for the iPad |'; include '../header.php'; ?>

<section id="intro"><div class="container"><h2>Articles</h2></div></section>

<div class="container">
<div class="page">

<article>

<h2>Thoughts on designing for the iPad</h2>

<p>I recently had the opportunity to design for the iPad and I thought I would share what I have learned so far.</p>

<h4>Think Touch not Click</h4>
<p>One of the hardest things to grasp in the beginning was that I was no longer designing for the mouse. You have to rethink the meaning of headers, sidebars, navigation, footers &amp; links. You will also have to start thinking of touching, swiping, constraints, portrait &#038; landscape modes. My initial thought was that this was going to be easy as I already knew how to design and I am pretty familiar with media queries. After a few mockups I realized that I was still designing for the web.</p>

<h4>Size &amp; Dimensions</h4>

<p>The size of the iPad viewing area is 768&#215;1024 (portrait) and 1024&#215;768 (landscape). This doesn&#8217;t necessarily mean that this is the size of your design area. When I was mocking up a few designs in Photoshop and then transferring them over to the web I noticed that I was always about 20px off. Finally I figured out that the <a href="http://developer.apple.com/library/ios/#documentation/UserExperience/Conceptual/MobileHIG/UIElementGuidelines/UIElementGuidelines.html">status bar</a> has a height of 20px. So that means we are designing for 748&#215;1024 / 1004&#215;768. Granted this is only if you want everything to be visible in full screen. If you are designing for the browsers then go ahead and remove some more pixels for the browser header.</p>


<p>Another important size is 44&#215;44. According to the iPad Guidelines it is important to <a href="http://developer.apple.com/library/ios/#documentation/UserExperience/Conceptual/MobileHIG/UIElementGuidelines/UIElementGuidelines.html">maintain a hit target area of at least 44&#215;44</a>. Keep this number in mind when adding links of any kind to your site. I also should mention that your icon does not have to be 44&#215;44. You could have an icon of 32&#215;32 and give it padding of 12&#215;12. This way it will equal to 44&#215;44.</p>

<h4>HTML / CSS</h4>
<p>It is kinda of funny that you have to alter the way you think when writing the code as well. I was still trying to wrap my page in a fixed container. I know, I know the iPad is already a fixed container. The new way I approached it was to focus on two parts: the header and the content. The header I tried to keep consistent with the other apps by giving it a height of 44px. For the content I tried to think of how it would look in portrait and look uniform in landscape. I figured the easiest way would be to keep a 3 column layout in portrait and 4 column in landscape. Now all that was left was doing the math to keep this idea realistic and make it look natural. This was easier said then done.</p>

<h4>Code Snippets</h4>
<p>Here are some useful code snippets I found along the way.</p>

<h6><a href="http://www.amirnaor.com/?p=71">Enabling Startup Image for an iPad Web Application</a></h6>
<pre><code  class="prettyprint">
&lt;link rel=&quot;apple-touch-startup-image&quot; href=&quot;/startup.png&quot;&gt;
</code></pre>

<h6>iPad Media Queries</h6>
<pre><code  class="prettyprint">
@media screen and (orientation:portrait) {
}

@media screen and (orientation:landscape) {
}
</code></pre>

<h6>Application icon</h6>
<pre><code  class="prettyprint">
&lt;link rel=&quot;apple-touch-icon&quot; href=&quot;/icon-72x72.png&quot; /&gt;
</code></pre>

<p>These are my current thoughts and I am sure these will evolve as I go along. As of now I really enjoy designing for the iPad. I realize that there are other tablet devices out there and a lot of these figures will not work on those. As of I am of now I am just going to focus on the iPad. After I get a solid foundation I will start to branch out. Eventually I would like to design for all tablets.</p>

<h4>Resources</h4>
<p>Here are some great resources that have helped me along the way. </p>

<ul>
  <li><a href="http://developer.apple.com/library/ios/#documentation/UserExperience/Conceptual/MobileHIG/Introduction/Introduction.html#//apple_ref/doc/uid/TP40009446-CH6-SW27">iOS Human Interface Guidelines</a></li>
  <li><a href="http://www.cloudfour.com/ipad-css/">iPad Orientation CSS</a></li>
  <li><a href="http://matthewjamestaylor.com/blog/ipad-layout-with-landscape-portrait-modes">iPad CSS Layout with landscape / portrait orientation modes</a></li>
  <li><a href="http://www.whatcreative.co.uk/blog/tips/designing-for-touch-screen/">Designing for Touch Screen</a></li>
  <li><a href="http://www.lukew.com/ff/entry.asp?1071">Touch Gesture Reference Guide</a></li>
</ul>
<p class="byline">February 4th, 2011 &there4; Kennedy</p>

</article>

</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>
