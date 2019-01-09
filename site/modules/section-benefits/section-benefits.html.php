<section class="<?= $module->title() ?>">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 d-flex justify-content-around flex-wrap">
        <?php foreach($module->benefits()->toStructure() as $item): ?>
            <!-- <a href="<?= $item->link()->html() ?>"> -->
              <div class="col-lg-3 col-md-6 col-sm-8 mt-5 <?= $item->empty() ?>">
                  <figure>
                    <?php
                    $image = $item->benefit_image()->toFile();
                    // check if the image object exists
                    if($image): ?>
                      <img src="<?= $image->thumb(array('width' => 240))->url() ?>" alt="">
                    <?php endif ?>
                  </figure>
                  <div class="benefit-item-text">
                    <?= $item->benefit_text()->kirbytext() ?>
                  </div>
                </div>
              <!-- </a> -->
        <?php endforeach ?>
      </div>

    </div>  <!-- END ROW -->
  </div> <!-- END CONTAINER -->
</section>
