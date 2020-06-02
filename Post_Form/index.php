<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<style type="text/css">
    .example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="example">
<div class="container">
    <div class="row">
    <h2>ZENT GROUP - PHP - THỰC HÀNH GỬI DỮ LIỆU DÙNG POST</h2>
        <form action="post.php" method="POST" role="form">


        <div class="form-group">
            <label>Mã Sinh viên</label>
            <input type="text" class="form-control" placeholder="Nhập mã sinh viên" name="mssv">
        </div>    

        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name">
        </div>

        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone">
        </div>


        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="radio">
  <label><input type="radio" name="gt" value = "Male" checked>Male</label>
</div>
<div class="radio">
  <label><input type="radio" name="gt" value = "Male" >Female</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="gt" value = "Male" disabled>Other</label>
</div>
        
      <div class="form-group">
  <label for="comment">Địa chỉ</label>
  <textarea class="form-control" rows="1" id="comment" placeholder="Nhập vào địa chỉ" name="adress"></textarea>
</div>

    <button type="submit" class="btn btn-primary">Đăng Nhập</button>
    </form>
    </div>
</div>
     
</div>
</body>
</html>