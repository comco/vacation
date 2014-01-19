<?php

include 'config/db.php';

class User {
	
	public static function checkUser($username, $password)
	{
		try {
			$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
			$sql     = "SELECT * FROM user WHERE username = ? AND password = ?";
			$query   = $conn->prepare($sql);
			$result = $query->execute(array($username, $password));
			$arr = $query->fetch(PDO::FETCH_ASSOC);
			
// 			var_dump($arr);
			
			return $arr;
			
		   } catch(PDOException $e) {
			   echo 'ERROR: ' . $e->getMessage();
		}
	}

}