<div class="alert alert-success">
<a class="btn btn-primary" href="<?php echo base_url("admin/mutasi_penduduk/form_mutasi");?>"> Buat Mutasi</a>
</div>
<?=$this->session->flashdata('pesan');?>
<table class="table" id="tbl_mutasi">
	<thead class="bg-primary">
		<th>NIK</th>
		<th>Nama</th>
		<th>Tanggal Pindah</th>
		<th>Pidah Ke</th>
		<th>Keterangan</th>
	</thead>
	<tbody>
	<?php foreach($mutasi->result() as $row):?>
		<tr>
			<td><?=$row->nik;?></td>
			<td><?=$row->nama;?></td>
			<td><?=$row->tanggal_pindah;?></td>
			<td><?=$row->pindah_ke;?></td>
			<td><?=$row->keterangan;?></td>
		</tr>
	<?php endforeach;?>	
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function() {
    $('#tbl_mutasi').DataTable();
} );
</script>