<div>
	<style type="text/css">
	.img-center
	{
		display: block;;
		margin-left: auto;
		margin-right: auto;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/css/bootstrap.css.map">
	<script type="text/javascript" src="<?php echo base_url();?>src/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>src/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url("src/select2/dist/css/select2.min.css");?>" rel="stylesheet" />
<script src="<?php echo base_url("src/select2/dist/js/select2.min.js");?>"></script>	
<script type="text/javascript" src="<?php echo base_url("src/dt/media/js/jquery.dataTables.min.js");?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/dt/media/css/jquery.dataTables.min.css");?>">
	<script type="text/javascript">
	$(document).ready(function  () {
		$('ul li a').click(function() {
		    $('ul li.active').removeClass('active');
		    $(this).closest('li').addClass('active');
		});
	})
</script>
</div>
