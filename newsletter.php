<?php  $title = 'Newsletter | '; include 'header.php'; ?>

  <section id="intro">
    <div class="container">
      <h2>Newsletter</h2>
    </div><!--/container-->
  </section>
  <div class="container">
    <div class="page">
      <div class="content">
        <div class="g4">
          <p>What to say up-to-date with my life?</p>
        </div><!--/g4-->
        <div class="g1_5">
          <h4>Life</h4>
        </div><!--/g1_5-->
        <div class="g1_5">
          <h4>Work</h4>
        </div><!--/g1_5-->
        <div class="g1_5">
          <h4>Events</h4>
        </div><!--/g1_5-->

        <div class="g4">
          <h3>Subscribe Now</h3>
          <form action="http://kennedysgarage.createsend.com/t/r/s/jkouiu/" method="post" id="subForm">
            <ul>
              <li><label for="name">Name:</label><br /><input type="text" name="cm-name" id="name" /></li>
              <li><label for="jkouiu-jkouiu">Email:</label><br /><input type="text" name="cm-jkouiu-jkouiu" id="jkouiu-jkouiu" /></li>
              <li><input type="checkbox" name="cm-ol-jkoukr" id="Life" /><label for="Life">Life</label></li>
              <li><input type="checkbox" name="cm-ol-jkoukd" id="Work" /><label for="Work">Work</label></li>
              <li><input type="checkbox" name="cm-ol-jkouhk" id="Events" /><label for="Events">Events</label></li>
              <li><input type="submit" value="Subscribe" class="btn"/></li>
            </ul>
          </form>
        </div><!--/g4-->

      </div><!--/content-->
    </div><!--/page-->
  </div><!--/container-->

<?php include("footer.php"); ?>
