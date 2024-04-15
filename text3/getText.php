<?php
 
//local:
//$db = mysqli_connect('127.0.0.1', 'root', '', 'testdata');
 //remoto
$db = mysqli_connect('localhost','chs44206_hstech','k5m5[1vP^~ZD','chs44206_dbhstech');
 

$stmt = $db->prepare("SELECT text FROM saved_text WHERE id=3");

// Execute the prepared statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($text);

// Fetch results into associative array
$data = array();
while ($stmt->fetch()) {
 // Store the fetched text into the $data array
 //   $data[] = str_replace("<br>", "", $text);
 $data[] = $text;
}
 

// Output the data (you may need to format this according to your needs)
foreach ($data as $text) {
   // echo $text . "<br>";
    echo $text;
	}



//$stmt->close();
$db->close();
?>
	