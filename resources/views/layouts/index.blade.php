<!DOCTYPE html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bliss || Page d'atterrissage Agence Digitale Bootstrap 5</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.svg"/>
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="/assets/css/bootstrap-5.0.0-beta2.min.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <style>
      .brand-text {
        font-size: 26px;
        font-weight: 700;
        color: #212529;
        letter-spacing: -0.5px;
      }
      .brand-text span {
        color: #4E6EF1;
      }
    </style>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->
		

    <!-- ========================= header start ========================= -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand brand-text" href="/">DevPro<span>Mindset</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Tarifs</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Équipe</a>
                    </li>
                    <li class="nav-item">
                      <a class="" href="#0">Contact</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->

    <main>

      @yield('content') 
      
    </main>  


    <!-- ========================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				<div class="widget-wrapper">
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<div class="logo mb-35">
									<a href="index.html"> <img src="/assets/img/logo/logo.svg" alt=""> </a>
								</div>
								<p class="desc mb-35">Nous sommes une équipe de designers experts. Nous avons de nombreux designers et développeurs. Si vous avez un projet, vous pouvez nous engager pour créer un site web.</p>
								<ul class="socials">
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
									</li>
									<li>
										<a href="jvascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-xl-2 offset-xl-1 col-md-5 offset-md-1 col-sm-6">
							<div class="footer-widget">
								<h3>Liens</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Accueil</a> </li>
									<li> <a href="javascript:void(0)">À propos</a> </li>
									<li> <a href="javascript:void(0)">Services</a> </li>
									<li> <a href="javascript:void(0)">Portfolio</a> </li>
									<li> <a href="javascript:void(0)">Tarifs</a> </li>
									<li> <a href="javascript:void(0)">Équipe</a> </li>
									<li> <a href="javascript:void(0)">Contact</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 col-sm-6">
							<div class="footer-widget">
								<h3>Services</h3>
								<ul class="links">
									<li> <a href="javascript:void(0)">Design graphique</a> </li>
									<li> <a href="javascript:void(0)">Conception de sites web</a> </li>
									<li> <a href="javascript:void(0)">Design visuel</a> </li>
									<li> <a href="javascript:void(0)">Design de produit</a> </li>
									<li> <a href="javascript:void(0)">Design UI/UX</a> </li>
									<li> <a href="javascript:void(0)">Développement web</a> </li>
									<li> <a href="javascript:void(0)">Création d'entreprise</a> </li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-md-6">
							<div class="footer-widget">
								<h3>Contact</h3>
								<ul>
									<li>+003894372632</li>
									<li>helldesigner@gmail.ccom</li>
									<li>États-Unis d'Amérique</li>
								</ul>
								<div class="contact_map" style="width: 100%; height: 150px; margin-top: 25px;">
									<div class="gmap_canvas">
										<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="width: 100%;"></iframe>
									</div>
									</div>
							</div>
						</div>

					</div>
				</div>

				<div class="copy-right">
					<p>Conçu et développé par <a href="https://uideck.com" rel="nofollow" target="_blank"> UIdeck </a>. Distribué par <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
				</div>

			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/js/bootstrap-5.0.0-beta2.min.js"></script>
    <script src="/assets/js/count-up.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/polifill.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>
