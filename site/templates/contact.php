<?php snippet('header') ?>

<main class="contactContent relative"
      style="background-image: url(<?php echo $kirby->urls()->assets() ?>/images/contact.png)">

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
    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <div id="mc_embed_signup">
    <form action="//thestrategycollective.us11.list-manage.com/subscribe/post?u=ab37eda8e39faa756d16e5816&amp;id=6e06feda51" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">

    <div class="mc-field-group">
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address">
    </div>
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ab37eda8e39faa756d16e5816_6e06feda51" tabindex="-1" value=""></div>
        <div class="clear submit-holder">
          <input type="submit" value="submit" name="subscribe" id="mc-embedded-subscribe" class="button">
          <div class="mobile-only submit-button">SUBMIT</div>
        </div>
        </div>
    </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
    <div class="text-center address"><?php echo $page->contactinfo()->kirbytext() ?></div>
  </div>
</main>

<?php snippet('footer') ?>
