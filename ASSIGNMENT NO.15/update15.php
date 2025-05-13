<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shreya2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE students (
    roll_no VARCHAR(20) PRIMARY KEY,
    mob_no VARCHAR(15),
    name VARCHAR(50),
    department VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
