<?php
/*
* Template Name: follow
*/
get_header();
?>
<body class="follow">
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
  <div id="breadcrumb">
    <div class="wrapper">
      <div class="col-sm-12">
        <? echo the_title() ?>
      </div>
    </div>
  </div>
  <div id="main">
    <div class="wrapper">
      <div class="col-sm-12">
        <div class="inner">
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
<? get_footer() ?>
