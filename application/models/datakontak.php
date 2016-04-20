<?php
	
	class Datakontak extends CI_Model
	{
		
		public function all()
		{
			$query=$this->db->query('select nama,id,isi,jenis,kode_jenis from kontak,jenis_kontak
									 where kontak.jenis=jenis_kontak.id_jenis');
			if ($query->num_rows) 
			{
				return $query;	
			}
			else
			{
				return null;
			}
		}
		public function add()
		{
			$data=array(
				'nama'=>$this->input->post('nama'),
				'isi'=>$this->input->post('isi'),
				'jenis'=>$this->input->post('jenis')
				);
			$this->db->insert('kontak',$data);
		}
		public function update()
		{
			$id=$this->input->post('id');
			$data=array(
				'nama'=>$this->input->post('nama'),
				'isi'=>$this->input->post('isi'),
				'jenis'=>$this->input->post('jenis')
				);
			$this->db->where('id',$id);
			$this->db->update('kontak',$data);
		}
		public function one($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('kontak');
			if ($query->num_rows) 
			{
				return $query;	
			}
			else
			{
				return null;
			}
		}
		public function delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('kontak');
		}
		public function jenis()
		{
			$query=$this->db->get('jenis_kontak');
			if ($query->num_rows) 
			{
				return $query;	
			}
			else
			{
				return null;
			}
		}
	}
	