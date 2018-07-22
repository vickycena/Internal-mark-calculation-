<?php
$servername = "localhost";
$username = "root";
$password = "";
 $id=$_GET['id'];
 $name=$_GET['name'];
 $table=$_GET['table'];
 $ut1=$_GET['ut1'];
 $ut2=$_GET['ut2'];
 $ut3=$_GET['ut3'];
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE internaldb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} 
$conn = new mysqli($servername, $username, $password, 'internaldb');
// Check connection




$sql = "CREATE TABLE cs6501 (
regno INT(6) ,name VARCHAR(30),
 ut1 INT(3), ut2 INT(3), ut3 INT(3),
 im INT(2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
}

$sql = "CREATE TABLE cs6502 (
regno INT(6) ,name VARCHAR(30),
 ut1 INT(3), ut2 INT(3), ut3 INT(3),
 im INT(2)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
}
$sql = "CREATE TABLE cs6503 (
regno INT(6) ,name VARCHAR(30),
 ut1 INT(3), ut2 INT(3), ut3 INT(3),
 im INT(2)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
}
$tot=$ut1+$ut2+ $ut3;
$internal=$tot/15;
$sql = "INSERT INTO $table (regno, name,ut1,ut2,ut3,im)
VALUES ('$id', '$name','$ut1','$ut2','$ut3','$internal')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}

$conn->close();
?>