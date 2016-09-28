<?php /**
 * Footer File
 */

?>
<div id="bottom">
  <div class="wrapper">
    <div class="col-sm-4">
      <div class="inner extra-menu">
        <h2>Wähle einen Bereich</h2>
        <?php wp_nav_menu(array('theme_location' => 'extra-menu')); ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="inner"><p>
          Bastian Werner ist Fotograf und bla und blubb und bla und blubb und bla und blubb
          und bla und blubb und bla und blubb und bla und blubb und bla und blubb und bla und blubb </p></div>
    </div>
    <div class="col-sm-4">
      <div class="inner">
        <ul class="imprint_menu">
          <li><a href="/">Impressum</a></li>
          <li><a href="/">Datenschutz</a></li>
          <li><a href="/">Weitere Informationen</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="wrapper">
    <div class="col-sm-12">&copy; Bastian Werner 2016</div>
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