<?php 
	session_start();

	require ("db.php");
	// B1: Lấy mã sản phẩm được chọn
	$id = $_GET['MaSp'];
	// Kiểm tra xem đã có trong giỏ hàng chưa? 
	if($_SESSION['cart'][$id]['soluong'] > 1) {
		
			$_SESSION['cart'][$id]['soluong']--;			
}else {
	unset($_SESSION['cart'][$id]) ;
}
	header("Location: updatecart.php");
 ?>