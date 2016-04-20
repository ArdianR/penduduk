<div>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i> </a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo base_url();?>">Halaman Utama</a>
						</li>
						<li>
							<a href="<?php echo base_url('beranda/data_kependudukan');?>">Data Kependudukan</a>
						</li>
	
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url('beranda/visimisi');?>">Visi Misi</a>
								</li>
								
								<li>
									<a href="<?php echo site_url('beranda/maps');?>">Peta Lokasi</a>
								</li>
								<?php foreach($allinformasi->result() as $row):?>
								<li>
									 <a href="<?=base_url("beranda/informasi/$row->id_informasi");?>"><?=$row->judul;?></a>
								</li>
								<?php endforeach;?>	
								
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" method="POST" action="<?php echo site_url('beranda/cari_berita');?>">
						<div class="form-group">
							<input name="cari" type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Cari Berita</button>
					</form>
				
				</div>
			</nav>

			<br>
			<br>
			<br>
			<br>
</div>