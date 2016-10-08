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
          <?
          // The Query
          $posts_per_page = 4;
          $args = array(
            'posts_per_page' => $posts_per_page,
            'category' => $cat
          );
          $the_query = new WP_Query($args);
          $i = 0;
          ?>
          <?php
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()): $the_query->the_post();
              ?>
              <div class="all-blog-post">
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><? the_content(); ?></p>
                  <? get_template_part('partials/author_categories') ?>
                </div>
              </div>
              <? if ($i < $posts_per_page) : ?>
                <div class="blog-line">
                  <div class="line"></div>
                </div>
              <? endif; ?>
            <? endwhile;
            wp_reset_postdata(); ?>
          <?php endif; ?>
          <? get_template_part('partials/back_to_blog') ?>
        </div>
      </div>
    </div>
  </div>
</div>
<? get_footer() ?>
