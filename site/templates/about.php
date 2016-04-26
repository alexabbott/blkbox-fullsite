<?php snippet('header') ?>
  <main id="AboutContent" class="main" role="main">

    <div id="aboutText">
      <h2 class="fadeIn">Our Beliefs</h2>
      <span class="block uppercase">What we know:</span>
      <p>Crucifix locavore polaroid trust fund, brunch kinfolk pour-over retro bespoke. Meggings actually meh everyday carry cliche. Williamsburg keffiyeh craft beer, green juice 3 wolf moon beard trust fund VHS. Put a bird on it yuccie kogi schlitz roof party, skateboard tattooed lomo cronut food truck kombucha direct trade. Mustache fanny pack distillery, next level mixtape typewriter cardigan gentrify ennui etsy migas dreamcatcher tumblr asymmetrical. Mixtape fingerstache lomo keytar. </p>
      <p>Banh mi taxidermy beard viral, authentic asymmetrical next level messenger bag pinterest. Austin keytar 8-bit, skateboard gluten-free microdosing brunch kickstarter vinyl chicharrones. Green juice asymmetrical vegan austin, pork belly mixtape vinyl four dollar toast chillwave pop-up man braid offal. 3 wolf moon YOLO man braid, fingerstache shabby chic sriracha freegan small batch iPhone tacos normcore. Paleo lumbersexual pabst gentrify, banjo umami franzen PBR&B neutra. Green juice heirloom hoodie tacos neutra pork belly flexitarian austin plaid, cred poutine 8-bit lumbersexual PBR&B. Synth cray salvia, pork belly four dollar toast affogato small batch.</p>
    </div>

    <div id="aboutGram" class="textCenter">
      <div id="photoStream" class="flex justifyBetween"></div>
      <h1 class="uppercase">Instagram</h1>
      <span>catch us up on the gram</span>
    </div>

    <div id="aboutVid">
      <div id="YT_player" class="absolute"></div>
      <div id="vidStill" class="flex pointer">
        <img src="/blkbox/assets/images/frenchs.jpg"/>
        <svg height="100" width="100">
          <circle cx="50" cy="50" r="40" fill="rgba(24,24,29,1)" />
          <path d="M40 35 V65 L65 50 L40 35" stroke-width="0" fill="white" />
        </svg>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>

<script type="text/javascript">
  //Instagram
  $.ajax({
    method: "GET",
    url: "https://api.instagram.com/v1/users/1578228172/media/recent?access_token=1578228172.467ede5.04a6ec58145743cc851a2d64b58d9627&count=5",
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
