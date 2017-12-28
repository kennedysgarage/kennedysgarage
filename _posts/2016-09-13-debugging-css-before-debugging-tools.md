---
layout: post
permalink: /blog/debugging-css-before-debugging-tools/
title: Debugging CSS Before Debugging Tools
author: Kennedy
description: Firebug changed my front-end development career, thanks Joe Hewitt for creating it. Before Firebug was around there wasn't much for debugging your code. I remember years ago working on an e-commerce website and having to print out all the code, on physical paper, so I could like match up all the divs.
image: /assets/posts/debugging-css-before-debugging-tools/hero.png
tags:
- history
comments: true
---



<div class="hero">{% asset posts/debugging-css-before-debugging-tools/hero.png %}</div>

<p><a href="http://getfirebug.com/">Firebug</a> changed my front-end development career, thanks <a href="https://twitter.com/joehewitt">Joe Hewitt</a> for creating it. Before Firebug was around there wasn't much for debugging your code. I remember years ago working on an e-commerce website and having to print out all the code, on physical paper, so I could like match up all the divs. Keep in mind we were using <a href="https://notepad-plus-plus.org/">Notepad ++</a> back then and there wasn't really any other good options. One of the tricks that we did was highlighting the elements with wildcards. You also have to remember we didn't have much for standards back then, shit inline CSS was still acceptable. This saved me more time than I can count.</p>

<h3>Visualize HTML Elements</h3>
<!-- https://jekyllrb.com/docs/templates/ -->
{% highlight css %}
* { outline: 2px dotted red }
* * { outline: 2px dotted green }
* * * { outline: 1px solid blue }
* * * * { outline: 1px solid purple }
* * * * * { outline: 1px solid red }
* * * * * * { outline: 2px dotted green }
* * * * * * * { outline: 2px dotted blue }
* * * * * * * * { outline: 2px dotted purple }
{% endhighlight %}

<p>All you had to do is include the code snippet above into your CSS. Save, refresh, and start debugging.</p>

<p>Oh yeah, do you remember those crazy huge dropdown menus we used back in the day. Those were a complete pain in the ass. This was good for that too. Before we had SCSS, our CSS used to look like this.</p>

{% highlight css %}
.mainnav ul li ul li ul li ul li a{
}
{% endhighlight %}

<h3>Examples from the wild</h3>
<p>I spent the last 30 minutes trying to find old sites that had poorly written HTML and it was shockly harder than I thought. Here a few, not so great, examples.</p>
<figure>
{% asset posts/debugging-css-before-debugging-tools/kennedysgarage.png %}
<figcaption>My home page</figcaption>
</figure>
<figure>
{% asset posts/debugging-css-before-debugging-tools/dribbble.png %}
<figcaption>dribbble.com/about</figcaption>
</figure>

<h3>Codepen Example</h3>
<p>Here it is in full effect.</p>
<p data-height="265" data-theme-id="0" data-slug-hash="LRGvxL" data-default-tab="css,result" data-user="kennedysgarage" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/kennedysgarage/pen/LRGvxL/">Visualize structure of HTML</a> by Kennedy (<a href="http://codepen.io/kennedysgarage">@kennedysgarage</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
