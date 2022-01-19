<?php
session_start();
//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$category,$column){

    $queryString = "SELECT ServiceID,ServiceTitle,ServiceOwnerUserID,ServiceFilesPath,ServiceDescription,ServiceBasicPlanDescription,ServiceBasicPlanPrice,ServiceStandardPlanDescription,ServiceStandardPlanPrice,ServicePremiumPlanDescription,ServicePremiumPlanPrice,Service5StarRatings,Service4StarRatings,Service3StarRatings,Service2StarRatings,Service1StarRatings,ServiceCommentsTABLE,category FROM $tablename WHERE UPPER( $column) LIKE UPPER('$category%')";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
           // echo "<table style='border:1px solid black;  border-collapse: collapse;'>";
           // echo " <tr> <td>$row[ServiceID] |</td>  <td>$row[ServiceTitle]|</td>  <td>$row[ServiceOwnerUserID]|</td>  <td>$row[ServiceFilesPath]|</td>  <td>$row[ServiceDescription]|</td>  <td>$row[ServiceBasicPlanDescription]|</td>  <td>$row[ServiceBasicPlanPrice]|</td>  <td>$row[ServiceStandardPlanDescription]|</td> <td>$row[ServiceStandardPlanPrice]|</td> <td>$row[ServicePremiumPlanDescription]|</td> <td>$row[ServicePremiumPlanPrice]|</td> <td>$row[Service5StarRatings]|</td> <td>$row[Service4StarRatings]|</td> <td>$row[Service3StarRatings]|</td> <td>$row[Service2StarRatings]|</td> <td>$row[Service1StarRatings]|</td> <td> $row[ServiceCommentsTABLE]|</td> <td>$row[category]|</td> \n <tr>";
           // echo "</table>";

            //echo json_encode($rows);
            $data[] = $row;

            
        
        
        }
        //return $FinalResult;
        echo json_encode($data);
        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo','Development and IT','category');


?>




