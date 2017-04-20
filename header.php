<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  <?php if (is_front_page() ) { bloginfo('name'); }
        elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
        elseif (is_page() ) { single_post_title(); }
        else { wp_title('',true); } ?>
  </title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <?php wp_head(); ?>
</head>

<header>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

            <a class="navbar-brand" href="/" 
              title="<?php bloginfo('name'); ?>" rel="home">
              <?php bloginfo('name'); ?>
            </a>
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#studentsandteachersnav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>

    </div>

    <div class="collapse navbar-collapse" id="studentsandteachersnav">
      <ul class="nav navbar-nav navbar-right">
        <div class="fix-mobile-nav">
        <!-- Navigation menus !-->
          <?php wp_nav_menu(
              array(
                  'menu' => 'cabecalho',
                  'menu_class' => 'nav navbar-nav',
                  'fallback_cb' => '',
                  'menu_id' => 'cabecalho'            
              )
          );?>
        </div>
      </ul>
    </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>


  <!-- Header -->
  <a name="about"></a>
  <div class="intro-header" style="background:url(<?php header_image(); ?>) no-repeat center center; background-size: cover; max-height: 600px; background-attachment: fixed;">
      <div class="container">

        <div class="intro-message">
        </div>

      </div>
      <!-- /.container -->

  </div>
  <!-- /.intro-header -->

</header>

<body <?php body_class(); ?>>

