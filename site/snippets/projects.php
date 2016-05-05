<ul class="teaser cf">
  <?php foreach(page('work')->children()->visible()->limit(5) as $project): ?>
  <li class="<?php echo $project->slug() ?>">
    <h3 id="workHeader"><?php echo $project->title()->html() ?></h3>
    <h1 class="headline"><a href="<?php echo $project->url() ?>"><?php echo $project->headline()->html() ?></a></h1>
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
</ul>



