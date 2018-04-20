<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
	 function __construct()
	 {
	   parent::__construct();
	   $this->load->database();
		
	 }
	
	function index()
	{
		$this->load->model("excel_export_model");
		$data["employee_data"] = $this->excel_export_model->fetch_data();
		$this->load->view("excel_export_view", $data);
	}

	function action()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Emp Name","pf", "prof_tax", "basic", "Allowance","Gross Earnings", "Start Date", "End Date", "HRA", "ESIC","Gross Deductions","Net Pay","Travel","Net Transfer", "Special Allowance", "Paid Days", "Leave Days", "Half Days");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;

		foreach($employee_data as $row)
		{
			$this->db->where('user_id', $row->emp_id);
		    $query = $this->db->get('employees')->row();	
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, 
									$query->username);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->pf);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->prof_tax);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->basic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->allowance);
			
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->earnings);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->	start_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->	end_date);
			$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->	hra);
			$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->		esic);
			$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->	deductions);
			$object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->	net_pay);
			$object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->	travel);
			$object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->	net_transfer);
			$object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->		special_allowance);
			$object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->paid_days);
			$object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->leave_days);
			$object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->half_days);
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Employee Data.xls"');
		$object_writer->save('php://output');
	}

	
	
}

















































	