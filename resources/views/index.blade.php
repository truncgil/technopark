<?php use App\Contents; ?>

@extends('layouts.app')

@section("title","Gaziantep Teknopark")

<?php //yonlendir("loginhtdedwqa"); ?>

@section('content')


<style>
	
</style>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<div class="wrapper">
	<script src="{{url("assets/js/particles.min.js")}}"></script>
	<script>
		particlesJS.load('particles-js', 'particles', function () {
			console.log('callback - particles.js config loaded');
		});

	</script>
	<div class="container ">
		<div class="p-5 users ">

		
			<div class="row  text-center">
				<div class="col-md-4 mb-1">
					<div class="testimonials-card">
						<a href="">
							<span class="material-symbols-outlined">
								engineering
							</span>
							<h2>{{e2("Girişimciyim")}}</h2>
						</a>
					</div	>

				</div>
				<div class="col-md-4 mb-1">
					<div class="testimonials-card">
						<a href="">
							<span class="material-symbols-outlined">
								school
							</span>
							<h2>{{e2("Akademisyenim")}}</h2>
						</a>
					</div	>

				</div>
				<div class="col-md-4 mb-1">
					<div class="testimonials-card">
						<a href="">
							<span class="material-symbols-outlined">
								person
							</span>
							<h2>{{e2("Öğrenciyim")}}</h2>
						</a>
					</div	>

				</div>
			</div>
			</div>
	</div>
	<style>
		.material-symbols-outlined {
			font-size:100px !important;
		}
		.users h2 {
			font-size:20px;
		}
	</style>
	<div class="slider d-none">
		<div class="owl-carousel owl-theme slide-zone">
			<?php $slider = db("contents")->where("type","Slider")->orderBy("s","ASC")->get();
				foreach($slider AS $s) {
					 ?>
			<a href="{{$s->slug}}">
				<div class="img" style="background:url('{{picture($s->cover,"original")}}');background-size:contain !important;">
					<div class="title">
						{{$s->title}}

					</div>
				</div>

			</a>

			<?php 
				} ?>

		</div>
		<!-- <div id="particles-js"></div> -->
	</div>


	<!-- HEADER BOTTOM -->
	<div class="header-bottom">
		<div class="container header-bottom-container">
			<div class="col-md-12 header-title-section">
				<h2 class="header-bottom-title d-none" ></h2>
			</div>


			<div class="header-slider">
				<div class="owl-carousel owl-theme logolar header-slider-section">
					<?php $logolar = db("contents")->where("slug","logolar")->first();
					$logolar = explode(",",$logolar->files);
							foreach($logolar AS $l) {
							?>
					<div class="item header-bottom-logo-section">
						<img src="{{url($l)}}">
					</div>
					<?php } ?>

				</div>
			</div>


		</div>
	</div>
	<!-- SECTION LABEL -->
	<div id="about"></div>
	<!-- ABOUT -->
	<div class="about-section">
		<div class="container about-container">
			<div class="col-md-12 features-title-section">
				<p class="features-subtitle">{{e2("BİLGİ DOLU ŞİRKETLER VE BİLGİ DOLU İNSANLAR BURADA")}}</p>
				<h2 class="features-title">{{e2("Gaziantep Teknopark'ta Yer Almak...")}}</h2>
			</div>
			<?php $c = c("section-1") ?>
			<div class="col-md-6 about-title-section">
				<p class="about-number">1</p>
				<h2 class="about-title">{{e2($c->title)}}</h2>
				<p class="about-text"><?php echo e2(short_desc($c->html,300)) ?></p>
				<div class="learn-more-btn-section mt-5">
					<a class="nav-link learn-more-btn d-none" href="#innovate">Find out more</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<p class="about-text">
					<img src="{{$c->files}}">
				</p>
			</div>
		</div>
	</div>
	<!-- SECTION LABEL -->
	<div id="innovate"></div>
	<!-- INNOVATE -->
	<?php $c = c("section-2") ?>
	<div class="innovate-section">
		<div class="container innovate-container">
			<div class="col-md-5 innovate-title-section">
				<div class="innovate-header-img">
					<img src="{{$c->files}}">
				</div>
			</div>
			<div class="col-md-6 offset-1 col-sm-12">
				<p class="innovate-number">2</p>
				<h2 class="innovate-title">{{e2($c->title)}}</h2>
				<p class="innovate-text"><?php echo e2(short_desc($c->html,300)) ?></p>
				<div class="learn-more-btn-section mt-5">
					<a class="nav-link learn-more-btn btn-header d-none" href="#video">Learn more</a>
				</div>
			</div>
		</div>
	</div>

	<!-- SECTION LABEL -->
	<div id="prevideo"></div>
	<!-- INNOVATE -->
	<div class="prevideo-section">
		<div class="container prevideo-container">
		</div>
	</div>
	<!-- SECTION LABEL -->
	<div id="video"></div>
	<!-- VIDEO -->
	<?php $c = c("section-3") ?>
	<div class="video-section">
		<div class="container video-container" style="background:url('{{$c->files}}');    background-repeat: no-repeat;
    background-position: 272px 0px;    padding: 140px 75px;">
			<img src="">
			<div class="col-md-6 video-title-section">
				<p class="video-number">3</p>
				<h2 class="video-title">{{e2($c->title)}}</h2>
				<p class="innovate-text"><?php echo e2(short_desc($c->html,300)) ?></p>

			</div>
			<div class="col-md-5 offset-1 col-sm-12">
				<div class="video-header-img">

				</div>
			</div>
		</div>
	</div>
	<!-- SECTION LABEL -->
	<div id="stats"></div>
	<!-- STATS SECTION -->
	<div class="stats-section">
		<div class="container stats-container p-0">
			<div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
				<div class="stats-card">
					<h2>163.138</h2>
					<p>{{e2("Metre Kare Faaliyet Alanı")}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
				<div class="stats-card">
					<h2>9200</h2>
					<p>{{e2("Metre Kare Kapalı Alan")}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
				<div class="stats-card">
					<h2>4</h2>
					<p>{{e2("Adet Blok")}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 stats-card-section">
				<div class="stats-card">
					<h2>1750</h2>
					<p>{{e2("Metre Kare Montaj Atölyesi")}}</p>
				</div>
			</div>
		</div>
	</div>
	<!-- SECTION LABEL -->

	<!-- SECTION LABEL -->
	<div id="duyurular"></div>
	<!-- TESTIMONIALS -->
	<div class="testimonials-section">
		<div class="container testimonials-container">
			<div class="col-md-12 testimonials-title-section">

				<h2 class="testimonials-title">{{e2("Duyurular")}}</h2>
			</div>
			<?php $duyurular = db("contents")->where("type","Duyurular")
					->orderBy("s","ASC")
					->take(10)
					->get();
					 ?>
			<?php 
					$k=0;
					foreach($duyurular AS $d) {
					
						?>
			<?php if($k%2==0) {
 ?>

			<div class="col-md-4">
				<a href="{{$d->slug}}">
					<div class="testimonials-img">
						<img src="{{picture($d->cover)}}">
					</div>
				</a>
			</div>
			<div class="col-md-7 offset-md-1">
				<a href="{{$d->slug}}">
					<div class="testimonials-card">
						<h3>{{e2($d->title)}}</h3>
						<p class="testimonials-role">{{e2($d->kid)}}</p>
						<p class="testimonials-text">{{e2(short_desc($d->html))}}</p>

				</a>
			</div>

		</div>
		<div class="col-md-12">
			<div class="testimonials-divider"></div>
		</div>

		<?php 	
						} ?>

		<!-- Second Row -->

		<?php if($k%2!=0) {
 ?>
		<div class="col-md-7">
			<a href="{{$d->slug}}">
				<div class="testimonials-card">
					<h3>{{e2($d->title)}}</h3>
					<p class="testimonials-role">{{e2($d->kid)}}</p>
					<p class="testimonials-text">{{e2(short_desc($d->html))}}</p>

			</a>
		</div>
	</div>
	<div class="col-md-4 offset-md-1">
		<a href="{{$d->slug}}">
			<div class="testimonials-img">
				<img src="{{picture($d->cover)}}">
			</div>
		</a>
	</div>
	<div class="col-md-12">
		<div class="testimonials-divider"></div>
	</div>
	<?php } ?>
	<?php $k++; } ?>
</div>
</div>
<!-- SECTION LABEL -->
<div id="clients"></div>
<!-- SHOWCASE -->

<!-- SECTION LABEL -->
<div id="faq"></div>
<!-- FAQ -->
<div class="faq-section">
	<div class="container faq-container">
		<div class="col-md-12 faq-title-section">
			<p class="faq-subtitle">{{e2("Sıkça sorulan sorular")}}</p>
			<h2 class="faq-title">{{e2("Size nasıl yardımcı olabiliriz?")}}</h2>
		</div>
		<div class="col-md-8">
			<div class="faq-accordion">
				<button class="accordion">
					{{e2("Gaziantep Teknopark'a Kimler Başvurabilir?")}}
				</button>
				<div class="panel">
					<p>
						{{e2("Gaziantep Teknopark’a, 4691 Sayılı Yasada Da Özellikleri Belirtilen Ar-Ge, Yazılım Ve Ya Tasarım Faaliyetleri Yürüten Gerçek Ve Tüzel Kişiler Başvuruda Bulunabilir. Bunlar Dışında, Teknoparkta Yer Alan Firmalara Destek Ve Danışmanlık Hizmetleri Sunabilecek Kuruluşlar Da (Banka, Kargo, Mali Müşavirlik Ve Hukuk Büroları, V.B.) Yönetici Şirket'in Uygun Görmesi Durumunda Teknoparkta Yer Alabilir.")}}
					</p>
				</div>
				<button class="accordion">
					{{e2("Gaziantep Teknopark'a Nasıl Başvurulur")}}
				</button>
				<div class="panel">
					<p>
						{{e2("Başvuru portal.gaziantepteknopark.com.tr Adresinden Online Olarak Yapılır.")}}
						<a href="https://portal.gaziantepteknopark.com.tr" target="_blank"
							class="btn btn-success">{{e2("Başvuru yapmak için tıklayınız")}}</a>
					</p>
				</div>
				<button class="accordion">
					{{e2("Gaziantep Teknopark'a Yapılacak Başvurular Ücretli Midir?")}}
				</button>
				<div class="panel">
					<p>
						{{e2("Başvuru Projelerinin Hakem Heyeti Tarafından İncelenebilmesi İçin Bir Ön Başvuru Ücreti Alınmaktadır.")}}  <br>
						İlk Başvuru ücreti 1.500 TL  <br>
			<hr>
						Hesap bilgilerimiz <br>
						GAZİANTEP TEKNOLOJİ GELİŞTİRME BÖLGESİ <br>
							KURUCU VE İŞLETİCİ A.Ş. 	 <br>
							Halk Bankası <br>
							HESAP NO : 1338-10100095  <br>
							IBAN NO : TR72 0001 2001 3380 0010 1000 95  <br>
							
					</p>
				</div>

			</div>
		</div>
		<div class="col-md-4">
			<p class="faq-text">
				<img src="assets/images/images-faq.png" width="100%">
			</p>
		</div>
	</div>
</div>
<!-- SECTION LABEL -->
<div id="contact"></div>
<!-- CONTACT -->
<div class="contact-section">
	<div class="container contact-container">
		<div class="col-md-9 contact-title-section">
			<h2 class="contact-title">Projeleriniz için teşvikler hakkında bilgi mi almak istiyorsunuz. Hemen teşvikler sayfamızı ziyaret ediniz.</h2>
		</div>
		<div class="col-md-3">
			<div class="learn-more-btn-section">
				<a class="nav-link learn-more-btn btn-header w-100" href="{{url("tesvikler")}}">Teşviklerimiz</a>
			</div>
		</div>
	</div>
</div>




@endsection
