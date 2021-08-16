<?php

$uname=$_POST['uname'];
$pin=$_POST['pin'];

$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	$stmt=$conn->prepare("select * from users where RegNo=? ");
	$stmt->bind_param("s",$uname);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		
		$sql = "SELECT * FROM users where RegNo='$uname' and pin='$pin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<center> <h1>Welcome</h1>";
	  
	  
    echo $row["Names"]."</center><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
		
	
		
		
			
			echo "<center><h1>Logged In successfully</h1></center>";
		
		echo "<center><a href=view.php>View profiles</a></center>";
		 
	
	}
		
	
	else{
		echo "<h1>Invalid Email or password<h2>";
	}
	
}




?>