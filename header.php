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
  <!-- Bootstrap -->
  <link href="<? echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<? echo get_template_directory_uri() ?>/style.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Date Time Picker Libraries -->
  <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>