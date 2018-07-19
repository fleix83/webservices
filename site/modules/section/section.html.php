
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



<script>

// var screen = window.innerHeight;
//
// document.querySelector("section").style.height = screen + "px";

function resize()
           {
               var heights = window.innerHeight;
               document.querySelector("section").style.height = heights + "px";
           }
           resize();
           window.onresize = function() {
               resize();
           };
</script>
