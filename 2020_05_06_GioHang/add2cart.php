<?php 
	session_start();

	require ("db.php");
	// B1: Lấy mã sản phẩm được chọn
	$id = $_GET['MaSp'];

	if(isset($_SESSION['cart'][$id])) {
	$_SESSION['cart'][$id]['soluong']++;	
}else {
	$_SESSION['cart'][$id]['soluong'] =  1 ;
}

	header("Location: updatecart.php");

 ?>