<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{
		$this->db->order_by("sal_id", "ASC");
		$query = $this->db->get("salary_emp_slip");
		return $query->result();
	}

	
}
