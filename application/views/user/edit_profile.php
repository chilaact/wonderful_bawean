<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

	<div class="row">
		<div class="col-lg-8">
			<?php foreach ($edprof as $edprof) : ?>
			<?php echo form_open_multipart('C_wisata/update_prof'); ?>
				<div class="form-group row">
				    <label for="email" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				    	<input type="hidden" name="us_id" class="form-control" value="<?php echo $edprof->us_id ?>">
				      	<input type="text" class="form-control" id="email" name="us_email" value="<?= $edprof->us_email ?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="us_nama" value="<?= $edprof->us_nama ?>">
				      <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">No Hp</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nohp" name="us_nohp" value="<?= $edprof->us_nohp ?>">
				      <?= form_error('nohp', '<small class="text-danger pl-3">','</small>'); ?>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Alamat</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="alamat" name="us_alamat" value="<?= $edprof->us_alamat ?>">
				      <?= form_error('alamat', '<small class="text-danger pl-3">','</small>'); ?>
				    </div>
				</div>
				<div class="form-group row">
				    <div class="col-sm-2">Picture</div>
				    <div class="col-sm-10">
				    	<div class="row">
				    		<div class="col-sm-3">
				    			<img style="width: 15rem; height: 18rem;" src="<?php echo base_url().'/assets/image/profile/'.$edprof->us_img ?>" class="img-thumbnail">
				    		</div>
				    		<div class="col-sm-9">
				    			<div class="form-group row">
								    <div class="col-sm-10">
								      <input type="file" class="form-control" id="image" name="upload_file">
								      <input type="hidden" name="old_image" value="<?php echo $edprof->us_img ?>">
								    </div>
								</div>
				    		</div>
				    	</div>
				    </div>
				</div>

				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		<?php endforeach; ?>


		</div>
	</div>
</div>