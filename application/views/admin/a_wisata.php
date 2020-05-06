<h3>Daftar Wisata</h3>

<?php 
    $no = 1;
    foreach ($wisata as $wis ):
 ?>
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
      <td><button class="btn btn-primary">Edit</button></td>
      <td><button class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>

<?php endforeach ?>

<button type="button" class="btn btn-primary" style="width: 200px; margin-left: 10px" data-toggle="modal" data-target="#addwis"><i class="fas fa-plus"></i>Tambah Wisata Baru</button>

<!-- Modal -->
<div class="modal fade" id="addwis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         
         
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
  
  $('#addwis').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>