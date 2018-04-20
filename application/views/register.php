<div class = "container">
	<h4><button class = "btn btn-primary"><a href = "<?php echo site_url('login');?>" style = "color:white !important">Login</a></button></h4>
	<h3 class = "text-center"><b><?php echo $title; ?></b></h3><hr>
	<div class = "row">
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<form method = "post" action="<?php echo site_url('login/insert_employee/');?>" enctype= "multipart/form-data">

				<div class="col-lg-4 input_field_sections form-group">
                                <h5>Username : <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="username" value="<?php echo set_value('username'); ?>"/>
             </div>
                                      <div class="col-lg-4 input_field_sections form-group">
                                <h5>Password: <span style="color: #cc0000">*</span></h5>
								<input type="password" class="form-control " name="password" value=""/>
             </div> 
                                    
                   <div class="col-lg-4 input_field_sections form-group">
                                <h5>Confirm Password: <span style="color: #cc0000">*</span></h5>
								<input type="password" class="form-control " name="confirm_password" value=""/>
             </div>
                      
                        <div class="col-lg-4 input_field_sections form-group">
                                <h5>First Name: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="first_name" value=""/>
             </div> 
                                     <div class="col-lg-4 input_field_sections form-group">
                                <h5>Last Name: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="last_name" value=""/>
             </div>      
                                     <div class="col-lg-4 input_field_sections form-group">
                                <h5>Email <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="e-mail" value=""/>
             </div>  
                   <div class="col-lg-4 input_field_sections form-group">
                                <h5>Contact No: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="contact_no" value=""/>
             </div>
              <div class="col-lg-4 input_field_sections form-group">
                                <h5>Date of Birth: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control " name="dob" value=""/>
             </div>  
             <div class="col-lg-4 input_field_sections form-group">
                                <h5>Permanent Address: <span style="color: #cc0000">*</span></h5>
               <textarea class="form-control" rows="5" id="per_address" name = "per_address"></textarea>
             </div> 
             <div class="col-lg-4 input_field_sections form-group">
                                <h5>Current Address: <span style="color: #cc0000">*</span></h5>
               <textarea class="form-control" rows="5" id="curr_address" name = "curr_address"></textarea>
             </div>

			</div>                
                                    
                                <div class = "row">
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Location:<span style="color: #cc0000">*</span></h5>
                                      
									<select name="location" class="form-control">
									<option value = "">Select Location</option>
										<?php
										foreach ($loc_list  as $key => $val)
										{ ?>
										<option value="<?php echo $val['loc_id']; ?>"><?php echo $val['loc_name']; ?></option>
										<?php }
												?>
										</select>
										</div>
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Department:<span style="color: #cc0000">*</span></h5>
									<select  name="department" class="form-control">
											<option value = "">Select</option>

										<?php
										foreach ($dept_list  as $key => $val)
										{ ?>
										<option value="<?php echo $val['dept_id']; ?>"><?php echo $val['dept_name']; ?></option>
										<?php }
												?>
										</select>
										</div>
                                     <div class="col-lg-4 input_field_sections">
                                      <h5>Select Designation:<span style="color: #cc0000">*</span></h5>
									<select  name="designation" class="form-control designation">
																		<option value = "">Select</option>
										<?php
										foreach ($desig_list  as $key => $val)
										{ ?>
										<option value="<?php echo $val['desig_id']; ?>"><?php echo $val['desig_name']; ?></option>
										<?php }
												?>
										</select>
										</div>
                                     
                                      <div class="col-lg-4 input_field_sections form-group">
                                <h5>Date of Joining: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control datepicker " name="doj" value=""/>
                          </div>
                              <div class="col-lg-4 input_field_sections form-group">
                                <h5>Pan No: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="pan_no" value=""/>
                          </div>
                              <div class="col-lg-4 input_field_sections form-group">
                                <h5>Aadhar No: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="aadhar_no" value=""/>
                          </div>
                              <div class="col-lg-4 input_field_sections form-group">
                                <h5>Account No: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="account_no" value=""/>
                          </div>
                              <div class="col-lg-4 input_field_sections form-group">
                                <h5>IFSC Code: <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="ifsc_code" value=""/>
                          </div>
                          
                          
			</div>
                          <div class="row">
										<div class="col-lg-8 input_field_sections">
											<button type="submit" class="btn btn-primary">Save</button>
									    </div>
						            </div>
		
		</form>
	</div>
	
	
</div>
<script>


</script>