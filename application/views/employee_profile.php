<div class = "container">
<div class = "panel panel-default" style = "border-radius:0px; padding:10px;">
	<div class = "row">
		
			<div class = "col-md-6">
				<h1><?php echo $details['first_name']; ?> &nbsp; <?php echo $details['last_name']; ?>
				<?php echo $details['username']; ?>
				</h1>
				<hr>
				<div class = "row">
				<div class = "col-md-12">
				<h4><b>Department:</b>&nbsp; 
					<?php
						$this->db->where('dept_id', $details['department']);
									$query = $this->db->get('department')->row();	
									 echo $query->dept_name;
					
					?> </h4>
	                <h4><b>Designation:</b>&nbsp; 
	                <?php
						$this->db->where('desig_id', $details['designation']);
									$query = $this->db->get('designation')->row();	
									 echo $query->desig_name;
					
					?>
	                 
	                   </h4>
	                <h4><b>Location:</b>&nbsp; 
	                <?php
						$this->db->where('loc_id', $details['location']);
									$query = $this->db->get('location')->row();	
									 echo $query->loc_name;
					
					?>
	                 
	                   </h4>
	                <h4><b>Email ID:</b>&nbsp; <?php echo $details['e-mail']; ?> </h4>
					<h4><b>Contact No:</b>&nbsp; <?php echo $details['contact_no']; ?> </h4>

				</div>
				</div>
				</div>
			<div class = "col-md-2"></div>
			<div class = "col-md-4">
			</div>
		</div>
		<br><br>
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
             		<tr>
						<td><b>Date of Birth:</b></td>
             			<td><?php echo $details['dob']; ?></td>
             		</tr>
             		<tr>
             			
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
             			<td><?php echo $details['pan_no']; ?> &nbsp;
             			   <?php if($details['verify_pan'] == 'Under Review') { ?>
             			  <span style = "color:dodgerblue;" class = "pull-right">Under Review</span>
            			      <?php   } ?>
           			          <?php if($details['verify_pan'] == 'Checked') { ?>
             			  <span style = "color:green;" class = "pull-right">Checked</span>
            			      <?php   } ?>          			      
            			                 			      </td>
             			
             		</tr>
             		<tr>
             			<td><b>Aadhar No :</b> </td>
             			<td><?php echo $details['aadhar_no']; ?>&nbsp;
             			 <?php if($details['verify_aadhar'] == 'Under Review') { ?>
             			  <span style = "color:dodgerblue;" class = "pull-right">Under Review</span>
            			      <?php   } ?>
           			          <?php if($details['verify_aadhar'] == 'Checked') { ?>
             			  <span style = "color:green;" class = "pull-right">Checked</span>
            			      <?php   } ?>
             			
             			</td>
             		</tr>
             		<tr>
             			<td><b>Account No :</b> </td>
						<td><?php echo $details['account_no']; ?>&nbsp;
           		        <?php if($details['verify_account'] == 'Under Review') { ?>
             			  <span style = "color:dodgerblue;" class = "pull-right">Under Review</span>
            			      <?php   } ?>
           			          <?php if($details['verify_account'] == 'Checked') { ?>
             			  <span style = "color:green;" class = "pull-right">Checked</span>
            			      <?php   } ?>
            		</td>
             		</tr>
             		
             		<tr>
             			<td><b>IFSC Code :</b> </td>
             			<td><?php echo $details['ifsc_code']; ?>&nbsp;
             			 <?php if($details['verify_ifsc'] == 'Under Review') { ?>
             			  <span style = "color:dodgerblue;" class = "pull-right">Under Review</span>
            			      <?php   } ?>
           			          <?php if($details['verify_ifsc'] == 'Checked') { ?>
             			  <span style = "color:green;" class = "pull-right">Checked</span>
            			      <?php   } ?>
             			
             			</td>
             		</tr>
             		
             	</table>
             </div>
		</div>
		</div>
	</div>
</div>
