<section class="<?= $module->title() ?>">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          			<h2><?= $module->title()->html() ?></h2>
        </div>
      </div>
      <!-- projektE STRUCTURED FIELD -->
      <div class="row d-flex justify-content-center">
                <?php foreach($module->projekte()->toStructure() as $projekt): ?>
                    <a href="<?= $projekt->link()->html() ?>">
                      <div class="projekt__box col-lg-3 col-md-6 col-sm-8 col-12 mb-4">
                          <figure>
                            <?php
                            $image = $projekt->img()->toFile();
                            // check if the image object exists
                            if($image): ?>
                              <img src="<?= $image->thumb(array('width' => 240))->url() ?>" alt="">
                            <?php endif ?>
                          </figure>
                          <h3 class="projekt__box--h3"><?= $projekt->title()->html() ?></h3>
                          <p class="<?= $projekt->color() ?> projekt__box--p"><?= $projekt->kurzbeschreibung()->html() ?></p>
                          <div class="divider"></div>
                          <a href="<?= $projekt->link()->html() ?>">
                          <p class="link"><?= $projekt->linktext()->html() ?></p>
                          <p class="cms"><?= $projekt->cms()->html() ?></p>
                        </a>
                      </div>
                    </a>
                <?php endforeach ?>
      </div>

  </div> <!-- END CONTAINER -->
</section>
