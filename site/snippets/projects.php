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
  
  <div id="clientList">

      <h3 id="clientList">Clients</h3>

      <br>
    
      <div class="row">   
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/baxalta_white.jpg" alt="Baxalta">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/western_white.jpg" alt="Western Union">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/piercing_white.jpg" alt="Piercing Pagoda">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/havas_white.jpg" alt="Havas">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/frenchs_white.jpg" alt="French'">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/facebook_white.jpg" alt="Facebook">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/bonotel_white.jpg" alt="Bonotel">
      </div>
      <div class="row">   
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/tacobell_white.jpg" alt="Taco Bell">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/melange_white.jpg" alt="Melange Expressions">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/hiring_white.jpg" alt="Hiring our Heroes">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/garden_white.jpg" alt="Garden Lites">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/franks_white.jpg" alt="Franks">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/brock_white.jpg" alt="Brock">
        <img src="<?php echo $kirby->urls()->assets() ?>/images/logos/beachbody_white.jpg" alt="Beachbody">
      </div>

  </div>

</ul>
