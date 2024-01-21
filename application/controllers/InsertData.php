<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertData extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('model_reservation');
	}
//select cast(substr(id_res,5,6) as int)+1 as nomerurut from reservation where reservation_trx like 'RA-%' order by cast(substr(id_res,5,6) as int) desc 
	public function simpan()
	{

	$table='reservation';
	$column='reservation_row';
	$prefix='RA-';
	
		$strSQL	= "select cast(substr($column,5,6) as unsigned int)+1 as nomerurut from $table where $column like '$prefix%' order by cast(substr($column,5,6) as unsigned int) desc";
		$sq = $this->db->query($strSQL);		
		$rw=$sq->row();	
		$seq = $rw->nomerurut;
		if(empty($seq)) $seq="1";
		
						$no1 = rand();
						$no2 = rand();
						
						$_no1=substr($no1,0,4);
						$_no2=substr($no2,0,4);
						$no_ra=$_no1.'-'.$_no2.'-'.$this->input->post("id_country").'-'.$seq;
						$created = date('Y-m-d H:i:s');
		$data = array(			
						'reservation_trx'=> $this->input->post("reservation_trx"),
						'enter_pickup'=> $this->input->post("enter"),
						'retur'=> $this->input->post("retur"),
						'enter_day'=> $this->input->post("enter_day"),
						'return_day'=> $this->input->post("return_day"),
						'splitdatestart'=> $this->input->post("splitdatestart"),
						'splitdateend'=> $this->input->post("splitdateend"),
						'car_id'=> $this->input->post("car_id"),
						'reservation_row'=> $this->generate_ra_new($table,$column,$prefix),
						'reservation_number'=> $no_ra,
						'pricecar'=> $this->input->post("pricecar"),
						'price'=> $this->input->post("price"),
						'day'=> $this->input->post("day"),
						'id_country'=> $this->input->post("id_country"),
						'datetime_pick'=> $this->input->post("datetime_pick"),
						'datetime_return'=> $this->input->post("datetime_return"),
						's_req'=> $this->input->post("s_req"),
						'created' => $created
		);	
		
		$chars = "abcdefghijkmnopqrstuvwxyz0123456789";
						srand((double)microtime()*1000000);
						$i = 0;
						$pass = '' ;
							while ($i <= 9) {
								$num = rand() % 33;
								$tmp = substr($chars, $num, 1);
								$pass = $pass . $tmp;
								$i++;
							}
							$tgl_input=date('Y-m-d');
							
		$dataPerson = array(
						'username'=> $pass,
						'salutat'=> $this->input->post("salutat"),
						'f_name'=> $this->input->post("f_name"),
						'm_name'=> $this->input->post("m_name"),
						'l_name'=> $this->input->post("l_name"),
						'email'=> $this->input->post("email"),
						'address'=> $this->input->post("address"),
						'm_phone'=> $this->input->post("m_phone"),
						'flight_number'=> $this->input->post("flight_number"),
						'tgl_input'=> $tgl_input,
						'reservation_trx'=> $this->input->post("reservation_trx"),
		);      

        $this->model_reservation->simpan($data);
		$this->model_reservation->simpanPerson($dataPerson);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
	}
	
	
	
	public function generate_ra_new($table,$column,$prefix,$start=5){
		global $db;
		//$column=strtoupper($column);
		//$table=strtoupper($table);
		
		//select cast(substr(id_res,5,6) as int)+1 as nomerurut from reservation where reservation_trx like 'RA-%' order by cast(substr(id_res,5,6) as int) desc
		
		$strSQL	= "select cast(substr($column,$start,6) as unsigned int)+1 as nomerurut from $table where $column like '$prefix%' order by cast(substr($column,$start,6) as unsigned int) desc";
		//echo $strSQL;		
		$query = $this->db->query($strSQL);		
		$row=$query->row();	
		$nomor = $row->nomerurut;
		if(empty($nomor)) $nomor="1";
		//26 aug 2010. kalau primary key-nya lebih dari 999 ganti prefix incremental 1 letter
		if($nomor >= 500000){
			$third_char=substr($prefix,2,1);
			if(strtolower($third_char)=='z'){
				$second_char=substr($prefix,1,1);
				$second_char=$this->incremental_letter($second_char);
				$next_prefix=substr($prefix,0,1).$second_char.'A';
			}else{
				$third_char=$this->incremental_letter($third_char);
				$next_prefix=substr($prefix,0,2).$third_char;
			}
			$next_prefix=strtoupper($next_prefix);
			$counter_date=date("d/m/Y H:i:s");
			$this->logfile(array("filename"=>"exceeded_counter.log","message"=>"$counter_date::$table::$column::$prefix::$nomor::$next_prefix\r\n"));
		}
		$nomor="$prefix".sprintf("%07d",$nomor);
		return $nomor;
	}
	
	public function incremental_letter($letter){
		$letter=ord($letter);            //Convert to an integer
		if($letter=='122') $letter='96';#z
		$letter=chr($letter+1);            //Convert back to a string, but the
		return $letter;
	}

}
