

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
        Oral history interviews intended to preserve University of Rochester history have been conducted since at least the 1960s. The various divisions of the University--the College, the Medical Center, the Eastman School of Music, the Memorial Art Gallery--have each created recordings.
      </div>
    </div>
</div>


<!-- 4 Boxes  -->
<div class="box">
  <img class="box-images" alt="Living HistoryProject" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/performances.jpg" />
</div>

<div class="box">
  <img class="box-images" alt="Performances" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/performances.jpg" />
</div>


<div class="box">
  <img class="box-images" alt="Events" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/events.jpg" />
</div>

<div class="box">
  <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'living_history');?>/images/spoken-word.jpg" />
</div>
<!--/-->

<!--====== Footer ======-->
<div class="footer">
  Footer
</div>


<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'rcl_drupal_theme') . '/js/nav.js'; ?>"></script>
