<?php
// add database
include('dbconnect.php');
$title=$_POST['btitle'];
$price=$_POST['bprice'];

//create query

$query="INSERT INTO books(book_title , book_price) VALUES('$title' , '$price')";

if(mysqli_query($conn , $query))
{
	header("Location:index.php");
}
else
{
	echo "Error In Query";
}
mysqli_close($conn);
?>