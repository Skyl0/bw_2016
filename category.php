<?php
/*
* Template Name: blog
*/
get_header();
?>
<body class="follow blog category">
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
        Blogkategorie: <? single_cat_title() ?>
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
              <div class="all-blog-post">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><? the_content(); ?></p>
                  <? get_template_part('partials/author_categories') ?>
                </div>
              </div>
              <div class="blog-line">
                <div class="line"></div>
              </div>
            <? endwhile;
            wp_reset_postdata(); ?>
          <?php endif; ?>
          <? get_template_part('partials/back_to_blog') ?>
          <div class="navigation">
            <span class="newer"><?php previous_posts_link(); ?></span>
            <span class="older"><?php next_posts_link(); ?></span>
            <i class="fa fa-chevron-left" aria-hidden="true"></i> Ältere Beiträge | Neuere Beiträge <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<? get_footer() ?>
