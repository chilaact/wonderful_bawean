<div class="container-fluid">
  
  <h3>Daftar Hotel</h3>

  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#addhot"><i class="fas fa-plus fa-sm"></i> Tambah Hotel Baru</button>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url().'C_hotel/create'; ?>" style="width: 8em"><i class="fas fa-plus fa-sm"></i> Kamar</a>

  <?php echo $this->session->flashdata('msg'); ?>
  <table class="table table-bordered table-hover" width="100%">

    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Hotel</th>
        <th scope="col">Alamat</th>
        <th scope="col">Hrg Normal</th>
        <th scope="col">Status</th>
        <th colspan="3" style="text-align: center;">Action</th>
        

      </tr>
    </thead>

    <tbody>
      <?php 
      $no = 1;
      foreach ($hotel as $hot ):
   ?>
      <tr>

        <th scope="row"><?php echo $no; $no++; ?></th>
        <td><?php echo $hot->hot_nama; ?></td>
        <td><?php echo $hot->hot_desc_short; ?></td>
        <td><?php echo $hot->hot_desc_long; ?></td>
        <td><?php echo $hot->hot_status; ?></td>
        <td><a class="btn btn-primary" href="<?= base_url('C_hotel/edit_hot/'.$hot->hot_id); ?>"><i class="fa fa-edit"></i></a></td>
        <td><a class="btn btn-warning" href="<?= base_url('C_hotel/detail_hotel/'.$hot->hot_id); ?>"><i class="fa fa-search-plus"></i></a></td>
        <td><a class="btn btn-danger" href="<?php echo ('deletehot/'.$hot->hot_id) ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>


  <!-- Modal -->
  <div class="modal fade" id="addhot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Input hotel Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'C_hotel/createhot'; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nm_hot">Nama hotel</label>
                <input type="text" class="form-control" id="nm_hot" name="hot_nama" placeholder="Nama hotel" required>
              </div>
              <div class="form-group">
                <label for="desc_s">Deskripsi Singkat</label>
                <input type="text" class="form-control" id="desc_s" name="hot_desc_short" placeholder="Deskripsi Singkat" required>
              </div>
              <div class="form-group">
                <label for="desc_l">Deskripsi Panjang</label>
                <textarea class="form-control" id="desc_l" name="hot_desc_long" placeholder="Masukkan Deskripsi" rows="4"></textarea>
              <div class="form-group">
                <label for="hrg_b">Status</label>
                <input type="text" class="form-control" id="status_w" name="hot_status" required>
              </div>
              <div class="form-group">
                <label for="hot_img">Gambar</label>
                <input type="file" class="form-control" id="hot_img" name="hot_img" required>
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
    
    $('#addhot').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  </script>




