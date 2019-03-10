<div class="container">
	<div>
		<div class="card">
			<div class="card-header">
				
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('category/update'); ?>" method="POST" class="form-horizontal">
					<input type="hidden" name="txt_hidden" value="<?php echo $category->id; ?>">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="txt_name" class="form-control" value="<?php echo $category->name;?>">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="txt_description"><?php echo $category->description; ?></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="update" class="btn btn-primary" value="Update">
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>