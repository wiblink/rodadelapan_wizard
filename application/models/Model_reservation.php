<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Model_reservation extends CI_model{


	public function get_all()
	{
		$sql = "SELECT CONCAT(a.f_name ,' ', a.m_name ,' ', a.l_name) as fullname, a.*, b.* FROM costumer a 
		inner join reservation b ON (a.reservation_trx=b.reservation_trx) order by b.id_res desc";
		$query = $this->db->query($sql);		
		/* $this->db->select("*")
				 ->from('med_cek')
				 ->order_by('id_mc', 'DESC')
				 ->get(); */
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("reservation", $data);
#print_r($this->db->last_query());
		if($query){
			return true;
		}else{
			return false;
		}

	}
	
	public function simpanPerson($dataPerson)
	{
		
		$query = $this->db->insert("costumer", $dataPerson);

		/*if($query){
			return true;
		}else{
			return false;
		}*/

		$id_user = $this->db->insert_id();
		//die(print_r($id_user));
		if (!$id_user)
		{
			$message['message'] = 'System error, please try again lakioiki';
			$error = true;
		
		} else {


			$send_email = $this->send_email($dataPerson);

			$message['message'] = 'Sukses';
			
		}
		
		if ($error) {
			$this->db->trans_start();
		} else {
			$this->db->trans_complete();
			$message['status'] = 'ok';
		}
	
		return $message;

	}

	public function detil($reservation_trx)
	{		
		/* $this->db->select('*');		
		$this->db->select('DATE_FORMAT(splitdatestart, "%d %M %Y") as pickdate', FALSE);
		$this->db->select('DATE_FORMAT(splitdateend, "%d %M %Y") as returndate', FALSE);
		$this->db->from('costumer');
		$this->db->join('reservation', 'reservation.reservation_trx = costumer.reservation_trx');
        $this->db->where('costumer.reservation_trx', $reservation_trx );	
       $query = $this->db->get();	 */	
		$sql = "SELECT CONCAT(a.f_name ,' ', a.m_name ,' ', a.l_name) as fullname, a.*, b.*, DATE_FORMAT(splitdatestart, '%d %M %Y') as pickdate, DATE_FORMAT(splitdateend, '%d %M %Y') as returndate FROM costumer a 
		inner join reservation b ON (a.reservation_trx=b.reservation_trx) where a.reservation_trx='$reservation_trx'";
		$query = $this->db->query($sql);		
		
		#print_r($this->db->last_query());
		if($query){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("med_cek", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("med_cek", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}
	
	public function getAllGroups()
    {
        $query = $this->db->query('SELECT * FROM jenis_medical');
        return $query->result();
    }
	
	
	public function search_wilayah($enter_pickup)
	{		
		
		$sql = "SELECT * FROM wilayah where wilayah like '%$enter_pickup%'";		
		$query = $this->db->query($sql);	
		//print_r($this->db->last_query());
		if($query){
			return $query->result();
		}else{
			return false;
		}
	}


	public function send_email($dataPerson)
	{
    	$res_trx = $dataPerson['reservation_trx'];
		$regdata = $this->detil($res_trx);
		//die(print_r($regdata->f_name));
				
			$email          = $dataPerson['email'];
		   // die(print_r($email));
			$subject        = 'Reservasi Rental';
			$message        = '<div style="width: 600px; margin: 0 auto;">
<table style="width: 100%; border-collapse: collapse;">
<tbody>
<tr>
<td style="width: 100%;"><img src="<?=$config->baseURL =>"  "public/images/favicon.png" /></td>
</tr>
<tr>
<td style="width: 100%;">
<h1>Needcar Indonesia Reservation</h1>
</td>
</tr>
<tr>
<td style="width: 100%;">
<p>Hello, <strong>'.$regdata->f_name.' '.$regdata->m_name.' '.$regdata->l_name.'</strong></p>
<p>Thank you to send your data registration:</p>
<table style="width: 100%; border-collapse: collapse;">
<tbody>
<tr>
<th style="width: 20%;">Name</th>
<td style="width: 80%;"><strong>'.$regdata->f_name.'</strong></td>
</tr>
<tr>
<th>Email</th>
<td><strong>'.$regdata->email.'</strong></td>
</tr>
<tr>
<th>Home Address</th>
<td><strong>'.$regdata->address.'</strong></td>
</tr>
<tr>
<th>WhatsApp</th>
<td><strong>'.$regdata->m_phone.'</strong></td>
</tr>
<tr>
<th>Flight Number</th>
<td><strong>'.$regdata->flight_number.'</strong></td>
</tr>
<tr>
<th>Special Request</th>
<td><strong>'.$regdata->s_req.'</strong></td>
</tr>
</tbody>
</table>
<p>We received your Reservation: No '.$regdata->reservation_number.'</p>
<table style="width: 100%; border-collapse: collapse;">
<tbody>
<tr>
<th style="width: 20%;">Pickup</th>
<td style="width: 80%;"><strong>'.$regdata->enter_pickup.' '. date('d-m-Y',strtotime($regdata->splitdatestart)).' '.$regdata->enter_day.'</strong></td>
</tr>
<tr>
<th style="width: 20%;">Return</th>
<td style="width: 80%;"><strong>'.$regdata->retur.' '. date('d-m-Y',strtotime($regdata->splitdateend)).' '.$regdata->return_day.'</strong></td>
</tr>
<tr>
<th>Request</th>
<td><strong>'.$regdata->s_req.'</strong></td>
</tr>
</tbody>
</table>

<p>For further information no hp xxxxxx.</p>
<p>Thank You.</p>
</td>
</tr>
</tbody>
</table>
</div>';
			
			$mail = new PHPMailer(true);  
			try {
				
				$mail->isSMTP();  
				$mail->Host         = 'mail.needcarindonesia.com'; //smtp.google.com
				$mail->SMTPAuth     = true;     
				$mail->Username     = 'admin@needcarindonesia.com';  
				$mail->Password     = 'n33dcArsurat';
				$mail->SMTPSecure   = 'ssl';  
				$mail->Port         = 465;  
				$mail->Subject      = $subject;
				$mail->Body         = $message;
				//$mail->setFrom('username', 'display_name');
				$mail->SetFrom("admin@needcarindonesia.com","Admin Reservasi");
				
				$mail->addAddress($email);  
				$mail->isHTML(true);      
				
				if(!$mail->send()) {
					//die(print_r('gagal masuk'));
					$message['message'] = "Something went wrong. Please try again.";
				}
				else {
					//die(print_r('sukses'));
					//$message['message'] =  "Email sent successfully.";
				}
				
			} catch (Exception $e) {
				//die(print_r('coba lagi'));
				echo "Something went wrong. Please try again.";
			}
			
		}

		public function getdataRegister($id_user) {
	
			$sql = "SELECT a.*, b.tempat FROM reservation a inner join wilayah b on (a.id_wilayah = b.id_wilayah) WHERE a.id_register = '".$id_user."'";
			$cekhari = $this->db->query($sql)->getRowArray();
			return $cekhari;
		}

}