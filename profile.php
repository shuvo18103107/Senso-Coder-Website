<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
function confirm_delete() {
  return confirm('are you sure?');
}
</script>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


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


 	$Dusername = "null";
    $Demail = "null";

	


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
	} 

	$currentUser = $_SESSION['username'];
	$sql = "SELECT username, email FROM users WHERE username = ('$currentUser')";
	$result = $conn->query($sql);

	if (1) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        
	        $Dusername = $row["username"];
	        $Demail = $row["email"];
	       	
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();
?>

<div class="card">
  
  <h1><?php echo $Dusername ?></h1>
  <h2><?php echo $Demail ?></h2>
  <h2>Cources taken: 0</h2>
  <p><a href="get_update.php"> Change username </a>
  <p><a href="delete.php" onclick="return confirm_delete()"> Delete account </a></p>
  <p> <a href="index.php"> Go back </a></p>
</div>

</body>
</html>

