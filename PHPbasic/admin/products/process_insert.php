<?php 

if (empty($_POST['name'])||empty($_FILES['photo'])||empty($_POST['price'])||empty($_POST['description'])){
	header('location:form_insert.php?erro=Phải điền đầy đủ thông tin');
}


$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];

$folder = 'photos/';
$file_extenstion = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extenstion;
$path_file = $folder . $file_name;



move_uploaded_file($photo["tmp_name"], $path_file);

require '../connect.php';
$sql = "insert into products (name,photo,price,description,manufacturer_id)
values('$name' , '$file_name' , '$price' , '$description' , '$manufacturer_id')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?succes=Thêm thành công');

