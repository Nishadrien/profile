<?php
$conn= new MySQLi('localhost','root','','profiles');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());}

?>