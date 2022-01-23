<?php
session_start();
require('Includes/databaseConnection.php');



$Email = $_POST["Username_TB"];
$Password = $_POST["Password_TB"];



$Query = "SELECT email, userpassword FROM accounts WHERE email = '$Email' && userpassword = '$Password' ";

$result = mysqli_query($conn,$Query);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
       
    while($row = mysqli_fetch_array($result)){

  
        $_SESSION["SessionName"] = $row['email'] ;
        $_SESSION["AccountType"]= $row['AccountType'];
  

 

    } // end of while
} else{echo"Login Failed";

}// end of if



 
 






         
if(isset($_SESSION["SessionName"]) && isset($_SESSION["AccountType"])){

    if($_SESSION["AccountType"] == "Freelancer"){
        header("Location: ../Freelancer_Dashboard.php");
        //session_regenerate_id(true);
        exit();

    } else if($_SESSION["AccountType"] == "Customer"){
        header("Location: ../ServicesOffered.php");
        //session_regenerate_id(true);
        exit();
    }
    }else{
        header("Location: ../ServicesOffered.php");
        //session_regenerate_id(true);
        exit();
    }



?>



           

            