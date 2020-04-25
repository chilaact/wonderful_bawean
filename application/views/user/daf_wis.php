  <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay" style="background-color: #5F9EA0;" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">DAFTAR WISATA</h1>
              <p class="mb-5 text-shadow">Various tours that can make a trip or holiday more fun and exciting experience on an island called the princess island !</p>
              <p><a href="#daftar-wisata-section" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>    
      </div>  
    </div>     
  </div>      


  <div class="site-section" id="daftar-wisata-section">
      <div class="container">
        <div class="row large-gutters">

        	<?php foreach ($wisata as $wis) : ?>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="#" class="d-inline-block mb-4"><img src="<?php echo base_url().'/assets/image/'.$wis->wis_img ?>" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3><?php echo $wis->wis_nama ?></h3>
                  <p><?php echo $wis->wis_desc_short ?></p>
                  Harga Tiket Masuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong class="badge badge-bg badge-success"> Rp. <?php echo $wis->wis_hrg_weekday ?> ,-</strong><br>
                  <a href="#" class="btn btn-sm btn-primary">Pesan</a>
                  <a href="#" class="btn btn-sm btn-danger">Detail</a>
                </div>
  
              </div> 
            </div>
          </div>

          	<?php endforeach; ?>

<!--           <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/noko.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Pulau Noko</h3>
                      <p>Ds. Sidogedungbatu - BAWEAN</p>
                      Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                    </div> 
      
                  </div> 
                </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/mangrove3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Hutan Mangrove</h3>
                      <p>Ds. Daun - BAWEAN</p>
                      Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                <div class="ftco-media-1-inner">
                  <a href="property-single.html" class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/mombhul4.jpg" alt="Image" class="img-fluid"></a>
                  <div class="ftco-media-details">
                    <h3>Mombhul Beach</h3>
                    <p>Ds. Sidogedungbatu - BAWEAN</p>
                    Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                  </div>
    
                </div> 
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/airterjun.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>Laccar Waterfall</h3>
                        <p>Dsn. Laccar - BAWEAN</p>
                        Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="property-single.html" class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/tanjungan.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>Tanjung Ghe'en</h3>
                        <p>Ds. Komalasa - BAWEAN</p>
                        Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div> -->

        </div>
      </div>
    </div>