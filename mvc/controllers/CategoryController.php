<?php 
	require_once('models/Category.php');
	class CategoryController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Category();
		}

		public function list(){
			$data = array();
			$data = $this->cate_model->All();
			require_once('views/category/list.php');
		}
		public function detail(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->cate_model->find($id);
			var_dump($cate);
			require_once('views/category/detail.php');
		}

		public function add(){
			echo "<br> Thêm mới category";
				require_once('views/category/add.php');
		}

		public function create($data){
			$data = array();
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$status = $this->cate_model->create($data);
				require_once('views/category/add.php');
				if ($status == true) {
					header('Location: ?mod=category');
				

		}else {
			header('Location: ?mod=category&act=add');
		}
	}
		//
		public function edit(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->cate_model->edit($id);
			var_dump($cate);
			require_once('views/category/edit.php');
		}
		//

public function update($data){
			$data = array();
			$data['title'] = $_POST['title'];
			$data['description'] = $_POST['description'];
			$status =	$this->cate_model->update($data);
			
				if ($status == true) {
					header('Location: ?mod=category');
				

		}else {
			header('Location: ?mod=category&act=update&id='.$data['id]');
		}
		//


	}

	public function delete() {
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->cate_model->delete($id);
			
			if ($status == true) {
					header('Location: ?mod=category');
				

		}else {
			header('Location: ?mod=category&act=delete&id='.$data['id]');
		}
		}

 ?>