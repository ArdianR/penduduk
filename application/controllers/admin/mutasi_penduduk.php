<?php 
	/**
	* 
	*/
	class Mutasi_penduduk extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('datapenduduk');
			$this->load->model('datamutasi');
		}
		public function index()
		{
			$this->table_mutasi();
		}
		public function table_mutasi()
		{
			$data['mutasi']=$this->datamutasi->all();
			$this->load->view('style');
			$this->load->view('admin/table_mutasi',$data);
		}
		public function form_mutasi()
		{
			$this->load->view('style');
			$data['penduduk']=$this->datapenduduk->allStay();
			$this->load->view('admin/form_mutasi',$data);
		}
		public function insert()
		{
			$tahun_pindah=$this->input->post('tahun_pindah');
			$tanggal_pindah=$this->input->post('tanggal_pindah');
			$bulan_pindah=$this->input->post('bulan_pindah');

			$tgl=$tahun_pindah.'-'.$bulan_pindah.'-'.$tanggal_pindah;
			$data = array(
				'nik' =>$this->input->post('nik'),
				'keterangan' =>$this->input->post('keterangan'),
				'pindah_ke' =>$this->input->post('pindah_ke'),
				'tanggal_pindah' =>$tgl,
				);
			$this->datamutasi->insert($data);
			$this->updatePenduduk($data['nik']);
			$this->session->set_flashdata('pesan',"<div class='alert alert-success'> Selesai </div>");
			redirect('admin/mutasi_penduduk');
		}
		public function updatePenduduk($nik)
		{
			$data = array('nik' => $nik,'status_tinggal'=>0);
			$this->datapenduduk->update($data);
		}

	}