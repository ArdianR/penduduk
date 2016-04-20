<div class="container">
	<div class="row clearfix">
		<div class="footer alert ">
			<div class="col-md-12 alert-success">
				<div class="col-md-4 alert alert-success">
				<h4>Alamat Kantor</h4>
				
				<div class="address">
					<?php echo $alamat;?>
				</div>
				</div>
				<div class="col-md-4 alert alert-success">
				<h4>Link Terkait</h4>
				<ul class="nav">
					<?php $no=1; foreach ($link->result() as $row):?>
					<li>
						<a href="<?php echo $row->link;?>"><i class="glyphicon glyphicon-tag"></i> <?php echo $row->nama;?></a>
					</li>
					<?php endforeach;?>
				</ul>		
				</div>
				<div class="col-md-4 alert alert-success">
				<h4>Kontak</h4>
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
