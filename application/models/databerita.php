<?php 
	class Databerita extends CI_Model
	{
		public function recent()
		{
			$this->db->order_by("id_berita", "desc"); 
			$query=$this->db->get('berita',3);
			if ($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function all()
		{
			$this->db->order_by("id_berita", "desc"); 
			$query=$this->db->get('berita');
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
			$date=date('Y-m-d');
			$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('berita'),
				'gambar'=>$foto,
				'tanggal'=>$date
				);	
			$this->db->insert('berita',$data);
		}
		public function update($foto)
		{
			$date=date('Y-m-d');
			$id_berita=$this->input->post('id_berita');
			$data=array(
				'judul'=>$this->input->post('judul'),
				'isi'=>$this->input->post('berita'),
				'gambar'=>$foto,
				'tanggal'=>$date
				);
			$this->db->where('id_berita',$id_berita);
			$this->db->update('berita',$data);
		}
		public function search($cari)
		{
			$this->db->like('judul',$cari);
			$this->db->or_like('isi',$cari);
			$query=$this->db->get('berita');
			if ($query->num_rows()>0) {
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function one($id_berita)
		{
			$this->db->where('id_berita',$id_berita);
			$query=$this->db->get('berita');
			if ($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
		public function delete($id_berita)
		{
			$this->db->where('id_berita',$id_berita);
			$this->db->delete('berita');
		}

	}