<?php
/*
* Template Name: blog
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
        Blog
      </div>
    </div>
  </div>
  <div id="main">
    <div class="wrapper">
      <div class="col-sm-12">
        <div class="inner">
          <?php
          // query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged'));
          if (have_posts()) :
            while (have_posts()): the_post();
              ?>
              <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><? the_content(); ?></p>
              </div>
            <? endwhile; ?>
            <div class="navigation">
              <span class="newer"><?php previous_posts_link(__('« Newer', 'example')) ?></span> <span
                class="older"><?php next_posts_link(__('Older »', 'example')) ?></span>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<? get_footer() ?>
