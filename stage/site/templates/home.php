<?php snippet('header') ?>

<!-- -- -- MAIN SECTION -- -- -->
<!-- <div class="spacer"></div> -->
<div class="container">
    <div class="row">
        		<div class="col-lg-10 col-sm-12 home mb-4 <?= $page->box() ?>">
        			<h1 class="hero"><?= $page->hero_header()->html() ?></h1>
        			<h3 class="hero"><?= $page->hero_sub()->kirbytext() ?></h3>
              <button type="button" class="btn btn-hero mr-2"><a href="<?= $page->cta_angebot_link()->url() ?>"><?= $page->cta_angebot() ?></a></button>
              <button type="button" class="btn btn-hero"><a href="<?= $page->cta_projekte_link()->url() ?>"><?= $page->cta_projekte() ?></a></button>
            </div>
    </div>
</div> <!-- END CONTAINER -->
<?php snippet('footer') ?>
