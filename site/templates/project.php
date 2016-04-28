<?php snippet('header') ?>

  <main class="main single-project" role="main">


    <div class="text">
      <div class="project-close">
        <a href="<?php echo url() ?>/work">&times;</a>
      </div>
      <h3><?php echo $page->title()->html() ?></h3>
      <div class="project-desc">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    </figure>
    <?php endforeach ?>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </main>

<?php snippet('footer') ?>