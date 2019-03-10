
	<div class="container">
		<div class="card">
			<div class="card-header">
				<div class="col-md-12">
					<h3><a href="<?php echo base_url('category/add'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Category</a></h3>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-12">
					<?php
					if ($this->session->flashdata('success_msg')) {
					?>
						<div class="alert alert-success">
							<?php echo $this->session->flashdata('success_msg'); ?>
						</div>
					<?php	
					}
					?>

					<?php
					if ($this->session->flashdata('error_msg')) {
					?>
						<div class="alert alert-danger">
							<?php echo $this->session->flashdata('error_msg'); ?>
						</div>
					<?php	
					}
					?>
					<div class="table-responsive">
					  <table class="table table-bordered table-striped">
					    <thead>
					    	<tr>
					    		<td>ID</td>
					    		<td>Name</td>
					    		<td>Description</td>
					    		<td>Created At</td>
					    		<td>Action</td>
					    	</tr>
					    </thead>
					    <tbody>
					    	<?php 
					    		if ($category) {
					    			
					    			foreach ($category as $LoadCat) {
					    	?>
					    	<tr>
					    		<td width="5%"><?php echo $LoadCat->id; ?></td>
					    		<td width="40%"><?php echo $LoadCat->name; ?></td>
					    		<td width="20%"><?php echo $LoadCat->description; ?></td>
					    		<td width="15%"><?php echo $LoadCat->created_at; ?></td>
					    		<td width="20%">
					    			<a href="<?php echo base_url('category/edit/'.$LoadCat->id); ?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a>
					    			<a href="<?php echo base_url('category/delete/'.$LoadCat->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category');"><span class="glyphicon glyphicon-trash"></span> Delete</a>
					    		</td>
					    	</tr>
					    	<?php
					    			}
					    		}
					    	?>
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</div>
