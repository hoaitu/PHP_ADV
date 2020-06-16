<?php 
	require_once('Connection.php');
	class Author{
		var $connection;

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM author";

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}
		//
		function find($id){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM author WHERE id = " .$id;
		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    $product = $result->fetch_assoc();

		    return $product;
		}

		function create ($data){
		    // Cau lenh truy van co so du lieu
		    // INSERT INTO categoris(title , description)  VALUES ('".$title."','".$description."');";
		    $query = "INSERT INTO author (name , email) VALUES('".$data['name']."','".$data['email']."');";
		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    $product = $result->fetch_assoc();

		    return $product;
		}



	}
 ?>