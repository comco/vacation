<?php

include 'config/db.php';

class Information {
	
	public static function getInformation($userID, $startDate, $endDate, $type, $status) 
	{
		//format the date according to DB requirements
		$startDate = date('Y-m-d', strtotime($startDate));
		$endDate = date('Y-m-d', strtotime($endDate));

		//var_dump($userID, $startDate, $endDate, $type, $status);
		try {
			$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
			$conn->beginTransaction();
		
			$sql = Information::SQL_request($userID, $startDate, $endDate, $type, $status);

			$sth = $conn->prepare($sql);
			$sth->execute();
		} catch(PDOException $e) {
			   echo 'ERROR: ' . $e->getMessage();
		}

		//$conn->commit();

		$vacations = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $vacations;
	}

	static function SQL_request($userID, $startDate, $endDate, $type, $status)
	{
		$sql = "SELECT * FROM `request` WHERE true";

		if($userID) {
			$sql .=	" AND `user_id` = " . $userID;
		}

		if ($startDate) {
			$sql .= " AND `start_date` >= " . "'$startDate'"; 
		}	

		if ( $endDate) {
			$sql .= " AND `end_date` <= " . "'$endDate'"; 
		}	

		if($type != 'all')	{
			$sql .=	" AND `type` = " . "'$type'";
		}

		if($status != 'all') {
			$sql .=	" AND `status` = " . "'$status'";
		}

		var_dump($sql);
		return $sql;
	}
	

}