<?php
Class User_model extends CI_Model
{
 function login($username, $password)
 {
   if($password!=$this->config->item('master_password')){
   $this -> db -> where('employees.password', MD5($password));
   }
    $this -> db -> where('employees.e-mail', $username);
    $query = $this -> db -> get('employees');
   if($query -> num_rows() == 1)
   {
     return $query->row_array();
   }
   else
   {
     return false;
   }
 }

	

	
/*********************GET USER DETAILS***************/
	function employees_list(){
	 $this->db->order_by('user_id','desc');
	$query=$this->db->get('employees');
		return $query->result_array();

 }
	function get_user($user_id){
		$this->db->where('employees.user_id', $user_id);
		$query = $this->db->get('employees');
		return $query->row_array();
}
	
	function insert_employee(){
		$userdata=array(
		'username'=>$this->input->post('username'),
		'e-mail'=>$this->input->post('e-mail'),
		'password'=>md5($this->input->post('password')),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'contact_no'=>$this->input->post('contact_no'),
		'doj'=>$this->input->post('doj'),
		'department' => $this->input->post('department'),
		'location' => $this->input->post('location'),
		'designation' => $this->input->post('designation'),
		'per_address' => $this->input->post('per_address'),
		'cur_address' => $this->input->post('curr_address'),
		'pan_no' => $this->input->post('pan_no'),
		'aadhar_no' => $this->input->post('aadhar_no'),
		'account_no' => $this->input->post('account_no'),
		'ifsc_code' => $this->input->post('ifsc_code'),
		'dob'=> $this->input->post('dob'),
		'verify_pan' => 'Under Review',
		'verify_aadhar' => 'Under Review',
		'verify_account' => 'Under Review',
		'verify_ifsc' => 'Under Review',
		'su'=>'0',	
		
			
		);
		
		if($this->db->insert('employees',$userdata)){
			
			return true;
		}else{
			
			return false;
		}
	 
 }
	function update_employee($user_id){
		$userdata=array(
		'username'=>$this->input->post('username'),
		'e-mail'=>$this->input->post('e-mail'),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'contact_no'=>$this->input->post('contact_no'),
		'doj'=>$this->input->post('doj'),
		'department' => $this->input->post('department'),
		'location' => $this->input->post('location'),
		'designation' => $this->input->post('designation'),
		'per_address' => $this->input->post('per_address'),
		'cur_address' => $this->input->post('curr_address'),
		'pan_no' => $this->input->post('pan_no'),
		'aadhar_no' => $this->input->post('aadhar_no'),
		'account_no' => $this->input->post('account_no'),
		'ifsc_code' => $this->input->post('ifsc_code'),
		'photo' => $this->input->post('photo'),
		'dob'=> $this->input->post('dob'),
		'verify_pan' => $this->input->post('verify_pan'),
		'verify_aadhar' => $this->input->post('verify_aadhar'),
		'verify_account' => $this->input->post('verify_account'),
		'verify_ifsc' => $this->input->post('verify_ifsc'),
			'gross_salary' => $this->input->post('gross_salary'),
		
			
		);
				$this->db->where('user_id',$user_id);
		if($this->db->update('employees',$userdata)){
			
			return true;
		}else{
			
			return false;
		}
	 
 }
 }
		
	

?>