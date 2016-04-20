<div class="col-md-12">
<h4>Tambah Data Penduduk</h4>
<hr>
	<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_penduduk/tambah');?>" enctype="multipart/form-data">
	<div class="panel panel-default">
	<div class="panel-heading">
		Form Data Penduduk
		<div class="pull-right"><a class="btn btn-primary btn-sm" href=""><i class="glyphicon glyphicon-refresh"></i> </a></div>

	</div>
	<div class="panel-body">
	<small class="text-danger">* Tulis Dengan Huruf KAPITAL</small>		
			<table class="table table-condensed">
				<tr>
					<td width="45%">
						<label>NIK</label>
						<input min="0" name="nik" type="number" class="form-control input-sm" placeholder="NIK">
						<label>Nama Lengkap</label>
						<input name="nama" type="text" class="form-control input-sm" placeholder="Nama Lengkap">
						<label>Tempat Lahir</label>
						<input name="tempat_lahir" type="text" class="form-control input-sm" placeholder="Tempat Lahir">
						<label>Tanggal Lahir</label>
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal_lahir" class="form-control">
									<?php for($i=1;$i<=31;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="bulan_lahir" class="form-control">
									<?php for($i=1;$i<=12;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="tahun_lahir" class="form-control">
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
						     <input class="form-control input-sm" name="rt">
						    </div>
						  </div>
						  <div class="col-md-3">
						    <div class="input-group">
						      <span class="input-group-btn">
						         <button class="btn btn-primary btn-sm" type="button">RW</button>
						      </span>
						      <input class="form-control input-sm" name="rw">
						    </div>
						  </div>
						</div>
						<br>
						<label>Jenis Kelamin :</label>
						<br>
						&nbsp;
						<input class="" type="radio" name="jenis_kelamin" value="LAKI-LAKI"> 
						 Laki-Laki  &nbsp;&nbsp;&nbsp;
						<input class="" type="radio" name="jenis_kelamin" value="PEREMPUAN">
						 Perempuan
						 <br>
						 <label>Agama</label>
						 <select class="form-control" name="agama" required>
						 	<option value="ISLAM"> ISLAM</option>
						 	<option value="KHATOLIK"> KHATOLIK</option>
						 	<option value="PROTESTAN"> PROTESTAN</option>
						 	<option value="HINDU"> HINDU</option>
						 	<option value="BUDHA"> BUDHA</option>
						 </select>
						 
					</td>
					<td  width="5%">
						
					</td>
					<td width="45%">
					<label>Dusun</label>
						<input class="form-control input-sm" name="dusun" placeholder="Dusun/Keluarahan">
						<label>Desa</label>
						<input class="form-control input-sm" name="desa" placeholder="Desa/Keluarahan" value="<?=$nama_desa;?>">
						<label>Kecamatan</label>
						<input class="form-control input-sm" name="kecamatan" placeholder="Kecamatan">
						<label>Status Perkawinan</label>
						<select class="form-control input-sm" name="status">
							<option selected value="">Pilih Status</option>
							<option value="KAWIN">KAWIN</option>
							<option value="BELUM KAWIN">BELUM KAWIN</option>
						</select>
						<label>Pekerjaan</label>
						<input class="form-control input-sm" name="pekerjaan" placeholder="Pekerjaan">
						<label>Kewarganegaraan</label>
						<select name="kwn" class="form-control input-sm">
							<option selected value="">Pilih</option>
							<option value="WNI">WNI</option>
							<option value="WNA">WNA</option>
						</select>
						<label>Berlaku Hingga</label>
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal_aktif" class="form-control">
									<?php for($i=1;$i<=31;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="bulan_aktif" class="form-control">
									<?php for($i=1;$i<=12;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="tahun_aktif" class="form-control">
									<?php $d=date('Y');for($i=$d-30;$i<=$d+10;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
							</div>
						</div>
						<label>Foto</label>
						<input class="form-control" name="userfile" type="file" accept="image/jpeg">
					</td>
				</tr>
			</table>
			<a class="btn btn-default" href="<?php echo base_url('admin/kelola_penduduk');?>">
				<i class="glyphicon glyphicon-fast-backward"></i> Kembali
			</a>
	<div class="pull-right">
		<button class="btn-primary btn" type="submit"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
		<button class="btn btn-warning" type="reset"><i class="glyphicon glyphicon-retweet"></i> Reset</button>
	</div>
		
	</div>
	</form>
	</div>
	
</div>