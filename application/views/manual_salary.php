
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


<?php foreach ($emp_details as  $details): ?>
<div class = "container" id = "content">
<div class = "panel panel-default" style = "border-radius:0px; padding:10px;">
	<div class = "row">
		<h2>&nbsp;&nbsp;Salary Slip for the month of 
		<?php foreach($sal as $row):
			
		endforeach;	?>
		
		</h2><hr>
		
			<div class = "col-md-6">
				<div class = "row">
				<div class = "col-md-12">
				<table class = "table">
				<tr>
					<td>Username :</td>
					<td><?php echo $details['username']; ?></td>
				</tr>
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
             			            <?php echo  form_open('/AdminDashboard/sal_insert'); ?>

             		</tr>
             			<tr>
             			<td><b>Paid days :</b> </td>
             			<td><input type = "text" name = "paid_days" class = "form-control" value = "">  </td>
             			
             		</tr>
             		<tr>
             			<td><b>Leave Days :</b> </td>
             			<td><input type = "text" class = "form-control"  name = "leave_days" value = ""> </td>
             		</tr>
             		<tr>
             			<td><b>Half Days :</b> </td>
             			<td><input type = "text" class = "form-control" name = "half_days" value = "" > </td>
             		</tr>
             	
             		
             	
             		
             	</table>
			</div>
		</div>
				<div class = "row">
	
			<div class = "col-md-6">
             <div class = "box">
            	
             	<table class = "table table-bordered">
             	
             		<tr>
             			<td><b>Basic :</b> </td>
             			<td><input type = "text" name = "basic" class = "form-control" value = ""> </td>
             			
             		</tr>
             		<tr>
             			<input type = "text" name = "sal_id" value = "<?php echo $sal_id; ?>" class = "hidden">
             		</tr>
             		<tr>
             			<td><b>PF</b> </td>
             			<td><input type = "text" name = "pf" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>HRA</b> </td>
             			<td><input type = "text" name = "hra" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>ESIC</b> </td>
             			<td><input type = "text" name = "esic" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Conveyance Allowance :</b> </td>
             			<td><input type = "text" name = "allowance" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Professional Tax</b></td>
             			<td><input type = "text" name = "prof_tax" class = "form-control" value = ""></td>
             		</tr>
             		
             		
             	</table>
             	
             
             </div>
		</div>
		<div class = "col-md-6">
			<table class = "table">
				<tr>
             			<td><b>Gross Earnings</b></td>
             			<td><input type = "text" name = "earnings" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Gross Deductions</b></td>
             			<td><input type = "text" name = "deductions" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Net Pay:</b></td>
             			<td><input type = "text" name = "net_pay" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Travel Reimbursement</b></td>
             			<td><input type = "text" name = "travel" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Net Transfer</b></td>
             			<td><input type = "text" name = "net_transfer" class = "form-control" value = ""></td>
             		</tr>
             		<tr>
             			<td><b>Special Allowance</b> </td>
             			<td><input type = "text" name = "special_allowance" class = "form-control" value = ""></td>
             		</tr>
             	
			</table>
		</div>
			<tr>
             		<button class = "btn btn btn-primary">Add</button>
					</tr>
             	<?php echo form_close(); ?>
		</div>
		<br><br>
		
	</div>
</div>

<?php endforeach; ?>