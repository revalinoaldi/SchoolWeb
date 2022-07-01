<!-- Header Content -->
<?php  
$uri = $_SERVER['REQUEST_URI'];
$url = explode("/", $uri);
$nowUrl = $url[max(array_keys($url))];
?>   

<div class="header_container">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo_container">
						<a href="<?= base_url() ?>">
								
                                <div class="logo_text" style="font-size: 25px !important"><span>SD Negeri Utan Kayu Selatan 18 Pagi</span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                        	<ul class="main_nav">
                        		<li class="<?= ($nowUrl == "") ? 'active' : '' ?>">
                        			<a style="font-size: 12px !important" href="<?= base_url() ?>">Home</a></li>

                        			<li class="nav-item dropdown ">
                        				<a class="nav-link dropdown-toggle" style="font-size: 12px !important" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        					Profile
                        				</a>

                        				<div class="dropdown-menu" style="font-size: 12px !important" aria-labelledby="navbarDropdown">
                        					<a class="dropdown-item <?= ($nowUrl == "sejarah" ? 'active' : ''); ?>" style="font-size: 12px !important" href="<?= base_url('home/sejarah') ?>">Sejarah Sekolah</a>
                        					<a class="dropdown-item <?= ($nowUrl == "visi_misi" ? 'active' : ''); ?>" style="font-size: 12px !important" href="<?= base_url('home/visi_misi') ?>">Visi & Misi</a>
                        					<a class="dropdown-item <?= ($nowUrl == "video" ? 'active' : ''); ?>" style="font-size: 12px !important" href="<?= base_url('home/video') ?>">Video</a>
                        					<a class="dropdown-item <?= ($nowUrl == "gallery" ? 'active' : ''); ?>" style="font-size: 12px !important" href="<?= base_url('home/gallery') ?>">Gallery</a>
                        				</div>
                        			</li>

                        			<li class="<?= ($nowUrl == "berita" ? 'active' : ''); ?>"><a style="font-size: 12px !important" href="<?= base_url('home/berita') ?>">Berita</a></li>

                        			<li class="<?= ($nowUrl == "fasilitas" ? 'active' : ''); ?>"><a style="font-size: 12px !important" href="<?= base_url('home/fasilitas') ?>">Fasilitas</a></li>
                        			<li class="<?= ($nowUrl == "informasipendaftaran" ? 'active' : ''); ?>"><a style="font-size: 12px !important" href="<?= base_url('home/informasipendaftaran') ?>">Informasi Pendaftaran</a></li>
                        			<li class="<?= ($nowUrl == "kontak" ? 'active' : ''); ?>"><a style="font-size: 12px !important" href="<?= base_url('home/kontak') ?>">Kontak</a></li>
                        		</ul>

                        		<div class="hamburger menu_mm">
                        			<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                        		</div>
                        	</nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Search Panel -->
        <div class="header_search_container">
        	<div class="container">
        		<div class="row">
        			<div class="col">
        				<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
        					<form action="#" class="header_search_form">
        						<input type="search" class="search_input" placeholder="Search" required="required">
        						<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
        							<i class="fa fa-search" aria-hidden="true"></i>
        						</button>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>			
        </div>			
    </header>
    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    	<nav class="menu_nav">
    		<ul class="menu_mm">
    			<li class="menu_mm"><a href="<?= base_url() ?>">Home</a></li>
    			<li class="menu_mm"><a href="<?= base_url() ?>home/sejarah">Sejarah Sekolah</a></li>
    			<li class="menu_mm"><a href="<?= base_url() ?>home/visi_misi">Visi & Misi</a></li>
    			<li class="menu_mm"><a href="<?= base_url() ?>home/fasilitas">Fasilitas</a></li>
    			<li class="menu_mm"><a href="<?= base_url() ?>home/gallery">Gallery</a></li>
    			<li class="menu_mm"><a href="<?= base_url() ?>home/berita">Berita</a></li>
                <li class="menu_mm"><a href="<?= base_url() ?>home/informasipendaftaran">Pendaftaran</a></li>
                <li class="menu_mm"><a href="<?= base_url() ?>home/kontak">Kontak</a></li>
    		</ul>
    	</nav>
    </div>