
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="<?= $module->imagesize() ?> <?= $module->justifyImage() ?> reveal">
        <figure>
          <?php
          // images() is custom field
          $image = $module->image();
          // always check if the image exists!
          if($image): ?>
          <img src="<?= $image->url() ?>" class="img-fluid" alt="">
          <?php endif ?>
        </figure>
      </div>
        <div class="col-lg-12 d-flex <?= $module->justify() ?>">
          <div class="col-lg-6">
            <h2 class="section-image--h2"><?= $module->titel()->html() ?></h2>
            <p class="section-image--p"><?= $module->text()->html() ?></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- END CONTAINER -->
</section>


<script>

// var screen = window.innerHeight;
//
// document.querySelector("section").style.height = screen + "px";

function resize()
           {
               var heights = window.innerHeight;
               document.querySelector("section").style.height = heights + "px";
           }
           resize();
           window.onresize = function() {
               resize();
           };
</script>
