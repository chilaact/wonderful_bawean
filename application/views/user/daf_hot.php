  <div class="site-block-wrap" style="height: 5em">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay" style="background-color: #5F9EA0; height: 5em" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">DAFTAR Hotel</h1>
              <p class="mb-5 text-shadow">Various types of hotels are now available for those of you who have different needs. Especially to tours!</p>
              <p><a href="#daftar-hotel-section" class="btn btn-primary px-5 py-3">Get Started</a></p>
              
            </div>
          </div>
        </div>    
      </div>  
    </div>     
  </div>      


  <div class="site-section" id="daftar-hotel-section">
      <div class="container">
        <div class="row large-gutters">

        	<?php foreach ($hotel as $hotel) : ?>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="#" class="d-inline-block mb-4"><img src="<?php echo base_url().'/assets/image/'.$hotel->hot_img ?>" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3><?php echo $hotel->hot_nama ?></h3>
                  <p><?php echo $hotel->hot_desc_short ?></p>
                  <br><br>
                  <?php echo anchor('C_hotel/detail_hot/'.$hotel->hot_id, '<div class="btn btn-bg btn-primary" style="width: 10em; height: 2.5em ">Detail</div>') ?>
                </div>
  
              </div> 
            </div>
          </div>

          	<?php endforeach; ?>

        </div>
      </div>
    </div>