
  <?php 
$attendance = $this->db->get_where('emp_attendance', array('user_id' => $emp_id))->result_array(); 
$sal_slip = $this->db->get_where('salary_emp_slip', array('sal_id' => $sal_id))->result_array(); 

$det = $this->db->get_where('employees', array('user_id'=>$emp_id))->result_array();

                    $sal = $this->db->get_where('salary_emp_slip', array('sal_id'=>$sal_id))->result_array();


?>

<?php
$cp = 0;
$ca = 0;
$ch = 0;
foreach ($attendance as  $att):
if($att['status'] == 1){
	$cp++;
}
if($att['status'] == 2){
	$ca++;
}
if($att['status'] == 3){
	$ch++;
}
endforeach;
?>

<?php foreach ($det as  $details) ?>
<div class = "container">
<button onclick="myFunction()" class = "pull-right btn btn-info">PDF</button>

<div class = "panel panel-default salary-print" style = "border-radius0px; padding10px;">
	<div class = "row">
	<div class = "col-xs-4">
	<CENTER><img src = "<?php echo base_url('images/logo.jpg');?>" width = "30%" >
		</CENTER>
		</div>
		<div class = "col-xs-8">
		<h2>VOLTA TECHNOLOGY SOLUTIONS PVT. LTD.</h2>
			<h4>Salary Slip for the month of 
			<?php foreach ($sal_slip as $row): ?>
			<?php echo date(" F  Y", strtotime($row['start_date']) );
				endforeach;
				?></h4>
		</div>
		<br>
			<div class = "col-xs-7">
				<div class = "row">
				<div class = "col-xs-12">
				<table class = "table">
					<tr>
						<td>Emp Code</td>
						<td><h6><?php echo $details['emp_code']; ?></h6></td>
					</tr>
					<tr>
						<td>Department</td>
						<td><?php $dept= $this->db->get_where('department', array('dept_id'=>$details['department']))->result_array(); ?>
	               <?php foreach($dept as $dept): ?>
                  <?php echo $dept['dept_name']; 
						endforeach;
						?></td>
					</tr>
					<tr>
						<td>Designation</td>
						<td><?php $desig = $this->db->get_where('designation', array('desig_id'=>$details['designation']))->result_array(); ?>
	               <?php foreach($desig as $desi): ?>
                  <?php echo $desi['desig_name']; 
						endforeach;
						?> </td>
					</tr>
					<tr>
						<td>Location</td>
						<td><?php $loca = $this->db->get_where('location', array('loc_id'=>$details['location']))->result_array(); ?>
	               <?php foreach($loca as $loc): ?>
                  <?php echo $loc['loc_name']; 
						endforeach;
						?></td>
					</tr>
					<tr>
						<td>Email Id</td>
						<td><?php echo $details['e-mail']; ?></td>
					</tr>
					<tr>
						<td>Contact No</td>
						<td><?php echo $details['contact_no']; ?></td>
					</tr>
				</table>
	        

				</div>
				</div>
				</div>
			<div class = "col-xs-5">
			<table class = "table">
             		<tr>
             			<td>Pan No  </td>
             			<td><?php echo $details['pan_no']; ?>  </td>
             			
             		</tr>
             		<tr>
             			<td>Aadhar No  </td>
             			<td><?php echo $details['aadhar_no']; ?></td>
             		</tr>
             		<tr>
             			<td>Account No  </td>
             			<td><?php echo $details['account_no']; ?></td>
             		</tr>
             		<?php foreach ($sal_slip as  $sal): ?>
             		<tr>
             			<td>Paid days  </td>
             			<td><?php echo $sal['paid_days'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td>Leave Days  </td>
             			<td><?php echo $sal['leave_days'];?> </td>
             		</tr>
             		<tr>
             			<td>Half Days  </td>
             			<td><?php echo $sal['half_days'];?> </td>
             		</tr>
             		<?php endforeach; ?>
             	
             		
             	</table>
			</div>
			<div class = "col-xs-6">
			<table class = "table">
             	<thead>
             		<tr>
						<td><b>Earnings</b></td>
						<td><b>Earned</b></td>
             		</tr>
             	</thead>
             		<?php foreach ($sal_slip as  $sal): ?>
             		<tr>
             			<td>Basic  </td>
             			<td><?php echo $sal['basic'];?>  </td>
             			
             		</tr>
             		
             		<tr>
             			<td>HRA  </td>
             			<td><?php echo $sal['hra'];?> </td>
             		</tr>
             		
             		<tr>
             			<td>Conveyance Allowance  </td>
             			<td><?php echo $sal['allowance'];?> </td>
             		</tr>
             		<tr>
             			<td>Special Allowance  </td>
             			<td><?php echo $sal['special_allowance'];?> </td>
             		</tr>
             		<?php endforeach; ?>
             	
             		
             	</table>
			</div>
				<div class = "col-xs-6">
			<table class = "table">
             	
             		<?php foreach ($sal_slip as  $sal): ?>
             		<thead>
             		<tr>
						<td><b>Deduction</b></td>
						<td><b>Amount</b></td>
             		</tr>
             	</thead>
             		
             		
             		<tr>
             			<td>PF  </td>
             			<td><?php echo $sal['pf'];?> </td>
             		</tr>
             		<tr>
             			<td>ESIC  </td>
             			<td><?php echo $sal['esic'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td>Professional Tax  </td>
             			<td><?php echo $sal['prof_tax'];?> </td>
             		</tr>
             		
             		
             		
             	
             		
             	</table>
			</div>
			<hr>
			<div class = "row">
			<div class = "col-xs-7" style = "padding-left:30px;">
		       <table class = "table">
			       <tr>
             		
					   <td><b>Gross Earnings  </b></td>
             			<td><?php echo $sal['earnings'];?>  </td>
             			
             		</tr>
				      
             		<tr>
             			<td>Net Pay  </td>
             			<td><?php echo $sal['net_pay'];?> </td>
             		</tr>
             		<tr>
             			<td>Travel Reimbursement </td>
             			<td><?php echo $sal['travel'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td>Net Transfer  </td>
             			<td><?php echo $sal['net_transfer'];?> </td>
             		</tr>
             	<!--	<tr>
             			<td>In words</td>
             			<td><?php $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
echo ucfirst($f->format($sal['net_transfer'])); ?> Only</td>
             		</tr>-->
				</table>
				</div>
				<div class = "col-xs-4">
				 <table class = "table">
					 <tr>
						 <td><b>Gross Deductions  </b></td>
             			<td><?php echo $sal['deductions'];?> </td>
             		</tr>
					</table>
				</div>
				</div>
				<?php endforeach; ?>
	</div></div>
	<h5>This is computer generated document, hence no signature is required.</h5>
</div>



<script>
function myFunction() {
    window.print();
}
</script>

     
                                   
