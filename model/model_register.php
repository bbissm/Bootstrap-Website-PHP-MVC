<?php
	class model_register {
		public function insert_user($name,$age,$password) {
			$query = "INSERT INTO tbl_user (name,age,password) VALUES ('$name','$age','$password')";
			$q = $_SESSION["db"]->db->query($query);
			if($q) {
				header("../");
			}else{
				echo "wrong";
			}
		}
		public function check_user() {
			$query = "SELECT * FROM tbl_user";
			$q = $_SESSION["db"]->query($query);
			while($res = $q->fetch_assoc()){
				$array[] = $res;
			}
			return $array;
		}
		public function insertImage($path,$userId,$title,$text) {
			$query = "INSERT INTO tbl_image (path,user_fk,title,text) VALUES ('$path','$userId','$title','$text')";
			$_SESSION["db"]->query($query);
		}
		public function getImage($userId) {
			$array = [];
			if($userId != ""){
				$query = "SELECT * FROM tbl_image WHERE user_fk=".$userId;
				$q = $_SESSION["db"]->query($query);
			}else{
				$query = "SELECT * FROM tbl_image";
				$q = $_SESSION["db"]->query($query);
			}
			while($res = $q->fetch_assoc()){
				$array[] = $res;
			}
			return $array;
		}
	}
?>