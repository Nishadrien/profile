<?php



$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM leaders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>l_id</th><th>Names</th><th>College</th><th>Designation</th><th>Faculity</th><th>Telephone</th><th>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["l_id"]. "</td><td>" . $row["Names"]. "</td><td>" . $row["College"]. "</td><td>". $row["Designation"]."</td><td>". $row["Faculity"]."</td><td>". $row["Telephone"]. "</td><td>". $row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

 <br><br><a href=home.html>Log out</a>

