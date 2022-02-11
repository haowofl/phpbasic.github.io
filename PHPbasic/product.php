<?php require 'headhtml_user.php' ?>
<?php require 'headweb.php'; ?>
<?php
	$id = $_GET['id'];
	require 'admin/connect.php';
	$sql = "select *from products where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
?>
<div class="products">	
	<img src="admin/products/photos/<?php
	 echo $each['photo'];?>" height = "300px" width = "400px">
	<h3>
		<?php echo $each['name'] ?>
	</h3>
	<p>
		<?php echo $each['price'] ?>
	</p>
	<p>
		<?php echo $each['description'] ?>
	</p>
</div>
<?php require 'admin/footerhtml.php' ?>