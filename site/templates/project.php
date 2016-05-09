<?php snippet('header') ?>

  <main class="main single-project" role="main">
  
    <?php if($file = $page->postimage()->toFile()): ?>
      <img class="top-image" src="<?php echo $file->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
    <?php endif ?>

    <div class="text">
      <h3><?php echo $page->title()->html() ?></h3>
      <h1 class="headline"><?php echo $page->headline()->html() ?></h1>
      <h3 class="subtitle"><?php echo $page->subtitle()->html() ?></h3>
      <div class="project-desc">
        <?php echo $page->text()->kirbytext() ?>
      </div>
      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev fa fa-angle-left" href="<?php echo $prev->url() ?>" aria-hidden="true"></a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next fa fa-angle-right" href="<?php echo $next->url() ?>" aria-hidden="true"></a>
        <?php endif ?>
      </nav>
    </div>

    <?php if($file1 = $page->projectimage1()->toFile()): ?>
      <img class="project-image" src="<?php echo $file1->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
    <?php endif ?>

    <?php if($file2 = $page->projectimage2()->toFile()): ?>
      <img class="project-image" src="<?php echo $file2->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
    <?php endif ?>

    <?php if($file3 = $page->projectimage3()->toFile()): ?>
      <img class="project-image" src="<?php echo $file3->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
    <?php endif ?>

    <?php if($file4 = $page->projectimage4()->toFile()): ?>
      <img class="project-image" src="<?php echo $file4->url() ?>" alt="<?php echo $page->title()->html() ?>"></div>
    <?php endif ?>

  </main>
<?php snippet('footer') ?>