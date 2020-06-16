<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Education</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH SẢN PHẨM</h2>
        <a href="product_add.php" class="btn btn-primary">Thêm mới</a>
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="Title">
              </div>

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="title" value="<?=$cate['title']?>">
              </div>

    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" name="description" value="<?=$cate['description']?>">
      </div>
    
      
    
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

   

    
    </div>


</body>
</html>
