<?php
session_start();


//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename){

    $queryString = "SELECT * FROM $tablename ";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if($resultCheck > 0){
        // fetch sql data as array
        while($row = mysqli_fetch_array($result)){
           // echo "<table style='border:1px solid black;  border-collapse: collapse;'>";
           // echo " <tr> <td>$row[ServiceID] |</td>  <td>$row[ServiceTitle]|</td>  <td>$row[ServiceOwnerUserID]|</td>  <td>$row[ServiceFilesPath]|</td>  <td>$row[ServiceDescription]|</td>  <td>$row[ServiceBasicPlanDescription]|</td>  <td>$row[ServiceBasicPlanPrice]|</td>  <td>$row[ServiceStandardPlanDescription]|</td> <td>$row[ServiceStandardPlanPrice]|</td> <td>$row[ServicePremiumPlanDescription]|</td> <td>$row[ServicePremiumPlanPrice]|</td> <td>$row[Service5StarRatings]|</td> <td>$row[Service4StarRatings]|</td> <td>$row[Service3StarRatings]|</td> <td>$row[Service2StarRatings]|</td> <td>$row[Service1StarRatings]|</td> <td> $row[ServiceCommentsTABLE]|</td> <td>$row[category]|</td> \n <tr>";
           // echo "</table>";

            //echo json_encode($rows);
            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);

        //return $FinalResult;
       // var_dump($data);
       /*
       $ToShip = array();
        foreach($data as $row){
            echo $row['ServiceID'].$row['ServiceID'].$row['ServiceTitle'].$row['ServiceOwnerUserID'].$row['ServiceFilesPath'].$row['ServiceDescription'].$row['ServiceBasicPlanDescription'].$row['ServiceBasicPlanPrice'].$row['ServiceStandardPlanDescription'].$row['ServiceStandardPlanPrice'].$row['ServicePremiumPlanDescription'].$row['ServicePremiumPlanPrice'].$row['Service5StarRatings'].$row['Service4StarRatings'].$row['Service3StarRatings'].$row['Service2StarRatings'].$row['Service1StarRatings'].$row['ServiceCommentsTABLE'].$row['category'];
            
        }
        */
        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo');



?>




