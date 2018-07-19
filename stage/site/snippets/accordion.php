
<!-- ACCORDION SNIPPET -->
    <?php foreach($page->accordion()->toStructure() as $item): ?>
      <button id="acc_header" class="accordion"><?= $item->acc_header()->html() ?><i class="fas fa-chevron-down"></i></button>
      <div class="panel"><p><?= $item->acc_panel()->html() ?></p></div>
    <?php endforeach ?>



<script>
// ACCORDION
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
