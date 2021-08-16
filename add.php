<?php

$names=$_POST['names'];
$College=$_POST['College'];
$Designation=$_POST['Designat'];
$Faculity=$_POST['facul'];
$Telephone=$_POST['tel'];
$email=$_POST['email'];

$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO leaders (Names,College,Designation,Faculity,Telephone,Email)
VALUES ('$names','$College','$Designation','$Faculity','$Telephone','$email')";

if (mysqli_query($conn, $sql)) {
	echo "Done Succesfully<br><br>";
  echo "<a href=viewadmin.php>View records</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>