<hr />

<?php echo form_open(base_url() . 'index.php/AdminDashboard/attendance_report_selector/'); ?>
<div class = "container">
<div class = "panel panel-default" style = "padding:20px;border-radius:0px;">
<div class="row">

    <?php
    $dept_list = $this->db->get('department');
    if ($dept_list->num_rows() > 0):
        $dept = $dept_list->result_array();

        ?>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label" style="margin-bottom: 5px;">Department</label>
                <select class="form-control selectboxit" name="dept_id" onchange="select_section(this.value)">
                    <option value="">Select</option>
                    <?php foreach ($dept as $row): ?>
                    <option value="<?php echo $row['dept_id']; ?>" ><?php echo $row['dept_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    <?php endif; ?>
     <?php
    $loc_list = $this->db->get('location');
    if ($loc_list->num_rows() > 0):
        $loc = $loc_list->result_array();

        ?>

        <div class="col-md-3">
            <div class="form-group">
                <label class="control-label" style="margin-bottom: 5px;">Location</label>
                <select class="form-control selectboxit" name="loc_id">
                    <option value="">Select</option>
                    <?php foreach ($loc as $row): ?>
                    <option value="<?php echo $row['loc_id']; ?>" ><?php echo $row['loc_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    <?php endif; ?>

    <div class="col-md-2">
         <div class="form-group">
            <label class="control-label" style="margin-bottom: 5px;">Month
            <select name="month" class="form-control selectboxit">
                <?php
                for ($i = 1; $i <= 12; $i++):
                    if ($i == 1)
                        $m = 'january';
                    else if ($i == 2)
                        $m = 'february';
                    else if ($i == 3)
                        $m = 'march';
                    else if ($i == 4)
                        $m = 'april';
                    else if ($i == 5)
                        $m = 'may';
                    else if ($i == 6)
                        $m = 'june';
                    else if ($i == 7)
                        $m = 'july';
                    else if ($i == 8)
                        $m = 'august';
                    else if ($i == 9)
                        $m = 'september';
                    else if ($i == 10)
                        $m = 'october';
                    else if ($i == 11)
                        $m = 'november';
                    else if ($i == 12)
                        $m = 'december';
                    ?>
                    <option value="<?php echo $i; ?>"
                          <?php if($month == $i) echo 'selected'; ?>  >
                                <?php echo ($m); ?>
                    </option>
                    <?php
                endfor;
                ?>
            </select>
         </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label class="control-label" style="margin-bottom: 5px;">Sessional Year</label>
            <select class="form-control selectboxit" name="sessional_year">
                <?php
				$running_year = date("Y"); ?>
                <option value="<?php echo $running_year; ?>"> <?php echo $running_year; ?> </option>
                <option value="<?php echo $running_year-1; ?>"> <?php echo $running_year-1; ?></option>
            </select>
        </div>
    </div>

    <input type="hidden" name="operation" value="selection">
    <input type="hidden" name="year" value="<?php echo date("Y");?>">

	<div class="col-md-2" style="margin-top: 20px;">
		<button type="submit" class="btn btn-info">Show Report</button>
	</div>
	</div></div>
	</div>
<?php echo form_close(); ?>

<?php if ($dept_id != '' && $loc_id != '' && $month != '' && $sessional_year != ''): ?>

    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: center;">
            <div class="tile-stats tile-gray">
                <div class="icon"><i class="entypo-docs"></i></div>
                <h3 style="color: #696969;">
                    <?php
                    $dept_name = $this->db->get_where('department', array('dept_id' => $dept_id))->row()->dept_name;
                    $loc_name = $this->db->get_where('location', array('loc_id' => $loc_id))->row()->loc_name;
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
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $sessional_year);

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
<?php endif; ?>