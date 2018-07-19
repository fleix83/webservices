<nav class="navbar navbar-expand-lg navbar-light">				  
	
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="navbar-brand">
		<a class="navbar-brand" href="#"><img src="./assets/images/logo_2.gif" ?></a>
		</div>
	
	<div class="collapse navbar-collapse justify-content-center" id="navbarNav">	
			<ul class="navbar-nav">
				<?php foreach($pages->visible() as $item): ?>
					<li class="nav-item active" "<?= r($item->isOpen(), ' is-active') ?>">
						<a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
					</li>
				<?php endforeach ?>
			</ul>
	</div>

</nav>





<!-- NAVIGATION OHNE BOOTSTRAP 

 <ul class="nav justify-content-center">
    <?php foreach($pages->visible() as $item): ?>
    <li class="nav-item" "<?= r($item->isOpen(), ' is-active') ?>">
      <a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
	<li class="nav-link"><a href="#">+</a></li>
  </ul> -->