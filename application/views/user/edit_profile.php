<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

	<div class="row">
		<div class="col-lg-8">
			
			<form method="post" action="<?php echo base_url().'C_wisata/edit_prof'; ?>">
				<div class="form-group row">
				    <label for="email" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="email" name="email" value="<?= $user->us_email ?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="name" value="<?= $user->us_nama ?>">
				      <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
				    </div>
				</div>
				<!-- <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">No Hp</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" name="name" value="<?= $user->us_nohp ?>">
				      <?= form_error('nohp', '<small class="text-danger pl-3">','</small>'); ?>
				    </div>
				</div> -->
				<div class="form-group row">
				    <div class="col-sm-2">Picture</div>
				    <div class="col-sm-10">
				    	<div class="row">
				    		<div class="col-sm-3">
				    			<img src="<?php echo base_url().'/assets/image/profile/'.$user->us_img ?>" class="img-thumbnail">
				    		</div>
				    		<div class="col-sm-9">
				    			<div class="custom-file">
									  <input type="file" class="custom-file-input" id="image" name="image">
									  <label class="custom-file-label" for="image">Choose file</label>
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
			</form>


		</div>
	</div>
</div>