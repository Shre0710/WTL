<?php

$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "shreya2";        

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $roll_no = $_POST["roll_no"];
    $mob_no = $_POST['mob_no'];
    $name = $_POST["name"];
    $department = $_POST['department'];

    $sql = "INSERT INTO students (roll_no, mob_no, name, department) VALUES ('$roll_no', '$mob_no', '$name', '$department')";


    echo "Roll No: $roll_no <br>";
    echo "Mob No: $mob_no <br>";
    echo "Name: $name <br>";
    echo "Department: $department <br>";
}

$conn->close();
?>
