<?php 
	session_start();
	
	class Kelola_link extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('datalink');
			}
			else
			{
				redirect('beranda');
			}
		}

		public function index()
		{
			$data['link'] =$this->datalink->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_link',$data);
		}
		public function add()
		{
			$this->datalink->add();
			redirect('admin/kelola_link');
		}

		public function update_data()
		{
			$this->datalink->update();
			redirect('admin/kelola_link');
		}

		public function delete_data($id)
		{
			$this->datalink->delete($id);
			redirect('admin/kelola_link');
		}
	}