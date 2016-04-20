
<div class="container">
<div class="row clearfix">
	<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">
		<h3>Tebel Link</h3>
		</div>
		<div class="panel-body">
		<table class="table table-bordered table-striped table-hover table-condensed">
			
			<thead class="bg-primary">
				<th colspan="5">Tambah Data</th>
			</thead>
			<form class="form-control" method="post" action="<?php echo site_url('admin/kelola_kontak/add');?>">
			<thead class="bg-primary">
				
				<th class="text-center"> </th>
				<th><input name="nama" class="form-control" placeholder="Nama"></th>
				<th><input name="isi" class="form-control " placeholder="Isi"></th>
				<th>
					<select required name="jenis" class="form-control">
					<option  value="" selected="">--Jenis Kontak--</option>
					<?php foreach ($jenis->result() as $row):?>
						<option value="<?php echo $row->id_jenis;?>"><?php echo $row->nama_jenis;?></option>
					<?php endforeach;?>	
					</select>
				</th>
				<th><button type="submit" id="btn_tambah" class="btn btn-primary">+ Tambah</button></th>
			</thead>
			</form>
		
		<thead>
			
			<th class="text-center">#</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Isi</th>
			<th class="text-center">Jenis Kontak</th>
			<th class="text-center">Update</th>
		</thead>
		<?php $no=1; foreach ($kontak->result() as $row):?>
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_kontak/update_data');?>">
			<tbody>
				<tr>
				<input name="id" type="hidden" class="form-control" value="<?php echo $row->id;?>">
					<td><a title="Hapus" class="btn btn-sm btn-danger" href='<?php echo site_url("admin/kelola_kontak/delete_data/$row->id");?>'><i class="glyphicon glyphicon-remove"></i> </a></td>					
					<td><input name="nama" class="form-control" value="<?php echo $row->nama;?>"></td>
					<td><input name="isi" class="form-control" value="<?php echo $row->isi;?>"></td>
			
					<td>
						<select  name="jenis" class="form-control">
						<option  value="" selected="">--Jenis Kontak--</option>
						<?php foreach ($jenis->result() as $row):?>
							<option value="<?php echo $row->id_jenis;?>"><?php echo $row->nama_jenis;?></option>
						<?php endforeach;?>	
						</select>
					</td>
				
					<td class="text-center">				
						<button type="submit" title="Update" class="btn btn-block btn-success"><i class="glyphicon glyphicon-open"></i> </button>
					</td>
		<?php endforeach;?>				
				</tr>
			</tbody>
			</form>
		
		</table>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Priview Kontak
			</div>
			<div class="panel-body">
			<ul class="nav">
				<?php $no=1; foreach ($kontak->result() as $row):?>
					<li>
						<a href=""><?php echo $row->kode_jenis;?> <?php echo $row->nama;?>: <?php echo $row->isi;?></a>
					</li>
				<?php endforeach;?>	
			</ul>
			</div>
		</div>
	</div>
</div>
</div>