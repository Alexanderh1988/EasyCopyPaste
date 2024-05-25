<?php

//local:
//$db = mysqli_connect('127.0.0.1', 'root', '', 'testdata');
//remoto
$db = mysqli_connect('localhost', 'chs44206_hstech', 'k5m5[1vP^~ZD', 'chs44206_dbhstech');

 //$id=isset( $_GET['id'])? $_GET['id']:"1";

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $db->prepare("SELECT etiquetas FROM saved_text");

if (!$stmt) {
    die("Statement preparation failed: " . $db->error);
}

// Execute the prepared statement
if (!$stmt->execute()) {
    die("Statement execution failed: " . $stmt->error);
}

// Bind result variables
$stmt->bind_result($text);

// Fetch results into associative array
$data = array();

while ($stmt->fetch()) {
    $data[] = $text;
}

// Output the data as JSON
echo json_encode($data);

// Uncomment for debugging purposes
// var_dump($data);

// Close the statement and connection
$stmt->close();
$db->close();
?>
