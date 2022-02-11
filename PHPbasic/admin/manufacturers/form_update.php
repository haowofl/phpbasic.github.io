<?php require '../headhtml.php'; ?>
<form method="POST" action="process_update.php">
	<?php
	if (empty($_GET['id'])) {
	 	header('location:index.php?erro=phải truyền mã để sửa');
	}
	$id = $_GET['id'];
	require '../menu.php';
	require '../connect.php';
	$sql = "select *from manufacturers
	where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	?>
	<div>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	</div>
	<div>
		<p>Tên</p>
		<input type="tex" name="name" value="<?php echo $each['name'] ?>">
	</div>
	<div>
		<p>Địa chỉ</p>
		<textarea name="address"><?php echo $each['address'] ?></textarea>
	</div>
	<div>
		<p>Số điện thoại</p>
		<input type="tex" name="number_phone" value="<?php echo $each['number_phone'] ?>">
	</div>
	<div>
		<p>Ảnh</p>
		<input type="tex" name="photo" value="<?php echo $each['photo'] ?>">
	</div>
	<div>
		<button>Sửa</button>
	</div>
</form>
<?php require '../footerhtml.php'; ?>