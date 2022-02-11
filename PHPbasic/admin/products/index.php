<?php require '../headhtml.php'; ?>
<?php
 require '../menu.php';
 require '../connect.php';
 $sql = "select
 	products.*,
 	manufacturers.name as manufacturer_name
 	from products join manufacturers on products.manufacturer_id = manufacturers.id";
 $result = mysqli_query($connect,$sql);
?>
<div>
	<div>
		<h1>Quản lý sản phẩm</h1>
		<a href="./form_insert.php">Thêm</a>
	</div>
	<div>
		<table border="1" width="100%">
			<tr>
				<th>Mã</th>
				<th>Tên</th>
				<th>Ảnh</th>
				<th>Giá</th>
				<th>Nhà sản xuất</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			<?php foreach ($result as $each): ?>
				<tr>
					<td><?php echo $each['id'] ?></td>
					<td><?php echo $each['name'] ?></td>
					<td>
						<img src="photos/<?php echo $each['photo'] ?>" height="400px">
					</td>
					<td><?php echo $each['price'] ?></td>
					<td><?php echo $each['manufacturer_name'] ?></td>
					<td>
						<a href="form_update.php?id=<?php echo $each['id'] ?>">Sửa</a>
					</td>
					<td>
						<a href="process_delete.php?id=<?php echo $each['id'] ?>">xóa</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>
<?php require '../footerhtml.php'; ?>