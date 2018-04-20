<div class = "container">
 <ol class="breadcrumb bread-primary ">
	<li><a href = "http://localhost/ngcn_infosolutions/index.php/AdminDashboard/">Dashboard</a></li>
    <li><a href="http://localhost/ngcn_infosolutions/index.php/AdminDashboard/location_list">Location list</a></li>
          
        </ol>
	<h2 class = "text-center"><?php echo $title; ?></h2>
	<div class = "row">
	 			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		<div id = "message"></div>
		 <form method="post" action="<?php echo site_url('AdminDashboard/insert_location/');?>">
	       <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
         <tr>
          <th>Sr. No</th>
		<th>Department Name</th>
		<th>Action</th>

        </tr>
      </thead>
      <tbody>
         <?php 
		   $i=1;
         foreach($loc_list as $key => $val) { ?>
          <tr>
          	<td><?php echo $i++; ?></td>
          	<td><input type="text"   class="form-control"  value="<?php echo $val['loc_name'];?>" onBlur="updateloc(this.value,'<?php echo $val['loc_id'];?>');" ></td>
          	<td><a href="javascript:remove_entry('AdminDashboard/remove_location/<?php echo $val['loc_id'];?>');"><i class="fa fa-trash-o" style = "font-size:28px;color:tomato;"></i></a></td>
          
          	
          </tr>
        <?php
		 }
		  ?>
     <tr>
  <td><?php echo $i++; ?></td>
 <td>
 <input type="text" class="form-control"  name="loc_name" value="" placeholder="Location Name" required></td>
<td>
<button class="btn btn-primary" type="submit">Add New</button>
</td>
</tr>
      </tbody>
      <tfoot>
        <tr>
        <th>Sr. No</th>
		<th>Department Name</th>
		<th>Action</th>

        </tr>
      </tfoot>
    </table>
	       
		</form>
	</div></div>
	<script>
$(document).ready(function() {
    //datatables
    $('#table_id').DataTable();
	
});

</script>