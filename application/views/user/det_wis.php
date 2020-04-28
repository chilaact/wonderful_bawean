<div class="site-section">
  <div class="container">
    <?php

      $no=1;
      foreach ($detail as $det) : 

    ?>

    <div class="card">
      <h5 class="card-header">Detail Wisata</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-md-4">
              <img src="<?php echo base_url().'/assets/image/'.$det->wis_img ?>" alt="FImageo" class="img-fluid">
          </div>
          <div class="col-md-8">
            <table>
              <tr>
                <td>Nama Wisata</td>
                <td>:</td>
                <td><strong><?php echo $det->wis_nama?></strong></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><strong><?php echo $det->wis_desc_short?></strong></td>
              </tr>
              <tr>
                <td>Harga Tiket Weekday</td>
                <td>:</td>
                <td><strong>Rp. <?php echo $det->wis_hrg_weekday?> ,-</strong></td>
              </tr>
              <tr>
                <td>Harga Tiket Weekend</td>
                <td>:</td>
                <td><strong>Rp. <?php echo $det->wis_hrg_weekend?> ,-</strong></td>
              </tr>
              <tr>
                <td>Tanggal Publish</td>
                <td>:</td>
                <td><strong><?php echo $det->wis_date_created?></strong></td>
              </tr>
              <tr>
                <td>Terakhir Update</td>
                <td>:</td>
                <td><strong><?php echo $det->wis_date_update?></strong></td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div> 

    <br><br>

    <div class="card">
      <h5 class="card-header">Fasilitas</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-border">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Tanggal Publish</th>
                <th scope="col">Terakhir Update</th>
                <th scope="col">Status</th>
              </tr>
              <tr>
                <td><?php echo $no; $no++; ?></td>
                <td><?php echo $det->fas_nama ?></td>
                <td><?php echo $det->fas_date_created ?></td>
                <td><?php echo $det->fas_date_update ?></td>
                <td><?php echo $det->fas_status ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
        <br>
          <a href="<?php echo base_url('C_wisata/index'); ?>" class="btn btn-primary right">Kembali</a>
    </div> 
    <?php endforeach; ?>

 </div> 
</div>
  