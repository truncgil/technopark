<?php 
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR
use Artesaos\SEOTools\Facades\SEOTools;

if(isset($_COOKIE['uid'])) {
    oturumAc();
    $_SESSION['uid'] = $_COOKIE['uid'];
    $_SESSION['user'] =(Object) user();
}
if(getisset("ajax")) {
	?>
@include("admin-ajax.{$_GET['ajax']}")
<?php
	exit();
} ?>
<?php if(getisset("ajax2")) { //blade ajax system
	?>
@include("{$_GET['ajax2']}")
<?php
	exit();
} ?>
@php
use App\Contents;
oturumAc();
if(isset($_GET['l'])) {
app()->setLocale($_GET['l']);
oturum("locale",$_GET['l']);
}
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<title>@yield("title")</title>
	<meta name="title" content="@yield(" title")">
	<meta name="description" content="@yield("description")">
	<meta name="keywords" content="@yield("keywords")">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
	<meta name="revisit-after" content="1 days">
	<meta name="author" content="Trunçgil Teknoloji">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="favicons/images-favicon.png">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{url("assets/css/css-style.css?".rand())}}">
	<link rel="stylesheet" type="text/css" href="{{url("assets/css/css-accordian.css")}}">
	<link rel="stylesheet" href="{{url("assets/css/owl-owl.carousel.min.css")}}">
	<link rel="stylesheet" href="{{url("assets/css/owl-owl.theme.default.min.css")}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap"
		rel="stylesheet">
	<!-- SCRIPTS -->
	<script src="{{url("assets/js/3.3.1-jquery.min.js")}}"></script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
	<!-- NAVBAR -->
	
	@include("layouts.navbar2")
	<!-- SECTION LABEL -->
	<div id="top"></div>


	@yield("content")
	<!-- FOOTER -->
	<div class="footer-section">
		<div class="container footer-container">
			<!-- Footer Column 1 -->
			<div class="col-lg-5 footer-logo">
				<img src="{{url("assets/images/logo.svg")}}">
				<p class="footer-subsection-text">{{e2("Birlikte ileri teknolojilerin yaratılması, geliştirilmesi ve ticarileştirilmesi ile Gaziantep’i ülkemizde en hızlı gelişen teknoloji üssü yapalım.")}}.</p>
			</div>
			<!-- Footer Column 2 -->
			<div class="col-lg-4 footer-subsection">
				<h3 class="footer-subsection-title">{{e2("Adres")}}</h3>
				<p class="footer-subsection-text">
					<a href="mailto:info@gaziantepteknopark.com.tr">info@gaziantepteknopark.com.tr</a><br>
					<a href="#" class="footer-address">Çamtepe Mah. Mahmut Tevfik Atay Bulvarı 4/A Blok No :Z-18</a>
				</p>
			</div>
			<!-- Footer Column 3 -->
			<div class="col-lg-3 footer-subsection">
				<h3 class="footer-subsection-title">{{e2("İletişim")}}</h3>
				<ul class="footer-subsection-list">
					<li>Çamtepe Mah. Mahmut Tevfik Atay Bulvarı 4/A Blok No :Z-18</li>
					<li><a href="tel:+90(342)361 01 18"> 0(342)361 01 18</a></li>
					<li><a href="mailto:info@gaziantepteknopark.com.tr">info@gaziantepteknopark.com.tr</a></li>
				</ul>
			</div>
		</div>
		<div class="container footer-container footer-last">
			<!-- Footer Column 3 -->
			<div class="col-lg-5 footer-logo">
				<div class="footer-social-media-icons-section">
					<a target="_blank" href="https://twitter.com/GantepTeknopark" class="footer-social-media-icon"><i class="fa fa-twitter"></i></a>
					<a target="_blank" href="https://www.instagram.com/gaziantepteknopark/" class="footer-social-media-icon"><i class="fa fa-instagram"></i></a>
					<a target="_blank" href="https://www.facebook.com/gantepteknopark" class="footer-social-media-icon"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://www.linkedin.com/company/gaziantepteknopark/" class="footer-social-media-icon"><i class="fa fa-linkedin"></i></a>
					<a target="_blank" href="https://tr.pinterest.com/gaziantepteknopark/" class="footer-social-media-icon"><i class="fa fa-pinterest"></i></a>
				</div>
			</div>
			<!-- Footer Column 3 -->
			<div class="col-lg-4 footer-subsection d-none">
				<h3 class="footer-subsection-title">Features</h3>
				<ul class="footer-subsection-list">
					<li>Database consolidation</li>
					<li>Social integration</li>
					<li>Customer relations management</li>
				</ul>
			</div>
			<!-- Footer Column 3 -->
			<div id="legals"></div>
			<div class="col-lg-3 footer-subsection">
				<h3 class="footer-subsection-title">{{e2("Faydalı Linkler")}}</h3>
				<ul class="footer-subsection-list">
					<li><a href="{{url("kvkk-aydinlatma-metni")}}">{{e2("KVKK Aydınlatma Metni")}}</a></li>
					<li>
					</li>
					<li class="d-none"><a href="#legal">Terms and Conditions</a></li>
					<li class="d-none"><a href="#legal">Company Details</a></li>
				</ul>
			</div>
			<!-- LEGAL MODALS -->
			<div id="legal" class="legal-modal">
				<div>
					<a href="#legals" title="Close" class="modal-close"></a>
					<h1>Legal notice</h1>
					<p><strong>Place your legal notice, terms or privacy policy in this section so your visitors can
							view them without leaving the page.</strong></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel turpis interdum, suscipit libero
						non, pellentesque nisi. Duis eget varius quam, eget volutpat libero. Quisque sit amet iaculis
						lectus. Sed a consectetur erat, id condimentum nibh. Cras molestie dui vitae finibus convallis.
						Sed pharetra orci in commodo ultrices. Integer dui diam, sagittis a ipsum at, euismod bibendum
						odio. Phasellus blandit leo ut turpis sagittis accumsan. Proin facilisis nisi nec ex suscipit
						cursus. Nulla ac elit quam.</p>
				</div>
			</div>
		</div>
		<!-- FOOTER CREDITS -->
		<div class="container footer-credits">
			<p>&copy; {{date("Y")}} <a href="https://www.gaziantepteknopark.com.tr" target="_blank"
					title="{{e2("Gaziantep Teknopark")}}">{{e2("Gaziantep Teknopark")}}</a>&trade;. {{e2("Tüm hakkı saklıdır")}}.</p>
		</div>
	</div>
	</div>
	<!-- FOOTER SCRIPTS -->
	<script src="{{url("assets/js/3.4.1-jquery.min.js")}}"></script>
	<script src="{{url("assets/js/umd-popper.min.js")}}"></script>
	<script src="{{url("assets/js/js-bootstrap.min.js")}}"></script>
	<script src="{{url("assets/js/js-accordian.js")}}"></script>
	<script src="{{url("assets/js/owl-owl.carousel.js")}}"></script>
	<!-- Header scroll -->
	<script type="text/javascript">
		$(window).scroll(function () {
			if ($(this).scrollTop() > 20) {
				$('#navbar').addClass('header-scrolled');
			} else {
				$('#navbar').removeClass('header-scrolled');
			}
		});
	</script>
	<script>
		$(document).ready(function () {
			$(".logolar").owlCarousel({
				items: 3,
				loop: true,
				nav: true,
				autoplay: true,
				autoplayTimeout: 2000,
				autoplayHoverPause: true,
				responsiveClass: true,
				responsive: {
					0: {
						items: 2
					},
					600: {
						items: 3
					},
					1000: {
						items: 6
					}
				}
			});
			$(".slide-zone").owlCarousel({
				margin: 0,
				loop: true,
				// navText: [ "<img src='images/leftArrow.png'>", "<img src='images/rightArrow.png'>" ],
				responsiveClass: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 4
					}
				},
				dots: true,
				items: 2,
				singleItem: true,
				autoplay: true,
				autoPlaySpeed: 3000,
				autoPlayTimeout: 3000,
				autoplayHoverPause: true
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
		$(".filter").on("keyup", function() {
			var target = $(this).attr("target");
			var value = $(this).val().toLowerCase();
			$(target).filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
		});
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CP9KQF6GPS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CP9KQF6GPS');
</script>
</body>

</html>