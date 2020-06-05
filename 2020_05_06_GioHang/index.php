<?php 
	session_start();
	// session_destroy();
	if (!empty($_SESSION['cart'])) {
		$soluonggiohang = 0 ;
		foreach ($_SESSION['cart'] as  $value) {
			$soluonggiohang = $soluonggiohang+$value['soluong'];

// $soluonggiohang = $soluonggiohang+1; : chỉ tăng khi khác id
	}

}else {
	$soluonggiohang = 0 ;
}
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
		<h2 class="text-center">--PRODUCTS--</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Ten</th>
			<th>Tac gia</th>
			<th>Gia</th>
			<th></th>
		</tr>
	</thead>
	<!--  -->
<?php 

require('db.php') ;
	$query_list = mysqli_query ($con , "SELECT * FROM book" ) ;
	// 
	while ($row_list = mysqli_fetch_array($query_list)) {
 ?>
 <tbody>
		<tr>

			<td><?=$row_list['id']?></td>
			<td><?=$row_list['title']?></td>
			<td><?=  $row_list['authour']?></td>
			<td><?= number_format($row_list['price'])?></td>
			<td><a href="addcart.php?id=<?=$row_list['id']?>">Add cart</a></td>
				</tr>
	</tbody>
<?php } ?>

</table>
<div>

<a href="delcart.php" class="btn btn-danger">Xoa gio hang</a> 
</div>

<div>
<a href="listcart.php" class="btn btn-primary">Xem <?=$soluonggiohang ;?> san pham trong gio hang</a>
</div>

	
</div>
</body>
</html>