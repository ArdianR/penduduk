<?php 
	session_start();
	
	class Kelola_kontak extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('datakontak');
			}
			else
			{
				redirect('beranda');
			}
		}

		public function index()
		{
			$data['jenis'] =$this->datakontak->jenis();
			$data['kontak'] =$this->datakontak->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_kontak',$data);
		}
		public function add()
		{
			$this->datakontak->add();
			redirect('admin/kelola_kontak');
		}

		public function update_data()
		{
			$this->datakontak->update();
			redirect('admin/kelola_kontak');
		}

		public function delete_data($id)
		{
			$this->datakontak->delete($id);
			redirect('admin/kelola_kontak');
		}
	}