<?php 
session_start();
	class kelola_pegawai Extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('datapegawai');
				$this->load->model('datajabatan');
			}
			else
			{
				$this->session->set_flashdata('pesan','Silahkan Login Dulu');
				redirect('beranda/login');
				
			}
		}
		
		public function index()
		{
			$data['pegawai']=$this->datapegawai->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_pegawai',$data);
		}

		public function form_pegawai()//$idpegawai
		{
			//$data['pegawai']=$this->datapegawai->one($idpegawai);
			$data['jabatan']=$this->datajabatan->all();
			$this->load->view('style');
			$this->load->view('admin/form_pegawai',$data); //,$data
		}
		
		public function delete($idpegawai)
		{
			$this->datapegawai->delete($idpegawai);
			$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
			redirect('admin/kelola_pegawai',$data);
		}
		public function search()
		{
			$cari=$this->input->post('cari');
			$data['pegawai']=$this->datapegawai->search($cari);
			$pegawai=$this->datapegawai->search($cari);
			if ($pegawai->result()==null) 
			{

				$this->session->set_flashdata('pesan','Data Tidak Ditemukan!');
				redirect('admin/kelola_pegawai');
			}
			$this->load->view('style');
			$this->load->view('admin/tabel_pegawai',$data);
		}
		public function detail($idpegawai)
		{
			$data['pegawai']=$this->datapegawai->one($idpegawai);
			$data['title']="Preview Data Pegawai";
			$this->load->view('style');
			$this->load->view('admin/lihat_detail_pegawai', $data);
		}
		public function insert()
		{


			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['jabatan']=$this->datajabatan->all();
				$this->load->view('style');
				$this->load->view('admin/form_pegawai', $data);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$arr_image=$data['upload_data'];
				$foto=$arr_image['file_name'];
				$this->datapegawai->add($foto);
				$this->session->set_flashdata('pesan','Data Berhasil Ditambah');
				redirect('admin/kelola_pegawai');
				
			}
		}

		public function update($idpegawai)
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$data['error'] = array('error' => $this->upload->display_errors());
				$data['jabatan']=$this->datajabatan->all();
				$data['pegawai']=$this->datapegawai->one($idpegawai);
				$this->load->view('style');
				$this->load->view('admin/form_edit_pegawai', $data);
				

			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$arr_image=$data['upload_data'];
				$foto=$arr_image['file_name'];
				$this->datapegawai->update($foto);
				$this->session->set_flashdata('pesan','Data Berhasil Di Update');
				redirect('admin/kelola_pegawai');
				
			}
		}
		public function update_data()
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$idpegawai=$this->input->post('idpegawai');
				$foto=$this->input->post('foto');
				$this->datapegawai->update($foto,$idpegawai);
				$this->session->set_flashdata('pesan','Data Berhasil Di Update');
				redirect('admin/kelola_pegawai');
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$arr_image=$data['upload_data'];
				$foto=$arr_image['file_name'];
				$idpegawai=$this->input->post('idpegawai');
				$this->datapegawai->update($foto,$idpegawai);
				$this->session->set_flashdata('pesan','Data Berhasil Di Update');
				redirect('admin/kelola_pegawai');
				
			}
		}


		//JQuery
		public function nip()
		{
			$nip=$this->input->post('nip');
			echo "$nip";
		}
		public function nama()
		{
			$nama=$this->input->post('nama');
			echo "$nama";
		}
		public function alamat()
		{
			$alamat=$this->input->post('alamat');
			echo "$alamat";
		}
		public function jabatan()
		{
			$jabatan=$this->input->post('jabatan');
			echo "$jabatan";
		}
		public function profil()
		{
			$profil=$this->input->post('profil');
			echo "$profil";
		}

	}