<script type="text/javascript">
	$(document).ready(function  () {
		$('#form_tambah').hide();
		$('#btn_tambah').click(function  () {
			$('#form_tambah').toggle();
		})
	})
</script>
<div class="col-md-12" id="table">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<h2>Kelo Data Desa</h2>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped table-condensed">
			<thead class="bg-success">
				<th colspan="6">
					<button id="btn_tambah" class="btn btn-primary">+ Tambah</button>
					<div class="pull-right">
						Jumlah Desa : <?php echo count($desa->result());?>
					</div>
				</th>
			</thead>
			<form class="form-group" action="<?php echo site_url('admin/kelola_desa/tambah');?>" method="post">
				<thead id="form_tambah">
				<th class="text-center">#</th>
				<th>
					<input class="form-control" name="nama_desa" placeholder="Nama desa..">
				</th>
				<th>
					<input class="form-control" name="luas_wilayah" placeholder=" Luas Wilayah" type="number"> 
				</th>
				<th>
					<input class="form-control" name="ketinggian" placeholder="Ketinggian" type="number">
				</th>
				<th>
					<select class="form-control">
						<option value="">Keadaan Permukaan</option>
						<option value="Berbukit">Berbukit</option>
						<option value="Datar">Datar</option>
					</select>
				</th>
				<th>
				<button type="submit" class="btn-block btn btn-primary"> <i class="glyphicon glyphicon-save"></i> Simpan</button>
				</th>
			</thead>	
			</form>
				<thead class="bg-primary">
					<th>NO</th><th>Nama Desa</th><th>Luas Wilayah (Km 2)</th><th>Ketinggian</th><th>Keadaan Permukaan</th><th width="20%">Aksi</th>
				</thead>
				<tbody>
				<?php $no=1; foreach($desa->result() as $row):?>
					<tr>
						<td><?php echo $no++;?> </td>
						<td><?php echo $row->nama_desa;?></td>
						<td><?php echo $row->luas_wilayah;?></td>
						<td width="20%"><?php echo $row->ketinggian;?></td>
						<td><?php echo $row->keadaan_permukaan;?></td>
						<td width="10%" class="text-center">

							<a class="btn btn-warning" href="<?php echo site_url("admin/kelola_desa/f_update/$row->kode_desa");?>">
							<i class="glyphicon glyphicon-edit"></i>
							</a>

							<a class="btn btn-danger" href="<?php echo site_url("admin/kelola_desa/hapus/$row->kode_desa");?>">
							<i class="glyphicon glyphicon-remove"></i>
							</a>
						</td>
					</tr>
				<?php endforeach;?>	
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-2"></div>

</div>
