<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit hotel</h1>

	<div class="row">
		<div class="col-lg-8">
			<?php foreach ($edthot as $eh) : ?>
			<form action="<?php echo base_url().'C_hotel/update_hot'; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama hotel</label>
				    <div class="col-sm-10">
				    	<input type="hidden" name="hot_id" class="form-control" value="<?php echo $eh->hot_id ?>">
				      	<input type="text" class="form-control" id="name" name="hot_nama" value="<?= $eh->hot_nama ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="alamat" name="hot_desc_short" value="<?= $eh->hot_desc_short ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Deskripsi</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="deskripsi" name="hot_desc_long" value="<?= $eh->hot_desc_long ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Status</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="status" name="hot_status" value="<?= $eh->hot_status?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Image</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" id="image" name="hot_img">
				      <input type="hidden" name="old_image" value="<?php echo $eh->hot_img ?>">
				    </div>
				</div>
				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>
			</form>
		<?php endforeach; ?>


		</div>
	</div>
</div>