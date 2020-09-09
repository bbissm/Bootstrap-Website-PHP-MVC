<?php
	session_start();
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	include "model/model_register.php";
	
	class controller_register {
		public function insert($name,$age,$password) {
			if($name != "" && $age != "" && $password != "") {
				$obj = new model_register();
				$obj->insert_user($name,$age,$password);
				header("/");
			}
			
		}

		public function check_login($name,$password) {
			// echo $name." ".$password;
			$obj = new model_register();
			$user = $obj->check_user();
			// echo "<pre>";
			// print_r($user);
			foreach($user as $k){
				if($k["name"] == $name && $k["password"] == $password) {
					$_SESSION["loggedIn"] = 1;
					$_SESSION["userId"] = $k["user_id"];
					$_SESSION["nick"] = $k["name"];
					return $k;
				}
				// echo $k["name"]."<br>";
			}
		}

		public function insertImage($path,$userId,$title,$text) {

			if($path != "") {
				$obj = new model_register();
				$obj->insertImage($path,$userId,$title,$text);
			}
		}

		public function getImage($userId) {
			$obj = new model_register();
			$images = $obj->getImage($userId);
			return $images;
			
		}

		public function getLocation()
		{

			// foreach($_POST as $key => $value){	
			// 	parse_str($value, $params);
			// 	foreach($params as $k => $v){
			// 		$array[] = $v;
			// 	}
			// }

			file_put_contents("log.txt", "test3 ".$_POST["lang"]);

			// $array = $_POST;
			// file_put_contents("log.txt", "test2 ".print_r($array,true));

			// foreach ($array as $k) {

				echo json_encode($_POST["lat"]);
			    // echo $k["name"];
			// }
			// return "test";
		}
	}

?>