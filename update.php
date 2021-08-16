<?php
include('db_connection.php');

$email=$_POST['email'];
$stmt=$conn->prepare("select * from leader where email=? ");
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$row=$stmt_result->fetch_assoc();
		
		 echo "<table border=1 ><tr><td width=2% > " . "<b>Leader id</B>". " </td><td width=4% > " . "<b>Names</B>". " </td><td width=4% >" . "<b>College</B>". "</td><td width=3%> "."<b>Designation</b>"."</td><td width=2%> "."<b>Faculity</b>"."</td><td width=3%> "."<b>Telephone</b>"."</td><td width=3%> "."<b>email</b>"."</td></tr></table>";
	  
   echo "<table border=1 ><tr><td width=2% > " . $row["l_id"]. " </td><td width=4%> " . $row["Names"]. " </td><td width=4%>" . $row["College"]. "</td><td width=3%> " . $row["Designation"]. "</td><td width=2%> " . $row["Faculity"]. "</td><td width=3%>" . $row["Telephone"]. "</td><td width=3%>" . $row["email"]. "</td></tr></table>";
	  
		
	
		 
$conn->close();
		
	
	
		 
	
	}
		
	
	else{
		echo "<h1>Invalid Email or password<h2>";
	}





	

?>




<html>
	<head>
	<title>
		
		</title>
	</head>
	
	<body>
	<form action="add1.php" method="post">
	Names:<input type="text" name="names" required>
	College:<input type="text" name="College" required>
		Desgination:<input type="text" name="Designat" required>
		Faculity:<input type="text" name="facul" required>
		Telephone:<input type="number" name="tel" required>
		Email:<input type="email" name="email" required>
		<input type="submit" name="submit" value="Update">
	
		
		</form>
	
	
	</body>



</html>

<?php
 if(isset($_POST['submit'])){
	 $sqld = "DELETE FROM leader WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
	
	 echo "";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
 }
?>
