<h3 class = "text-center"><?php echo $title; ?></h3>
<div class = "container">
<div class = "panel panel-default" style = "padding:20px;">

	<div class = "row">
		<form method="post" class="form-signin" action="<?php echo site_url('AdminDashboard/insert_attendance');?>" >
				<div class="col-lg-4 input_field_sections">
                     <h5>Select Department<span style="color: #cc0000">*</span></h5>
					<select required="" name="dept_id" class="form-control">
							<?php
					foreach ($department_list  as $key => $val)
						{ ?>
			<option value="<?php echo $val['dept_id']; ?>"><?php echo $val['dept_name']; ?></option>
					<?php } ?>
				   </select>

				</div>
				
				<div class="col-lg-4 input_field_sections">
              <h5>Select Location<span style="color: #cc0000">*</span></h5>
			<select required="" name="loc_id" class="form-control">
					<?php
					  foreach ($location_list  as $key => $val)
					{ ?>
					<option value="<?php echo $val['loc_id']; ?>"><?php echo $val['loc_name']; ?></option>
					<?php } ?>
			</select>
						</div>

              <div class="col-lg-4 input_field_sections" style = "padding-top:10px;">
		<div class="form-group">
		<label class="control-label">Date</label>
			<input type="date" class="form-control" name="attendance_date" data-format="dd-mm-yyyy"
				value="<?php echo date("d-m-Y");?>"/>
		</div>
	             </div>
	<input type="hidden" name="year" value="<?php echo date("Y");?>">
			</div>    
<br>
                <div class="row">
			<div class="col-lg-8 input_field_sections">
							<button type="submit" class="btn btn-primary">Add Attendance</button>
					       </div>
                </div>
	</form>
									
	</div>
</div></div>
