<?php
$email=$_POST['email'];
$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	$sql = "DELETE FROM leaders WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
	
	 echo "";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>
<a href="viewadmin.php" >View Records</a>