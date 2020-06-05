<?php 
	session_start();
	if (isset($_POST['capnhat']))
	{
		unset($_POST['capnhat']);
		foreach ($_POST  as $k => $v) {

			$_SESSION['cart'][$k]['soluong']= $v ;
		}
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
		<h2 class="text-center">--UPDATE--</h2>
		<a href="index.php" class="btn btn-success">Home >>></a>
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
	
			<form method="post" action="updatecart.php">

	<!--  -->
<?php 
$tongtien = 0;
foreach ($_SESSION['cart'] as $value) {

 ?>
 <tbody>
		<tr>
			
			<td><?=$value['ten']?></td>

			<td>
				<a href="add2cart.php?MaSp=<?=$value['id']?>" class="btn btn-primary">+</a>
						<?=$value['soluong']?>
						
				<a href="delete.php?MaSp=<?=$value['id']?>" class="btn btn-warning">-</a>
			</td>

			<td><?=$value['gia']?></td>

			<td><a href="removecart.php?id=<?=$value['id']?>">remove cart</a></td>
			<td align="right" ><?=$thanhtien = $value['soluong']*$value['gia']?></td>
			</tr>
	
<?php
$tongtien = $tongtien+$thanhtien ;
 } ?>


<thead>
					<tr>
						<td colspan="4">Tong tien</td>
						<td align="right"><?= number_format($tongtien) ?></td>
					</tr>
</thead>
</tbody>
</table>


	<br/>
	 <a href="listcart.php"><input type="submit" name="capnhat" value="capnhat"></a>
 </form>
</div>
</body>
</html>