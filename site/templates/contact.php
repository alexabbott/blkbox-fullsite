<?php snippet('header') ?>

<main class="contactContent relative"
      style="background-image: url(<?php echo $kirby->urls()->assets() ?>/images/contact.png)">
  <span class="background-mesh" style="background-image: url(<?php echo $kirby->urls()->assets() ?>/images/black-mesh.png)"></span>

  <h1 class="uppercase bold white text-center relative pageTitle"><?php echo $page->header()->html() ?></h1>

  <div id="boxCont" class="flex justify-center relative">
    <a href="mailto:careers@weareblkbox.com?subject=Get Hired" class="box pointer flex column justify-center">
      <span><?php echo $page->box1()->kirbytext() ?></span>
      <?php echo $page->box1Sub()->kirbytext() ?>
    </a>
    <a href="mailto:info@weareblkbox.com?subject=Hire Us" class="box pointer flex column justify-center">
      <span><?php echo $page->box2()->kirbytext() ?></span>
      <?php echo $page->box2Sub()->kirbytext() ?>
    </a>
    <a  href="mailto:info@weareblkbox.com?subject=General Inquiry" class="box pointer flex column justify-center">
      <span><?php echo $page->box3()->kirbytext() ?></span>
      <?php echo $page->box3Sub()->kirbytext() ?>
    </a>
  </div>

  <div id="contactCTA" class="relative text-center white">
    <span class="uppercase">
      <?php echo $page->cta()->kirbytext() ?>
    </span>
    <script type="text/javascript" src="https://form.jotform.com/jsform/61248445993163"></script>
  </div>
</main>

<?php snippet('footer') ?>
