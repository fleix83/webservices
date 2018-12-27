<section class="<?= $module->title() ?>">
  <div class="container">
      <div class="row">

              <div class="col-lg-5 col-md-6 col-sm-8 col-8 offset-lg-1 mt-5 claims">
                  <p class="claim"><?= $module->hero_claim()->html() ?></p>
                  <button class="btn-claims button" onclick="modalForm()"><?= $module->cta()->html() ?></button>
                </div>

              </div>
              <div class="col-lg-10 col-sm-12 offset-lg-1 mt-5  mb-4">
          			<h1 class="hero "><?= $module->hero_header()->html() ?></h1>
          			<h3 class="hero"><?= $module->hero_sub()->kirbytext() ?></h3>
              </div>
      </div>
  </div> <!-- END CONTAINER -->
</section>

<div id="modal">
  <div class="form-modal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum nobis pariatur harum enim rerum modi? Blanditiis obcaecati natus vero fugiat provident, repellat, delectus debitis minima tempora, mollitia sequi, tempore aliquam.</div>
</div>


<script>

function modalForm(){
  document.querySelector("#modal").classList.toggle("unveil");
}
</script>
