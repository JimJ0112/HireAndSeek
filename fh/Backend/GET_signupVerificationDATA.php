<?php

require('../includes/databaseConnection.php');





function getDatas(mysqli $conn,$tablename){

    $queryString = "SELECT * FROM $tablename";
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





}

getDatas($conn,'signupverification');



?>


