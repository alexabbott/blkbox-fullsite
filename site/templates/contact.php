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
    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
      #mc_embed_signup{background: transparent; clear:left; font:14px 'futura-pt',Arial,sans-serif; margin: 0 auto; text-transform: uppercase; width: 400px;}
      #mc_embed_signup .mc-field-group { display: inline-block; width: 74%; }
      #mc_embed_signup .mc-field-group input { border-radius: 0; height: 33px; }
      #mc_embed_signup .clear { display: inline-block; margin-top: 6px; vertical-align: middle; }
      #mc_embed_signup .button { background: #fff; border: 2px solid #fff; border-radius: 0; color: #000; font:14px 'futura-pt',Arial,sans-serif; font-weight: 600; letter-spacing: -1px; text-transform: uppercase; transition: .2s ease-out; }
      #mc_embed_signup .button:hover { background: transparent; color: #fff; }
      #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error { display: none !important;}
    </style>
    <div id="mc_embed_signup">
    <form action="//weareblkbox.us13.list-manage.com/subscribe/post?u=66c0110c974d571246ac52630&amp;id=004da7f262" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
      
    <div class="mc-field-group">
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email address">
    </div>
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_66c0110c974d571246ac52630_004da7f262" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
    <!-- <script type="text/javascript" src="https://form.jotform.com/jsform/61248537261153"></script> -->
  </div>
</main>

<?php snippet('footer') ?>
