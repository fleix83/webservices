<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

  <!-- JS Librarys -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <?= js('assets/js/granim/dist/granim.min.js') ?>
  <!-- <?= js('assets/js/bootstrap.js') ?> -->
  <script src="https://unpkg.com/wired-elements@latest/dist/wired-elements.bundled.min.js"></script>

	<!-- Lightbox http://ashleydw.github.io/lightbox/ -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


	<!-- FONTS & ICONS -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- STYLESHEETS -->
  <?= css('assets/css/bootstrap.css') ?>
  <?= css('assets/css/custom.css') ?>

</head>

<!-- BODY WITH INLINE VARIABLE BACKGROUND -->
<?php if($bgimage = $site->background()->toFile()): ?>
<body style="background: url(<?= $bgimage->url() ?>) top center no-repeat;" onclick="menuContact()">
<?php endif ?>

<!-- Alert -->
<?php if (!$page->alert()->empty()): ?>
<div class="alert">
	<h2><?= $page->alert()->kirbytext() ?></h2>
	<a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
</div>
<?php endif ?>

<!-- CORNER LEFT IMAGE Test -->
<div class="container-fluid m-0 p-0">
  <div class="row d-flex justify-content-between ">
    <div class="col-lg-4">
      <div id="corner">
        <img src="/webservices/content/annie-spratt_corner_medium.jpg" alt="Weissheimer webservices" class="img-fluid">
      </div>
    </div>

<div class="col-lg-5">
  <!-- Contact Block
  <div class="col-lg-12 col-10 contact d-lg-block d-none">
    <ul class="contact">
      <li class="email"><h2><?= $site->contact_email()->text() ?></h2></li>
      <li><h2 class="tel"><?= $site->contact_tel()->text() ?></h2></li>
    <ul>
  </div> -->

  <!-- Hero Block -->
  <div class="col-lg-10 col-10 header">
        <h2><?= $site->header()->kirbytext() ?></h2>
  </div>
</div>


  </div>
</div>




<!-- NAVIGATION
<?php snippet('nav-start') ?> -->
<!-- END NAVIGATION -->
<div class="test">
<!-- <p><?= $site->background()->toFile() ?></p> -->
</div>

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
