<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-around footer-wrapper flex-wrap flex-column-reverse flex-lg-row border">

        <!-- FOOTER LEFT -->
        <div class="col-lg-3">
          <div class="footer-left mt-3">
            <?= $site->footer_1()->kirbytext() ?>
          </div>
        </div>

         <!-- FOOTER CENTER -->
        <div class="col-lg-3">
          <div class="footer-center mt-3">
              <?= $site->footer_2()->kirbytext() ?>
          </div>
        </div>

         <!-- FOOTER RIGHT -->
        <div class="col-lg-3 clearfix">
          <div class="footer-right mt-3">
              <img class="img-brand" src="./content/toggler_black.svg" ?>
              <div class="contact-brand">
                <?= $site->footer_3()->kirbytext() ?>
              </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </footer>


</body>
</html>
