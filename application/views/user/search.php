   <div class="site-section" style="background-color: #5F9EA0;" id="daftar-wisata-section">
    <br>
      <div class="container" >
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