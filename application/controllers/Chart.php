<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends MY_Controller {

	public function __construct(){		
		parent::__construct();

		//load model
		$this->load->model('model_graph'); 
		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$rs = $this->model_graph->get_all();
		$data_graph = '';
		foreach($rs as $row) {
			
			 $data_graph .= "{ year:'".$row->year."',

            profit:".$row->profit.",

            purchase:".$row->purchase.",

            sale:".$row->sale."}, ";		
			
		}
			$data_graph = substr($data_graph, 0, -2);
			
		$data = array(
			'title' 		=> 'Data medcek',
			'data_graph'	=> $data_graph,
		);	
		
		$content='chart';		
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('chart/'.$content, $data, TRUE);
        $this->load->view('template/backend/index', $data);
		//$this->load->view('data_medcek');
	}

}