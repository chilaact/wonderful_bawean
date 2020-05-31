<div class="container-fluid">

	<form action="<?php echo base_url() ?>C_admin/create/" method="post">
	  <div class="form-group">
	    <label>Add Fasilitas</label>
	    <select class="form-control" name="wis_id">
	      <option value="" >Pilih Wisata </option>
	      <?php foreach ($list as $list) { 
	              echo "<option value='".$list->wis_id."'>".$list->wis_nama."</option>"; } ?>
	    </select>
	  </div>

	  <div class="form-group">
	    <label>Nama Fasilitas</label>
	    <input type="text" class="form-control" name="fas_nama">
	  </div>

	  <button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>