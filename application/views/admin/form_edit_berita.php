<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div class="col-md-2">
</div>
<div class="col-md-8">
	<?php echo form_open_multipart('admin/berita/update');?>
	<?php foreach($berita->result() as $row):?>
	<div class="panel panel-default">
	<div class="panel-heading">
	<div id="id" class="text-left">
		<?php echo $this->session->flashdata('pesan');?>	
	</div>
		<div class="text-right">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-open"></i> Update</button>
			<a href="<?php echo site_url('admin/berita/tabel_berita');?>" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Batal</a href="<?php echo site_url('admin/berita/tabel_berita');?>">
		</div>
	</div>
	<div class="panel-body">
		<label>Judul Berita</label>
		<input required name="judul" class="form-control" value="<?php echo $row->judul;?>">
		<input type="hidden" name="tanggal" class="form-control" value="<?php echo $row->tanggal;?>">
		<input type="hidden" name="id_berita" class="form-control" value="<?php echo $row->id_berita;?>">
		<br>
		<label>Berita</label>
		<textarea height="600px" required name="berita" class="form-control">
		<?php echo $row->isi;?>
		</textarea>
		<br>
		<label>Lampiran</label>
		<input type="file" name="userfile" size="20" value="<?php echo $row->gambar;?>" />
		</form>
	</div>
	</div>
	<?php endforeach;?>
</div>
<div class="col-md-2"></div>
<script type="text/javascript">
	$(document).ready(function  () {
		$('#id').delay(500).fadeOut('slow');
	})
</script>
