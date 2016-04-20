<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<?=$this->session->flashdata('pesan');?>
		<form id="" method="post" action="<?php echo base_url("admin/kelola_desa/update_detail");?>">
			<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Detail Desa</h4>
			</div>
			<div class="panel-body">
				<label>Nama Desa</label>
				<input class="form-control" name="nama_desa" value="<?=$nama_desa;?>">
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-block btn-primary"> Update </button>
			</div>
		</div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
</div>