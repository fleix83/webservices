<div class="container-fluid">
  <div class="row">
    <?php foreach($module->teaser()->toStructure() as $item): ?>
    <div class="teaser col-lg-12">

      <div id="tsr-image" class="tsr_image col-lg-4 p-0">
        <figure>
          <?php
          // images() is custom field
          $image = $item->tsr_image()->toFile();
          // always check if the image exists!
          if($image): ?>
          <img src="<?= $image->url() ?>" class="img-fluid" alt="">
          <?php endif ?>
        </figure>
      </div>

      <div class="tsr_content col-lg-6">
        <h2><?= $item->tsr_titel()->html() ?></h2>
        <h5><?= $item->tsr_text()->html() ?></h5>
        <button class="btn btn-hero" onclick="changeImage()"><a href="<?= $item->tsr_cta_link()->url() ?>"><?= $item->tsr_cta()->html() ?></a></button>
        <button onclick="changeImage()">Press</button>
      </div>

    </div>
    <?php endforeach ?>
  </div> <!-- END ROW -->
</div> <!-- END CONTAINER -->
