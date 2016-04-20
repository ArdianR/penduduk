<div class="container">
<div class="col-md-12">
	<div class="text-center">
		<?php echo ($this->session->flashdata('pesan'));?>
	</div>
</div>
	<div class="panel panel-default">
			<?php foreach ($berita->result() as $row):?>
				<div class="panel-heading">
					<h3><?php echo $row->judul;?></h3>
				</div>
				<div class="panel-body">

				<table class="table">
					<tr>
						<td width="30%"><img class="img img-responsive"  src="<?php echo base_url("upload/$row->gambar");?>"></td>
						<td><?php echo $row->isi;?></td>
					</tr>
				</table>
					
					<br>
				
				</div>
			<?php endforeach;?>	
		</div>
</div>