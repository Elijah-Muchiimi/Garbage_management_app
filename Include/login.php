<?php 
include "db_conn.php";
//includes the database connection
if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
  //we get data from the signup form
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$status = 'Active';
//cchecks if the input are empty
	if (empty($uname)) {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}
	else{
		$sql = "SELECT * FROM employees WHERE empno='$uname' AND password='$pass' AND status='$status'";

		$query = $conn->prepare($sql);
		$query->execute(array($uname,$pass,$status));
		$fetch = $query->rowCount();
		
		if ($fetch === 1) {
			$row = $query->fetch();
            if ($row['empno'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['fname'];
            	$_SESSION['name'] = $row['empno'];
				$_SESSION['id'] = $row['id'];
            	$_SESSION['station'] = $row['workstation'];
				$_SESSION['account'] = $row['position'];
				
				if($_SESSION['account'] == "Admin"){
				header("Location: ../Admin/index.php");
		        exit();	
				}
				else if($_SESSION['account'] == "Employee"){
					header("Location: ../Employees/index.php");
					exit();
					}
				else{
					header("Location: ../Employees/index.php");
					exit();
				}
			}
			
		}
		else{
		$sql = "SELECT * FROM customer WHERE phone='$uname' AND password='$pass'";

		$query = $conn->prepare($sql);
		$query->execute(array($uname,$pass));
		$fetch = $query->rowCount();
		
		if ($fetch === 1) {
			$row = $query->fetch();
            if ($row['phone'] === $uname && $row['password'] === $pass) {
            	$_SESSION['account'] = 'Customer';
            	$_SESSION['name'] = $row['phone'];
				header("Location: ../customer/index.php");
		        exit();				
			}
			else{
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
				}
			}
		else{
			header("Location: ../index.php?error=Incorect User name or password");
			exit();
		}
		}
	}
}	
else{
	header("Location: ../index.php");
	exit();
}