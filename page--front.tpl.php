

<!--====== UNIVERSITY HEADER ======-->
<div class="uofr-header">
  <div class="container">
    <!-- UofR Container -->
    <div class="uofr-logo-container">
      <a href="#">
        <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/logo-uofr.png" />
      </a>
    </div>
    <!-- Ever Better Container -->
    <div class="everbetter-container">
        <img class="navbar-brand-everbetter" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/everbetter.png" />
    </div>
  </div>
</div>


<header id="navbar" role="banner" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- LHP Logo -->
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="lhp-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/lhp-logo.png" />
      </a>
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Nav links -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://catalog.lib.rochester.edu/vwebv/myAccount">Home</a></li>
        <li><a href="http://www.library.rochester.edu/contact-us">About Project</a></li>
        <!-- Nav Search box -->
          <form class="navbar-form navbar-left" name="sitesearch" action="http://www.library.rochester.edu/site-search" method="get">
            <div class="form-group">
              <input class="form-control navbar-search-grow" type="text" name="search"  placeholder="Search" title="Seach the Library website">
              </div>
          </form>
          <!-- <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button> -->
        </form>
        </li>
      </ul>
    </div>
  </div>
</header>



<!-- Cover Image -->
<div class="cover-container">
    <img class="cover" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/cover.jpg" />
    <div class="container">
      <div class="tagline">
        The oral history interviews that preserve the memories of our alumni, faculty, and staff from 1904 to the present are the foundation of the University of Rochester’s Living History Project. Recordings of other events – some filled with pomp and circumstance, others noisy and spontaneous – also preserve University history as it was lived, adding to our understanding of time, place, and memory.
      </div>
    </div>
</div>


<!-- 4 Boxes  -->
<div class="box box-odd">
  <img class="box-images" alt="Living HistoryProject" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/lhp.jpg" />
  <div class="box-text">
    <div class="box-headline">Living History Project</div>
    <div class="box-tagline">Oral History Interviews</div>
  </div>
</div>

<div class="box box-even">
  <img class="box-images" alt="Performances" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/performances2.jpg" />
  <div class="box-text">
    <div class="box-headline">Performances</div>
    <div class="box-tagline">Theater, Music</div>
  </div>
</div>

<div class="box box-odd">
  <img class="box-images" alt="Events" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/events.jpg" />
  <div class="box-text">
    <div class="box-headline">Events</div>
    <div class="box-tagline">Dedications, Convocations</div>
  </div>
</div>

<div class="box box-even">
  <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/spoken-word.jpg" />
  <div class="box-text">
    <div class="box-headline">Spoken Word</div>
    <div class="box-tagline">Lectures, Readings</div>
  </div>
</div>
<!--/-->

<!--====== FOOTER ======-->
<div class="footer">
    <div class="container">
      <!-- Right Side of Footer -->
        <div class="footer-right">
          <div class="address">
            <p>
              Rare Books Special Collections Preservation <br>
              Rush Rhees Library <br>
              Second Floor, Room 225 <br>
              755 Library Road <br>
              University of Rochester	<br>
              Rochester, NY 14627-0055 <br>
            </p>
            <p>
              Phone: (585) 275-4477 <br>
              Fax: (585) 273-1032 <br>
              <a href="mailto:rarebks@library.rochester.edu">rarebks@library.rochester.edu</a>
            </p>
          </div>
        </div>

      <!-- Left Side of Footer -->
      <div class="footer-left">
        <!-- <div class="social-icons">
          <a href="https://www.facebook.com/rivercampuslibraries"><i class="fa fa-facebook-square"></i></a>
          <a href="https://twitter.com/rclibraries"><i class="fa fa-twitter-square"></i></a>
          <a href="https://www.youtube.com/user/RCLibraries"><i class="fa fa-youtube-square"></i></a>
          <a href="https://www-flickr-com.pc181.lib.rochester.edu/photos/carlsonlibrary/"><i class="fa fa-flickr"></i></a>
        </div> -->
        <!-- Copyright  -->
        <div class="copyright">Copyright © 1998-2015. All Rights Reserved.<br>
          University of Rochester | River Campus Libraries <br>
          Rare Books, Special Collections and Preservation
        </div>
        <div class="footer-links">
          <?php print render($page['footer']); ?>
        </div>
      </div>




</div>


<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/nav.js'; ?>"></script>
