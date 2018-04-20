<html lang="en">
  <head>
  <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<!--Datatable Plugin-->
	  <link href="<?php echo base_url('datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

	<link href="<?php echo base_url('font-awesome/css/font-awesome.css');?>" rel="stylesheet">

	<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

	<script src="<?php echo base_url('js/jquery.js');?>"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

	<script src="<?php echo base_url('js/basic.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
     <script src="<?php echo base_url('datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('datatables/js/dataTables.bootstrap.js')?>"></script>

	
	</head>
	  <style>
	  ul.nav.navbar-nav li a {
    color: white !important;
}
 .navbar-default{
			  background: #2a3f54 !important;
		  }
 .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #2a3f54;
  }
	ul.dropdown-menu {
    background: #2a3f54;
    }
		  ul.dropdown-menu li a:hover{
			  background: transparent;
		  }
	</style>
 <body>
     <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Dashboard</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
             <li><a href="<?php echo site_url('EmpDashboard/Profile/'.$user_id);?>">Profile </a></li>
              <li><a href="<?php echo site_url('EmpDashboard/manage_salary/'.$user_id);?>">Salary Slip </a></li>
               

    <li><a href="<?php echo site_url('');?>">Log Out</a></li>



            </ul>
            
             
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>