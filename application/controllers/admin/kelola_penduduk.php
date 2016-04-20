<?php
session_start();
	class Kelola_penduduk extends CI_controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!empty($this->session->userdata('admin'))) 
			{
				$this->load->model('dataadmin');
				$this->load->model('datapenduduk');
				$this->load->model('datadesa');

			}
			else
			{
				$this->session->set_flashdata('pesan','Anda Harus Login Dulu!');
				redirect('beranda/login');
			}
		}
		public function detailDesa()
		{
			$detail=$this->datadesa->detail_desa();
			foreach ($detail->result() as $row)
			if (!empty($row->nama_desa)) {
				return $desa=$row->nama_desa;
			}
			else
			{
				return $desa="Belum Di Set";
			}
		}
		public function form_tambah()
		{
			$data['nama_desa']=$this->detailDesa();
			$this->load->view('style');
			$this->load->view('admin/form_tambah_penduduk',$data);
		}
		public function form_edit($nik)
		{
			$data['penduduk']=$this->datapenduduk->one($nik);
			$this->load->view('style');
			$this->load->view('admin/form_edit_penduduk',$data);
		}
		public function index()
		{
			$session=$this->session->userdata('admin');
			$data['username']=$session['username'];
			$data['penduduk']=$this->datapenduduk->all();
			$this->load->view('style');
			$this->load->view('admin/tabel_penduduk',$data);
		}
		public function tambah()
		{

			$tahun_lahir=$this->input->post('tahun_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$bulan_lahir=$this->input->post('bulan_lahir');
			$tanggal_aktif=$this->input->post('tanggal_aktif');
			$bulan_aktif=$this->input->post('bulan_aktif');
			$tahun_aktif=$this->input->post('tahun_aktif');
			$tgl=$tahun_lahir.'-'.$bulan_lahir.'-'.$tanggal_lahir;
			$berlaku=$tahun_aktif.'-'.$bulan_aktif.'-'.$tanggal_aktif;
			$text=array(
				'nik'=>$this->input->post('nik'),
				'agama'=>$this->input->post('agama'),
				'kode_desa'=>$this->input->post('kode_desa'),
				'dusun'=>$this->input->post('dusun'),
				'kode_admin'=>$this->input->post('kode_admin'),
				'nama'=>$this->input->post('nama'),
				'tempat_lahir'=>$this->input->post('tempat_lahir'),
				'tanggal_lahir'=>$tgl,
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'rt'=>$this->input->post('rt'),
				'rw'=>$this->input->post('rw'),
				'desa'=>$this->input->post('desa'),
				'kecamatan'=>$this->input->post('kecamatan'),
				'status'=>$this->input->post('status'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'kewarganegaraan'=>$this->input->post('kwn'),
				'berlaku_hingga'=>$berlaku
				);

			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['encrypt_name']=TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('pesan',"<div class='alert alert-danger'> ".$error['error']."</div>");
				redirect('admin/kelola_penduduk');
			}
			else
			{
				$image = array('upload_data' => $this->upload->data());
				$file_name=$image['upload_data']['file_name'];
				$foto=array('foto'=>$file_name);
				$data=array_merge($text,$foto);
				$this->datapenduduk->add($data);
				$this->session->set_flashdata('pesan',"<div class='alert alert-success'> Berhasil </div>");
				redirect('admin/kelola_penduduk');
			}
			
			
		}
		 public function detail($nik)
		 {
		 	$this->load->view('style');
		 	$data['penduduk']=$this->datapenduduk->one($nik);
		 	$this->load->view('admin/detail_penduduk',$data);
		 }
		 public function hapus($nik)
		 {
		 	$this->datapenduduk->delete($nik);
		 	$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Berhasil dihapus</div>');
			redirect('admin/kelola_penduduk');
		 }
		 public function cari()
		 {
		 	$cari=$this->input->post('cari');
		 	$data_penduduk=$this->datapenduduk->cari($cari);
		 	if($data_penduduk==null)
		 	{
		 		$this->session->set_flashdata('pesan','<div class="alert alert-danger">Data tidak ditemukan!</div>');
		 		redirect('admin/kelola_penduduk');
		 	}
		 	else
		 	{
		 		$data['penduduk']=$data_penduduk;
		 		$this->load->view('style');
		 		$this->load->view('admin/tabel_penduduk',$data);
		 	}
		 	
		 }
		 public function update()
		 {
		 		


			$tahun_lahir=$this->input->post('tahun_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$bulan_lahir=$this->input->post('bulan_lahir');
			$tanggal_aktif=$this->input->post('tanggal_aktif');
			$bulan_aktif=$this->input->post('bulan_aktif');
			$tahun_aktif=$this->input->post('tahun_aktif');

			$tgl=$tahun_lahir.'-'.$bulan_lahir.'-'.$tanggal_lahir;
			$berlaku=$tahun_aktif.'-'.$bulan_aktif.'-'.$tanggal_aktif;
			$text=array(
				'nik'=>$this->input->post('nik'),
				'agama'=>$this->input->post('agama'),
				'kode_desa'=>$this->input->post('kode_desa'),
				'dusun'=>$this->input->post('dusun'),
				'kode_admin'=>$this->input->post('kode_admin'),
				'nama'=>$this->input->post('nama'),
				'tempat_lahir'=>$this->input->post('tempat_lahir'),
				'tanggal_lahir'=>$tgl,
				'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
				'rt'=>$this->input->post('rt'),
				'rw'=>$this->input->post('rw'),
				'desa'=>$this->input->post('desa'),
				'kecamatan'=>$this->input->post('kecamatan'),
				'status'=>$this->input->post('status'),
				'pekerjaan'=>$this->input->post('pekerjaan'),
				'kewarganegaraan'=>$this->input->post('kwn'),
				'berlaku_hingga'=>$berlaku
				);
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['encrypt_name']=TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload())
			{
				$data=$text;
				$this->datapenduduk->update($data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Telah di Update!</div>');
		 		redirect('admin/kelola_penduduk');
			}
			else
			{
				$image = array('upload_data' => $this->upload->data());
				$file_name=$image['upload_data']['file_name'];
				$foto=array('foto'=>$file_name);
				$data=array_merge($text,$foto);
				$this->datapenduduk->update($data);
				$this->session->set_flashdata('pesan','<div class="alert alert-success">Data Telah di Update!</div>');
		 		redirect('admin/kelola_penduduk');
			}
		 		
		 }
	}
