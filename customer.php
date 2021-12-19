<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['name_of_stock'];
$txtEmail = $_POST['order_type'];
$txtPhone = $_POST['Price'];
$txtMessage = $_POST['Quantity'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `name_of_stock`, `order_type`, `Price`, `Quantity`) VALUES ('0', '$name_of_stock', '$order_type', '$Price', '$Quantity')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>