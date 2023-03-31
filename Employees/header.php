<?php
include "../include/db_conn.php";
if($_SESSION['id'] == "" or $_SESSION['account'] != "Employee"){
	header("Location: ../signup.php?error=You must login");
	exit();
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Nelson</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#change_account" data-toggle="modal" data-target="#change_account">Profile</a>
                </li>
                <li>
                    <a href="../Include/logout.php">Logout</a>
                </li>
	            </ul>
	          </li>
			  <li>
			  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Customers</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="bills.php">Record Bills</a>
                </li>
				<li>
                    <a href="view.php">View Bills</a>
                </li>
                <li>
                    <a href="payment.php">View Payments</a>
                </li>
              </ul>
			  </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Nyeri Municipal County <i class="icon-heart" aria-hidden="true"></i>  <a href="https://nyerimunicipal.co.ke" target="_blank">nyeri.ict@gmail.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#change_account" data-toggle="modal" data-target="#change_account">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Include/logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>