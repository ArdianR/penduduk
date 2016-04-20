<?php 
	/**
	* agitnaeta.com
	*/
	class Contoh extends Ci_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('dateindo');

		}
		public function index()
		{
			$date=date('Y-m-d'); 	 
			echo dateindo($date);
		}
	}