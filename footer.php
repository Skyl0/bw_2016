<?php /**
 * Footer File
 */

?>
<div id="bottom">
  <div class="wrapper">
    <div class="col-sm-4">
      <div class="inner extra-menu">
        <h2>Men&uuml;punkte</h2>
        <?php wp_nav_menu(array('theme_location' => 'extra-menu')); ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="inner">
        <?php dynamic_sidebar('short-bio'); ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="inner extra-menu">
        <h2>Rechtliches</h2>
        <?php wp_nav_menu(array('theme_location' => 'imprint-menu')); ?>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="wrapper">
    <div class="col-sm-6 footer-left">&copy; Bastian Werner 2016</div>
    <div class="col-sm-6 footer-right">
      <a href="#" class="scrollup-link">
        <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- other external JS -->
<script src="https://use.fontawesome.com/55ae683038.js"></script>
<!-- internal JS -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<!-- self written JS -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/default.js"></script>
<!-- end JS part -->
<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>
</body>
</html>