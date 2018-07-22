<?php
$servername = "localhost";
$username = "root";
$password = "";
$regno=$_GET['regno'];
$tablename=$_GET['table'];
$choice=$_GET['choice'];


// Create connection
$conn = new mysqli($servername, $username, $password,'internaldb');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "update  $tablename set $choice='nil' WHERE regno=$regno;";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>