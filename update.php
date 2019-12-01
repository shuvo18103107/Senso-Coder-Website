<?php 

	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
	}

	$FFname = $_GET["name"];
	$currentUser = $_SESSION['username'];
	$sql = "UPDATE users SET username='$FFname' WHERE username='$currentUser'";
	if ($conn->query($sql) == TRUE) {
    	echo "Username changed successfully";
	} else {
	    echo "Error";
	}

	$conn->close();
?>
</br>
<a href="index.php?logout='1'"> Go back</a>