<?php snippet('header') ?>

  <main class="main animated fadeIn" role="main">

	<h4 class="work-title">Work.</h4>

	<?php snippet('projects') ?>

	<h4 class="client-title">
		view full client list
		<div></div>
	</h4>

	<div class="client-list">
		<div class="row clients-close">&times;</div>
		<div class="row clients-header">
			Clients
		</div>
		<div class="row">		
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/baxalta.jpg" alt="Baxalta">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/beachbody.jpg" alt="Beachbody">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/bonotel.jpg" alt="Bonotel">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/brock.jpg" alt="Brock">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/facebook.jpg" alt="Facebook">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/franks.jpg" alt="Franks">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/frenchs.jpg" alt="French'">
		</div>
		<div class="row">		
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/garden.jpg" alt="Garden Lites">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/havas.jpg" alt="Havas">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/hiring.jpg" alt="Hiring our Heroes">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/melange.jpg" alt="Melange Expressions">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/piercing.jpg" alt="Piercing Pagoda">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/tacobell.jpg" alt="Taco Bell">
			<img src="<?php echo $kirby->urls()->assets() ?>/images/logos/western.jpg" alt="Western Union">
		</div>
	</div>

  </main>

<?php snippet('footer') ?>