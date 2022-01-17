<?php
	include('conn.php');
	$image=$_POST['image'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	
	mysqli_query($conn,"insert into user (image, firstname, lastname, phone, address) values ('$image', '$firstname', '$lastname', '$phone', '$address')");
	header('location:index.php');

?>