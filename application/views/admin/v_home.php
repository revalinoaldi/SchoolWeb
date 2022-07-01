<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active" style="max-height: 500px; height: auto; overflow: hidden;">
			<img src="<?= base_url() ?>template/front-end/images/home.jpeg" alt="..." >
			<div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
				<h2>Selamat Datang Di Halaman Admin!</h2>
			</div>
		</div>
		<div class="item" style="max-height: 500px; height: auto; overflow: hidden;">
			<img src="<?= base_url() ?>template/front-end/images/home5.jpeg" alt="..." >
			<div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
				<h2>Selamat Datang Di Halaman Admin!</h2>
			</div>
		</div>
		<div class="item" style="max-height: 500px; height: auto; overflow: hidden;">
			<img src="<?= base_url() ?>template/front-end/images/home3.jpeg" alt="..." >
			<div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
				<h2>Selamat Datang Di Halaman Admin!</h2>
			</div>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>