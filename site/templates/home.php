<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="video-holder">
      <video autoplay>
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.mp4" type="video/mp4">
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.webm" type="video/webm">
      </video>
      <h3 class="animated fadeInUp">scroll down</h3>
    </div>

    <div class="text">
      <div class="big-text animated fadeInUp"><?php echo $page->main()->kirbytext() ?></div>

      <div class="hold-down animated fadeInUp">
	      <?php echo $page->sub()->kirbytext() ?>
	      <div class="hold-down-text animated fadeIn"><?php echo $page->small()->kirbytext() ?></div>
	      <div class="square"></div>
        <div class="get-uncomfortable">get uncomfortable.</div>
  	  </div>
    </div>

  </main>

<?php snippet('footer') ?>