<div class="container">
	<div class="row clearfix">
		<div class="col-md-12">
		<div class="text-center" id="pesan">
			<?php echo $this->session->flashdata('pesan');?>
		</div>
			<table class="table table-bordered table-stiped">
				<thead class="bg-success">
					<th colspan="4">
						<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="<?php echo site_url('admin/berita');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
					</th>
				</thead>
				<thead class="bg-primary">
					<th>No</th><th>Judul</th><th>Tanggal</th><th>Aksi</th>
				</thead>
				<tbody>
				<?php $no=1; foreach ($berita->result() as $row):?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $row->judul;?></td>
						<td><?php echo dateindo($row->tanggal);?></td>
						<td>
							<a href="<?php echo site_url("admin/berita/edit/$row->id_berita");?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="<?php echo site_url("admin/berita/delete/$row->id_berita");?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						</td>
					</tr>
				<?php endforeach ;?>	
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function  () {
		$('#pesan').delay(500).fadeOut('slow');	
	})
</script>