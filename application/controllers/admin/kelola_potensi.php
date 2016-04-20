<?php 
session_start();
	class Kelola_potensi extends CI_Controller
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
				redirect('beranda/login');
			}
			
		}
		public function index()
		{
			$data['title']="Kelola Potensi";
			$data['desa']=$this->datadesa->desa();
			$desa=$this->datadesa->desa();

			$data['tempat']="All";
			$data['kode_desa']="-";
			$data['potensi']=$this->datadesa->potensi();
			$this->load->view('style');

			$this->load->view('admin/tabel_potensi',$data);
		}
		public function potensi_desa()
		{
			$kode_desa=$this->input->post('kode_desa');
			$desa=$this->datadesa->one($kode_desa);
			foreach ($desa->result() as $row )
				$data['kode_desa']=$kode_desa;
				$data['tempat']=$row->nama_desa;
				$data['desa']=$this->datadesa->desa();
				$data['potensi']=$this->datadesa->potensi_one($kode_desa);
				
			$this->load->view('style');
			$this->load->view('admin/tabel_potensi',$data);
		}

		public function tambah_potensi()
		{
			$this->datadesa->add_potensi();
	$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
			redirect('admin/kelola_potensi');
		}

		public function form_edit($kode_potensi)
		{
			$potensi=$this->datadesa->pilih_potensi($kode_potensi);
			foreach ($potensi->result() as $row)
				$kode_desa=$row->kode_desa;
			$desa=$this->datadesa->one($kode_desa);
			foreach ($desa->result() as $row )
				$data['kode_desa']=$kode_desa;
				$data['tempat']=$row->nama_desa;
				$data['desa']=$this->datadesa->desa();
				$data['potensi']=$this->datadesa->potensi_one($kode_desa);
			$this->load->view('style');
			$this->load->view('admin/form_edit_potensi',$data);

		}
		public function update()
		{
			$this->datadesa->update_potensi();
			redirect('admin/kelola_potensi');
		}
		public function hapus($kode_potensi)
		{
			$this->datadesa->hapus_potensi($kode_potensi);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
			redirect('admin/kelola_potensi');
		}


	}