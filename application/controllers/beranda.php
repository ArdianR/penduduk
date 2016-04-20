<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('dateindo');
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
	}
	public function index()
	{
		$this->load->model('databerita');
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$data['kontak'] =$this->datakontak->all();
		$data['berita']=$this->databerita->recent();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();
		$this->load->view('style');
		$this->load->view('beranda',$data);
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$this->load->view('style');
		$this->load->view('nav',$data);
		$this->load->view('error_login');

	}
	public function data_kependudukan()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$data['title']="Web Potensi Wado - Data Kependudukan";
		$data['tempat']="Semua Wilayah";
		//data desa
		$this->load->model('datadesa');
		$data['desa']=$this->datadesa->desa();
		$data['tempat']="Semua Wilayah";
		$data['luas']="";
		$data['ketinggian']="";
		$data['keadaan_permukaan']="";
		//data penduduk
		$this->load->model('datapenduduk');
		$data['all']=$this->datapenduduk->all();
		$data['laki']=$this->datapenduduk->laki();
		$data['pr']=$this->datapenduduk->pr();
		$this->load->view('style');
		$this->load->view('nav',$data);
		$this->load->view('data_penduduk',$data);
	}
	public function data_per_desa()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$kode_desa=$this->input->post('kode_desa');
		$data['title']="Web Potensi Wado - Data Kependudukan";
		$this->input->post('kode_desa');
		//data desa
		$this->load->model('datadesa');
		$data['desa']=$this->datadesa->desa();
		$desa=$this->datadesa->one($kode_desa);
		foreach ($desa->result() as $row) 
		$data['tempat']=$row->nama_desa;
		$data['luas']=$row->luas_wilayah;
		$data['ketinggian']=$row->ketinggian;
		$data['keadaan_permukaan']=$row->keadaan_permukaan;

		//data penduduk
		$this->load->model('datapenduduk');
		$data['all']=$this->datapenduduk->per_desa($kode_desa);
		$data['laki']=$this->datapenduduk->laki_desa($kode_desa);
		$data['pr']=$this->datapenduduk->pr_desa($kode_desa);
		$this->load->view('style');
		$this->load->view('nav',$data);
		$this->load->view('data_penduduk',$data);

	}
	public function maps()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$data['kontak'] =$this->datakontak->all();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();

		$this->load->model('dataalamat');
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$this->load->view('style');
		$this->load->view('nav',$data);
		$this->load->view('maps',$data);
		$this->load->view('footer',$data);
	}
	public function visimisi()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$data['kontak'] =$this->datakontak->all();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();

		$this->load->model('datavisimisi');
		$data['visi']=$this->datavisimisi->all();

		$this->load->view('style');
		$this->load->view('nav',$data);
		$this->load->view('visi-misi',$data);
		$this->load->view('footer',$data);
	}
	public function cari_berita()
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		//footer
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$data['kontak'] =$this->datakontak->all();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();
		//end
		$cari=$this->input->post('cari');
		
		$this->load->model('databerita');
		$data['berita']=$this->databerita->search($cari);
		if ($data['berita']==null) 
		{
			$this->load->view('style');
			$this->load->view('nav',$data);
			echo "
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class='container'>
			<div class='col-md-4'></div>
			<div class='col-md-4'>
				<div class='alert alert-danger'>Data Tidak Ada</div>
			</div>
			<div class='col-md-4'></div>
			</div>	
			";
			$this->load->view('footer',$data);
		}
		else
		{
			$this->load->view('style');
			$this->load->view('nav',$data);
			$this->load->view('berita',$data);
			$this->load->view('footer');
		}
		
	}

	public function berita_khusus($id_berita)
	{
		$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		//footer
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$data['kontak'] =$this->datakontak->all();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();
		//end
		$this->load->model('databerita');
		$data['berita']=$this->databerita->one($id_berita);
		$this->load->view('style');
			$this->load->view('nav',$data);
			$this->load->view('berita',$data);
			$this->load->view('footer');
	}
	public function informasi($id_informasi)
	{
		//footer
		$this->load->model('datadesa');
		$this->load->model('dataalamat');
		$this->load->model('datalink');
		$this->load->model('datakontak');
		$data['kontak'] =$this->datakontak->all();
		$data['desa']=$this->datadesa->desa();
		$alamat=$this->dataalamat->all();
		foreach ($alamat->result() as $row)
			$data['alamat']=$row->alamat;
		$data['link']=$this->datalink->all();
		//end
		$this->load->view('style');
		$this->load->model('datainformasi');
		$data['informasi'] =$this->datainformasi->edit($id_informasi);
		$data['allinformasi'] =$this->datainformasi->all();
		
		
			$this->load->view('nav',$data);
			$this->load->view('page_informasi',$data);
			$this->load->view('footer');
	}
}
