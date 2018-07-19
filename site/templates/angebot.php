<?php snippet('header') ?>

<!-- -- -- MAIN SECTION -- -- -->

<?php if($bgimage = $page->background_angebot()->toFile()): ?>
<div style="background: url(<?= $bgimage->url() ?>);">
<?php endif ?>
<div class="container">
      <div class="row">
          		<div class="col-lg-10 col-sm-12 mb-4 mt-5">
          			<h1><?= $page->intro()->html() ?></h1>
          			<p><?= $page->text()->kirbytext() ?></p>
          		</div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <?php snippet('accordion') ?>
          </div>
        </div>
      </div>


<!-- ANGEBOTE STRUCTURED FIELD -->
      <div class="row">
                <?php foreach($page->angebote()->toStructure() as $item): ?>
                      <div class="angebot__box col-lg col-md-6 col-sm-6 mb-4">
                      <div class="flag"></div>

                      <h3 class="angebot__box--h3"><?= $item->title()->html() ?></h3>
                      <p class="<?= $item->color() ?> angebot__box--p">
                        <?= $item->text()->html() ?>
                      </p>
                      <h3 class="angebot__box_preis--h3"><?= $item->preis()->html() ?></h3>
                      <br>
                      <button class=" btn btn-hero" data-toggle="modal" data-target="#modal-angebot">
                        <a href="<?= $item->cta_link()->html() ?>"><?= $item->cta()->html() ?></a>
                      </button>
                    </div>
                <?php endforeach ?>
        </div>
                  <!-- MODAL -->
                  <div class="row">
                      <div id="modal-angebot" class="col-lg-12 modal">
                        <button type="button" class="close m-5" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          <div class="inner">
                              <h2>Modal</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                              </p>
                          </div>
                      </div>
                  </div>

</div> <!-- END CONTAINER -->
</div>




<?php snippet('footer') ?>
