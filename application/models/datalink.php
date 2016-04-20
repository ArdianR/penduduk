<?php
	
	class Datalink extends CI_Model
	{
		
		public function all()
		{
			$query=$this->db->get('link');
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
				'link'=>$this->input->post('link')			
				);
			$this->db->insert('link',$data);
		}
		public function update()
		{
			$id=$this->input->post('id');
			$data=array(
				'nama'=>$this->input->post('nama'),
				'link'=>$this->input->post('link')				
				);
			$this->db->where('id',$id);
			$this->db->update('link',$data);
		}
		public function one($id)
		{
			$this->db->where('id',$id);
			$query=$this->db->get('link');
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
			$this->db->delete('link');
		}
	}
	