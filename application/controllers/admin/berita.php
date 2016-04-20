<?php 
session_start();
	class Berita Extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			if(!empty($this->session->userdata('admin')))
			{
				$this->load->model('dataadmin');
				$this->load->model('databerita');
				
			}
			else
			{
				$this->session->set_flashdata('pesan',"Anda Harus Login Dulu!");
				redirect('beranda');
			}
		}
		public function index()
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

				$data['berita']=$this->databerita->recent();
				$this->load->view('style');
				$this->load->view('admin/form_berita',$data);
				
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$foto=$data['upload_data']['file_name'];
				$this->databerita->add($foto);	
				$this->session->set_flashdata('pesan','Berita Telah Berhasil Diupdate');
				redirect ('admin/berita');
			}
			
			
		}
		public function update()
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
				$data['berita']=$this->databerita->recent();
				$this->load->view('style');
				$this->load->view('admin/form_edit_berita',$data);
				
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$foto=$data['upload_data']['file_name'];
				$this->databerita->update($foto);	
				$this->session->set_flashdata('pesan','Berita Telah Berhasil Diupdate');
				redirect ('admin/berita/tabel_berita');
			}
			
			
		}

		public function edit($id_berita)
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

				$data['berita']=$this->databerita->one($id_berita);

				$this->load->view('style');
				$this->load->view('admin/form_edit_berita',$data);
				
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$foto=$data['upload_data']['file_name'];
				$this->databerita->add($foto);	
				$this->session->set_flashdata('pesan','Berita Telah Berhasil Diupdate');
				redirect ('admin/berita');
			}
			
			
		}




		public function tabel_berita()
		{
			$this->load->helper('dateindo');
			$this->load->model('databerita');
			$data['berita']=$this->databerita->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_berita',$data);
		}
		public function delete($id_berita)
		{
			$this->databerita->delete($id_berita);
			$this->session->set_flashdata('pesan','Data Telah Dihapus');
			redirect('admin/berita/tabel_berita');
		}
	}