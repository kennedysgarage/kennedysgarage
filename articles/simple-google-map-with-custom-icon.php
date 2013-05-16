<?php  $title = 'Simple Google map with custom icon |'; include '../header.php'; ?>

<section id="intro">
<div class="container">
<h2>Articles</h2>
</div><!--/container-->
</section>
<div class="container">
<div class="page">

<article>

<h2>Simple Google map with custom icon</h2>

<p>For whatever reason I could not find a simple Google map with one point with a custom icon. So ventured on and came upon <a href="http://code.google.com/apis/maps/index.html">Google Map API</a>. My first impression was why is there so much information to make a map. After a few hours of reading I found out there is a lot of cool shit you can do with this API, but I still didn't know how to make a simple map. Maybe I missed that page. So after a few more hours of trial and error I think I have it. Please enjoy and ask questions.</p>
<p><img src="/articles/assets/simple-google-map-with-custom-icon/googlemap-460x144.png" /></p>
<h2>What you need:</h2>

<h3>Call the API</h3>
<p>Just add this to the head.</p>
<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot; src=&quot;http://maps.google.com/maps/api/js?sensor=false&quot;&gt;&lt;/script&gt;
</pre>

<h3>Map JavaScript</h3>
<p>I am not going to go into too much detail as Google has covered every possible aspect in their <a href="http://code.google.com/apis/maps/documentation/javascript/basics.html">documentation</a>. Basically what this is doing is calling the coordinates by latitude/longitude and placing an image at that spot. Some things that you might want to change to better fit your needs:</p>
<ul>
  <li>Coordinates (40.779166,-73.962928) - I had a hard time finding a simple method of getting the coordinates. For now <a href="http://itouchmap.com/latlong.html">itouchmap</a> works.</li>
  <li>Zoom (15) - Between 0 (the lowest zoom level, in which the entire world can be seen on one map) to 21  are the set of numbers you can use.</li>
  <li>MarkerImage (img/house.png &amp; img/house_shadow.png) - You change the path or image name.</li>
</ul>

<pre class="prettyprint linenums">
&lt;script type=&quot;text/javascript&quot;&gt;
function initialize() {
var latlng = new google.maps.LatLng(40.779166,-73.962928);
var settings = {
zoom: 15,
center: latlng,
mapTypeControl: false,
mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
navigationControl: true,
navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById(&quot;map_canvas&quot;), settings);
var contentString = &#39;&#39;;
var infowindow = new google.maps.InfoWindow({
content: contentString
});

var companyImage = new google.maps.MarkerImage(&#39;img/house.png&#39;,
new google.maps.Size(100,50),
new google.maps.Point(0,0),
new google.maps.Point(50,50)
);

var companyShadow = new google.maps.MarkerImage(&#39;img/house_shadow.png&#39;,
new google.maps.Size(130,50),
new google.maps.Point(0,0),
new google.maps.Point(65, 50));

var companyPos = new google.maps.LatLng(40.779166,-73.962928);

var companyMarker = new google.maps.Marker({
position: companyPos,
map: map,
icon: companyImage,
shadow: companyShadow,
title:&quot;Kennedy&#39;s Garage&quot;,
zIndex: 3});


google.maps.event.addListener(companyMarker, &#39;click&#39;, function() {
infowindow.open(map,companyMarker);
});
}
&lt;/script&gt;
</pre>

<h3>Call the map</h3>
<p>So now that we have all of this information lets put it to use. Just place this code where you would like the map to be displayed at. This calls the Map JavaScript from above.</p>
<pre class="prettyprint linenums">
&lt;div id=&quot;map_canvas&quot; style=&quot;width:500px; height:300px&quot;&gt;&lt;/div&gt;
</pre>

<h3>Last bit of code</h3>
<p>I have made this last part of code last because that is how it will work on your site. Your JavaScript will load when the website is finished loading...in return display your map.</p>
<pre class="prettyprint linenums">
&lt;body onload=&quot;initialize()&quot;&gt;
</pre>

<h3>Images</h3>
<p>We need a custom icon for our map. I created my own, feel free to use it. There is two parts: icon and shadow. The icon is 50x50 with a bit of transparency and the shadow is 70x50 also with some transparency.</p>
<p><img src="/articles/assets/simple-google-map-with-custom-icon/house.png" />
<img src="/articles/assets/simple-google-map-with-custom-icon/house_shadow.png" /></p>

<h3>Finished</h3>
<p>There you go that is all you really need to have a simple one point location Google map with a custom icon.</p>

<!-- <div class="btns"><a href="/demos/simple-google-map-with-custom-icon/index.php" class="btn">Demo</a> <a href="/downloads/simple-google-map-with-custom-icon/simple-google-map-with-custom-icon.zip" class="btn">Download</a></div> -->

<p class="byline">August 17th, 2010 &there4; Kennedy</p>

</article>

</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>
