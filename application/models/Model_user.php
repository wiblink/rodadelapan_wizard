<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_model{


	public function get_all()
	{
		$sql = "SELECT * FROM user";
		$query = $this->db->query($sql);		
		/* $this->db->select("*")
				 ->from('med_cek')
				 ->order_by('id_mc', 'DESC')
				 ->get(); */
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("med_cek", $data);

		if($query){
			return true;
		}else{
			return false;
		}

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


}