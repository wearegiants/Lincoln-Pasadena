<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" ng-app="myapp"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body class="fs-grid">
<div id="wrapper">

<header id="header">
  <div class="fs-row">
    <menu id="header-main" class="fs-cell fs-lg-5 fs-md-4 fs-sm-3 fs-centered">
      <hr class="invisible">
      <a href="/" id="header--logo">
        <img src="/assets/img/lincolnlogo.svg" alt="<?php bloginfo('name' );?>" class="img-responsive">
      </a>
    </menu>
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-hide fs-sm-hide text-right">
      <a href="/" class="btn btn-logo btn-nav btn-first">Menu</a>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-lg-12 fs-md-6 fs-sm-3 text-center">
      <?php if(!is_front_page()): ?><!--<a href="/" class="btn btn-nav btn-icon ss-glyphish-outlined ss-home"></a>--><?php endif; ?>
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
    </menu>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
