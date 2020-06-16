<?php 
	require_once('models/Category.php');
	class AuthorController{
		var $cate_model;

		function __construct(){
			$this->cate_model = new Author();
		}

		public function list(){
			$auth = array();
			$auth = $this->cate_model->All();
			require_once('views/author/list.php');
		}
		public function detail(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->cate_model->find($id);
		
			require_once('views/author/detail.php');
		}

		public function add(){
			echo "<br> Thêm mới author";
				require_once('views/author/add.php');
		}

		public function create($data){
			$auth = array();
			$auth['name'] = $_POST['name'];
			$auth['email'] = $_POST['email'];
			$auth = $this->cate_model->create($auth);
				require_once('views/author/add.php');
				if ($status == true) {
					header('Location: ?mod=category');
				

		}else {
			header('Location: ?mod=author&act=add');
		}
	}
		//
		public function edit(){
			$id = isset($_GET['id'])?$_GET['id']:0;
			$product = $this->cate_model->edit($id);
		
			require_once('views/author/edit.php');
		}
		//

public function update($data){
			$auth = array();
			$auth['name'] = $_POST['name'];
			$auth['email'] = $_POST['email'];
			$auth =	$this->cate_model->update($auth);
			
				if ($status == true) {
					header('Location: ?mod=author');
				

		}else {
			header('Location: ?mod=author&act=update&id='.$auth['id]');
		}
		//


	}

	public function delete() {
			$id = isset($_GET['id'])?$_GET['id']:0;
			$auth = $this->cate_model->delete($id);
			
			if ($status == true) {
					header('Location: ?mod=author');

		}
		}
		}

 ?>