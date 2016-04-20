<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    height : 400,

 });
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Informasi
					</h3>
				</div>
				<div class="panel-body">
					
						<ul class="nav">
						<?php foreach($allinformasi->result() as $row):?>
						<li>
						<div class="input-group">
					     <h4>
					     	 <a href="<?=base_url("admin/kelola_informasi/edit/$row->id_informasi");?>">
										<i class="glyphicon glyphicon-file"></i><?=$row->judul;?> 								
									</a>
					     </h4>
					      <span class="input-group-btn">
					        <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=base_url("admin/kelola_informasi/delete/$row->id_informasi");?>">
										<i class="glyphicon glyphicon-remove"> </i>								
									</a>
					      </span>
					    </div>					
						</li>
						<?php endforeach;?>
					</ul>
					
				</div>
				
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Tambah Informasi
					</h3>
				</div>
				<div class="panel-body">
					<form class="form-group" method="post" action="<?php echo base_url('admin/kelola_informasi/update');?>">
					<label>Judul</label>
					<input type="hidden" value="<?=$row->id_informasi;?>" name="id_informasi" class="form-control">
					<input value="<?=$row->judul;?>"  name="judul" class="form-control">
					<label>Isi Informasi</label>
					<textarea name="isi">
						<?=$row->isi;?>
					</textarea>
					
					<div class="pull-right">
						<button class="btn btn-primary" type="submit"> Simpan</button>
					</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>

	<?php foreach($informasi->result() as $row):?>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						<?=$row->judul;?>
					</h3>
				</div>
				<div class="panel-body">
					<?=$row->isi;?>
				</div>
				<div class="pull-right">
						
					</div>
			</div>
		</div>
		<?php endforeach;?>
		
</div>