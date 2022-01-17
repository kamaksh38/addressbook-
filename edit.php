<?php
	include('conn.php');
	
	$id=$_GET['id'];
	$image=$_POST['image'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	
	mysqli_query($conn,"update user set image='$image', firstname='$firstname', lastname='$lastname', phone='$phone', address='$address' where userid='$id'");
	header('location:index.php');

?>