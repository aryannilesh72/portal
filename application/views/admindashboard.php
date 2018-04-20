<h2 class = "text-center">Welcome Admin !!</h2>
<div class = "container-fluid">
	<div class = "row">
		<div class = "col-md-3">
		<div class = "box" style = "border:1px solid whitesmoke;padding:18px;border-radius:0px;">
	<h1 class = "text-center"><?php $query = $this->db->query('SELECT * FROM department');
echo $query->num_rows(); ?></h1>
	<h3 class = "text-center">Departments</h3>
			<p class = "text-center" style = "background:whitesmoke;padding:08px;"><a href = "<?php echo site_url('AdminDashboard/department_list'); ?>">View All</a></p>
		</div>
		</div>
		<div class = "col-md-3">
		<div class = "box" style = "border:1px solid whitesmoke;padding:18px;border-radius:0px;">
	<h1 class = "text-center"><?php $query = $this->db->query('SELECT * FROM designation');
echo $query->num_rows(); ?></h1>
	<h3 class = "text-center">Designation</h3>
			<p class = "text-center" style = "background:whitesmoke;padding:08px;"><a href = "<?php echo site_url('AdminDashboard/designation_list'); ?>">View All</a></p>
		</div>
		</div>
		<div class = "col-md-3">
		<div class = "box" style = "border:1px solid whitesmoke;padding:18px;border-radius:0px;">
	<h1 class = "text-center"><?php $query = $this->db->query('SELECT * FROM location');
echo $query->num_rows(); ?></h1>
	<h3 class = "text-center">Locations</h3>
			<p class = "text-center" style = "background:whitesmoke;padding:08px;"><a href = "<?php echo site_url('AdminDashboard/location_list'); ?>">View All</a></p>
		</div>
		</div>
		<div class = "col-md-3">
		<div class = "box" style = "border:1px solid whitesmoke;padding:18px;border-radius:0px;">
	<h1 class = "text-center"><?php $query = $this->db->query('SELECT * FROM employees');
echo $query->num_rows(); ?></h1>
	<h3 class = "text-center">Employees</h3>
			<p class = "text-center" style = "background:whitesmoke;padding:08px;"><a href = "<?php echo site_url('AdminDashboard/employees_list'); ?>">View All</a></p>
		</div>
		</div>
		
	</div><br><br>
	<div class = "row">
		<div class = "col-md-2">
			<div class = "box" style = "border:1px solid whitesmoke;padding:18px;border-radius:0px;">
				<h4 class = "text-center" style = "color:tomato;">Todays Birthdays</h4>
				<?php
				$query = $this->db->query("select ci.*
from employees ci
where month(dob) = month(curdate()) and day(dob) = day(curdate());")->result_array();
				$count = 1;
				foreach($query as $row): ?>
				<p><?php echo $count; ?>&nbsp;<?php echo $row['username']; ?></p><hr>
				<?php 
				$count++;
				endforeach;
				?>
			</div>
		</div>
	</div>
</div>