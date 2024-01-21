<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_medcek extends CI_model{


	public function get_all()
	{
		$query = $this->db->query('SELECT a.*, TIMESTAMPDIFF(YEAR ,a.tgl_lahir,NOW() ) AS usia, b.nama_medical FROM med_cek a left join jenis_medical b
		ON (a.id_jenis_medical=b.id_jenis_medical)
		order by a.id_mc desc ');		
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

	public function edit($id_mc)
	{
		
		$query = $this->db->where("id_mc", $id_mc)
				->get("med_cek");

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