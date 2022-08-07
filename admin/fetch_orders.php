<?php
include 'db_conn.php';
$query="select * from orders"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
?>