<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summary extends CI_Controller {

	public function __construct(){		
		parent::__construct();

		//load model
		$this->load->model('model_reservation'); 
		
	}

	public function index(){
	//echo $_GET['reservation_trx'];
			
	}
	
	
	public function detil($reservation_trx)
	{
		
		$data = array(
			'title' 	=> 'Detail Reservation',
			'data_res' => $this->model_reservation->detil($reservation_trx)
		);	
	
		$this->load->view('summary', $data);
		
	
	}

}
