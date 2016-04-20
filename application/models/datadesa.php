<?php 
	class Datadesa extends CI_Model
	{
		public function desa()
		{
			$query=$this->db->get('desa');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function add()
		{
			$data=array(
				'nama_desa'=>$this->input->post('nama_desa'),
				'luas_wilayah'=>$this->input->post('luas_wilayah'),
				'ketinggian'=>$this->input->post('ketinggian'),
				'keadaan_permukaan'=>$this->input->post('keadaan_permukaan')
				);
			$this->db->insert('desa',$data);
		}
		public function delete($kode_desa)
		{
			$this->db->where('kode_desa',$kode_desa);
			$this->db->delete('desa');
		}
		public function update()
		{
			$kode_desa=$this->input->post('kode_desa');
				$data=array(
				'nama_desa'=>$this->input->post('nama_desa'),
				'luas_wilayah'=>$this->input->post('luas_wilayah'),
				'ketinggian'=>$this->input->post('ketinggian'),
				'keadaan_permukaan'=>$this->input->post('keadaan_permukaan')
				);
			$this->db->where('kode_desa',$kode_desa);
			$this->db->update('desa',$data);
		}
		public function one($kode_desa)
		{
			$this->db->where('kode_desa',$kode_desa);
			$query=$this->db->get('desa');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}

		public function potensi()
		{
			$query=$this->db->get('potensi');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function potensi_one($kode_desa)
		{
			$this->db->where('kode_desa',$kode_desa);
			$query=$this->db->get('potensi');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function add_potensi()
		{
			$data=array(
				'kode_desa'=>$this->input->post('kode_desa'),
				'nama_potensi'=>$this->input->post('nama_potensi'),
				'jenis_potensi'=>$this->input->post('jenis_potensi'),
				'deskripsi'=>$this->input->post('deskripsi')
				
				);
			$this->db->insert('potensi',$data);

		}
		public function pilih_potensi($kode_potensi)
		{
			$this->db->where('kode_potensi',$kode_potensi);
			$query=$this->db->get('potensi');
			if ($query) {
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function update_potensi()
		{
			$kode_potensi=$this->input->post('kode_potensi');
			$data=array(
				'kode_desa'=>$this->input->post('kode_desa'),
				'nama_potensi'=>$this->input->post('nama_potensi'),
				'jenis_potensi'=>$this->input->post('jenis_potensi'),
				'deskripsi'=>$this->input->post('deskripsi')
				
				);
			$this->db->where('kode_potensi',$kode_potensi);
			$this->db->update('potensi',$data);
		}
		public function hapus_potensi($kode_potensi)
		{
			$this->db->where('kode_potensi',$kode_potensi);
			$this->db->delete('potensi');
		}
	}