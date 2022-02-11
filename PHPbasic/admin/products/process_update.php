<?php 
if (empty($_POST['id'])) {
	header('location:index.php?erro=phải truyền mã để sửa');
	exit;
}

$id = $_POST['id'];
$name = $_POST['name'];
$photo_new = $_FILES['photo_new'];
if ($photo_new['size'] > 0) {
	$folder = 'photos/';
	$file_extenstion = explode('.', $photo_new['name'])[1];
	$file_name = time() . '.' . $file_extenstion;
	$path_file = $folder . $file_name;
	move_uploaded_file($photo_new["tmp_name"], $path_file);
}else{
	$file_name = $_POST['photo_old'];
}
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];


require '../connect.php';
$sql = "update products set
name = '$name',
photo= '$file_name',
price= '$price',
description= '$description',
manufacturer_id = '$manufacturer_id'
where id = '$id'";

mysqli_query($connect,$sql);
$erro = mysqli_error($connect);
mysqli_close($connect);

if (empty($erro)) {
	header('location:index.php?succes=Sửa thành công');
}else {
	header("location:form_update.php?id=$id&erro=Lỗi truy vấn");
}