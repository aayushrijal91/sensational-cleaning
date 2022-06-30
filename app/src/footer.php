<footer>
	<div class="container">
		<hr class="bg-light">
		<div class="row justify-content-center justify-content-lg-between align-items-center pt-3">
			<div class="col-auto d-lg-none pb-4">
				<?= renderImg("payment-options.png", "icons") ?>
			</div>
			<div class="col-auto">
				<div class="row no-gutters pb-4 pb-md-0 align-items-center">
					<div class="col col-md-auto pr-3 pr-md-4"><a href="./"><?= renderImg("footer-logo.png", "logo") ?></a></div>
					<div class="col-auto">© <?= date('Y') ?> <span class="text-primary fw-900"><?= $site ?></span> All Rights Reserved</div>
				</div>
			</div>
			<div class="col-auto d-none d-lg-block">
				<?= renderImg("payment-options.png", "icons") ?>
			</div>
			<div class="col-auto pt-4 pt-lg-0">
				<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
					<div class="col-auto">Privacy Policy</div>
					<div class="col-auto px-2 px-md-4 fw-800 text-primary">|</div>
					<div class="col-auto">Terms and Conditions</div>
					<div class="col-12 col-md-auto pl-md-5 text-center pt-4 pt-md-0">
						<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
							<?= renderImg("aiims1.png", "logo") ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>