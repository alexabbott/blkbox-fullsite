<?php snippet('header') ?>
  <main id="AboutContent" class="main text-center" role="main">

    <div id="aboutText" class="text-center">
      <h2 class="white">Our Beliefs</h2>
      <span class="block">Here's what we know:</span>
      <span class="block bold">Marketing, Advertising, Content.</span>
      <span class="block">It works when the person who's meant to see it, see's it, likess it, and believes it was made for them.</span>
      <span class="block">We have one true goal.</span>
      <span class="block">That is to make everyone feel understood.</span>
      <p>BLKBOX is your access to the mystifying, complicated, open-minded and world-changing generation - millenials. We're young, but we're experienced. Not know-it-alls. In fact we don't know all of the answers, but we're gonna have a hell of a time finding them.</p>
      <p class="uppercase bold large">We're unapologetic,<br>not arrogant.<br>We're creators,<br>not fluffers<br>We are passionate AF.<br>We know one thing is true.</p>
      <h3 class="large uppercase bold">You have to<br><span class="uppercase red bold">get uncomfortable</span><br>to grow<span class="red">.</span></h3>
    </div>

    <div id="aboutStaff" class="text-center flex justify-between">
      <?php
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

<!--     <div id="aboutVid">
      <div id="YT_player" class="absolute"></div>
      <div id="vidStill" class="flex pointer">
        <img src="/blkbox/assets/images/frenchs.jpg"/>
        <svg height="100" width="100">
          <circle cx="50" cy="50" r="40" fill="rgba(24,24,29,1)" />
          <path d="M40 35 V65 L65 50 L40 35" stroke-width="0" fill="white" />
        </svg>
      </div>
    </div> -->

    <div id="aboutGram" class="text-center">
      <h1 class="uppercase bold">Instagram</h1>
      <span>catch us up on the gram</span>
      <div id="photoStream" class="flex justify-between"></div>
    </div>

    <div id="letsTalk" class="inline-block bold">Let's Talk.</div>

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

  //Video
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('YT_player', {
      height: '390',
      width: '640',
      videoId: 'Awf45u6zrP0',
      playerVars: { 'controls' : 0, 'showinfo' : 0, 'modestbranding' : 1 },
      events: {
        'onReady': onPlayerReady
      }
    });
  }

  function onPlayerReady(event) {
    player.seekTo(0);
    player.pauseVideo();
    vidStill.addEventListener('click', function() {
      if (!this.classList.contains('none')) {
        player.playVideo();
        vidStill.classList = vidStill.classList.remove('flex');
        vidStill.classList = vidStill.classList.add('none');
      }
    })
  }

  var vidStill = document.getElementById('vidStill');

  var done = false;

</script>
