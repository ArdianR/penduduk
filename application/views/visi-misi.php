<div class="container">
	<div class="row-clearfix">
		<div class="col-md-12">
			<div class="jumbotron">
			<h1>Visi Misi</h1>
			<?php foreach ($visi->result() as $row):?>
				<?php echo $row->visimisi;?>
			<?php endforeach;?>	
			</div>
		</div>
	</div>
</div>