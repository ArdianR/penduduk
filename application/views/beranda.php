<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Kependudukan</title>
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
<div class="row clearfix">
	<div class="col-md-12">
		<?php include 'nav.php';?>
	</div>
	<div id="header" class="col-md-12">
		<table class="table" border="0">
			<tr>
				<td width="20%"><img height="150" width="150" class="img img-responsive" src="<?php echo  base_url();?>src/img/logo.gif" class="img"></td>
				<td>
					<h1 class="text-bold"><b>Sistem Informasi Kependudukan</b></h1>
					<h4>Nama Desa</h4>
				</td>
			</tr>
		</table>
		<hr>
		<br>
	</div>
	<div class="col-md-12">
		<div class="col-md-8">
			<?php include 'slider.php';?>
		</div>
		<div class="col-md-4">
			<?php include 'login.php';?>
		</div>
	</div>
		<div class="col-md-12">
		<br>
		<div class="col-md-8">
		<?php foreach ($berita->result() as $row):?>
		<div class="panel panel-default">
				<div class="panel-heading">
					<a href="<?php echo site_url("beranda/berita_khusus/$row->id_berita");?>"><h3><?php echo $row->judul;?></h3></a>
				</div>
				<div class="panel-body">
					<div class="text-right text-muted">
						<?php echo dateindo($row->tanggal);?>
					</div>
				<table class="table">
					<tr>
						<td width="30%"><img class="img img-responsive"  src="<?php echo base_url("upload/$row->gambar");?>"></td>
						<td><?php echo $row->isi;?></td>
					</tr>
				</table>
				</div>
		</div>
		<br>
		<?php endforeach;?>	
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
	</div>
</div>
	
<div class="container-">
<div class="row clearfix">
	<div class="col-md-12">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><i class="glyphicon glyphicon-user"></i> Kependudukan</h3>
				</div>
				<div class="panel-body">
					<form class="form-group" method="post" action="<?php echo site_url('beranda/data_per_desa');?>"> 
			         <div class="panel-body">
			            <div class="input-group">
			              <select required name="kode_desa" id="select" class="form-control ">
			                  <option value="" selected=""> --Cari Desa--</option>
			                  <?php foreach ($desa->result() as $row):?>
			                   <option value="<?php  echo $row->kode_desa;?>"> <?php  echo $row->nama_desa;?></option> 
			                 <?php endforeach;?>
			              </select>
			              <span class="input-group-btn">
			                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
			                 
			              </span>
			            </div>
			         </div>
			        </form>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><i class="glyphicon glyphicon-tree-conifer"></i> Potensi Desa</h3>
				</div>
				<div class="panel-body">
					<form class="form-group" method="post" action="<?php echo site_url('potensi_desa/satu');?>"> 
			         <div class="panel-body">
			            <div class="input-group">
			              <select  name="kode_desa" id="pilih_desa" class="form-control" required>
			                  <option value=""> --Pilih Desa--</option>
			                  <?php foreach ($desa->result() as $row):?>
			                   <option value="<?php  echo $row->kode_desa;?>"> <?php  echo $row->nama_desa;?></option> 
			                 <?php endforeach;?>
			              </select>
			              <span class="input-group-btn">
			                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
			                
			              </span>
			            </div>
			         </div>
			        </form> 
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3><i class="glyphicon glyphicon-tower"></i> Profil</h3>
				</div>
				<div class="panel-body">
					<ul class="nav">
						<li>
							<a href="<?php echo site_url('beranda/maps');?>"><i class="glyphicon glyphicon-tag"></i> Lokasi</a>
							
							<a href="<?php echo site_url('pegawai');?>"><i class="glyphicon glyphicon-tag"></i> Petugas</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>