<?php

include_once('databaseConnection.php');


function checkIfExists(mysqli $conn,$tablename,$auth,$column){

    $queryString = "SELECT $column FROM $tablename WHERE UPPER($column) = UPPER('$auth')";
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

    $queryString = "SELECT ServiceID,$column FROM $tablename WHERE UPPER( $column) LIKE UPPER('$title%') LIMIT 10";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);

    /*
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            $FinalResult =  $row[$column];
        }
        return $FinalResult;
        
    } else{
        echo" does not exist";
    }

*/
if($resultCheck > 0){

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['ServiceID'] ;
        echo " <a href='#' onclick='ButtonClicked($id)' class='ServiceID'>$row[$column] \n <a>";
    }
    
    
} else{
    echo" does not exist";
}
    


}



?>