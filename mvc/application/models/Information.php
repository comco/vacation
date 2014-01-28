<?php

include 'config/db.php';
include 'assets/DateManagement.php';

class Information {
	
	public static function getInformation($userID, $startDate, $endDate, $type, $status, $order_by = null, $order_type = ' DESC' ) 
	{
		//format the date according to DB requirements
		if($startDate) {
			$startDate = date('Y-m-d', strtotime($startDate));
		}
		if($endDate) {
			$endDate = date('Y-m-d', strtotime($endDate));
		}

		//var_dump($userID, $startDate, $endDate, $type, $status);
		try {
			$conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
			$conn->beginTransaction();
		
			$sql = Information::SQL_request($userID, $startDate, $endDate, $type, $status);

			if($order_by) {
				$sql .= 'ORDER BY `request`.' . $order_by . " $order_type";
			}

			$sth = $conn->prepare($sql);
			$sth->execute();
		} catch(PDOException $e) {
			   echo 'ERROR: ' . $e->getMessage();
		}

		
		$sql_information = $sth->fetchAll(PDO::FETCH_ASSOC);

		$vacations = array();
		foreach ($sql_information as $key => $row) {
			$row['duration'] = DateManagement::getWorkingDays($row['start_date'], $row['end_date'], array());
			$vacations[$key] = $row;
		}
		
		//var_dump($vacations);
		return $vacations;
	}



	static function SQL_request($userID, $startDate, $endDate, $type, $status)
	{
		$sql = "SELECT * FROM `request` JOIN `user` ON `request`.`user_id` = `user`.`user_id` WHERE true";

		if($userID) {
			$sql .=	" AND `request`.`user_id` = " . "'$userID'";
		}

		if ($startDate) {
			$sql .= " AND `request`.`start_date` >= " . "'$startDate'"; 
		}	

		if ( $endDate) {
			$sql .= " AND `request`.`end_date` <= " . "'$endDate'"; 
		}	

		if($type != 'all')	{
			$sql .=	" AND `request`.`type` = " . "'$type'";
		}

		if($status != 'all') {
			$sql .=	" AND `request`.`status` = " . "'$status'";
		}

// 		var_dump($sql);
		return $sql;
	}
	

}
