<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if($file = $page->mainimage()->toFile()): ?>
		<div class="top-section animated slideInLeft" style="background: url(<?php echo $file->url() ?>)">
			<h1><?php echo $page->bigtitle()->kirbytext() ?></h1>
		</div>
	<?php endif ?>

	<div class="bottom-section animated fadeInUp">
		<div class="left-side">
			<div class="box">
				<?php echo $page->box1()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext1()->kirbytext() ?>
			<div class="column">
				<?php echo $page->subtext1column1()->kirbytext() ?>
			</div>
			<div class="column">
				<?php echo $page->subtext1column2()->kirbytext() ?>
			</div>
			<div class="column">
				<?php echo $page->subtext1column3()->kirbytext() ?>
			</div>
			</div>
		</div>

		<hr>

		<div class="right-side">
			<div class="box">
				<?php echo $page->box2()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext2()->kirbytext() ?>
				<div class="column">
					<?php echo $page->subtext2column1()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext2column2()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext2column3()->kirbytext() ?>
				</div>
			</div>
		</div>

		<?php if(!$page->box3()->empty()): ?>
		<hr>
		<div class="left-side">
			<div class="box">
				<?php echo $page->box3()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext3()->kirbytext() ?>
				<div class="column">
					<?php echo $page->subtext3column1()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext3column2()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext3column3()->kirbytext() ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box4()->empty()): ?>
		<hr>
		<div class="right-side">
			<div class="box-holder">
				<div class="box">
					<?php echo $page->box4()->kirbytext() ?>
				</div>
			</div>
			<div class="subtext">
				<?php echo $page->subtext4()->kirbytext() ?>
				<div class="column">
					<?php echo $page->subtext4column1()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext4column2()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext4column3()->kirbytext() ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box5()->empty()): ?>
		<hr>
		<div class="left-side">
			<div class="box-holder">
				<div class="box">
					<?php echo $page->box5()->kirbytext() ?>
				</div>
			</div>
			<div class="subtext">
				<?php echo $page->subtext5()->kirbytext() ?>
				<div class="column">
					<?php echo $page->subtext5column1()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext5column2()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext5column3()->kirbytext() ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php if(!$page->box6()->empty()): ?>
		<hr>
		<div class="right-side">
			<div class="box">
				<?php echo $page->box6()->kirbytext() ?>
			</div>
			<div class="subtext">
				<?php echo $page->subtext6()->kirbytext() ?>
				<div class="column">
					<?php echo $page->subtext6column1()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext6column2()->kirbytext() ?>
				</div>
				<div class="column">
					<?php echo $page->subtext6column3()->kirbytext() ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<a href="mailto:info@weareblkbox.com?subject=Lets Talk" class="lets-talk bold">Let's talk.</a>
	</div>

  </main>

<?php snippet('footer') ?>