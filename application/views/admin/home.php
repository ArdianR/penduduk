<style type="text/css">
	.panel
	{
		color:#fff;
	}
</style>
<div class="col-md-12">
<h2>Beranda</h2>
<hr>
	<div class="col-xs-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="white">
					<i class="glyphicon glyphicon-user"></i> 
					<div class="pull-right">
					<?php echo count($penduduk->result());?>
					</div>
				</h2>
				<h4 class="white">Data Desa</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_penduduk');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2 class="white">
					<i class="glyphicon glyphicon-file"></i> 
					<div class="pull-right">
					<?php echo count($berita->result());?>
					</div>
				</h2>
				<h4 class="white">Jumlah Berita</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/berita');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h2 class="white">
					<i class="glyphicon glyphicon-cog"></i> 
					<div class="pull-right">
					<?php echo ($nama_camat);?>
					</div>
				</h2>
				<h4 class="white">Data Pimpinan</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_pimpinan');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h2 class="white">
					<i class="glyphicon glyphicon-wrench"></i> 
					<div class="pull-right">
					<?php echo ($username);?>
					</div>
				</h2>
				<h4 class="white">Detail Akun</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_super_admin');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
</div>