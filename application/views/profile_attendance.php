
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: center;">
            <div class="tile-stats tile-gray">
                <div class="icon"><i class="entypo-docs"></i></div>
                <h3 style="color: #696969;">
                    <?php
                    
                    if ($month == 1)
                        $m = 'January';
                    else if ($month == 2)
                        $m = 'February';
                    else if ($month == 3)
                        $m = 'March';
                    else if ($month == 4)
                        $m = 'April';
                    else if ($month == 5)
                        $m = 'May';
                    else if ($month == 6)
                        $m = 'June';
                    else if ($month == 7)
                        $m = 'July';
                    else if ($month == 8)
                        $m = 'August';
                    else if ($month == 9)
                        $m = 'Sepetember';
                    else if ($month == 10)
                        $m = 'October';
                    else if ($month == 11)
                        $m = 'November';
                    else if ($month == 12)
                        $m = 'December';
                    echo 'Attendance Sheet';
                    ?>
                </h3>
                <h4 style="color: #696969;">
  <br>
    <?php echo $m . ', ' . $sessional_year; ?>
                </h4>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>


    <hr />

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered" id="my_table">
                <thead>
                    <tr>
                        <td style="text-align: center;">
    <?php echo 'Employees'; ?> <i class="entypo-down-thin"></i> | <?php echo 'Date' ?> <i class="entypo-right-thin"></i>
                        </td>
    <?php
    $year = explode('-', $running_year);
    $days = cal_days_in_month(CAL_GREGORIAN, intval($month), $sessional_year);

    for ($i = 1; $i <= $days; $i++) {
        ?>
                            <td style="text-align: center;"><?php echo $i; ?></td>
                    <?php } ?>

                    </tr>
                    
                    
                </thead>

                <tbody>
                            <?php
                            $data = array();
                            $employees = $this->db->get_where('employees', array('department' => $dept_id,  'location' => $loc_id))->result_array();
                foreach ($employees as $row): ?>
                        <tr>
                            <td style="text-align: center;">
                            <?php echo $this->db->get_where('employees', array('user_id' => $row['user_id']))->row()->username; ?>
                            </td>
                            
                            <?php 
							  $status = 0;
				for($i=1; $i<=$days; $i++){
			$timestamp = $sessional_year.'-'.$month.'-'.$i;
		    $attendance = $this->db->get_where('emp_attendance', array('dept_id' => $dept_id, 'loc_id' => $loc_id, 'year' => $sessional_year, 'attendance_date' => $sessional_year.'-'.$month.'-'.$i, 'user_id' => $row['user_id']))->result_array();
											
			?>
								
								<td>
								
<?php 
					?>
								<?php 
					
								foreach ($attendance as $row):
					               
								
								   if($i = date("d", strtotime($timestamp))); 
									$status = $row['status'];
								     if($status == 1)
									{
										
										
									?>
									<p><span style = "color:green;"><b>P </b></span></p>
							      <?php } if($status == 2) {?>

									<p><span style = "color:red;"><b>A</b></span></p>
							      <?php } if($status == 3) { ?>
							      <p><span style = "color:blue;"><b>H</b></span></p>
							      <?php } ?>
								<?php endforeach;?>
									
									
									</td>
									
								
							<?php } ?>
                         </tr>
                        
                  <?php endforeach; ?>
                
                </tbody>
            </table>
         
        </div>
    </div>
