<!-- <div class="site-section" style="background-color: #5F9EA0"> -->
  <div class="container-fluid">
   <?php foreach ($dethot as $detail) : ?>

    <div class="card">
      <h5 class="card-header">Detail hotel</h5>
      <div class="card-body">

        <div class="row">
          <div style="width: 100%">             
            <table class="table">
              <tr>
                <td style="width: 20em">Nama hotel</td>
                <td style="width: 3em; text-align: center;">:</td>
                <td><strong><?php echo $detail->hot_nama?></strong></td>
              </tr>
              <tr>
                <td style="width: 20em">Alamat</td>
                <td style="width: 3em; text-align: center;">:</td>
                <td><strong><?php echo $detail->hot_desc_short?></strong></td>
              </tr>
              <tr>
                <td style="width: 20em">Deskripsi</td>
                <td style="width: 3em; text-align: center;">:</td>
                <td><strong><?php echo $detail->hot_desc_long?></strong></td>
              </tr>
              <tr>
                <td style="width: 20em">Image</td>
                <td style="width: 3em; text-align: center;">:</td>
                <td><img src="<?php echo base_url().'/assets/image/'.$detail->hot_img ?>" alt="FImageo" class="img-fluid" style="width: 50%"></td>
              </tr>
            </table>

          </div>
        </div>
           <?php endforeach; ?>
      </div>
    </div> 

    <br><br>

    <div class="card">
      <h5 class="card-header">Room</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-border">
              <thead>
                <tr class="thead-light">
                  <th scope="col">#</th>
                  <th scope="col">Nama Room</th>
                  <th scope="col">Harga</th>
                  <th colspan="2" style="text-align: center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($detroom as $det) : ?>
                  <tr>
                    <th scope="row"><?php echo $no; $no++; ?></th>
                    <td><?php echo $det->room_nama ?></td>
                    <td>Rp. <?php echo number_format($det->room_hrg, 0,',','.') ?> ,-</td>
                    <td style="text-align: center;">
                      <a href="<?php echo base_url() ?>C_hotel/edit_room/<?php echo $det->room_id; ?>" class="btn btn-outline-warning">Edit</a>
                      <a href=" <?php echo base_url() ?>C_hotel/del_kmr/<?php echo $det->room_id; ?>" class="btn btn-outline-danger">Delete</a>
                               
                    </td>
                  </tr>
               <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <br>
          <a href="<?php echo base_url('C_hotel/view'); ?>" class="btn btn-primary right">Kembali</a>
    </div> 


 </div> 
</div>
    