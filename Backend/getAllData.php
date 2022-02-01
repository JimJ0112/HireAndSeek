<?php
session_start();


require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$category,$column){

    $queryString = "SELECT * FROM $tablename";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);

   
        
echo $resultCheck;




}

search($conn,'servicesinfo','Development and IT','category');



?>




