<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div class="container">
<div class="row clearfix">
	<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3>Edit Alamat</h3>
		</div>
		<div class="panel-body">
		<form method="post" action="<?php echo site_url('admin/kelola_alamat/update_data');?>">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<textarea class="form-control" name="alamat">
				<?php echo $alamat;?> 
			</textarea>
			<br>
			<button class="btn btn-primary">
				<i class="glyphicon glyphicon-upload"></i> Update
			</button>
		</form>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Priview Alamat
			</div>
			<div class="panel-body">
				<?php echo $alamat;?>
			</div>
		</div>
	</div>
</div>
</div>