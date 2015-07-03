---
layout: post
permalink: /articles/ppi-and-dpi-is-irrelevant/
title: PPI &amp; DPI is Irrelevant
excerpt: PPI &amp; DPI is irrelevant when designing iPhone and iPad apps. Let me repeat that, PPI &amp; DPI do not matter. No, stop it. It does not matter if it is @1x or @2x, iPhone or iPad, it's just irrelevant metadata.
comments: false
---

<p>PPI &amp; DPI is irrelevant when designing iPhone and iPad apps. Let me repeat that, PPI &amp; DPI do not matter. No, stop it. It does not matter if it is @1x or @2x, iPhone or iPad, it's just irrelevant metadata.</p>
<p>Recently I spend the greater part of my day explaining why this was. I figured I would try to explain it to you too as I often read about how important it is in tutorials that talk about designing apps. In all fairness, it is important when it comes to print, but this is not print. Let's first talk about what DPI &amp; PPI are.</p>
<dl>
	<dt>DPI = Dots per inch</dt>
	<dd>DPI is the number of individual dots that can be placed in a line within the span of 1 inch. We are talking about ink here folks.  I should not have to elaborate much more on this term as it has only deals with print.</dd>
	<dt>PPI = Pixels per inch</dt>
	<dd>PPI is the measurement of the resolution of a device. Meaning the size of the display in inches and the total number of horizontal and vertical pixels. For instance, a 100×100 pixel image that is printed in a 1-inch square has a resolution of 100 pixels per inch.</dd>
</dl>
<p>So what does matter? Pixel dimensions. It doesn't matter if you work in 1 PPI or 1,000,000 PPI it is all just worthless metadata for us app developers. 300px x 300px is going to be 300px x 300px on screen no matter what the PPI is.</p>
<p>Once we were all on the same page about how images for print where not the same as images for apps, the next question popped in our head. "What should the PPI be if it doesn't matter". My smart mouth would have said "it doesn't matter", but I resisted. I look at this from a few angles. Most of the images and icons you find online are going to be 72 PPI. When you save for web in Photoshop, it saves it at 72 PPI. Well, I can only really think of two at this time.</p>
<p>One of the print people brought up the fact if it doesn't matter then why don't we just use 300 PPI, that way we can print for promotional items and whatnots. At first I agreed, but then I thought, if I don't find vector for everything, I am going to have to find at least 300 PPI. I would not want to hand over a file with a mix of 72 &amp; 300 PPI over to the print side as there would be a mix of blurry images when it printed. So we decided to keep digital as digital and print as print. Meaning I will continue to work at 72 PPI. At the end of the day it doesn't really matter for us that build apps. Just try to keep your work consistent.</p>
<p>Another topic that I wont get into right now is scaling vector images when building @1x &amp; @2x. Some people use PPI to scale their work in Photoshop. This technique is not 100% perfect, I would rather hand craft each image. Duplicating or reducing it in half is not the solution. </p>
<h4>Some other great material on this topic.</h4>
<ul>
	<li><a href="http://bjango.com/articles/ppiisatag/">Pixels per inch is just a tag</a></li>
	<li><a href="http://www.planetquark.com/2012/03/14/132-ppi-72-dpi-264-ppi-what-image-resolution-should-you-use-the-for-new-ipad/">132 ppi? 72 dpi? 264 ppi? What image resolution should you use for the new iPad?</a></li>
	<li><a href="http://www.webdesignerdepot.com/2010/02/the-myth-of-dpi/">The Myth of DPI</a></li>
	<li><a href="http://blog.fotolibra.com/?p=309">Why DPI Does Matter</a></li>
</ul>
