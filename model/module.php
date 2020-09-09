<?php
class module {
	Protected $db;
	
	public function __construct() {
		$this->db = &$_SESSION["db"];
	}


}
?>