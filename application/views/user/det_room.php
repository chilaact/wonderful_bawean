<div class="site-section">
  <div class="container">

    <div class="card">
      <h5 class="card-header">ROOM FACILITIES</h5>
      <div class="card-body">
        <div class="row">
            <table class="table table-bordered table-hover" style="width: 98%; position: relative; left: 15px">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Fasilitas</th>
              </tr>
              <?php $no=1; foreach ($detroom as $det) : ?>
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
          <a href="<?php echo base_url('C_hotel/detail_hot/'.$det->hot_id); ?>" class="btn btn-primary right">Kembali</a>
    </div> 
    
 </div> 
</div>
  