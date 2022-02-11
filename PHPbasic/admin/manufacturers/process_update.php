<?php 
if (empty($_POST['id'])) {
	header('location:index.php?erro=phải truyền mã để sửa');
	exit;
}

$id = $_POST['id'];
if (empty($_POST['name'])||empty($_POST['address'])||empty($_POST['number_phone'])||empty($_POST['photo'])){
	header("location:form_update.php?id=$id&erro=Phải điền đầy đủ thông tin");
	exit;
}


$name = $_POST['name'];
$address = $_POST['address'];
$number_phone = $_POST['number_phone'];
$photo = $_POST['photo'];

require '../connect.php';
$sql = "update manufacturers set
name = '$name',
address= '$address',
number_phone= '$number_phone',
photo= '$photo'
where id = '$id'";

mysqli_query($connect,$sql);
$erro = mysqli_error($connect);
mysqli_close($connect);

if (empty($erro)) {
	header('location:index.php?succes=Sửa thành công');
}else {
	header("location:form_update.php?id=$id&erro=Lỗi truy vấn");
}