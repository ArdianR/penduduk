<?php 
	class Potensi_desa extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('datadesa');
			
		}

		public function index()
		{
			$this->load->model('datainformasi');
		   $data['allinformasi'] =$this->datainformasi->all();
			$data['title']="Kelola Potensi";
			$data['desa']=$this->datadesa->desa();
			$desa=$this->datadesa->desa();

			$data['tempat']="All";
			$data['kode_desa']="-";
			$data['potensi']=$this->datadesa->potensi();
			
			$data['tempat']="";
			$data['luas']="";
			$data['ketinggian']="";
			$data['keadaan_permukaan']="";	

			$this->load->view('style');
			$this->load->view('nav',$data);
			$this->load->view('potensi_desa',$data);
		}
		public function satu()
		{
			$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
			$data['title']="Kelola Potensi";
			$kode_desa=$this->input->post('kode_desa');
			$desa=$this->datadesa->one($kode_desa);
			foreach ($desa->result() as $row )
				$data['kode_desa']=$kode_desa;
				$data['tempat']=$row->nama_desa;
				$data['desa']=$this->datadesa->desa();
				$data['potensi']=$this->datadesa->potensi_one($kode_desa);


			$desa_umum=$this->datadesa->one($kode_desa);
			foreach ($desa_umum->result() as $row) 

			$data['tempat']=$row->nama_desa;
			$data['luas']=$row->luas_wilayah;
			$data['ketinggian']=$row->ketinggian;
			$data['keadaan_permukaan']=$row->keadaan_permukaan;	

			$this->load->view('style');	
			$this->load->view('nav',$data);
			$this->load->view('potensi_desa',$data);
		}
	}