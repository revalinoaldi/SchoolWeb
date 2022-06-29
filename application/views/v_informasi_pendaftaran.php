    
    <!-- Home -->
    <div class="home">
    	<div class="breadcrumbs_container">
    		<div clas="container">
    			<div class="row">
    				<div class="col">
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="index.html">Home</a></li>
    							<li>Informasi Pendaftaran</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- Isi Konten -->

    <div class="entry-content">
    	<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right">
    		<div class="sm-span12 smue-clmn  sme-dsbl-margin-left sme-dsbl-margin-right">
    			<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right">
    				<div class="sm-span12 smue-clmn sme-dsbl-margin-left sme-dsbl-margin-right">
    					<div class="smue-text-obj">
    						<h2><?= $info->title ?></h2>
    						<h4>Website : <a href="https://ppdb.jakarta.go.id/">https://ppdb.jakarta.go.id/</a></h4>
    					</div>
    				</div>
    			</div>
    			<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right">
    				<div class="sm-span12 smue-clmn sme-dsbl-margin-left sme-dsbl-margin-right">
    					<div class="smue-text-obj">
    						<h3></h3>
    						<!-- <h3>Tahapan Proses PPDB 2022</h3> -->
    					</div>
    				</div>
    			</div>
    			<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right mt-4">
    				<div class="sm-span4 smue-clmn sme-dsbl-margin-left sme-dsbl-margin-right">
    					<div class="smue-image-obj smue-text-align-left">
    						<a href="<?= base_url('informasi_pendaftaran/'.$info->brosur_img) ?>" target="_blank">
    							<img src="<?= base_url('informasi_pendaftaran/'.$info->brosur_img) ?>" title="<?= $info->title ?>" alt="<?= $info->title ?>" class="smue-image-obj-basic sme-dsbl-margin-left sme-dsbl-margin-right sme-dsbl-margin-top sme-dsbl-margin-bottom img-fluid col-sm-5" /></div>
    						</a>
    				</div>
    			</div>
    			<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right">
    				<div class="sm-span12 smue-clmn sme-dsbl-margin-left sme-dsbl-margin-right">
    					<div class="smue-text-obj my-3 mx-3">
    						<a href="<?= site_url('home/downloadinformasipendaftaran/'.$info->brosur_doc) ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download Informasi Pendaftaran</a>
    					</div>
    				</div>
    			</div>
    			<div class="sm-row-fluid smue-row sme-dsbl-margin-left sme-dsbl-margin-right">
    				<div class="sm-span12 smue-clmn sme-dsbl-margin-left sme-dsbl-margin-right">
    				</div>
    			</div>
    		</div>
    	</div>


    	<div class="courses">
    		<div class="container">
    			<div class="row">


    			</div>  
    		</div> 
    	</div> 











    	<!-- end Isi Konten -->
    	<div class="newsletter">
    		<div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
    		<div class="container">
    			<div class="row">
    				<div class="col">
    					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

    						<!-- Newsletter Content -->
    						<div class="newsletter_content text-lg-left text-center">
    							<div class="newsletter_title">sign up for news and offers</div>
    							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
    						</div>

    						<!-- Newsletter Form -->
    						<div class="newsletter_form_container ml-lg-auto">
    							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
    								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
    								<button type="submit" class="newsletter_button">subscribe</button>
    							</form>
    						</div>

    					</div>
    				</div>
    			</div>
    		</div>
    	</div>