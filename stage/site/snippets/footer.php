<footer class="container-fluid footer">
  <div class="row unskew">
    <!-- FOOTER LEFT -->
    <div class="col-lg col-xs footer-wrapper">
      <div class="footer-content-1 footer-border">
        <?= $site->footer_1()->kirbytext() ?>
      </div>
    </div>
     <!-- FOOTER CENTER -->
    <div class="col-lg col-xs footer-wrapper shadow">
      <div class="footer-content-2 footer-border">

                <div class="footer-brand">
                 <img class="img-brand" src="./content/toggler_black.svg" ?>
                    <div class="contact-brand">
                      <?= $site->footer_2()->kirbytext() ?>
                    </div>
                </div>



        <!--<?= $site->footer_2()->kirbytext() ?>-->
      </div>
    </div>
     <!-- FOOTER RIGHT -->
    <div class="col-lg col-xs footer-wrapper clearfix">
      <div class="footer-content-3">
        <?= $site->footer_3()->kirbytext() ?>
      </div>
    </div>
  </div>

</footer>


 <div class="footer-end">
  </div>
  <!-- BOTTOM BAR
  <div class="row">
      <div class="bottom-bar-wrapper">
         <p class="footer-copyright pull-right"><?php
             // Parse Kirbytext to support dynamic year,
               // but remove all HTML like paragraph tags:
               echo html::decode($site->copyright()->kirbytext())
             ?></p>
      </div>
  </div>
  -->

</body>
</html>
