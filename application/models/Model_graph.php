<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_graph extends CI_model{


	public function get_all()
	{
		$query = $this->db->query('SELECT * FROM sales order by year asc ');
		/* $this->db->select("*")
				 ->from('sales')
				 ->order_by('year', 'DESC')
				 ->get(); */
		return $query->result();
	}

	


}