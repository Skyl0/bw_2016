<?php
/**
 * The main template file
 */

get_header();
?>
<div id="header">
  <div id="top">
    <div class="wrapper">
      <div id="logo">
        <img src="<? echo get_template_directory_uri() ?>/assets/images/logo100px.png" alt="alt logo"/>
      </div>
      <div class="mainnav">
        <nav>
          <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
      </div>
      <div class="social">
        <!-- TODO -->
      </div>
    </div>
  </div>
  <div class="floatb">
    <div class="wrapper">
      <div class="floatingbox">
        <!-- excluded <h1>the_title('');</h1> -->
        <div class="main-content">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              the_content();
            }
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="main">
  <div class="wrapper">
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-camera-retro" aria-hidden="false"></i>Galerie</h1>
        <p>Zur Galerie</p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-user" aria-hidden="false"></i>Über mich</h1>
        <p>Und es war ihnen wie eine Bestätigung ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die
          Tochter als erste sich erhob
          und ihren jungen Körper dehnte.</p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-wrench" aria-hidden="false"></i>Workshops</h1>
        <p>Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren.Jemand musste Josef K.
          verleumdet haben, denn
          ohne dass er etwas Böses getan hätte, wurde </p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-shopping-cart" aria-hidden="false"></i>Shop</h1>
        <p>Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren.Jemand musste Josef K.
          verleumdet haben, denn
          ohne dass er etwas Böses getan hätte, wurde </p></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
