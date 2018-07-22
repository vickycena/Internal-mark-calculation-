<?php
$servername = "localhost";
$username = "root";
$password = "";
 $regno=$_GET['regno'];
 $table=$_GET['table'];
 $ut=$_GET['choice'];
 $mark=$_GET['marks'];

 
$conn = new mysqli($servername, $username, $password, 'internaldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE  $table SET $ut=$mark WHERE regno=$regno";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>