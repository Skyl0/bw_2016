<?php
/*
* Template Name: first
*/

get_header();
?><body class="first">
<div id="header">
  <div id="top">
    <div class="wrapper">
      <div id="logo">
        <a href="<?php echo get_site_url(); ?>">
          <img src="<? echo get_template_directory_uri() ?>/assets/images/logo100px.png" alt="alt logo"/>
        </a>
      </div>
      <div class="mainnav">
        <nav>
          <?php wp_nav_menu(array('name' => 'hauptmenue', 'theme_location' => 'header-menu')); ?>
        </nav>
      </div>
      <div class="social">
        <div class="addthis_inline_follow_toolbox"></div>
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
        <?php dynamic_sidebar('panel-home'); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar('panel-home-2'); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar('panel-home-3'); ?>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="inner">
        <?php dynamic_sidebar('panel-home-4'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>