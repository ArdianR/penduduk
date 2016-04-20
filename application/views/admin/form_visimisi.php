<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
     height : 400,
 });
</script>
<div class="container-fluid">
	<div class="row clearfix">
		<div class="col-md-6 column">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Input Visi Misi</h4>
			</div>
			<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_visimisi/update');?>">
			<div class="panel-body">					
					<textarea name="visimisi">
					<?php foreach ($visimisi->result() as $row):?>
					<?php echo $row->visimisi;?>
				<?php endforeach;?>	
					</textarea>
					<br>
					<br>
					<button class="btn btn-block btn-primary">
						<i class="glyphicon glyphicon-save"></i>
						Simpan
					</button>
			</div>
			</form>	
		</div>
		
		</div>
		<div class="col-md-6 column">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Preview Visi-Misi
						<?php echo ($this->session->flashdata('pesan'));?>
					</h3>
				</div>
				<div class="panel-body">
				<?php foreach ($visimisi->result() as $row):?>
					<?php echo $row->visimisi;?>
				<?php endforeach;?>	
				</div>
				
			</div>
		</div>
	</div>
</div>