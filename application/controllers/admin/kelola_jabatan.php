<?php 
session_start();
	class Kelola_jabatan extends CI_controller
	{
		public function __construct()
		{
			parent:: __construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('datajabatan');
			}
			else
			{
				$this->session->set_flashdata('pesan','Anda Harus Login Dulu');
				redirect('beranda/login');
			}
		}
		public function index()
			{
				$data['jabatan']=$this->datajabatan->all();
				$this->load->view('style');
				$this->load->view('admin/tabel_jabatan',$data);
			}

		public function tambah()
		{
			$this->datajabatan->add();
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
			redirect('admin/kelola_jabatan');
		}
		public function form_edit_jabatan($id_jabatan)
		{
			$data['jabatan']=$this->datajabatan->one($id_jabatan);
			$this->load->view('style');
			$this->load->view('admin/form_edit_jabatan',$data);
		}
		public function update()
		{
			$this->datajabatan->update();
			$this->session->set_flashdata('pesan','Data Berhasil Di Update!');
			redirect('admin/kelola_jabatan');
		}
        public function delete_jabatan($id_jabatan)
		{
			$this->datajabatan->delete($id_jabatan);
			$this->session->set_flashdata('pesan','Data Berhasil Di Hapus!');
			redirect('admin/kelola_jabatan');
		}
	}