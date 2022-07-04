<?php
$host='localhost';
$user='root';
$pass='';
$database='datamining';

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn, $database);

?>