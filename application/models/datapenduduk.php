<?php
	class Datapenduduk extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function per_desa($kode_desa)
		{
			$this->db->where('kode_desa',$kode_desa);
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}

		public function laki_desa($kode_desa)
		{
			$laki="LAKI-LAKI";
			$this->db->where('kode_desa',$kode_desa);
			$this->db->where('jenis_kelamin',$laki);
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function laki()
		{
			$laki="LAKI-LAKI";
			$this->db->where('jenis_kelamin',$laki);
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function pr_desa($kode_desa)
		{
			$pr="PEREMPUAN";
			$this->db->where('kode_desa',$kode_desa);
			$this->db->where('jenis_kelamin',$pr);
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function pr()
		{
			$pr="PEREMPUAN";
			$this->db->where('jenis_kelamin',$pr);
			$query=$this->db->get('penduduk');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		
		public function add($data)
		{
			$this->db->insert('penduduk',$data);
		}
		
		public function one($nik)
		{
			$this->db->where('nik',$nik);
			$query=$this->db->get('penduduk');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($nik)
		{
			$this->db->where('nik',$nik);
			$this->db->delete('penduduk');
		}
		public function cari($cari)
		{
			$this->db->like('nama',$cari);
			$this->db->or_like('nik',$cari);
			$query=$this->db->get('penduduk');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function update($data)
		{
			$this->db->where('nik',$data['nik']);
			$this->db->update('penduduk',$data);
		}
		public function allStay()
		{
			$this->db->where('status_tinggal',1);
			return $this->db->get('penduduk');
		}

	}