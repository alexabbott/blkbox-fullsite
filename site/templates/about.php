<?php snippet('header') ?>

<main id="AboutContent" class="main text-center animated fadeInUp" role="main">

  <div id="aboutText" class="text-center">
    <h2 class="white uppercase"><?php echo $page->headline()->html() ?></h2>
    <?php echo $page->block1()->kirbytext() ?>
    <div id="manifesto">
      <?php echo $page->manifesto()->kirbytext() ?>
    </div>
    <?php echo $page->thingWeKnow()->kirbytext() ?>
  </div>

  <div id="aboutStaff" class="text-center flex justify-center">
    <?php
      echo $page->staffHeader()->kirbytext();

      $staff = array("First Guy"=>"35", "First Woman"=>"38", "Fourth Man"=>"14", "Next Woman"=>"??");

      foreach($staff as $member => $member_age) {
        echo '<span class="staffMember flex column">
                <span class="imgCont relative flexGrow1">
                  <img class="absolute" src="http://i.imgur.com/9oaBK0b.png"/>
                </span>
                <span class="staffId">
                  <h2>' . $member . '</h2>
                  <h3>' . $member_age . '</h3>
                </span>
              </span>';
      }
    ?>
  </div>

  <div id="aboutGram" class="text-center">
    <?php echo $page->gramTag()->kirbytext() ?>
    <div id="photoStream" class="flex justify-between"></div>
  </div>

  <div id="letsTalk" class="inline-block bold"><a href="./contact">Let's Talk.</a></div>

</main>

<?php snippet('footer') ?>

<script type="text/javascript">
  //Instagram
  $.ajax({
    method: "GET",
    url: "https://api.instagram.com/v1/users/1578228172/media/recent?access_token=1578228172.467ede5.04a6ec58145743cc851a2d64b58d9627&count=4",
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
