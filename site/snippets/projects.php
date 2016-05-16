<ul class="teaser cf">
  <?php foreach(page('work')->children()->visible()->limit(5) as $project): ?>
  <a href="<?php echo $project->url() ?>" class="teaser-link">
    <li class="<?php echo $project->slug() ?>">
      <?php if($rollover = $project->rollover()->toFile()): ?>
        <div class="rollover-image" style="background: url(<?php echo $rollover->url() ?>)"></div>
      <?php endif ?>
      <div class="work-teaser-text">        
        <h3 class="main-client"><?php echo $project->title()->html() ?></h3>
        <h2 class="main-headline"><?php echo $project->headline()->html() ?></h3>
        <h3 class="main-subtitle"><?php echo $project->subtitle()->html() ?></h3>
      </div>
    </li>
  </a>
  <?php endforeach ?>
</ul>
