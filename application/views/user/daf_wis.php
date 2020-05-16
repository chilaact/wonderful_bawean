  <div class="site-block-wrap" style="height: 5em">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay" style="background-color: #5F9EA0; height: 5em" data-aos="fade" id="home-section">
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
                  Harga Tiket Masuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="btn btn-bg btn-success" style="height: 2em"> Rp. <?php echo number_format($wis->wis_hrg_weekday, 0,',','.')  ?> ,-</span><br><br>
                  <?php echo anchor('C_wisata/pesan_wis/'.$wis->wis_id, '<div class="btn btn-bg btn-danger" style="width: 10em; height: 2.5em">Pesan</div>') ?>
                  <?php echo anchor('C_wisata/detail_wis/'.$wis->wis_id, '<div class="btn btn-bg btn-primary" style="width: 10em; height: 2.5em ">Detail</div>') ?>
                </div>
  
              </div> 
            </div>
          </div>

          	<?php endforeach; ?>

        </div>
      </div>
    </div>