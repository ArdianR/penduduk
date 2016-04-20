<?php 
	session_start();
	
	class Kelola_alamat extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('dataalamat');
			}
			else
			{
				redirect('beranda');
			}
		}

		public function index()
		{
			$alamat =$this->dataalamat->all();
			foreach ($alamat->result() as $row)
				$data['id']=$row->id;
				$data['alamat']=$row->alamat; 
			$this->load->view('style');
			$this->load->view('admin/tabel_alamat',$data);

		}

		public function update_data()
		{
			$this->dataalamat->update();
			redirect('admin/Kelola_alamat');
		}

		public function delete_data($id)
		{
			$this->dataalamat->delete($id);
		}
	}