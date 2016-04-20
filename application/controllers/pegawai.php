<?php 
	class Pegawai extends CI_controller
	{
		public function __construct($value='')
		{
			parent::__construct();
			$this->load->model('datapegawai');
			$this->load->model('datainformasi');
		$data['allinformasi'] =$this->datainformasi->all();
		}

		public function index()
		{
			$data['pegawai']=$this->datapegawai->all();
			$data['title']="Data Pegawai Kecamatan Wado";
			$this->load->view('style');
			$this->load->view('profil_pegawai',$data);
		}

	}