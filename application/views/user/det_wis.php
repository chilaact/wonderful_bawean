<div class="site-section" style="background-color: #5F9EA0">
  <div class="container">
   <?php foreach ($detwis as $detail) : ?>

    <div class="card">
      <h5 class="card-header">Detail Wisata</h5>
      <div class="card-body">

        <div class="row">
          <div class="col-md-4">
              <img src="<?php echo base_url().'/assets/image/'.$detail->wis_img ?>" alt="FImageo" class="img-fluid">
          </div>
          <div class="col-md-8">
             
            <table>
              <tr>
                <td>Nama Wisata</td>
                <td>:</td>
                <td><strong><?php echo $detail->wis_nama?></strong></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><strong><?php echo $detail->wis_desc_short?></strong></td>
              </tr>
              <tr>
                <td>Harga Tiket Weekday</td>
                <td>:</td>
                <td><strong>Rp. <?php echo number_format($detail->wis_hrg_weekday, 0,',','.') ?> ,-</strong></td>
              </tr>
            </table>

          </div>
        </div>
           <?php endforeach; ?>
      </div>
    </div> 

   

    <br><br>

    <div class="card">
      <h5 class="card-header">Fasilitas</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-border">
              <thead>
                <tr class="thead-light">
                  <th scope="col">#</th>
                  <th scope="col">Nama Fasilitas</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($detfas as $det) : ?>
                  <tr>
                    <th scope="row"><?php echo $no; $no++; ?></th>
                    <td><?php echo $det->fas_nama ?></td>
                    
                  </tr>
               <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <br>
          <a href="<?php echo base_url('C_wisata/index'); ?>" class="btn btn-primary right">Kembali</a>
    </div> 


 </div> 
</div>
    