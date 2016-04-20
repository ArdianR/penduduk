<script type="text/javascript" src="<?php echo base_url();?>src/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div class="container-fluid">
<div class="row clearfix">
<?php foreach ($pegawai->result() as $row):?>
	<div class="col-md-4">
	<?php echo form_open_multipart('admin/kelola_pegawai/update_data');?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4> <i class="glyphicon glyphicon-leaf"></i> Form Input</h4>
		</div>
		<div class="panel-body">
				<label>NIP</label>
				<input type="hidden" id="idpegawai" class="form-control" name="idpegawai" placeholder="idpegawai" value="<?php echo $row->idpegawai;?>">
				<input id="nip" class="form-control" name="nip" placeholder="NIP" value="<?php echo $row->nip;?>">
				<label>Nama</label>
				<input id="nama" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row->nama;?>">
				<label>Alamat</label>
				<input id="alamat" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat;?>">
				<label>Jabatan</label>
				<select id="jabatan" name="jabatan" class="form-control">
				<option value="<?php echo $row->jabatan;?>">Sekarang :<?php echo $row->jabatan;?></option>
<?php endforeach;?>
				<?php foreach ($jabatan->result() as $row):?>
					<option value="<?php echo $row->jabatan;?>"><?php echo $row->jabatan;?></option>
				<?php endforeach;?>	
				</select>
				<label>Profil</label>
<?php foreach ($pegawai->result() as $isi):?>			
				<textarea name="profil">
					<?php echo $isi->profil;?>
				</textarea>
				<label>Foto</label>
				<input  id="image" type="file" value="<?php echo $isi->foto;?>" name="userfile">
				<input type="hidden" name="foto" id="foto" value="<?php echo $isi->foto;?>">
				<p class="text-danger pull-right">* Biarkan Foto Kosong Bila Tidak Di Edit</p>
				<br>
				<button class="btn btn-block btn-primary"><i class="glyphicon glyphicon-open"></i> Update</button>
		</div>
	</div>
	</div>
	
		<div class="col-md-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><i class="glyphicon glyphicon-eye-open"></i> Priview Data</h4>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered">
					<tr>
						<td class="text-center" colspan="2">
						<img height="150" width="150" class="img displayed img-responsive" src="<?php echo site_url("upload/$isi->foto");?>">
						</td>
					</tr>
					<tr><td>NIP</td><td id="isi_nip"><?php echo $isi->nip;?></td></tr>
					<tr><td>Nama</td><td  id="isi_nama"><?php echo $isi->nama;?></td></tr>
					<tr><td>Alamat</td><td id="isi_alamat"><?php echo $isi->alamat;?></td></tr>
					<tr><td>Jabatan</td><td id="isi_jabatan"><?php echo $isi->jabatan;?></td></tr>		
					<tr><td>Profil</td><td id="isi_profil"><?php echo $isi->profil;?></td></tr>		
					<tr>
						<td class="text-right" colspan="2">
							<a href="<?php echo site_url('admin/kelola_pegawai');?>" class="btn btn-success"><i class="glyphicon glyphicon-backward"></i> Batal Edit </a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	
	</div>
<?php endforeach;?>
<script type="text/javascript">
	$(document).ready(function  () {
		var foto=$('#foto').val();
		$('#image').val(foto);
	})
</script>