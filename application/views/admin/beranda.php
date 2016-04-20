<!DOCTYPE html>
<html>
<head>
	<title>Administrator- Aplikasi Kependudukan</title>
<script type="text/javascript">
	$(document).ready(function  () {
		$('ul li a').click(function() {
		    $('ul li.active').removeClass('active');
		    $(this).closest('li').addClass('active');
		});
	});
</script>	
</head>
<body>
<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="<?php echo base_url('admin/beranda');?>"><i class="glyphicon glyphicon-home"></i> Administrator</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="">
							<a href="<?php echo site_url('admin/kelola_penduduk');?>" target="iframe">
							<i class="glyphicon glyphicon-user"></i>
							   Penduduk</a>
						</li>
					<!-- 	<li>
							<a href="<?php echo site_url('admin/kelola_potensi');?>" target="iframe"> 
							<i class="glyphicon glyphicon-star"></i>
							  Potensi</a>
						</li> -->
						<li>
							<a href="<?php echo site_url('admin/mutasi_penduduk');?>" target="iframe"> 
							<i class="glyphicon glyphicon-upload"></i>
							  Mutasi Penduduk</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/kelola_desa');?>" target="iframe"> 
							<i class="glyphicon glyphicon-tree-conifer"></i>
							  Data Desa</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/berita');?>" target="iframe">
							<i class="glyphicon glyphicon-file"></i>
								Berita
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/kelola_visimisi');?>" target="iframe"> 
							<i class="glyphicon glyphicon-retweet"></i>
							  Visi Misi</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/kelola_informasi');?>" target="iframe">
							<i class="glyphicon glyphicon-info-sign"></i>
								Informasi
							</a>
						</li>
						<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-briefcase"></i> 
									 Pegawai
									 <strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										
										<li>
											<a href="<?php echo site_url('admin/kelola_pegawai/');?>" target="iframe">
											<i class="glyphicon glyphicon-home"></i> Kelola Pegawai</a>
										</li>
										<li>
											<a href="<?php echo site_url('admin/kelola_jabatan');?>" target="iframe">
											<i class="glyphicon glyphicon-list-alt"></i> Set Jabatan</a>
										</li>
									</ul>
								</li>

						
			
						<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-wrench"></i> 
									 Pengaturan
									 <strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										
										<li>
											<a href="<?php echo site_url('admin/kelola_alamat');?>" target="iframe">
											<i class="glyphicon glyphicon-home"></i> Alamat</a>
										</li>
										<li>
											<a href="<?php echo site_url('admin/kelola_link');?>" target="iframe">
											<i class="glyphicon glyphicon-link"></i> Link Terkait</a>
										</li>
										<li>
											<a href="<?php echo site_url('admin/kelola_kontak');?>" target="iframe">
											<i class="glyphicon glyphicon-phone"></i> Kontak</a>
										</li>
										
									</ul>
								</li>
								<li>
									<a href=""> </a>
								</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li>
						<a title="Reload Aplikasi" href=""><i class="glyphicon glyphicon-refresh"> </i></a>
					</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i>  <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="<?php echo site_url('admin/kelola_super_admin');?>" target="iframe">
									<i class="glyphicon glyphicon-wrench"></i> <?php echo ( $username);?></a>
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="<?php echo site_url('login/logout');?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
								</li>
							</ul>
						</li>
						<li>
							<a href=""> </a>
						</li>
					</ul>
					
				</div>
		</nav>
		<br>
		<br>
		<br>
		<br>
</div>
<div class="container-fluid">
	<div class="row clearfix">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<?php echo $this->session->flashdata('pesan');?>
	</div>
	<div class="col-md-4"></div>
	
	<div class="col-md-12">
		<iframe name="iframe" id="frame" frameborder="0" height="150%" width="100%" src="<?php echo site_url('admin/beranda/status');?>">
		</iframe>
	</div>
	</div>
</div>
</body>
</html>
