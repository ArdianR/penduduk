<script type="text/javascript">
	$(document).ready(function  () {
		$('#form_cari').hide();

		$('#pesan').delay(1000).fadeOut('Slow');

		$('#btn_cari').click(function  () {
			
			$('#form_cari').toggle();
		})
	})
</script>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12">
		<div id="pesan" class="text-center">
			<?php echo $this->session->flashdata('pesan');?>
		</div>
			<table class="table table-responsive table-bordered table-condensed">
				<thead class="bg-success">
					<th colspan="6">
						<a href="<?php echo site_url('admin/kelola_pegawai/insert');?>" class="btn btn-primary">+ Tambah</a>
						<button id="btn_cari" class="btn btn-primary" ><i class="glyphicon glyphicon-search"></i> Cari</button>
						<a href="<?php site_url('admin/kelola_pegawai');?>" class="btn btn-primary"><i class="glyphicon glyphicon-refresh" ></i> Refresh</a>
						<div class="pull-right">
							Jumlah Data :<?php echo count($pegawai->result());?>
						</div>
					</th>
				</thead>
				<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_pegawai/search');?>">
				<thead id="form_cari">
					<th colspan="5">
						<input name="cari" class="form-control" placeholder="Masukan nama..">
					</th>
					<th>
						<button type="submit" class="btn btn-primary btn-block" ><i class="glyphicon glyphicon-search"></i> Cari</button>
					</th>
				</thead>	
				</form>
				<thead class="bg-primary">
					<td>No</td><th>NIP</th><th>Nama</th><th>Alamat</th><th>Jabatan</th><th class="text-center">Aksi</th>
				</thead>
				<tbody>
				<?php $no=1; foreach ($pegawai->result() as $row):?>
					<tr>
						<td><?php echo $no++;?> </td>
						<td><?php echo $row->nip;?></td>
						<td><?php echo $row->nama;?></td>
						<td><?php echo $row->alamat;?></td>
						<td><?php echo $row->jabatan;?></td>
						<td class="text-center">
							<a title="Detail" href="<?php echo site_url("admin/kelola_pegawai/detail/$row->idpegawai");?>" class="btn btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a title="Edit" href="<?php echo site_url("admin/kelola_pegawai/update/$row->idpegawai");?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a title="Hapus" href="<?php echo site_url("admin/kelola_pegawai/delete/$row->idpegawai");?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						</td>
					</tr>
				<?php endforeach;?>	
				</tbody>
			</table>
		</div>
	</div>
</div>
