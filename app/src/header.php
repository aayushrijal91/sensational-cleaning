<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<!-- <script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script> -->
</head>

<body>
	<header>
		<div class="header-top-bar">
			<div class="container-fluid">
				<div class="row no-gutters justify-content-center justify-content-lg-between align-items-center">
					<div class="col-auto">
						<div class="row no-gutters align-items-center justify-content-md-between">
							<div class="col-auto pr-md-4 pr-lg-5 py-4 py-md-0">
								<a href="./" class="btn p-0">
									<?= renderImg("logo.png", "logo") ?> <span class="text-dark h9 font-raleway fw-700 pl-3">Sensational Water Damage Specialists</span>
								</a>
							</div>
							<div class="col-auto col-md col-lg-auto px-xxl-5 d-none d-md-block d-lg-none d-xl-block">
								<div class="text-primary fw-900 h11 line-height-1">Same Day Service Guarantee</div>
								<div class="h21 text-dark line-height-1">Service Fee Waived If Unable To Attend</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg col-xl-4 pt-md-4 pt-lg-0">
						<div class="row justify-content-between no-gutters align-items-center">
							<div class="col-6 col-md-4 px-1">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-black rounded-2 fw-600 h18">
									$0 Call Out Fee
								</a>
							</div>
							<div class="col-6 col-md-4 px-1">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-dark rounded-2 fw-900 h18">
									<?= $phone_number ?>
								</a>
							</div>
							<div class="col-12 col-md-4 px-1 pt-2 pt-md-0">
								<a href="#form" class="btn btn-block btn-primary rounded-2 fw-600 h18">
									Book Online
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 px-5 d-md-none d-lg-block d-xl-none text-center pt-4 pb-3">
						<div class="text-primary fw-900 h11 line-height-1">Same Day Service Guarantee</div>
						<div class="h23 text-dark line-height-1">Service Fee Waived If Unable To Attend</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container">
				<div class="row justify-content-center justify-content-md-end">
					<div class="col-11 col-md-12 col-xxl-11">
						<div class="row no-gutters justify-content-between align-items-center">
							<div class="col-10 col-md-6 text-white font-raleway h2 fw-700 line-height-1">
								Sensational Water Damage Specialists
							</div>
							<div class="d-md-none py-4"><a href="#form" class="btn btn-primary banner-book-btn">Book Online</a></div>
							<div class="col-md-4">
								<div class="carpet-hire-claim-card">
									<div class="text-white text-uppercase h22 fw-600 bg-primary d-inline-block line-height-1 pt-2 pb-1 px-2">Free</div>
									<div class="text-white h6 fw-800 line-height-1 pt-3 pb-3">Free Carpet<br> Dryer Hire</div>
									<a href="" class="p-0 btn text-secondary text-uppercase font-raleway fw-900 h20 letter-spacing-05">Claim Today <span class="pl-3">></span></a>
								</div>
							</div>
						</div>
						<div class="row no-gutters justify-content-between banner-review">
							<div class="col-auto d-none d-md-block">
								<a href="#form" class="btn btn-primary banner-book-btn">Book Online</a>
							</div>
							<div class="col-auto col-md-6 col-lg-auto">
								<div class="row no-gutters">
									<div class="col-lg-auto px-2">
										<div class="facebook-review-card">
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<?= renderImg("review-fb.png", "icons") ?>
												</div>
												<div class="col text-white px-3">
													<div class="text-uppercase fw-700 line-height-1">5 star review rating</div>
													<div class="h19 d-flex align-items-center line-height-1 pt-2">Over 166 <?= renderImg("5star-sm.svg", "icons", "pl-3") ?></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-auto pt-4 pt-lg-0 px-2">
										<div class="google-review-card">
											<div class="row no-gutters align-items-center">
												<div class="col-auto">
													<?= renderImg("review-google.png", "icons") ?>
												</div>
												<div class="col text-white px-3">
													<div class="text-uppercase h12 fw-700 line-height-1">Trusted Services</div>
													<?= renderImg("5star.png", "icons", "pt-1") ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-12 col-xl-11 col-xxl-10">
						<div class="row no-gutters cta">
							<div class="col-12 col-md-4 py-3 py-md-0">
								<div class="cta-card">
									<?= renderImg("flood-restoration.jpg", "lib", "w-100") ?>
									<div class="content-wrapper bg-primary">
										<?= renderImg("flood-restoration.png", "icons", "icon") ?>
										<div class="content">
											<div>
												<div class="title">Flood Restoration</div>
												<div class="h21 fw-600 pt-3">
													<p>We offer 24/7 flood restoration services to help get back to your life as normal and as fast as possible.</p>
													<p>NO JOB TOO BIG OR TOO SMALL.</p>
												</div>
											</div>
											<div class="pt-3"><a href="#form" class="p-0 text-white text-uppercase fw-900 h20 text-decoration-none">Find Out More <span class="pl-3">></span></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4 py-3 py-md-0">
								<div class="cta-card">
									<?= renderImg("water-damage-restoration.jpg", "lib", "w-100") ?>
									<div class="content-wrapper bg-tertiary">
										<?= renderImg("water-damage-restoration.png", "icons", "icon") ?>
										<div class="content">
											<div>
												<div class="title">Water Damage Restorations</div>
												<div class="h21 fw-600 pt-3">
													<p>Water Damage Specialist provides the professional water damage services you require 24/7.</p>
													<p>We use only the safest and effective products to get your carpets looking new and smelling fresh again.</p>
												</div>
											</div>
											<div class="pt-3"><a href="#form" class="p-0 text-white text-uppercase fw-900 h20 text-decoration-none">Find Out More <span class="pl-3">></span></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4 py-3 py-md-0">
								<div class="cta-card">
									<?= renderImg("carpet-restoration.jpg", "lib", "w-100") ?>
									<div class="content-wrapper bg-primary">
										<?= renderImg("carpet-restoration.png", "icons", "icon") ?>
										<div class="content">
											<div>
												<div class="title">Carpet Restorations</div>
												<div class="h21 fw-600 pt-3">
													<p> No matter the condition or cause, we offer wet carpet cleaning to bring your carpets back to their original condition.</p>
													<p>You can depend on our professional team of carpet cleaners to advise on the best service to clean your carpets most effectively.</p>
												</div>
											</div>
											<div class="pt-3"><a href="#form" class="p-0 text-white text-uppercase fw-900 h20 text-decoration-none">Find Out More <span class="pl-3">></span></a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>