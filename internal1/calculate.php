<?php
$servername = "localhost";
$username = "root";
$password = "";
 $table=$_GET['table'];
 $regno=$_GET['regno'];
 
 
 $conn = new mysqli($servername, $username, $password, 'internaldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT ut1,ut2,ut3 FROM $table where regno=$regno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
	    while($row = $result->fetch_assoc()) {
           $tot=$row["ut1"]+$row["ut2"]+ $row["ut3"];
		   $internal=$tot/15;
		   echo "internal mark for the $regno and for subject $table  is ".$internal;
		   echo "<br>";
		   $sql = "UPDATE  $table SET im=$internal WHERE regno=$regno";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
}
		   
    } 
}



$conn->close();
?>
