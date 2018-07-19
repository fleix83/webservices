<section class="<?= $module->title() ?>">
  <div class="container">
      <div class="row">
        <div class="col-lg-6">
          			<h2><?= $module->title()->html() ?></h2>
        </div>
      </div>
      <!-- ANGEBOTE STRUCTURED FIELD -->
      <div class="row d-flex justify-content-center">
                <?php foreach($module->angebote()->toStructure() as $angebot): ?>
                      <div class="angebot__box col-lg-3 col-md-6 col-sm-8 col-12 mb-4">
                        <div class="flag"></div>

                        <h3 class="angebot__box--h3"><?= $angebot->title()->html() ?></h3>
                        <p class="<?= $angebot->color() ?> angebot__box--p">
                          <?= $angebot->text()->html() ?>
                        </p>
                        <h3 class="angebot__box_preis--h3"><?= $angebot->preis()->html() ?></h3>
                        <br>
                        <button class="btn btn-hero angebot__box__button" data-toggle="modal" data-target="#modal-angebot">
                          <a href="<?= $angebot->cta_link()->html() ?>"><?= $angebot->cta()->html() ?></a>
                        </button>
                      </div>
                <?php endforeach ?>
      </div>

  </div> <!-- END CONTAINER -->
</section>
