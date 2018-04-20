<h3 class = "text-center"><?php echo $title; ?></h3>
<div class="container">
	<div class="row">
        <hr class="hr-primary" />
        <ol class="breadcrumb bread-primary ">
			<li><a href = "http://localhost/ngcn_infosolutions/index.php/AdminDashboard/">Dashboard</a></li>
            <li><a href="http://localhost/ngcn_infosolutions/index.php/AdminDashboard/employees_list">Employees list</a></li>
          
        </ol>
    </div>
</div>
<div class = "container">
<div class = "row">
	<div class = "col-md-12">
	<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
         <tr>
          <th>Sr. No</th>
		<th>UserName</th>
		<th>Account No</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
		   $i=1;
         foreach($employees_list as $key => $val) { ?>
          <tr>
          	<td><?php echo $i++; ?></td>
          	<td><?php echo $val['username']; ?></td>
          	<td><?php echo $val['account_no']; ?></td>
			  <td><a href="<?php echo site_url('profile/view_employee/'.$val['user_id']);?>"><b>View</b></a>&nbsp;&nbsp;
			  <a href="<?php echo site_url('AdminDashboard/edit_employee/'.$val['user_id']); ?>"><b>Edit</b></a>
				           <a href="javascript:remove_entry('AdminDashboard/remove_employee/<?php echo $val['user_id'];?>');"><b>Remove</b></a>

			  </td>
          </tr>
        <?php
		 }
		  ?>
      </tbody>
      <tfoot>
        <tr>
         <th>Sr. No</th>
		 <th>Username</th>
		<th>Account No</th>
        <th>Action</th>
        </tr>
      </tfoot>
    </table>
	</div>
</div>
</div>
<script>
$(document).ready(function() {
    //datatables
    $('#table_id').DataTable();
	
});

</script>