<?php 
session_start();
if (empty($_SESSION['id'])) {
	header('location:signin.php?error=đăng nhập đi bạn');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	Đây là giao diện người dùng chào mừng
	<?php echo $_SESSION['name']; ?>

	<a href="signout.php">Đăng xuất sớm thế ở lại vs tôi thêm chút nữa</a>
</body>
</html>