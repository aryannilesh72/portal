<h3 class = "text-center"><?php echo $title; ?></h3>

<div class = "container">
<form method="post" action="<?php echo site_url(); ?>/excel_export/action">
					<input type="submit" name="export" class="btn btn-success" value="Export" />
				</form>
<div class = "row">
			<?php
	$this->db->from('salary_emp_slip');
$this->db->order_by("sal_id", "desc");
                    $sal = $this->db->get()->result_array();
?>
	<div class = "col-md-12">
	<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
         <tr>
          <th>Sr. No</th>
		<th>Emp Name</th>
		<th>Gross Earnings</th>
		
        <th>Action</th>
        </tr>
      </thead>
      <tbody>
         <?php 
		   $i=1;
         foreach($sal as $val) { ?>
          <tr>
          	<td><?php echo $i++; ?></td>
          	<td><?php
				$query = $this->db->get_where('employees', array('user_id'=>$val['emp_id']))->result_array(); 
								foreach ($query as $row):
								echo $row['username']; 
								endforeach;
				?></td>
          	<td><?php echo $val['earnings']; ?></td>
			  <td><a href = "<?php echo base_url(); ?>index.php/AdminDashboard/view_sal_slip/<?php echo $val['emp_id']; ?>/<?php echo $val['sal_id']; ?>" >View</a></td>
        
          </tr>
        <?php
		 }
		  ?>
      </tbody>
      <tfoot>
        <tr>
         <th>Sr. No</th>
		 <th>Emp Name</th>
		<th>Earnings</th>
		
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