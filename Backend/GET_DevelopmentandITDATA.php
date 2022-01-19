<?php
session_start();

/*
$Accounts = array(

    array(1,"JL Manrique","Level 2","ckxo","Ratings: 5","asdsadsa","Php 500.00"),
    array(2,"Juls Delos Reyes","Level 3","ckxo","Ratings: 5","asdsadasd","Php 600.00"),
    array(3,"JM Nepomuceno","Level 3","ckxo","Ratings: 5","dfgrtygeg","Php 700.00"),
    array(4,"Shawn Bueno","Level 3","ckxo","Ratings: 5","bvnjytj","Php 800.00"),
    array(5,"Allen Cortez","Level 5","ckxo","Ratings: 5","tryfhgf ","Php 1000.00")
    );


    echo json_encode($Accounts);
*/
//import database
require('../includes/databaseConnection.php');

function search(mysqli $conn,$tablename,$category,$column){

    $queryString = "SELECT * FROM $tablename WHERE UPPER( $column) LIKE UPPER('$category%')";
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




