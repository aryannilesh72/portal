<?php
Class Admin_model extends CI_Model
{
 
/**************************************DEPARTMENT LIST***********************************/
	function department_list(){
		  $query=$this->db->get('department');
	 return $query->result_array();
	}
	function insert_department(){
		$userdata = array(
			'dept_name' => $this->input->post('dept_name'),
		);
		if($this->db->insert('department',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	function remove_employee($user_id){
		$this->db->where('user_id',$user_id);
		if($this->db->delete('employees')){
			return true;
		}else{
			return false;
		}
	}
	
	function remove_department($dept_id){
		$this->db->where('dept_id',$dept_id);
		if($this->db->delete('department')){
			return true;
		}else{
			return false;
		}
	}
	function update_department($dept_id){
		$userdata = array(
		'dept_name' => $this->input->post('dept_name'),
		);
		$this->db->where('dept_id',$dept_id);
		if($this->db->update('department',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	/**************************************LOCATION LIST***********************************/
	function location_list(){
		  $query=$this->db->get('location');
	 return $query->result_array();
	}
	function insert_location(){
		$userdata = array(
			'loc_name' => $this->input->post('loc_name'),
		);
		if($this->db->insert('location',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	function remove_location($loc_id){
		$this->db->where('loc_id',$loc_id);
		if($this->db->delete('location')){
			return true;
		}else{
			return false;
		}
	}
	function update_location($loc_id){
		$userdata = array(
		'loc_name' => $this->input->post('loc_name'),
		);
		$this->db->where('loc_id',$loc_id);
		if($this->db->update('location',$userdata)){
			return true;
		}else{
			return false;
		}
	}
		/**************************************DESIGNATION LIST***********************************/
	function designation_list(){
		  $query=$this->db->get('designation');
	 return $query->result_array();
	}
	function insert_designation(){
		$userdata = array(
			'desig_name' => $this->input->post('desig_name'),
		);
		if($this->db->insert('designation',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	function remove_designation($desig_id){
		$this->db->where('desig_id',$desig_id);
		if($this->db->delete('designation')){
			return true;
		}else{
			return false;
		}
	}
	function update_designation($desig_id){
		$userdata = array(
		'desig_name' => $this->input->post('desig_name'),
		);
		$this->db->where('desig_id',$desig_id);
		if($this->db->update('designation',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	
	/*********************************************HOLIDAY************************************/
	function insert_holiday(){
		
		$start_month1 = $this->input->post('start_date');
		$start_month2 = strtotime($start_month1);
        $start_month3 = date("m",$start_month2);
		$start_year1 = $this->input->post('start_date');
		$start_year2 = strtotime($start_year1);
        $start_year3 = date("Y",$start_year2);
        $start_month1 = $this->input->post('start_date');
		$start_month2 = strtotime($start_month1);
        $start_month3 = date("m",$start_month2);
		$start_year1 = $this->input->post('start_date');
		$start_year2 = strtotime($start_year1);
        $start_year3 = date("Y",$start_year2);
 		$userdata = array(
			'holi_reason' => $this->input->post('holi_reason'),
			'start_date' => $this->input->post('start_date'),
			'end_date'=> $this->input->post('end_date'),
			'holi_month' => $start_month3,
			'holi_year' => $start_year3,
		);
		if($this->db->insert('holiday',$userdata)){
			return true;
		}else{
			return false;
		}
	}
	
	/******************************************ATTENDANCE************************************/
	function attendance_list(){
		 $query=$this->db->get('emp_attendance');
	 return $query->result_array();
	     
	}
    /******************************************Change Password************************************/
    public function checkOldPass($email,$old_password)
    {

        $this->db->where('e-mail', $email);
        $this->db->where('password',$old_password);
        $query = $this->db->get('employees');
        if($query->num_rows() > 0)
            return 1;
        else
            return 0;
    }
    function changePassword($email, $userInfo)
    {
        $this->db->where('e-mail', $email);

        $this->db->update('employees', $userInfo);

        return $this->db->affected_rows();
    }

}


?>