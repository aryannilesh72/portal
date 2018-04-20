<div class = "container">
	<h3 class = "text-center"><b><?php echo $title; ?></b></h3><hr>
	<div class = "row">
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<form method = "post" action="<?php echo site_url('AdminDashboard/insert_holiday/');?>" enctype= "form-data">

				<div class="col-lg-4 input_field_sections form-group">
                                <h5>Holiday Reason : <span style="color: #cc0000">*</span></h5>
								<input type="text" class="form-control " name="holi_reason" value=""/>
             </div>
               <div class="col-lg-4 input_field_sections form-group">
                                <h5>Start Date: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control " name="start_date" value=""/>
             </div> 
                                    
                   <div class="col-lg-4 input_field_sections form-group">
                                <h5>End date: <span style="color: #cc0000">*</span></h5>
								<input type="date" class="form-control " name="end_date" value=""/>
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
