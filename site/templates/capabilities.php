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

		<?php if(!$page->box3()->empty()): ?>
		<div class="left-side">
			<div class="box">
				<?php echo $page->box3()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext3()->kirbytext() ?>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box4()->empty()): ?>
		<div class="right-side">
			<div class="box">
				<?php echo $page->box4()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext4()->kirbytext() ?>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box5()->empty()): ?>
		<div class="left-side">
			<div class="box">
				<?php echo $page->box5()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext5()->kirbytext() ?>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box6()->empty()): ?>
		<div class="right-side">
			<div class="box">
				<?php echo $page->box6()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext6()->kirbytext() ?>
			</div>
		</div>
		<?php endif ?>

		<a href="mailto:info@weareblkbox.com?subject=Lets Talk" class="lets-talk bold">Let's talk.</a>
	</div>

  </main>

<?php snippet('footer') ?>