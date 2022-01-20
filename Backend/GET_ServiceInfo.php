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

    $queryString = "SELECT * FROM $tablename";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();

    if($resultCheck > 0){
        // fetch sql data as array
        while($row = mysqli_fetch_array($result)){

            $data[] = $row;
   

            
        
        
        }

        echo json_encode($data);


        
    } else{
        echo" does not exist";
    }





}

search($conn,'servicesinfo','Graphics and Design','category');



?>




