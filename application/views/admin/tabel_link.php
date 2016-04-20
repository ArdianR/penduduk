
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
				<th colspan="4">Tambah Data</th>
			</thead>
			<form class="form-control" method="post" action="<?php echo site_url('admin/kelola_link/add');?>">
			<thead class="bg-primary">
				<th>#</th>
				<th><input name="nama" class="form-control"></th>
				<th><input name="link" class="form-control " placeholder="http://www.abcd.com"></th>
				<th><button type="submit" id="btn_tambah" class="btn btn-primary">+ Tambah</button></th>
			</thead>
			</form>
		
		<thead>
			<th class="text-center">NO</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Link</th>
			<th class="text-center">Aksi</th>
		</thead>
		<?php $no=1; foreach ($link->result() as $row):?>
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_link/update_data');?>">
			<tbody>
				<tr>
					<td width="10%"><input readonly class="form-control" value="<?php echo $no++;?>"></td>
					<td><input name="nama" class="form-control" value="<?php echo $row->nama;?>"></td>
					<td><input name="link" class="form-control" value="<?php echo $row->link;?>"></td>
					<td>
						<input name="id" type="hidden" class="form-control" value="<?php echo $row->id;?>">
						<button type="submit" title="Update" class="btn btn-success"><i class="glyphicon glyphicon-open"></i> </button>
						<a title="Hapus" class="btn btn-danger" href='<?php echo site_url("admin/kelola_link/delete_data/$row->id");?>'><i class="glyphicon glyphicon-remove"></i> </a>
					</td>
				</tr>
			</tbody>
			</form>
		<?php endforeach;?>
		</table>
		</div>
	</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Priview Link Terkait
			</div>
			<div class="panel-body">
			<ul class="nav">
				<?php $no=1; foreach ($link->result() as $row):?>
					<li>
						<a href="<?php echo $row->link;?>"><i class="glyphicon glyphicon-tag"></i> <?php echo $row->nama;?></a>
					</li>
				<?php endforeach;?>	
			</ul>
			</div>
		</div>
	</div>
</div>
</div>