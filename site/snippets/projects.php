<ul class="teaser cf">
  <?php foreach(page('work')->children()->visible()->limit(5) as $project): ?>
  <li class="<?php echo $project->slug() ?>">
    <h3 id="workHeader"><?php echo $project->title()->html() ?></h3>
    <h1 id="workHeadline" class="headline"><a href="<?php echo $project->url() ?>" id="workHeadlink"><?php echo $project->headline()->html() ?></a></h1>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>" class="project-image-holder">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <h3 id="teaserSubtitle" class="subtitle"><?php echo $project->subtitle()->html() ?></h3>
    <br>
    <!-- <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3> -->
  </li>
  <?php endforeach ?>
  
  <li>

    <!-- <div class="row clients-header"> -->
      <h3 id="clientList">Clients</h3>
    <!-- </div> -->

  </li>

</ul>

<!-- <div class="client-list">
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
</div> -->


