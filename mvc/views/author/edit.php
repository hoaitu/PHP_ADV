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
        <h2 align="center">Edit nguoi dung</h2>
       
        <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="Title">
              </div>

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="title" value="<?=$auth['name']?>">
              </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" name="description" value="<?=$auth['email']?>">
      </div>
    
      
    
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

   

    
    </div>


</body>
</html>
