<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="shortcut icon" href="<?php echo $kirby->urls()->assets() ?>/images/favicon.ico">
  <?php echo js(array(
  'assets/js/jquery-1.12.3.min.js',
  'assets/js/main.js',
  )) ?>
  <script src="https://use.typekit.net/nff5alt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <?php echo css('assets/css/animate.css') ?>
  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/mobile.css') ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

</head>
<body class="<?php echo $page->title()->lower()->html() ?>">

  <header class="header cf" role="banner">
    <a class="logo animated fadeInDown" href="<?php echo url() ?>">
      <em>B</em>LKBOX
    </a>
    <?php snippet('menu') ?>
  </header>

  <div class="main-container">