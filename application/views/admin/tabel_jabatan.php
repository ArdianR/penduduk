<div class="container">
	<div class="row clearfix">
		<div class="col-md-12">
		<div class="text-center">
			<?php echo($this->session->flashdata('pesan'));?>
		</div>
			<table class="table table-responsive table-bordered table-condensed">
				<thead class="bg-success">
					<th colspan="6">
						<button title="Hide/Show Form" id="btn_tambah" class="btn btn-primary"><i class="glyphicon glyphicon-eject"></i></button>		
						<a title="Refresh Tabel" href="<?php echo site_url('admin/kelola_jabatan');?>" class="btn btn-primary"><i class="glyphicon glyphicon-refresh" ></i></a>
					</th>
				</thead>
				<form class="form-group" action="<?php echo site_url('admin/kelola_jabatan/tambah');?>" method="POST" >
				<thead id="tambah" class="bg-primary">
					<th class="text-center">#</th>
					<th><input class="form-control" name="jabatan" placeholder="Jabatan"></th>
					<th>
						<button type="submit" class="btn btn-block btn-primary">+ Tambah</button>
					</th>
				</thead>
				</form>
				<thead class="bg-primary">
					<td class="text-center">No</td><th class="text-center">Jabatan<th class="text-center">Aksi</th>
				</thead>
				<tbody>
				<?php $no=1; foreach ($jabatan->result() as $row):?>
					<tr>
						<td><?php echo $no++;?> </td>
						<td><?php echo $row->jabatan;?></td>
						<td class="text-center">
							<a title="Edit" href="<?php echo site_url("admin/kelola_jabatan/form_edit_jabatan/$row->id_jabatan");?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a title="Hapus" href="<?php echo site_url("admin/kelola_jabatan/delete_jabatan/$row->id_jabatan");?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						
						</td>
					</tr>
				<?php endforeach;?>	
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function  () {

		$('#btn_tambah').click(function  () {
			$('#tambah').toggle();
		});
	})
</script>
