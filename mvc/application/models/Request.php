<?php

include 'config/db.php';

class Request {
	
	public static function saveRequest($userID, $status, $startDate, $endDate, $type, $comment) 
	{
		//format the date according to DB requirements
		$startDate = date('Y-m-d', strtotime($startDate));
		$endDate = date('Y-m-d', strtotime($endDate));

		var_dump($userID, $status, $startDate, $endDate, $type, $comment);
		$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
		$conn->beginTransaction();
		
				
		$sql = 'INSERT INTO request (user_id, status, start_date, end_date, type, comment) VALUES (?, ?, ?, ?, ?, ?)';
		$sth = $conn->prepare($sql);
		$sth->execute(array($userID, $status, $startDate, $endDate, $type, $comment));

		$conn->commit();
	}
	

}