<?php snippet('header-start') ?>

  <main class="main" role="main">

    <!-- <header class="wrap">
      <!-- <h1><?= $page->title()->html() ?></h1> -->
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div> -->
		<div class="intro text">
        <?= $page->modules() ?>
      </div>

    </header>

    <!-- <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div> -->

  </main>
