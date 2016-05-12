<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="video-holder">
      <div class="video-overlay"></div>
      <img data-src="<?php echo $kirby->urls()->assets() ?>/images/get-animation.gif" alt="blkbox" class="get-animation desktop-only">
      <video autoplay class="desktop-only">
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.mp4" type="video/mp4">
        <source src="<?php echo $kirby->urls()->assets() ?>/images/intro.webm" type="video/webm">
      </video>
      <img data-src="<?php echo $kirby->urls()->assets() ?>/images/get-animation-mobile.gif" alt="blkbox" class="mobile-only mobile-gif bottom-gif">
      <img src="<?php echo $kirby->urls()->assets() ?>/images/mobile-reel.gif" alt="blkbox" class="mobile-only mobile-gif top-gif">
      <h3 class="animated fadeInUp scroll-down">PRESS & HOLD TO PLAY</h3>
      <i class="fa fa-volume-up"></i>
    </div>

  </main>

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

<?php snippet('footer') ?>