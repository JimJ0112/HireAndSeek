<?php
session_start();

//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$category,$column){

    $queryString = "SELECT * FROM $tablename";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();
    $Banner1;
    $Banner2;
    $Banner3;

    if($resultCheck > 0){
        // fetch sql data as array
        while($row = mysqli_fetch_array($result)){

            
            $datas = $datas = file_get_contents($row['Banner1Path']);
            $Banner1 = 'data:image/image/png;base64,'.base64_encode($datas);
            $row['Banner1Path'] = $Banner1;

            /*
            $datas2 = file_get_contents($row['Banner2Path']);
            $Banner2 = 'data:image/image/png;base64,'.base64_encode($datas2);
            $row['Banner2Path'] = $Banner1;

            $datas3 = file_get_contents($row['Banner3Path']);
            $Banner3 = 'data:image/image/png;base64,'.base64_encode($datas3);
            $row['Banner3Path'] = $Banner1;

            */

            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);


        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo','Graphics and Design','category');



?>




