<?php  $title = 'Bring Your Own Magnum |'; include '../header.php'; ?>

<section id="intro">
  <div class="container">
    <h2>Bring Your Own Magnum</h2>
    <a href="http://byom.winespectator.com" class="btn">Visit Site <i class="ss-icon">&#x1F4BB;</i></a>
  </div><!--/container-->
</section><!--/intro-->

<div class="container">
  <div class="page">
    <div class="hero"><span><img src="/projects/assets/bringyourownmagnum/hero.png"/></span></div>
    <div class="content">

      <div class="g3 description">
        <h3>Project Description</h3>
        <p>While working for M. Shanken communications I was put in charge with coming up with the creative for Wine Spectator's annual Bring Your Own Magnum. We create a micro site and a couple of promotional materials. The goal was to create a website that would pull in images from Instagram and Twitter based off the hashtag #WSporsche.</p>
      </div><!--/g3-->
      <div class="g1 role">
        <h3>My Role</h3>
        <ul>
          <li><i class="ss-icon">&#x2713;</i> Designer</li>
        </ul>
      </div><!--/g1-->

      <div class="g4">
        <h3>The Website</h3>
        <p>The website evolved along the way as we found out new requirements and once we received Porsche's Style Guide. For example the white header came along later in the project once we discovered that the Porsche logo had to be on a white background. We used <a href="http://twitter.github.io/bootstrap/index.html">Twitter Bootstrap</a> for the base of the site because it is easier for the developers to work with and the short deadline. Originally we were going to just pull images from Instagram, but we later decided that including images from Twitter would be a great addition. Because of this there was a bunch of different sizes so we use <a href="http://masonry.desandro.com/">Masonry</a> to help build a dynamic grid.</p>
        <img src="/projects/assets/bringyourownmagnum/website.png" class="poppop" title="Make the logo bigger"/>

        <h3>Texture</h3>
        <p>Since this was a promotional website for the brand new 2014 Porsche Cayman and I wanted to add a lot of the texture from the car. I decided that I would focus on the inside as most the of the pictures on the site would be of the outside. I don't want to get into a debate about skeuomorphic, but this was my first of my designs in that direction.</p>
        <img src="/projects/assets/bringyourownmagnum/texture.png">

        <h3>Loading Animation</h3>
        <p>As a finial little touch I wanted to created a custom loading animation. My first thought was either make a gage or a steering wheel, both have moving parts that everyone knows. After looking at the interior of the Porsche for a while the steering wheel really stood out to me. For such a small icon I am very happy that I was able to fit in the details of the wheel, such as the grips, cutouts, and the basic shape of the logo.</p>
        <figure>
          <img src="/projects/assets/bringyourownmagnum/porsche.jpg">
          <figcaption>Image credit Porsche. Photo of a <a href="http://www.porsche.com/usa/models/cayman/cayman/">Porsche Cayman</a> interior that I used for inspiration.</figcaption>
        </figure>
        <p>When I first started to build the animation I debated between just doing it in CSS3 or making a gif in Photoshop. CSS3 would have been the easy way out, but it would not necessary looked the best. I could not have gotten the same rotating results as I did in Photoshop.</p>


      </div><!--/g4-->



    <div class="g2">
      <p>After building the first version I noticed that something looked off. I realized that I was spinning the wheel on the outer axis, but the Porsche steering wheel's center hub is not perfectly centered. I then had to figure out how to transform and rotate the wheel from the center hub. The diagram to the right you can see that the center hub is slightly off center. Check out the gifs below and can see something looks off on the first draft. It helps if you focus your eyes on the center hub to see what I am talking about.</p>
    </div><!--/g2-->
    <div class="g2">
      <img src="/projects/assets/bringyourownmagnum/lines.jpg">
      </div><!--/g2-->

    <div class="g2">
    <h4>First Draft</h4>
    <img src="/projects/assets/bringyourownmagnum/bad.gif">

    </div><!--/g2-->
    <div class="g2">
      <h4>Final</h4>
      <img src="/projects/assets/bringyourownmagnum/good.gif">
    </div><!--/g2--><div class="clear"></div>

    <div class="g4">


      <h3>Promotional Material</h3>
      <p>We ended up only created two promotional material. A 11"x17" board that would be used to display the main information and a 3"x3.5" that looked like a Polaroid with information they could take home.</p>
    </div><!--/g4-->

    <div class="g2">
      <figure>
        <img src="/projects/assets/bringyourownmagnum/card-front.png" class="poppop">
        <figcaption>Front of the  Polaroid sized card</figcaption>
      </figure>
    </div><!--/g2-->
    <div class="g2">
      <figure>
        <img src="/projects/assets/bringyourownmagnum/card-back.png" class="poppop">
        <figcaption>Back of the  Polaroid sized card</figcaption>
      </figure>
    </div><!--/g2-->

    </div><!--/content-->
  </div><!--/page-->
</div><!--/container-->

<?php include("../footer.php"); ?>
