<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from powerzone.dexignzone.com/xhtml/shortcode-filters.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:07:51 GMT -->
<head>

	<!-- Title -->
	<title>Galerie - UGBD</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="bodybuilding, class, clean, coach, fitness, fitness gym, gym, gym trainer, health, martial arts, personal trainer, sport, sports theme, training, workout, Fitness template, Workout design, Health and wellness, Exercise layout, Fitness app, Gym website, UI components, UX components, Workout routines, Health template, UIUX, creative, HTML, CSS, Sass Integration, HTML Template, Bootstrap, Bootstrap Template, Gym UI Kit, websiite, Website template, Fitness Website Design, Exercise App Design, Gym Interface, Exercise Dashboard, Gym Homepage Template, HTML Gym Template, Responsive Gym Design, responsive, HTML Fitness Components, Workout Program Template, Fitness Studio HTML, Responsive Workout Design, Landing Page Kit, HTML5, HTML/CSS">
	<meta name="description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta property="og:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
	<meta property="og:description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
	<meta name="twitter:description" content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
	<meta name="twitter:image" content="social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/logoUGBD.png">
    <link href="assets/vendor/animate/animate.css" rel="stylesheet">
	<link href="assets/vendor/rangeslider/rangeslider.css" rel="stylesheet">
	<link href="assets/vendor/switcher/switcher.css" rel="stylesheet">
	<link href="assets/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
    <link href="assets/vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">

	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" href="assets/css/skin/skin-3.css">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

</head>
<body id="bg" class="data-typography-1">
<div id="loading-area" class="loading-page-1">
	<div class="loading-inner">
	<span class="text-primary">U</span>
		<span class="text-primary">G</span>
		<span class="text-primary">B</span>
		<span class="text-primary">D</span>
		<span class="text-white">G</span>
		<span class="text-white">R</span>
		<span class="text-white">I</span>
		<span class="text-white">G</span>
		<span class="text-white">N</span>
		<span class="text-white">Y</span>
	</div>
</div>
<div class="page-wraper">

		<!-- Header -->
		@include('vitrine.header')
	<!-- Header -->

	<div class="page-content bg-white">


		<!-- Banner  -->
		<div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
			<div class="banner-gradient"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="dz-bnr-inr-entry">
							<h1>Galerie</h1>
							<!-- Breadcrumb Row -->
							<nav aria-label="breadcrumb" class="breadcrumb-row">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="/">Accueil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Galerie</li>
								</ul>
							</nav>
							<!-- Breadcrumb Row End -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner-media">
							<img src="assets/images/banner/pic2.png" alt="/">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Gallery-->
		<section class="content-inner-1">
			<div class="container">
				<div class="text-center m-b30">
					<h3 class="title m-b30">Quelques images de nos événements</h3>
				</div>
				<div class="clearfix" id="lightgallery5">
					<ul id="masonry5" class="dlab-gallery-listing gallery-grid-8 sp10 gallery text-center">
                        @foreach($images as $image)
						    <li class="card-container m-b10 col-lg-2 Pull-up">
							    <a href="{{ asset('storage/' . $image->photo) }}" data-src="{{ asset('storage/' . $image->photo) }}" class="dz-media lg-item">
								    <img src="{{ asset('storage/' . $image->photo) }}"  alt="{{ $image->titre }}" width="800" height="650">
							    </a>
						    </li>
                        @endforeach
					</ul>
				</div>
                <!-- Liens de pagination -->
                <div class="pagination-wrapper">
                    {{ $images->links() }}
                </div>
			</div>
		</section>



		@include('vitrine.footer')

	<div class="scroltop-progress scroltop-primary active-progress">
		<svg width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 24.3299px;"></path>
		</svg>
	</div>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->


<script src="assets/vendor/wow/wow.js"></script><!-- WOW.JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
<script src="assets/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="assets/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="assets/vendor/masonry/isotope.pkgd.min.js"></script><!-- MASONRY -->
<script src="assets/vendor/lightgallery/dist/lightgallery.min.js"></script>
<script src="assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
<script src="assets/js/dz.carousel.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.js"></script><!-- CUSTOM JS -->
</body>

<!-- Mirrored from powerzone.dexignzone.com/xhtml/shortcode-filters.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 15:08:05 GMT -->
</html>
