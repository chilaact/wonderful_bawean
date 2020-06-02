<div class="container-fluid">
  
  <h3>Daftar Wisata</h3>

  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#addwis"><i class="fas fa-plus fa-sm"></i> Tambah Wisata Baru</button>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url().'C_admin/create'; ?>" style="width: 8em"><i class="fas fa-plus fa-sm"></i> Fasilitas</a>

  <?php echo $this->session->flashdata('msg'); ?>
  <table class="table table-bordered table-hover" width="100%">

    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Wisata</th>
        <th scope="col">Alamat</th>
        <th scope="col">Hrg Normal</th>
        <th scope="col">Status</th>
        <th colspan="3" style="text-align: center;">Action</th>
        
        
        
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
        <td><?php echo $wis->wis_desc_short; ?></td>
        <td style="width: 10em">Rp. <?php echo number_format($wis->wis_hrg_weekday, 0,',','.') ?> ,-</td>
        <td><?php echo $wis->wis_status; ?></td>
        <td><a class="btn btn-primary" href="<?= base_url('C_admin/edit_wis/'.$wis->wis_id); ?>"><i class="fa fa-edit"></i></a></td>
        <td><a class="btn btn-warning" href="<?= base_url('C_admin/detail_wis/'.$wis->wis_id); ?>"><i class="fa fa-search-plus"></i></a></td>
        <td><a class="btn btn-danger" href="<?php echo ('C_admin/deletewis/'.$wis->wis_id) ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>


  <!-- Modal -->
  <div class="modal fade" id="addwis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Wisata Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'C_admin/createwis'; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nm_wis">Nama Wisata</label>
                <input type="text" class="form-control" id="nm_wis" name="wis_nama" placeholder="Nama Wisata" required>
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
                <label for="hrg_b">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="hrg_b" name="wis_hrg_weekday" required>
              </div>
              <div class="form-group">
                <label for="hrg_b">Status</label>
                <input type="text" class="form-control" id="status_w" name="wis_status" required>
              </div>
              <div class="form-group">
                <label for="wis_img">Gambar</label>
                <input type="file" class="form-control" id="wis_img" name="wis_img" required>
              </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    
    $('#addwis').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  </script>




