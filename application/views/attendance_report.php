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
	</div></div></div></div>

<?php echo form_close(); ?>


