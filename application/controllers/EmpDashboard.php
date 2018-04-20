<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpDashboard extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
		$this->load->model("user_model");
		 $this->load->model("admin_model");
		 if(!$this->session->userdata('logged_in')){
			redirect('login');
		}
		$logged_in=$this->session->userdata('logged_in');
	 }
	
	public function profile($user_id = ''){
		$data['title'] = 'Profile';
		$data['user_id'] = $user_id;
		$data['desig_list'] = $this->admin_model->designation_list();
		$data['dept_list'] = $this->admin_model->department_list();
		$data['loc_list'] = $this->admin_model->location_list();
		$this->load->view('emp_templates/header',$data);
$this->load->view('profile', $data);
	
	}
	public function update_profile($user_id = ''){
				$logged_in=$this->session->userdata('logged_in');
		$this->load->library('form_validation');

					if($this->user_model->update_employee($user_id)){
                        $this->session->set_flashdata('message', "<div class='alert alert-success'>Updated Data </div>");
					}else{
						    $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add Data </div>");
						
					}
					redirect('EmpDashboard/profile/'.$user_id);
                }
	
	public function manage_salary($user_id = ''){
		$data['title'] = 'Manage Salary';
		$data['user_id'] = $user_id;
		$this->load->view('emp_templates/header', $data);
		$this->load->view('profile_salary',$data);
	}
function profile_sal_slip($emp_id = '', $sal_id = ''){
		$data['emp_id'] = $emp_id;
	     $data['user_id'] = $emp_id;
		$data['sal_id'] = $sal_id;
		$data['title'] = 'Emp Salary';
		$this->load->view('emp_templates/header.php',$data);
		$this->load->view('profile_sal_slip', $data);
	}
	function manage_attendance($user_id = ''){
		$data['user_id'] = $user_id;
		$data['month'] = date('M');
		$data['title'] = 'Attendance';
		$data['sessional_year'] = date('Y');
		$this->load->view('emp_templates/header.php',$data);
		$this->load->view('profile_attendance', $data);
	}
		
	}
	
?>