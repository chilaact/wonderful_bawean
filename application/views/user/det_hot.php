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
                <td>Deskripsi</td>
                <td>:</td>
                <td><strong><?php echo $detail->hot_desc_long?></strong></td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div> 
  <?php endforeach; ?>

    <br><br>

    <div class="card">
      <h5 class="card-header">ROOM TYPE</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-bordered table-hover" style="width: 98%; position: relative; left: 15px">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ROOM TYPE</th>
                <th scope="col" style="text-align: center;">HARGA</th>
                <th colspan="2" style="text-align: center; width: 30%">AKSI</th>
              </tr>
              <?php $no=1; foreach ($detfashot as $det) : ?>
              <tr>
                <td><?php echo $no; $no++; ?></td>
                <td><?php echo $det->room_nama ?></td>
                <td style="text-align: center;"><?php echo number_format($det->room_hrg, 0,',','.') ?></td>
                <td><?php echo anchor('C_hotel/det_room/'.$det->room_id, '<div class="btn btn-bg btn-primary" style="width: 10em; height: 2.5em ">Detail</div>') ?></td>
                <td><?php echo anchor('C_wisata/pesan_wis/'.$det->room_id, '<div class="btn btn-bg btn-danger" style="width: 10em; height: 2.5em">Pesan</div>') ?></td>
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
  