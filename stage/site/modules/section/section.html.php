<?php if($module->switchit()->bool()): ?>
<section class="<?= $module->background() ?>">
  else
  <section style="background: url(<?= $site->background()->url() ?>) no-repeat;">
<?php endif ?>

<section class="<?= $module->background() ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <?= $module->titel()->kirbytext()?>
      </div>
      <div class="col-lg-4">
          <?= $module->text()->kirbytext() ?>
      </div>
    </div>
  </div>
</section>
