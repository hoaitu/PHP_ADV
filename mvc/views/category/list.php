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
        <table class="table">
            <thead>
              <tr>
                <!-- <th>Mã sản phẩm</th> -->
                <th>Tên sản phẩm</th>
                <th>Mô tả</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) {?>
              <tr>
                <!-- <td><?= $row['MA_SP'] ?></td> -->
                <td><?= $row['title'] ?></td>
                <td><?= $row['description'] ?></td>
                <td>
                    <a href="index.php?mod=product&act=detail&MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-success">Detail</a> 
                     <a href="product_edit.php?MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-warning">Update</a>  
                    <a href="product_delete.php?MA_SP=<?= $row['MA_SP'] ?>" class="btn btn-danger">Delete</a>

                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>