<title><?php echo $title;?></title>
<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4><i class="glyphicon glyphicon-eye-open"></i> Data Petugas</h4>
				<div class="text-right">
					<a class="btn btn-success" href="">
					<i class="glyphicon glyphicon-refresh"></i>
					</a>
				</div>
			</div>
			<div class="panel-body">
			<?php foreach ($pegawai->result() as $x):?>
				<table class="table table-striped table-bordered">
					<tr><td colspan="2"><img class="img img-responsive" height="200" width="200" src="<?php echo base_url("upload/$x->foto");?>"></td></tr>
					<tr><td width="20%">NIP</td><td id="isi_nip"><?php echo $x->nip;?></td></tr>
					<tr><td width="20%">Nama</td><td  id="isi_nama"><?php echo $x->nama;?></td></tr>
					<tr><td width="20%">Alamat</td><td id="isi_alamat"><?php echo $x->alamat;?></td></tr>
					<tr><td width="20%">Jabatan</td><td id="isi_jabatan"><?php echo $x->jabatan;?></td></tr>	
					<tr><td width="20%">Profil</td><td id="isi_jabatan"><?php echo $x->profil;?></td></tr>	
				</table>
			<?php endforeach;?>	
			</div>
		</div>
	</div>
</div>