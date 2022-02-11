<?php require '../headhtml.php'; ?>
<form method="POST" action="process_update.php" enctype="multipart/form-data">
	<?php
	if (empty($_GET['id'])) {
	 	header('location:index.php?erro=phải truyền mã để sửa');
	}
	$id = $_GET['id'];
	require '../menu.php';
	require '../connect.php';
	$sql = "select *from products where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

	$sql = "select *from manufacturers";
	$manufacturers = mysqli_query($connect,$sql);
	

	?>
	<div>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	</div>
	<div>
		<p>Tên</p>
		<input type="tex" name="name" value="<?php echo $each['name'] ?>">
	</div>
	<div>
		<p>Ảnh</p>
		<img src="photos/<?php echo $each['photo'] ?>" height="100">
		<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
	</div>
	<div>
		<input type="file" name="photo_new">
	</div>
	<div>
		<p>Giá</p>
		<input type="number" name="price" value="<?php echo $each['price'] ?>">
	</div>
	<div>
		<p>Mô tả</p>
		<textarea name="description"><?php echo $each['description'] ?></textarea>
	</div>
	<div>
		<p>Nhà sản xuất</p>
		<select name="manufacturer_id">
			<?php foreach ($manufacturers as $manufacturer): ?>
				<option 
				value="<?php echo $manufacturer['id'] ?>"
					<?php if ($each['manufacturer_id'] == $manufacturer['id']) { ?>
						selected
					<?php } ?>
					>
					<?php echo $manufacturer['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<button>Sửa</button>
	</div>
</form>
<?php require '../footerhtml.php'; ?>