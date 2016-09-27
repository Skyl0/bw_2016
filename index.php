<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
?>
<div id="header">
  <div id="top">
    <div class="wrapper">
      <div id="logo">
        <img src="./assets/images/logo100px.png" alt="alt logo"/>
      </div>
      <div class="nav">
        <nav>
          <ul class="navigation">
            <li><a href="/">Start</a></li>
            <li><a href="/">Galerie</a></li>
            <li><a href="/">Shop</a></li>
            <li class="active"><a href="/">Über mich</a></li>
            <li><a href="/">Workshops / Events</a></li>
            <li><a href="/">Blog</a></li>
            <li><a href="/">Kalender</a></li>
            <li><a href="/">Sonstiges</a></li>
          </ul>
        </nav>
      </div>
      <div class="social">
        <!-- TODO -->
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="floatingbox">
      <h1>Willkommen</h1>
      <p>Jemand musste Josef K. verleumdet haben, denn ohne dass er etwas Böses getan hätte,
        wurde er eines Morgens verhaftet. »Wie ein Hund!« sagte er, es war, als sollte die Scham
        ihn überleben. Als Gregor Samsa eines Morgens aus unruhigen Träumen erwachte, fand er sich
        in seinem Bett zu einem ungeheueren Ungeziefer verwandelt. Und es war ihnen wie eine
        Bestätigung ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die Tochter als
        erste sich erhob und ihren jungen Körper dehnte. »Es ist ein eigentümlicher Apparat«, sagte
        der Offizier zu dem Forschungsreisenden und überblickte mit einem gewissermaßen bewundernden
        Blick den ihm doch wohlbekannten Apparat.</p>
    </div>
  </div>
</div>
<div id="main">
  <div class="wrapper">
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-camera-retro" aria-hidden="false"></i>Galerie</h1>
        <p>Zur Galerie</p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-user" aria-hidden="false"></i>Über mich</h1>
        <p>Und es war ihnen wie eine Bestätigung ihrer neuen Träume und guten Absichten, als am Ziele ihrer Fahrt die
          Tochter als erste sich erhob
          und ihren jungen Körper dehnte.</p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-wrench" aria-hidden="false"></i>Workshops</h1>
        <p>Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren.Jemand musste Josef K.
          verleumdet haben, denn
          ohne dass er etwas Böses getan hätte, wurde </p></div>
    </div>
    <div class="col-sm-6">
      <div class="inner"><h1><i class="fa fa-shopping-cart" aria-hidden="false"></i>Shop</h1>
        <p>Aber sie überwanden sich, umdrängten den Käfig und wollten sich gar nicht fortrühren.Jemand musste Josef K.
          verleumdet haben, denn
          ohne dass er etwas Böses getan hätte, wurde </p></div>
    </div>
  </div>
</div>
<div id="bottom">
  <div class="wrapper">
    <div class="col-sm-4">
      <div class="inner">
        <ul class="bottom_nav">
          <li><a href="/">Start</a></li>
          <li><a href="/">Galerie</a></li>
          <li><a href="/">Shop</a></li>
          <li class="active"><a href="/">Über mich</a></li>
          <li><a href="/">Workshops / Events</a></li>
          <li><a href="/">Blog</a></li>
          <li><a href="/">Kalender</a></li>
          <li><a href="/">Sonstiges</a></li>
        </ul>
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
<?php get_footer(); ?>
