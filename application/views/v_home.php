<div class="home">
	<div class="home_slider_container">



		<!-- Home Slider -->
		<div class="owl-carousel owl-theme home_slider">


			
			<!-- Home Slider Item -->
			<div class="owl-item">
				<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home.jpeg)"></div>
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<!-- <div class="home_slider_subtitle">Future Of Education Technology</div> -->
								<div class="home_slider_form_container">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Home Slider Item -->
			<div class="owl-item">
				<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home5.jpeg)" media="(max-width: 40em) and (orientation: landscape)"></div>
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center">
									<!-- <div class="home_slider_title">System 2</div>
										<div class="home_slider_subtitle">Future Of Education Technology</div> -->
										<div class="home_slider_form_container">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Home Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(<?= base_url() ?>template/front-end/images/home3.jpeg)"></div>
						<div class="home_slider_content">
							<div class="container">
								<div class="row">
									<div class="col text-center">
										<!-- <div class="home_slider_subtitle">Future Of Education Technology</div> -->
										<div class="home_slider_form_container">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>





				</div>
			</div>

			<!-- Home Slider Nav -->

			<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
			<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
		</div>

		<!-- Sambutan -->
		<!-- Latest News -->

		<div class="news">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">SAMBUTAN KEPALA SEKOLAH</h2>
						</div>
					</div>
				</div>
				<div class="row news_row">
					<div class="col-lg-5 news_col">

						<!-- News Post Large -->
						<div class="news_post_large_container">
							<div class="news_post_large">
								<div class="news_post_image text-center"><img class="img-fluid" src="<?= base_url() ?>foto_kepsek/<?= $sambutan->foto_kepsek ?>" alt="" style="width: 50%"></div>
								<div class="news_post_large_title text-center">
									<a href="#">
										<span><?= $sambutan->nama_kepsek ?></span>
									</a>
								</div>
								<div class="news_post_meta text-center">
									<ul>
										<li><a href="#"><?= $sambutan->nip ?></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-7 news_col">
						<div class="news_posts_small">
							<div class="news_post_text">
								<p><?= $sambutan->sambutan ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Popular Courses -->

		<div class="courses">
			<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title"><u>Berita Sekolah Terbaru</u></h2>
							<!-- <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div> -->
						</div>
					</div>
				</div>
				<div class="row courses_row">

					<!-- Course -->
					<?php foreach ($berita as $key => $value) { ?>
						<div class="col-lg-4 course_col">
							<div class="course">
								<div class="course_image text-center"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" height="230px"></div>
								<div class="course_body">
									<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= strip_tags($value->judul_berita) ?></a></h3>
									<div class="course_teacher">User : <?= $value->nama_user ?></div>
									<div class="course_text">
										<p><?= substr(strip_tags($value->isi_berita),0,100) ?>...</p>
									</div>
								</div>
								<div class="course_footer">
									<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
										<div class="course_info">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<span><?= date('d F Y', strtotime($value->tgl_berita)) ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>

				</div>
				<div class="row">
					<div class="col">
						<div class="courses_button trans_200"><a href="<?= base_url('home/berita/') ?>">Lihat semua berita</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Events -->

		<div class="events">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title mb-5"><u>Fasilitas Sekolah</u></h2>

						</div>
					</div>
				</div>
				<div class="row about_row text-center">

					<!-- About Item -->
					<?php foreach ($fasilitas as $key => $value) { ?>

						<div class="col-lg-4 about_col about_col_left">
							<div class="about_item">
								<div class="about_item_image"><img src="<?= base_url('sampul_fasilitas/'.$value->sampul_fasilitas) ?>" width="250px" height="180px"></div>
								<div class="about_item_title"><a href="<?= base_url('home/detail_fasilitas/'.$value->id_fasilitas) ?>"><?= $value->nama_fasilitas ?></a></div>
								<div class="about_item_text">
									Jumlah : <?= $value->jml_foto ?> Foto
								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</div>
		</div>

		<!-- Team -->

		<div class="team">
			<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title mb-5"><u>Welcome To Gallery Foto</u></h2>

						</div>
					</div>
				</div>
				<div class="row about_row text-center">

					<!-- About Item -->
					<?php foreach ($gallery as $key => $value) { ?>

						<div class="col-lg-4 about_col about_col_left">
							<div class="about_item">
								<div class="about_item_image"><img src="<?= base_url('sampul/'.$value->sampul) ?>" width="250px" height="180px"></div>
								<div class="about_item_title"><a href="<?= base_url('home/detail_gallery/'.$value->id_gallery) ?>"><?= $value->nama_gallery ?></a></div>
								<div class="about_item_text">
									Jumlah : <?= $value->jml_foto ?> Foto
								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</div>
		</div>

		<!-- Latest News -->
