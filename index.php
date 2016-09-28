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
      <div class="inner">
        <?php dynamic_sidebar( 'panel_home_1' ); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar( 'panel_home_2' ); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar( 'panel_home_3' ); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar( 'panel_home_4' ); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
