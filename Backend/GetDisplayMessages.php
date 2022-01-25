<?php
require('../includes/databaseConnection.php');
$id= $_POST['data'];

$QueryString = "SELECT * FROM inbox WHERE MessageID = '$id'";

$result = mysqli_query($conn,$QueryString);
$resultCheck = mysqli_num_rows($result);
$data = array();


if($resultCheck > 0){
       
    while($row = mysqli_fetch_array($result)){
        
        
        //$data[] = $row;

        


        $data[] = $row;

        
    }

     echo json_encode($data);


    
} else{
    echo" connection failed";
}

?>