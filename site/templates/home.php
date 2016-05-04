<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="video-holder">
      <div class="video-overlay"></div>
      <img data-src="<?php echo $kirby->urls()->assets() ?>/images/get-animation.gif" alt="blkbox" class="get-animation">
      <video autoplay>
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.mp4" type="video/mp4">
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.webm" type="video/webm">
      </video>
      <h3 class="animated fadeInUp scroll-down">PRESS & HOLD TO PLAY</h3>
    </div>

  </main>

<?php snippet('footer') ?>