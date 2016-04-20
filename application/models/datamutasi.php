<?php 
	/**
	* 
	*/
	class Datamutasi extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function all()
		{
			return $this->db->query("SELECT tblmutasi.nik,nama,tanggal_pindah,pindah_ke,keterangan FROM penduduk INNER JOIN tblmutasi ON penduduk.nik=tblmutasi.nik");
		}
		public function insert($data)
		{
			$this->db->insert('tblmutasi',$data);
		}
	}