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
    <div class="col-sm-4"><aside>
      <div class="inner">
        <?php dynamic_sidebar('short-bio'); ?>
      </div>
    </div></aside>
    <div class="col-sm-4">
      <div class="inner extra-menu">
        <h2>Rechtliches</h2>
        <?php wp_nav_menu(array('theme_location' => 'imprint-menu')); ?>
      </div>
    </div>
  </div>
</div>
<footer><div id="footer">
  <div class="wrapper">
    <div class="col-sm-6 footer-left"><i class="fa fa-copyright" aria-hidden="true"></i> Bastian Werner <? echo date(Y); ?> | Alle Rechte vorbehalten</div>
    <div class="col-sm-6 footer-right">
      <a href="<? echo home_url() . "/kontakt"?>" class="mail-link">
        <i class="fa fa-envelope" aria-hidden="true"></i>
      </a>
      <a href="#" class="scrollup-link">
        <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div></footer>
<!-- external JS -->

<!-- internal JS -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<!-- self written JS -->
<script src="<? echo get_template_directory_uri() ?>/assets/js/default.min.js"></script>
<!-- end JS part  -->
<?php
wp_footer();
?>
</body>
</html>