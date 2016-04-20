<div>

	<script type="text/javascript">
		$(document).ready(function  () {
			$('#nip').keyup(function  () {
				var nip=$('#nip').val();
				$.post("<?php echo site_url('admin/kelola_pegawai/nip');?>",{nip:nip},function  (data) {
					$('#isi_nip').html(data);
				})	
			})

			$('#nama').keyup(function  () {
				var nama=$('#nama').val();
				$.post("<?php echo site_url('admin/kelola_pegawai/nama');?>",{nama:nama},function  (data) {
					$('#isi_nama').html(data);
				})	
			})

			$('#alamat').keyup(function  () {
				var alamat=$('#alamat').val();
				$.post("<?php echo site_url('admin/kelola_pegawai/alamat');?>",{alamat:alamat},function  (data) {
					$('#isi_alamat').html(data);
				})	
			})

			$('#jabatan').change(function  () {
				var jabatan=$('#jabatan').val();
				$.post("<?php echo site_url('admin/kelola_pegawai/jabatan');?>",{jabatan:jabatan},function  (data) {
					$('#isi_jabatan').html(data);
				})	
			})
			$('#profil').keyup(function  () {
				var profil=$('#profil').val();
				$.post("<?php echo site_url('admin/kelola_pegawai/profil');?>",{profil:profil},function  (data) {
					$('#isi_profil').html(data);
				})	
			})
		})
	</script>
	

</div>