		<!-- MENU LARGE -->
		<div class="container">
			<div class="row justify-content-end">
				<div class="nav col-xl-5 col-lg-6 col-md-8 col-sm-10 d-none d-lg-flex">
					<ul>
						<?php foreach($pages->visible() as $item): ?>
							<li class="" "<?= r($item->isOpen(), ' is-active') ?>">
								<h1><a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></h1>
							</li>
						<?php endforeach ?>
					</ul>
					<div class="divider"></div>
					<div class="social col-lg-5 offset-8">
						<i class="fab fa-twitter fa-lg ml-5"></i>
						<i class="fab fa-reddit-alien fa-lg ml-2"></i>
					</div>

				</div>  <!-- END NAV -->



		<!-- Toggler Responsive Nav -->
		<div id="toggler" class="toggler d-lg-none" onclick="openResponsiveNav(); togglerRotate()" >
						<img src="<?= $site->toggler()->toFile()->url() ?>">
		</div>

		<!-- Responsive Nav -->
		<div id="responsiveMenu" class="menu-hidden">
			<ul>
				<?php foreach($pages->visible() as $item): ?>
					<li class="active" "<?= r($item->isOpen(), ' is-active') ?>">
						<h1><a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></h1>
					</li>
				<?php endforeach ?>
			</ul>
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

// Granim
var granimInstance = new Granim({
   element: '#granim-canvas',
   name: 'granim',
   opacity: [1, 0.2],
   states : {
       "default-state": {
           gradients: [
               ['#33ccff', '#F92778'],
               ['#F92778', '#33ccff']
           ]
       }
   }
});

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


</script>
