<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <div class="big-text animated fadeInUp"><?php echo $page->main()->kirbytext() ?></div>

      <div class="hold-down animated fadeInUp">
	      <?php echo $page->sub()->kirbytext() ?>
	      <div class="hold-down-text animated fadeIn"><?php echo $page->small()->kirbytext() ?></div>
	      <div class="square"></div>
  	  </div>
    </div>

  </main>

<?php snippet('footer') ?>