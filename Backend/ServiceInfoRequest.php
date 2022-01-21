<?php
session_start();


//GET ID from client side

$ReqServiceID = $_POST['ReqServiceID']; 
//echo $_POST['ReqServiceID'];

//$ReqServiceID = 6;



//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$ID){

    $queryString = "SELECT * FROM $tablename WHERE ServiceID = $ID";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if($resultCheck > 0){
 
        while($row = mysqli_fetch_array($result)){

            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);


        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo',$ReqServiceID);



?>