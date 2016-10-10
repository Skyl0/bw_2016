<?php
/**
 * Author: Marc Ernst (CEO)
 * Company: SkyIT Webdesign - 64287 Darmstadt
 * Description: WP-Header
 * Version : 0.1.0
 */
?><!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bastian Werner Wetterfotografie - <? echo the_title() ?></title>
  <!-- begin header --><?php wp_head(); ?><!-- end header wp -->
  <!-- Bootstrap / Fontawesome-->
  <link href="<? echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<? echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- regular stylesheet -->
  <link href="<? echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- JS Libraries -->
  <script src="<? echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
  <script src="<? echo get_template_directory_uri() ?>/assets/js/jquery-migrate-1.4.1.min.js"></script>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<? echo get_template_directory_uri() ?>/assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<? echo get_template_directory_uri() ?>/assets/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<? echo get_template_directory_uri() ?>/assets/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<? echo get_template_directory_uri() ?>/assets/favicons/manifest.json">
  <link rel="mask-icon" href="<? echo get_template_directory_uri() ?>/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
</head><?
$debug = false;
?>