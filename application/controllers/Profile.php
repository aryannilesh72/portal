<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
		$this->load->model("user_model");
	 }

	public function index(){
		
	}
	public function view_employee($user_id){
		$data['title'] = 'Profile';
		$data['details'] = $this->user_model->get_user($user_id);
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('employee_profile', $data);
	}

}

?>