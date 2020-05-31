<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Wisata</h1>

	<div class="row">
		<div class="col-lg-10">
			<?php foreach ($edtfas as $ef) : ?>
			<form action="<?php echo base_url().'C_admin/update_fas'; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">ID Wisata</label>
				    <!-- <?php foreach ($list as $lis) ?> -->
				    <div class="col-sm-10">
				    	<input type="hidden" name="fas_id" class="form-control" value="<?php echo $ef->fas_id ?>">
				    	<input type="text" class="form-control" name="wis_id" value="<?= $ef->wis_id ?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama Fasilitas</label>
				    <div class="col-sm-10">
				      	<input type="text" class="form-control" id="namefas" name="fas_nama" value="<?= $ef->fas_nama ?>">
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