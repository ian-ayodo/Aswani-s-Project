<?php
include_once 'db_conn.php';
if(isset($_POST['submit']))
{    
     $menu = $_POST['menu'];
     $item = $_POST['item_name'];
     $quantity = $_POST['quantity'];
     $sql = "INSERT INTO orders (menu,item_name,quantity)
     VALUES ('$menu','$item','$quantity')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>