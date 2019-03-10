<div class="container">
	<div>
		<div class="card">
			<div class="card-header">
				
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('category/submit'); ?>" method="POST" class="form-horizontal">
					<div class="col-md-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="txt_name" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="txt_description"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Save">
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>