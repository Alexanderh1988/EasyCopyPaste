<?php

//local:
//$db = mysqli_connect('127.0.0.1', 'root', '', 'testdata');
 //remoto
$db = mysqli_connect('localhost','chs44206_hstech','k5m5[1vP^~ZD','chs44206_dbhstech');

 
// Check connection 		 		
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve the text from the POST data
if(isset($_POST['text'])){

$text = (String)$_POST['text'];
$text= htmlspecialchars($text);


// Prepare and execute SQL insert statement
 $stmt = $db->prepare("UPDATE saved_text SET text=('$text') WHERE id=4");
//$stmt->bind_param("s", $text);

if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        echo "Insertion successful.";
    } else {
        echo "No rows inserted.";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->execute();	
$stmt->close();
}
else { echo 'No post';}

$db->close();
?>
	