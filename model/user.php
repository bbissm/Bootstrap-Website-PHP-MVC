<?php
class user extends module{

	public function getUser()	
	{
		$array = [];
		$q = $this->db->query("SELECT * FROM tbl_user");

		while($res = $q->fetch_assoc()){
			$array[] = $res;
		}
		echo $this->db->error;
		return $array;
	}
}

?>