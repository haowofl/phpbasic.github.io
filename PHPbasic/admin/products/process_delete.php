<?php 
if (empty($_GET['id'])) {
	header('location:index.php?erro=phải truyền mã để xóa');
	exit;
}

$id = $_GET['id'];
require '../connect.php';
$sql = "delete from products 
where id = '$id'";

mysqli_query($connect,$sql);
$erro = mysqli_error($connect);
mysqli_close($connect);

if (empty($erro)) {
	header('location:index.php?succes=Xóa thành công');
}else {
	header("location:index.php?id=$id&erro=Lỗi truy vấn");
}