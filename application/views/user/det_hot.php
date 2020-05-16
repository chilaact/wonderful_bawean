<div class="site-section">
  <div class="container">
    <?php
      foreach ($dethot as $detail) :
    ?>

    <div class="card">
      <h5 class="card-header">Detail Hotel</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-md-4">
              <img src="<?php echo base_url().'/assets/image/'.$detail->hot_img ?>" alt="FImageo" class="img-fluid">
          </div>
          <div class="col-md-8">
            <table class="table table-border table-hover table striped">
              <tr>
                <td>Nama Hotel</td>
                <td>:</td>
                <td><strong><?php echo $detail->hot_nama?></strong></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><strong><?php echo $detail->hot_desc_short?></strong></td>
              </tr>
              <tr>
                <td>Harga Kamar</td>
                <td>:</td>
                <td><strong>Rp.  <?php echo number_format($detail->hot_hrg_weekday, 0,',','.') ?> ,-</strong></td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div> 
  <?php endforeach; ?>

    <br><br>

    <div class="card">
      <h5 class="card-header">Fasilitas</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-border">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Fasilitas</th>
              </tr>
              <?php $no=1; foreach ($detfashot as $det) : ?>
              <tr>
                <td><?php echo $no; $no++; ?></td>
                <td><?php echo $det->fas_hot_nama ?></td>
              </tr>
               <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>
        <br>
          <a href="<?php echo base_url('C_hotel/index'); ?>" class="btn btn-primary right">Kembali</a>
    </div> 
    
 </div> 
</div>
  