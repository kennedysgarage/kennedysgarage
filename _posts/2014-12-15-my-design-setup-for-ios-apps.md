---
layout: article
permalink: /articles/my-design-setup-for-ios-apps/
title: My design setup for iOS apps
excerpt: I am starting to build an app that will work on iPhone 6 and 6 Plus. As these have new sizes I reevaluated my design workflow.
tags:
- ios
- setup
comments: true
---

<p>My goal is to document <a href="/articles/my-workflow-for-ios-apps/">my workflow for iOS apps</a>. <mark>Part 1 is to have a better understanding of where we should start when building iOS apps.</mark></p>

<p>I am starting to build an app that will work on iPhone 6 and 6 Plus. As these have new sizes I reevaluated my design workflow. I quickly came to the conclusion that not much has changed for me. The major difference is the dimension of my mock's width and height. I am no longer using the 5S as that measurement, but rather the 6.</p>

<h3>Screen sizes</h3>
<p>To wrap my head around the new sizes I wrote out all the math first. This also helped with trying to figure out the the screens all related to each other.</p>

<h4>5, 5S, 5C</h4>
<p>@1x (320x568) - Reduce to this size for the base<br/>
@2x (640x1136) - Default<br/>
@3x (960x1704) - Not applicable</p>

<h4>6</h4>
<p>@1x (375x667) - Reduce to this size for the base<br/>
@2x (750x1334) - Default<br/>
@3x (1125x2001) - Not applicable</p>

<h4>6 Plus</h4>
<p>@1x (414X736) - Reduce to this size for the base<br/>
@2x (818x1472) - Irrelevant<br/>
@3x (1242x2208) - Default</p>

<div class="row">
<div class="col-6">

<figure>
<img src="/assets/posts/my-design-setup-for-ios-apps/size.png"/>
<figcaption>All Screens at @1x.</figcaption>
</figure>

</div><!--/col-->
<div class="col-6">

<figure>
<img src="/assets/posts/my-design-setup-for-ios-apps/screens.png"/>
<figcaption>Screenshots at @1x on top of each other.</figcaption>
</figure>

</div><!--/col-->
</div><!--/row-->

<h3>Artbaord Size</h3>
<p>I use <a href="http://bohemiancoding.com/sketch/">Sketch</a> for most of the designs. It is an amazing vector based tool that works great for designing mobile mocks for both iOS and Android.</p>
<p>The artboard size should be @1x with a width of 375px. The height is a bit irrelevant, but to keep it simple, I use a height of 667px. This is basically the 6 at @1x. The reason our designers work in @1x is because of how we prepare assets for our developers. The main reason is that assets hold their value when scaling up.</p>

<h3>Exporting</h3>
<p>Becasue we are using Sketch exporting at @2x and @3x is simple a couple clicks away.</p>

<h3>Q&amp;A</h3>

<p><strong>Q</strong>: Can’t I start at @2x and scale up to @3x?<br/>
<strong>A</strong>: Mathematically it is possible, but in the pixel perfect design world it is not. For example let’s say you are working with the iPhone 6 that is @2x, so 750x1334 * 1.5 = 1125x2001. Yes, you did come up with the answer for @3x and the math does makes sense. The reason why this doesn’t work is because there is not such thing as half pixel. This will cause your assets to be blurry.</p>

<p><strong>Q</strong>: Can't I scale up from @2x to @3x by scaling down first?<br/>
<strong>A</strong>: For example let’s say you are working with an iPhone 6, so it’s @2x at 750x1334. You are going to have to cut that in half so it’s @1x, 750x1334 / 2 = 375x667. Then take that number and times it by three so it’s @3x, 375x667 * 3 = 1125x2001. You can clearly see that is not the best way to go. It will also lead to blurry assets.</p>

<p><strong>Q</strong>: Should I be worried by the downsampling (1.15) on iPhone 6 Plus or is there anything I should do?<br/>
<strong>A</strong>: Short answer is no. The phone will take care of that part. Just worry about designing at @1x and scale up to @3x. On that same note, don’t worry about the iPhone 6 Display Zoom Upsampling (1.171875) or the iPhone 6 Plus Display Zoom Downsampling (0.96).</p>


<h3>Resources</h3>
<ul>
  <li><a href="http://www.paintcodeapp.com/news/iphone-6-screens-demystified">iPhone 6 Screens Demystified</a></li>
  <li><a href="http://www.paintcodeapp.com/news/ultimate-guide-to-iphone-resolutions">The Ultimate Guide To iPhone Resolutions</a></li>
  <li><a href="http://bjango.com/articles/appdesignworkflow/">Bjango - My app design workflow</a></li>
  <li><a href="http://ivomynttinen.com/blog/the-ios-7-design-cheat-sheet/">The iOS Design Cheat Sheet</a></li>
  <li><a href="http://click-labs.com/ios-8-design-cheat-sheet-and-free-iphone6plus-gui-psd/">iOS 8 Design Cheat Sheet for iPhone 6 and iPhone 6 Plus</a></li>
  <li><a href="http://taybenlor.com/2013/05/21/designing-for-ios.html">Starter's Guide to iOS Design</a></li>
</ul>
