<?php
	class Kelola_visimisi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('datavisimisi');
			}
			else
			{
				$this->session->set_flashdata('pesan','Anda harus login dulu');
				redirect('beranda/login');
			}

		}

		public function index()
		{
			$data['visimisi']=$this->datavisimisi->all();
			$this->load->view('style');
			$this->load->view('admin/form_visimisi',$data);
		}
		public function update()
		{
			$this->datavisimisi->add();
			$this->session->set_flashdata('pesan','-Berhasil Di Update');
			redirect('admin/kelola_visimisi');
		}
	}