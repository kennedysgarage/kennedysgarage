<?php  $title = 'Responsive Design, the ugly |'; include '../header.php'; ?>

<div id="page">
<div id="content">
<article>

<h2>Responsive Design, the ugly</h2>

<p>It seems lately that everyone is talking about responsive design and few people are actually trying to implement it. After much research, a few attempts, and some heated, yet passionate, discussions I have come to the conclusion that some of it should never leave your local host. Don't get me wrong, I love pushing the limits, but I also think it is important to keep the end user in mind.</p>

<p>When I was younger, I always wondered why large websites were so shitty. I promised myself that if I got the opportunity to redesign a huge site, it would be the latest and greatest thing. My first crack at this was working at MLB.com. Now granted it was not a redesign, but I did fight for what I believed in. Because of that I was one of the first front-end developers to introduce HTML5/CSS3 to the site.</p>

<p>I now work for M. Shanken Communications where I have many opportunities to help lead the digital front. I work for an awesome boss and have an amazing team. We are all on the same level and we want to create the best products that we can. Now is my chance, now I can make a difference, now I can uphold the promised I made to the younger me. I think somewhere along the line, my ideas of what was the "latest and greatest thing" for our users was crossed with what was the "latest and greatest thing" in front-end development. </p>

<h3>Mobile First</h3>

<p>Mobile first is the thought that you design for the simplest browser first, which in many cases is mobile. For the most part this makes a lot sense. For older phones that don't support media quires, they will be shown the mobile version by default. As you know IE doesn't support MQ either, but that's ok we have <a href="https://github.com/scottjehl/Respond">respond.js</a> to make it understand.</p>

<p>Now let toss in a fact to further our reason on why we should use mobile first. According to Marry Meeker "Within the next five years more users will connect to the Internet over mobile devices than desktop PCs." That's great, except as of now that is five years away. A lot has changed in the past five years, shit even in the past five months a lot changed. But what about the users of 2012?</p>

<p>Unfortunately for me I have a very large group of IE 6,7,8 users that I have to think about and a very small group of mobile users. So maybe I am just bitter, but I'm honestly not that upset. I still have outside projects where I can get my fix. I need to build for my users first, which is desktop. You might be asking, why don't you just use repsond.js. I tried, trust me, but  I don't want to put all my eegs in one basket. If I can't trust my users to use a modern browsers, what makes you think I can trust them to have JavaScript enabled. Have you seen what a mobile version of your site looks like using IE, it's a joke.</p>

<h3>Percentage Based Layouts</h3>

<p>I can no longer accept that percentage based layout are realistic for large websites. The main reason for this is pixels and percentages don't mix. I don't want to go too off topic, but one of the main ways websites make money is off advertising. How does a 300x250 pixel banner work into percentages? It doesn't, look at Boston Globe. They cut off a part of the ad. I wonder how the advertisers feel about this, or even if they are aware of it.</p>

<img src="/articles/assets/responsive-design-the-ugly/ad.png"/>

<p>Yeah, I know there is some simple math you can do to convert a pixel width into a percentage based width, but it doesn't solve much. Let's be honest the only people that grab the corner of their browser and drag to resize is us developers. </p>

<p>There is also the problem that some browsers take your beautiful math and round it. Funny thing is that we are not pointing fingers at IE this time, Chrome and Opera are to blame this time. Steffan Williams has a great article that shows <a href="http://steff.me/journal/fluid-inconsistencies/">how each browser behaves in a percentage based grid</a>. Another thing is percentage based layout is nothing new, also these browser issues are old too. John Resig wrote about it back in 2008 <a href="http://ejohn.org/blog/sub-pixel-problems-in-css/">Sub-Pixel Problems in CSS.</a></p>

<h3>The Bottom Line</h3>

<p>Let's keep graceful degradation in mind and always build the best possible version we can. I know this rant seemed to trash responsive design, but there is a lot of great things out there right now that are enhancements. Take a look at what <a href="http://chriscoyier.net/">Chris Coyier</a> and <a href="http://paravelinc.com/">Paravel</a> have accomplished for flexible videos with <a href="http://fitvidsjs.com/">FitVid</a>. There are many more amazing things out there that I am currently testing and using on our projects.</p>

<p>I think it is great to experiment and try all these techniques out. I also think you need to be aware of your surroundings. I am very excited to see what tomorrow will bring, but you have to be realistic of what today has to offer.</p>

<p>Users can be a pain in our ass, but I love them all equally. It is up to all of us to provide a usable site first. Part of our job is education, if we want to push the limits with all that HMTL5/CSS3 has to offer, we need to inform them on what the latest browsers have to offer.</p>

<p>At the end of the day, the users comes first.</p>

<p class="byline">January 1st, 2012 &there4; Kennedy</p>

</article>
</div><!--/content-->
</div><!--/page-->

<?php include("../footer.php"); ?>