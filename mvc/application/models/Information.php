<?php

include 'config/db.php';

class Information {
	
	public static function getInformation($userID, $startDate, $endDate, $type) 
	{
		//format the date according to DB requirements
		$startDate = date('Y-m-d', strtotime($startDate));
		$endDate = date('Y-m-d', strtotime($endDate));

		var_dump($userID, $startDate, $endDate, $type);
		$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
		$conn->beginTransaction();
		
		if($type != 4)	{
			$sql = 'SELECT *
					FROM `request`
					WHERE `user_id` = ?
						AND `start_date` > ?
						AND `end_date` < ?
						AND `type` = ?';

			$sth = $conn->prepare($sql);
			$sth->execute(array($userID, $startDate, $endDate, $type));
		}
		else { // select all types of vacations
			$sql = 'SELECT *
					FROM `request`
					WHERE `user_id` = ?
						AND `start_date` > ?
						AND `end_date` < ?';

			$sth = $conn->prepare($sql);
			$sth->execute(array($userID, $startDate, $endDate));
		}

		//$conn->commit();

		$vacations = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $vacations;
	}
	

}