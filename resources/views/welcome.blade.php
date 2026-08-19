@extends('layouts.index')

@section('content')
<!-- ========================= hero-section start ========================= -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
							<span class="wow fadeInLeft" data-wow-delay=".2s">Bienvenue chez DevPro Mindset</span>
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
								Votre agence digitale pour un design UI/UX et web qui fait la différence.
							</h1>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                Design UI/UX, conception web, design graphique et identité de marque : nous accompagnons votre projet de A à Z pour donner vie à une expérience digitale à la hauteur de votre ambition.
              </p>
							<a href="#service" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Découvrir nos services</a>
            </div>
					</div>
					<div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img class="img-fluid rounded-3" src="https://images.unsplash.com/photo-1681164315051-add1906a9b07?q=80&w=839&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
						</div>
					</div>
        </div>
			</div>
    </section>
		<!-- ========================= hero-section end ========================= -->

		<!-- ========================= client-logo-section start ========================= -->
		<section class="client-logo-section pt-60 pb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="/assets/img/client-logo/lineicons.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="/assets/img/client-logo/uideck.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="/assets/img/client-logo/pagebulb.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-logo text-center">
							<img src="/assets/img/client-logo/graygrids.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= client-logo-section end ========================= -->

		<!-- ========================= about-section start ========================= -->
		<section id="about" class="about-section pt-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="about-img mb-50">
							<img src="/assets/img/about/about-img.svg" alt="about">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content mb-50">
							<div class="section-title mb-50">
								<h1 class="mb-25">En savoir plus sur notre agence digitale</h1>
								<p>DevPro Mindset accompagne les entreprises et entrepreneurs dans la création de leur présence digitale. De la conception UI/UX au développement web, en passant par le design graphique et l'identité de marque, nous transformons vos idées en expériences digitales concrètes et impactantes.</p>
							</div>
							<div class="accordion pb-15" id="accordionExample">
								<div class="single-faq">
									<button class="w-100 text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Quels services proposons-nous ?
									</button>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Nous proposons du design UI/UX, de la conception de sites web, du design graphique ainsi que la création d'identité de marque, avec un accompagnement personnalisé à chaque étape de votre projet.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										De quoi ai-je besoin pour démarrer un design ?
									</button>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Il vous suffit de nous exposer votre vision, vos objectifs et vos contraintes : nous nous chargeons d'établir un cahier des charges clair et de vous proposer les premières pistes créatives.
										</div>
									</div>
								</div>
								<div class="single-faq">
									<button class="w-100 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Quel est notre processus de design ?
									</button>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="faq-content">
											Notre processus se déroule en quatre étapes : découverte de votre projet, recherche et conception créative, réalisation avec allers-retours réguliers, puis livraison et accompagnement au lancement.
										</div>
									</div>
								</div>
							</div>
							<a href="javascript:void(0)" class="main-btn btn-hover">Voir plus</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= about-section end ========================= -->

		<!-- ========================= service-section start ========================= -->
		<section id="service" class="service-section img-bg pt-100 pb-100 mt-150">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10">
						<div class="section-title text-center mb-50">
							<h1>Nos services</h1>
							<p>Des solutions digitales complètes pensées pour donner à votre marque une présence forte et cohérente, du concept jusqu'à la mise en ligne.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-1">
								<i class="lni lni-layers"></i>
							</div>
							<div class="content">
								<h3>Design UI/UX</h3>
								<p>Des interfaces intuitives et esthétiques pensées pour offrir la meilleure expérience possible à vos utilisateurs.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-2">
								<i class="lni lni-code-alt"></i>
							</div>
							<div class="content">
								<h3>Conception web</h3>
								<p>Des sites web modernes, performants et responsives, développés sur mesure pour répondre à vos objectifs.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-3">
								<i class="lni lni-pallet"></i>
							</div>
							<div class="content">
								<h3>Design graphique</h3>
								<p>Des créations visuelles percutantes : supports imprimés, visuels réseaux sociaux et éléments graphiques pour votre communication.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="single-service">
							<div class="icon color-4">
								<i class="lni lni-vector"></i>
							</div>
							<div class="content">
								<h3>Design de marque</h3>
								<p>Une identité de marque forte et cohérente : logo, charte graphique et univers visuel qui vous démarquent durablement.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="view-all-btn text-center pt-30">
					<a href="javascript:void(0)" class="main-btn btn-hover">Voir tous les services</a>
				</div>

			</div>
		</section>
		<!-- ========================= service-section end ========================= -->

		<!-- ========================= counter-up-section start ========================= -->
		<section class="counter-up-section pt-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="counter-up-content mb-50">
							<div class="section-title mb-40">
								<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Pourquoi sommes-nous les meilleurs, pourquoi nous engager ?</h1>
								<p class="wow fadeInUp" data-wow-delay=".4s">Une équipe passionnée, une approche centrée sur vos objectifs et un savoir-faire éprouvé en design digital : voici ce qui nous distingue à chaque projet.</p>
							</div>
							<div class="counter-up-wrapper">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-1">
												<i class="lni lni-emoji-smile"></i>
											</div>
											<div class="content">
												<h1 id="secondo1" class="countup" cup-end="3642" cup-append=" ">3642</h1>
												<span>Clients satisfaits</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-2">
												<i class="lni lni-checkmark"></i>
											</div>
											<div class="content">
												<h1 id="secondo2" class="countup" cup-end="5436" cup-append=" ">5436</h1>
												<span>Projets réalisés</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-3">
												<i class="lni lni-world"></i>
											</div>
											<div class="content">
												<h1 id="secondo3" class="countup" cup-end="642" cup-append="K">642</h1>
												<span>Designs en ligne</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="single-counter">
											<div class="icon color-4">
												<i class="lni lni-users"></i>
											</div>
											<div class="content">
												<h1 id="secondo4" class="countup" cup-end="42" cup-append=" ">42</h1>
												<span>Designers créatifs</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="counter-up-img mb-50">
							<img src="/assets/img/counter-up/counter-up-img.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= counter-up-section end ========================= -->

		<!-- ========================= cta-section start ========================= -->
		<section class="cta-section img-bg pt-110 pb-60">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7">
						<div class="section-title mb-50">
							<h1 class="mb-20 wow fadeInUp" data-wow-delay=".2s">Vous avez un projet en tête ? Vous pouvez nous engager</h1>
							<p class="wow fadeInUp" data-wow-delay=".4s">Contactez-nous dès aujourd'hui et donnons ensemble vie à votre projet digital, du premier échange jusqu'à la mise en ligne.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5">
						<div class="cta-btn text-lg-end mb-50">
							<a href="javascript:void(0)" class="main-btn btn-hover text-uppercase">DÉMARRONS VOTRE PROJET</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= cta-section end ========================= -->
@endsection