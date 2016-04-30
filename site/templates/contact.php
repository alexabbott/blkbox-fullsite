<?php snippet('header') ?>

<main class="contactContent">
  <span class="absolute imgCont">
    <img class="absolute" src="<?php echo $kirby->urls()->assets() ?>/images/contact.png" />
  </span>
  <span class="background-mesh"></span>

  <h1 class="uppercase bold white text-center relative pageTitle"><?php echo $page->header()->html() ?></h1>

  <div id="boxCont" class="flex justify-center relative">
    <span class="box pointer">
      <h1 class="uppercase"><?php echo $page->box1()->html() ?></h1>
      <span class="block textCenter"><?php echo $page->box1Sub()->html() ?></span>
    </span>
    <span class="box pointer">
      <h1 class="uppercase"><?php echo $page->box2()->html() ?></h1>
      <span class="block textCenter"><?php echo $page->box2Sub()->html() ?></span>
    </span>
    <span class="box pointer">
      <h1 class="uppercase"><?php echo $page->box3()->html() ?></h1>
      <span class="block textCenter"><?php echo $page->box3Sub()->html() ?></span>
    </span>
  </div>

  <div id="contactCTA" class="relative text-center white">
    <span class="uppercase">
      <?php echo $page->cta()->html() ?>
    </span>
    <form>
      <input type="text" placeholder="email" />
      <input type="submit"
    </form>
  </div>
</main>

<?php snippet('footer') ?>
