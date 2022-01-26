<?php
session_start();
require('Includes/databaseConnection.php');

$username= $_POST['data'];


$SelectQuery = "Select * FROM inbox WHERE SenderEmail = '$username'";
//$SelectQuery = "Select * FROM inbox ";

//echo $SelectQuery;


$result = mysqli_query($conn,$SelectQuery);
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