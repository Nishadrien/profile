<?php

$uname=$_POST['uname'];

$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	$stmt=$conn->prepare("select * from admin where RegNo=? ");
	$stmt->bind_param("s",$uname);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		
			echo "<center><h1>Hi</h1></center>";
		$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
 

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  
	  
    echo  "<center>".$row["Names"]."</center>" ;
	  
	 
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
			echo "<center><h1>Logged In successfully</h1></center>";
		
		echo "<center><a href=viewadmin.php>View profiles</a></center>";
		 
	
	}
		
	
	else{
		echo "<h1>Invalid Email or password<h2>";
	}
	
}




?>