<?php
$ServiceID =  $_POST['ServiceID'];

require('../includes/databaseConnection.php');







    $queryString = "SELECT * FROM servicesinfo WHERE ServiceID = $ServiceID ";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();


    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            

            $data[] = $row;

            
        }

         echo json_encode($data);


        
    } else{
        echo" connection failed";
    }









?>