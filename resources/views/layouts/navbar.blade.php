<nav id="navbar" class="navbar fixed-top navbar-expand-xl navbar-header navbar-mobile">
		
		 
		<div class="navbar-container container">
			<!-- LOGO -->
			<div class="navbar-brand">
				<a class="navbar-brand-logo logo" href="./">
					<img src="{{url("assets/images/logo.svg")}}">
				</a>
				<a class="navbar-brand-logo logo-scroll" href="./">
					<img src="{{url("assets/images/logo.svg")}}">
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">

				<ul class="navbar-nav menu-navbar-nav main-menu">
					<li class="nav-item">
						<a class="nav-link" href="./">
							<p class="nav-link-menu">{{e2("Anasayfa")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kurumsal">
							<p class="nav-link-menu">{{e2("Kurumsal")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="firma-rehberi">
							<p class="nav-link-menu">{{e2("Firma Rehberi")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="duyurular">
							<p class="nav-link-menu">{{e2("Duyurular")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tesvikler">
							<p class="nav-link-menu">{{e2("Teşvikler")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kariyer">
							<p class="nav-link-menu">{{e2("Kariyer")}}</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="iletisim">
							<p class="nav-link-menu">{{e2("İletişim")}}</p>
						</a>
					</li>
					<li class="nav-item show-mobile">
						<a class="nav-link" href="https://portal.gaziantepteknopark.com.tr">
							<p class="nav-link-menu">{{e2("Portal Giriş")}}</p>
						</a>
						
					</li>
					<li class="nav-item hidden-mobile">
						<div class="dropdown show">
							<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{e2("Dil Değiştir")}}
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="?l=tr">{{e2("Türkçe")}}</a>
								<a class="dropdown-item" href="?l=en">{{e2("English")}}</a>
								<a class="dropdown-item" href="?l=ar">{{e2("عربى")}}</a>
							</div>
						</div>
					</li> 
				</ul>
				<ul class="navbar-nav hidden-mobile">
					
					<li class="nav-item">
						<a class="nav-link learn-more-btn btn-extra-header"
							href="{{url("admin")}}">{{e2("Firma Girişi")}}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link learn-more-btn btn-header" target="_blank"
							href="https://portal.gaziantepteknopark.com.tr">{{e2("Portal Giriş")}}</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>