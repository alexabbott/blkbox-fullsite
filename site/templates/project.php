<?php snippet('header') ?>

  <main class="main single-project animated fadeInUp" role="main">
  
    <?php if($file = $page->postimage()->toFile()): ?>
      <img class="top-image" src="<?php echo $file->url() ?>" alt="<?php echo $page->title()->html() ?>">
    <?php endif ?>

    <div class="text">
      <h3><?php echo $page->title()->html() ?></h3>
      <h1 class="headline"><?php echo $page->headline()->html() ?></h1>
      <h3 class="subtitle"><?php echo $page->subtitle()->html() ?></h3>
      <div class="project-desc">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    </div>

    <?php if($page->projectbigtext()->isNotEmpty()): ?>
      <div class="big-text-holder">
        <div class="big-text-inner">
          <h2><?php echo $page->projectbigtext()->kirbytext() ?></h2>
        </div>
      </div>
    <?php endif ?>

    <?php if($page->stat1()->isNotEmpty()): ?>
      <div class="stat-holder">
        <div class="stat-inner">
          <div class="stat">
            <h2><?php echo $page->stat1()->kirbytext() ?></h2>
            <?php echo $page->stat1subtext()->kirbytext() ?>
          </div>
          <div class="stat">
            <h2><?php echo $page->stat2()->kirbytext() ?></h2>
            <?php echo $page->stat2subtext()->kirbytext() ?>
          </div>
          <div class="stat">
            <h2><?php echo $page->stat3()->kirbytext() ?></h2>
            <?php echo $page->stat3subtext()->kirbytext() ?>
          </div>
        </div>
        </div>
    <?php endif ?>

    <div class="all-projects">
      <?php if($file1 = $page->projectimage1()->toFile()): ?>
        <div class="project-area">
          <img class="project-image" src="<?php echo $file1->url() ?>" alt="<?php echo $page->title()->html() ?>">
          <div class="project-area-text">
            <div class="text-inner">
            <h2><?php echo $page->text1()->html() ?></h2>
            <p><?php echo $page->subtext1()->html() ?></p>
            </div>
          </div>
        </div>
      <?php endif ?>

      <?php if($file2 = $page->projectimage2()->toFile()): ?>
        <div class="project-area">
          <img class="project-image" src="<?php echo $file2->url() ?>" alt="<?php echo $page->title()->html() ?>">
          <div class="project-area-text">
            <div class="text-inner">
            <h2><?php echo $page->text2()->html() ?></h2>
            <p><?php echo $page->subtext2()->html() ?></p>
            </div>
          </div>
        </div>
      <?php endif ?>

      <?php if($file3 = $page->projectimage3()->toFile()): ?>
        <div class="project-area">
          <img class="project-image" src="<?php echo $file3->url() ?>" alt="<?php echo $page->title()->html() ?>">
          <div class="project-area-text">
            <div class="text-inner">
              <h2><?php echo $page->text3()->html() ?></h2>
              <p><?php echo $page->subtext3()->html() ?></p>
            </div>
          </div>
        </div>
      <?php endif ?>

      <?php if($file4 = $page->projectimage4()->toFile()): ?>
        <div class="project-area">
          <img class="project-image" src="<?php echo $file4->url() ?>" alt="<?php echo $page->title()->html() ?>">
          <div class="project-area-text">
            <div class="text-inner">
            <h2><?php echo $page->text4()->html() ?></h2>
            <p><?php echo $page->subtext4()->html() ?></p>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>

    <div class="project-nav">
      <div class="nav-holder">      
        <?php if($prev = $page->prevVisible()): ?>
          <a class="prev fa fa-angle-left" href="<?php echo $prev->url() ?>" aria-hidden="true"></a>
          <?php endif ?>
          <?php if($next = $page->nextVisible()): ?>
          <a class="next fa fa-angle-right" href="<?php echo $next->url() ?>" aria-hidden="true"></a>
        <?php endif ?>
      </div>
    </div>

  </main>
<?php snippet('footer') ?>