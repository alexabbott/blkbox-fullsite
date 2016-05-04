<?php snippet('header') ?>

<main class="contactContent relative"
      style="background-image: url(<?php echo $kirby->urls()->assets() ?>/images/contact.png)">
  <span class="background-mesh"></span>

  <h1 class="uppercase bold white text-center relative pageTitle"><?php echo $page->header()->html() ?></h1>

  <div id="boxCont" class="flex justify-center relative">
    <span class="box pointer flex column justify-center">
      <span><?php echo $page->box1()->kirbytext() ?></span>
      <?php echo $page->box1Sub()->kirbytext() ?>
    </span>
    <span class="box pointer flex column justify-center">
      <span><?php echo $page->box2()->kirbytext() ?></span>
      <?php echo $page->box2Sub()->kirbytext() ?>
    </span>
    <span class="box pointer flex column justify-center">
      <span><?php echo $page->box3()->kirbytext() ?></span>
      <?php echo $page->box3Sub()->kirbytext() ?>
    </span>
  </div>

  <div id="contactCTA" class="relative text-center white">
    <span class="uppercase">
      <?php echo $page->cta()->kirbytext() ?>
    </span>
    <form class="email">
      <!-- <iframe src="https://docs.google.com/forms/d/1zIKqKY8Me4_00_2abPQfjC1uvqapGdvZg6OIPKx7YyU/viewform?embedded=true" width="300" height="215" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe> -->
      <input id="email" type="text" placeholder="email address" />
      <input id="emailSubmit" type="submit" />
    </form>
  </div>
</main>

<?php snippet('footer') ?>
