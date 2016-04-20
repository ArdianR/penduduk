<?php 
	class Datajabatan extends CI_Model
	{
		public function all()
		{
			$query=$this->db->get('jabatan');
			if ($query) {
				return $query;
			}
			else 
			{
				return null;
			}
		}
		public function one($id_jabatan)
		{
			$this->db->where('id_jabatan',$id_jabatan);
			$query=$this->db->get('jabatan');
			if ($query) {
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
				'jabatan'=>$this->input->post('jabatan')
				);
			$this->db->insert('jabatan',$data);
		}
		public function update()
		{
			$data=array(
				'jabatan'=>$this->input->post('jabatan')
				);
			$id_jabatan=$this->input->post('id_jabatan');
			$this->db->where('id_jabatan',$id_jabatan);
			$this->db->update('jabatan',$data);
		}
        public function delete($id_jabatan)
		{
			$this->db->where('id_jabatan',$id_jabatan);
			$this->db->delete('jabatan');
		}
	}