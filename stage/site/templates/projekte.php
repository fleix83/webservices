<?php snippet('header') ?>

<!-- -- -- MAIN SECTION -- -- -->
<div class="container">
    <div class="row">
        		<div class="col-lg-10 col-sm-12 main mb-4">
        			<h2><?= $page->intro()->html() ?></h2>
        			<p><?= $page->text()->html() ?></p>
        		</div>
    </div>
</div>

<!-- Teaser structured field -->
<div class="container-fluid">
  <div class="row">
    <?php foreach($page->teaser()->toStructure() as $item): ?>
    <div class="teaser col-lg-12">

      <div id="tsr-image" class="tsr_image col-lg-4">
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


<!-- Table structured field -->
<div class="container">
  <div class="row">
    <div class="col-lg-6 table">
      <table>
        <!-- TABLE HEADER with ->limit(1) method -->
        <?php foreach($page->table()->toStructure()->limit(1) as $item): ?>
          <tr>
            <th><?= $item->col_1()->html() ?></th>
            <th><?= $item->col_2()->html() ?></th>
            <th><?= $item->col_3()->html() ?></th>
            <th><?= $item->col_4()->html() ?></th>
          </tr>
        <?php endforeach ?>
        <!-- TABLE ROWS without TABLE HEADER ->offset(1) -->
        <?php foreach($page->table()->toStructure()->offset(1) as $item): ?>
          <tr>
            <td><?= $item->col_1()->html() ?></td>
            <td><?= $item->col_2()->html() ?></td>
            <td><?= $item->col_3()->html() ?></td>
            <td><?= $item->col_4()->html() ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div> <!-- END ROW -->
</div> <!-- END CONTAINER -->

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <?php snippet('accordion')?>
    </div>
  </div>
</div>


<?php $page->modules() ?>




<?php snippet('footer') ?>





<script>
function changeImage(){

  document.getElementById("tsr-image").classList.toggle("image-right");
}

// Scroll Reveal JS
window.sr = ScrollReveal({ reset: true });
sr.reveal('.teaser', { duration: 300 });
sr.reveal('.table', { duration: 300 });
sr.reveal('.bordeaux', { duration: 300 });
sr.reveal('.marine', { duration: 300 });
</script>
