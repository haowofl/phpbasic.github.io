<?php
	require 'admin/connect.php';
	$sql = "select *from products";
	$result = mysqli_query($connect,$sql);
?>

<div id="conten">
	<div>
		<div></div>
		<div class="container">
			<div class="products">
				<?php foreach ($result as $each) { ?>
					<div>
						<img src="admin/products/photos/<?php 
						echo $each['photo'];
						?>" height = "300px" width = "400px">
						<h3><?php echo $each['name'] ?></h3>
						<p><?php echo $each['price'] ?></p>
						<a href="product.php?id=<?php echo $each['id'] ?>">Xem chi tiết>>></a>
					</div>
				<?php } ?> 
			</div>
		</div>
	</div>
</div>