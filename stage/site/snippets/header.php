<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>


  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?= $page->description()->html() ?>">
  <?php else: ?>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?php endif ?>

  <?php if($page->keywords() != ''): ?>
  <meta name="keywords" content="<?= $page->keywords()->html() ?>">
  <?php else: ?>
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <?php endif ?>

  <meta name="author" content="<?= $site->author()->html() ?>">






	<!-- JAVASCRIPT & JQUERY -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>

  <!-- JS Librarys -->
  <script src="js/parallaxie.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <?= js('assets/js/granim/dist/granim.min.js') ?>


	<!-- Lightbox http://ashleydw.github.io/lightbox/ -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


	<!-- FONTS & ICONS -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<!-- STYLESHEETS -->
  <?= css('assets/css/bootstrap.css') ?>
  <!-- <?= css('assets/css/custom.css') ?> -->
  <?php snippet('style') ?>
</head>

<!-- BODY WITH INLINE VARIABLE BACKGROUND -->
<?php if($bgimage = $site->background()->toFile()): ?>
<body style="background: url(<?= $bgimage->url() ?>) center top no-repeat;">
<?php endif ?>

<!-- Alert -->
<?php if (!$page->alert()->empty()): ?>
<div class="alert">
	<h2><?= $page->alert()->kirbytext() ?></h2>
	<a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
</div>
<?php endif ?>

<!-- NAVIGATION -->
<?php snippet('menu-overlay') ?>
<!-- END NAVIGATION -->

<!-- TOPBAR
<div id="topbar">
	<div class="mail">
		<i class="fas fa-envelope"></i>&nbsp;&nbsp; <a href="mailto://info@wohngeist.ch">info@wohngeist.ch</a>
	</div>
	<div class="tel">
		<i class="fas fa-phone"></i><a href="tel:+41 61 272 18 18">&nbsp;&nbsp;+41 61 272 18 18</a>
	</div>
</div>
-->

<script>
	$(document).ready(function() {

  $('.alert').hide().delay(750).slideDown(400);

  $('.close_btn').click(function() {
    $('.close_btn').fadeOut(200);
    $('.alert').slideUp(400);
  });

});

// Open Links in new Tab
$('a').each(function() {
  if(this.host !== window.location.host) {
    $(this).attr('target', '_blank');
  }
});
</script>
