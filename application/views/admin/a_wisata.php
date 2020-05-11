<h3>Daftar Wisata</h3>


<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Wisata</th>
      <th scope="col">Gambar</th>
      <th scope="col">Des.Pendek</th>
      <th scope="col">Des.Panjang</th>
      <th scope="col">Hrg Normal</th>
      <th scope="col">Hrg Weekend</th>
      <th scope="col">Kuota Normal</th>
      <th scope="col">Kuota Weekend</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
      
      
    </tr>
  </thead>

  <tbody>
    <?php 
    $no = 1;
    foreach ($wisata as $wis ):
 ?>
    <tr>

      <th scope="row"><?php echo $no; $no++; ?></th>
      <td><?php echo $wis->wis_nama; ?></td>
      <td><?php echo $wis->wis_img; ?></td>
      <td><?php echo $wis->wis_desc_short; ?></td>
      <td><?php echo $wis->wis_desc_long; ?></td>
      <td><?php echo $wis->wis_hrg_weekday; ?></td>
      <td><?php echo $wis->wis_hrg_weekend; ?></td>
      <td><?php echo $wis->wis_kuota_weekday; ?></td>
      <td><?php echo $wis->wis_kuota_weekend; ?></td>
      <td><?php echo $wis->wis_status; ?></td>
      <td><a class="btn btn-primary" href="anjay">Edit</a></td>
      <td><a class="btn btn-danger" href="<?php echo ('deletewis/'.$wis->wis_id) ?>">Delete</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>



<button type="button" class="btn btn-primary" style="width: 200px; margin-left: 10px" data-toggle="modal" data-target="#addwis"><i class="fas fa-plus"></i>Tambah Wisata Baru</button>

<!-- Modal -->
<div class="modal fade" id="addwis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wisata Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="createwis" method="post">
            <div class="form-group">
              <label for="nm_wis">Nama Wisata</label>
              <input type="text" class="form-control" id="nm_wis" name="wis_nama" placeholder="Nama Wisata" required>
            </div>
            <div class="form-group">
              <label for="wis_img">Gambar</label>
              <input type="file" class="form-control" id="wis_img" name="wis_img" required>
            </div>
            <div class="form-group">
              <label for="desc_s">Deskripsi Singkat</label>
              <input type="text" class="form-control" id="desc_s" name="wis_desc_short" placeholder="Deskripsi Singkat" required>
            </div>
            <div class="form-group">
              <label for="desc_l">Deskripsi Panjang</label>
              <textarea class="form-control" id="desc_l" name="wis_desc_long" placeholder="Masukkan Deskripsi" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="hrg_b">Harga Hari Biasa</label>
              <input type="text" class="form-control" id="hrg_b" name="wis_hrg_weekday" required>
            </div>
            <div class="form-group">
              <label for="hrg_l">Harga Hari Libur</label>
              <input type="text" class="form-control" id="hrg_l" name="wis_hrg_weekend" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<small id="emailHelp" class="form-text text-muted">Minimal 6 Karakter</small>
<script>
  
  $('#addwis').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>