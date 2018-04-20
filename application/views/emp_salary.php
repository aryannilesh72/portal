
<?php  $sal = $this->db->get_where('salary_emp_slip', array('sal_id'=>$sal_id))->result_array(); 
foreach($sal as $row):
$start_date = $row['start_date'];
$end_date = $row['end_date'];

endforeach;
?>
<?php $start = new DateTime($start_date);
$end = new DateTime($end_date);
$days = $start->diff($end, true)->days;
$sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);

?>
<?php $attendance = $this->db->query("SELECT * FROM emp_attendance where user_id = '$user_id' and attendance_date BETWEEN '$start_date' and '$end_date'")->result_array(); ?>

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

<?php foreach ($emp_details as  $details): ?>
<div class = "container" id = "content">
<div class = "panel panel-default" style = "border-radius:0px; padding:10px;">
	<div class = "row">
			<div class = "col-md-6">
				<h1><?php echo $details['username']; ?> </h1>
				<hr>
				<div class = "row">
				<div class = "col-md-12">
				<h4><b>Department:</b>&nbsp; <?php $dept= $this->db->get_where('department', array('dept_id'=>$details['department']))->result_array(); ?>
	               <?php foreach($dept as $dept): ?>
                  <?php echo $dept['dept_name']; 
						endforeach;
						?>  </h4>
	                <h4><b>Designation:</b>&nbsp; <?php $desig = $this->db->get_where('designation', array('desig_id'=>$details['designation']))->result_array(); ?>
	               <?php foreach($desig as $desi): ?>
                  <?php echo $desi['desig_name']; 
						endforeach;
						?> 
	                  </h4>
	                <h4><b>Location:</b>&nbsp; <?php echo $details['location']; ?> </h4>
	                <h4><b>Email ID:</b>&nbsp; <?php echo $details['e-mail']; ?> </h4>
					<h4><b>Contact No:</b>&nbsp; <?php echo $details['contact_no']; ?> </h4>

				</div>
				</div>
				</div>
			<div class = "col-md-2"></div>
			<div class = "col-md-4">
			</div>
		</div>
				<div class = "row">
		<h3 class = "text-center">Other Details</h3>
		<div class = "col-md-6">
             <div class = "box">
             	<table class = "table table-bordered">
             		<tr>
             			<td><b>Username :</b> </td>
             			<td><?php echo $details['username']; ?></td>
             		</tr>
             		<tr>
             			<td><b>Date Of Joining  :</b> </td>
             			<td><?php echo $details['doj']; ?></td>
             		</tr>
             		<tr>
             			<td><b>Permanent Address :</b> </td>
             			<td><?php echo $details['per_address']; ?></td>
             		</tr>
             		<tr>
             			<td><b>Current Address :</b> </td>
             			<td><?php echo $details['cur_address']; ?></td>
             		</tr>
             	</table>
             </div>
		</div>
		<div class= "col-md-6"></div>
			<div class = "col-md-6">
             <div class = "box">
             	<table class = "table table-bordered">
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
             		
             	
             		
             	</table>
             </div>
		</div>
		
			<div class = "col-md-6">
             <div class = "box">
            <?php echo  form_open('/AdminDashboard/sal_insert'); ?>
             	<table class = "table table-bordered">
             		<tr>
             			<td><b>Paid days :</b> </td>
             			<td><input type = "text" value = "<?php echo $cp; ?>" class = "form-control hidden" name = "paid_days" />
             			<?php echo $cp; ?>
             			    </td>
             			
             		</tr>
             		<tr>
             			<td>
             			<input type = "text" value = "<?php echo $ca; ?>" class = "form-control hidden" name = "leave_days" />
             			<b>Leave Days :</b> </td>
             			<td><?php echo $ca; ?></td>
             		</tr>
             		<tr>
             			<td>
             			<input type = "text" value = "<?php echo $ch; ?>" class = "form-control hidden" name = "half_days" />
             			<b>Half Days :</b> </td>
             			<td><?php echo $ch; ?></td>
             		</tr>
             		<tr>
             			<input type = "text" name = "sal_id" value = "<?php echo $sal_id; ?>" class = "hidden">
             		</tr>
             		<tr>
             			<input type = "text" name = "sal_status" value = "<?php echo $sal_status; ?>" class = "hidden">
             		</tr>
             		
             		<tr>
             			<td><b>PF</b> </td>
             			<td><input type = "text" name = "pf" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Conveyance Allowance :</b> </td>
             			<td><input type = "text" name = "allowance" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Professional Tax</b></td>
             			<td><input type = "text" name = "prof_tax" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Travel Reimbursement</b></td>
             			<td><input type = "text" name = "travel" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Gross Earnings</b></td>
             			<td><input type = "text" name = "earnings" class = "form-control" value = ""></td>
             		</tr>
             	
             	</table>
             	<tr>
             		<button class = "btn btn btn-primary">Add</button>
					</tr>
             	<?php echo form_close(); ?>
             </div>
		</div>
		</div>
		<br><br>
		
	</div>
</div>

<?php endforeach; ?>