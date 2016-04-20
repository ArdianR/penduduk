<div>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/css/bootstrap.css.map">
	<script type="text/javascript" src="<?php echo base_url();?>src/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>src/js/bootstrap.min.js"></script>	
	<script type="text/javascript">
	$(document).ready(function  () {
		$('ul li a').click(function() {
		    $('ul li.active').removeClass('active');
		    $(this).closest('li').addClass('active');
		});
	})
</script>
</div>