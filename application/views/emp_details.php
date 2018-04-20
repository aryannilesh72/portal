
 
 <div class = "container">
 	<div class = "row">
 		<?php echo form_open(base_url() . 'index.php/AdminDashboard/insert_salary/' . $loc_id . '/' . $user_id . '/'); ?>
 		<div id = "attendance_update">
 			<table class = "table table-bordered">
 				<thead><tr>
 					<th>SR.NO</th>
 					<th>Name</th>
 					<th>Joining date</th>
 					<th>Generate Salary Slip</th>
 					
					</tr>
 				</thead>
 				<tbody>
 					<?php
                    $count = 1;
                 
                    $emp_list = $this->db->get_where('employees', array(
                                'location' => $loc_id,
                                'user_id' => $user_id,
                                
                            ))->result_array(); ?>
				

                  <?php  foreach ($emp_list as $row):
                        ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td>
                              <input type = "text" value ="<?php echo $row['user_id']; ?>" class = "hidden" name = "user_id">
                              <?php echo $row['username']; ?>
                               
                            </td>
                            <td>
                           <?php echo $row['doj']; ?>
                            </td>
                            <td>
                            	 <label>Start date</label>
                            <input type = "date" name = "start_date" class = "form-control">
                           <label>End date</label>
                            <input type = "date" name = "end_date" class = "form-control">
                           <label>Salary Type:</label> 
                            <select name = "sal_status" class = "form-control">
                            	<option value= "1">Automatic</option>
                            	<option value = "2">Manual</option>
                            </select>
                                                             <center>
            <button type="submit" class="btn btn-success" id="submit_button">
                <i class="entypo-thumbs-up"></i> Save Changes
            </button>
        </center>
                            
                           </td>
            
					</tr>
					 <?php
                  
                    endforeach; ?>
				</tbody></table>

		</div>
        <?php echo form_close(); ?>
 				
 		
 	</div>
 </div>
            
  

     
                                   
