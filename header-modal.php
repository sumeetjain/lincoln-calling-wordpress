<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
  <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/scripts/modalScript.js"></script>
  <?php wp_head(); ?>
</head>

<body>

<div class="outerContainer">
  <div class="header">
    <?php $url = home_url(); ?>
    <a href="<?php echo $url; ?>">
      <img src="<?php bloginfo("template_directory"); ?>/assets/images/header.png" alt="This is Lincoln Calling: music, art, innovation.">
    </a>
  </div>
  <div class="nav">
    <ul>
      <li><a href="#">Buy Tickets</a></li>
      <li>
        <a href="">Lineup <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>
        <ul class="subNav">
        <?php wp_list_categories( array (
          'title_li' => '',
          'orderby' => 'id',
          'child_of' => get_cat_ID( 'lineup' ),
          'hide_empty' => 0
        ) ); ?>
        </ul>
      </li>
      <li>
        <a href="">Get Involved <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>
        <ul class="subNav">
          <?php wp_list_categories( array (
            'title_li' => '',
            'orderby' => 'id',
            'child_of' => get_cat_ID( 'get-involved' ),
            'hide_empty' => 0
          ) ); ?>
        </ul>
        <li><a href="#">Updates</a></li>
        <li><a href="#">Fest Info</a></li>
        <li>
          <a href="#"><i class="fa fa-envelope-o newsletterLink" aria-hidden="true"></i>Newsletter</a>
        </li>
    </ul>
  </div>
</div>

<a href="<?php echo home_url(); ?>">
  <img class="desktop-hide" src="<?php bloginfo("template_directory"); ?>/assets/images/mobileheader.png">
</a>

<div class="outerContainer">