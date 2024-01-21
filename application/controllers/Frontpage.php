<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_reservation');
	}

	public function index(){
		
	$dateadd = date('l jS F (d/m/Y)', strtotime('+10 days')); //date("d/m/Y", strtotime("+5 days"));
	
	//$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$this->getRealIpAddr());

	//$ipdat = file_get_contents('https://www.geoplugin.net/php.gp?ip='.$this->getRealIpAddr());
	$ipdat = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=182.253.231.121'));
	
	$getID_country=$ipdat['geoplugin_countryCode'];
	
	#die(print_r($ipdat));
	
	
	$chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $enc = '' ;
		while ($i <= 10) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$enc = $enc . $tmp;
			$i++;
		}
		
		$dt_pick = date("d/m/Y");
		$dt_return = date("Y-m-d");
		$data = array(
			//'pick' 		=> $dt_pick,
			//'return'	=> $dateadd,
			'encry'		=> $enc,
			'id_country'=> $getID_country
		);		
		
		$this->load->view('frontpage', $data);
	}
	
	
	
	
	
	public function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->model_reservation->search_wilayah($_GET['term']);
			if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->wilayah;
				echo json_encode($arr_result); 
			} else {
				echo 'kosong';
			}
        }
    }
	
	
	public function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		  $ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
	
	public function Summary($reservation_trx)
	{
		$data = array(

			'title' 	=> 'Edit Data reservation',
			'data_res_summary' => $this->model_reservation->detil($reservation_trx)

		);
	
		$this->load->view('summary', $data);
		
		
	}
}