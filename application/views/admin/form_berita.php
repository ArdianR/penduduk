<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Artikel Terakhir</h4>
		</div>
		<div class="panel-body">
			<ul class="nav">
			<?php foreach ($berita->result() as $row):?>
				<li>
					<a href="<?php echo site_url("admin/berita/edit/$row->id_berita");?>"><i class="glyphicon glyphicon-file"></i> <?php echo $row->judul;?></a>
					
				</li>
			<?php endforeach;?>	
			</ul>
		</div>
		<a href="<?php echo site_url('admin/berita/tabel_berita');?>">
		<div class="panel-footer">
		<div class="text-right">
		<h4>
		Lihat Daftar Berita <i class="glyphicon glyphicon-forward"></i>
		</h4>
		</div>
		</div>
		</a>
	</div>
</div>
<div class="col-md-8">
	<?php echo form_open_multipart('admin/berita');?>
	
	<div class="panel panel-default">
	<div class="panel-heading">
	<div id="id" class="text-left">
		<?php echo $this->session->flashdata('pesan');?>	
	</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Simpan</button>
			<a href="<?php echo site_url('admin/berita');?>" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal</a>
		
		</div>
	</div>
	<div class="panel-body">
		<label>Judul Berita</label>
		<input required name="judul" class="form-control">
		<br>
		<label>Berita</label>
		<textarea height="600px" required name="berita" class="form-control">
		</textarea>
		<br>
		<label>Lampiran</label>
		<input type="file" name="userfile" size="20"/>
</form>
	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function  () {
		$('#id').delay(500).fadeOut('slow');
	})
</script>
