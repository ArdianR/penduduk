<?php
	
	class Dataalamat extends CI_Model
	{
		
		public function all()
		{
			$query=$this->db->get('alamat');
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
				'alamat'=>$this->input->post('alamat')
				);
			$this->db->insert('alamat',$data);
		}
		public function update()
		{
			$id=$this->input->post('id');
			$data=array(
				'alamat'=>$this->input->post('alamat')			
				);
			$this->db->where('id',$id);
			$this->db->update('alamat',$data);
		}
		public function one($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('alamat');
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
			$this->db->delete('alamat');
		}
	}
	