<div class="col-md-12">
<h4>Edit Data Penduduk</h4>
<hr>
	<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_penduduk/update');?>" enctype="multipart/form-data">
	<div class="panel panel-default">
	<div class="panel-heading">
		Form Data Penduduk
		<div class="pull-right"><a class="btn btn-primary btn-sm" href=""><i class="glyphicon glyphicon-refresh"></i> </a></div>
	</div>
	<?php foreach ($penduduk->result() as $row):?>
	<div class="panel-body">
	<small class="text-danger">* Tulis Dengan Huruf KAPITAL</small>		
			<table class="table table-condensed table-hover">
				<tr>
					<td colspan="2">
						<?php if (!empty($row->foto)){?>
						<img width="500px;" height="auto" class="img-center" src="<?php echo base_url("upload/$row->foto");?>">
						<?php }else{?>
						<h1 class="text-center text-muted"> Tidak Ada Foto</h1>
						<?php };?>
					</td>
				</tr>
				<tr>
					<td width="50%">
						<label>NIK</label>
						<input readonly value="<?php echo $row->nik;?>"  min="0" name="nik" type="number" class="form-control input-sm" placeholder="NIK">

						<label>Nama Lengkap</label>
						<input value="<?php echo $row->nama;?>" name="nama" type="text" class="form-control input-sm" placeholder="Nama Lengkap">
						<label>Tempat Lahir</label>
						<input value="<?php echo $row->tempat_lahir;?>" name="tempat_lahir" type="text" class="form-control input-sm" placeholder="Tempat Lahir">
						<label>Tanggal Lahir</label>
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal_lahir" class="form-control">
									<option value="<?=substr($row->tanggal_lahir,8,2);?>"><?=substr($row->tanggal_lahir,8,2);?></option>
									<?php for($i=1;$i<=31;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="bulan_lahir" class="form-control">
								<option value="<?=substr($row->tanggal_lahir,5,2);?>"><?=substr($row->tanggal_lahir,5,2);?></option>
									<?php for($i=1;$i<=12;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="tahun_lahir" class="form-control">
									<option value="<?=substr($row->tanggal_lahir,0,4);?>"><?=substr($row->tanggal_lahir,0,4);?></option>
									<?php $d=date('Y');for($i=$d-30;$i<=$d+10;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
							</div>
						</div>
						
						<label>RT/RW</label>
						<div class="row">
						  <div class="col-md-3">
						    <div class="input-group">
						      <span class="input-group-btn">
						        <button class="btn btn-primary btn-sm" type="button">RT</button>
						      </span>
						     <input value="<?php echo $row->rt;?>" class="form-control input-sm" name="rt">
						    </div>
						  </div>
						  <div class="col-md-3">
						    <div class="input-group">
						      <span class="input-group-btn">
						         <button class="btn btn-primary btn-sm" type="button">RW</button>
						      </span>
						      <input value="<?php echo $row->rw;?>" class="form-control input-sm" name="rw">
						    </div>
						  </div>
						</div>
						<br>
						<label>Jenis Kelamin :</label>
						&nbsp;
						<input required class="" type="radio" name="jenis_kelamin" value="LAKI-LAKI"> 
						 Laki-Laki  &nbsp;&nbsp;&nbsp;
						<input required class="" type="radio" name="jenis_kelamin" value="PEREMPUAN">
						 Perempuan
<select class="form-control" name="agama" required>
						 	<option value="ISLAM"> ISLAM</option>
						 	<option value="KHATOLIK"> KHATOLIK</option>
						 	<option value="PROTESTAN"> PROTESTAN</option>
						 	<option value="HINDU"> HINDU</option>
						 	<option value="BUDHA"> BUDHA</option>
						 </select>
					</td>
					<td>
<label>Dusun</label>
						<input value="<?php echo $row->dusun ;?>" class="form-control input-sm" name="desa" placeholder="Desa/Keluarahan">
						<label>Desa</label>
						<input value="<?php echo $row->desa ;?>" class="form-control input-sm" name="desa" placeholder="Desa/Keluarahan">
						<label>Kecamatan</label>
						<input value="<?php echo $row->kecamatan ;?>" class="form-control input-sm" name="kecamatan" placeholder="Kecamatan">
						<label>Status Perkawinan</label>
						<select class="form-control input-sm" name="status">
							<option selected value="<?php echo $row->status ;?>"><?php echo $row->status ;?></option>
							<option value="KAWIN">KAWIN</option>
							<option value="BELUM KAWIN">BELUM KAWIN</option>
						</select>
						<label>Pekerjaan</label>
						<input value="<?php echo $row->pekerjaan ;?>" class="form-control input-sm" name="pekerjaan" placeholder="Pekerjaan">
						<label>Kewarganegaraan</label>
						<select name="kwn" class="form-control input-sm">
							<option selected value="<?php echo $row->kewarganegaraan ;?>"><?php echo $row->kewarganegaraan ;?></option>
							<option value="WNI">WNI</option>
							<option value="WNA">WNA</option>
						</select>
						<label>Berlaku Hingga</label>
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal_aktif" class="form-control">
									<option value="<?=substr($row->berlaku_hingga,8,2);?>"><?=substr($row->berlaku_hingga,8,2);?></option>
									<?php for($i=1;$i<=31;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="bulan_aktif" class="form-control">
									<option value="<?=substr($row->berlaku_hingga,5,2);?>"><?=substr($row->berlaku_hingga,5,2);?></option>
									<<?php for($i=1;$i<=12;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="tahun_aktif" class="form-control">
								<option value="<?=substr($row->berlaku_hingga,0,4);?>"><?=substr($row->berlaku_hingga,0,4);?></option>
									<?php $d=date('Y');for($i=$d-30;$i<=$d+10;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
							</div>
						</div>
						<label>Foto</label>
						<input class="form-control" name="userfile" type="file" accept="image/jpeg">
						<div class="alert alert-warning">
							<p>Kosongkan Jika Tidak Di Ganti</p>
						</div>
					</td>
				</tr>
			</table>
	
			<a class="btn btn-default" href="<?php echo base_url('admin/kelola_penduduk');?>"><i class="glyphicon glyphicon-fast-backward"></i> Kembali</a>
	<div class="pull-right">
		<button class="btn-primary btn" type="submit"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
		<button class="btn btn-warning" type="reset"><i class="glyphicon glyphicon-retweet"></i> Reset</button>
	</div>
		
	</div>
	</form>
<?php endforeach;?>
	</div>
	
</div>