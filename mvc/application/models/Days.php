<?php

include_once 'config/db.php';

class Days {
    public static function addDays($user_id, $type, $days) 
    {
//         var_dump($user_id, $type, $days);
        $conn = new PDO('mysql:host=' . DB_SERVER . ';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
        $conn->beginTransaction();

        $sql = 'INSERT INTO days_left (user_id, type, days) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE days = days + values(days)';
        $sth = $conn->prepare($sql);
        $sth->execute(array($user_id, $type, $days));

        $conn->commit();
    }
}

