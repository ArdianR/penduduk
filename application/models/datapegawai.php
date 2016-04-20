<?php 
	class Datapegawai extends CI_Model
	{
		
		public function all()
		{
			$query=$this->db->get('pegawai');
			if ($query->num_rows>0) 
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function add($foto)
		{
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'jabatan'=>$this->input->post('jabatan'),
				'profil'=>$this->input->post('profil'),
				'foto'=>$foto
				);	
			$this->db->insert('pegawai',$data);
		}
		public function search($cari)
		{
			$this->db->like('nama',$cari);
			
			$query=$this->db->get('pegawai');
			if ($query) 
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function one($idpegawai)
		{
			$this->db->where('idpegawai',$idpegawai);
			$query=$this->db->get('pegawai');
			if ($query->num_rows>0) 
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($idpegawai)
		{
			$this->db->where('idpegawai',$idpegawai);
			$this->db->delete('pegawai');
			
		}
		public function update($foto,$idpegawai)
		{
			
			$data=array(
				'nip'=>$this->input->post('nip'),
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'jabatan'=>$this->input->post('jabatan'),
				'profil'=>$this->input->post('profil'),
				'foto'=>$foto
				);
			$this->db->where('idpegawai',$idpegawai);
			$this->db->update('pegawai',$data);
		}
		
	}