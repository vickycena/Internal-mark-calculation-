<?php
$servername = "localhost";
$username = "root";
$password = "vicky";
 $table=$_GET['table'];
 $regno=$_GET['regno'];
 
 
 $conn = new mysqli($servername, $username, $password, 'internaldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT im FROM $table where regno=$regno ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "internal mark " . $row["im"];
		echo "<br>";
    } 
}
$conn->close();
?>
