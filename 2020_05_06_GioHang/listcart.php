<?php 
	session_start();
	?>
	<!--  -->
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ Hàng</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center">--LIST PRODUCTS--</h2>
		<a href="index.php" class="btn btn-success">Home >>></a>
		<div class="wrap">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Ten</th>
			<th>So luong</th>
			<th>Gia</th>
			<th>Remove</th>
			<th>Thanh Tien</th>
		</tr>
	</thead>
	
			

	<!--  -->
<?php 
$tongtien = 0;
foreach ($_SESSION['cart'] as $value) {


 ?>
 <tbody>
		<tr>
			<td><?=$value['ten']?></td>
			<td><?=$value['soluong']?></td>
			<td><?=$value['gia']?></td>
			<td><a href="removecart.php?id=<?=$value['id']?>">remove cart</a></td>
			<td>Thanh tien: <?=$thanhtien = $value['soluong']*$value['gia']?></td>
			</tr>
	</tbody>
<?php
$tongtien = $tongtien+$thanhtien ;
 } ?>
</table>
</div>

<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>Tong tien = <?=$tongtien?></td>

	<br/>



	<a href="updatecart.php" class="btn btn-warning">Cap nhat gio hang</a>
	<a href="thanhtoan.php" class="btn btn-default">Thanh toan gio hang</a>
	</div>
</body>
</html>