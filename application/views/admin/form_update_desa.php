
<div class="col-md-12" id="form">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped table-condensed">
				<thead class="bg-primary">
					<th class="text-center">NO</th><th class="text-center">Nama Desa</th><th class="text-center">Luas Wilayah (Km 2)</th><th class="text-center">Ketinggian</th><th class="text-center">Keadaan Permukaan</th><th class="text-center" width="10%">Aksi</th>
				
				</thead>
				<tbody>
				<form class="form-group" method="post" action="<?php echo site_url("admin/kelola_desa/update");?>">
				<?php $no=1; foreach($desa->result() as $row):?>
					<tr>
						<td>
							<input class="form-control" value="<?php echo $row->kode_desa;?>" readonly name="kode_desa">
						</td>
						<td>
							<input class="form-control" value="<?php echo $row->nama_desa;?>" name="nama_desa">
						</td>
						<td>
							<input class="form-control" value="<?php echo $row->luas_wilayah;?>" name="luas_wilayah" >
						</td>
						<td>
							<input class="form-control" value="<?php echo $row->ketinggian;?>" name="ketinggian">
						</td>
						<td>
							<input class="form-control" value="<?php echo $row->keadaan_permukaan;?>" name="keadaan_permukaan">
						</td>
						<td width="20%" class="text-center">

							<button type="submit" class="btn btn-success" >
							<i class="glyphicon glyphicon-save"></i> Save
							</button>

							<a class="btn btn-default" href="<?php echo site_url("admin/kelola_desa");?>">
							<i class="glyphicon glyphicon-remove"></i> Cancel
							</a>
						</td>
					</tr>
				<?php endforeach;?>	
				</form>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>