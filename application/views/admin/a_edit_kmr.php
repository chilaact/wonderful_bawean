<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Type Kamar</h1>

	<div class="row">
		<div class="col-lg-10">
			<?php foreach ($edtroom as $er) : ?>
			<form action="<?php echo base_url().'C_hotel/update_kmr'; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">ID Hotel</label>
				    <!-- <?php foreach ($list as $lis) ?> -->
				    <div class="col-sm-10">
				    	<input type="hidden" name="room_id" class="form-control" value="<?php echo $er->room_id ?>">
				    	<input type="text" class="form-control" name="hot_id" value="<?= $er->hot_id ?>" readonly>
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Nama Type Kamar</label>
				    <div class="col-sm-10">
				      	<input type="text" class="form-control" id="namefas" name="room_nama" value="<?= $er->room_nama ?>">
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Harga</label>
				    <div class="col-sm-10">
				      	<input type="text" class="form-control" id="namefas" name="room_hrg" value="<?= $er->room_hrg ?>">
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