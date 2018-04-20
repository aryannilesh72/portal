
 <?php echo form_open(base_url() . 'index.php/AdminDashboard/insert_attendance/'); ?>
<div class = "container">
          <div class = "panel panel-default" style = "padding:20px;"> 
           <div class="row">

           <div class="col-md-3">
        <div class="form-group">
            <h5>Select Department<span style="color: #cc0000">*</span></h5>
					<select required="" name="dept_id" class="form-control">
							<?php
						$department_list = $this->db->get('department')->result_array();
					foreach ($department_list  as $val): ?>
			<option value="<?php echo $val['dept_id']; ?>"
				<?php if($dept_id == $val['dept_id']) echo 'selected'; ?>>
				<?php echo $val['dept_name']; ?></option>
					<?php endforeach; ?>
				   </select>

        </div>
	</div>
              <div class="col-md-3">

           <div class="form-group">
            <h5>Select Location<span style="color: #cc0000">*</span></h5>
					<select required="" name="loc_id" class="form-control">
							<?php
						$location_list = $this->db->get('location')->result_array();
					foreach ($location_list  as $val): ?>
			<option value="<?php echo $val['loc_id']; ?>"
				<?php if($loc_id == $val['loc_id']) echo 'selected'; ?>>
				<?php echo $val['loc_name']; ?></option>
					<?php endforeach; ?>
				   </select>

        </div>
    </div>
     <div class="col-md-3" style = "padding-top:10px;">
        <div class="form-group">
            <label class="control-label" style="margin-bottom: 5px;">Date</label>
            <input type="date" class="form-control" name="attendance_date" data-format="dd-mm-yyyy"
                   value="<?php echo $attendance_date; ?>"/>
        </div>
    </div>

 <input type="hidden" name="year" value="<?php echo date("Y") ?>">

    <div class="col-md-3" style="margin-top: 20px;">
        <button type="submit" id = "submit" class="btn btn-primary">Add Attendance</button>
    </div>
<?php echo form_close(); ?>

	</div></div></div>
    
 <div class = "container">
 	<div class = "row">
 		<?php echo form_open(base_url() . 'index.php/AdminDashboard/attendance_update/' . $dept_id . '/' . $loc_id . '/' . $attendance_date); ?>
 		<div id = "attendance_update">
 			<table class = "table table-bordered">
 				<thead><tr>
 					<th>Emplyoee ID</th>
 					<th>Name</th>
 					<th>Status</th>
 					<th>Office In</th>
 					<th>Office Out</th>
 					<th>Reason</th>
					</tr>
 				</thead>
 				<tbody>
 					<?php
                    $count = 1;
                    $select_id = 0;
                    $attendance_of_students = $this->db->get_where('emp_attendance', array(
                                'dept_id' => $dept_id,
                                'loc_id' => $loc_id,
                                'year' => date("Y"),
						         'attendance_date' => $attendance_date,
                            ))->result_array();


                    foreach ($attendance_of_students as $row):
                        ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td>
                                <?php echo $this->db->get_where('employees', array('user_id' => $row['user_id']))->row()->username; ?>
                               
                            </td>
                            <td>
                            	 <select class="form-control" name="status_<?php echo $row['attId']; ?>" id="status_<?php echo $select_id; ?>">
                                    <option value="0" <?php if ($row['status'] == 0) echo 'selected'; ?>>Undefined</option>
                                    <option value="1" <?php if ($row['status'] == 1) echo 'selected'; ?>>Present</option>
                                    <option value="2" <?php if ($row['status'] == 2) echo 'selected'; ?>>Absent</option>
                                     <option value="3" <?php if ($row['status'] == 3) echo 'selected'; ?>>Half Day</option>
                                </select>
                           </td>
                          <td> 
                               <input type="time" name="office_in_<?php echo $row['attId']; ?>" class = "form-control" value = "<?php echo $row['office_in']; ?>">
                           </td>
                           <td>  <input type="time" name="office_out_<?php echo $row['attId']; ?>" value = "<?php echo $row['office_out']; ?>" class = "form-control">
                          
                           </td>
                           <td>
                           <input type = "text" class = "form-control" name = "reason_<?php echo $row['attId']; ?>" 
                           value = "<?php echo $row['reason']; ?>">
			              </td> 
					</tr>
					 <?php
                    $select_id++;
                    endforeach; ?>
				</tbody></table>
                <center>
            <button type="submit" class="btn btn-success" id="submit_button">
                <i class="entypo-thumbs-up"></i> Save Changes
            </button>
        </center>
        <?php echo form_close(); ?>
 				
 		</div>
 	</div>
 </div>
            
  

     
                                   
