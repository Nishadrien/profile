<?php



$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM leaders";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>l_id</th><th>Names</th><th>College</th><th>Designation</th><th>Faculity</th><th>Telephone</th><th>email</th><th>Action</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["l_id"]. "</td><td>" . $row["Names"]. "</td><td>" . $row["College"]. "</td><td>". $row["Designation"]."</td><td>". $row["Faculity"]."</td><td>". $row["Telephone"]. "</td><td>". $row["email"]."</td></tr>";
		


    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
echo "<table border=1>";
echo " <tr><td><a href=home.php>Log out</a> </td></tr>";
echo "</table>";

 echo "<br><br>This is admin portal<br><br>";
echo "<table border=1>";
 echo "<tr><td><a href=add.html>Add Record</a></td>" ." "; 
	 echo "<td><a href=delete.html>Delete Record</a></td>";
echo "<td><a href=update.html>update Record</a></td></tr>";
echo "</table>";


?>