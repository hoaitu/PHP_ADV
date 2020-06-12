<?php 
/**
 * 
 */

class baiViet 
{

		var $title ;
		var $url ;
		var $descrip ;
		var $content ;
	
	function __construct()
	{
		$this->title = "Báo mới";
		$this->url = "https://i.pinimg.com/236x/c3/2a/85/c32a851ab40871cc51de03be2ded8a1a--jiff-pom-chien-boo.jpg";
		$this->descrip = "557 hình ảnh đẹp nhất về chó con | Chó con, Động vật, Stuffed animals";
		$this->content = "123 cjgot";
		echo "Tiêu đề: ".$this->title."<br/>";
		echo "Đường dẫn: ".$this->url."<br/>";
		echo "Mô tả: ".$this->descrip."<br/>";
		echo "Nội dung: ".$this->content;
		echo "<hr/>";
	}
	}


$baiViet = new baiViet();
//////////////////
class danhMuc 
{
		var $ten ;
		var $duongDan ;
		var $danhMucCha ;
		var $anh ;
		var $mota ;

	
	function __construct()
	{
		$this->ten = "Truyện tranh";
		$this->duongDan = "https://i.pinimg.com/236x/c3/2a/85/c32a851ab40871cc51de03be2ded8a1a--jiff-pom-chien-boo.jpg";
		$this->danhMucCha = "Danh mục sách";
		$this->anh = "1.png"  ;
		$this->mota = "danh mục chứa truyện tranh mới năm 2020";
		echo "Tên: ".$this->ten."<br/>";
		echo "Đường dẫn: ".$this->duongDan."<br/>";
		echo "Danh mục: ".$this->danhMucCha."<br/>";
		echo "Ảnh: ".$this->anh."<br/>";
		echo "Mô tả: ".$this->mota."<br/>";
		echo "<hr/>";
	}

}
$danhMuc = new danhMuc();
///////////////////
class nguoiDung 
{
		var $ten ;
		var $email ;
		var $matKhau ;
		var $anhDaiDien ;
	
	function __construct()
	{
		$this->ten = "Tú";
		$this->email = "hoaitugl@gmail.com";
		$this->matKhau = "123123";
		$this->anhDaiDien = "1.png";
		echo "Tên người dùng: ".$this->ten."<br/>";
		echo "email : ".$this->email."<br/>";
		echo "Mật khẩu: ".$this->matKhau."<br/>";
		echo "Ảnh đại diện: ".$this->anhDaiDien."<br/>";
		echo "<hr/>";
	}
	}

// }
$nguoiDung = new nguoiDung();


 ?>
 <!-- Sau đó khởi tạo 3 đối tượng, gán thông tin cho các thuộc tính và gọi phương thức in thông tin cho từng đối tượng. -->