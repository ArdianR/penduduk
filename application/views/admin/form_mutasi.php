<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
	<form method="post" action="<?php echo base_url("admin/mutasi_penduduk/insert")?>">
	<div class="panel panel-primary">
	<div class="panel-heading">
		Mutasi Penduduk	
	</div>
	<div class="panel-body">

	<label>Nama Penduduk</label>

	<select class="form-control select" name="nik">
		<?php foreach($penduduk->result() as $row):?>
		<option value="<?=$row->nik;?>"><?=$row->nama;?> [<?=$row->nik;?>]</option>
		<?php endforeach;?>
	</select>
	<br>
	<br>
						<label>Pindah Tanggal</label>
						<div class="form-inline">
							<div class="form-group">
								<select name="tanggal_pindah" class="form-control">
									<?php for($i=1;$i<=31;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="bulan_pindah" class="form-control">								
									<?php for($i=1;$i<=12;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
								<select name="tahun_pindah" class="form-control">
									<?php $d=date('Y');for($i=$d-30;$i<=$d+10;$i++):?>
										<option value="<?=sprintf("%'.02d", $i);?>"><?=sprintf("%'.02d", $i);?></option>
									<?php endfor;?>
								</select>
							</div>
						</div>
						<label>Pindah Ke</label>
						<input class="form-control" name="pindah_ke">
						<label>Keterangan</label>
						<textarea class="form-control" name="keterangan"></textarea>

	</div>
	<div class="panel-footer">
	<button type="submit" class="btn btn-primary">
		Simpan Mutasi
	</button>
	</div>
	</div>
	</form>
</div>
<div class="col-md-3"></div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$('.select').select2();
	})
</script>