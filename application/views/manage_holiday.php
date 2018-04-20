
<div class = "container">
<div class = "panel panel-default" style = "padding:15px;border-radius:0px;">
<h3 class = "text-center">Manage Holiday</h3>

<div class = "row">
	<div class = "col-md-12">
	<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
         <tr>
          <th>Sr. No</th>
		<th>Holiday Reason </th>
		<th>Start Date</th>
		<th>End Date</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
		  $holiday_list = $this->db->get('holiday')->result_array();
		   $i=1;
         foreach($holiday_list as $val) { ?>
          <tr>
          	<td><?php echo $i++; ?></td>
          	<td><?php echo $val['holi_reason']; ?></td>
          	<td><?php echo date(" M jS, Y", strtotime($val['start_date']) );?></td>
          	<td><?php echo date(" M jS, Y", strtotime($val['end_date']) );?></td>
			  <td><a href="<?php echo site_url('AdminDashboard/edit_holiday/'.$val['holi_id']);?>"><b>Edit</b></a>&nbsp;&nbsp;
				
			  </td>
          </tr>
        <?php
		 }
		  ?>
      </tbody>
      <tfoot>
        <tr>
         <th>Sr. No</th>
		 <th>FirstName</th>
		<th>Last Name</th>
		<th>Email</th>
        <th>Action</th>
        </tr>
      </tfoot>
    </table>
	</div>
</div>
	</div></div>

<script>
$(document).ready(function() {
    //datatables
    $('#table_id').DataTable();
	
});

</script>