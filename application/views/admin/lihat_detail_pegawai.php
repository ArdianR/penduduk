<div class="container-fluid">
<div class="row clearfix">
<?php foreach ($pegawai->result() as $isi):?>
		<div class="col-md-12">
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
							<a href="<?php echo site_url('admin/kelola_pegawai');?>" class="btn btn-success"><i class="glyphicon glyphicon-backward"></i> Kembali Edit </a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	
	</div>
<?php endforeach;?>
