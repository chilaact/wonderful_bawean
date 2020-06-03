<div class="container-fluid">
  
  <h3>List User</h3>


  <?php echo $this->session->flashdata('msg'); ?>
  <table class="table table-bordered table-hover" width="100%">

    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama User</th>
        <th scope="col">Password</th>
        <th scope="col">User Email</th>
        <th scope="col">No HP</th>
        <th scope="col">Status</th>
        <th scope="col">Role</th>
        <th colspan="3" style="text-align: center;">Action</th>
        
      </tr>
    </thead>

    <tbody>
      <?php 
      $no = 1;

      foreach ($user as $us ):
      if ($us->us_role == '1'){
        $status = 'User';
      }
      else {
        $status = 'Admin';
      }
   ?>
      <tr>

        <th scope="row"><?php echo $no; $no++; ?></th>
        <td><?php echo $us->us_nama; ?></td>
        <td><?php echo $us->us_password; ?></td>
        <td><?php echo $us->us_email; ?></td>
        <td><?php echo $us->us_nohp; ?></td>
        <td><?php echo $us->us_status; ?></td>
        <td><?php echo $status; ?></td>

        <td><a class="btn btn-danger" href="<?php echo ('deleteus/'.$us->us_id) ?>"><i class="fa fa-trash"></i></a></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>


  <!-- Modal -->
  <div class="modal fade" id="addus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Input usata Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'C_admin/createus'; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nm_us">Nama usata</label>
                <input type="text" class="form-control" id="nm_us" name="us_nama" placeholder="Nama usata" required>
              </div>
              <div class="form-group">
                <label for="desc_s">Deskripsi Singkat</label>
                <input type="text" class="form-control" id="desc_s" name="us_desc_short" placeholder="Deskripsi Singkat" required>
              </div>
              <div class="form-group">
                <label for="desc_l">Deskripsi Panjang</label>
                <textarea class="form-control" id="desc_l" name="us_desc_long" placeholder="Masukkan Deskripsi" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="hrg_b">Harga Tiket Masuk</label>
                <input type="text" class="form-control" id="hrg_b" name="us_hrg_weekday" required>
              </div>
              <div class="form-group">
                <label for="hrg_b">Status</label>
                <input type="text" class="form-control" id="status_w" name="us_status" required>
              </div>
              <div class="form-group">
                <label for="us_img">Gambar</label>
                <input type="file" class="form-control" id="us_img" name="us_img" required>
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
    
    $('#addus').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  </script>




