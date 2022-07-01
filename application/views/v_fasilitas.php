    <!-- Home -->

    <div class="home">
    	<div class="breadcrumbs_container">
    		<div clas="container">
    			<div class="row">
    				<div class="col">
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="index.html">Home</a></li>
    							<li>Fasilitas</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>





    <div class="about">
    	<div class="container">
    		<div class="row">
    			<div class="col">
    				<div class="section_title_container text-center">
    					<h2 class="section_title">Fasilitas Sekolah</h2>
    					
    				</div>
    			</div>
    		</div>
    		<div class="row about_row">
    			
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