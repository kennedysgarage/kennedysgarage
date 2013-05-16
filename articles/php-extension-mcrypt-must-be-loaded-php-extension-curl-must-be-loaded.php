<?php  $title = 'PHP Extension "mcrypt" must be loaded PHP Extension "curl" must be loaded |'; include '../header.php'; ?>

<section id="intro">
<div class="container">
<h2>Articles</h2>
</div><!--/container-->
</section>
<div class="container">
<div class="page">

<article>

<h2>PHP Extension "mcrypt" must be loaded <br/>PHP Extension "curl" must be loaded</h2>

<p>I ran into this little problem after watching <a title="Easy E-Commerce With Magento" href="http://net.tutsplus.com/videos/screencasts/easy-e-commerce-with-magento/">Easy E-Commerce With Magento</a> tut over at <a title="NetTuts" href="http://net.tutsplus.com">NetTuts</a>.</p>
<p>I received this error during the installation process: PHP Extension "mcrypt" must be loaded &amp; PHP Extension "curl" must be loaded.</p>
<p><img src="/articles/assets/php-extension-mcrypt-must-be-loaded-php-extension-curl-must-be-loaded/6.png"/></p>
<p>If you are tiring to install Magento on your localhost with WAMP here is the solution.</p>

<ol>
  <li>Left click on the WAMP icon in notification area.</li>
  <li>Go to PHP</li>
  <li>Click php.ini</li>
  <p><img src="/articles/assets/php-extension-mcrypt-must-be-loaded-php-extension-curl-must-be-loaded/1.png"/></p>
  <li>Search for <code>mcrypt</code> in this document.</li>
  <p><img src="/articles/assets/php-extension-mcrypt-must-be-loaded-php-extension-curl-must-be-loaded/2.png"/></p>
  <li>You should be looking for <code>;extension=php_mcrypt.dll</code></li>
  <li>You need to uncomment that line of code, so remove the semicolon in front of it.</li>
  <li>Next search for <code>curl</code> in this document. You should be looking for <code>;extension=php_curl.dll</code></li>
  <li>You need to uncomment that line of code as well.</li>
  <p><img src="/articles/assets/php-extension-mcrypt-must-be-loaded-php-extension-curl-must-be-loaded/7.png" /></p>
  <li>Save and close this document.</li>
  <li>Restart wamp</li>
  <li>Refresh the Magento installation page.</li>
</ol>

<p class="byline">July 7th, 2010 &there4; Kennedy</p>

</article>

</div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>
