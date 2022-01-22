<?php
session_start();

//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$category,$column){

    $queryString = "SELECT * FROM $tablename";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if($resultCheck > 0){
        // fetch sql data as array
        while($row = mysqli_fetch_array($result)){

            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);


        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo','Graphics and Design','category');



?>




