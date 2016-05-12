<?php snippet('header') ?>

<main id="AboutContent" class="main text-center animated fadeInUp" role="main">

  <div id="aboutLanding"
       class="flex column justify-center relative"
       style="background-image: url(<?php echo $kirby->urls()->assets() ?>/images/about.jpg)">
    <span class="background-mesh"></span>
    <?php echo $page->landingText()->kirbytext() ?>
  </div>

  <div id="aboutBlkbox" class="text-center">
    <h3 class="uppercase"><?php echo $page->headline()->kirbytext() ?></h3>
    <div class="intro uppercase">
      <?php echo $page->intro()->kirbytext() ?>
    </div>
      <?php echo $page->body()->kirbytext() ?>
  </div>

  <div id="aboutStaff" class="text-center relative" style="background-image: url('<?php echo $kirby->urls()->assets() ?>/images/white-mesh.png')">
    <span></span>
    <? echo $page->staffHeader()->kirbytext(); ?>
    <span class="flex justify-center">
      <span class="staffMember flex column">
        <span class="imgCont" style="background-image: url('<?php echo $kirby->urls()->assets() ?>/images/keenan.jpg')"></span>
        <span class="staffId">
          <h3 class="uppercase white"><?php echo $page->staff1()->html() ?></h3>
          <h4 class="uppercase white"><?php echo $page->staff1Title()->html() ?></h4>
        </span>
      </span>
      <span class="staffMember flex column">
        <span class="imgCont" style="background-image: url('<?php echo $kirby->urls()->assets() ?>/images/dionna.jpg')"></span>
        <span class="staffId">
          <h3 class="uppercase white"><?php echo $page->staff2()->html() ?></h3>
          <h4 class="uppercase white"><?php echo $page->staff2Title()->html() ?></h4>
        </span>
      </span>
      <span class="staffMember flex column">
        <span class="imgCont" style="background-image: url('<?php echo $kirby->urls()->assets() ?>/images/soomean.jpg')"></span>
        <span class="staffId">
          <h3 class="uppercase white"><?php echo $page->staff3()->html() ?></h3>
          <h4 class="uppercase white"><?php echo $page->staff3Title()->html() ?></h4>
        </span>
      </span>
      <span class="staffMember flex column">
        <span class="imgCont" style="background-image: url('<?php echo $kirby->urls()->assets() ?>/images/jermaine.jpg')"></span>
        <span class="staffId">
          <h3 class="uppercase white"><?php echo $page->staff4()->html() ?></h3>
          <h4 class="uppercase white"><?php echo $page->staff4Title()->html() ?></h4>
        </span>
      </span>
    </span>
  </div>

  <div id="aboutGram" class="text-center">
    <?php echo $page->gramTag()->kirbytext() ?>
    <div id="photoStream" class="flex justify-between"></div>
  </div>

  <div id="letsTalk" class="inline-block bold"><a href="mailto:info@weareblkbox.com?subject=Lets Talk">LET'S TALK.</a></div>

</main>

<?php snippet('footer') ?>

<script type="text/javascript">
  //Instagram
  $.ajax({
    method: "GET",
    url: "https://api.instagram.com/v1/users/1430749939/media/recent?access_token=1578228172.467ede5.04a6ec58145743cc851a2d64b58d9627&count=6",
    dataType: "jsonp",
    jsonpCallback: "jsoncallback",
    success: function(data) {
        data.data.forEach(function(data) {
            instaLink = data.link;
            imgUrl = data.images.standard_resolution.url;
            $("<div class='imgCont'><a href='" + instaLink +
              "' target='_blank'>" + "<img src=" + imgUrl + "></a></div>")
              .appendTo($("#photoStream"));
        })
    },
    error: function(err) {
        console.log(err)
    }
  })

</script>
