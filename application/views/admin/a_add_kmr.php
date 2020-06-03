<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Add Kamar</h1>
	<form action="<?php echo base_url() ?>C_hotel/createkmr/" method="post">
	  <div class="form-group">
	    <label>Kategori Hotel</label>
	    <select class="form-control" name="hot_id">
	      <option value="" >Pilih Hotel </option>
	      <?php foreach ($list as $list) { 
	              echo "<option value='".$list->hot_id."'>".$list->hot_nama."</option>"; } ?>
	    </select>
	  </div>

	  <div class="form-group">
	    <label>Nama Tipe Kamar</label>
	    <input type="text" class="form-control" name="room_nama">
	  </div>

	  <div class="form-group">
	    <label>Harga Kamar</label>
	    <input type="text" class="form-control" name="room_hrg">
	  </div>

	  <button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>