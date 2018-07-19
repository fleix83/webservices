<section class="<?= $module->title() ?>
  <div class="container">
      <div class="row">
          		<div class="col-lg-10 col-sm-12 heroelements mb-4 <?= $page->box() ?>">
          			<h1 class="hero"><?= $module->hero_header()->html() ?></h1>
          			<h3 class="hero"><?= $module->hero_sub()->kirbytext() ?></h3>
                <button type="button" class="btn btn-hero mr-2"><a href="<?= $module->cta_angebot_link()->url() ?>"><?= $module->cta_angebot() ?></a></button>
                <button type="button" class="btn btn-hero"><a href="<?= $module->cta_projekte_link()->url() ?>"><?= $module->cta_projekte() ?></a></button>
              </div>
      </div>
  </div> <!-- END CONTAINER -->
</section>
