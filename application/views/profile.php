<?php $emp_details = $this->db->get_where('employees', array('user_id'=>$user_id))->result_array(); ?>


<div class = "container">
	<h3 class = "text-center"><b><?php echo $title; ?></b></h3><hr>
	<div class = "row">
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<?php foreach($emp_details as $row) : ?>
		<form method = "post" action="<?php echo site_url('EmpDashboard/update_profile/'.$user_id);?>" enctype= "multipart/form-data">

				<div class="col-lg-4 input_field_sections form-group">
                                <h5>Username : <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="username" value="<?php echo $row['username']; ?>"/>
             </div>
 
                      
                        <div class="col-lg-4 input_field_sections form-group">
                                <h5>First Name: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="first_name" value="<?php echo $row['first_name']; ?>"/>
             </div> 
                                     <div class="col-lg-4 input_field_sections form-group">
                                <h5>Last Name: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="last_name" value="<?php echo $row['last_name']; ?>"/>
             </div>      
                                     <div class="col-lg-4 input_field_sections form-group">
                                <h5>Email <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="e-mail" value="<?php echo $row['e-mail']; ?>"/>
             </div>  
                   <div class="col-lg-4 input_field_sections form-group">
                                <h5>Contact No: <span style="color: #cc0000">*</span></h5>
					<input type="text" class="form-control " name="contact_no" value="<?php echo $row['contact_no']; ?>"/>
             </div>  
             <div class="col-lg-4 input_field_sections form-group">
                                <h5>Permanent Address: <span style="color: #cc0000">*</span></h5>
               <textarea class="form-control" rows="5" id="per_address" name = "per_address"><?php echo $row['per_address']; ?></textarea>
             </div> 
             <div class="col-lg-4 input_field_sections form-group">
                                <h5>Current Address: <span style="color: #cc0000">*</span></h5>
               <textarea class="form-control" rows="5" id="curr_address" name = "curr_address"><?php echo $row['cur_address']; ?></textarea>
             </div>
             <div class="col-lg-4 input_field_sections form-group">
                                <h5>Gross Salary: <span style="color: #cc0000">*</span></h5>
             </textarea>
             </div>
       <!--    <div class="form-group">
    <label for="exampleInputFile">Upload Photo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name = "photo">
    
  </div>-->
             

			</div>                
                                    
                                <div class = "row">
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Location:<span style="color: #cc0000">*</span></h5>
                                      
									<select name="location" class="form-control">
									<option value = "<?php
									$this->db->where('loc_id', $row['location']);
									$query = $this->db->get('location')->row();	
									 echo $query->loc_id;
								       ?>"><?php echo $query->loc_name; ?></option>
										<?php
										foreach ($loc_list  as $key => $val)
										{ 
										if($val['loc_id']!= $query->loc_id){
										?>
										<option value="<?php echo $val['loc_id']; ?>"><?php echo $val['loc_name']; ?></option>
										<?php } }
												?>
										</select>
										</div>
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Department:<span style="color: #cc0000">*</span></h5>
									<select  name="department" class="form-control">
                                 <option value = "<?php
									$this->db->where('dept_id', $row['department']);
									$query = $this->db->get('department')->row();	
									 echo $query->dept_id;
								       ?>"><?php echo $query->dept_name; ?></option>
										<?php
										foreach ($dept_list  as $key => $val)
										{ 
									if($val['dept_id']!= $query->dept_id){

										?>
										<option value="<?php echo $val['dept_id']; ?>"><?php echo $val['dept_name']; ?></option>
										<?php }
										}	?>
										</select>
										</div>
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Designation:<span style="color: #cc0000">*</span></h5>
									<select  name="designation" class="form-control designation">
								 <option value = "<?php
									$this->db->where('desig_id', $row['designation']);
									$query = $this->db->get('designation')->row();	
									 echo $query->desig_id;
								       ?>"><?php echo $query->desig_name; ?></option>	
										<?php
										foreach ($desig_list  as $key => $val)
										{ 
										if($val['desig_id']!= $query->desig_id){

										?>
										<option value="<?php echo $val['desig_id']; ?>"><?php echo $val['desig_name']; ?></option>
										<?php } }
												?>
										</select>
										</div>
                                     
                                      <div class="col-lg-4 input_field_sections form-group">
                                <h5>Date of Joining: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control datepicker " name="doj" value="<?php echo $row['doj']; ?>"/>
                          </div>
                              <div class="col-lg-4 input_field_sections form-group">
                                <h5>Date of Birth: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control datepicker " name="dob" value="<?php echo $row['dob']; ?>"/>
                          </div>

                          
                          
			</div>
                         <div class = "row">
                         <div class="col-lg-3 input_field_sections form-group">
                                <h5>Pan No: <span style="color: #cc0000">*</span></h5>
								<input disabled type="text" class="form-control  " name="pan_no" value="<?php echo $row['pan_no']; ?>"/>
                          </div>
                          <div class="col-lg-3 input_field_sections form-group">
                                <h5>Verify Pan No: <span style="color: #cc0000">*</span></h5>
								<select disabled name="verify_pan" class="form-control designation">
								 <option value = "<?php echo $row['verify_pan']; ?>"><?php echo $row['verify_pan']; ?></option>
								 	<?php if($row['verify_pan'] == 'Under Review') {?>
								 	<option value = "Checked">Checked</option>

								 	<?php } ?>
								 <?php if($row['verify_pan'] == 'Checked') {?>
								 	<option value = "Under Review">Under Review</option>

								 	<?php } ?>
								 	
							
										</select>
                          </div>
                              <div class="col-lg-3 input_field_sections form-group">
                                <h5>Aadhar No: <span style="color: #cc0000">*</span></h5>
								<input disabled type="text" class="form-control " name="aadhar_no" value="<?php echo $row['aadhar_no']; ?>"/>
                          </div>
                             <div class="col-lg-3 input_field_sections form-group">
                                <h5>Verify Aadhar No: <span style="color: #cc0000">*</span></h5>
								<select disabled name="verify_aadhar" class="form-control designation">
								 <option value = "<?php echo $row['verify_aadhar']; ?>"><?php echo $row['verify_aadhar']; ?></option>
								 	<?php if($row['verify_aadhar'] == 'Under Review') {?>
								 	<option value = "Checked">Checked</option>

								 	<?php } ?>
								 <?php if($row['verify_aadhar'] == 'Checked') {?>
								 	<option value = "Under Review">Under Review</option>

								 	<?php } ?>
								 	
							
										</select>
                          </div>
                              <div class="col-lg-3 input_field_sections form-group">
                                <h5>Account No: <span style="color: #cc0000">*</span></h5>
								<input disabled type="text" class="form-control " name="account_no" value="<?php echo $row['account_no']; ?>"/>
                          </div>
                             <div class="col-lg-3 input_field_sections form-group">
                                <h5>Verify Account No: <span style="color: #cc0000">*</span></h5>
								<select disabled name="verify_account" class="form-control designation">
								 <option value = "<?php echo $row['verify_account']; ?>"><?php echo $row['verify_account']; ?></option>
								 	<?php if($row['verify_account'] == 'Under Review') {?>
								 	<option value = "Checked">Checked</option>

								 	<?php } ?>
								 <?php if($row['verify_account'] == 'Checked') {?>
								 	<option value = "Under Review">Under Review</option>

								 	<?php } ?>
								 	
							
										</select>
                          </div>
                              <div class="col-lg-3 input_field_sections form-group">
                                <h5>IFSC Code: <span style="color: #cc0000">*</span></h5>
								<input disabled type="text" class="form-control " name="ifsc_code" value="<?php echo $row['ifsc_code']; ?>"/>
                          </div>
                          <div class="col-lg-3 input_field_sections form-group">
                                <h5>Verify IFSC Code: <span style="color: #cc0000">*</span></h5>
								<select  disabled name="verify_ifsc" class="form-control designation">
								 <option value = "<?php echo $row['verify_ifsc']; ?>"><?php echo $row['verify_ifsc']; ?></option>
								 	<?php if($row['verify_ifsc'] == 'Under Review') {?>
								 	<option value = "Checked">Checked</option>

								 	<?php } ?>
								 <?php if($row['verify_ifsc'] == 'Checked') {?>
								 	<option value = "Under Review">Under Review</option>

								 	<?php } ?>
								 	
							
										</select>
                          </div>
                         </div>
                          <div class="row">
										<div class="col-lg-8 input_field_sections">
											<button type="submit" class="btn btn-primary">Save</button>
									    </div>
						            </div>
		
		</form>
		
		<?php endforeach; ?>
	</div>
	
	
</div>
<script>


</script>