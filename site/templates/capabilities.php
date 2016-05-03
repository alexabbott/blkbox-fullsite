<?php snippet('header') ?>

  <main class="main" role="main">

	<div class="top-section animated slideInLeft" style="background: url(<?php echo $kirby->urls()->assets() ?>/images/capabilities.gif)">
		<h1><?php echo $page->bigtitle()->kirbytext() ?><span>.</span></h1>
	</div>

	<div class="bottom-section animated fadeInUp">
		<div class="left-side">
			<div class="box">
				<?php echo $page->box1()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext1()->kirbytext() ?>
			</div>
		</div>

		<div class="right-side">
			<div class="box">
				<?php echo $page->box2()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext2()->kirbytext() ?>
			</div>
		</div>

		<a href="<?php echo url() ?>/contact" class="lets-talk bold">Let's talk.</a>
	</div>

  </main>

<?php snippet('footer') ?>