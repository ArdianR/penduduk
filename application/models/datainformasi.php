<?php
	/**
	* 
	*/
	class Datainformasi extends CI_Model
	{
		
		public function all()
		{
			$query=$this->db->get('informasi');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function edit($id_informasi)
		{
			$this->db->where('id_informasi',$id_informasi);
			$query=$this->db->get('informasi');
			if ($query) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($id_informasi)
		{
			$this->db->where('id_informasi',$id_informasi);
			$this->db->delete('informasi');
		}
		public function update()
		{
			$id_informasi=$this->input->post('id_informasi');
			$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
				);
			$this->db->where('id_informasi',$id_informasi);
			$this->db->update('informasi',$data);
		}
		public function add()
		{
			$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('isi'),
				);

			$this->db->insert('informasi',$data);
		}
	}