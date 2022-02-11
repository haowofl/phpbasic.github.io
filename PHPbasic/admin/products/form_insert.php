<?php require '../headhtml.php'; ?>
	<?php 
	require '../menu.php';
	require '../connect.php';
	$sql = "select *from manufacturers ";
 	$result = mysqli_query($connect,$sql);
	 ?>
	<form method="POST" action="process_insert.php" enctype="multipart/form-data">
	<div>
		<p>Tên</p>
		<input type="tex" name="name">
	</div>
	<div>
		<p>Ảnh</p>
		<input type="file" name="photo">
	</div>
	<div>
		<p>Giá</p>
		<input type="number" name="price">
	</div>
	<div>
		<p>Mô tả</p>
		<textarea name="description"></textarea>
	</div>
	<div>
		<p>Nhà sản xuất</p>
		<select name="manufacturer_id">
			<?php foreach ($result as $each): ?>
				<option value="<?php echo $each['id'] ?>">
					<?php echo $each['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>
	<div>
		<button>Thêm</button>
	</div>
</form>
<?php require '../footerhtml.php'; ?>