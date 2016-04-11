<?php
class User{
	var $user_name;
	var $id;
	var $password;
	var $first_name;
	var $last_name;
	var $gender;
	var $birthdate;
	var $userCollection;

	private static $conn = Null;

	function __construct($id=-1) {
		if(self::$conn == Null) {
			self::$conn = new MongoClient();
			$db = self::$conn->cairopost;
			$this->userCollection = $db->user;
		}
	}
	
	function getUserById($id) {
		$query = 
			$this->userCollection
				->	find(array('_id' => $id,))
				->	limit(1);

		$result = array();
		foreach ($query as $key => $value) 
			{
				$result[] = $value;
			}
		return $result;
	}

	function insert() {
		$query = $this->userCollection->insert(
			[
				'user_name'  => $this->user_name,
				'unique'  => true,
				'sparse'  => true,
				'password'  => $this->password,
				'first_name'  => $this->first_name,
				'last_name'  => $this->last_name,
				'gender'  => $this->gender,
				'birthdate'  => $this->birthdate,
				
			]
		);

		$result = array();
		foreach ($query as $key => $value) 
			{
				$result[] = $value;
			}
		return $result;
	}
	function checklogin() {
		$query = $this->userCollection->find(
			[
				'user_name'  => $this->user_name,
				'password'  => $this->password,
			]
		);

		$result = array();
		foreach ($query as $key => $value) 
			{
				$result[] = $value;
			}
		return $result;
	}


	
}




?>