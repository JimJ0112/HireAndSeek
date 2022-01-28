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
    $Banner1;
    $Banner2;
    $Banner3;


    if($resultCheck > 0){
 
        while($row = mysqli_fetch_array($result)){

            $datas = $datas = file_get_contents($row['Banner1Path']);
            $Banner1 = 'data:image/image/png;base64,'.base64_encode($datas);
            $row['Banner1Path'] = $Banner1;

            
            $datas2 = file_get_contents($row['Banner2Path']);
            $Banner2 = 'data:image/image/png;base64,'.base64_encode($datas2);
            $row['Banner2Path'] = $Banner2;

            $datas3 = file_get_contents($row['Banner3Path']);
            $Banner3 = 'data:image/image/png;base64,'.base64_encode($datas3);
            $row['Banner3Path'] = $Banner3;

            



            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);


        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo',$ReqServiceID);



?>