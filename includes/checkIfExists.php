<?php

//include_once('databaseConnection.php');

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="hireandseektest";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("Connection failed");

$email = "jimmanrique12@gmail.com";
$tablename="signupverification";

function checkIfExists(mysqli $conn,$tablename,$email){

    $queryString = "SELECT email FROM $tablename WHERE email = $email";
    $result = mysqli_query($conn,$queryString);
    
    echo $result;

 


}

checkIfExists($conn,$tablename,$email);



?>