  </div>

  <footer class="footer cf animated fadeInUp" role="contentinfo">

    <div class="copyright">
      All Rights Reserved <span class="footer-logo"><em>B</em>LKBOX</span>
    </div>

    <div class="colophon">
      <div class="right">
        <a href="https://facebook.com/TSCthinks" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.twitter.com/TSC_Thinks" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/weareblkbox/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/the-strategy-collective" target="_blank"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>

  </footer>

  <script>
    $('.about-menu').attr('href','<?php echo url() ?>/#AboutContent');
    if ($('body').hasClass('home')) {
      $('.about-menu').on('click', function(){
        $('#nav-icon').toggleClass('open');
        $('.menu').toggleClass('show');
        $('body').toggleClass('overflow');
        $('main-container').toggleClass('overflow');
        $('body').toggleClass('fixed');
        $('main-container').toggleClass('fixed');
        document.getElementById('AboutContent').scrollIntoView();
      });
    }
  </script>
</body>
</html>
