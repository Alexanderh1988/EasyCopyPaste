<?php
 
//local:
//$db = mysqli_connect('127.0.0.1', 'root', '', 'testdata');
 //remoto
$db = mysqli_connect('localhost','chs44206_hstech','k5m5[1vP^~ZD','chs44206_dbhstech');
 
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Prepare and execute SQL insert statement
//$stmt = $db->prepare("SELECT text FROM saved_text");
$stmt = $db->prepare("SELECT text FROM  saved_text");

 
    while($row = $stmt->fetch_assoc()) {
        $data[] = $row;
    }
 

// Close the connection
$db->close();

// Output the data as JSON
header('Content-Type: application/json');

echo  $data[];


$stmt->close();
$db->close();
?>
	