<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Wisata</h1>

	<div class="row">
		<div class="col-lg-8">
			<?php foreach ($edtwis as $ew) : ?>
			<form action="<?php echo base_url().'C_admin/update_wis'; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama Wisata</label>
				    <div class="col-sm-10">
				    	<input type="hidden" name="wis_id" class="form-control" value="<?php echo $ew->wis_id ?>">
				      	<input type="text" class="form-control" id="name" name="wis_nama" value="<?= $ew->wis_nama ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="alamat" name="wis_desc_short" value="<?= $ew->wis_desc_short ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Deskripsi</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="deskripsi" name="wis_desc_long" value="<?= $ew->wis_desc_long ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Harga Tiket Masuk</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="hrg" name="wis_hrg_weekday" value="<?= $ew->wis_hrg_weekday?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Status</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="status" name="wis_status" value="<?= $ew->wis_status?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Image</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" id="image" name="wis_img">
				      <input type="hidden" name="old_image" value="<?php echo $ew->wis_img ?>">
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