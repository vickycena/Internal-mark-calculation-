<?php
$servername = "localhost";
$username = "root";
$password = "";
 $table=$_GET['table'];
 
 
 $conn = new mysqli($servername, $username, $password, 'internaldb');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table> <tr><th>id:</th><th> - Name: </th><th> - ut1: </th><th> - ut2: </th><th> - ut3: </th><th> - internal: </th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["regno"]. "</td><td>" . $row["name"].  "</td><td>" . $row["ut1"].  "</td><td>" . $row["ut2"].  "</td><td>" . $row["ut3"].  "</td><td>" . $row["im"].  "</td><tr><br>";
    } 
}
$conn->close();
?>
