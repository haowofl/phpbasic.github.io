<ul>
	<li>
		<a href="../manufacturers">
				Quản Lý nha sản xuất
		</a>
	</li>
</ul>

<ul>
	<li>
		<a href="../products">
				Quản Lý sản phẩm
		</a>
	</li>
</ul>

<?php 
	if(isset($_GET['erro'])){
?> 
<span style="color: red;">
	<?php echo $_GET['erro'] ?>
</span>
<?php
	}
?>

<?php 
	if(isset($_GET['succes'])){
?> 
<span style="color: green;">
	<?php echo $_GET['succes'] ?>
</span>
<?php
	}
?>