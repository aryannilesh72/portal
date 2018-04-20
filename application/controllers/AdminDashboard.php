<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

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
	public function index(){
		$data['title'] = 'Admin';
		
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('admindashboard', $data);
	}
	public function remove_employee($user_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->remove_employee($user_id)){
			$this->session->set_flashdata('message', "<div class='alert alert-success'>Deleted Successfully </div>");
		}else{
 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to delete</div>");
		}
		redirect('AdminDashboard/employee_list');
	}
	function get_loc_emp($loc_id)
    {
        $sections = $this->db->get_where('employees' , array(
            'location' => $loc_id
        ))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['user_id'] . '" >' . $row['username'] . '</option>';
        }
    }
	/**********DEPARTMENT LIST****************/
	
	public function department_list(){
		$data['title'] = 'Department list';
		$data['dept_list'] = $this->admin_model->department_list();
		$this->load->view('admin_templates/header.php', $data);
		$this->load->view('department_list',$data);
	}
	public function insert_department(){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->insert_department()){
                $this->session->set_flashdata('message', "<div class='alert alert-success'>Data Added Successfully </div>");
				}else{
				 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add</div>");
						
				}
		redirect('AdminDashboard/department_list');
	}
	public function remove_department($dept_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->remove_department($dept_id)){
			$this->session->set_flashdata('message', "<div class='alert alert-success'>Deleted Successfully </div>");
		}else{
 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to delete</div>");
		}
		redirect('AdminDashboard/department_list');
	}

	public function update_department($dept_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->update_department($dept_id)){
			echo "<div class='alert alert-success'>Update Successfully</div>";
		}else{
							 echo "<div class='alert alert-danger'>Error to Update </div>";

		}
		
	}
	
	/***************************LOCATION LIST*************************************/
		
	public function location_list(){
		$data['title'] = 'Location list';
		$data['loc_list'] = $this->admin_model->location_list();
		$this->load->view('admin_templates/header.php', $data);
		$this->load->view('location_list',$data);
	}
	public function insert_location(){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->insert_location()){
                $this->session->set_flashdata('message', "<div class='alert alert-success'>Data Added Successfully </div>");
				}else{
				 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add</div>");
						
				}
		redirect('AdminDashboard/location_list');
	}
	public function remove_location($loc_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->remove_location($loc_id)){
			$this->session->set_flashdata('message', "<div class='alert alert-success'>Deleted Successfully </div>");
		}else{
 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to delete</div>");
		}
		redirect('AdminDashboard/location_list');
	}

	public function update_location($loc_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->update_location($loc_id)){
			echo "<div class='alert alert-success'>Update Successfully</div>";
		}else{
							 echo "<div class='alert alert-danger'>Error to Update </div>";

		}
		
	}
	
/*****************************************DESIGNATION LIST**************************************/
	
	public function designation_list(){
		$data['title'] = 'Designation list';
		$data['desig_list'] = $this->admin_model->designation_list();
		$this->load->view('admin_templates/header.php', $data);
		$this->load->view('designation_list',$data);
	}
	public function insert_designation(){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->insert_designation()){
                $this->session->set_flashdata('message', "<div class='alert alert-success'>Data Added Successfully </div>");
				}else{
				 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add</div>");
						
				}
		redirect('AdminDashboard/designation_list');
	}
	public function remove_designation($desig_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->remove_designation($desig_id)){
			$this->session->set_flashdata('message', "<div class='alert alert-success'>Deleted Successfully </div>");
		}else{
 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to delete</div>");
		}
		redirect('AdminDashboard/designation_list');
	}

	public function update_designation($desig_id){
		$logged_in=$this->session->userdata('logged_in');
			if($logged_in['su']!='1'){
				exit($this->lang->line('permission_denied'));
			}
		if($this->admin_model->update_designation($desig_id)){
			echo "<div class='alert alert-success'>Update Successfully</div>";
		}else{
							 echo "<div class='alert alert-danger'>Error to Update </div>";

		}
		
	}
	
/*****************************************HOLIDAY*************************************************/
	public function add_holiday(){
		$data['title'] = 'Add Holiday';
		$this->load->view('admin_templates/header', $data);
		$this->load->view('add_holiday', $data);
	}
	public function insert_holiday(){
		if($this->admin_model->insert_holiday()){
                $this->session->set_flashdata('message', "<div class='alert alert-success'>Data Added Successfully </div>");
				}else{
				 $this->session->set_flashdata('message', "<div class='alert alert-danger'>Error to add</div>");
						
				}
		redirect('AdminDashboard/manage_holiday');
	}
	public function manage_holiday(){
		$data['title'] = 'Manage Holiday';
		$this->load->view('admin_templates/header', $data);
		$this->load->view('manage_holiday', $data);
	}
	public function edit_holiday(){
		
	}
	
/*************************************ATTENDANCE*******************************************/
	public function add_attendance(){
		$data['title'] = 'Add Attendance';
		$data['department_list'] = $this->admin_model->department_list();
		$data['location_list'] = $this->admin_model->location_list();
		$this->load->view('admin_templates/header', $data);
		$this->load->view('add_attendance', $data);
	}
	public function insert_attendance(){
		$data['dept_id'] = $this->input->post('dept_id');
		$data['loc_id'] = $this->input->post('loc_id');
		$data['attendance_date'] = $this->input->post('attendance_date');
		$data['year'] = $this->input->post('year');
		
		  $query = $this->db->get_where('emp_attendance' ,array(
            'dept_id'=>$data['dept_id'],
                'loc_id'=>$data['loc_id'],
			  'attendance_date'=> $data['attendance_date'],
			  'year' => $data['year'],

        ));
        if($query->num_rows() < 1) {
            $employees = $this->db->get_where('employees' , array(
                'department' => $data['dept_id'] , 'location' => $data['loc_id'] ))->result_array();

            foreach($employees as $row) {
                $attn_data['dept_id']   = $data['dept_id'];
                $attn_data['loc_id']       = $data['loc_id'];
                $attn_data['attendance_date']  = $data['attendance_date'];
				$attn_data['user_id'] = $row['user_id'];
                $attn_data['year'] = $data['year'];
				$attn_data['office_in'] = '10:00';
		        $attn_data['office_out'] = '18:00';
				$attn_data['reason'] = '';
                $this->db->insert('emp_attendance' , $attn_data);
            }

        }
        redirect(base_url().'index.php/AdminDashboard/manage_attendance_view/'.$data['dept_id'].'/'.$data['loc_id'].'/'.$data['attendance_date'],'refresh');
	}
		public function manage_attendance_view($dept_id = '',$loc_id = '',$attendance_date = ''){
		$data['dept_id'] = $dept_id;
		$data['loc_id'] = $loc_id;
		$data['attendance_date'] = $attendance_date;
		$data['title'] = 'Manage Attendance';
		$data['attendance_list'] = $this->admin_model->attendance_list();
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('manage_attendance_view',$data);
	}
	  function attendance_update($dept_id = '' , $loc_id = '' , $attendance_date = '')
    {
        $running_year = date("Y");
    
        $attendance_of_students = $this->db->get_where('emp_attendance' , array(
       'dept_id'=>$dept_id,'loc_id'=>$loc_id,'year'=>$running_year,'attendance_date'=>$attendance_date
        ))->result_array();
           foreach($attendance_of_students as $row) {
            $attendance_status = $this->input->post('status_'.$row['attId']);
			   $office_in = $this->input->post('office_in_'.$row['attId']);
			   $office_out = $this->input->post('office_out_'.$row['attId']);
			   $reason = $this->input->post('reason_'.$row['attId']);
            $this->db->where('attId' , $row['attId']);
            $this->db->update('emp_attendance' , array('status' => $attendance_status, 'office_out'=> $office_out, 'office_in'=> $office_in,'reason'=>$reason));
        $this->session->set_flashdata('flash_message' , 'Atendance Updated');
      
    }
		  redirect(base_url().'index.php/AdminDashboard/manage_attendance_view/'.$dept_id.'/'.$loc_id.'/'.$attendance_date , 'refresh');
	
}
	/***********************************ATTENDANCEREPORT***********************************************/
	
	function attendance_report(){
		         $data['month'] = date('m');
          $data['title'] = 'Attendance Report';
		   $this->load->view('admin_templates/header',$data);
		   $this->load->view('attendance_report',$data);
	}
     function attendance_report_selector()
    {   
        $data['dept_id']       = $this->input->post('dept_id');
        $data['loc_id']     = $this->input->post('loc_id');
        $data['month']          = $this->input->post('month');
        $data['sessional_year'] = $this->input->post('sessional_year');
        redirect(base_url() . 'index.php/AdminDashboard/attendance_report_view/' . $data['dept_id'] . '/' . $data['loc_id'] . '/' . $data['month'] . '/' . $data['sessional_year'], 'refresh');
    }
	function attendance_report_view($dept_id = '', $loc_id = '', $month = '', $sessional_year = ''){
		$data['dept_id'] = $dept_id;
		$data['loc_id'] = $loc_id;
		$data['sessional_year'] = $sessional_year;
		$data['month'] = $month;
		$data['title'] = 'Attendance Report';
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('attendance_report_view', $data);
		
	}
	
	/******************************************ADD SALARY SLIP***********************************/
		public function add_salary(){
		$data['title'] = 'Add Salary';
		$data['department_list'] = $this->admin_model->department_list();
		$data['location_list'] = $this->admin_model->location_list();
			
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('add_salary',$data);
	}
	public function get_emp_details(){
		$data['loc_id'] = $this->input->post('loc_id');
	    $data['user_id'] = $this->input->post('user_id');
        redirect(base_url().'index.php/AdminDashboard/manage_salary_view/'.$data['loc_id'].'/'.$data['user_id'],'refresh');

}
	public function  manage_salary_view($loc_id = '',$user_id = ''){
		$data['loc_id'] = $loc_id;
		$data['title'] = 'Manage Attendance';
		$data['user_id'] = $user_id;
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('emp_details',$data);
	}
	
	   function insert_salary($dept_id = '' , $loc_id = '' , $desig_id= '')
    {
        $user_id = $this->input->post('user_id');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$sal_status = $this->input->post('sal_status');
		$userdata = array(
			'emp_id' => $user_id,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'sal_status' => $sal_status,
		
		);
		$this->db->insert('salary_emp_slip', $userdata);
		$this->db->where('emp_id', $user_id);
		$this->db->where('start_date', $start_date);
		$this->db->where('end_date', $end_date);
		$query = $this->db->get('salary_emp_slip')->row();
		$sal_id = $query->sal_id;
		if($sal_status == '1'){

		 redirect(base_url().'index.php/AdminDashboard/emp_salary/'.$user_id.'/'.$sal_id.'/'.$sal_status, 'refresh');
      
    }
		if($sal_status == '2'){
			 redirect(base_url().'index.php/AdminDashboard/manual_salary/'.$user_id.'/'.$sal_id.'/'.$sal_status, 'refresh');
		}
	}
	function sal_insert(){
		$sal_id = $this->input->post('sal_id');
		$paid_days = $this->input->post('paid_days');
		$half_days = $this->input->post('half_days');
		$leave_days = $this->input->post('leave_days');
		$pf = $this->input->post('pf');
		$sal_status = $this->input->post('sal_status');
		
		$allowance = $this->input->post('allowance');
        $prof_tax = $this->input->post('prof_tax');
        $earnings = $this->input->post('earnings');
        $travel = $this->input->post('travel');
		

		if($sal_status == 1){
			$basic = ($pf*100)/12;
			$hra = ($basic*30)/100;
			$esic = $earnings *(1.75/100);
			$deductions = $pf+$esic+$prof_tax;
			$net_pay = $earnings-$deductions;
			$special_allowance = $earnings - ($basic+$hra+$allowance);
			$net_transfer = $net_pay + $travel;
			
		}
		else{
			$basic = $this->input->post('basic');
			$hra = $this->input->post('hra');
			$esic = $this->input->post('esic');
			$deductions = $this->input->post('deductions');
            $net_transfer = $this->input->post('net_transfer');
			$net_pay = $this->input->post('net_pay');
			$special_allowance = $this->input->post('special_allowance');
            $net_tansfer = $this->input->post('net_transfer');
			
		}
		$userdata = array(
			'pf' => $pf,
			'basic' => $basic,
			'hra' => $hra,
			'esic' => $esic,
			'prof_tax' => $prof_tax,
			'allowance' => $allowance,
			'earnings' => $earnings,
			'deductions' => $deductions,
			'net_pay' => $net_pay,
			'travel' => $travel,
			'net_transfer' => $net_transfer,
			'special_allowance' => $special_allowance,
			'paid_days' => $paid_days,
			'leave_days' => $leave_days,
			'half_days' => $half_days,

		);
		$this->db->where('sal_id', $sal_id);
          $this->db->update('salary_emp_slip ', $userdata); 
		redirect(base_url().'index.php/AdminDashboard/salary_view','refresh');
	}
	function salary_view($dept_id = '', $loc_id = '', $desig_id = ''){
		$data['dept_id'] = $dept_id;
		$data['loc_id'] = $loc_id;
		$data['desig_id'] = $desig_id;
	    $data['title'] = 'Manage Salary';
	
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('salary_view',$data);
				
	}
	function view_sal_slip($emp_id = '', $sal_id = ''){
		$data['emp_id'] = $emp_id;
		$data['sal_id'] = $sal_id;
		$data['title'] = 'Emp Salary';
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('view_salary_slip', $data);
	}
	function emp_salary($user_id = '', $sal_id = '', $sal_status = ''){
		$data['title'] = 'Generate Salary';
		$data['user_id'] = $user_id;
		$data['sal_id'] = $sal_id;
		$data['sal_status'] = $sal_status;
		$data['emp_details'] = $this->db->query("SELECT * FROM employees WHERE user_id = '$user_id'")->result_array();
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('emp_salary',$data);
	}
	function manual_salary($user_id = '', $sal_id = ''){
		$data['title'] = 'Generate Salary';
		$data['user_id'] = $user_id;
		$data['sal_id'] = $sal_id;
		$data['emp_details'] = $this->db->query("SELECT * FROM employees WHERE user_id = '$user_id'")->result_array();
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('manual_salary',$data);
	}
	/******************************EMPLYOEE LIST*************************************/
	
	public function employees_list(){
		$data['title'] = 'Employees List';
		$data['employees_list'] = $this->user_model->employees_list();
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('employees_list',$data);
	}
	public function edit_employee($user_id = ''){
		$data['title'] = 'Edit Employee';
		$data['desig_list'] = $this->admin_model->designation_list();
		$data['dept_list'] = $this->admin_model->department_list();
		$data['loc_list'] = $this->admin_model->location_list();
		$data['user_id'] = $user_id;
		$data['employees_list'] = $this->user_model->employees_list();
		$this->load->view('admin_templates/header.php',$data);
		$this->load->view('edit_employee',$data);
	}

    /******************************Change Password*************************************/

    public function change_password($user_id=''){

        $data['title'] = 'Change Password';
        $data['user_id'] = $user_id;
        $this->load->view('admin_templates/header.php',$data);
        $this->load->view('change_password',$data);

    }
    function changePassword($user_id='')
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');

        if($this->form_validation->run() == FALSE)
        {
            $this->change_password();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');

            $resultPas = $this->admin_model->matchOldPassword($user_id, $oldPassword);
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('AdminDashboard/change_password');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($user_id,$newPassword));

                $result = $this->admin_model->changePassword($usersData);

                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }

                redirect('AdminDashboard/change_password');
            }
        }
    }
	
}
	

?>