<?php  
session_start();
include "../database/db_conn.php";
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);
	if (empty($username)) {
header("Location: ../auth-login.php?error=Username is Required");
	}else if (empty($password)) {
header("Location: ../auth-login.php?error=Password is Required");
	}else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['user_id'] = $row['user_id'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];
        		
        		header("Location: ../views/index.php");

        	}else {
        		header("Location: ../auth-login.php?error=Incorect Username or Password");
        	}
        }else {
        	header("Location: ../auth-login.php?error=Incorect Username or Password");
        }

	}
	
}else {
	header("Location: ../auth-login.php");
}
	
