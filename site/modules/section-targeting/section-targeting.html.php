<section class="<?= $module->title() ?>">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 d-flex justify-content-around flex-wrap">
        <?php foreach($module->targets()->toStructure() as $item): ?>
            <!-- <a href="<?= $item->link()->html() ?>"> -->
              <div class="col-lg-5 col-md-6 col-sm-8 mt-5 p-5 item<?= $item->empty() ?> ">
                  <div class="item-img">
                  <!-- <figure>
                    <?php
                    $image = $item->target_image()->toFile();
                    // check if the image object exists
                    if($image): ?>
                      <img src="<?= $image->thumb(array('width' => 240))->url() ?>" alt="">
                    <?php endif ?>
                  </figure> -->
                  </div>

                  <div class="target-item-text">
                    <?= $item->target_text()->kirbytext() ?>
                  </div>

                  <button class="btn-claims button" onclick="modalForm()"><?= $item->target_cta()->html() ?></button>

                </div>
              <!-- </a> -->
        <?php endforeach ?>
      </div>

    </div>  <!-- END ROW -->
  </div> <!-- END CONTAINER -->
</section>
