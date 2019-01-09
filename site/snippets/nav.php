		<!-- MENU LARGE -->
		<div class="container-fluid">
			<div class="row">
				<div class="nav col-xl-12 col-lg-6 col-md-8 col-sm-10 d-none d-lg-flex justify-content-end">

					<div class="col-lg-4">
					<ul class="d-flex">
						<?php foreach($pages->visible() as $item): ?>
							<li class="" "<?= r($item->isOpen(), ' is-active') ?>">
								<h1><a class="nav-item" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></h1>
							</li>
						<?php endforeach ?>
						<li onmouseover="menuContact()">
						</li>
					</ul>
					</div>
				</div>  <!-- END NAV -->
				<div class="topbar">
						<div class="brand">
							<img src="./content/toggler_black.svg" ?>
						</div>
				<div class="crypto">Crypto Accepted</div>
				</div>

			<!-- Toggler Responsive Nav -->
			<div id="toggler" class="toggler d-lg-none" onclick="openResponsiveNav(); togglerRotate()" >
							<img src="<?= $site->toggler()->toFile()->url() ?>">
			</div>

	</div>
</div> <!-- END CONTAINER -->







<!-- OPEN/CLOSE NAV -->
<script>
/* Open */
function openNav() {
	document.getElementById("myNav").style.width = "300px";
}
/* Close */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

// FADE-OUT TOGGLER ON SCROLL NAV
window.onload = function() {myFunctionStart()};
function myFunctionStart() {
document.getElementById("nave").className = "toggleoff";
 }

window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nave").className = "fadein";
    } else {
        document.getElementById("nave").className = "fadeout";
    }
}



// Menu Responsive
function openResponsiveNav() {
	var responsiveMenu = document.getElementById("responsiveMenu");
	responsiveMenu.classList.toggle("menu-visible");
}

function togglerRotate() {
	var toggler = document.getElementById("toggler");
	toggler.classList.toggle("toggler-rotate");
}

function closeResponsiveNav() {
  document.getElementById("responsiveMenu").classList.toggle("menu-visible");
}

// Menu Contact
function menuContact(){
	document.querySelector(".my").classList.toggle("menucontact");
}

</script>
