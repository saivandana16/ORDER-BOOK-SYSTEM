<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['stock_name'];
$txtEmail = $_POST['order_qty'];
$txtPhone = $_POST['order_type	'];
$txtMessage = $_POST['executed_qty'];
$txtEmail = $_POST['price'];
$txtPhone = $_POST['order_status'];
$txtMessage = $_POST['order_date'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`stock_name`, `order_qty`, `order_type`, `executed_qty`, `price`,'order_status','order_date') VALUES ('$stock_name', '$order_qty', '$order_type', '$executed_qty', '$price','$order_status',$order_date')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>