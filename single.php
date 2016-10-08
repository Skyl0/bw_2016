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
          if (have_posts()) :
            while (have_posts()): the_post();
              ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <? the_content(); ?>
              </div>
              <? get_template_part('partials/author_categories') ?>
            <? endwhile; ?>
            <div class="blog-navigation">
              <?
              //fetch prev link
              ob_start();
              previous_post_link('<i class="fa fa-chevron-left" aria-hidden="true"></i> %link');
              $previous_link = ob_get_clean();
              //fetch next link
              ob_start();
              next_post_link('%link <i class="fa fa-chevron-right" aria-hidden="true"></i>');
              $next_link = ob_get_clean();
              ?>
              <span
                class="newer"><? if ($previous_link) echo $previous_link; ?></span>
              <? if ($next_link && $previous_link) echo ' | '; ?>
              <span
                class="older"><? if ($next_link) echo $next_link; ?></span>
            </div>
            <? get_template_part('partials/back_to_blog'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<? get_footer() ?>

