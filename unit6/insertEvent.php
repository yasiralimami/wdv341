<?php

require 'connectPDO.php';

$event_name = $_POST['event_name']; // pull the value of the field
$event_description = $_POST['event_description'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];

$sql ="INSERT INTO wdv341_event (event_name,event_description,event_date,event_time ) VALUES (:eventName,:eventDesc,:eventDate,:eventTime )"; //sql language  sql Insert INTO table (fields)VALUes (...);

try{
$stmt = $conn->prepare($sql); //prepare the sql statment

$stmt-> bindparam(':eventName', $event_name);//bind
$stmt-> bindparam(':eventDesc', $event_description);
$stmt-> bindparam(':eventDate', $event_date);
$stmt-> bindparam(':eventTime', $event_time);   
$stmt->execute(); // process the SQL againt the database
    
}

catch(PDOException $e)
    {
    die();
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Event</title>
    
    
</head>
<body>
    
    
</body>
	</html>
