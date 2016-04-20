<?php 
	class Datakepala extends CI_Model
	{
		public function ceklogin($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query=$this->db->get('kepala');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function all()
		{
			$query=$this->db->get('kepala');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function update()
		{
			$id=$this->input->post('id');
			$data=array(
				'nip'=>$this->input->post('nip'),	
				'nama'=>$this->input->post('nama')	
			);
			$this->db->where('id',$id);
			$this->db->update('kepala',$data);

		}
	}