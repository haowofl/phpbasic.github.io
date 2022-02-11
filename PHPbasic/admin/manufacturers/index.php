<?php require '../headhtml.php'; ?>
	<h1>Đây là khu vực quản lý nhà sản xuất</h1>
	<br>
	<a href="form_insert.php">Thêm</a>
	<?php require '../menu.php'; ?>

	<?php 
	require '../connect.php';
	$sql = "select *from manufacturers ";
	$result = mysqli_query($connect,$sql);
	 ?>
	 <table border="1" width="100%">
	 	<tr>
	 		<th>Mã</th>
	 		<th>Tên</th>
	 		<th>Địa Chỉ</th>
	 		<th>Số điện thoại</th>
	 		<th>Ảnh</th>
	 		<th>Sửa</th>
	 		<th>Xóa</th>
	 	</tr>
	 	<?php foreach ($result as $each): ?>
	 		<tr>
	 			<td><?php echo $each['id'] ?></td>
	 			<td><?php echo $each['name'] ?></td>
	 			<td><?php echo $each['address'] ?></td>
	 			<td><?php echo $each['number_phone'] ?></td>
	 			<td>
	 				<img src="<?php echo $each['photo'] ?>" height="400px" width="80%">
	 			</td>
	 			<td>
	 				<a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa</a>
	 			</td>
	 			<td>
	 				<a href="process_delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
	 			</td>
	 		</tr>
	 	<?php endforeach ?>
	 </table>
<?php require '../footerhtml.php'; ?>