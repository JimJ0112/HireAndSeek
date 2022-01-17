<?php

include_once('databaseConnection.php');


function checkIfExists(mysqli $conn,$tablename,$auth,$column){

    $queryString = "SELECT $column FROM $tablename WHERE $column = '$auth'";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    /*
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $FinalResult =  $row[$column];
        }
    }

    return $FinalResult;*/
    return $resultCheck;
}



function searchSimilar(mysqli $conn,$tablename,$title,$column){

    $queryString = "SELECT $column FROM $tablename WHERE $column = '$auth'";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $FinalResult =  $row[$column];
        }
    }

    return $FinalResult;

}



?>