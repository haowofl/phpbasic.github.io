<?php require '../headhtml.php'; ?>
	<?php 
	require '../menu.php'
	 ?>
	<form method="POST" action="process_insert.php">
	<div>
		<p>Tên</p>
		<input type="tex" name="name">
	</div>
	<div>
		<p>Địa chỉ</p>
		<textarea name="address"></textarea>
	</div>
	<div>
		<p>Số điện thoại</p>
		<input type="tex" name="number_phone">
	</div>
	<div>
		<p>Ảnh</p>
		<input type="tex" name="photo">
	</div>
	<div>
		<button>Thêm</button>
	</div>
</form>
<?php require '../footerhtml.php'; ?>