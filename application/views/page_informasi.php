<div class="container">
<div class="col-md-12">
	<div class="text-center">
		<?php echo ($this->session->flashdata('pesan'));?>
	</div>
</div>
	<div class="panel panel-default">
			<?php foreach ($informasi->result() as $row):?>
				<div class="panel-heading">
					<h3><?php echo $row->judul;?></h3>
				</div>
				<div class="panel-body">
					<?php echo $row->isi;?>
				
				</div>
			<?php endforeach;?>	
		</div>
</div>