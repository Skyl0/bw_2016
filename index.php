<?php
/*
* Template Name: first
*/

get_header();
?><body class="first">
<div id="header">
  <header>
    <div id="top">
      <div class="wrapper">
        <? get_template_part('partials/social_buttons'); ?>
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
      </div>
    </div>
  </header>
  <div class="floatb">
    <div class="wrapper">
      <div id="float-box-1" class="floatingbox float-hide">
        <!-- excluded <h1>the_title('');</h1> -->
        <article>
          <div class="main-content">
            <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                the_content();
              }
            } ?>
          </div>
        </article>
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