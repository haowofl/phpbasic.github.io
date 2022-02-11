<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require 'admin/connect.php';
$sql = "select count(*) from customers where email='$email'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
	header('location:signup.php?erro=Trùng email rồi. Bạn chắc chứ, are you sủe?');
	exit;
}

$sql = "insert into customers(name,email,password)
values('$name','$email','$password')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:signin.php');