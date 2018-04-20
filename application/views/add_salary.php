 <?php echo form_open(base_url() . 'index.php/AdminDashboard/get_emp_details/'); ?>
 <div class = "container">
 <h4 class = "text-center">Add Salary Slip</h4>
 	<div class = "panel panel-default" style = "padding:20px;">
 
<div class="row">

              <div class="col-md-3">
           <div class="form-group">
            <h5>Select Location<span style="color: #cc0000">*</span></h5>
					<select required="" name="loc_id" class="form-control" id = "loc_id" onchange="return get_emp(this.value)">
						<option value = "">Select Location</option>
							<?php
						$location_list = $this->db->get('location')->result_array();
					foreach ($location_list  as $val): ?>
			<option value="<?php echo $val['loc_id']; ?>">
				<?php echo $val['loc_name']; ?></option>
					<?php endforeach; ?>
				   </select>

        </div>
    </div>
    
      
     <div class="col-md-3">
           <div class="form-group">
            <h5>Select Emplyoee<span style="color: #cc0000">*</span></h5>
					<select required="" name="user_id" class="form-control"  id="section_selector_holder">
				<option value="">Select Emp</option>

				   </select>

        </div>
    </div>
    
     <div class="row">
			<div class="col-lg-8 input_field_sections">
							<button type="submit" class="btn btn-primary">Add Salary</button>
					       </div>
                </div>
		</div></div></div>
    
   <?php form_close(); ?>
 <script>
function get_emp(loc_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php/AdminDashboard/get_loc_emp/' + loc_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>