<?php 

if (empty($_POST['name'])||empty($_POST['address'])||empty($_POST['number_phone'])||empty($_POST['photo'])){
	header('location:form_insert.php?erro=Phải điền đầy đủ thông tin');
}


$name = $_POST['name'];
$address = $_POST['address'];
$number_phone = $_POST['number_phone'];
$photo = $_POST['photo'];

require '../connect.php';
$sql = "insert into manufacturers (name,address,number_phone,photo)
values('$name','$address','$number_phone','$photo')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?succes=Thêm thành công');