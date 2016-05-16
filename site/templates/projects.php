<?php snippet('header') ?>

  <main class="main animated fadeInUp" role="main">

	<?php snippet('projects') ?>

	<div class="client-list">
		<div class="row clients-header">
			Clients
		</div>
		<div class="row">		
			<img class="logos desktop-only" src="<?php echo $kirby->urls()->assets() ?>/images/client-logos-desktop.jpg" alt="clients">
			<img class="logos mobile-only" src="<?php echo $kirby->urls()->assets() ?>/images/client-logos-mobile.jpg" alt="clients">
		</div>
	</div>

  </main>

<?php snippet('footer') ?>