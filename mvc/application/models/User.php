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
	
	public static function saveUser($name, $email, $username, $password, $type) 
	{
		
		$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
		$conn->beginTransaction();

		$sql = 'INSERT INTO user (username, password, name, email, is_admin) VALUES (?, ?, ?, ?, ?)';
		$sth = $conn->prepare($sql);
		$sth->execute(array($username, $password, $name, $email, $type));

		$conn->commit();
	}

}