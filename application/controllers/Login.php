<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
		$this->load->model("user_model");
		 $this->load->model("admin_model");
	 }
	public function index(){
		/*if($this->session->userdata('logged_in')){
			$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']=='1'){
				redirect('AdminDashboard/admindashboard');
			}else{
				redirect('empdashboard');	
			}
			
		}*/
		$data['title'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('login', $data);
	}
	
	/*********VERIFY LOGIN***********/
	public function verifylogin(){
		$username =$this->input->post('email');
		$password = $this->input->post('password');
		
		if($this->user_model->login($username,$password)){
			// row exist fetch userdata
			$user=$this->user_model->login($username,$password);
			$this->session->set_userdata('logged_in',$user);
			if($user['su']=='1'){
				redirect('admindashboard');
			}else{
				
                 redirect('EmpDashboard/profile/'.$user['user_id']);

 
			}
		}else{
			$this->session->set_flashdata('message','Invalid Login');
			redirect('login');
		}
	}
	
	/*******************************REGISTRATION*************************/
	public function registration(){
		$data['title'] = 'Register New Account';
		$data['desig_list'] = $this->admin_model->designation_list();
		$data['dept_list'] = $this->admin_model->department_list();
		$data['loc_list'] = $this->admin_model->location_list();
		$this->load->view('templates/header',$data);
		$this->load->view('register',$data);
	}
	public function insert_employee(){

			$logged_in=$this->session->userdata('logged_in');

		$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('e-mail', 'Email', 'required|is_unique[employees.e-mail]');
        $this->form_validation->set_rules('password', 'Password', 'required');
		 $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('per_address', 'Permanent Address', 'required');
		$this->form_validation->set_rules('curr_address', 'Current Address', 'required');
   $this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('department', 'Department', 'required');
	$this->form_validation->set_rules('designation', 'Designation', 'required');
		$this->form_validation->set_rules('doj', 'Date Of Joining', 'required');
				$this->form_validation->set_rules('contact_no', 'Contact No', 'required|exact_length[10]|numeric');

	
		



          if ($this->form_validation->run() == FALSE)
                {
                     $this->session->set_flashdata('message', "<div class='alert alert-danger'>".validation_errors()." </div>");
					redirect('login/registration');
                }
                else
                {
					if($this->user_model->insert_employee()){
                    $this->session->set_flashdata('message', "<div class='alert alert-success'>Your Profile has been registered.</div>");
					}else{
						    $this->session->set_flashdata('message', "<div class='alert alert-danger'>".$this->lang->line('error_to_add_data')." </div>");
						
					}
					redirect('login/registration');
                }       

	}
	public function update_employee($user_id = ''){

			$logged_in=$this->session->userdata('logged_in');
		$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('e-mail', 'Email', 'required');
      
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('per_address', 'Permanent Address', 'required');
		$this->form_validation->set_rules('curr_address', 'Current Address', 'required');
   $this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('department', 'Department', 'required');
	$this->form_validation->set_rules('designation', 'Designation', 'required');
		$this->form_validation->set_rules('doj', 'Date Of Joining', 'required');
				$this->form_validation->set_rules('contact_no', 'Contact No', 'required|exact_length[10]|numeric');
				$this->form_validation->set_rules('pan_no', 'Pan Number', 'required|exact_length[10]|alpha_numeric');
		$this->form_validation->set_rules('aadhar_no', 'Aadhar Number', 'required|min_length[10]|alpha_numeric');
		$this->form_validation->set_rules('account_no', 'Account Number', 'required|min_length[10]|numeric');
		$this->form_validation->set_rules('ifsc_code', 'IFSC Number', 'required|min_length[10]|alpha_numeric');



          if ($this->form_validation->run() == FALSE)
                {
                     $this->session->set_flashdata('message', "<div class='alert alert-danger'>".validation_errors()." </div>");
					redirect('AdminDashboard/edit_employee/'.$user_id);
                }
                else
                {
					if($this->user_model->update_employee($user_id)){
                        $this->session->set_flashdata('message', "<div class='alert alert-success'>Updated Data </div>");
					}else{
						    $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add Data </div>");
						
					}
					redirect('AdminDashboard/edit_employee/'.$user_id);
                }       

	
		
	}
    /*******************************Password Reset*************************/
    public function forget()
    {
        if (isset($_GET['info'])) {
            $data['info'] = $_GET['info'];
        }
        if (isset($_GET['error'])) {
            $data['error'] = $_GET['error'];
        }
        $data['title'] = 'Admin';

        $this->load->view('templates/header.php',$data);
        $this->load->view('forget_password',$data);
    }
    public function doforget()
    {
        $this->load->helper('url');
        $email= $_POST['email'];
        $q = $this->db->query("select * from employees where 'e-mail'='" . $email . "'");
        if ($q->num_rows > 0) {
            $r = $q->result();
            $user=$r[0];
            $this->resetpassword($user);
            $info= "Password has been reset and has been sent to email id: ". $email;
            redirect('login/forget?info=' . $info, 'refresh');
        }
        else{
        $error= "The email id you entered not found on our database ";
        redirect('login/forget?error=' . $error, 'refresh');

    }}
    private function resetpassword($user)
    {
        date_default_timezone_set('GMT');
        $this->load->helper('string');
        $password= random_string('alnum', 16);
        $this->db->where('id', $user->id);
        $this->db->update('users',array('password'=>MD5($password)));
        $this->load->library('email');
        $this->email->from('cantreply@youdomain.com', 'Your name');
        $this->email->to($user->email);
        $this->email->subject('Password reset');
        $this->email->message('You have requested the new password, Here is you new password:'. $password);
        $this->email->send();
    }
}
	


?>