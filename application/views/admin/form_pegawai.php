<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div class="container-fluid">
<div class="row clearfix">
	<div class="col-md-4">
	<?php echo form_open_multipart('admin/kelola_pegawai/insert');?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4> <i class="glyphicon glyphicon-leaf"></i> Form Input</h4>
		</div>
		<div class="panel-body">
				<label>NIP</label>
				<input id="nip" class="form-control" name="nip" placeholder="NIP">
				<label>Nama</label>
				<input id="nama" class="form-control" name="nama" placeholder="Nama">
				<label>Alamat</label>
				<input id="alamat" class="form-control" name="alamat" placeholder="Alamat">
				<label>Jabatan</label>
				<select id="jabatan" name="jabatan" class="form-control">
				<?php foreach ($jabatan->result() as $row):?>
					<option value="<?php echo $row->jabatan;?>"><?php echo $row->jabatan;?></option>
				<?php endforeach;?>	
				</select>
				<label>Profil</label>
				<textarea name="profil" id="profil">
					
				</textarea>
				<label>Foto</label>
				<input type="file" class="form-control" name="userfile" size="20" />
			
		</div>
		<div class="panel-footer">
			<button type="submit" value="upload" class="btn btn-block btn-primary">
				<i class="glyphicon glyphicon-save"></i> Simpan
			</button>
		</div>
	</div>
	</form>
	</div>
	<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><i class="glyphicon glyphicon-eye-open"></i> Priview Data</h4>
				<div class="text-right">
					<a class="btn btn-success" href="<?php echo site_url('admin/kelola_pegawai/form_pegawai');?>">
					<i class="glyphicon glyphicon-refresh"></i>
					</a>
				</div>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered">
					<tr><td colspan="2"></td></tr>
					<tr><td>NIP</td><td id="isi_nip"></td></tr>
					<tr><td>Nama</td><td  id="isi_nama"></td></tr>
					<tr><td>Alamat</td><td id="isi_alamat"></td></tr>
					<tr><td>Jabatan</td><td id="isi_jabatan"></td></tr>		
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'jq_proses.php';?>