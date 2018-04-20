  
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
<?php foreach ($det as  $details): ?>
<div class = "container">
<button onclick="myFunction()" class = "pull-right btn btn-info">PDF</button>

<div class = "panel panel-default" style = "border-radius:0px; padding:10px;">
	<div class = "row">
		<h2>&nbsp;&nbsp;Salary Slip</h2><hr>
			<div class = "col-md-6">
				<div class = "row">
				<div class = "col-md-12">
				<table class = "table">
					<tr>
						<td><b>Emp Code:</b></td>
						<td><?php echo $details['emp_code']; ?></td>
					</tr>
					<tr>
						<td><b>Department:</b></td>
						<td><?php $dept= $this->db->get_where('department', array('dept_id'=>$details['department']))->result_array(); ?>
	               <?php foreach($dept as $dept): ?>
                  <?php echo $dept['dept_name']; 
						endforeach;
						?></td>
					</tr>
					<tr>
						<td><b>Designation:</b></td>
						<td><?php $desig = $this->db->get_where('designation', array('desig_id'=>$details['designation']))->result_array(); ?>
	               <?php foreach($desig as $desi): ?>
                  <?php echo $desi['desig_name']; 
						endforeach;
						?> </td>
					</tr>
					<tr>
						<td><b>Location:</b></td>
						<td><?php $loca = $this->db->get_where('location', array('loc_id'=>$details['location']))->result_array(); ?>
	               <?php foreach($loca as $loc): ?>
                  <?php echo $loc['loc_name']; 
						endforeach;
						?></td>
					</tr>
					<tr>
						<td><b>Email Id:</b></td>
						<td><?php echo $details['e-mail']; ?></td>
					</tr>
					<tr>
						<td><b>Contact No:</b></td>
						<td><?php echo $details['contact_no']; ?></td>
					</tr>
				</table>
	        

				</div>
				</div>
				</div>
			<div class = "col-md-6">
			<table class = "table">
             		<tr>
             			<td><b>Pan No :</b> </td>
             			<td><?php echo $details['pan_no']; ?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Aadhar No :</b> </td>
             			<td><?php echo $details['aadhar_no']; ?></td>
             		</tr>
             		<tr>
             			<td><b>Account No :</b> </td>
             			<td><?php echo $details['account_no']; ?></td>
             		</tr>
             		<?php foreach ($sal_slip as  $sal): ?>
             		<tr>
             			<td><b>Paid days :</b> </td>
             			<td><?php echo $sal['paid_days'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Leave Days :</b> </td>
             			<td><?php echo $sal['leave_days'];?> </td>
             		</tr>
             		<tr>
             			<td><b>Half Days :</b> </td>
             			<td><?php echo $sal['half_days'];?> </td>
             		</tr>
             		<?php endforeach; ?>
             	
             		
             	</table>
			</div>
		<h4 class = "text-center"><b>Earnings and Deductions:</b></h4><hr>
			<div class = "col-md-6">
			<table class = "table">
             	
             		<?php foreach ($sal_slip as  $sal): ?>
             		<tr>
             			<td><b>Basic :</b> </td>
             			<td><?php echo $sal['basic'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>PF :</b> </td>
             			<td><?php echo $sal['pf'];?> </td>
             		</tr>
             		<tr>
             			<td><b>HRA :</b> </td>
             			<td><?php echo $sal['hra'];?> </td>
             		</tr>
             		<tr>
             			<td><b>ESIC :</b> </td>
             			<td><?php echo $sal['esic'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Conveyance Allowance :</b> </td>
             			<td><?php echo $sal['allowance'];?> </td>
             		</tr>
             		<tr>
             			<td><b>Professional Tax :</b> </td>
             			<td><?php echo $sal['prof_tax'];?> </td>
             		</tr>
             		<?php endforeach; ?>
             	
             		
             	</table>
			</div>
				<div class = "col-md-6">
			<table class = "table">
             	
             		<?php foreach ($sal_slip as  $sal): ?>
             		<tr>
             			<td><b>Gross Earnings :</b> </td>
             			<td><?php echo $sal['earnings'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Gross Deductions :</b> </td>
             			<td><?php echo $sal['deductions'];?> </td>
             		</tr>
             		<tr>
             			<td><b>Net Pay :</b> </td>
             			<td><?php echo $sal['net_pay'];?> </td>
             		</tr>
             		<tr>
             			<td><b>Travel :</b> </td>
             			<td><?php echo $sal['travel'];?>  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Net Transfer :</b> </td>
             			<td><?php echo $sal['net_transfer'];?> </td>
             		</tr>
             		<tr>
             			<td><b>Special Allowance :</b> </td>
             			<td><?php echo $sal['special_allowance'];?> </td>
             		</tr>
             		<?php endforeach; ?>
             	
             		
             	</table>
			</div>
	</div></div>
</div>
<?php endforeach; ?>

<script>
function myFunction() {
    window.print();
}
</script>

     
                                   
