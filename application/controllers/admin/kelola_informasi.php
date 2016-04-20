<?php
	/**
	* 
	*/
	class Kelola_informasi extends CI_controller
	{
		
		function __construct()
		{
				parent::__construct();
				$session=$this->session->userdata('admin');
				if (!empty($session)) 
				{
					$this->load->model('datainformasi');
					$this->load->view('style');
				}
				else
				{
					redirect('beranda');
				}
		}
		public function index()
		{
			$data['informasi']=$this->datainformasi->all();
			$this->load->view('informasi',$data);
		}
		public function add()
		{
			$this->datainformasi->add();
			$this->session->set_flashdata('pesan','Data Berhasil Ditambahkan!');
			redirect('admin/kelola_informasi');
		}
		public function delete($id_informasi)
		{
			$this->datainformasi->delete($id_informasi);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
			redirect('admin/kelola_informasi');
		}
		public function edit($id_informasi)
		{
			$data['informasi']=$this->datainformasi->edit($id_informasi);
			$data['allinformasi']=$this->datainformasi->all();
			$this->load->view('admin/form_informasi',$data);
		}
		public function update()
		{
			$this->datainformasi->update();
			$this->session->set_flashdata('pesan','Data Berhasil Diupdate');
			redirect('admin/kelola_informasi');
		}
		public function search()
		{
			$data['informasi']=$this->datainformasi->search();
			$this->load->view('informasi',$data);
		}
	}