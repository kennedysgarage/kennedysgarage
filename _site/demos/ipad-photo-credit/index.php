<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Kennedy's Garage | Demo | iPad Photo Credit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../demo.css">
</head>
<body>
<div id="header"><a href="../../article/ipad-photo-credit.html" class="button">&laquo; Back to Article</a><a href="../../index.html"><img src="../img/demo.png" id="logo"/></a><a href="../../demos.html" class="button">More Demos &raquo;</a></div>

<!--\\\\\\\\\\\   Start DEMO   ///////////-->

	<style>
	#content {width: 400px;margin: 0 auto;padding-top: 100px;}
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
	</style>
	
	<div id="content">
	
		<div class="imgcredit">
		    <img src="img.png" title="Give credit where credit is due"/>
		</div>
		
	</div><!--/content-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
	<script>
		// This is so it will work on the iPad (http://www.danwellman.co.uk/fixing-jquery-click-events-for-the-ipad/)
		var ua = navigator.userAgent,
		    event = (ua.match(/iPad/i)) ? "touchstart" : "click";
		
		// This creates a span that will include the image's title
		$('.imgcredit img').each(function(){
			$(this).after($('<span/>')
				.attr('class', 'credit')
				.html($(this).attr('title'))
			);
		});
		$(".imgcredit img").bind(event, function(e) { // this would normally be "$(".imgcredit img").click( function() {", but we have to alter it for the ipad.
				var img_width = 0; // setting the default of the variable to 0
				var caption_width = 0; // setting the default of the variable to 0
				img_width += $(this).width() ; // this measures the width of the image
				caption_width += $(this).width() -20; // this measures the width of the span then minus 20px for the padding
			$(this).parent().width(img_width); // this measures the width of the span then minus 20px for the padding
			$(this).next().width(caption_width); // include the width to the caption
			$(this).next().slideToggle(); // show/hide the credit
		});
	</script>

<!--///////////   End DEMO   \\\\\\\\\\\-->

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-17557746-1']);
_gaq.push(['_setDomainName', '.kennedysgarage.com']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>