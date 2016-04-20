<?php 
session_start();
	class Kelola_desa extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('admin')))
			{
				$this->load->model('datadesa');	
			}
			else
			{
				redirect('beranda');
			}
			
		}
		public function index()
		{
			$data['desa']=$this->datadesa->desa();
			$this->load->view('style');
			$this->load->view('admin/tabel_desa',$data);
		}
		public function tambah()
		{

			$this->datadesa->add();
			$this->session->set_flashdata('pesan','Data Berhasil Ditambah');
			redirect('admin/kelola_desa');
		}
		public function hapus($kode_desa)
		{
			$this->datadesa->delete($kode_desa);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
			redirect('admin/kelola_desa');
		}
		public function f_update($kode_desa)
		{
			$this->load->view('style');
			$data['desa']=$this->datadesa->one($kode_desa);
			$this->load->view('admin/form_update_desa',$data);
		}
		public function update()
		{
			$this->datadesa->update();
	
			redirect('admin/kelola_desa');
		}

	}